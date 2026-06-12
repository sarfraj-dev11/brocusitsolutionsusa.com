<?php
$cta_headline = $cta_headline ?? 'Ready for<br><span style="background:linear-gradient(135deg,#A78BFA,#60A5FA);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">straight answers?</span>';
$cta_subtitle = $cta_subtitle ?? 'Skip the sales pitch and talk to an independent advisor who is on your side.';
?>
<section id="cta-banner" style="padding: 6rem 0; background-color: #050508; position: relative; overflow: hidden;">
  <div style="max-width: 900px; margin: 0 auto; padding: 0 1.5rem; position: relative; z-index: 1;">
    <div style="position:relative;background:linear-gradient(135deg, rgba(30,11,62,0.9) 0%, rgba(13,21,71,0.95) 100%);border-radius:24px;padding:5rem 3rem;text-align:center;overflow:hidden;border:1px solid rgba(124,58,237,.3);box-shadow:0 24px 50px rgba(0,0,0,.4);backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);">

      <!-- Glowing Orbs inside the card -->
      <div style="position:absolute;top:-20%;left:-10%;width:300px;height:300px;background:radial-gradient(circle,rgba(124,58,237,.3),transparent 70%);border-radius:50%;filter:blur(50px);pointer-events:none;"></div>
      <div style="position:absolute;bottom:-20%;right:-10%;width:300px;height:300px;background:radial-gradient(circle,rgba(59,130,246,.25),transparent 70%);border-radius:50%;filter:blur(50px);pointer-events:none;"></div>

      <div style="position:relative;z-index:2;max-width:600px;margin:0 auto;">
        <h2 style="font-family:var(--font);font-size:clamp(2rem,4vw,3rem);font-weight:800;color:#fff;letter-spacing:-.02em;line-height:1.2;margin-bottom:1rem;">
          <?= $cta_headline ?>
        </h2>

        <p style="color:rgba(255,255,255,.75);font-size:1.05rem;line-height:1.6;margin-bottom:3rem;">
          <?= $cta_subtitle ?>
        </p>

        <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;align-items:center;margin-bottom:3rem;">
          <a href="tel:<?= PHONE_TEL ?>" class="btn btn-primary btn-lg" style="background:linear-gradient(135deg,#7C3AED,#4F46E5);border:none;box-shadow:0 12px 30px rgba(124,58,237,.3);border-radius:12px;padding:1rem 2rem;display:inline-flex;gap:0.75rem;align-items:center;transition:all .3s ease;" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 16px 40px rgba(124,58,237,.4)';" onmouseout="this.style.transform='none';this.style.boxShadow='0 12px 30px rgba(124,58,237,.3)';">
            <div style="width:28px;height:28px;border-radius:50%;background:rgba(255,255,255,.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;"><i class="fas fa-phone" style="font-size:.75rem"></i></div>
            Call now: <?= PHONE_DISPLAY ?>
          </a>
          <a href="<?= url('contact.php') ?>" class="btn btn-outline btn-lg" style="border-radius:12px;padding:1rem 2rem;background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.1);color:#fff;display:inline-flex;gap:0.75rem;align-items:center;transition:all .3s ease;" onmouseover="this.style.background='rgba(255,255,255,.08)';this.style.borderColor='rgba(255,255,255,.2)';" onmouseout="this.style.background='rgba(255,255,255,.03)';this.style.borderColor='rgba(255,255,255,.1)';">
            Get free advice <i class="fas fa-arrow-right" style="font-size:.8rem;color:#A78BFA;"></i>
          </a>
        </div>

        <div style="display:flex;justify-content:center;align-items:center;gap:1.5rem;flex-wrap:wrap;font-size:0.85rem;">
          <span style="display:inline-flex;align-items:center;gap:.5rem;color:rgba(255,255,255,.5);"><i class="fas fa-check" style="color:#10B981;font-size:.7rem;"></i> Free consultation</span>
          <span style="width:3px;height:3px;border-radius:50%;background:rgba(255,255,255,.15);"></span>
          <span style="display:inline-flex;align-items:center;gap:.5rem;color:rgba(255,255,255,.5);"><i class="fas fa-check" style="color:#10B981;font-size:.7rem;"></i> No obligation</span>
          <span style="width:3px;height:3px;border-radius:50%;background:rgba(255,255,255,.15);"></span>
          <span style="display:inline-flex;align-items:center;gap:.5rem;color:rgba(255,255,255,.5);"><i class="fas fa-check" style="color:#10B981;font-size:.7rem;"></i> Real, Human Advisors</span>
        </div>
      </div>
    </div>
  </div>
</section>
