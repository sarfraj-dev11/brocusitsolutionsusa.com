<?php
/**
 * CONTACT US PAGE
 */
?>

<!-- ═══════ HERO ═══════ -->
<section class="hero-section" style="min-height:50vh;">
    <div class="hero-bg" style="background-image:url('/assets/images/hero-home.webp');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8 reveal">
                    <span class="hero-badge">
                        <i class="fa-solid fa-envelope"></i> Contact Us
                    </span>
                    <h1 class="hero-title">Get In <span class="text-accent">Touch</span></h1>
                    <p class="hero-subtitle mx-auto" style="max-width:580px;">
                        Have a question or ready to get started? Reach out to our team — we're here to help.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════ CONTACT FORM + INFO ═══════ -->
<section class="section" id="quote-form">
    <div class="container">
        <div class="row g-4">
            <!-- Form -->
            <div class="col-lg-7 reveal">
                <div class="contact-form-card">
                    <h4 class="mb-1" style="font-family:var(--font-heading);font-weight:700;">Send Us a Message</h4>
                    <p class="text-muted mb-4" style="font-size:0.9rem;">Fill out the form below and we'll get back to you as soon as possible.</p>
                    <form id="contactForm">
                        <div class="form-fields">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="ct_name">Full Name</label>
                                    <input type="text" class="form-control" id="ct_name" name="name" placeholder="Your full name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="ct_phone">Phone Number</label>
                                    <input type="tel" class="form-control" id="ct_phone" name="phone" placeholder="(555) 123-4567" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="ct_email">Email Address</label>
                                    <input type="email" class="form-control" id="ct_email" name="email" placeholder="you@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="ct_service">Subject</label>
                                    <select class="form-select" id="ct_service" name="service" required>
                                        <option value="" selected disabled>Select a topic</option>
                                        <?php foreach ($SITE['services'] as $svc): ?>
                                            <?php if (!empty($svc['active'])): ?>
                                            <option value="<?= $svc['slug'] ?>"><?= $svc['name'] ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        <option value="billing">Billing &amp; Account</option>
                                        <option value="support">Technical Support</option>
                                        <option value="other">General Inquiry</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="ct_message">Your Message</label>
                                    <textarea class="form-control" id="ct_message" name="message" rows="5" placeholder="How can we help you?" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn-primary-gradient w-100 justify-content-center" style="font-size:1rem;padding:0.85rem 2rem;">
                                        <i class="fa-solid fa-paper-plane"></i> Send Message
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-success">
                            <div class="success-icon">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>
                            <h4>Message Sent!</h4>
                            <p>Thank you for reaching out. A member of our team will respond to your message within 24 hours.</p>
                            <a href="tel:<?= $SITE['phone'] ?>" class="btn-primary-gradient mt-3" style="text-decoration:none;">
                                <i class="fa-solid fa-phone-volume"></i> Need Immediate Help? Call <?= $SITE['phone_display'] ?>
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5 reveal reveal-delay-1">
                <div class="contact-info-card">
                    <h4 class="text-white mb-4" style="font-family:var(--font-heading);font-weight:700;">Contact Information</h4>

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
                            <h6>Office Address</h6>
                            <p><?= $SITE['address']['full'] ?></p>
                        </div>
                    </div>

                    <hr style="border-color:rgba(255,255,255,0.1);margin:1.5rem 0;">

                    <h6 class="text-white mb-3" style="font-size:0.88rem;">Follow Us</h6>
                    <div class="d-flex gap-3">
                        <?php foreach ($SITE['social'] as $platform => $url): ?>
                        <a href="<?= $url ?>" target="_blank" rel="noopener noreferrer" class="text-white" style="opacity:0.6;transition:opacity 0.2s;font-size:1.15rem;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.6'" aria-label="<?= ucfirst($platform) ?>">
                            <?php
                            $iconMap = [
                                'facebook' => 'fa-brands fa-facebook-f',
                                'twitter' => 'fa-brands fa-x-twitter',
                                'instagram' => 'fa-brands fa-instagram',
                                'linkedin' => 'fa-brands fa-linkedin-in',
                                'youtube' => 'fa-brands fa-youtube',
                            ];
                            ?>
                            <i class="<?= $iconMap[$platform] ?? 'fa-solid fa-link' ?>"></i>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
