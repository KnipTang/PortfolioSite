<?php

require '..vendor/autoload.php';  // Include the Composer autoload file

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Load SMTP configuration
$config = require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "arne.olemans@outlook.com";  // Replace with your email address
    $subject = "New Contact Form Message";

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.office365.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $config['smtp_username'];  // Load username from config file
        $mail->Password   = $config['smtp_password'];  // Load password from config file
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress($to);  // Add a recipient
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(false);  // Set email format to plain text
        $mail->Subject = $subject;
        $mail->Body    = $body;

        // Send the email
        if ($mail->send()) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send the message. Please try again later.";
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
