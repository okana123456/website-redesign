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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $service = $_POST['service'];

    $subject = "Quote Request: $service";
    $message = "
        <h3>New Quote Request from Website</h3>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Requested Service:</strong> {$service}</p>
    ";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = $mailConfig['host'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $mailConfig['username'];
        $mail->Password   = $mailConfig['password'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = (int) $mailConfig['port'];

        $mail->setFrom($mailConfig['username'], 'Rudder Website');
        $mail->addReplyTo($email, $name);
        $mail->addAddress($mailConfig['to_email'], $mailConfig['to_name']);
        if (!empty($mailConfig['cc_email'])) {
            $mail->addCC($mailConfig['cc_email'], $mailConfig['cc_name']);
        }

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "
            <h3>New Quote Request from Website</h3>
            <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
            <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
            <p><strong>Requested Service:</strong> " . htmlspecialchars($service) . "</p>
        ";

        $mail->send();
        header("Location: index.php?quote_status=success");
        exit();
    } catch (Exception $e) {
        header("Location: index.php?quote_status=error&msg=" . urlencode($mail->ErrorInfo));
        exit();
    }
} else {
    header("Location: index.php?quote_status=invalid");
    exit();
}
