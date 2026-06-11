<?php
/**
 * HOME SECURITY LANDING PAGE
 */
$security = $SITE['services']['home-security'];
?>

<!-- ═══════ HERO ═══════ -->
<section class="hero-section">
    <div class="hero-bg" style="background-image:url('/assets/images/hero-security.webp');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-7">
                    <div class="reveal">
                        <span class="hero-badge">
                            <i class="fa-solid fa-shield-halved"></i>
                            Professional Home Security Systems
                        </span>
                        <h1 class="hero-title">
                            Smart Home Security <br>
                            Systems That <span class="text-accent">Protect</span> <br>
                            What Matters Most.
                        </h1>
                        <p class="hero-subtitle">
                            <?= $security['description'] ?>
                        </p>
                        <div class="hero-btn-group">
                            <a href="tel:<?= $security['phone'] ?>" class="btn-hero-primary">
                                <i class="fa-solid fa-phone-volume"></i> Get a Free Consultation
                            </a>
                            <a href="#quote-form" class="btn-hero-secondary">
                                <i class="fa-solid fa-arrow-right"></i> Get a Free Quote
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

<!-- ═══════ HOW IT WORKS ═══════ -->
<section class="section bg-light-section" id="how-it-works">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-badge">
                <i class="fa-solid fa-list-check"></i> How It Works
            </span>
            <h2>Simple. Smart. <span class="text-gradient">Secure.</span></h2>
            <p>Getting the right home security system shouldn't be complicated. We handle everything from consultation to professional monitoring.</p>
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

<!-- ═══════ PRODUCTS ═══════ -->
<section class="section" id="products">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-badge">
                <i class="fa-solid fa-microchip"></i> Security Equipment
            </span>
            <h2>Professional Equipment for <span class="text-gradient">Modern Homes</span></h2>
            <p>Industry-tested hardware built to work seamlessly together for round-the-clock protection.</p>
        </div>

        <div class="row g-4">
            <?php foreach ($security['products'] as $i => $product): ?>
            <div class="col-md-6 col-lg-4 reveal reveal-delay-<?= ($i % 3) + 1 ?>" id="<?= $product['slug'] ?>">
                <div class="product-card">
                    <div class="product-image">
                        <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" loading="lazy">
                        <div class="product-glow"></div>
                    </div>
                    <div class="product-body">
                        <h5><a href="/home-security#<?= $product['slug'] ?>"><?= $product['name'] ?></a></h5>
                        <p><?= $product['desc'] ?></p>
                        <div class="product-footer">
                            <a href="tel:<?= $security['phone'] ?>" class="link-arrow">
                                Get This Equipment <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════ FEATURED TECH BANNER ═══════ -->
<section class="section-lg">
    <div class="container">
        <div class="featured-tech-banner reveal">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <span class="ft-badge"><i class="fa-solid fa-bolt me-1"></i> Featured Tech</span>
                    <h2 class="fw-800 mb-3">Works Even Without Power or Internet</h2>
                    <p class="mb-0">Most security systems go dark during a power outage. Our systems keep running for 3 to 5 days without electricity and continue recording locally with cellular backup.</p>
                </div>
                <div class="col-lg-4 text-lg-end text-center">
                    <a href="tel:<?= $security['phone'] ?>" class="btn btn-light btn-lg rounded-pill px-4 py-3 fw-bold shadow-sm">
                        <i class="fa-solid fa-phone-volume me-2"></i> Protect My Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════ SERVICES (Dark Section) ═══════ -->
<section class="section bg-dark-section" id="security-services">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-badge" style="background:rgba(26,86,219,0.2);border-color:rgba(26,86,219,0.3);">
                <i class="fa-solid fa-headset"></i> Our Services
            </span>
            <h2 style="color:#fff;">Complete Home Security Services, <span class="text-gradient">Handled For You</span></h2>
            <p style="color:var(--color-gray-400);">From recommendation to monitoring, we ensure professional-grade protection without the complexity.</p>
        </div>

        <div class="row g-4">
            <?php foreach ($security['services_list'] as $i => $svc): ?>
            <div class="col-md-6 col-lg-4 reveal reveal-delay-<?= ($i % 3) + 1 ?>" id="<?= $svc['slug'] ?>">
                <div class="dark-service-card">
                    <div class="ds-image">
                        <img src="<?= $svc['image'] ?>" alt="<?= $svc['name'] ?>" loading="lazy">
                    </div>
                    <div class="ds-body">
                        <div class="ds-icon">
                            <i class="<?= $svc['icon'] ?>"></i>
                        </div>
                        <h4><a href="/home-security#<?= $svc['slug'] ?>"><?= $svc['name'] ?></a></h4>
                        <p class="mb-0"><?= $svc['desc'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

            <!-- Extra CTA card -->
            <div class="col-md-6 col-lg-4 reveal reveal-delay-3">
                <div class="dark-service-card d-flex align-items-center justify-content-center" style="background:var(--gradient-primary);min-height:380px;text-align:center;">
                    <div class="p-4">
                        <div style="width:64px;height:64px;border-radius:50%;background:rgba(255,255,255,0.15);display:flex;align-items:center;justify-content:center;margin:0 auto 1.25rem;font-size:1.5rem;color:#fff;">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <h4 style="color:#fff;font-size:1.15rem;margin-bottom:0.75rem;">Ready to Get Started?</h4>
                        <p style="color:rgba(255,255,255,0.7);font-size:0.88rem;margin-bottom:1.25rem;">Speak with a security advisor and get your custom quote today.</p>
                        <a href="tel:<?= $security['phone'] ?>" class="btn btn-light btn-lg rounded-pill px-4 py-2 fw-bold" style="font-size:0.92rem;">
                            Call <?= $security['phone_display'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════ WHY CHOOSE US ═══════ -->
<section class="section" id="why-us">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-badge">
                <i class="fa-solid fa-award"></i> Why Choose Us
            </span>
            <h2>Why Homeowners <span class="text-gradient">Trust Brocus</span></h2>
            <p>Professional-grade home security backed by years of experience and a commitment to your safety.</p>
        </div>

        <div class="row g-4">
            <?php
            $reasons = [
                ['icon' => 'fa-solid fa-user-shield',        'title' => 'Dedicated Advisors',         'desc' => 'Speak with real security experts who understand your unique home layout and recommend the right system.'],
                ['icon' => 'fa-solid fa-dollar-sign',        'title' => 'No Hidden Fees',             'desc' => 'Transparent, itemized pricing from the start. Know exactly what you\'re paying for before committing.'],
                ['icon' => 'fa-solid fa-certificate',        'title' => 'Certified Technicians',      'desc' => 'Every installation is performed by trained, certified professionals who ensure optimal device placement.'],
                ['icon' => 'fa-solid fa-headset',            'title' => '24/7 Expert Support',        'desc' => 'Our support team is available around the clock to help with any questions or system concerns.'],
                ['icon' => 'fa-solid fa-house-signal',       'title' => 'Smart Home Ready',           'desc' => 'Works with Amazon Alexa, Google Assistant, and other smart home platforms for voice control and automation.'],
                ['icon' => 'fa-solid fa-shield-check',       'title' => 'Satisfaction Guaranteed',    'desc' => 'We stand behind our service and equipment. Your satisfaction and safety are our top priority.'],
            ];
            foreach ($reasons as $i => $r):
            ?>
            <div class="col-md-6 col-lg-4 reveal reveal-delay-<?= ($i % 3) + 1 ?>">
                <div class="usp-card">
                    <div class="usp-icon">
                        <i class="<?= $r['icon'] ?>"></i>
                    </div>
                    <h5><?= $r['title'] ?></h5>
                    <p><?= $r['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
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
            <p>Answers to common questions about our home security systems, installation, and monitoring services.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion faq-accordion reveal" id="securityFaq">
                    <?php foreach ($security['faqs'] as $i => $faq): ?>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="sfHead<?= $i ?>">
                            <button class="accordion-button <?= $i > 0 ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#sfBody<?= $i ?>" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>">
                                <?= $faq['q'] ?>
                            </button>
                        </h3>
                        <div id="sfBody<?= $i ?>" class="accordion-collapse collapse <?= $i === 0 ? 'show' : '' ?>" data-bs-parent="#securityFaq">
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

<!-- ═══════ CTA + CONTACT ═══════ -->
<section class="section" id="quote-form">
    <div class="container">
        <div class="cta-section mb-5 reveal">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h2 class="fw-800 mb-3">Get Your Free Home Security Quote</h2>
                    <p class="mb-0">No commitment required. Tell us about your home and we'll recommend the right system for your needs and budget.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="tel:<?= $security['phone'] ?>" class="btn btn-light btn-lg rounded-pill px-4 py-3 fw-bold">
                        <i class="fa-solid fa-phone-volume me-2"></i> <?= $security['phone_display'] ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-lg-7 reveal">
                <div class="contact-form-card">
                    <h4 class="mb-1" style="font-family:var(--font-heading);font-weight:700;">Request Your Free Quote</h4>
                    <p class="text-muted mb-4" style="font-size:0.9rem;">Fill out the form and a security advisor will contact you.</p>
                    <form id="contactForm">
                        <div class="form-fields">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="hs_name">Full Name</label>
                                    <input type="text" class="form-control" id="hs_name" name="name" placeholder="Your full name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="hs_phone">Phone Number</label>
                                    <input type="tel" class="form-control" id="hs_phone" name="phone" placeholder="(555) 123-4567" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="hs_email">Email Address</label>
                                    <input type="email" class="form-control" id="hs_email" name="email" placeholder="you@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="hs_zip">ZIP Code</label>
                                    <input type="text" class="form-control" id="hs_zip" name="zip" placeholder="12345" maxlength="5" inputmode="numeric" oninput="this.value=this.value.replace(/\D/g,'')">
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="hs_message">Tell Us About Your Home (Optional)</label>
                                    <textarea class="form-control" id="hs_message" name="message" rows="3" placeholder="Number of entry points, stories, any specific concerns..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn-primary-gradient w-100 justify-content-center" style="font-size:1rem;padding:0.85rem 2rem;">
                                        <i class="fa-solid fa-paper-plane"></i> Get My Free Quote
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-success">
                            <div class="success-icon">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>
                            <h4>Thank You!</h4>
                            <p>We've received your request. A security advisor will contact you shortly to discuss the best system for your home.</p>
                            <a href="tel:<?= $security['phone'] ?>" class="btn-primary-gradient mt-3" style="text-decoration:none;">
                                <i class="fa-solid fa-phone-volume"></i> Or Call Now: <?= $security['phone_display'] ?>
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 reveal reveal-delay-1">
                <div class="contact-info-card">
                    <h4 class="text-white mb-4" style="font-family:var(--font-heading);font-weight:700;">Talk to a Security Expert</h4>

                    <div class="contact-info-item">
                        <div class="ci-icon"><i class="fa-solid fa-phone"></i></div>
                        <div>
                            <h6>Call Us</h6>
                            <a href="tel:<?= $security['phone'] ?>"><?= $security['phone_display'] ?></a>
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
                            <h6>Hours</h6>
                            <p><?= $SITE['hours']['display'] ?></p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="ci-icon"><i class="fa-solid fa-map-location-dot"></i></div>
                        <div>
                            <h6>Service Area</h6>
                            <p>All 50 US States</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
