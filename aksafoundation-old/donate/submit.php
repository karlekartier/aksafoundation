<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'contact@aksafoundation.org';
        $mail->Password = 'xmvs bmrq qnhq fmqm';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email Details
        $mail->setFrom($_POST['email'], $_POST['first_name'] . ' ' . $_POST['last_name']);
        $mail->addAddress('contact@aksafoundation.org');

        $mail->Subject = 'Donation Details';

        // Message Body
        $message = "
            First Name: {$_POST['first_name']}\n
            Last Name: {$_POST['last_name']}\n
            Email: {$_POST['email']}\n
            Phone: {$_POST['phone']}\n
        ";
        $mail->Body = $message;

        // Handle file attachment
        if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == UPLOAD_ERR_OK) {
            $mail->addAttachment($_FILES['screenshot']['tmp_name'], $_FILES['screenshot']['name']);
        }

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
?>
