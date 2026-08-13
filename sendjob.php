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

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: jobs.php?status=invalid');
    exit();
}

$required = ['name', 'email', 'phone', 'county', 'role', 'availability', 'experience', 'consent'];
foreach ($required as $field) {
    if (empty($_POST[$field])) {
        header('Location: jobs.php?status=error');
        exit();
    }
}

if (empty($_FILES['cv']) || $_FILES['cv']['error'] !== UPLOAD_ERR_OK) {
    header('Location: jobs.php?status=error');
    exit();
}

$allowedExtensions = ['pdf', 'doc', 'docx'];
$fileName = $_FILES['cv']['name'];
$fileSize = (int) $_FILES['cv']['size'];
$fileTmp = $_FILES['cv']['tmp_name'];
$extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

if (!in_array($extension, $allowedExtensions, true) || $fileSize > 5 * 1024 * 1024) {
    header('Location: jobs.php?status=error');
    exit();
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
    header('Location: jobs.php?status=error');
    exit();
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
    header('Location: jobs.php?status=success');
    exit();
} catch (Exception $e) {
    header('Location: jobs.php?status=error');
    exit();
}
?>
