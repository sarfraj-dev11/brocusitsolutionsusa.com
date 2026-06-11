<?php
/**
 * PRIVACY POLICY PAGE
 */
?>

<!-- ═══════ HERO ═══════ -->
<section class="hero-section" style="min-height:40vh;">
    <div class="hero-bg" style="background-image:url('/assets/images/hero-home.webp');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8 reveal">
                    <h1 class="hero-title">Privacy <span class="text-accent">Policy</span></h1>
                    <p class="hero-subtitle mx-auto" style="max-width:550px;">
                        Your privacy is important to us. This policy explains how we collect, use, and protect your information.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════ CONTENT ═══════ -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="legal-content">
                    <p><strong>Last Updated:</strong> <?= date('F j, Y') ?></p>
                    <p><?= $SITE['company'] ?> ("we," "us," or "our") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website <?= $SITE['domain'] ?> and use our services.</p>

                    <h2>1. Information We Collect</h2>
                    <h3>Personal Information</h3>
                    <p>We may collect the following personal information when you interact with our website or services:</p>
                    <ul>
                        <li>Name and contact information (email address, phone number)</li>
                        <li>Mailing address and ZIP code</li>
                        <li>Service preferences and inquiry details</li>
                    </ul>

                    <h3>Automatically Collected Information</h3>
                    <p>When you visit our website, certain information may be collected automatically:</p>
                    <ul>
                        <li>Browser type and version</li>
                        <li>Operating system</li>
                        <li>IP address and general location data</li>
                        <li>Pages visited and time spent on pages</li>
                        <li>Referring website or source</li>
                    </ul>

                    <h2>2. How We Use Your Information</h2>
                    <p>We use the information we collect to:</p>
                    <ul>
                        <li>Respond to your inquiries and provide customer service</li>
                        <li>Process your service requests and provide quotes</li>
                        <li>Send relevant information about our services when requested</li>
                        <li>Improve our website and user experience</li>
                        <li>Comply with applicable laws and regulations</li>
                    </ul>

                    <h2>3. Information Sharing</h2>
                    <p>We do not sell, trade, or otherwise transfer your personal information to outside parties except in the following cases:</p>
                    <ul>
                        <li>Trusted service providers who assist in operating our website and conducting our business, subject to confidentiality agreements</li>
                        <li>When required by law, regulation, or legal process</li>
                        <li>To protect our rights, privacy, safety, or property</li>
                    </ul>

                    <h2>4. Data Security</h2>
                    <p>We implement industry-standard security measures to protect your personal information. However, no method of transmission over the Internet or electronic storage is 100% secure, and we cannot guarantee absolute security.</p>

                    <h2>5. Cookies and Tracking</h2>
                    <p>Our website may use cookies and similar tracking technologies to enhance your browsing experience. You can set your browser to refuse all or some browser cookies. If you disable cookies, some parts of our website may not function properly.</p>

                    <h2>6. Third-Party Links</h2>
                    <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices of those websites. We encourage you to review the privacy policies of any third-party sites you visit.</p>

                    <h2>7. Children's Privacy</h2>
                    <p>Our services are not intended for individuals under the age of 18. We do not knowingly collect personal information from children.</p>

                    <h2>8. Your Rights</h2>
                    <p>Depending on your location, you may have the right to:</p>
                    <ul>
                        <li>Access the personal information we hold about you</li>
                        <li>Request correction of inaccurate information</li>
                        <li>Request deletion of your personal information</li>
                        <li>Opt out of certain data processing activities</li>
                    </ul>
                    <p>To exercise any of these rights, please contact us using the information below.</p>

                    <h2>9. Changes to This Policy</h2>
                    <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated revision date. Your continued use of our website after changes constitutes acceptance of the updated policy.</p>

                    <h2>10. Contact Us</h2>
                    <p>If you have questions or concerns about this Privacy Policy, please contact us:</p>
                    <ul>
                        <li><strong>Company:</strong> <?= $SITE['company'] ?></li>
                        <li><strong>Email:</strong> <a href="mailto:<?= $SITE['email'] ?>"><?= $SITE['email'] ?></a></li>
                        <li><strong>Phone:</strong> <a href="tel:<?= $SITE['phone'] ?>"><?= $SITE['phone_display'] ?></a></li>
                        <li><strong>Address:</strong> <?= $SITE['address']['full'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
