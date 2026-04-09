/**
 * AKSA Foundation - Main JavaScript
 * Handles: Active navigation, Back to top scroll, Scroll reveal animations, and Carousel initializations.
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Dynamic Active Navbar Highlight
    const currentPath = window.location.pathname.split('/').pop() || 'index.html';
    document.querySelectorAll('.nav-link').forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });

    // 2. Back to Top Button Logic
    const backToTop = document.getElementById('backToTop');
    if (backToTop) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });
        backToTop.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // 3. Scroll Reveal Logic (Intersection Observer)
    const observerOptions = {
        threshold: 0.12,
        rootMargin: '0px 0px -50px 0px'
    };
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, observerOptions);

    const revealElements = document.querySelectorAll('.reveal');
    revealElements.forEach(el => revealObserver.observe(el));

    // 4. Owl Carousel Global/Common Initializations
    if (typeof jQuery !== 'undefined' && $.fn.owlCarousel) {
        // Testimonials Carousel
        $(".testimonials-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: { items: 1 },
                768: { items: 2 },
                1200: { items: 2 }
            }
        });

        // Learning Centre Scroller
        $(".learning-scroller").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 4 }
            }
        });

        // Default Common Scroller (for other pages)
        $(".common-scroller").owlCarousel({
            loop: true,
            margin: 15,
            nav: false,
            dots: true,
            autoplay: true,
            responsive: {
                0: { items: 1 },
                768: { items: 2 },
                1000: { items: 3 }
            }
        });
    }
});
