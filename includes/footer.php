<?php

/** Dynamic footer â€” reads everything from config. */
$_legal = unserialize(LEGAL_LINKS);
?>

<footer id="site-footer" style="position:relative;background-color:#050508;border-top:1px solid rgba(124,58,237,.2);overflow:hidden;padding:6rem 0 2rem;">

  <!-- Massive Background Glow & Pattern -->
  <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,.03) 1px, transparent 1px);background-size:24px 24px;pointer-events:none;mask-image:linear-gradient(to bottom, black, transparent);-webkit-mask-image:linear-gradient(to bottom, black, transparent);"></div>
  <div style="position:absolute;top:-50%;left:-20%;width:800px;height:800px;background:radial-gradient(circle,rgba(124,58,237,.08),transparent 70%);border-radius:50%;pointer-events:none;"></div>
  <div style="position:absolute;bottom:0;right:-20%;width:600px;height:600px;background:radial-gradient(circle,rgba(59,130,246,.08),transparent 70%);border-radius:50%;pointer-events:none;"></div>

  <div class="footer-inner" style="max-width:1200px;margin:0 auto;padding:0 1.5rem;display:grid;grid-template-columns:1.8fr 1fr 1fr 1fr;gap:4rem;position:relative;z-index:1;margin-bottom:4.5rem;">

    <!-- Brand col -->
    <div class="footer-brand" style="display:flex;flex-direction:column;">
      <a href="<?= url('index.php') ?>" class="sh-logo" style="margin-bottom:2rem;display:inline-block;text-decoration:none;transition:opacity .2s ease;" onmouseover="this.style.opacity='.85';" onmouseout="this.style.opacity='1';">
        <img src="<?= asset('images/brocus-new-logo.png') ?>" alt="<?= SITE_NAME ?> Logo" style="height:60px;width:auto;object-fit:contain;">
      </a>
      <div style="display:flex;flex-direction:column;gap:.85rem;">
        <a href="tel:<?= PHONE_TEL ?>" style="font-size:.85rem;color:rgba(255,255,255,.55);text-decoration:none;transition:color .2s ease;display:inline-flex;align-items:center;gap:.75rem;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='rgba(255,255,255,.55)';">
          <div style="width:32px;height:32px;border-radius:8px;background:rgba(124,58,237,.15);border:1px solid rgba(124,58,237,.2);display:flex;align-items:center;justify-content:center;color:#7C3AED;flex-shrink:0;"><i class="fas fa-phone" style="font-size:.75rem"></i></div>
          <?= PHONE_DISPLAY ?>
        </a>
        <a href="mailto:<?= EMAIL_INFO ?>" style="font-size:.85rem;color:rgba(255,255,255,.55);text-decoration:none;transition:color .2s ease;display:inline-flex;align-items:center;gap:.75rem;" onmouseover="this.style.color='#fff';" onmouseout="this.style.color='rgba(255,255,255,.55)';">
          <div style="width:32px;height:32px;border-radius:8px;background:rgba(124,58,237,.15);border:1px solid rgba(124,58,237,.2);display:flex;align-items:center;justify-content:center;color:#7C3AED;flex-shrink:0;"><i class="fas fa-envelope" style="font-size:.75rem"></i></div>
          <?= EMAIL_INFO ?>
        </a>
      </div>
    </div>

    <!-- Our Services col -->
    <div class="footer-col" style="display:flex;flex-direction:column;gap:.75rem;">
      <span style="font-size:.75rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:#fff;margin-bottom:1rem;display:block;padding-bottom:.75rem;border-bottom:1px solid rgba(255,255,255,.08);">Our Services</span>
      <a href="<?= url('home-security/professional-monitoring/') ?>" style="font-size:.875rem;color:rgba(255,255,255,.6);text-decoration:none;transition:all .2s ease;display:block;padding:.2rem 0;" onmouseover="this.style.color='#fff';this.style.paddingLeft='6px';" onmouseout="this.style.color='rgba(255,255,255,.6)';this.style.paddingLeft='0';">24/7 Professional Monitoring</a>
      <a href="<?= url('home-security.php') ?>" style="font-size:.875rem;color:rgba(255,255,255,.6);text-decoration:none;transition:all .2s ease;display:block;padding:.2rem 0;" onmouseover="this.style.color='#fff';this.style.paddingLeft='6px';" onmouseout="this.style.color='rgba(255,255,255,.6)';this.style.paddingLeft='0';">Smart Home Security</a>
      <a href="<?= url('home-security.php') ?>" style="font-size:.875rem;color:rgba(255,255,255,.6);text-decoration:none;transition:all .2s ease;display:block;padding:.2rem 0;" onmouseover="this.style.color='#fff';this.style.paddingLeft='6px';" onmouseout="this.style.color='rgba(255,255,255,.6)';this.style.paddingLeft='0';">Fire &amp; CO Detection</a>
    </div>

    <!-- Company col -->
    <div class="footer-col" style="display:flex;flex-direction:column;gap:.75rem;">
      <span style="font-size:.75rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:#fff;margin-bottom:1rem;display:block;padding-bottom:.75rem;border-bottom:1px solid rgba(255,255,255,.08);">Company</span>
      <a href="<?= url('index.php') ?>" style="font-size:.875rem;color:rgba(255,255,255,.6);text-decoration:none;transition:all .2s ease;display:block;padding:.2rem 0;" onmouseover="this.style.color='#fff';this.style.paddingLeft='6px';" onmouseout="this.style.color='rgba(255,255,255,.6)';this.style.paddingLeft='0';">Home</a>
      <a href="<?= url('about.php') ?>" style="font-size:.875rem;color:rgba(255,255,255,.6);text-decoration:none;transition:all .2s ease;display:block;padding:.2rem 0;" onmouseover="this.style.color='#fff';this.style.paddingLeft='6px';" onmouseout="this.style.color='rgba(255,255,255,.6)';this.style.paddingLeft='0';">About Us</a>
      <a href="<?= url('contact.php') ?>" style="font-size:.875rem;color:rgba(255,255,255,.6);text-decoration:none;transition:all .2s ease;display:block;padding:.2rem 0;" onmouseover="this.style.color='#fff';this.style.paddingLeft='6px';" onmouseout="this.style.color='rgba(255,255,255,.6)';this.style.paddingLeft='0';">Contact Us</a>
    </div>

    <!-- Get Started col -->
    <div class="footer-col" style="display:flex;flex-direction:column;gap:.75rem;">
      <span style="font-size:.75rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:#fff;margin-bottom:1rem;display:block;padding-bottom:.75rem;border-bottom:1px solid rgba(255,255,255,.08);">Get Started</span>
      <p style="font-size:.85rem;color:rgba(255,255,255,.5);line-height:1.65;margin:0 0 1rem;font-family:'Manrope',sans-serif;">Ready to secure your home? Get a free, no-obligation quote from our experts.</p>
      <a href="<?= url('contact.php') ?>" class="btn btn-primary" style="display:inline-flex;justify-content:center;padding:.75rem 1.25rem;font-size:.85rem;font-weight:700;border-radius:8px;">Get a Free Quote</a>
    </div>

  </div>

  <div style="border-top:1px solid rgba(124,58,237,.3);margin:0 1.5rem;"></div>
  <div style="padding:2.5rem 1.5rem 2rem;text-align:center;">
    <p style="font-size:.8rem;color:rgba(255,255,255,.45);line-height:1.75;margin:0 auto 0.75rem;max-width:800px;font-family:'Manrope',sans-serif;">Brocus IT Solutions LLC is an independent advisory and referral service — not a manufacturer, dealer, installer, or monitoring provider. We empower you to make safe choices.</p>
    <p style="font-size:.82rem;color:rgba(255,255,255,.65);margin:0 auto 1.25rem;font-family:'Manrope',sans-serif;">&copy; 2026 Brocus IT Solutions LLC. All rights reserved.</p>
    <div style="display:inline-flex;gap:2rem;">
      <a href="<?= url('privacy-policy.php') ?>" style="font-size:.78rem;color:rgba(255,255,255,.5);text-decoration:none;font-family:'Manrope',sans-serif;transition:color .2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.5)'">Privacy Policy</a>
      <a href="<?= url('terms-and-conditions.php') ?>" style="font-size:.78rem;color:rgba(255,255,255,.5);text-decoration:none;font-family:'Manrope',sans-serif;transition:color .2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.5)'">Terms and conditions</a>
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

      function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
      }
      requestAnimationFrame(raf);
    }
  });
</script>

<style>
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
</style>