<?php

/** Dynamic footer â€” reads everything from config. */
$_legal = unserialize(LEGAL_LINKS);
?>

<footer id="site-footer" style="position:relative;background-color:#050508;border-top:1px solid rgba(124,58,237,.2);overflow:hidden;padding:6rem 0 2rem;">

  <!-- Massive Background Glow & Pattern -->
  <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,.03) 1px, transparent 1px);background-size:24px 24px;pointer-events:none;mask-image:linear-gradient(to bottom, black, transparent);-webkit-mask-image:linear-gradient(to bottom, black, transparent);"></div>
  <div style="position:absolute;top:-50%;left:-20%;width:800px;height:800px;background:radial-gradient(circle,rgba(124,58,237,.08),transparent 70%);border-radius:50%;pointer-events:none;"></div>
  <div style="position:absolute;bottom:0;right:-20%;width:600px;height:600px;background:radial-gradient(circle,rgba(59,130,246,.08),transparent 70%);border-radius:50%;pointer-events:none;"></div>

  <div class="footer-inner" style="max-width:1200px;margin:0 auto;padding:0 1.5rem;display:grid;grid-template-columns:1.7fr 1.2fr 1.1fr 0.8fr;gap:3rem;position:relative;z-index:1;margin-bottom:4.5rem;">

    <!-- Brand col -->
    <div class="footer-brand" style="display:flex;flex-direction:column;align-items:flex-start;">
      <a href="<?= url('index.php') ?>" class="sh-logo" style="margin-bottom:2rem;display:inline-flex;align-items:center;text-decoration:none;transition:opacity .2s ease;" onmouseover="this.style.opacity='.85';" onmouseout="this.style.opacity='1';">
        <img src="<?= asset('images/brocus-new-logo.png') ?>" alt="<?= SITE_NAME ?> Logo" style="height:45px;width:auto;object-fit:contain;">
      </a>
      <div style="display:flex;flex-direction:column;gap:.85rem;align-items:flex-start;">
        <div style="font-size:.85rem;color:rgba(255,255,255,.55);display:flex;align-items:center;gap:.75rem;min-height:32px;line-height:1.2;">
          <div style="width:32px;height:32px;border-radius:8px;background:rgba(124,58,237,.15);border:1px solid rgba(124,58,237,.2);display:flex;align-items:center;justify-content:center;color:#7C3AED;flex-shrink:0;"><i class="fas fa-map-marker-alt" style="font-size:.75rem"></i></div>
          <span><?= ADDR_FULL ?></span>
        </div>
        <a href="tel:<?= PHONE_TEL ?>" style="font-size:.85rem;color:rgba(255,255,255,.55);text-decoration:none;transition:color .2s ease;display:flex;align-items:center;gap:.75rem;min-height:32px;line-height:1.2;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='rgba(255,255,255,.55)';">
          <div style="width:32px;height:32px;border-radius:8px;background:rgba(124,58,237,.15);border:1px solid rgba(124,58,237,.2);display:flex;align-items:center;justify-content:center;color:#7C3AED;flex-shrink:0;"><i class="fas fa-phone" style="font-size:.75rem"></i></div>
          <span><?= PHONE_DISPLAY ?></span>
        </a>
        <a href="mailto:<?= EMAIL_INFO ?>" style="font-size:.85rem;color:rgba(255,255,255,.55);text-decoration:none;transition:color .2s ease;display:flex;align-items:center;gap:.75rem;min-height:32px;line-height:1.2;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='rgba(255,255,255,.55)';">
          <div style="width:32px;height:32px;border-radius:8px;background:rgba(124,58,237,.15);border:1px solid rgba(124,58,237,.2);display:flex;align-items:center;justify-content:center;color:#7C3AED;flex-shrink:0;"><i class="fas fa-envelope" style="font-size:.75rem"></i></div>
          <span><?= EMAIL_INFO ?></span>
        </a>
        <div style="font-size:.85rem;color:rgba(255,255,255,.55);display:flex;align-items:center;gap:.75rem;min-height:32px;line-height:1.2;">
          <div style="width:32px;height:32px;border-radius:8px;background:rgba(124,58,237,.15);border:1px solid rgba(124,58,237,.2);display:flex;align-items:center;justify-content:center;color:#7C3AED;flex-shrink:0;"><i class="fas fa-fingerprint" style="font-size:.75rem"></i></div>
          <span>D-U-N-S #: 14-611-0107</span>
        </div>
      </div>
    </div>

    <?php
    // Get services and products dynamically from NAV_ITEMS
    $_nav_items = unserialize(NAV_ITEMS);
    $_services = [];
    $_products = [];
    foreach ($_nav_items as $_item) {
      if ($_item['slug'] === 'home-security') {
        if (isset($_item['dropdown']['services'])) {
          $_services = $_item['dropdown']['services'];
        }
        if (isset($_item['dropdown']['products'])) {
          $_products = $_item['dropdown']['products'];
        }
        break;
      }
    }
    ?>
    <!-- Products col -->
    <div class="footer-col" style="display:flex;flex-direction:column;gap:.75rem;">
      <span style="font-size:.75rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:#fff;margin-bottom:1rem;display:block;padding-bottom:.75rem;border-bottom:1px solid rgba(255,255,255,.08);">Products</span>
      <?php foreach ($_products as $prod): ?>
        <a href="<?= url($prod['href']) ?>" style="font-size:.875rem;color:rgba(255,255,255,.6);text-decoration:none;transition:all .2s ease;display:block;padding:.2rem 0;line-height:1.4;" onmouseover="this.style.color='#fff';this.style.paddingLeft='6px';" onmouseout="this.style.color='rgba(255,255,255,.6)';this.style.paddingLeft='0';"><?= htmlspecialchars($prod['label']) ?></a>
      <?php endforeach; ?>
    </div>

    <!-- Our Services col -->
    <div class="footer-col" style="display:flex;flex-direction:column;gap:.75rem;">
      <span style="font-size:.75rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:#fff;margin-bottom:1rem;display:block;padding-bottom:.75rem;border-bottom:1px solid rgba(255,255,255,.08);">Our Services</span>
      <?php foreach ($_services as $svc): ?>
        <a href="<?= url($svc['href']) ?>" style="font-size:.875rem;color:rgba(255,255,255,.6);text-decoration:none;transition:all .2s ease;display:block;padding:.2rem 0;line-height:1.4;" onmouseover="this.style.color='#fff';this.style.paddingLeft='6px';" onmouseout="this.style.color='rgba(255,255,255,.6)';this.style.paddingLeft='0';"><?= htmlspecialchars($svc['label']) ?></a>
      <?php endforeach; ?>
    </div>

    <!-- Company col -->
    <div class="footer-col" style="display:flex;flex-direction:column;gap:.75rem;">
      <span style="font-size:.75rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:#fff;margin-bottom:1rem;display:block;padding-bottom:.75rem;border-bottom:1px solid rgba(255,255,255,.08);">Company</span>
      <a href="<?= url('') ?>" style="font-size:.875rem;color:rgba(255,255,255,.6);text-decoration:none;transition:all .2s ease;display:block;padding:.2rem 0;line-height:1.4;" onmouseover="this.style.color='#fff';this.style.paddingLeft='6px';" onmouseout="this.style.color='rgba(255,255,255,.6)';this.style.paddingLeft='0';">Home</a>
      <a href="<?= url('about') ?>" style="font-size:.875rem;color:rgba(255,255,255,.6);text-decoration:none;transition:all .2s ease;display:block;padding:.2rem 0;line-height:1.4;" onmouseover="this.style.color='#fff';this.style.paddingLeft='6px';" onmouseout="this.style.color='rgba(255,255,255,.6)';this.style.paddingLeft='0';">About Us</a>
      <a href="<?= url('contact') ?>" style="font-size:.875rem;color:rgba(255,255,255,.6);text-decoration:none;transition:all .2s ease;display:block;padding:.2rem 0;line-height:1.4;" onmouseover="this.style.color='#fff';this.style.paddingLeft='6px';" onmouseout="this.style.color='rgba(255,255,255,.6)';this.style.paddingLeft='0';">Contact Us</a>
    </div>

  </div>

  <div style="border-top:1px solid rgba(124,58,237,.3);margin:0 1.5rem;"></div>
  <div style="padding:2.5rem 1.5rem 2rem;text-align:center;">
    <p style="font-size:.8rem;color:rgba(255,255,255,.45);line-height:1.75;margin:0 auto 0.75rem;max-width:800px;font-family:'Manrope',sans-serif;">Brocus IT Solutions LLC is an independent advisory service — not a manufacturer, dealer, installer, or monitoring provider. We empower you to make safe choices.</p>
    <p style="font-size:.82rem;color:rgba(255,255,255,.65);margin:0 auto 1.25rem;font-family:'Manrope',sans-serif;">&copy; 2026 Brocus IT Solutions LLC. All rights reserved.</p>
    <div style="display:inline-flex;gap:2rem;">
      <a href="<?= url('privacy-policy') ?>" style="font-size:.78rem;color:rgba(255,255,255,.5);text-decoration:none;font-family:'Manrope',sans-serif;transition:color .2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.5)'">Privacy Policy</a>
      <a href="<?= url('terms-and-conditions') ?>" style="font-size:.78rem;color:rgba(255,255,255,.5);text-decoration:none;font-family:'Manrope',sans-serif;transition:color .2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.5)'">Terms and Conditions</a>
    </div>
  </div>
</footer>

<!-- Floating Call Button -->
<a href="tel:<?= PHONE_TEL ?>" class="floating-call-btn" aria-label="Call Us Now">
  <div class="fcb-icon">
    <i class="fas fa-phone-alt" style="transform: scaleX(-1);"></i>
  </div>
  <div class="fcb-text">
    <span>Call Now</span>
    <strong><?= PHONE_DISPLAY ?></strong>
  </div>
</a>

<!-- Scroll To Top Button -->
<button id="scroll-to-top" aria-label="Scroll to top" onclick="window.scrollTo({top:0,behavior:'smooth'})">
  <i class="fas fa-chevron-up"></i>
</button>

<!-- ── Reading Progress Bar ── -->
<div id="reading-progress" style="position:fixed;top:0;left:0;height:3px;width:0%;background:linear-gradient(90deg,#7C3AED,#4F46E5,#60A5FA);z-index:99999;transition:width .1s linear;pointer-events:none;"></div>

<!-- ── Exit Intent Popup ── -->
<div id="exit-popup" style="display:none;position:fixed;inset:0;z-index:99998;background:rgba(5,5,20,.75);backdrop-filter:blur(6px);align-items:center;justify-content:center;">
  <div style="background:#fff;border-radius:24px;padding:3rem 2.5rem;max-width:480px;width:90%;text-align:center;position:relative;box-shadow:0 30px 80px rgba(0,0,0,.25);">
    <button onclick="document.getElementById('exit-popup').style.display='none';sessionStorage.setItem('exitShown','1');" style="position:absolute;top:1rem;right:1rem;background:none;border:none;font-size:1.25rem;color:#94A3B8;cursor:pointer;" aria-label="Close">&times;</button>
    <div style="width:64px;height:64px;background:rgba(124,58,237,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 1.5rem;">
      <i class="fas fa-shield-alt" style="font-size:1.75rem;color:#7C3AED;"></i>
    </div>
    <h3 style="font-size:1.5rem;font-weight:800;color:#0F172A;margin-bottom:.75rem;line-height:1.2;">Wait — your free advice is just one call away</h3>
    <p style="color:#64748B;line-height:1.6;margin-bottom:2rem;font-size:.95rem;">No sales pressure. No obligation. Just an independent advisor who answers your questions honestly.</p>
    <a href="<?= url('contact') ?>" class="btn btn-primary" style="display:inline-flex;align-items:center;gap:.6rem;padding:.9rem 1.75rem;border-radius:12px;background:linear-gradient(135deg,#7C3AED,#4F46E5);font-weight:700;text-decoration:none;font-size:.95rem;" onclick="document.getElementById('exit-popup').style.display='none';sessionStorage.setItem('exitShown','1');">
      <i class="fas fa-phone"></i> Get Free Advice
    </a>
    <p style="margin-top:1rem;font-size:.78rem;color:#94A3B8;">Takes less than a minute to connect</p>
  </div>
</div>

<!-- ── Cookie Consent Banner ── -->
<div id="cookie-banner" class="cookie-banner-hidden" style="position:fixed;bottom:0;left:0;right:0;z-index:99997;background:rgba(15,23,42,.97);border-top:1px solid rgba(124,58,237,.25);backdrop-filter:blur(12px);padding:1.25rem 2rem;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:1rem;">
  <p style="color:rgba(255,255,255,.75);font-size:.82rem;margin:0;max-width:700px;line-height:1.6;">
    <i class="fas fa-cookie-bite" style="color:#A78BFA;margin-right:.5rem;"></i>
    We use cookies to improve your experience and analyse site usage. By continuing, you agree to our
    <a href="<?= url('privacy-policy') ?>" style="color:#A78BFA;text-decoration:underline;">Privacy Policy</a>.
  </p>
  <div style="display:flex;gap:.75rem;flex-shrink:0;">
    <button id="cookie-accept" style="background:linear-gradient(135deg,#7C3AED,#4F46E5);color:#fff;border:none;border-radius:8px;padding:.5rem 1.25rem;font-size:.82rem;font-weight:700;cursor:pointer;">Accept</button>
    <button id="cookie-decline" style="background:rgba(255,255,255,.08);color:rgba(255,255,255,.6);border:1px solid rgba(255,255,255,.15);border-radius:8px;padding:.5rem 1.25rem;font-size:.82rem;font-weight:600;cursor:pointer;">Decline</button>
  </div>
</div>

<!-- External Scripts -->
<script src="<?= asset('js/main.js') ?>" defer></script>
<!-- Lenis Smooth Scroll -->
<script src="https://unpkg.com/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    if (typeof Lenis !== 'undefined') {
      const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      });
      function raf(time) { lenis.raf(time); requestAnimationFrame(raf); }
      requestAnimationFrame(raf);
    }
  });
</script>

<script>
(function() {

  // ── Reading Progress Bar ──────────────────────────────
  var progressBar = document.getElementById('reading-progress');
  function updateProgress() {
    var scrollTop = window.scrollY;
    var docHeight = document.documentElement.scrollHeight - window.innerHeight;
    var pct = docHeight > 0 ? (scrollTop / docHeight * 100) : 0;
    if (progressBar) progressBar.style.width = pct + '%';
  }

  // ── Scroll To Top visibility ──────────────────────────
  var sttBtn = document.getElementById('scroll-to-top');
  function updateScrollTop() {
    if (!sttBtn) return;
    if (window.scrollY > 300) sttBtn.classList.add('visible');
    else sttBtn.classList.remove('visible');
  }

  window.addEventListener('scroll', function() {
    updateProgress();
    updateScrollTop();
  }, { passive: true });

  // ── Exit Intent Popup ────────────────────────────────
  var exitPopup = document.getElementById('exit-popup');
  if (exitPopup && !sessionStorage.getItem('exitShown')) {
    var triggered = false;
    document.addEventListener('mouseleave', function(e) {
      if (e.clientY <= 0 && !triggered) {
        triggered = true;
        exitPopup.style.display = 'flex';
      }
    });
    // Close on backdrop click
    exitPopup.addEventListener('click', function(e) {
      if (e.target === exitPopup) {
        exitPopup.style.display = 'none';
        sessionStorage.setItem('exitShown', '1');
      }
    });
  }

  // ── Cookie Consent ───────────────────────────────────
  var cookieBanner = document.getElementById('cookie-banner');
  var acceptBtn = document.getElementById('cookie-accept');
  var declineBtn = document.getElementById('cookie-decline');

  function hideCookieBanner() {
    if (!cookieBanner) return;
    cookieBanner.style.transform = 'translateY(100%)';
    cookieBanner.style.opacity = '0';
    setTimeout(function() { cookieBanner.classList.add('cookie-banner-hidden'); }, 400);
  }

  if (cookieBanner && !localStorage.getItem('cookieConsent')) {
    // Delay a tiny bit so the slide-in animation is visible
    setTimeout(function() {
      cookieBanner.classList.remove('cookie-banner-hidden');
      cookieBanner.style.transform = 'translateY(0)';
      cookieBanner.style.opacity = '1';
    }, 800);
  }

  if (acceptBtn) acceptBtn.addEventListener('click', function() {
    localStorage.setItem('cookieConsent', 'accepted');
    hideCookieBanner();
  });
  if (declineBtn) declineBtn.addEventListener('click', function() {
    localStorage.setItem('cookieConsent', 'declined');
    hideCookieBanner();
  });

  // ── Entrance Animations (IntersectionObserver) ───────
  var aoObserver = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) {
      if (e.isIntersecting) {
        var delay = e.target.dataset.delay || 0;
        setTimeout(function() { e.target.classList.add('aos-in'); }, parseInt(delay));
        aoObserver.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.aos-fade, .aos-fade-left, .aos-fade-right').forEach(function(el) {
    aoObserver.observe(el);
  });

  // ── Animated Number Counters ─────────────────────────
  var counters = document.querySelectorAll('[data-count]');
  if (counters.length) {
    var cntObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(e) {
        if (e.isIntersecting) {
          var el = e.target;
          var target = parseInt(el.dataset.count);
          var prefix = el.dataset.prefix || '';
          var suffix = el.dataset.suffix || '';
          var start = performance.now();
          var duration = 1800;
          function step(now) {
            var progress = Math.min((now - start) / duration, 1);
            var ease = 1 - Math.pow(1 - progress, 3);
            var val = Math.floor(ease * target);
            el.textContent = prefix + (val >= 1000 ? val.toLocaleString() : val) + suffix;
            if (progress < 1) requestAnimationFrame(step);
          }
          requestAnimationFrame(step);
          cntObserver.unobserve(el);
        }
      });
    }, { threshold: 0.3 });
    counters.forEach(function(el) { cntObserver.observe(el); });
  }

})();
</script>

<style>
  /* ── Entrance Animations ── */
  .aos-fade { opacity:0; transform:translateY(28px); transition:opacity .65s cubic-bezier(.4,0,.2,1), transform .65s cubic-bezier(.4,0,.2,1); }
  .aos-fade.aos-in { opacity:1; transform:translateY(0); }
  .aos-fade-left { opacity:0; transform:translateX(-32px); transition:opacity .65s cubic-bezier(.4,0,.2,1), transform .65s cubic-bezier(.4,0,.2,1); }
  .aos-fade-left.aos-in { opacity:1; transform:translateX(0); }
  .aos-fade-right { opacity:0; transform:translateX(32px); transition:opacity .65s cubic-bezier(.4,0,.2,1), transform .65s cubic-bezier(.4,0,.2,1); }
  .aos-fade-right.aos-in { opacity:1; transform:translateX(0); }

  /* ── Cookie Consent Banner ── */
  #cookie-banner {
    transform: translateY(100%);
    opacity: 0;
    transition: transform 0.4s cubic-bezier(.4,0,.2,1), opacity 0.4s ease;
  }
  .cookie-banner-hidden {
    visibility: hidden !important;
    pointer-events: none !important;
  }

  .floating-call-btn {
    position: fixed;
    bottom: 30px;
    left: 30px;
    background: linear-gradient(135deg, #7C3AED, #4F46E5);
    border-radius: 50px;
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 8px 20px 8px 8px;
    color: #fff;
    text-decoration: none;
    box-shadow: 0 10px 30px rgba(124, 58, 237, 0.4);
    z-index: 9999;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .floating-call-btn:hover {
    transform: translateY(-5px) scale(1.02);
    box-shadow: 0 15px 40px rgba(124, 58, 237, 0.6);
  }

  .fcb-icon {
    width: 44px;
    height: 44px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
    animation: pulse-ring 2s infinite;
  }

  .fcb-text {
    display: flex;
    flex-direction: column;
    line-height: 1.2;
  }

  .fcb-text span {
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    opacity: 0.8;
    font-weight: 600;
  }

  .fcb-text strong {
    font-size: 1.05rem;
    font-weight: 800;
    letter-spacing: -0.01em;
  }

  @keyframes pulse-ring {
    0% {
      box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.5);
    }

    70% {
      box-shadow: 0 0 0 12px rgba(255, 255, 255, 0);
    }

    100% {
      box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
    }
  }

  @media(max-width: 600px) {
    .floating-call-btn {
      bottom: 20px;
      left: 20px;
      padding: 6px 16px 6px 6px;
    }

    .fcb-icon {
      width: 38px;
      height: 38px;
      font-size: 1rem;
    }

    .fcb-text strong {
      font-size: 0.95rem;
    }

    .fcb-text span {
      font-size: 0.7rem;
    }
  }

  @media(max-width:1000px) {
    .footer-inner {
      grid-template-columns: repeat(2, 1fr) !important;
      gap: 3.5rem !important;
    }

    .footer-brand {
      grid-column: 1 / -1;
    }

    .footer-bottom {
      flex-direction: column;
      text-align: center;
      align-items: center;
    }

    .footer-bottom div {
      justify-content: center;
    }
  }

  @media(max-width:550px) {
    .footer-inner {
      grid-template-columns: 1fr !important;
      gap: 2.5rem !important;
    }
  }

  /* ── Scroll To Top Button ── */
  #scroll-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: linear-gradient(135deg, #7C3AED, #4F46E5);
    color: #fff;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    box-shadow: 0 8px 24px rgba(124, 58, 237, 0.4);
    z-index: 9998;
    opacity: 0;
    visibility: hidden;
    transform: translateY(16px);
    transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s ease, box-shadow 0.3s ease;
  }

  #scroll-to-top.visible {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }

  #scroll-to-top:hover {
    box-shadow: 0 12px 32px rgba(124, 58, 237, 0.6);
    transform: translateY(-3px);
  }

  @media(max-width: 600px) {
    #scroll-to-top {
      bottom: 20px;
      right: 20px;
      width: 42px;
      height: 42px;
      font-size: 0.9rem;
    }
  }
</style>

<script>
  (function() {
    var btn = document.getElementById('scroll-to-top');
    if (!btn) return;
    window.addEventListener('scroll', function() {
      if (window.scrollY > 300) {
        btn.classList.add('visible');
      } else {
        btn.classList.remove('visible');
      }
    }, {
      passive: true
    });
  })();
</script>