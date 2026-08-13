<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$configPath = __DIR__ . '/mail-config.php';
$mailConfig = file_exists($configPath) ? require $configPath : [
    'host' => getenv('RUDDER_MAIL_HOST'),
    'username' => getenv('RUDDER_MAIL_USERNAME'),
    'password' => getenv('RUDDER_MAIL_PASSWORD'),
    'port' => getenv('RUDDER_MAIL_PORT') ?: 465,
    'to_email' => getenv('RUDDER_MAIL_TO') ?: getenv('RUDDER_MAIL_USERNAME'),
    'to_name' => getenv('RUDDER_MAIL_TO_NAME') ?: 'Rudder Data',
    'cc_email' => getenv('RUDDER_MAIL_CC'),
    'cc_name' => getenv('RUDDER_MAIL_CC_NAME') ?: '',
];

function clean_job_value($value) {
    return trim(strip_tags((string) $value));
}

function redirect_job_status($status) {
    header('Location: jobs.php?status=' . urlencode($status));
    exit();
}

function get_job_rate_file($email) {
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $safeKey = sha1(strtolower($email) . '|' . $ip);
    return rtrim(sys_get_temp_dir(), DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'rrda_job_' . $safeKey . '.lock';
}

function check_job_rate_limit($email) {
    $rateFile = get_job_rate_file($email);
    $cooldownSeconds = 600;

    if (file_exists($rateFile) && (time() - filemtime($rateFile)) < $cooldownSeconds) {
        redirect_job_status('rate');
    }
}

function mark_job_rate_limit($email) {
    $rateFile = get_job_rate_file($email);
    @file_put_contents($rateFile, (string) time(), LOCK_EX);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect_job_status('invalid');
}

if (!empty($_POST['website'])) {
    redirect_job_status('spam');
}

$loadedAt = filter_input(INPUT_POST, 'form_loaded_at', FILTER_VALIDATE_INT);
$now = time();
if (!$loadedAt || $loadedAt > $now || ($now - $loadedAt) < 4) {
    redirect_job_status('too_fast');
}

if (($now - $loadedAt) > 86400) {
    redirect_job_status('invalid');
}

$required = ['name', 'email', 'phone', 'county', 'role', 'availability', 'experience', 'consent'];
foreach ($required as $field) {
    if (empty($_POST[$field])) {
        redirect_job_status('missing');
    }
}

if (empty($_FILES['cv'])) {
    redirect_job_status('missing_cv');
}

if ($_FILES['cv']['error'] !== UPLOAD_ERR_OK) {
    $uploadStatus = $_FILES['cv']['error'] === UPLOAD_ERR_INI_SIZE || $_FILES['cv']['error'] === UPLOAD_ERR_FORM_SIZE ? 'large' : 'upload';
    redirect_job_status($uploadStatus);
}

$allowedExtensions = ['pdf', 'doc', 'docx'];
$fileName = $_FILES['cv']['name'];
$fileSize = (int) $_FILES['cv']['size'];
$fileTmp = $_FILES['cv']['tmp_name'];
$extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

if (!in_array($extension, $allowedExtensions, true)) {
    redirect_job_status('type');
}

if ($fileSize > 2 * 1024 * 1024) {
    redirect_job_status('large');
}

$name = clean_job_value($_POST['name']);
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$phone = clean_job_value($_POST['phone']);
$county = clean_job_value($_POST['county']);
$role = clean_job_value($_POST['role']);
$availability = clean_job_value($_POST['availability']);
$experience = clean_job_value($_POST['experience']);
$portfolio = clean_job_value($_POST['portfolio'] ?? '');

if (!$email) {
    redirect_job_status('email');
}

check_job_rate_limit($email);

if (empty($mailConfig['host']) || empty($mailConfig['username']) || empty($mailConfig['password']) || empty($mailConfig['to_email'])) {
    redirect_job_status('mail_config');
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = $mailConfig['host'];
    $mail->SMTPAuth = true;
    $mail->Username = $mailConfig['username'];
    $mail->Password = $mailConfig['password'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = (int) $mailConfig['port'];

    $mail->setFrom($mailConfig['username'], 'RRDA Jobs');
    $mail->addReplyTo($email, $name);
    $mail->addAddress($mailConfig['to_email'], $mailConfig['to_name']);
    if (!empty($mailConfig['cc_email'])) {
        $mail->addCC($mailConfig['cc_email'], $mailConfig['cc_name']);
    }

    $safeFileName = preg_replace('/[^A-Za-z0-9._-]/', '_', $fileName);
    $mail->addAttachment($fileTmp, $safeFileName);

    $mail->isHTML(true);
    $mail->Subject = 'New Job Application: ' . $role . ' - ' . $name;
    $mail->Body = "
        <h2>New Job Application from RRDA Website</h2>
        <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
        <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
        <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
        <p><strong>County:</strong> " . htmlspecialchars($county) . "</p>
        <p><strong>Role Applied For:</strong> " . htmlspecialchars($role) . "</p>
        <p><strong>Availability:</strong> " . htmlspecialchars($availability) . "</p>
        <p><strong>Portfolio:</strong> " . htmlspecialchars($portfolio ?: 'Not provided') . "</p>
        <p><strong>Experience Summary:</strong><br>" . nl2br(htmlspecialchars($experience)) . "</p>
        <p><strong>CV:</strong> Attached</p>
    ";

    $mail->AltBody = "New Job Application\nName: $name\nEmail: $email\nPhone: $phone\nCounty: $county\nRole: $role\nAvailability: $availability\nPortfolio: $portfolio\nExperience:\n$experience\nCV attached.";

    $mail->send();
    mark_job_rate_limit($email);
    redirect_job_status('success');
} catch (Exception $e) {
    redirect_job_status('mail');
}
?>
