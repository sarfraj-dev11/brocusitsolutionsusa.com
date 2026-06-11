<?php
require_once __DIR__ . '/includes/bootstrap.php';
$page_title = 'Contact Brocus IT Solutions | Free, No-Pressure Advice';
$page_desc  = 'Get in touch with Brocus IT Solutions for free, independent, no-pressure advice on your home decisions. Call, email, or request a callback. US-based advisors ready to help.';
$success    = $_SESSION['form_success'] ?? '';
$error      = $_SESSION['form_error']   ?? '';
$vals       = $_SESSION['form_values']  ?? [];
unset($_SESSION['form_success'], $_SESSION['form_error'], $_SESSION['form_values']);
require_once __DIR__ . '/includes/head.php';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<section class="page-hero" style="background:radial-gradient(ellipse 80% 80% at 50% 40%, #3b96ff 0%, #5746c6 45%, #110c28 100%);">
  <div class="page-hero-inner">
    <span class="label">Get in touch</span>
    <h1 class="page-h">Talk to an Independent Advisor</h1>
    <p class="page-sub">Have a question, or ready for a free consultation? We are here to help, and there is never any pressure to buy. The fastest way to get answers is to call and speak with a real advisor.</p>
    <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;margin-top:2.5rem;">
      <a href="tel:<?= PHONE_TEL ?>" class="btn btn-primary btn-lg"><i class="fas fa-phone" style="font-size:.85rem"></i> Call us: <?= PHONE_DISPLAY ?></a>
      <a href="#contact-form" class="btn btn-outline btn-lg">Request a Callback</a>
    </div>
    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:2rem;margin-top:3rem;">
      <?php foreach (['Free Consultation', 'No Sales Pressure', 'US-Based Advisors', 'One Business Day Response'] as $t): ?>
        <span style="display:inline-flex;align-items:center;gap:.5rem;font-size:.82rem;color:rgba(255,255,255,.5);"><i class="fas fa-check" style="color:#A78BFA;font-size:.65rem;"></i><?= $t ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CONTACT GRID -->
<section style="padding:5rem 0 7rem;background:linear-gradient(160deg, #fdfcff 0%, #f5f0ff 50%, #eff6ff 100%);position:relative;overflow:hidden;">
  <!-- Subtle decorative blobs -->
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
      <!-- What to expect -->
      <div style="background:rgba(37,99,235,.05);border:1px solid rgba(96,165,250,.15);border-radius:20px;padding:2rem;">
        <div style="display:flex;align-items:center;gap:.875rem;margin-bottom:1.5rem;">
          <div style="width:36px;height:36px;border-radius:10px;background:rgba(96,165,250,.12);color:#60A5FA;display:flex;align-items:center;justify-content:center;font-size:.9rem;flex-shrink:0;"><i class="fas fa-info-circle"></i></div>
          <h3 style="font-weight:700;color:#fff;margin:0;font-size:1rem;">What to expect when you reach out</h3>
        </div>
        <?php foreach (
          [
            'A friendly conversation, not a sales script.',
            'A few simple questions about your home and what you are looking for.',
            'Clear, honest guidance about your options.',
            'A recommendation only if it genuinely fits, with zero obligation to move forward.',
          ] as $e
        ): ?>
          <div style="display:flex;align-items:flex-start;gap:.75rem;margin-bottom:.875rem;color:rgba(255,255,255,.7);line-height:1.6;">
            <i class="fas fa-check" style="color:#6EE7B7;font-size:.65rem;margin-top:.35rem;flex-shrink:0;"></i><span><?= $e ?></span>
          </div>
        <?php endforeach; ?>
        <p style="font-size:.875rem;color:rgba(255,255,255,.4);line-height:1.65;margin:1.25rem 0 0;border-top:1px solid rgba(255,255,255,.06);padding-top:1.25rem;">We treat your time and your information with respect. You decide what happens next.</p>
      </div>
    </div>

    <!-- Right: Form -->
    <<<<<<< HEAD
      <div id="contact-form" style="background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:28px;padding:3rem;backdrop-filter:blur(16px);-webkit-backdrop-filter:blur(16px);">
      <div style="margin-bottom:2rem;">
        <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.4rem 1rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#A78BFA;background:rgba(167,139,250,.08);border:1px solid rgba(167,139,250,.2);margin-bottom:1.25rem;">Prefer we reach out to you?</span>
        <h2 style="font-family:var(--font-display);font-size:1.5rem;font-weight:700;color:#fff;margin:0 0 .75rem;">Request a Callback</h2>
        <p style="color:rgba(255,255,255,.5);font-size:.9rem;line-height:1.65;margin:0;">Fill out the short form below and an advisor will get back to you, usually within one business day. Tell us a little about your home and the best time to reach you, and we will take it from there.</p>
      </div>
      <?php if ($success): ?>
        <div style="background:rgba(16,185,129,.08);border:1px solid rgba(16,185,129,.25);border-radius:14px;padding:1.25rem;color:#6EE7B7;margin-bottom:1.5rem;display:flex;align-items:center;gap:.75rem;">
          <i class="fas fa-circle-check" style="font-size:1.1rem;flex-shrink:0;"></i> <?= $success ?>
        </div>
      <?php endif; ?>
      <?php if ($error): ?>
        <div style="background:rgba(239,68,68,.08);border:1px solid rgba(239,68,68,.25);border-radius:14px;padding:1.25rem;color:#FCA5A5;margin-bottom:1.5rem;display:flex;align-items:center;gap:.75rem;">
          <i class="fas fa-circle-exclamation" style="font-size:1.1rem;flex-shrink:0;"></i> <?= $error ?>
        </div>
      <?php endif; ?>
      <form action="<?= url('handlers/contact-handler.php') ?>" method="POST" style="display:flex;flex-direction:column;gap:1.25rem;">
        =======
        <style>
          #contact-form .form-control::placeholder {
            color: #374151 !important;
            opacity: 1;
          }
        </style>
        <div class="contact-form" id="contact-form" style="background:#fff;border:1px solid #E2E8F0;box-shadow:0 12px 40px rgba(15,23,42,.06);">
          <h2 style="font-size:1.25rem;font-weight:700;margin-bottom:.5rem;color:#0F172A">Request a Callback</h2>
          <p style="font-size:.875rem;color:#64748B;margin-bottom:1.25rem">An advisor will get back to you within one business day.</p>
          <?php if ($success): ?><div style="background:rgba(16,185,129,.08);border:1px solid rgba(16,185,129,.25);border-radius:10px;padding:1rem;font-size:.9rem;color:#059669;margin-bottom:1rem"><?= $success ?></div><?php endif; ?>
          <?php if ($error):   ?><div style="background:rgba(239,68,68,.08);border:1px solid rgba(239,68,68,.25);border-radius:10px;padding:1rem;font-size:.9rem;color:#DC2626;margin-bottom:1rem"><?= $error ?></div><?php endif; ?>
          <form action="<?= url('handlers/contact-handler.php') ?>" method="POST">
            >>>>>>> e18daaa06462add242cecd1025006957d0070e52
            <input type="hidden" name="csrf_token" value="<?= csrfToken() ?>">
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;" class="form-grid-2">
              <div class="form-group">
                <label class="form-label" for="full-name" style="color:#374151">Full Name</label>
                <input type="text" id="full-name" name="full_name" class="form-control" placeholder="Jane Smith" value="<?= htmlspecialchars($vals['name'] ?? '') ?>" required style="background:#F8FAFC;border-color:#E2E8F0;color:#0F172A;">
              </div>
              <div class="form-group">
                <label class="form-label" for="phone" style="color:#374151">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="form-control" placeholder="(555) 000-0000" value="<?= htmlspecialchars($vals['phone'] ?? '') ?>" required style="background:#F8FAFC;border-color:#E2E8F0;color:#0F172A;">
              </div>
            </div>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;" class="form-grid-2">
              <div class="form-group">
                <label class="form-label" for="email" style="color:#374151">Email Address</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="jane@example.com" value="<?= htmlspecialchars($vals['email'] ?? '') ?>" required style="background:#F8FAFC;border-color:#E2E8F0;color:#0F172A;">
              </div>
              <div class="form-group">
                <<<<<<< HEAD
                  <label class="form-label" for="zip">ZIP Code</label>
                  <input type="text" id="zip" name="zip" class="form-control" placeholder="33647" maxlength="10" value="<?= htmlspecialchars($vals['zip'] ?? '') ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="message">How Can We Help You? <span style="font-weight:400;opacity:.55">(optional)</span></label>
              <textarea id="message" name="message" class="form-control" rows="4" placeholder="Tell us a bit about your home and what you are looking for."><?= htmlspecialchars($vals['message'] ?? '') ?></textarea>
              =======
              <label class="form-label" for="zip" style="color:#374151">ZIP Code</label>
              <input type="text" id="zip" name="zip" class="form-control" placeholder="33647" maxlength="10" style="background:#F8FAFC;border-color:#E2E8F0;color:#0F172A;">
            </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="message" style="color:#374151">How Can We Help You? <span style="font-weight:400;opacity:.6">(optional)</span></label>
          <textarea id="message" name="message" class="form-control" rows="4" placeholder="Tell us a bit about your home and what you are looking for…" style="background:#F8FAFC;border-color:#E2E8F0;color:#0F172A;"></textarea>
          >>>>>>> e18daaa06462add242cecd1025006957d0070e52
        </div>
        <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;padding:1.1rem 2rem;font-size:1rem;border-radius:14px;background:linear-gradient(135deg,#7C3AED,#4F46E5);border:none;box-shadow:0 12px 30px rgba(124,58,237,.3);transition:all .3s;" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 20px 40px rgba(124,58,237,.45)';" onmouseout="this.style.transform='none';this.style.boxShadow='0 12px 30px rgba(124,58,237,.3)';">
          Request a Callback <i class="fas fa-arrow-right" style="font-size:.85rem;margin-left:.5rem;"></i>
        </button>
        <<<<<<< HEAD
          <p style="font-size:.72rem;color:rgba(255,255,255,.28);line-height:1.7;margin:0;">
          By submitting this form and clicking "Request a Callback," you confirm the information is yours and you agree, by electronic signature, to our
          <a href="<?= url('electronic-disclosure-consent.php') ?>" style="color:rgba(255,255,255,.45);text-decoration:underline;">Electronic Disclosure Consent</a>,
          <a href="<?= url('terms-and-conditions.php') ?>" style="color:rgba(255,255,255,.45);text-decoration:underline;">Terms and Conditions</a>, and
          <a href="<?= url('privacy-policy.php') ?>" style="color:rgba(255,255,255,.45);text-decoration:underline;">Privacy Policy</a>.
          =======

          <p style="font-size:.72rem;color:#94A3B8;line-height:1.6;margin-top:1.25rem">
            By submitting this form and clicking "Request a Callback," you confirm the information is yours and you agree, by electronic signature, to our
            <a href="electronic-disclosure-consent.php" style="color:#6D28D9;text-decoration:underline">Electronic Disclosure Consent</a>,
            <a href="terms-and-conditions.php" style="color:#6D28D9;text-decoration:underline">Terms and Conditions</a>, and
            <a href="privacy-policy.php" style="color:#6D28D9;text-decoration:underline">Privacy Policy</a>.
            >>>>>>> e18daaa06462add242cecd1025006957d0070e52
            You also give Brocus IT Solutions LLC and the providers it works with your prior express written consent to contact you at the phone number and email address you provide, including by automated telephone dialing system, prerecorded or artificial voice calls, and text messages, for marketing and service purposes. Consent is not a condition of any purchase. Message and data rates may apply. Reply STOP to opt out of texts at any time, or HELP for help.
          </p>
      </form>
  </div>
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
          <span style="display:inline-flex;align-items:center;gap:.6rem;color:rgba(255,255,255,.6);"><i class="fas fa-check" style="color:#059669;font-size:.8rem;"></i> US-based advisors</span>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  @media(max-width:680px) {
    .form-grid-2 {
      grid-template-columns: 1fr !important;
    }
  }
</style>
<?php include __DIR__ . '/includes/footer.php'; ?>