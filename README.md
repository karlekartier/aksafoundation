# AKSA Foundation - Static Website

Welcome to the newly refactored, highly optimized static code repository for the **AKSA Foundation**.

This project has been completely migrated from a PHP-based dynamic infrastructure to a flat HTML5 layout, explicitly designed to maximize rendering speed, SEO clarity, and reliable static hosting deployments (e.g. GitHub Pages, Netlify, Vercel).

## Project Structure

```text
/root
├── index.html                 (Replaces /home/index.php)
├── about.html                 (Replaces /about/index.php)
├── contact.html               (Static Contact Us Template)
├── donate.html                (Static Donations Dashboard)
├── events.html                (Static Events Tracking)
├── learning-centre.html       (Static Program Info)
├── our-story.html             (History Tracking)
├── sport-academy.html         (Sports Program Hub)
├── vocational-centre.html     (Vocation Info Hub)
├── application.html           (Admission Entry point)
├── volunter.html              (Volunteer Submission Form)
├── robots.txt                 (Search Engine Directives)
├── sitemap.xml                (Search Node Mapping)
└── assets/                    (All local static dependencies)
    ├── css/                   (Minified style layouts and components)
    ├── js/                    (Client-side UI interaction files)
    ├── images/                (Globally transcoded WebP/AVIF imagery)
    └── fonts/                 (Local explicit typefaces)
```

## Project Migration & Performance Optimization

This version represents a total architectural shift from the old dynamic structure to a modern, high-performance static build.

### Transition from Dynamic (PHP) to Static (HTML)
The project was migrated from a server-side PHP architecture to a high-speed Static HTML5 version. This provides several key benefits for the client:
- **Instant Page Loading**: Without the need for server-side processing, pages load significantly faster, providing a "snappy" user experience.
- **Improved Security**: By removing PHP, we have eliminated server-side vulnerabilities, making the site virtually unhackable through traditional script injection.
- **Zero Hosting Costs**: This static version can be hosted for free on platforms like GitHub Pages, Netlify, or Vercel, removing the need for monthly server maintenance fees.
- **Reliable Uptime**: Static files have significantly higher reliability compared to dynamic sites that depend on backend databases and server health.

### Key Refactoring Highlights
- **Pre-Compiled Components**: All `layout/header`, `layout/top-nav`, and `layout/footer` modules have been dynamically mapped and physically applied into the `*.html` structures.
- **Form Endpoints**: Legacy PHP email configurations have been replaced with modern static API receivers.
- **High-Performance Media**: Images have been transcoded to modern formats like WebP for maximum compression without quality loss.
- **SEO & Accessibility**: Every page now follows a strict semantic structure with optimized meta tags and faster rendering paths.

## Development & Hosting

Since this website is completely static HTML, you can run this instantly on any live-server implementation without establishing a localhost configuration for XAMPP/WAMP endpoints or Composer libraries!

To test execution locally using NPM Node:
```bash
npx http-server .
```

To deploy to Production: Track the new structure inside a Github Repository and configure GitHub Pages (Settings -> Pages -> Deploy Branch: Main). Everything maps instantly.
