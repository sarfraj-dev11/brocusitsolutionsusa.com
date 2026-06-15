<?php
$page_title = 'Electronic Disclosure Consent | Brocus IT Solutions';
$page_desc  = 'Your consent to receive disclosures, agreements, and communications electronically from Brocus IT Solutions, including the requirements and how to withdraw consent.';
require_once __DIR__ . '/includes/bootstrap.php';
require_once __DIR__ . '/includes/head.php';
?>
<?php include 'includes/header.php'; ?>

<!-- HERO BANNER -->
<section class="page-hero" style="background:radial-gradient(ellipse 80% 80% at 50% 40%, #5746c6 0%, #5746c6 45%, #110c28 100%);">
  <div class="page-hero-inner">
    <span class="label">Legal</span>
    <h1 class="page-h">Electronic Disclosure &amp; Consent</h1>
    <p class="page-sub">Your consent to receive disclosures, agreements, and communications electronically from Brocus IT Solutions LLC.</p>
  </div>
</section>

<!-- CONTENT -->
<section style="background:linear-gradient(160deg, #fdfcff 0%, #f5f0ff 50%, #eff6ff 100%);position:relative;overflow:hidden;">
  <div style="position:absolute;top:-120px;right:-120px;width:500px;height:500px;border-radius:50%;background:radial-gradient(circle,#f0ebff 0%,transparent 70%);pointer-events:none;"></div>
  <div style="position:absolute;bottom:-80px;left:-80px;width:360px;height:360px;border-radius:50%;background:radial-gradient(circle,#ebf5ff 0%,transparent 70%);pointer-events:none;"></div>

<style>
    .legal-wrap {
        max-width: 1150px;
        margin: 0 auto;
        padding: 5rem 1.5rem 7rem;
        position: relative;
        z-index: 1;
    }

    .legal-meta {
        font-size: .82rem;
        color: #94A3B8;
        margin-bottom: 3rem;
        border-bottom: 1px solid rgba(15,23,42,.08);
        padding-bottom: 1.5rem
    }

    .legal-wrap h2 {
        font-weight: 700;
        margin: 2.5rem 0 .75rem;
        color: #0F172A
    }

    .legal-wrap p,
    .legal-wrap li {
        font-size: .92rem;
        color: #475569;
        line-height: 1.85;
        margin-bottom: .75rem
    }

    .legal-wrap ul {
        padding-left: 1.25rem;
        margin-bottom: .75rem
    }

    .legal-wrap a {
        color: #6D28D9
    }

    .legal-wrap address {
        font-style: normal;
        color: #374151;
        line-height: 1.8;
        font-size: .9rem;
        margin-top: .5rem
    }
</style>
<div class="legal-wrap">
    <p class="legal-meta">Last updated: June 2026</p>

    <p>This Electronic Disclosure and Consent ("Consent") explains how Brocus IT Solutions LLC ("Brocus," "we," "us," or "our") provides communications and disclosures to you electronically. By submitting a form on brocusitsolutionsusa.com, checking a consent box, or otherwise interacting with us electronically, you agree to the terms of this Consent.</p>

    <h2>1. Your consent to electronic records</h2>
    <p>You agree that we may provide any communication, notice, agreement, disclosure, or record (together, "Communications") to you electronically, rather than on paper. This includes our Terms and Conditions, Privacy Policy, this Consent, and any notices related to your request or to the services we provide.</p>

    <h2>2. How we deliver electronic communications</h2>
    <p>We may deliver Communications to you by:</p>
    <ul>
        <li>Posting them on the Site;</li>
        <li>Sending them to the email address you provide;</li>
        <li>Sending them by text message to the phone number you provide; or</li>
        <li>Otherwise displaying or delivering them through electronic means.</li>
    </ul>

    <h2>3. Your consent to be contacted electronically</h2>
    <p>By providing your phone number and email address, you consent to receive calls, text messages, and emails from Brocus and the third-party providers we work with, including messages sent using an automated telephone dialing system and prerecorded or artificial voice technology, for marketing and service purposes. Consent is not a condition of any purchase. Message and data rates may apply. You can reply STOP to opt out of text messages or HELP for help, and you can unsubscribe from marketing emails at any time.</p>

    <h2>4. Hardware and software you will need</h2>
    <p>To access and keep electronic Communications, you will need:</p>
    <ul>
        <li>A device with internet access;</li>
        <li>A current web browser that supports current security standards;</li>
        <li>A valid email account and the software to access it;</li>
        <li>The ability to view and save PDF documents; and</li>
        <li>Sufficient storage to save Communications or a printer to print them.</li>
    </ul>
    <p>If our hardware or software requirements change in a way that creates a material risk you will not be able to access Communications, we will notify you and give you the chance to withdraw your consent.</p>

    <h2>5. Keeping your information current</h2>
    <p>It is your responsibility to keep your email address and phone number current so we can reach you. You can update your contact details by emailing us at <a href="mailto:support@brocusitsolutionsusa.com">support@brocusitsolutionsusa.com</a>.</p>

    <h2>6. Requesting paper copies</h2>
    <p>You may request a paper copy of any electronic Communication by contacting us at the email or address below. We may charge a reasonable fee for paper copies unless charging a fee is prohibited by law.</p>

    <h2>7. Withdrawing your consent</h2>
    <p>You may withdraw your consent to receive Communications electronically at any time by contacting us at <a href="mailto:support@brocusitsolutionsusa.com">support@brocusitsolutionsusa.com</a>. If you withdraw consent, we may no longer be able to provide certain services to you electronically. Withdrawal of consent does not affect the validity of Communications provided before your withdrawal took effect.</p>

    <h2>8. Acknowledgment</h2>
    <p>By proceeding, you confirm that you can access information presented electronically, that your device meets the requirements above, and that you consent to receive Communications electronically as described here. If you do not agree, do not submit a form or otherwise transact with us electronically.</p>

    <h2>9. Contact us</h2>
    <address>Brocus IT Solutions LLC<br>10639 Mistflower Lane, Tampa, FL 33647<br>Email: <a href="mailto:support@brocusitsolutionsusa.com">support@brocusitsolutionsusa.com</a><br>Phone: <a href="tel:<?= PHONE_TEL ?>"><?= PHONE_DISPLAY ?></a></address>
</div>
</section>
<?php include 'includes/footer.php'; ?>