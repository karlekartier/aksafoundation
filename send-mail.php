<?php
/**
 * AKSA Foundation - Unified Email Handler
 * Processes Contact, Admissions, Volunteer, and Donation forms
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'libs/PHPMailer/Exception.php';
require 'libs/PHPMailer/PHPMailer.php';
require 'libs/PHPMailer/SMTP.php';

// Redirection URLs
$success_url = 'index.html?status=success';
$error_url = 'index.html?status=error';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        // --- Server Settings ---
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;         // Enable verbose debug output (for testing)
        $mail->isSMTP();                                  // Set mailer to use SMTP
        $mail->Host = 'mail.aksafoundation.org';    // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                         // Enable SMTP authentication
        $mail->Username = 'contact@aksafoundation.org'; // SMTP username
        $mail->Password = 'zB^x%FYF2QSu';           // SMTP password (USER: "Use the email account's password")
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  // Enable SSL encryption
        $mail->Port = 465;                          // TCP port to connect to

        // --- Recipients ---
        $mail->setFrom('contact@aksafoundation.org', 'AKSA Foundation Web Form');
        $mail->addAddress('keerthana.j.r.95@gmail.com');  // Primary recipient
        $mail->addReplyTo($_POST['email'] ?? 'contact@aksafoundation.org', $_POST['name'] ?? 'Web User');

        // --- Form Type Detection ---
        $form_type = $_POST['form_type'] ?? 'general';
        $subject = 'New Web Submission';
        $body = '<h2>New Submission from AKSA Foundation Website</h2>';

        switch ($form_type) {
            case 'contact':
                $subject = 'New Contact Inquiry';
                $body .= '<p><strong>Form Type:</strong> Contact Us</p>';
                $body .= '<p><strong>Name:</strong> ' . htmlspecialchars($_POST['name']) . '</p>';
                $body .= '<p><strong>Email:</strong> ' . htmlspecialchars($_POST['email']) . '</p>';
                $body .= '<p><strong>Phone:</strong> ' . htmlspecialchars($_POST['phone']) . '</p>';
                $body .= '<p><strong>Message:</strong><br>' . nl2br(htmlspecialchars($_POST['message'])) . '</p>';
                break;

            case 'admission':
                $subject = 'New Admission Enquiry';
                $body .= '<p><strong>Form Type:</strong> Admissions Enquiry</p>';
                $body .= '<hr>';
                $body .= '<h4>Student Information</h4>';
                $body .= '<p><strong>Student Name:</strong> ' . htmlspecialchars($_POST['name']) . '</p>';
                $body .= '<p><strong>Date of Birth:</strong> ' . htmlspecialchars($_POST['dob']) . '</p>';
                $body .= '<p><strong>Gender:</strong> ' . htmlspecialchars($_POST['gender']) . '</p>';
                $body .= '<p><strong>Program Enrolled:</strong> ' . htmlspecialchars($_POST['program']) . '</p>';
                $body .= '<hr>';
                $body .= '<h4>Guardian Information</h4>';
                $body .= '<p><strong>Guardian Name:</strong> ' . htmlspecialchars($_POST['guardian_name']) . '</p>';
                $body .= '<p><strong>Email:</strong> ' . htmlspecialchars($_POST['email']) . '</p>';
                $body .= '<p><strong>Phone:</strong> ' . htmlspecialchars($_POST['phone']) . '</p>';
                $body .= '<p><strong>Address:</strong> ' . htmlspecialchars($_POST['address']) . '</p>';
                $body .= '<hr>';
                $body .= '<h4>Medical & History</h4>';
                $body .= '<p><strong>Medical History:</strong> ' . htmlspecialchars($_POST['medical_history']) . '</p>';
                $body .= '<p><strong>Last School:</strong> ' . htmlspecialchars($_POST['last_school']) . '</p>';
                $body .= '<p><strong>Previous Level:</strong> ' . htmlspecialchars($_POST['previous_accademic']) . '</p>';
                $body .= '<p><strong>Reasons/Ref By:</strong> ' . htmlspecialchars($_POST['reasons']) . '</p>';

                // Attachment handling
                if (isset($_FILES['reports']) && $_FILES['reports']['error'] == UPLOAD_ERR_OK) {
                    $mail->addAttachment($_FILES['reports']['tmp_name'], $_FILES['reports']['name']);
                }
                break;

            case 'volunteer':
                $subject = 'New Volunteer/Intern Application';
                $body .= '<p><strong>Form Type:</strong> Volunteer / Internship</p>';
                $body .= '<p><strong>Name:</strong> ' . htmlspecialchars($_POST['name']) . '</p>';
                $body .= '<p><strong>Email:</strong> ' . htmlspecialchars($_POST['email']) . '</p>';
                $body .= '<p><strong>Phone:</strong> ' . htmlspecialchars($_POST['phone']) . '</p>';
                $body .= '<p><strong>Interest:</strong> ' . htmlspecialchars($_POST['internship']) . '</p>';

                // Attachment handling
                if (isset($_FILES['reports']) && $_FILES['reports']['error'] == UPLOAD_ERR_OK) {
                    $mail->addAttachment($_FILES['reports']['tmp_name'], $_FILES['reports']['name']);
                }
                break;

            case 'donation':
                $subject = 'New Donation Receipt Request';
                $body .= '<p><strong>Form Type:</strong> Donation Receipt Request</p>';
                $body .= '<p><strong>Name:</strong> ' . htmlspecialchars($_POST['first_name'] . ' ' . $_POST['last_name']) . '</p>';
                $body .= '<p><strong>Email:</strong> ' . htmlspecialchars($_POST['email']) . '</p>';
                $body .= '<p><strong>Phone:</strong> ' . htmlspecialchars($_POST['phone']) . '</p>';
                $body .= '<p><strong>Note:</strong> Requesting 80G tax benefit receipt.</p>';

                // Attachment handling
                if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == UPLOAD_ERR_OK) {
                    $mail->addAttachment($_FILES['screenshot']['tmp_name'], $_FILES['screenshot']['name']);
                }
                break;
        }

        // --- Content ---
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = strip_tags(str_replace('<br>', "\n", $body));

        $mail->send();
        header("Location: $success_url");
        exit();
    } catch (Exception $e) {
        // Log error if needed: error_log($mail->ErrorInfo);
        header("Location: $error_url");
        exit();
    }
} else {
    // Not a POST request
    header("Location: index.html");
    exit();
}
