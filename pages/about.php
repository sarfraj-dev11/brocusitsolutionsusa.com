<?php
/**
 * ABOUT US PAGE
 */
?>

<!-- ═══════ HERO ═══════ -->
<section class="hero-section" style="min-height:55vh;">
    <div class="hero-bg" style="background-image:url('/assets/images/hero-home.webp');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8 reveal">
                    <span class="hero-badge">
                        <i class="fa-solid fa-building"></i> About Us
                    </span>
                    <h1 class="hero-title">About <span class="text-accent"><?= $SITE['company_short'] ?></span></h1>
                    <p class="hero-subtitle mx-auto" style="max-width:620px;">
                        We are a trusted provider of home security and technology services, dedicated to protecting American families across all 50 states.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════ OUR STORY ═══════ -->
<section class="section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 reveal">
                <span class="section-badge d-inline-flex mb-3">
                    <i class="fa-solid fa-book-open"></i> Our Story
                </span>
                <h2>Protecting Homes. <span class="text-gradient">Empowering Lives.</span></h2>
                <p class="mt-3">
                    <?= $SITE['company'] ?> was founded with a simple mission: to make professional-grade home security accessible to every American homeowner. We believe that everyone deserves to feel safe in their own home, regardless of where they live.
                </p>
                <p>
                    Since <?= $SITE['founded_year'] ?>, we have helped thousands of families across the United States protect their homes with professionally installed, 24/7 monitored smart security systems. Our team of dedicated advisors works with each customer to design a custom security solution that fits their home, lifestyle, and budget.
                </p>
                <p>
                    Today, we continue to expand our services portfolio, adding technology solutions that enhance everyday life for our customers. From smart home security to emerging technology services, we're committed to being the trusted partner families turn to for their home service needs.
                </p>
            </div>
            <div class="col-lg-6 reveal reveal-delay-1">
                <img src="/assets/images/hero-security.webp" alt="About <?= $SITE['company'] ?>" class="img-fluid rounded-4 shadow-lg" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- ═══════ OUR VALUES ═══════ -->
<section class="section bg-light-section">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-badge">
                <i class="fa-solid fa-heart"></i> Our Values
            </span>
            <h2>What <span class="text-gradient">Drives Us</span></h2>
            <p>The principles that guide everything we do, from customer interactions to service delivery.</p>
        </div>

        <div class="row g-4">
            <?php
            $values = [
                ['icon' => 'fa-solid fa-shield-halved',     'title' => 'Safety First',       'desc' => 'Every recommendation we make prioritizes the safety and security of your family and home above all else.'],
                ['icon' => 'fa-solid fa-handshake',         'title' => 'Trust & Transparency','desc' => 'We build lasting relationships through honest pricing, clear communication, and genuine care for our customers.'],
                ['icon' => 'fa-solid fa-medal',             'title' => 'Excellence',          'desc' => 'We hold ourselves to the highest standards in every aspect — from equipment quality to installation and ongoing support.'],
                ['icon' => 'fa-solid fa-users',             'title' => 'Customer Focus',      'desc' => 'Your needs come first. We listen, understand, and deliver solutions that truly work for your unique situation.'],
                ['icon' => 'fa-solid fa-lightbulb',         'title' => 'Innovation',          'desc' => 'We stay ahead of technology trends to bring you the most effective and modern security solutions available.'],
                ['icon' => 'fa-solid fa-map-location-dot',  'title' => 'Nationwide Reach',    'desc' => 'From coast to coast, we serve all 50 states with the same high standards of service and professionalism.'],
            ];
            foreach ($values as $i => $val):
            ?>
            <div class="col-md-6 col-lg-4 reveal reveal-delay-<?= ($i % 3) + 1 ?>">
                <div class="about-value-card">
                    <div class="av-icon">
                        <i class="<?= $val['icon'] ?>"></i>
                    </div>
                    <h5><?= $val['title'] ?></h5>
                    <p class="mb-0" style="font-size:0.9rem;color:var(--color-gray-500);"><?= $val['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════ MISSION ═══════ -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center reveal">
                <span class="section-badge d-inline-flex mb-3">
                    <i class="fa-solid fa-bullseye"></i> Our Mission
                </span>
                <h2 class="mb-4">Making Professional Security <span class="text-gradient">Accessible to All</span></h2>
                <p style="font-size:1.1rem;line-height:1.85;color:var(--color-gray-600);">
                    Our mission is to empower American homeowners with trusted, professional-grade home security and technology solutions. We believe in delivering exceptional service through transparent pricing, expert guidance, and a genuine commitment to every family we serve. Every interaction, from the first phone call to ongoing monitoring, reflects our dedication to keeping your home safe.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ═══════ CTA ═══════ -->
<section class="section-lg">
    <div class="container">
        <div class="cta-section reveal">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h2 class="fw-800 mb-3">Ready to Work With Us?</h2>
                    <p class="mb-0">Get in touch today to learn how we can help protect your home and family with our professional services.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="tel:<?= $SITE['phone'] ?>" class="btn btn-light btn-lg rounded-pill px-4 py-3 fw-bold">
                        <i class="fa-solid fa-phone-volume me-2"></i> <?= $SITE['phone_display'] ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
