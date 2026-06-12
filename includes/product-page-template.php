<?php

/**
 * PRODUCT PAGE TEMPLATE — Reusable across all home-security product pages.
 *
 * Usage: Define a $product array in your page file, then:
 *   require_once __DIR__ . '/../includes/product-page-template.php';
 *
 * Required $product keys:
 *   title, meta_desc, h1, hero_subtitle, hero_image, hero_image_alt,
 *   trust_line, benefits[], sections[], mid_cta_text, mid_cta_phone,
 *   faqs[], faq_schema, final_headline, final_subtitle,
 *   related[]
 */

require_once __DIR__ . '/bootstrap.php';
$page_title = $product['title'];
$page_desc  = $product['meta_desc'];
require_once __DIR__ . '/head.php';

// Inject FAQ JSON-LD schema + product page CSS
echo '<link rel="stylesheet" href="' . asset('css/product-page.css') . '">';
if (!empty($product['faq_schema'])) {
  echo '<script type="application/ld+json">' . $product['faq_schema'] . '</script>';
}
?>
<?php include __DIR__ . '/header.php'; ?>

<!-- ═══ HERO: ABOVE THE FOLD (COMPACT) ═══ -->
<section class="pp-hero">
  <div class="pp-hero-bg">
    <img src="<?= asset($product['hero_image']) ?>" alt="<?= htmlspecialchars($product['hero_image_alt']) ?>" width="1920" height="1080">
  </div>
  <div class="pp-hero-glow-1"></div>
  <div class="pp-hero-glow-2"></div>
  <div class="pp-hero-glow-3"></div>

  <div class="pp-hero-inner">
    <div class="pp-hero-content">
      <span class="pp-hero-badge"><i class="fas fa-shield-halved"></i> Home Security</span>
      <h1><?= $product['h1'] ?></h1>
      <p class="pp-hero-sub"><?= $product['hero_subtitle'] ?></p>



      <!-- CTA Buttons -->
      <div class="pp-cta-row" style="margin-bottom: 2rem;">
        <a href="tel:<?= PHONE_TEL ?>" class="pp-cta-primary">
          <span class="pp-cta-icon"><i class="fas fa-phone" style="font-size:.8rem"></i></span>
          Call now: <?= PHONE_DISPLAY ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="pp-cta-secondary" style="background:rgba(255,255,255,.1);color:#fff;border:1.5px solid rgba(255,255,255,.35);border-radius:10px;white-space:nowrap;backdrop-filter:blur(8px);">Get a free quote</a>
      </div>

      <!-- Trust Strip -->
      <div class="pp-trust-strip">
        <?php foreach (['Independent advice', 'Free consultation', 'Vetted providers', 'No cost to compare'] as $t): ?>
          <span class="pp-trust-item"><i class="fas fa-check"></i><?= $t ?></span>
        <?php endforeach; ?>
      </div>


    </div>

    <!-- Hero Image Only -->
    <div class="pp-hero-right">
      <div class="pp-hero-image-wrap">
        <div class="pp-hero-image pp-hero-image--full">
          <img src="<?= asset($product['hero_image']) ?>" alt="<?= htmlspecialchars($product['hero_image_alt']) ?>" width="560" height="400" loading="eager">
        </div>
        <!-- Premium Floating Badge -->

      </div>
    </div>
  </div>
</section>

<!-- ═══ BENEFITS + LEAD FORM (Side by Side) ═══ -->
<section class="pp-benefits-form">
  <div class="pp-bf-inner">
    <!-- Left: Quick Benefits -->
    <div class="pp-bf-left">
      <div class="pp-bf-label"><i class="fas fa-bolt"></i> Why Choose Us</div>
      <h2 class="pp-bf-heading">Quick benefits at a glance</h2>
      <div class="pp-bf-list">
        <?php foreach ($product['benefits'] as $b): ?>
          <div class="pp-bf-item">
            <div class="pp-bf-icon"><i class="fas fa-check"></i></div>
            <div class="pp-bf-text"><?= $b ?></div>
          </div>
        <?php endforeach; ?>
      </div>
      <p class="pp-bf-trust"><?= $product['trust_line'] ?></p>
    </div>

    <!-- Right: Lead Form -->
    <div class="pp-bf-right">
      <div class="pp-lf-card">
        <div class="pp-lf-header">
          <div class="pp-lf-badge"><i class="fas fa-bolt"></i> Free Quote</div>
          <h3 class="pp-lf-title">Get Your Free Quote</h3>
          <p class="pp-lf-desc">Enter your details — we'll check the best options at your address and call you back.</p>
        </div>
        <form class="pp-lf-form" id="ppLeadForm" method="POST" action="<?= url('handlers/lead-handler.php') ?>" novalidate>
          <input type="hidden" name="csrf_token" value="<?= csrfToken() ?>">
          <input type="hidden" name="product_page" value="<?= htmlspecialchars($product['title']) ?>">

          <div class="pp-lf-field">
            <label for="lf-name">Full Name <span class="pp-lf-req">*</span></label>
            <input type="text" id="lf-name" name="full_name" placeholder="Your full name" autocomplete="name">
            <div class="pp-lf-error" id="lf-name-error"></div>
          </div>

          <div class="pp-lf-row">
            <div class="pp-lf-field">
              <label for="lf-phone">Phone Number <span class="pp-lf-req">*</span></label>
              <div class="pp-lf-phone-wrap">
                <span class="pp-lf-flag">🇺🇸 +1</span>
                <input type="tel" id="lf-phone" name="phone" placeholder="10-digit number" maxlength="10" autocomplete="tel">
              </div>
              <div class="pp-lf-error" id="lf-phone-error"></div>
            </div>
            <div class="pp-lf-field">
              <label for="lf-zip">ZIP Code <span class="pp-lf-req">*</span></label>
              <input type="text" id="lf-zip" name="zip" placeholder="5 digits" maxlength="5" autocomplete="postal-code">
              <div class="pp-lf-error" id="lf-zip-error"></div>
            </div>
          </div>

          <div class="pp-lf-field">
            <label for="lf-email">Email Address <span class="pp-lf-req">*</span></label>
            <input type="email" id="lf-email" name="email" placeholder="you@example.com" autocomplete="email">
            <div class="pp-lf-error" id="lf-email-error"></div>
          </div>

          <div class="pp-lf-submit-error" id="lf-submit-error"></div>
          <div class="pp-lf-submit-success" id="lf-submit-success"></div>

          <button type="submit" class="pp-lf-btn" id="ppLeadBtn">
            <span id="ppLeadBtnText">Get my free quote</span>
            <span id="ppLeadBtnLoading" style="display:none"><i class="fas fa-spinner fa-spin"></i> Sending...</span>
            <i class="fas fa-arrow-right" style="font-size:.75rem" id="ppLeadBtnArrow"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ═══ BODY: SEO DEPTH ZONE (Visual Design) ═══ -->
<section class="pp-body">
  <div class="pp-body-inner">
    <?php foreach ($product['sections'] as $si => $section): ?>

      <?php if (isset($section['bullets'])): ?>
        <!-- Feature Cards Grid -->
        <div class="pp-section-block">
          <?php if (isset($section['heading'])): ?>
            <div class="pp-section-label"><i class="fas fa-list-check"></i> Features</div>
            <<?= $section['tag'] ?? 'h2' ?> class="pp-section-heading"><?= $section['heading'] ?></<?= $section['tag'] ?? 'h2' ?>>
          <?php endif; ?>
          <div class="pp-feature-grid">
            <?php foreach ($section['bullets'] as $bi => $bullet): ?>
              <?php
              $icons = ['fa-video', 'fa-microphone', 'fa-bell', 'fa-cloud', 'fa-shield-halved', 'fa-wifi', 'fa-lock', 'fa-sun', 'fa-mobile', 'fa-gauge-high'];
              $icon = $icons[$bi % count($icons)];
              ?>
              <div class="pp-feature-card">
                <div class="pp-fc-icon"><i class="fas <?= $icon ?>"></i></div>
                <div class="pp-fc-text"><?= $bullet ?></div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

      <?php else: ?>
        <!-- Text + Visual Card (alternating sides) -->
        <div class="pp-content-row <?= $si % 2 === 0 ? '' : 'pp-content-row--reverse' ?>">
          <div class="pp-content-text">
            <?php if (isset($section['heading'])): ?>
              <div class="pp-section-label"><i class="fas <?= ['fa-eye', 'fa-map-marker-alt', 'fa-info-circle', 'fa-shield-halved', 'fa-link', 'fa-lock', 'fa-cog', 'fa-home'][$si % 8] ?>"></i> <?= ['Overview', 'Placement', 'Details', 'Privacy', 'Integration', 'Security', 'Setup', 'About'][$si % 8] ?></div>
              <<?= $section['tag'] ?? 'h2' ?> class="pp-section-heading"><?= $section['heading'] ?></<?= $section['tag'] ?? 'h2' ?>>
            <?php endif; ?>
            <?php if (isset($section['paragraphs'])): ?>
              <?php foreach ((array)$section['paragraphs'] as $para): ?>
                <p><?= $para ?></p>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
          <div class="pp-content-visual">
            <div class="pp-image-wrap">
              <div class="pp-image-bg-tilted"></div>
              <?php
              $imgSrc = asset('images/sections/sec_overview.png');
              if ($si % 4 == 1) $imgSrc = asset('images/sections/sec_placement.png');
              if ($si % 4 == 2) $imgSrc = asset('images/sections/sec_privacy.png');
              if ($si % 4 == 3) $imgSrc = asset('images/sections/sec_integration.png');
              ?>
              <img src="<?= $imgSrc ?>" alt="<?= htmlspecialchars($section['heading']) ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;border-radius:24px;z-index:1;box-shadow: 0 20px 40px rgba(0,0,0,0.12); transition: transform 0.4s ease;">
            </div>
          </div>
        </div>
      <?php endif; ?>

    <?php endforeach; ?>



    <!-- Cost + remaining sections -->
    <?php if (!empty($product['sections_after_cta'])): ?>
      <?php foreach ($product['sections_after_cta'] as $section): ?>
        <div class="pp-cost-card">
          <?php if (isset($section['heading'])): ?>
            <div class="pp-section-label"><i class="fas fa-dollar-sign"></i> Pricing</div>
            <<?= $section['tag'] ?? 'h2' ?> class="pp-section-heading" style="color:#0F172A"><?= $section['heading'] ?></<?= $section['tag'] ?? 'h2' ?>>
          <?php endif; ?>
          <?php if (isset($section['paragraphs'])): ?>
            <?php foreach ((array)$section['paragraphs'] as $para): ?>
              <p><?= $para ?></p>
            <?php endforeach; ?>
          <?php endif; ?>
          <?php if (isset($section['bullets'])): ?>
            <?php foreach ($section['bullets'] as $bullet): ?>
              <div class="pp-body-bullet">
                <i class="fas fa-circle"></i>
                <div><?= $bullet ?></div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>



<!-- ═══ FAQ ═══ -->
<section class="pp-faq">
  <div class="pp-faq-glow"></div>
  <div class="pp-faq-grid">
    <div class="pp-faq-left">
      <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.5rem 1.25rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:#C4B5FD;background:rgba(124,58,237,.1);border:1px solid rgba(124,58,237,.2);margin-bottom:1.5rem;">FAQ</span>
      <h2>Frequently asked <span class="grad">questions</span></h2>
      <p>Still have questions? Our advisors are always happy to help you get the answers you need.</p>
      <a href="tel:<?= PHONE_TEL ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.2);color:#fff;display:inline-flex;align-items:center;gap:.75rem;border-radius:12px;padding:.875rem 1.5rem;transition:all .3s ease;"><i class="fas fa-phone" style="font-size:.9rem;color:#A78BFA;"></i> <?= PHONE_DISPLAY ?></a>
    </div>
    <div class="pp-faq-right">
      <?php foreach ($product['faqs'] as $i => $faq): ?>
        <div class="pp-faq-item" id="pp-faq-<?= $i ?>" onclick="togglePPFaq(<?= $i ?>)">
          <div class="pp-faq-q">
            <span><?= $faq['q'] ?></span>
            <div class="pp-faq-icon"><i class="fas fa-plus" style="font-size:.85rem"></i></div>
          </div>
          <div class="pp-faq-a"><?= $faq['a'] ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>




<!-- ═══ RELATED PRODUCTS ═══ -->
<?php
$all_hs_products = [
  'home-security/smart-indoor-camera.php' => [
    'title' => 'Smart Home Security Camera',
    'desc'  => 'See every corner of your property in stunning clarity with night vision.',
    'image' => 'images/products/smart-indoor-camera.png'
  ],
  'home-security/smart-doorbell-camera.php' => [
    'title' => 'Smart Doorbell Camera',
    'desc'  => 'Know who is at your door before you answer with instant mobile alerts.',
    'image' => 'images/products/smart-doorbell-camera.png'
  ],
  'home-security/smart-door-locks.php' => [
    'title' => 'Smart Door Locks',
    'desc'  => 'Lock and unlock remotely, set custom codes, and get notified instantly.',
    'image' => 'images/products/smart-door-lock.png'
  ],
  'home-security/smart-alarm-system.php' => [
    'title' => 'Home Alarm System',
    'desc'  => 'Get instant alerts and loud siren protection to keep your home safe from intruders.',
    'image' => 'images/products/smart-alarm-system.png'
  ],
  'home-security/smart-security-panel.php' => [
    'title' => 'Home Security System Panel',
    'desc'  => 'The central brain connecting all your devices for seamless security control.',
    'image' => 'images/products/smart-security-panel.png'
  ],
  'home-security/door-and-window-sensors.php' => [
    'title' => 'Door and Window Sensors',
    'desc'  => 'Instant alerts if any entry point in your home is opened or tampered with.',
    'image' => 'images/products/door-window-sensors.png'
  ],
  'home-security/smart-outdoor-camera.php' => [
    'title' => 'Smart Outdoor Camera',
    'desc'  => 'See every corner of your property in stunning clarity with night vision.',
    'image' => 'images/products/smart-outdoor-camera.png'
  ]
];

$current_page = basename($_SERVER['PHP_SELF']);
$related_to_show = [];
foreach ($all_hs_products as $path => $p) {
  if (basename($path) !== $current_page) {
    $p['href'] = $path;
    $related_to_show[] = $p;
  }
}
?>

<?php if (!empty($related_to_show)): ?>
  <section class="pp-related" style="padding: 7rem 0; background: #fff; position: relative; overflow: hidden; border-top: 1px solid #F1F5F9;">
    <div class="pp-related-inner" style="max-width:1200px; margin:0 auto; padding:0 1.5rem;">
      <div style="text-align: center; margin-bottom: 4rem;">
        <h2 style="font-family: var(--font); font-size: clamp(2rem, 3.5vw, 2.5rem); font-weight: 800; color: #0F172A; margin: 0 0 1rem; letter-spacing: -0.02em;">Professional Security Equipment for<br>Modern Homes</h2>
        <p style="color: #64748B; font-size: 0.95rem;">Industry-tested hardware built to work seamlessly together for 24/7 protection.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
        <?php foreach ($related_to_show as $r): ?>
          <div style="background: #fff; border: 1px solid #E2E8F0; border-radius: 24px; padding: 1.5rem; transition: all 0.3s ease; box-shadow: 0 4px 6px rgba(0,0,0,0.02); display: flex; flex-direction: column;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.08)'; this.style.borderColor='#C4B5FD';" onmouseout="this.style.transform='none'; this.style.boxShadow='0 4px 6px rgba(0,0,0,0.02)'; this.style.borderColor='#E2E8F0';">
            <a href="<?= url($r['href']) ?>" style="display:block; text-decoration:none;">
              <div style="width: 100%; height: 220px; background: #F8FAFC; border-radius: 16px; margin-bottom: 1.5rem; overflow: hidden; display: flex; align-items: center; justify-content: center; border: 1px solid #F1F5F9;">
                <img src="<?= asset($r['image']) ?>" alt="<?= htmlspecialchars($r['title']) ?>" style="width: 100%; height: 100%; object-fit: cover;">
              </div>
            </a>
            <h3 style="font-family: var(--font); font-size: 1.15rem; font-weight: 700; color: #0F172A; margin: 0 0 0.5rem;"><?= htmlspecialchars($r['title']) ?></h3>
            <p style="color: #64748B; font-size: 0.9rem; line-height: 1.6; margin: 0 0 1.5rem; flex-grow: 1;"><?= htmlspecialchars($r['desc']) ?></p>

            <div style="border-top: 1px solid #F1F5F9; padding-top: 1.25rem; margin-top: auto;">
              <a href="<?= url($r['href']) ?>" style="color: #2563EB; font-weight: 700; font-size: 0.85rem; display: inline-flex; align-items: center; gap: 0.5rem; text-decoration: none;">
                Product Details <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<!-- ═══ FINAL CTA ═══ -->
<?php
$cta_headline = $product['final_headline'];
$cta_subtitle = $product['final_subtitle'];
include dirname(__DIR__) . '/includes/cta-banner.php';
?>

<script>
  /* FAQ Toggle */
  function togglePPFaq(i) {
    document.getElementById('pp-faq-' + i).classList.toggle('open');
  }

  /* ── Lead Form Validation + AJAX Submit ── */
  (function() {
    var form = document.getElementById('ppLeadForm');
    if (!form) return;

    var nameIn = document.getElementById('lf-name'),
      phoneIn = document.getElementById('lf-phone'),
      zipIn = document.getElementById('lf-zip'),
      emailIn = document.getElementById('lf-email'),
      nameErr = document.getElementById('lf-name-error'),
      phoneErr = document.getElementById('lf-phone-error'),
      zipErr = document.getElementById('lf-zip-error'),
      emailErr = document.getElementById('lf-email-error'),
      submitErr = document.getElementById('lf-submit-error'),
      submitOk = document.getElementById('lf-submit-success'),
      btn = document.getElementById('ppLeadBtn'),
      btnText = document.getElementById('ppLeadBtnText'),
      btnLoad = document.getElementById('ppLeadBtnLoading'),
      btnArrow = document.getElementById('ppLeadBtnArrow');

    function clearErr(el) {
      el.textContent = '';
      el.style.display = 'none';
    }

    function showErr(el, msg) {
      el.textContent = msg;
      el.style.display = 'block';
    }

    function markValid(input) {
      input.classList.remove('pp-lf-invalid');
      input.classList.add('pp-lf-valid');
    }

    function markInvalid(input) {
      input.classList.remove('pp-lf-valid');
      input.classList.add('pp-lf-invalid');
    }

    // Live: phone digits only
    phoneIn.addEventListener('input', function() {
      this.value = this.value.replace(/\D/g, '').slice(0, 10);
    });
    // Live: zip digits only
    zipIn.addEventListener('input', function() {
      this.value = this.value.replace(/\D/g, '').slice(0, 5);
    });

    // Clear errors on focus
    [nameIn, phoneIn, zipIn, emailIn].forEach(function(inp) {
      inp.addEventListener('focus', function() {
        var errEl = document.getElementById(inp.id + '-error');
        if (errEl) {
          clearErr(errEl);
        }
        inp.classList.remove('pp-lf-invalid');
      });
    });

    function validate() {
      var ok = true;
      clearErr(nameErr);
      clearErr(phoneErr);
      clearErr(zipErr);
      clearErr(emailErr);
      clearErr(submitErr);
      clearErr(submitOk);

      // Name: required, letters/spaces/hyphens only
      var name = nameIn.value.trim();
      if (!name) {
        showErr(nameErr, 'Full Name is required.');
        markInvalid(nameIn);
        ok = false;
      } else if (name.length < 2) {
        showErr(nameErr, 'Name must be at least 2 characters.');
        markInvalid(nameIn);
        ok = false;
      } else if (!/^[A-Za-z\s\-']+$/.test(name)) {
        showErr(nameErr, 'Only letters, spaces, hyphens allowed. No numbers or special characters.');
        markInvalid(nameIn);
        ok = false;
      } else {
        markValid(nameIn);
      }

      // Phone: 10 digits
      var phone = phoneIn.value.trim();
      if (!phone) {
        showErr(phoneErr, 'Phone Number is required.');
        markInvalid(phoneIn);
        ok = false;
      } else if (!/^\d{10}$/.test(phone)) {
        showErr(phoneErr, 'Must be exactly 10 digits.');
        markInvalid(phoneIn);
        ok = false;
      } else {
        markValid(phoneIn);
      }

      // ZIP: 5 digits
      var zip = zipIn.value.trim();
      if (!zip) {
        showErr(zipErr, 'ZIP Code is required.');
        markInvalid(zipIn);
        ok = false;
      } else if (!/^\d{5}$/.test(zip)) {
        showErr(zipErr, 'Must be exactly 5 digits.');
        markInvalid(zipIn);
        ok = false;
      } else {
        markValid(zipIn);
      }

      // Email: valid
      var email = emailIn.value.trim();
      if (!email) {
        showErr(emailErr, 'Email Address is required.');
        markInvalid(emailIn);
        ok = false;
      } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        showErr(emailErr, 'Please enter a valid email address.');
        markInvalid(emailIn);
        ok = false;
      } else {
        markValid(emailIn);
      }

      return ok;
    }

    form.addEventListener('submit', function(e) {
      e.preventDefault();
      if (!validate()) return;

      // Show loading
      btnText.style.display = 'none';
      btnArrow.style.display = 'none';
      btnLoad.style.display = 'inline';
      btn.disabled = true;
      clearErr(submitErr);
      clearErr(submitOk);

      var fd = new FormData(form);
      fetch(form.action, {
          method: 'POST',
          body: fd
        })
        .then(function(r) {
          return r.json();
        })
        .then(function(data) {
          btnText.style.display = 'inline';
          btnArrow.style.display = 'inline';
          btnLoad.style.display = 'none';
          btn.disabled = false;
          if (data.success) {
            submitOk.textContent = data.message || 'Thank you! We will call you back shortly.';
            submitOk.style.display = 'block';
            form.reset();
            [nameIn, phoneIn, zipIn, emailIn].forEach(function(inp) {
              inp.classList.remove('pp-lf-valid');
            });
          } else {
            showErr(submitErr, data.message || 'Something went wrong. Please try again.');
          }
        })
        .catch(function() {
          btnText.style.display = 'inline';
          btnArrow.style.display = 'inline';
          btnLoad.style.display = 'none';
          btn.disabled = false;
          showErr(submitErr, 'Network error. Please try again or call us directly.');
        });
    });
  })();
</script>

<?php include __DIR__ . '/footer.php'; ?>