<?php
/** Dynamic footer — reads everything from config. */
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
      <a href="<?= url('index.php') ?>" class="sh-logo" style="margin-bottom:1.5rem;display:inline-block;text-decoration:none;transition:transform .3s ease;" onmouseover="this.style.transform='scale(1.02)';" onmouseout="this.style.transform='scale(1)';">
        <img src="<?= asset('images/logo.png') ?>" alt="<?= SITE_NAME ?> Logo" style="height:55px;width:auto;object-fit:contain;filter:drop-shadow(0 4px 12px rgba(124,58,237,.4));">
      </a>
      <p style="font-size:1.05rem;color:rgba(255,255,255,.65);line-height:1.8;max-width:320px;margin-bottom:2.5rem;font-weight:400;font-family:var(--font-p, 'Manrope', sans-serif);">
        <?= SITE_NAME ?> is an independent advisory and referral service — not a manufacturer, dealer, installer, or monitoring provider. We empower you to make safe choices.
      </p>
      
      <div style="display:flex;flex-direction:column;gap:1.25rem;">
        <a href="tel:<?= PHONE_TEL ?>" style="font-size:1.05rem;color:rgba(255,255,255,.8);text-decoration:none;transition:all .3s ease;display:inline-flex;align-items:center;gap:1rem;" onmouseover="this.style.color='#C4B5FD';this.style.transform='translateX(5px)';" onmouseout="this.style.color='rgba(255,255,255,.8)';this.style.transform='none';">
          <div style="width:40px;height:40px;border-radius:50%;background:linear-gradient(135deg,rgba(124,58,237,.15),rgba(59,130,246,.15));border:1px solid rgba(124,58,237,.3);display:flex;align-items:center;justify-content:center;color:#C4B5FD;transition:all .3s ease;box-shadow:0 0 15px rgba(124,58,237,.2);"><i class="fas fa-phone" style="font-size:.9rem"></i></div>
          <?= PHONE_DISPLAY ?>
        </a>
        <a href="mailto:<?= EMAIL_INFO ?>" style="font-size:1.05rem;color:rgba(255,255,255,.8);text-decoration:none;transition:all .3s ease;display:inline-flex;align-items:center;gap:1rem;" onmouseover="this.style.color='#C4B5FD';this.style.transform='translateX(5px)';" onmouseout="this.style.color='rgba(255,255,255,.8)';this.style.transform='none';">
          <div style="width:40px;height:40px;border-radius:50%;background:linear-gradient(135deg,rgba(124,58,237,.15),rgba(59,130,246,.15));border:1px solid rgba(124,58,237,.3);display:flex;align-items:center;justify-content:center;color:#C4B5FD;transition:all .3s ease;box-shadow:0 0 15px rgba(124,58,237,.2);"><i class="fas fa-envelope" style="font-size:.9rem"></i></div>
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

  <div class="footer-bottom" style="max-width:1200px;margin:0 auto;padding:2.5rem 1.5rem 0;position:relative;z-index:1;display:flex;justify-content:space-between;align-items:center;gap:1.5rem;flex-wrap:wrap;">
    <!-- Gradient Divider -->
    <div style="position:absolute;top:0;left:1.5rem;right:1.5rem;height:1px;background:linear-gradient(90deg,transparent,rgba(124,58,237,.5),transparent);"></div>
    
    <p style="font-size:.95rem;color:rgba(255,255,255,.45);margin:0;font-family:var(--font-p, 'Manrope', sans-serif);line-height:1.6;">&copy; <?= COPYRIGHT_YEAR ?> <?= SITE_NAME ?>. All rights reserved.<br><span style="opacity:0.7;font-size:0.85rem;margin-top:0.35rem;display:block;"><?= ADDR_CITY ?>, <?= ADDR_STATE ?> &middot; Independent Advisory &amp; Referral Service</span></p>
    
    <div style="display:flex;flex-direction:column;align-items:flex-end;gap:1.25rem;">
      <!-- Social Media Icons -->
      <div style="display:flex;gap:1rem;">
        <a href="#" style="width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.05);display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.7);text-decoration:none;transition:all .3s ease;" onmouseover="this.style.background='#7C3AED';this.style.color='#fff';this.style.transform='translateY(-3px)';this.style.boxShadow='0 8px 20px rgba(124,58,237,.4)';" onmouseout="this.style.background='rgba(255,255,255,.05)';this.style.color='rgba(255,255,255,.7)';this.style.transform='none';this.style.boxShadow='none';"><i class="fab fa-facebook-f"></i></a>
        <a href="#" style="width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.05);display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.7);text-decoration:none;transition:all .3s ease;" onmouseover="this.style.background='#1DA1F2';this.style.color='#fff';this.style.transform='translateY(-3px)';this.style.boxShadow='0 8px 20px rgba(29,161,242,.4)';" onmouseout="this.style.background='rgba(255,255,255,.05)';this.style.color='rgba(255,255,255,.7)';this.style.transform='none';this.style.boxShadow='none';"><i class="fab fa-twitter"></i></a>
        <a href="#" style="width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.05);display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.7);text-decoration:none;transition:all .3s ease;" onmouseover="this.style.background='#E1306C';this.style.color='#fff';this.style.transform='translateY(-3px)';this.style.boxShadow='0 8px 20px rgba(225,48,108,.4)';" onmouseout="this.style.background='rgba(255,255,255,.05)';this.style.color='rgba(255,255,255,.7)';this.style.transform='none';this.style.boxShadow='none';"><i class="fab fa-instagram"></i></a>
        <a href="#" style="width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.05);display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.7);text-decoration:none;transition:all .3s ease;" onmouseover="this.style.background='#0077B5';this.style.color='#fff';this.style.transform='translateY(-3px)';this.style.boxShadow='0 8px 20px rgba(0,119,181,.4)';" onmouseout="this.style.background='rgba(255,255,255,.05)';this.style.color='rgba(255,255,255,.7)';this.style.transform='none';this.style.boxShadow='none';"><i class="fab fa-linkedin-in"></i></a>
      </div>
      
      <!-- Legal Bottom Links -->
      <div style="display:flex;gap:1.5rem;flex-wrap:wrap;justify-content:flex-end;">
        <?php foreach ($_legal as $l): ?>
        <a href="<?= url($l['href']) ?>" style="font-size:.9rem;color:rgba(255,255,255,.45);text-decoration:none;transition:color .3s;font-family:var(--font-p, 'Manrope', sans-serif);" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.45)'"><?= strip_tags($l['label']) ?></a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</footer>

<!-- External Scripts -->
<script src="<?= asset('js/main.js') ?>" defer></script>

<style>
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
