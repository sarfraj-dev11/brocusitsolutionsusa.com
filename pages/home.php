<?php
/**
 * HOMEPAGE — Multi-service showcase
 */
$security = $SITE['services']['home-security'];
?>

<!-- ═══════ HERO SECTION ═══════ -->
<section class="hero-section" id="hero">
    <div class="hero-bg" style="background-image:url('/assets/images/hero-home.webp');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-7">
                    <div class="reveal">
                        <span class="hero-badge">
                            <i class="fa-solid fa-shield-halved"></i>
                            <?= $SITE['tagline'] ?>
                        </span>
                        <h1 class="hero-title">
                            Protect Your Home. <br>
                            <span class="text-accent">Empower Your Life.</span>
                        </h1>
                        <p class="hero-subtitle">
                            Professionally installed smart home security systems with 24/7 monitoring across all 50 US states. Your safety is our business.
                        </p>
                        <div class="hero-btn-group">
                            <a href="tel:<?= $SITE['phone'] ?>" class="btn-hero-primary">
                                <i class="fa-solid fa-phone-volume"></i> <?= $SITE['cta']['primary']['text'] ?>
                            </a>
                            <a href="<?= $SITE['cta']['secondary']['url'] ?>" class="btn-hero-secondary">
                                <i class="<?= $SITE['cta']['secondary']['icon'] ?>"></i> <?= $SITE['cta']['secondary']['text'] ?>
                            </a>
                        </div>
                        <p class="hero-note">
                            <i class="fa-solid fa-check-circle me-1"></i> Available for Homeowners | Professional Installation
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════ STATS BAR ═══════ -->
<section class="stats-bar">
    <div class="container">
        <div class="stats-grid">
            <?php foreach ($SITE['stats'] as $i => $stat): ?>
            <div class="stat-item reveal reveal-delay-<?= $i + 1 ?>">
                <div class="stat-icon">
                    <i class="<?= $stat['icon'] ?>"></i>
                </div>
                <div class="stat-number stat-count" data-target="<?= $stat['number'] ?>"><?= $stat['number'] ?></div>
                <div class="stat-label"><?= $stat['label'] ?></div>
                <div class="stat-sub"><?= $stat['sub'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════ OUR SERVICES ═══════ -->
<section class="section" id="services">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-badge">
                <i class="fa-solid fa-grid-2"></i> What We Offer
            </span>
            <h2>Trusted Services, <span class="text-gradient">One Company.</span></h2>
            <p>We provide a suite of professional services across the United States. From home security to smart technology — we've got you covered.</p>
        </div>

        <div class="row g-4">
            <!-- Home Security Card -->
            <div class="col-lg-6 reveal">
                <div class="service-card">
                    <div class="card-image">
                        <img src="/assets/images/hero-security.webp" alt="Home Security Systems" loading="lazy">
                    </div>
                    <div class="card-body">
                        <div class="card-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <span class="card-tag">Service 01</span>
                        <h3>Home Security &amp; Smart Automation</h3>
                        <p>Custom-built smart home security systems with cameras, smart locks, alarm systems, and 24/7 professional monitoring.</p>
                        <ul class="feature-checklist">
                            <li><i class="fa-solid fa-circle-check"></i> Indoor &amp; outdoor cameras + doorbell</li>
                            <li><i class="fa-solid fa-circle-check"></i> Smart locks, alarm system, sensors</li>
                            <li><i class="fa-solid fa-circle-check"></i> 24/7 professional monitoring</li>
                            <li><i class="fa-solid fa-circle-check"></i> Professional installation included</li>
                        </ul>
                        <a href="/home-security" class="link-arrow">
                            Explore Home Security <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Coming Soon Card -->
            <div class="col-lg-6 reveal reveal-delay-1">
                <div class="service-card" style="border-style: dashed;">
                    <div class="card-image" style="background:var(--gradient-primary);display:flex;align-items:center;justify-content:center;">
                        <div class="text-center text-white p-4">
                            <i class="fa-solid fa-rocket-launch fa-3x mb-3" style="opacity:0.5;"></i>
                            <h4 class="text-white mb-2" style="font-size:1.3rem;">More Services Coming Soon</h4>
                            <p class="mb-0" style="color:rgba(255,255,255,0.7);font-size:0.9rem;">We're expanding our service portfolio to serve you better.</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-icon" style="background:var(--color-gray-200);">
                            <i class="fa-solid fa-laptop-code" style="color:var(--color-gray-600);"></i>
                        </div>
                        <span class="card-tag" style="color:var(--color-gray-400);">Coming Soon</span>
                        <h3>Technology &amp; IT Services</h3>
                        <p>Additional technology services are being prepared. Stay tuned for internet, wireless, and more business solutions.</p>
                        <ul class="feature-checklist">
                            <li><i class="fa-solid fa-circle-check" style="color:var(--color-gray-300);"></i> Internet &amp; Networking</li>
                            <li><i class="fa-solid fa-circle-check" style="color:var(--color-gray-300);"></i> Wireless &amp; Mobile Plans</li>
                            <li><i class="fa-solid fa-circle-check" style="color:var(--color-gray-300);"></i> Business Technology</li>
                            <li><i class="fa-solid fa-circle-check" style="color:var(--color-gray-300);"></i> IT Support &amp; Solutions</li>
                        </ul>
                        <a href="/contact" class="link-arrow" style="color:var(--color-gray-500);">
                            Contact Us for Details <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════ WHY CHOOSE US ═══════ -->
<section class="section bg-light-section" id="why-us">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-badge">
                <i class="fa-solid fa-star"></i> Why Brocus
            </span>
            <h2>Why Families <span class="text-gradient">Choose Us</span></h2>
            <p>We're committed to delivering professional-grade services with transparency, reliability, and genuine care for every customer.</p>
        </div>

        <div class="row g-4">
            <?php
            $usps = [
                ['icon' => 'fa-solid fa-shield-halved',      'title' => 'Professionally Monitored',  'desc' => 'Your home is watched 24/7 by trained monitoring professionals who can dispatch emergency services.'],
                ['icon' => 'fa-solid fa-screwdriver-wrench',  'title' => 'Expert Installation',        'desc' => 'Certified technicians handle the complete setup, test every device, and walk you through your system.'],
                ['icon' => 'fa-solid fa-map-location-dot',    'title' => 'Nationwide Coverage',         'desc' => 'We serve all 50 US states with professional installation and monitoring services coast to coast.'],
                ['icon' => 'fa-solid fa-handshake',           'title' => 'Transparent Pricing',         'desc' => 'Clear, itemized quotes with no hidden fees. You know exactly what you\'re paying for from day one.'],
                ['icon' => 'fa-solid fa-mobile-screen-button','title' => 'Smart App Control',           'desc' => 'Control your entire system from your smartphone — arm, disarm, view cameras, and manage devices.'],
                ['icon' => 'fa-solid fa-battery-full',        'title' => 'Power &amp; Internet Backup', 'desc' => 'Systems include backup battery and cellular connection, so protection continues during outages.'],
            ];
            foreach ($usps as $i => $usp):
            ?>
            <div class="col-md-6 col-lg-4 reveal reveal-delay-<?= ($i % 3) + 1 ?>">
                <div class="usp-card">
                    <div class="usp-icon">
                        <i class="<?= $usp['icon'] ?>"></i>
                    </div>
                    <h5><?= $usp['title'] ?></h5>
                    <p><?= $usp['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════ HOW IT WORKS ═══════ -->
<section class="section" id="how-it-works">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-badge">
                <i class="fa-solid fa-list-check"></i> How It Works
            </span>
            <h2>Getting Started Is <span class="text-gradient">Simple</span></h2>
            <p>Three easy steps to get your home professionally protected with a custom security system.</p>
        </div>

        <div class="row g-4">
            <?php foreach ($security['how_it_works'] as $i => $step): ?>
            <div class="col-md-4 reveal reveal-delay-<?= $i + 1 ?>">
                <div class="step-card">
                    <div class="step-image">
                        <img src="/assets/images/step-<?= $step['step'] ?>.webp" alt="<?= $step['title'] ?>" loading="lazy">
                    </div>
                    <div class="step-body">
                        <span class="step-badge">Step <?= $step['step'] ?></span>
                        <h5><?= $step['title'] ?></h5>
                        <p><?= $step['desc'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════ CTA SECTION ═══════ -->
<section class="section-lg">
    <div class="container">
        <div class="cta-section reveal">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h2 class="fw-800 mb-3">Ready to Protect Your Home?</h2>
                    <p class="mb-0">Speak with a security advisor today. Get a free, no-obligation consultation and custom quote for your home.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="tel:<?= $SITE['phone'] ?>" class="btn btn-light btn-lg rounded-pill px-4 py-3 fw-bold">
                        <i class="fa-solid fa-phone-volume me-2"></i> Call <?= $SITE['phone_display'] ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════ FAQ SECTION ═══════ -->
<section class="section bg-light-section" id="faq">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-badge">
                <i class="fa-solid fa-circle-question"></i> FAQ
            </span>
            <h2>Frequently Asked <span class="text-gradient">Questions</span></h2>
            <p>Find answers to common questions about our services, installation, and monitoring.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion faq-accordion reveal" id="faqAccordion">
                    <?php foreach ($security['faqs'] as $i => $faq): ?>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHead<?= $i ?>">
                            <button class="accordion-button <?= $i > 0 ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody<?= $i ?>" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="faqBody<?= $i ?>">
                                <?= $faq['q'] ?>
                            </button>
                        </h3>
                        <div id="faqBody<?= $i ?>" class="accordion-collapse collapse <?= $i === 0 ? 'show' : '' ?>" aria-labelledby="faqHead<?= $i ?>" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?= $faq['a'] ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        <?php foreach ($security['faqs'] as $i => $faq): ?>
        {
            "@type": "Question",
            "name": "<?= addslashes($faq['q']) ?>",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "<?= addslashes($faq['a']) ?>"
            }
        }<?= $i < count($security['faqs']) - 1 ? ',' : '' ?>
        <?php endforeach; ?>
    ]
}
</script>

<!-- ═══════ CONTACT SECTION ═══════ -->
<section class="section" id="quote-form">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-badge">
                <i class="fa-solid fa-message"></i> Get In Touch
            </span>
            <h2>Request a <span class="text-gradient">Free Quote</span></h2>
            <p>Fill out the form below and a member of our team will contact you to discuss the best options for your home.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-lg-7 reveal">
                <div class="contact-form-card">
                    <form id="contactForm">
                        <div class="form-fields">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="cf_name">Full Name</label>
                                    <input type="text" class="form-control" id="cf_name" name="name" placeholder="Your full name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="cf_phone">Phone Number</label>
                                    <input type="tel" class="form-control" id="cf_phone" name="phone" placeholder="(555) 123-4567" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="cf_email">Email Address</label>
                                    <input type="email" class="form-control" id="cf_email" name="email" placeholder="you@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="cf_service">Service Interested In</label>
                                    <select class="form-select" id="cf_service" name="service" required>
                                        <option value="" selected disabled>Select a service</option>
                                        <?php foreach ($SITE['services'] as $svc): ?>
                                            <?php if (!empty($svc['active'])): ?>
                                            <option value="<?= $svc['slug'] ?>"><?= $svc['name'] ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        <option value="other">Other / General Inquiry</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="cf_message">Message (Optional)</label>
                                    <textarea class="form-control" id="cf_message" name="message" rows="4" placeholder="Tell us about your needs..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn-primary-gradient w-100 justify-content-center" style="font-size:1rem;padding:0.85rem 2rem;">
                                        <i class="fa-solid fa-paper-plane"></i> Submit Request
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-success">
                            <div class="success-icon">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>
                            <h4>Thank You!</h4>
                            <p>We've received your request. A member of our team will contact you at the phone number provided shortly.</p>
                            <a href="tel:<?= $SITE['phone'] ?>" class="btn-primary-gradient mt-3" style="text-decoration:none;">
                                <i class="fa-solid fa-phone-volume"></i> Or Call Us Now: <?= $SITE['phone_display'] ?>
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 reveal reveal-delay-1">
                <div class="contact-info-card">
                    <h4 class="text-white mb-4" style="font-family:var(--font-heading);font-weight:700;">Let's Talk</h4>

                    <div class="contact-info-item">
                        <div class="ci-icon"><i class="fa-solid fa-phone"></i></div>
                        <div>
                            <h6>Phone</h6>
                            <a href="tel:<?= $SITE['phone'] ?>"><?= $SITE['phone_display'] ?></a>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="ci-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <h6>Email</h6>
                            <a href="mailto:<?= $SITE['email'] ?>"><?= $SITE['email'] ?></a>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="ci-icon"><i class="fa-solid fa-clock"></i></div>
                        <div>
                            <h6>Business Hours</h6>
                            <p><?= $SITE['hours']['display'] ?></p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="ci-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div>
                            <h6>Address</h6>
                            <p><?= $SITE['address']['full'] ?></p>
                        </div>
                    </div>

                    <hr style="border-color:rgba(255,255,255,0.1);margin:1.5rem 0;">

                    <div class="d-flex gap-3">
                        <a href="<?= $SITE['social']['facebook'] ?>" target="_blank" class="text-white" style="opacity:0.6;transition:opacity 0.2s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.6'"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="<?= $SITE['social']['twitter'] ?>" target="_blank" class="text-white" style="opacity:0.6;transition:opacity 0.2s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.6'"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="<?= $SITE['social']['instagram'] ?>" target="_blank" class="text-white" style="opacity:0.6;transition:opacity 0.2s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.6'"><i class="fa-brands fa-instagram"></i></a>
                        <a href="<?= $SITE['social']['linkedin'] ?>" target="_blank" class="text-white" style="opacity:0.6;transition:opacity 0.2s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.6'"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
