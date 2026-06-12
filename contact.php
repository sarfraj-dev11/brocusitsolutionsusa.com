<?php
require_once __DIR__ . '/includes/bootstrap.php';
$page_title = 'Contact Brocus IT Solutions | Free, No-Pressure Advice';
$page_desc  = 'Get in touch with Brocus IT Solutions for free, independent, no-pressure advice on your home decisions. Call, email, or request a callback. Real, Human Advisors ready to help.';
$success    = $_SESSION['form_success'] ?? '';
$error      = $_SESSION['form_error']   ?? '';
$vals       = $_SESSION['form_values']  ?? [];
unset($_SESSION['form_success'], $_SESSION['form_error'], $_SESSION['form_values']);
require_once __DIR__ . '/includes/head.php';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<section class="page-hero" style="background:radial-gradient(ellipse 80% 80% at 50% 40%, #5746c6 0%, #5746c6 45%, #110c28 100%);">
  <div class="page-hero-inner">
    <span class="label">Get in touch</span>
    <h1 class="page-h">Talk to an Independent Advisor</h1>
    <p class="page-sub">Have a question, or ready for a free consultation? We are here to help, and there is never any pressure to buy. The fastest way to get answers is to call and speak with a real advisor.</p>
    <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;margin-top:2.5rem;">
      <a href="tel:<?= PHONE_TEL ?>" class="btn btn-primary btn-lg"><i class="fas fa-phone" style="font-size:.85rem"></i> Call us: <?= PHONE_DISPLAY ?></a>
      <a href="#contact-form" class="btn btn-outline btn-lg">Request a Callback</a>
    </div>
    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:2rem;margin-top:3rem;">
      <?php foreach (['Free Consultation', 'No Sales Pressure', 'Real, Human Advisors', 'One Business Day Response'] as $t): ?>
        <span style="display:inline-flex;align-items:center;gap:.5rem;font-size:.82rem;color:rgba(255,255,255,.5);"><i class="fas fa-check" style="color:#A78BFA;font-size:.65rem;"></i><?= $t ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CONTACT GRID -->
<section style="padding:5rem 0 7rem;background:linear-gradient(160deg, #fdfcff 0%, #f5f0ff 50%, #eff6ff 100%);position:relative;overflow:hidden;">
  <div style="position:absolute;top:-120px;right:-120px;width:500px;height:500px;border-radius:50%;background:radial-gradient(circle,#f0ebff 0%,transparent 70%);pointer-events:none;"></div>
  <div style="position:absolute;bottom:-80px;left:-80px;width:360px;height:360px;border-radius:50%;background:radial-gradient(circle,#ebf5ff 0%,transparent 70%);pointer-events:none;"></div>
  <div class="contact-grid">
    <!-- Left: Contact info -->
    <div>
      <h2 style="font-family:var(--font-display);font-size:1.5rem;font-weight:700;margin-bottom:2rem;color:#0F172A">How to reach us</h2>
      <?php foreach (
        [
          ['i' => 'fa-phone', 'c' => '#4F46E5', 't' => 'Phone', 'v' => PHONE_DISPLAY, 'href' => 'tel:' . PHONE_TEL],
          ['i' => 'fa-envelope', 'c' => '#7C3AED', 't' => 'Email', 'v' => EMAIL_INFO, 'href' => 'mailto:' . EMAIL_INFO],
          ['i' => 'fa-location-dot', 'c' => '#059669', 't' => 'Mailing Address', 'v' => SITE_NAME . '<br>' . ADDR_LINE1 . '<br>' . ADDR_CITY . ', ' . ADDR_STATE . ' ' . ADDR_ZIP, 'href' => null],
          ['i' => 'fa-clock', 'c' => '#D97706', 't' => 'Hours', 'v' => HOURS_WEEKDAY . '<br>' . HOURS_SATURDAY, 'href' => null],
        ] as $c
      ): ?>
        <div class="contact-info-item" style="border-bottom-color:rgba(15,23,42,.08)">
          <div class="contact-info-icon" style="background:rgba(124,58,237,.08);border-color:rgba(124,58,237,.15);color:<?= $c['c'] ?>"><i class="fas <?= $c['i'] ?>"></i></div>
          <div>
            <div style="font-size:.75rem;font-weight:700;color:#64748B;letter-spacing:.08em;text-transform:uppercase;margin-bottom:.25rem"><?= $c['t'] ?></div>
            <?php if ($c['href']): ?><a href="<?= $c['href'] ?>" style="color:#0F172A;font-weight:600;text-decoration:none;transition:color .2s" onmouseover="this.style.color='#7C3AED'" onmouseout="this.style.color='#0F172A'"><?= $c['v'] ?></a>
            <?php else: ?><div style="color:#374151;line-height:1.6"><?= $c['v'] ?></div><?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>

      <!-- What to expect -->
      <div style="background:rgba(124,58,237,.05);border:1px solid rgba(124,58,237,.12);border-radius:16px;padding:1.5rem;margin-top:1rem">
        <h3 style="font-size:.9rem;font-weight:700;margin-bottom:1rem;color:#6D28D9">What to expect when you reach out</h3>
        <?php foreach (['A friendly conversation, not a sales script', 'Simple questions about your home and what you are looking for', 'Clear, honest guidance about your options', 'A recommendation only if it genuinely fits — zero obligation to move forward'] as $e): ?>
          <div style="display:flex;align-items:flex-start;gap:.625rem;margin-bottom:.625rem;font-size:.85rem;color:#475569">
            <i class="fas fa-check" style="color:#059669;font-size:.6rem;margin-top:.3rem;flex-shrink:0"></i><?= $e ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Right: Form -->
    <style>
      #contact-form .form-control::placeholder { color: #374151 !important; opacity: 1; }
      .field-error-msg {
        display: none;
        font-size: .78rem;
        color: #DC2626;
        margin-top: .35rem;
        line-height: 1.4;
        align-items: center;
        gap: .35rem;
      }
      .field-error-msg.visible { display: flex; }
      .form-control.input-error {
        border-color: #DC2626 !important;
        background: #FEF2F2 !important;
        box-shadow: 0 0 0 3px rgba(220,38,38,.1);
      }
      .phone-input-wrapper {
        display: flex;
        align-items: center;
        background: #F8FAFC;
        border: 1px solid #E2E8F0;
        border-radius: 12px;
        overflow: hidden;
        transition: border-color .2s, box-shadow .2s;
      }
      .phone-input-wrapper:focus-within {
        border-color: #7C3AED;
        box-shadow: 0 0 0 3px rgba(124,58,237,.1);
      }
      .phone-input-wrapper.input-error {
        border-color: #DC2626 !important;
        background: #FEF2F2 !important;
        box-shadow: 0 0 0 3px rgba(220,38,38,.1);
      }
      .phone-prefix {
        display: flex;
        align-items: center;
        gap: .4rem;
        padding: 0 .75rem;
        font-size: .875rem;
        font-weight: 600;
        color: #374151;
        white-space: nowrap;
        background: rgba(0,0,0,.02);
        border-right: 1px solid #E2E8F0;
        height: 100%;
        user-select: none;
      }
      .phone-prefix .usa-flag {
        width: 22px;
        height: 15px;
        border-radius: 2px;
        object-fit: cover;
        flex-shrink: 0;
      }
      .phone-input-wrapper .form-control {
        border: none !important;
        background: transparent !important;
        box-shadow: none !important;
        flex: 1;
        min-width: 0;
      }
      .phone-input-wrapper .form-control:focus {
        box-shadow: none !important;
        outline: none !important;
      }
      .recaptcha-error-msg {
        display: none;
        font-size: .78rem;
        color: #DC2626;
        margin-top: .35rem;
        line-height: 1.4;
        align-items: center;
        gap: .35rem;
      }
      .recaptcha-error-msg.visible { display: flex; }
    </style>
    <div class="contact-form" id="contact-form" style="background:#fff;border:1px solid #E2E8F0;box-shadow:0 12px 40px rgba(15,23,42,.06);">
      <h2 style="font-size:1.25rem;font-weight:700;margin-bottom:.5rem;color:#0F172A">Request a Free Consultation</h2>
      <p style="font-size:.875rem;color:#64748B;margin-bottom:1.25rem">An advisor will get back to you within one business day.</p>
      <?php if ($success): ?><div style="background:rgba(16,185,129,.08);border:1px solid rgba(16,185,129,.25);border-radius:10px;padding:1rem;font-size:.9rem;color:#059669;margin-bottom:1rem"><?= $success ?></div><?php endif; ?>
      <?php if ($error):   ?><div style="background:rgba(239,68,68,.08);border:1px solid rgba(239,68,68,.25);border-radius:10px;padding:1rem;font-size:.9rem;color:#DC2626;margin-bottom:1rem"><?= $error ?></div><?php endif; ?>
      <form id="contactFormEl" action="<?= url('handlers/contact-handler.php') ?>" method="POST" novalidate>
        <input type="hidden" name="csrf_token" value="<?= csrfToken() ?>">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;" class="form-grid-2">
          <div class="form-group">
            <label class="form-label" for="full-name" style="color:#374151">Full Name <span style="color:#DC2626">*</span></label>
            <input type="text" id="full-name" name="full_name" class="form-control" placeholder="Jane Smith" value="<?= htmlspecialchars($vals['name'] ?? '') ?>" style="background:#F8FAFC;border-color:#E2E8F0;color:#0F172A;">
            <div class="field-error-msg" id="error-full-name"><i class="fas fa-exclamation-circle" style="font-size:.7rem;flex-shrink:0;"></i> <span></span></div>
          </div>
          <div class="form-group">
            <label class="form-label" for="phone" style="color:#374151">Phone Number <span style="color:#DC2626">*</span></label>
            <div class="phone-input-wrapper" id="phone-wrapper">
              <div class="phone-prefix">
                <svg class="usa-flag" viewBox="0 0 60 30" xmlns="http://www.w3.org/2000/svg">
                  <rect width="60" height="30" fill="#B22234"/>
                  <rect y="2.31" width="60" height="2.31" fill="#fff"/>
                  <rect y="6.92" width="60" height="2.31" fill="#fff"/>
                  <rect y="11.54" width="60" height="2.31" fill="#fff"/>
                  <rect y="16.15" width="60" height="2.31" fill="#fff"/>
                  <rect y="20.77" width="60" height="2.31" fill="#fff"/>
                  <rect y="25.38" width="60" height="2.31" fill="#fff"/>
                  <rect width="24" height="16.15" fill="#3C3B6E"/>
                  <g fill="#fff" font-size="2" font-family="Arial">
                    <circle cx="2.4" cy="1.5" r=".8"/><circle cx="7.2" cy="1.5" r=".8"/><circle cx="12" cy="1.5" r=".8"/><circle cx="16.8" cy="1.5" r=".8"/><circle cx="21.6" cy="1.5" r=".8"/>
                    <circle cx="4.8" cy="3.2" r=".8"/><circle cx="9.6" cy="3.2" r=".8"/><circle cx="14.4" cy="3.2" r=".8"/><circle cx="19.2" cy="3.2" r=".8"/>
                    <circle cx="2.4" cy="4.9" r=".8"/><circle cx="7.2" cy="4.9" r=".8"/><circle cx="12" cy="4.9" r=".8"/><circle cx="16.8" cy="4.9" r=".8"/><circle cx="21.6" cy="4.9" r=".8"/>
                    <circle cx="4.8" cy="6.6" r=".8"/><circle cx="9.6" cy="6.6" r=".8"/><circle cx="14.4" cy="6.6" r=".8"/><circle cx="19.2" cy="6.6" r=".8"/>
                    <circle cx="2.4" cy="8.3" r=".8"/><circle cx="7.2" cy="8.3" r=".8"/><circle cx="12" cy="8.3" r=".8"/><circle cx="16.8" cy="8.3" r=".8"/><circle cx="21.6" cy="8.3" r=".8"/>
                    <circle cx="4.8" cy="10" r=".8"/><circle cx="9.6" cy="10" r=".8"/><circle cx="14.4" cy="10" r=".8"/><circle cx="19.2" cy="10" r=".8"/>
                    <circle cx="2.4" cy="11.7" r=".8"/><circle cx="7.2" cy="11.7" r=".8"/><circle cx="12" cy="11.7" r=".8"/><circle cx="16.8" cy="11.7" r=".8"/><circle cx="21.6" cy="11.7" r=".8"/>
                    <circle cx="4.8" cy="13.4" r=".8"/><circle cx="9.6" cy="13.4" r=".8"/><circle cx="14.4" cy="13.4" r=".8"/><circle cx="19.2" cy="13.4" r=".8"/>
                    <circle cx="2.4" cy="15" r=".8"/><circle cx="7.2" cy="15" r=".8"/><circle cx="12" cy="15" r=".8"/><circle cx="16.8" cy="15" r=".8"/><circle cx="21.6" cy="15" r=".8"/>
                  </g>
                </svg>
                +1
              </div>
              <input type="tel" id="phone" name="phone" class="form-control" placeholder="(555) 000-0000" value="<?= htmlspecialchars($vals['phone'] ?? '') ?>" maxlength="10" style="color:#0F172A;">
            </div>
            <div class="field-error-msg" id="error-phone"><i class="fas fa-exclamation-circle" style="font-size:.7rem;flex-shrink:0;"></i> <span></span></div>
          </div>
        </div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;" class="form-grid-2">
          <div class="form-group">
            <label class="form-label" for="email" style="color:#374151">Email Address <span style="color:#DC2626">*</span></label>
            <input type="email" id="email" name="email" class="form-control" placeholder="jane@example.com" value="<?= htmlspecialchars($vals['email'] ?? '') ?>" style="background:#F8FAFC;border-color:#E2E8F0;color:#0F172A;">
            <div class="field-error-msg" id="error-email"><i class="fas fa-exclamation-circle" style="font-size:.7rem;flex-shrink:0;"></i> <span></span></div>
          </div>
          <div class="form-group">
            <label class="form-label" for="zip" style="color:#374151">ZIP Code <span style="color:#DC2626">*</span></label>
            <input type="text" id="zip" name="zip" class="form-control" placeholder="33647" maxlength="5" style="background:#F8FAFC;border-color:#E2E8F0;color:#0F172A;">
            <div class="field-error-msg" id="error-zip"><i class="fas fa-exclamation-circle" style="font-size:.7rem;flex-shrink:0;"></i> <span></span></div>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="message" style="color:#374151">How Can We Help You? <span style="font-weight:400;opacity:.6">(optional)</span></label>
          <textarea id="message" name="message" class="form-control" rows="4" placeholder="Tell us a bit about your home and what you are looking for…" style="background:#F8FAFC;border-color:#E2E8F0;color:#0F172A;"><?= htmlspecialchars($vals['message'] ?? '') ?></textarea>
        </div>

        <!-- Google reCAPTCHA v2 -->
        <div class="form-group" style="margin-bottom:1rem;">
          <div class="g-recaptcha" data-sitekey="6Ld7fxstAAAAAPfyyh4pFgDp5eYLfGi68nJT0ZIU" data-callback="onRecaptchaSuccess" data-expired-callback="onRecaptchaExpired"></div>
          <div class="recaptcha-error-msg" id="error-recaptcha"><i class="fas fa-exclamation-circle" style="font-size:.7rem;flex-shrink:0;"></i> <span>Please verify that you are not a robot.</span></div>
        </div>

        <button type="submit" id="contactSubmitBtn" class="btn btn-primary" style="width:100%;justify-content:center;padding:1.1rem 2rem;font-size:1rem;border-radius:14px;background:linear-gradient(135deg,#7C3AED,#4F46E5);border:none;box-shadow:0 12px 30px rgba(124,58,237,.3);transition:all .3s;" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 20px 40px rgba(124,58,237,.45)';" onmouseout="this.style.transform='none';this.style.boxShadow='0 12px 30px rgba(124,58,237,.3)';">
          Request Consultation <i class="fas fa-arrow-right" style="font-size:.85rem;margin-left:.5rem;"></i>
        </button>

        <p style="font-size:.72rem;color:#94A3B8;line-height:1.6;margin-top:1.25rem">
          By submitting this form and clicking "Request a Callback," you confirm the information is yours and you agree, by electronic signature, to our
          <a href="electronic-disclosure-consent.php" style="color:#6D28D9;text-decoration:underline">Electronic Disclosure Consent</a>,
          <a href="terms-and-conditions.php" style="color:#6D28D9;text-decoration:underline">Terms and Conditions</a>, and
          <a href="privacy-policy.php" style="color:#6D28D9;text-decoration:underline">Privacy Policy</a>.
          You also give Brocus IT Solutions LLC and the providers it works with your prior express written consent to contact you at the phone number and email address you provide, including by automated telephone dialing system, prerecorded or artificial voice calls, and text messages, for marketing and service purposes. Consent is not a condition of any purchase. Message and data rates may apply. Reply STOP to opt out of texts at any time, or HELP for help.
        </p>
      </form>
    </div>

    <!-- Google reCAPTCHA v2 API -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Contact Form Validation -->
    <script>
    (function() {
      'use strict';

      const form = document.getElementById('contactFormEl');
      if (!form) return;

      // Helper: show error
      function showError(fieldId, message) {
        const errEl = document.getElementById('error-' + fieldId);
        const input = document.getElementById(fieldId);
        if (errEl) {
          errEl.querySelector('span').textContent = message;
          errEl.classList.add('visible');
        }
        if (input) {
          input.classList.add('input-error');
        }
        // Special handling for phone wrapper
        if (fieldId === 'phone') {
          const wrapper = document.getElementById('phone-wrapper');
          if (wrapper) wrapper.classList.add('input-error');
        }
      }

      // Helper: clear error
      function clearError(fieldId) {
        const errEl = document.getElementById('error-' + fieldId);
        const input = document.getElementById(fieldId);
        if (errEl) {
          errEl.classList.remove('visible');
        }
        if (input) {
          input.classList.remove('input-error');
        }
        if (fieldId === 'phone') {
          const wrapper = document.getElementById('phone-wrapper');
          if (wrapper) wrapper.classList.remove('input-error');
        }
      }

      // Real-time: strip non-digits from phone
      const phoneInput = document.getElementById('phone');
      if (phoneInput) {
        phoneInput.addEventListener('input', function() {
          this.value = this.value.replace(/\D/g, '').slice(0, 10);
          if (this.value.length > 0) clearError('phone');
        });
      }

      // Real-time: strip non-digits from zip
      const zipInput = document.getElementById('zip');
      if (zipInput) {
        zipInput.addEventListener('input', function() {
          this.value = this.value.replace(/\D/g, '').slice(0, 5);
          if (this.value.length > 0) clearError('zip');
        });
      }

      // Real-time: strip non-alpha from name (allow spaces, hyphens, apostrophes)
      const nameInput = document.getElementById('full-name');
      if (nameInput) {
        nameInput.addEventListener('input', function() {
          if (this.value.length > 0) clearError('full-name');
        });
      }

      // Real-time: email
      const emailInput = document.getElementById('email');
      if (emailInput) {
        emailInput.addEventListener('input', function() {
          if (this.value.length > 0) clearError('email');
        });
      }

      // reCAPTCHA callbacks
      window.onRecaptchaSuccess = function() {
        const errEl = document.getElementById('error-recaptcha');
        if (errEl) errEl.classList.remove('visible');
      };
      window.onRecaptchaExpired = function() {};

      // Form submit validation
      form.addEventListener('submit', function(e) {
        let isValid = true;

        // --- Full Name ---
        const nameVal = nameInput ? nameInput.value.trim() : '';
        if (nameVal === '') {
          showError('full-name', 'Full Name is required.');
          isValid = false;
        } else if (nameVal.length < 2) {
          showError('full-name', 'Full Name must be at least 2 characters.');
          isValid = false;
        } else if (!/^[A-Za-z\s\-']+$/.test(nameVal)) {
          showError('full-name', 'Full Name can only contain letters, spaces, hyphens, and apostrophes. No numbers or special characters.');
          isValid = false;
        } else {
          clearError('full-name');
        }

        // --- Phone Number ---
        const phoneVal = phoneInput ? phoneInput.value.trim() : '';
        if (phoneVal === '') {
          showError('phone', 'Phone Number is required.');
          isValid = false;
        } else if (!/^\d{10}$/.test(phoneVal)) {
          showError('phone', 'Phone Number must be exactly 10 digits. No letters or special characters.');
          isValid = false;
        } else {
          clearError('phone');
        }

        // --- Email ---
        const emailVal = emailInput ? emailInput.value.trim() : '';
        const emailRegex = /^[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}$/;
        if (emailVal === '') {
          showError('email', 'Email Address is required.');
          isValid = false;
        } else if (!emailRegex.test(emailVal)) {
          showError('email', 'Please enter a valid email address (e.g., jane@example.com).');
          isValid = false;
        } else {
          clearError('email');
        }

        // --- ZIP Code ---
        const zipVal = zipInput ? zipInput.value.trim() : '';
        if (zipVal === '') {
          showError('zip', 'ZIP Code is required.');
          isValid = false;
        } else if (!/^\d{5}$/.test(zipVal)) {
          showError('zip', 'ZIP Code must be exactly 5 digits. No letters or special characters.');
          isValid = false;
        } else {
          clearError('zip');
        }

        // --- reCAPTCHA ---
        const recaptchaResponse = (typeof grecaptcha !== 'undefined') ? grecaptcha.getResponse() : '';
        if (!recaptchaResponse) {
          const errEl = document.getElementById('error-recaptcha');
          if (errEl) errEl.classList.add('visible');
          isValid = false;
        } else {
          const errEl = document.getElementById('error-recaptcha');
          if (errEl) errEl.classList.remove('visible');
        }

        if (!isValid) {
          e.preventDefault();
          // Scroll to first error
          const firstErr = form.querySelector('.field-error-msg.visible, .recaptcha-error-msg.visible');
          if (firstErr) {
            firstErr.scrollIntoView({ behavior: 'smooth', block: 'center' });
          }
        }
      });

    })();
    </script>
  </div>
</section>

<!-- FINAL CTA -->
<section id="cta-banner" style="padding:9rem 0;background-color:#050508;position:relative;overflow:hidden;">
  <div style="max-width:1200px;margin:0 auto;padding:0 1.5rem;position:relative;z-index:1;">
    <div style="position:relative;background:linear-gradient(135deg,rgba(30,11,62,.8) 0%,rgba(13,21,71,.8) 100%);border-radius:32px;padding:6rem 3rem;text-align:center;overflow:hidden;border:1px solid rgba(124,58,237,.3);box-shadow:0 30px 60px rgba(0,0,0,.5);backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);">
      <div style="position:absolute;top:-20%;left:-10%;width:400px;height:400px;background:radial-gradient(circle,rgba(124,58,237,.4),transparent 70%);border-radius:50%;filter:blur(60px);pointer-events:none;"></div>
      <div style="position:absolute;bottom:-20%;right:-10%;width:400px;height:400px;background:radial-gradient(circle,rgba(59,130,246,.3),transparent 70%);border-radius:50%;filter:blur(60px);pointer-events:none;"></div>
      <div style="position:relative;z-index:2;max-width:700px;margin:0 auto;">
        <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.4rem 1.25rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:#C4B5FD;background:rgba(196,181,253,.1);border:1px solid rgba(196,181,253,.25);margin-bottom:2rem;">
          <span style="width:6px;height:6px;border-radius:50%;background:#A78BFA;display:inline-block;animation:pulseDot 2s infinite;box-shadow:0 0 8px #A78BFA;"></span>
          Ready when you are
        </span>
        <h2 style="font-family:var(--font);font-size:clamp(2.5rem,5vw,4rem);font-weight:800;color:#fff;letter-spacing:-.03em;line-height:1.1;margin-bottom:1.5rem;">A quick call is the<br><span style="background:linear-gradient(135deg,#A78BFA,#60A5FA);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">easiest way forward</span></h2>
        <p style="color:rgba(255,255,255,.75);margin-bottom:3.5rem;line-height:1.8;font-weight:400;max-width:520px;margin-left:auto;margin-right:auto;">Whether you are just starting to look into your options or you already know what you want, a quick call is the easiest way forward.</p>
        <div style="display:flex;flex-wrap:wrap;gap:1.25rem;justify-content:center;align-items:center;margin-bottom:3.5rem;">
          <a href="tel:<?= PHONE_TEL ?>" class="btn btn-primary btn-lg" style="background:linear-gradient(135deg,#7C3AED,#4F46E5);border:none;box-shadow:0 16px 40px rgba(124,58,237,.35);border-radius:16px;padding:1.15rem 2.25rem;display:inline-flex;gap:1rem;align-items:center;transition:all .3s ease;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 20px 50px rgba(124,58,237,.5)';" onmouseout="this.style.transform='none';this.style.boxShadow='0 16px 40px rgba(124,58,237,.35)';">
            <div style="width:34px;height:34px;border-radius:50%;background:rgba(255,255,255,.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;"><i class="fas fa-phone" style="font-size:.85rem"></i></div>
            Call now: <?= PHONE_DISPLAY ?>
          </a>
          <a href="mailto:<?= EMAIL_INFO ?>" class="btn btn-outline btn-lg" style="border-radius:16px;padding:1.15rem 2.25rem;background:rgba(255,255,255,.05);border-color:rgba(255,255,255,.15);color:#fff;display:inline-flex;gap:.75rem;align-items:center;transition:all .3s ease;" onmouseover="this.style.background='rgba(255,255,255,.1)';this.style.borderColor='rgba(255,255,255,.3)';" onmouseout="this.style.background='rgba(255,255,255,.05)';this.style.borderColor='rgba(255,255,255,.15)';">
            <i class="fas fa-envelope" style="font-size:.9rem;color:#A78BFA;"></i> <?= EMAIL_INFO ?>
          </a>
        </div>
        <div style="display:flex;justify-content:center;align-items:center;gap:1.5rem;flex-wrap:wrap;">
          <span style="display:inline-flex;align-items:center;gap:.6rem;color:rgba(255,255,255,.6);"><i class="fas fa-check" style="color:#059669;font-size:.8rem;"></i> Free consultation</span>
          <span style="width:4px;height:4px;border-radius:50%;background:rgba(255,255,255,.2);"></span>
          <span style="display:inline-flex;align-items:center;gap:.6rem;color:rgba(255,255,255,.6);"><i class="fas fa-check" style="color:#059669;font-size:.8rem;"></i> No obligation</span>
          <span style="width:4px;height:4px;border-radius:50%;background:rgba(255,255,255,.2);"></span>
          <span style="display:inline-flex;align-items:center;gap:.6rem;color:rgba(255,255,255,.6);"><i class="fas fa-check" style="color:#059669;font-size:.8rem;"></i> Real, Human Advisors</span>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  @media(max-width:680px) {
    .form-grid-2 { grid-template-columns: 1fr !important; }
    .contact-grid,
    .contact-form,
    .contact-form form {
      box-sizing: border-box;
      max-width: 100%;
    }
  }
</style>
<?php include __DIR__ . '/includes/footer.php'; ?>