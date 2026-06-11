</main>

<!-- ═══════════════════════════════════════════════════
     FOOTER
     ═══════════════════════════════════════════════════ -->
<footer class="site-footer">
    <div class="container">
        <div class="row g-4 g-lg-5">

            <!-- Col 1: Company -->
            <div class="col-lg-4 col-md-6">
                <a href="/">
                    <img src="/assets/images/logo-white.webp" alt="<?= $SITE['company'] ?>" height="45" class="mb-3">
                </a>
                <p class="footer-brand-desc">
                    <?= $SITE['tagline'] ?> We provide trusted home security systems, smart automation, and technology services across all 50 US states.
                </p>
                <div class="footer-social">
                    <a href="<?= $SITE['social']['facebook'] ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="<?= $SITE['social']['twitter'] ?>" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="<?= $SITE['social']['instagram'] ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="<?= $SITE['social']['linkedin'] ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="<?= $SITE['social']['youtube'] ?>" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>

            <!-- Col 2: Our Services -->
            <div class="col-lg-2 col-md-6 col-6">
                <h5>Our Services</h5>
                <ul class="footer-links">
                    <?php foreach ($SITE['services'] as $svc): ?>
                        <?php if (!empty($svc['active'])): ?>
                        <li><a href="/<?= $svc['slug'] ?>"><?= $svc['name'] ?></a></li>
                            <?php if (!empty($svc['products'])): ?>
                                <?php foreach (array_slice($svc['products'], 0, 4) as $product): ?>
                                <li><a href="/<?= $svc['slug'] ?>#<?= $product['slug'] ?>"><?= $product['name'] ?></a></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Col 3: Quick Links -->
            <div class="col-lg-2 col-md-6 col-6">
                <h5>Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Col 4: Contact -->
            <div class="col-lg-4 col-md-6">
                <h5>Contact Us</h5>
                <div class="footer-contact-item">
                    <i class="fa-solid fa-phone"></i>
                    <div>
                        <a href="tel:<?= $SITE['phone'] ?>"><?= $SITE['phone_display'] ?></a>
                        <br><small class="text-muted"><?= $SITE['hours']['display'] ?></small>
                    </div>
                </div>
                <div class="footer-contact-item">
                    <i class="fa-solid fa-envelope"></i>
                    <div>
                        <a href="mailto:<?= $SITE['email'] ?>"><?= $SITE['email'] ?></a>
                    </div>
                </div>
                <div class="footer-contact-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <div>
                        <span style="color:var(--color-gray-400);font-size:0.9rem;"><?= $SITE['address']['full'] ?></span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Disclaimer -->
        <div class="mt-4 pt-3 border-top" style="border-color:rgba(255,255,255,0.08)!important;">
            <p style="font-size:0.78rem;color:var(--color-gray-500);line-height:1.6;">
                <?= $SITE['legal']['disclaimer'] ?>
            </p>
        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p><?= $SITE['legal']['copyright'] ?></p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>
                        <a href="/privacy-policy">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top -->
<button class="back-to-top" aria-label="Back to top" title="Back to top">
    <i class="fa-solid fa-arrow-up"></i>
</button>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Site JS -->
<script src="/assets/js/main.js"></script>

</body>
</html>
