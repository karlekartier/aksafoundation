<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']); // Form input email
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'contact@aksafoundation.org'; // Fixed SMTP email
        $mail->Password = 'xmvs bmrq qnhq fmqm'; // Fixed SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Set sender email from form input
        $mail->setFrom($email, $name); // Set from user's email and name
        $mail->addReplyTo($email, $name); // For reply-to feature

        // Fixed recipient email
        $mail->addAddress('contact@aksafoundation.org');

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Contact Details';
        $mail->Body = "
            <h3>New Contact Details</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong> $message</p>
        ";

      
        // Send email
        if ($mail->send()) {
            // Redirect to index.php with success message
            header("Location: index.php?status=success");
            exit();
        } else {
            header("Location: index.php?status=error");
            exit();
        }
    } catch (Exception $e) {
        header("Location: index.php?status=error");
        exit();
    }
}
