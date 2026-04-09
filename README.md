# AKSA Foundation Backend Implementation

This repository now includes a fully functional backend system for handling web forms using PHP and PHPMailer.

## 🚀 Getting Started

### 1. Configure SMTP Password
For security reasons, I have placed a placeholder in the `send-mail.php` file. You **must** update this with your actual email account password.

- **File**: `send-mail.php`
- **Line 33**: Change `'YourPasswordHere'` to your real password for `contact@aksafoundation.org`.

```php
$mail->Password   = 'YourPasswordHere'; // <--- Update this line
```

### 2. Supported Forms
The system automatically detects and processes submissions from:
- **Contact Us**: Sends general inquiries.
- **Admissions**: Processes student data and handles **previous report attachments**.
- **Volunteer / Internship**: Processes applications and handles **CV/Resume attachments**.
- **Donation Receipt**: Processes 80G requests and handles **payment screenshot attachments**.

### 3. Email Routing
- **Sender**: `contact@aksafoundation.org`
- **Recipient**: `keerthana.j.r.95@gmail.com`
- **Reply-To**: Automatically sets the user's email address so you can reply directly to them.

## 📂 Technical Structure

- `send-mail.php`: The master controller for all form logic.
- `libs/PHPMailer/`: Contains the core manual installation of the PHPMailer library (required because Composer is not used).

## 🛠 Prerequisites
- A web server running **PHP 5.5 or higher**.
- The server must have **SSL/TLS support** enabled for SMTP connections (standard on most hosting providers).

## ⚠️ Important Notes
- **File Uploads**: The server's `php.ini` must allow file uploads (usually enabled by default).
- **Redirection**: Upon success/error, the user is redirected back to `index.html` with a status parameter. You can add visual alerts on the index page based on these parameters if desired.
