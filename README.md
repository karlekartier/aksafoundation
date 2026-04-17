# AKSA Foundation - Official Website (2026 Redesign)

A premium, modern, and highly responsive website for the **AKSA Foundation**, dedicated to empowering young minds with diverse disabilities through integrated learning and therapeutic sports.

## 🌟 Project Highlights

- **Bento-Grid Design**: A state-of-the-art layout that beautifully organizes content, institutions, and galleries into a cohesive visual experience. "Exact design" match performed for maximum aesthetic impact.
- **Typography & Branding**: Utilizes **DM Sans** globally to mirror the original proprietary web designs for an authentic look, along with perfectly proportioned dynamic navbar SVG branding. 
- **Responsive Architecture**: Fully optimized for mobile, tablet, and desktop using **Bootstrap 5.3**.
- **Interactive UI**: Featuring smooth scroll animations (Intersection Observer API) and dynamic carousels for the Sports Academy.
- **Custom Assets**: Integrated high-quality custom black-and-white line art iconography and optimized imagery (AVIF/JPG).

## 🚀 Technical Stack

- **Frontend**: HTML5, Vanilla CSS3 (Custom Theme), JavaScript (ES6+).
- **Libraries**:
  - [Bootstrap 5.3.3](https://getbootstrap.com/) - Grid and components.
  - [Boxicons](https://boxicons.com/) - Premium iconography.
  - [Owl Carousel 2](https://owlcarousel2.github.io/OwlCarousel2/) - Responsive scrollers.
  - [jQuery 3.7.1](https://jquery.com/) - Core utility for carousels.
- **Backend**: PHP 8.x with [PHPMailer](https://github.com/PHPMailer/PHPMailer) for secure SMTP email processing.

## 📂 Key Sections

1.  **Home (`index.html`)**: Features the Foundation's mission, institution highlights, and integrated gallery.
2.  **Institutions**:
    *   **Learning Centre**: Specialized cognitive and speech therapy curriculum.
    *   **Vocational Centre**: Job skills and independent living training for young adults.
    *   **Sports Academy**: Adaptive swimming and therapeutic sports scroller.
3.  **Events**: Highlighting community activities (Christmas, Diwali, Independence Day, etc.).
4.  **Action Portals**:
    *   **Admissions**: Comprehensive student intake form with file attachments.
    *   **Volunteer/Internship**: Career and support application system with CV upload.
    *   **Donate**: 80G tax benefit requests and payment verification.

## 🛠 Backend Configuration (SMTP)

The website uses a unified `send-mail.php` handler. **Action skip required:**
1. Open `send-mail.php`.
2. Update the `$mail->Password` placeholder on **Line 33** with your actual application-specific password for `contact@aksafoundation.org`.

## 📦 Deployment Notes (GitHub Pages)

- **Case Sensitivity**: All image references have been normalized (lowercase `h*.jpg`) to ensure compatibility with GitHub's case-sensitive hosting.
- **Path Resolution**: Standardized relative paths (removed leading `./`) for cross-browser and cross-server reliability.

---

*Redesigned and Developed with ❤️ for AKSA Foundation.*
