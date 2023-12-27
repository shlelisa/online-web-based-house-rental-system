<?php
// Show PHP errors (Disable in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include library PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Start
$mail = new PHPMailer(true);

try {
    // Configuration SMTP
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                         // Show output (Disable in production)
    $mail->isSMTP();                                               // Activate SMTP sending
    $mail->Host  = 'localhost';                     // SMTP Server
    $mail->SMTPAuth  = true;                                       // SMTP Identification
    $mail->Username  = 'root';                  // SMTP User
    $mail->Password  = '';	          // SMTP Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port  = 587;
    $mail->setFrom('hirkoefrem@gmail.com', 'Efrem');                // Mail sender

    // Recipients
    $mail->addAddress('muratanegessa6@gmail.com', 'Muleta');  // Email and recipient's name

    // Mail content
    $mail->isHTML(true);
    $mail->Subject = 'Subject of the mail';
    $mail->Body  = 'Mail content <b>in HTML!</b>';
    $mail->AltBody = 'Mail content in plain text for mail clients that do not support HTML';
    $mail->send();
    echo 'The message has been sent';
} catch (Exception $e) {
    echo "Message has not been sent. Mailer Error: {$mail->ErrorInfo}";
}?>