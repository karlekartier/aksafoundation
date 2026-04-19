<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $child_name = $_POST['child_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $disability = $_POST['disability'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $father_details = $_POST['father_details'];
    $mother_details = $_POST['mother_details'];
    $mother_tongue = $_POST['mother_tongue'];
    $guardian_name = $_POST['guardian_name'];
    $medical_history = $_POST['medical_history'];
    $last_school = $_POST['last_school'];
    $previous_academic = $_POST['previous_accademic'];
    $reasons = $_POST['reasons'];
    $program = $_POST['program'];

    $to = 'contact@aksafoundation.org'; // Replace with your email
    $subject = "New Application Form Submission";
    
    // Prepare email body
    $body = "
        <h2>New Application Form Submission</h2>
        <p><strong>Name of the Child:</strong> $child_name</p>
        <p><strong>Date of Birth:</strong> $dob</p>
        <p><strong>Gender:</strong> $gender</p>
        <p><strong>Category of Disability/Disorder:</strong> $disability</p>
        <p><strong>Address:</strong> $address</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Father's Name & Occupation:</strong> $father_details</p>
        <p><strong>Mother's Name & Occupation:</strong> $mother_details</p>
        <p><strong>Mother Tongue:</strong> $mother_tongue</p>
        <p><strong>Guardian's Name:</strong> $guardian_name</p>
        <p><strong>Birth and Medical History:</strong> $medical_history</p>
        <p><strong>Last School Attended:</strong> $last_school</p>
        <p><strong>Previous Academic Level:</strong> $previous_academic</p>
        <p><strong>Reasons for Approaching Our Center & Referred By:</strong> $reasons</p>
        <p><strong>Program to be Enrolled in:</strong> $program</p>
    ";

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP host (Gmail)
        $mail->SMTPAuth = true;
        $mail->Username = 'contact@aksafoundation.org'; // SMTP username
        $mail->Password = 'xmvs bmrq qnhq fmqm'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;; // Encryption
        $mail->Port = 587; // SMTP port

        // Sender and recipient
        $mail->setFrom($email, $child_name);
        $mail->addAddress($to);
        $mail->addReplyTo($email, $child_name);

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
