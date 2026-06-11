/**
 * ═══════════════════════════════════════════════════════════════
 * BROCUS IT SOLUTIONS USA — MAIN JAVASCRIPT
 * ═══════════════════════════════════════════════════════════════
 */

document.addEventListener('DOMContentLoaded', function () {

    /* ── 1. Navbar Scroll Effect ─────────────────────── */
    const navbar = document.querySelector('.main-navbar');
    if (navbar) {
        const onScroll = () => {
            navbar.classList.toggle('scrolled', window.scrollY > 60);
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    /* ── 2. Scroll Reveal (Intersection Observer) ──── */
    const revealElements = document.querySelectorAll('.reveal');
    if (revealElements.length > 0 && 'IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        revealElements.forEach(function (el) {
            revealObserver.observe(el);
        });
    }

    /* ── 3. Stats Counter Animation ──────────────── */
    const statNumbers = document.querySelectorAll('.stat-count');
    if (statNumbers.length > 0 && 'IntersectionObserver' in window) {
        const countObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    animateCount(entry.target);
                    countObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        statNumbers.forEach(function (el) {
            countObserver.observe(el);
        });
    }

    function animateCount(el) {
        const raw = el.getAttribute('data-target') || el.textContent;

        // Check if value is purely numeric (with optional commas, +, %)
        // Non-numeric values like "24/7", "All 50" are displayed as-is
        const numericOnly = raw.replace(/[,\s]/g, '');
        const match = numericOnly.match(/^([^0-9]*)(\d+)([^0-9]*)$/);
        
        if (!match) {
            // Non-standard format (like "24/7") — just display as-is
            el.textContent = raw;
            return;
        }

        const prefix = match[1] || '';
        const target = parseInt(match[2], 10);
        const suffix = match[3] || '';

        if (isNaN(target) || target === 0) {
            el.textContent = raw;
            return;
        }

        const duration = 2000;
        const step = Math.ceil(target / (duration / 16));
        let current = 0;

        function tick() {
            current += step;
            if (current >= target) {
                el.textContent = prefix + target.toLocaleString() + suffix;
                return;
            }
            el.textContent = prefix + current.toLocaleString() + suffix;
            requestAnimationFrame(tick);
        }
        tick();
    }

    /* ── 4. Back to Top Button ──────────────────── */
    const backToTop = document.querySelector('.back-to-top');
    if (backToTop) {
        window.addEventListener('scroll', function () {
            backToTop.classList.toggle('visible', window.scrollY > 400);
        }, { passive: true });

        backToTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ── 5. Smooth Scroll for Anchor Links ────────── */
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                const offset = navbar ? navbar.offsetHeight + 20 : 80;
                const top = target.getBoundingClientRect().top + window.pageYOffset - offset;
                window.scrollTo({ top: top, behavior: 'smooth' });

                // Close offcanvas if open
                const offcanvas = document.querySelector('.offcanvas.show');
                if (offcanvas) {
                    const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvas);
                    if (bsOffcanvas) bsOffcanvas.hide();
                }
            }
        });
    });

    /* ── 6. Phone Number Formatter ──────────────── */
    document.querySelectorAll('input[type="tel"]').forEach(function (input) {
        input.addEventListener('input', function () {
            let val = this.value.replace(/\D/g, '').slice(0, 10);
            if (val.length >= 7) {
                this.value = '(' + val.slice(0, 3) + ') ' + val.slice(3, 6) + '-' + val.slice(6);
            } else if (val.length >= 4) {
                this.value = '(' + val.slice(0, 3) + ') ' + val.slice(3);
            } else {
                this.value = val;
            }
        });
    });

    /* ── 7. Contact Form Handler ─────────────────── */
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Basic validation
            let valid = true;
            const required = contactForm.querySelectorAll('[required]');
            required.forEach(function (field) {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    valid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            // Email validation
            const emailField = contactForm.querySelector('input[type="email"]');
            if (emailField && emailField.value) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailField.value)) {
                    emailField.classList.add('is-invalid');
                    valid = false;
                }
            }

            // Phone validation
            const phoneField = contactForm.querySelector('input[type="tel"]');
            if (phoneField && phoneField.value) {
                const digits = phoneField.value.replace(/\D/g, '');
                if (digits.length !== 10) {
                    phoneField.classList.add('is-invalid');
                    valid = false;
                }
            }

            if (!valid) return;

            // Show success
            const formEl = contactForm.querySelector('.form-fields');
            const successEl = contactForm.querySelector('.form-success');
            if (formEl && successEl) {
                formEl.style.display = 'none';
                successEl.style.display = 'block';
            }

            // Optionally submit via AJAX here
            // const formData = new FormData(contactForm);
            // fetch('/submit-form.php', { method: 'POST', body: formData });
        });

        // Clear invalid state on input
        contactForm.querySelectorAll('.form-control, .form-select').forEach(function (field) {
            field.addEventListener('input', function () {
                this.classList.remove('is-invalid');
            });
        });
    }

    /* ── 8. Hero Slider (if exists) ──────────────── */
    const heroSlides = document.querySelectorAll('.hero-slide');
    if (heroSlides.length > 1) {
        let currentSlide = 0;
        const dots = document.querySelectorAll('.hero-dot');
        const progressBar = document.querySelector('.hero-progress-fill');
        const INTERVAL = 6000;

        function showSlide(index) {
            heroSlides.forEach(function (slide, i) {
                slide.classList.toggle('active', i === index);
            });
            dots.forEach(function (dot, i) {
                dot.classList.toggle('active', i === index);
            });
            currentSlide = index;
            resetProgress();
        }

        function nextSlide() {
            showSlide((currentSlide + 1) % heroSlides.length);
        }

        function resetProgress() {
            if (progressBar) {
                progressBar.style.transition = 'none';
                progressBar.style.width = '0%';
                requestAnimationFrame(function () {
                    progressBar.style.transition = 'width ' + INTERVAL + 'ms linear';
                    progressBar.style.width = '100%';
                });
            }
        }

        dots.forEach(function (dot, i) {
            dot.addEventListener('click', function () {
                showSlide(i);
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, INTERVAL);
            });
        });

        resetProgress();
        let slideInterval = setInterval(nextSlide, INTERVAL);
    }

    /* ── 9. Offcanvas close on nav click ──────────── */
    const offcanvasNav = document.getElementById('offcanvasNavbar');
    if (offcanvasNav) {
        offcanvasNav.querySelectorAll('.nav-link:not(.dropdown-toggle)').forEach(function (link) {
            link.addEventListener('click', function () {
                const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvasNav);
                if (bsOffcanvas) bsOffcanvas.hide();
            });
        });
    }

});
