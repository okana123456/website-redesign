<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '_career_assessment.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';
require_once 'phpmailer/Exception.php';

career_boot_session();

function career_start_redirect($status) {
    header('Location: jobs.php?status=' . urlencode($status) . '#assessment');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    career_start_redirect('assessment_required');
}

if (!career_valid_form_csrf($_POST['csrf_token'] ?? '')) {
    career_start_redirect('invalid');
}

if (!empty($_POST['website'])) {
    career_start_redirect('spam');
}

$email = filter_var(career_normalize_email($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$role = trim(strip_tags((string) ($_POST['role'] ?? '')));
$consent = $_POST['assessment_consent'] ?? '';
$allowedRoles = [
    'Field Enumerator',
    'Field Supervisor',
    'Research Assistant',
    'Data Analyst',
    'Transcriber',
    'Sales or Business Development',
    'Systems Developer or Support',
    'Other advertised role',
];

if (!$email || !in_array($role, $allowedRoles, true) || $consent !== 'yes') {
    career_start_redirect('assessment_missing');
}

if (career_storage_dir() === false) {
    career_start_redirect('assessment_storage');
}

if (!career_verification_rate_allowed()) {
    career_start_redirect('verification_rate');
}

$now = time();
$emailKey = career_email_key($email);
$attempt = career_refresh_attempt_status(career_load_attempt_by_key($emailKey));
$purpose = 'new_attempt';

if ($attempt) {
    $status = $attempt['status'] ?? '';
    if ($status === 'active' && $now <= ($attempt['expires_at'] ?? 0)) {
        $purpose = 'resume_test';
    } elseif ($status === 'passed' && $now <= ($attempt['application_expires_at'] ?? 0)) {
        $purpose = 'resume_application';
    } elseif (($attempt['next_eligible_at'] ?? 0) > $now) {
        $_SESSION['career_email_key'] = $emailKey;
        career_start_redirect('assessment_cooldown');
    }

    if (($attempt['verification_sent_at'] ?? 0) > ($now - 60)) {
        $_SESSION['career_email_key'] = $emailKey;
        career_start_redirect('verification_wait');
    }
}

if ($purpose === 'new_attempt') {
    $attempt = [
        'email' => $email,
        'email_key' => $emailKey,
        'role' => $role,
        'status' => 'pending_verification',
        'created_at' => $now,
    ];
} else {
    $attempt['role'] = $attempt['role'] ?? $role;
}

$verificationCode = (string) random_int(100000, 999999);
$attempt['verification_purpose'] = $purpose;
$attempt['verification_hash'] = password_hash($verificationCode, PASSWORD_DEFAULT);
$attempt['verification_expires_at'] = $now + 600;
$attempt['verification_failures'] = 0;
unset($attempt['verification_sent_at']);

if (!career_save_attempt($attempt)) {
    career_start_redirect('assessment_storage');
}

$configPath = __DIR__ . '/mail-config.php';
$mailConfig = file_exists($configPath) ? require $configPath : [
    'host' => getenv('RUDDER_MAIL_HOST'),
    'username' => getenv('RUDDER_MAIL_USERNAME'),
    'password' => getenv('RUDDER_MAIL_PASSWORD'),
    'port' => getenv('RUDDER_MAIL_PORT') ?: 465,
];

if (empty($mailConfig['host']) || empty($mailConfig['username']) || empty($mailConfig['password'])) {
    unset($attempt['verification_hash'], $attempt['verification_expires_at'], $attempt['verification_failures'], $attempt['verification_purpose']);
    career_save_attempt($attempt);
    career_start_redirect('mail_config');
}

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = $mailConfig['host'];
    $mail->SMTPAuth = true;
    $mail->Username = $mailConfig['username'];
    $mail->Password = $mailConfig['password'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = (int) $mailConfig['port'];
    $mail->setFrom($mailConfig['username'], 'Rudder Research and Data Analytics LTD Careers');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'Your careers assessment verification code';
    $mail->Body = '
        <div style="font-family:Arial,sans-serif;max-width:620px;margin:auto;color:#0A2540">
            <h2>Verify your email address</h2>
            <p>Use the code below to continue to the Rudder Research and Data Analytics LTD careers assessment.</p>
            <p style="font-size:30px;font-weight:700;letter-spacing:8px;background:#eef5f9;padding:18px;text-align:center">' . htmlspecialchars($verificationCode) . '</p>
            <p>This code expires in 10 minutes. Do not share it with anyone.</p>
            <p>If you did not request this code, you can ignore this message.</p>
        </div>';
    $mail->AltBody = "Your Rudder Research and Data Analytics LTD careers verification code is {$verificationCode}. It expires in 10 minutes.";
    $mail->send();

    career_verification_rate_allowed(true);
    $attempt['verification_sent_at'] = time();
    career_save_attempt($attempt);
    $_SESSION['career_email_key'] = $emailKey;
    unset($_SESSION['career_verified_key'], $_SESSION['career_application_token']);
    career_start_redirect('verification_sent');
} catch (Exception $exception) {
    unset($attempt['verification_hash'], $attempt['verification_expires_at'], $attempt['verification_failures'], $attempt['verification_purpose']);
    career_save_attempt($attempt);
    career_start_redirect('verification_mail');
}
