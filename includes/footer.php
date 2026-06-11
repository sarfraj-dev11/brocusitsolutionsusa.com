<?php

/** Dynamic footer â€” reads everything from config. */
$_legal = unserialize(LEGAL_LINKS);
?>

<footer id="site-footer" style="position:relative;background-color:#050508;border-top:1px solid rgba(124,58,237,.2);overflow:hidden;padding:6rem 0 2rem;">

  <!-- Massive Background Glow & Pattern -->
  <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,.03) 1px, transparent 1px);background-size:24px 24px;pointer-events:none;mask-image:linear-gradient(to bottom, black, transparent);-webkit-mask-image:linear-gradient(to bottom, black, transparent);"></div>
  <div style="position:absolute;top:-50%;left:-20%;width:800px;height:800px;background:radial-gradient(circle,rgba(124,58,237,.08),transparent 70%);border-radius:50%;pointer-events:none;"></div>
  <div style="position:absolute;bottom:0;right:-20%;width:600px;height:600px;background:radial-gradient(circle,rgba(59,130,246,.08),transparent 70%);border-radius:50%;pointer-events:none;"></div>

  <div class="footer-inner" style="max-width:1200px;margin:0 auto;padding:0 1.5rem;display:grid;grid-template-columns:1.8fr 1fr 1fr 1fr;gap:4rem;position:relative;z-index:1;margin-bottom:4.5rem;"> <!-- Brand col -->
    <div class="footer-brand" style="display:flex;flex-direction:column;">
      <a href="<?= url('index.php') ?>" class="sh-logo" style="margin-bottom:2rem;display:inline-block;text-decoration:none;transition:transform .3s ease;" onmouseover="this.style.transform='scale(1.02)';" onmouseout="this.style.transform='scale(1)';">
        <img src="<?= asset('images/logo.png') ?>" alt="<?= SITE_NAME ?> Logo" style="height:55px;width:auto;object-fit:contain;filter:drop-shadow(0 4px 12px rgba(124,58,237,.4));">
      </a>
      <div style="display:flex;flex-direction:column;gap:1rem;">
        <a href="tel:<?= PHONE_TEL ?>" style="font-size:.975rem;color:rgba(255,255,255,.75);text-decoration:none;transition:all .3s ease;display:inline-flex;align-items:center;gap:.875rem;" onmouseover="this.style.color='#C4B5FD';this.style.transform='translateX(4px)';" onmouseout="this.style.color='rgba(255,255,255,.75)';this.style.transform='none';">
          <div style="width:36px;height:36px;border-radius:10px;background:rgba(124,58,237,.15);border:1px solid rgba(124,58,237,.25);display:flex;align-items:center;justify-content:center;color:#C4B5FD;flex-shrink:0;"><i class="fas fa-phone" style="font-size:.8rem"></i></div>
          <?= PHONE_DISPLAY ?>
        </a>
        <a href="mailto:<?= EMAIL_INFO ?>" style="font-size:.975rem;color:rgba(255,255,255,.75);text-decoration:none;transition:all .3s ease;display:inline-flex;align-items:center;gap:.875rem;" onmouseover="this.style.color='#C4B5FD';this.style.transform='translateX(4px)';" onmouseout="this.style.color='rgba(255,255,255,.75)';this.style.transform='none';">
          <div style="width:36px;height:36px;border-radius:10px;background:rgba(124,58,237,.15);border:1px solid rgba(124,58,237,.25);display:flex;align-items:center;justify-content:center;color:#C4B5FD;flex-shrink:0;"><i class="fas fa-envelope" style="font-size:.8rem"></i></div>
          <?= EMAIL_INFO ?>
        </a>
      </div>
    </div>

    <!-- Nav cols -->
    <div class="footer-col" style="display:flex;flex-direction:column;gap:1rem;">
      <span class="footer-col-title" style="font-family:var(--font);font-size:.95rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:#fff;margin-bottom:1.25rem;display:inline-block;position:relative;">Services<div style="position:absolute;bottom:-8px;left:0;width:30px;height:2px;background:linear-gradient(90deg,#7C3AED,#4F46E5);border-radius:2px;"></div></span>
      <a href="<?= url('home-security.php') ?>" style="display:inline-block;font-size:1.05rem;color:rgba(255,255,255,.65);text-decoration:none;transition:all .3s ease;font-family:var(--font-p, 'Manrope', sans-serif);" onmouseover="this.style.color='#fff';this.style.transform='translateX(6px)';" onmouseout="this.style.color='rgba(255,255,255,.65)';this.style.transform='none';">Home Security</a>
      <a href="<?= url('contact.php') ?>" style="display:inline-block;font-size:1.05rem;color:rgba(255,255,255,.65);text-decoration:none;transition:all .3s ease;font-family:var(--font-p, 'Manrope', sans-serif);" onmouseover="this.style.color='#fff';this.style.transform='translateX(6px)';" onmouseout="this.style.color='rgba(255,255,255,.65)';this.style.transform='none';">Get Free Advice</a>
    </div>

    <div class="footer-col" style="display:flex;flex-direction:column;gap:1rem;">
      <span class="footer-col-title" style="font-family:var(--font);font-size:.95rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:#fff;margin-bottom:1.25rem;display:inline-block;position:relative;">Company<div style="position:absolute;bottom:-8px;left:0;width:30px;height:2px;background:linear-gradient(90deg,#7C3AED,#4F46E5);border-radius:2px;"></div></span>
      <a href="<?= url('index.php') ?>" style="display:inline-block;font-size:1.05rem;color:rgba(255,255,255,.65);text-decoration:none;transition:all .3s ease;font-family:var(--font-p, 'Manrope', sans-serif);" onmouseover="this.style.color='#fff';this.style.transform='translateX(6px)';" onmouseout="this.style.color='rgba(255,255,255,.65)';this.style.transform='none';">Home</a>
      <a href="<?= url('about.php') ?>" style="display:inline-block;font-size:1.05rem;color:rgba(255,255,255,.65);text-decoration:none;transition:all .3s ease;font-family:var(--font-p, 'Manrope', sans-serif);" onmouseover="this.style.color='#fff';this.style.transform='translateX(6px)';" onmouseout="this.style.color='rgba(255,255,255,.65)';this.style.transform='none';">About Us</a>
      <a href="<?= url('contact.php') ?>" style="display:inline-block;font-size:1.05rem;color:rgba(255,255,255,.65);text-decoration:none;transition:all .3s ease;font-family:var(--font-p, 'Manrope', sans-serif);" onmouseover="this.style.color='#fff';this.style.transform='translateX(6px)';" onmouseout="this.style.color='rgba(255,255,255,.65)';this.style.transform='none';">Contact</a>
    </div>

    <div class="footer-col" style="display:flex;flex-direction:column;gap:1rem;">
      <span class="footer-col-title" style="font-family:var(--font);font-size:.95rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:#fff;margin-bottom:1.25rem;display:inline-block;position:relative;">Legal<div style="position:absolute;bottom:-8px;left:0;width:30px;height:2px;background:linear-gradient(90deg,#7C3AED,#4F46E5);border-radius:2px;"></div></span>
      <?php foreach ($_legal as $l): ?>
        <a href="<?= url($l['href']) ?>" style="display:inline-block;font-size:1.05rem;color:rgba(255,255,255,.65);text-decoration:none;transition:all .3s ease;font-family:var(--font-p, 'Manrope', sans-serif);" onmouseover="this.style.color='#fff';this.style.transform='translateX(6px)';" onmouseout="this.style.color='rgba(255,255,255,.65)';this.style.transform='none';"><?= $l['label'] ?></a>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="footer-bottom" style="max-width:1200px;margin:0 auto;padding:2.5rem 1.5rem 0;position:relative;z-index:1;">
    <!-- Gradient Divider -->
    <div style="position:absolute;top:0;left:1.5rem;right:1.5rem;height:1px;background:linear-gradient(90deg,transparent,rgba(124,58,237,.5),transparent);"></div>

    <!-- Disclaimer: centered, full width -->
    <p style="text-align:center;font-size:.8rem;color:rgba(255,255,255,.32);line-height:1.7;max-width:720px;margin:0 auto 2rem;font-family:var(--font-p,'Manrope',sans-serif);">Brocus IT Solutions LLC is an independent advisory and referral service — not a manufacturer, dealer, installer, or monitoring provider. We empower you to make safe choices.

    </p>

    <!-- Bottom row: copyright | socials | legal links -->
    <div style="display:flex;justify-content:space-between;align-items:center;gap:1.5rem;flex-wrap:wrap;">
      <p style="font-size:.875rem;color:rgba(255,255,255,.4);margin:0;font-family:var(--font-p,'Manrope',sans-serif);line-height:1.5;">&copy; <?= COPYRIGHT_YEAR ?> <?= SITE_NAME ?>. All rights reserved.<br><span style="font-size:.8rem;opacity:.75;"><?= ADDR_CITY ?>, <?= ADDR_STATE ?> &middot; Independent Advisory &amp; Referral Service</span></p>

      <!-- Social Media Icons -->
      <div style="display:flex;gap:.875rem;">
        <a href="#" aria-label="Facebook" style="width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.05);display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.6);text-decoration:none;transition:all .3s ease;" onmouseover="this.style.background='#7C3AED';this.style.color='#fff';this.style.transform='translateY(-3px)';this.style.boxShadow='0 8px 20px rgba(124,58,237,.4)';" onmouseout="this.style.background='rgba(255,255,255,.05)';this.style.color='rgba(255,255,255,.6)';this.style.transform='none';this.style.boxShadow='none';"><i class="fab fa-facebook-f" style="font-size:.8rem"></i></a>
        <a href="#" aria-label="Twitter" style="width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.05);display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.6);text-decoration:none;transition:all .3s ease;" onmouseover="this.style.background='#1DA1F2';this.style.color='#fff';this.style.transform='translateY(-3px)';this.style.boxShadow='0 8px 20px rgba(29,161,242,.4)';" onmouseout="this.style.background='rgba(255,255,255,.05)';this.style.color='rgba(255,255,255,.6)';this.style.transform='none';this.style.boxShadow='none';"><i class="fab fa-twitter" style="font-size:.8rem"></i></a>
        <a href="#" aria-label="Instagram" style="width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.05);display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.6);text-decoration:none;transition:all .3s ease;" onmouseover="this.style.background='#E1306C';this.style.color='#fff';this.style.transform='translateY(-3px)';this.style.boxShadow='0 8px 20px rgba(225,48,108,.4)';" onmouseout="this.style.background='rgba(255,255,255,.05)';this.style.color='rgba(255,255,255,.6)';this.style.transform='none';this.style.boxShadow='none';"><i class="fab fa-instagram" style="font-size:.8rem"></i></a>
        <a href="#" aria-label="LinkedIn" style="width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.05);display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.6);text-decoration:none;transition:all .3s ease;" onmouseover="this.style.background='#0077B5';this.style.color='#fff';this.style.transform='translateY(-3px)';this.style.boxShadow='0 8px 20px rgba(0,119,181,.4)';" onmouseout="this.style.background='rgba(255,255,255,.05)';this.style.color='rgba(255,255,255,.6)';this.style.transform='none';this.style.boxShadow='none';"><i class="fab fa-linkedin-in" style="font-size:.8rem"></i></a>
      </div>

      <!-- Legal links -->
      <div style="display:flex;gap:1.5rem;flex-wrap:wrap;justify-content:flex-end;">
        <?php foreach ($_legal as $l): ?>
          <a href="<?= url($l['href']) ?>" style="font-size:.85rem;color:rgba(255,255,255,.4);text-decoration:none;transition:color .3s;font-family:var(--font-p,'Manrope',sans-serif);" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.4)'"><?= strip_tags($l['label']) ?></a>
        <?php endforeach; ?>
      </div>
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
    box-shadow: 0 10px 30px rgba(124,58,237,0.4);
    z-index: 9999;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .floating-call-btn:hover {
    transform: translateY(-5px) scale(1.02);
    box-shadow: 0 15px 40px rgba(124,58,237,0.6);
  }
  .fcb-icon {
    width: 44px;
    height: 44px;
    background: rgba(255,255,255,0.2);
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
    0% { box-shadow: 0 0 0 0 rgba(255,255,255,0.5); }
    70% { box-shadow: 0 0 0 12px rgba(255,255,255,0); }
    100% { box-shadow: 0 0 0 0 rgba(255,255,255,0); }
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