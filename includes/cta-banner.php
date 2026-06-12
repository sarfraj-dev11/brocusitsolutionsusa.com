<?php
$cta_headline = $cta_headline ?? 'Ready for straight answers?';
$cta_subtitle = $cta_subtitle ?? 'Talk to an independent advisor who is on your side.';
?>
<section id="cta-banner" style="padding: 4rem 0; background-color: #050508; position: relative; overflow: hidden; border-top: 1px solid rgba(255,255,255,0.05);">
  <div style="max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; position: relative; z-index: 1;">
    <div style="position:relative;background:linear-gradient(135deg, rgba(30,11,62,0.95) 0%, rgba(13,21,71,0.98) 100%);border-radius:20px;padding:clamp(2rem, 5vw, 3.5rem) clamp(1.5rem, 5vw, 4rem);overflow:hidden;border:1px solid rgba(124,58,237,.3);box-shadow:0 24px 50px rgba(0,0,0,.4);backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:clamp(1.5rem, 4vw, 3rem);">

      <!-- Glowing Orbs inside the card -->
      <div style="position:absolute;top:-50%;left:-10%;width:300px;height:300px;background:radial-gradient(circle,rgba(124,58,237,.3),transparent 70%);border-radius:50%;filter:blur(50px);pointer-events:none;"></div>
      <div style="position:absolute;bottom:-50%;right:-10%;width:300px;height:300px;background:radial-gradient(circle,rgba(59,130,246,.25),transparent 70%);border-radius:50%;filter:blur(50px);pointer-events:none;"></div>

      <div style="position:relative;z-index:2;flex:1;min-width:300px;">
        <h2 style="font-family:var(--font);font-size:clamp(1.8rem,3vw,2.4rem);font-weight:800;color:#fff;letter-spacing:-.02em;line-height:1.2;margin-bottom:0.5rem;">
          <?= $cta_headline ?>
        </h2>
        <p style="color:rgba(255,255,255,.75);font-size:1.05rem;line-height:1.5;margin:0;">
          <?= $cta_subtitle ?>
        </p>
      </div>

      <div style="position:relative;z-index:2;display:flex;flex-wrap:wrap;gap:1rem;align-items:center;">
        <a href="tel:<?= PHONE_TEL ?>" class="btn btn-primary" style="background:linear-gradient(135deg,#7C3AED,#4F46E5);border:none;box-shadow:0 8px 20px rgba(124,58,237,.3);border-radius:10px;padding:0.85rem 1.75rem;font-weight:600;display:inline-flex;gap:0.75rem;align-items:center;transition:all .3s ease;" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 12px 24px rgba(124,58,237,.4)';" onmouseout="this.style.transform='none';this.style.boxShadow='0 8px 20px rgba(124,58,237,.3)';">
          <i class="fas fa-phone" style="font-size:.85rem"></i> Call: <?= PHONE_DISPLAY ?>
        </a>
        <a href="<?= url('contact.php') ?>" class="btn btn-outline" style="border-radius:10px;padding:0.85rem 1.75rem;font-weight:600;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.15);color:#fff;display:inline-flex;gap:0.75rem;align-items:center;transition:all .3s ease;" onmouseover="this.style.background='rgba(255,255,255,.1)';this.style.borderColor='rgba(255,255,255,.2)';" onmouseout="this.style.background='rgba(255,255,255,.05)';this.style.borderColor='rgba(255,255,255,.15)';">
          Get free advice <i class="fas fa-arrow-right" style="font-size:.8rem;color:#A78BFA;"></i>
        </a>
      </div>

    </div>
  </div>
</section>
