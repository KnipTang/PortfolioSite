<?php
session_start();
require 'vendor/autoload.php';  // Include the Composer autoload file

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



// Load SMTP configuration
$config = require '/var/www/arneolemans.com/config.php';

header('Content-Type: application/json');

$response = ['success' => false, 'error' => ''];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['contact_honeypot'])) {
        die('Spam detected!Honey');  // Bot detected, exit script
    }

    // Time-based submission check
    if (!isset($_SESSION['form_loaded_time'])) {
        die('Spam detectedIsset!');  // If form_loaded_time doesn't exist, exit script
    }

    $ses = $_SESSION["form_loaded_time"];
    $time_taken = time() - $_SESSION['form_loaded_time'];
    $ttime = time();
    $response['error'] = 'Spam detected! Time taken: ' . $time_taken . ', ses: ' . $ses . ', ttime: ' . $ttime;
    echo json_encode($response); // Return as JSON
    if ($time_taken < 10) {
        $response['error'] = 'Spam detected! Time taken: ' . $time_taken . ', ses: ' . $ses . ', ttime: ' . $ttime;
        echo json_encode($response); // Return as JSON
        exit; // Exit after sending response    
    }


    // Reset form load time to prevent reuse in future submissions
    unset($_SESSION['form_loaded_time']);

    $name = htmlspecialchars($_POST['name']);
    $clientEmail = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $ownerEmail = "CommunistKitchenE@gmail.com";  // Replace with your email address
    $subject = "New Contact Form Message";

    $bodyOwner = "Name: $name\nEmail: $clientEmail\n\nMessage:\n$message";
    $bodyClient = "Thanks for your email, we will get back to you as soon as possible! -Arne Olemans\n\nMessage:\n$message";

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $config['smtp_username'];  // Load username from config file
        $mail->Password   = $config['smtp_password'];  // Load password from config file
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        // Uncomment for detailed debug output during development
        $mail->SMTPDebug = 2; // Set this for detailed debug output

        // Recipients
        $mail->setFrom($ownerEmail, $name);
        $mail->addAddress($ownerEmail);  // Add a recipient

        // Content
        $mail->isHTML(false);  // Set email format to plain text
        $mail->Subject = $subject;
        $mail->Body    = $bodyOwner;

        if (!empty($_POST['contact_honeypot'])) {
            die('Spam detected!');
        }
        else
        {
            // Send the owner email
            if ($mail->send()) {
                $response['success'] = true;
            } else {
                $response['error'] = "Failed to send the message to the owner.";
            }
        }

        // Clear all recipients and attachments for the client email
        $mail->clearAddresses();
        $mail->clearAttachments();

        // Add client recipient
        $mail->addAddress($clientEmail);  // Add a recipient

        // Content for client
        $mail->Subject = $subject;
        $mail->Body    = $bodyClient;

        // Send the client email
        if (!$mail->send()) {
            $response['error'] .= " Failed to send the message to the client.";
        }
    } catch (Exception $e) {
        $response['error'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// Always return the response as JSON
 echo json_encode($response);

?>
