<?php

require 'vendor/autoload.php';  // Include the Composer autoload file

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Load SMTP configuration
$config = require '/var/www/arneolemans.com/config.php';

header('Content-Type: application/json');

$response = ['success' => false, 'error' => ''];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $clientEmail = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $ownerEmail = "arne.olemans@outlook.com";  // Replace with your email address
    $subject = "New Contact Form Message";

    $bodyOwner = "Name: $name\nEmail: $clientEmail\n\nMessage:\n$message";
    $bodyClient = "Thanks for your email, we will get back to you as soon as possible! -Arne Olemans\n\nMessage:\n$message";

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
        $mail->setFrom($ownerEmail, $name);
        $mail->addAddress($ownerEmail);  // Add a recipient

        // Content
        $mail->isHTML(false);  // Set email format to plain text
        $mail->Subject = $subject;
        $mail->Body    = $bodyOwner;

        // Send the email
        if ($mail->send()) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send the message. Please try again later.";
        }




        // Client email //

        // Clear all recipients and attachments
        $mail->clearAddresses();
        $mail->clearAttachments();

        // Recipients
        //$mail->setFrom($ownerEmail, $name);
        $mail->addAddress($clientEmail);  // Add a recipient

        // Content
        $mail->isHTML(false);  // Set email format to plain text
        $mail->Subject = $subject;
        $mail->Body    = $bodyClient;

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

echo json_encode($response);

?>
