<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $internship = $_POST['internship'];

    $to = 'contact@aksafoundation.org'; // Replace with your email
    $subject = "New Internship/Volunteering Application";

    // Prepare email body
    $body = "
        <h2>New Application</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Type:</strong> $internship</p>
    ";

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP host (Gmail)
        $mail->SMTPAuth = true;
        $mail->Username = 'contact@aksafoundation.org'; // SMTP username
        $mail->Password = 'xmvs bmrq qnhq fmqm'; // Fixed SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // SMTP port

        // Sender and recipient
        $mail->setFrom($email, $name);
        $mail->addAddress($to);
        $mail->addReplyTo($email, $name);

        // Attach file if uploaded
        if (!empty($_FILES['reports']['name'])) {
            $file_tmp = $_FILES['reports']['tmp_name'];
            $file_name = $_FILES['reports']['name'];

            $mail->addAttachment($file_tmp, $file_name);
        }

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;

        if ($mail->send()) {
            header("Location: index.php?status=success");
            exit();
        } else {
            header("Location: index.php?status=error");
            exit();
        }
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
        header("Location: index.php?status=error");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
