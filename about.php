<?php
require_once __DIR__ . '/includes/bootstrap.php';
$page_title = 'About ' . SITE_SHORT . ' | Independent Advisors for US Households';
$page_desc  = SITE_NAME . ' is a US-based independent advisory service that helps households make confident home decisions, starting with home security. Learn how we work.';
require_once __DIR__ . '/includes/head.php';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<section class="page-hero">
  <div class="page-hero-inner">
    <span class="label">About Brocus</span>
    <h1 class="page-h">We Help You Make Confident<br><span class="grad">Home Decisions</span></h1>
    <p class="page-sub">An independent advisory company built on a simple belief: people deserve honest guidance before they spend money on their home.</p>
  </div>
</section>

<!-- MISSION -->
<section style="padding:7rem 0">
  <div style="max-width:1100px;margin:0 auto;padding:0 1.5rem;display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center">
    <div>
      <span class="label">Who we are</span>
      <h2 style="font-family:var(--font-display);font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;margin:.875rem 0 1.25rem;line-height:1.25">Built to put you at the center of the decision</h2>
      <p style="color:rgba(255,255,255,.65);line-height:1.8;margin-bottom:1rem">Brocus IT Solutions LLC is a United States based advisory company built on a simple belief: people deserve honest guidance before they spend money on their home. Too often, households are sold the wrong product, locked into the wrong contract, or talked into paying for things they will never use.</p>
      <p style="color:rgba(255,255,255,.65);line-height:1.8;margin-bottom:1rem">We are an independent advisory and referral service. We do not manufacture, sell, install, or service anything ourselves. What we do is help you understand your options clearly, then connect you with a trusted provider who delivers exactly what you decide on.</p>
      <p style="color:rgba(255,255,255,.65);line-height:1.8">Today, our focus is helping families across the US choose the right home security — and we are building toward helping with more everyday home decisions over time.</p>
    </div>
    <div style="border-radius:24px;overflow:hidden;border:1px solid rgba(255,255,255,.08)">
      <img src="/brocusitsolutionsusa/assets/images/advisor.jpg" alt="Brocus IT Solutions advisor" width="520" height="440" style="width:100%;height:440px;object-fit:cover;display:block">
    </div>
  </div>
</section>

<!-- WHY WE EXIST -->
<section style="padding:5rem 0;background:linear-gradient(180deg,#06080F,#0A0E20 50%,#06080F)">
  <div style="max-width:860px;margin:0 auto;padding:0 1.5rem;text-align:center">
    <span class="label">Why we exist</span>
    <h2 class="sec-h" style="margin:.875rem auto 1.5rem">The calm, straight-talking voice in the noise</h2>
    <p style="font-size:1.05rem;color:rgba(255,255,255,.65);line-height:1.8">Shopping for almost any home service today is noisy. Search for one and you are met with aggressive ads, vague pricing, and reviews that often have a financial interest in steering you one way. It is genuinely hard to know who to trust. We saw an opportunity to be someone whose only job is to help you understand the decision in front of you and make the choice that is right for your home. When the guidance is honest and the pressure is gone, people make better decisions and feel good about them afterward. That is the entire point of Brocus.</p>
  </div>
</section>

<!-- WHAT MAKES US DIFFERENT -->
<section style="padding:7rem 0">
  <div class="sec-header">
    <span class="label">Our Approach</span>
    <h2 class="sec-h">What makes our approach different</h2>
  </div>
  <div class="feat-grid">
    <?php foreach([
      ['i'=>'fa-scale-balanced','c'=>'rgba(96,165,250,.15)','ic'=>'#60A5FA','t'=>'We are independent','d'=>'Our recommendations are not bound to a single brand or product line, so we can give you a balanced view of your real choices.'],
      ['i'=>'fa-book-open','c'=>'rgba(167,139,250,.15)','ic'=>'#A78BFA','t'=>'We lead with education, not fear','d'=>'We share genuine, sourced information so you can decide based on facts, not anxiety. If a smaller, cheaper solution is right for you, we will say so.'],
      ['i'=>'fa-clock','c'=>'rgba(110,231,183,.15)','ic'=>'#6EE7B7','t'=>'We respect your time and budget','d'=>'No long scripts, no pressure, no upsell games. Just clear answers and a recommendation that fits what you can actually spend.'],
      ['i'=>'fa-user-check','c'=>'rgba(252,211,77,.15)','ic'=>'#FCD34D','t'=>'We stay with you','d'=>'You get one point of contact who understands your situation, from your first question to the moment you are set up with the right provider.'],
    ] as $f): ?>
    <div class="feat-card">
      <div class="feat-icon" style="background:<?= $f['c'] ?>;color:<?= $f['ic'] ?>"><i class="fas <?= $f['i'] ?>"></i></div>
      <h3 class="feat-title"><?= $f['t'] ?></h3>
      <p class="feat-desc"><?= $f['d'] ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- HOW WE WORK -->
<section style="padding:7rem 0;background:linear-gradient(180deg,#06080F,#0A0E20 50%,#06080F)">
  <div class="sec-header">
    <span class="label">How We Work</span>
    <h2 class="sec-h">Your experience, step by step</h2>
  </div>
  <div class="how-inner">
    <div class="how-steps">
      <?php foreach([
        ['t'=>'You reach out','d'=>'A quick call or message starts the conversation. No forms longer than you need.'],
        ['t'=>'We learn about your home','d'=>'We ask about your space, your concerns, and your budget — with genuine curiosity, not a script.'],
        ['t'=>'We explain your options','d'=>'Clearly, in plain language, with the pros and cons of each path. No jargon.'],
        ['t'=>'We connect you with a vetted provider','d'=>'When you are ready, we match you with an independent third-party provider who supplies and services your chosen solution.'],
        ['t'=>'You stay in control','d'=>'If the answer is to wait, we respect that too. You decide what happens next, always.'],
      ] as $s): ?>
      <div class="how-step">
        <h3 class="how-step-title"><?= $s['t'] ?></h3>
        <p class="how-step-desc"><?= $s['d'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- OUR STANDARDS -->
<section style="padding:7rem 0">
  <div style="max-width:900px;margin:0 auto;padding:0 1.5rem">
    <div style="background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:24px;padding:3rem;text-align:center">
      <div style="width:60px;height:60px;border-radius:16px;background:rgba(96,165,250,.12);color:#60A5FA;display:flex;align-items:center;justify-content:center;font-size:1.4rem;margin:0 auto 1.5rem"><i class="fas fa-award"></i></div>
      <span class="label">Our Standards</span>
      <h2 style="font-family:var(--font-display);font-size:1.8rem;font-weight:700;margin:.875rem 0 1.25rem">How we vet every provider</h2>
      <p style="color:rgba(255,255,255,.65);line-height:1.8;font-size:1rem">Before we ever recommend a provider, we look at their track record, their service quality, and how they treat customers. We want the people we connect you with to reflect the same honesty and care that we put into our advice. Our reputation depends on it, so we take it seriously.</p>
    </div>
  </div>
</section>

<!-- WHERE WE ARE HEADED -->
<section id="cta-banner" style="padding:9rem 0;background-color:#050508;position:relative;overflow:hidden;">
  <div style="max-width:1200px;margin:0 auto;padding:0 1.5rem;position:relative;z-index:1;">
    
    <div style="position:relative;background:linear-gradient(135deg,rgba(30,11,62,.8) 0%,rgba(13,21,71,.8) 100%);border-radius:32px;padding:6rem 3rem;text-align:center;overflow:hidden;border:1px solid rgba(124,58,237,.3);box-shadow:0 30px 60px rgba(0,0,0,.5);backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);">
      
      <!-- Glowing Orbs inside the card -->
      <div style="position:absolute;top:-20%;left:-10%;width:400px;height:400px;background:radial-gradient(circle,rgba(124,58,237,.4),transparent 70%);border-radius:50%;filter:blur(60px);pointer-events:none;"></div>
      <div style="position:absolute;bottom:-20%;right:-10%;width:400px;height:400px;background:radial-gradient(circle,rgba(59,130,246,.3),transparent 70%);border-radius:50%;filter:blur(60px);pointer-events:none;"></div>

      <div style="position:relative;z-index:2;max-width:700px;margin:0 auto;">
        <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.4rem 1.25rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:#C4B5FD;background:rgba(196,181,253,.1);border:1px solid rgba(196,181,253,.25);margin-bottom:2rem;">
          <span style="width:6px;height:6px;border-radius:50%;background:#A78BFA;display:inline-block;animation:pulseDot 2s infinite;box-shadow:0 0 8px #A78BFA;"></span>
          Where we are headed
        </span>
        
        <h2 style="font-family:var(--font);font-size:clamp(2.5rem,5vw,4rem);font-weight:800;color:#fff;letter-spacing:-.03em;line-height:1.1;margin-bottom:1.5rem;">Home security is where we start,<br><span style="background:linear-gradient(135deg,#A78BFA,#60A5FA);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">not where we stop</span></h2>
        
        <p style="font-size:1.2rem;color:rgba(255,255,255,.75);margin-bottom:3.5rem;line-height:1.75;font-family:var(--font-p, 'Manrope', sans-serif);font-weight:400;">We launched by helping US homeowners make smarter, calmer decisions about protecting their homes. Over time, our goal is to bring that same independent, no-pressure approach to more of the everyday choices households face — so that whenever a major home decision feels confusing, there is a trustworthy place to turn.</p>
        
        <div style="display:flex;flex-wrap:wrap;gap:1.25rem;justify-content:center;align-items:center;">
          <a href="tel:<?= PHONE_TEL ?>" class="btn btn-primary btn-lg" style="background:linear-gradient(135deg,#7C3AED,#4F46E5);border:none;box-shadow:0 16px 40px rgba(124,58,237,.35);border-radius:16px;padding:1.15rem 2.25rem;font-size:1.1rem;display:inline-flex;gap:1rem;align-items:center;transition:all .3s ease;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 20px 50px rgba(124,58,237,.5)';" onmouseout="this.style.transform='none';this.style.boxShadow='0 16px 40px rgba(124,58,237,.35)';">
            <div style="width:34px;height:34px;border-radius:50%;background:rgba(255,255,255,.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;"><i class="fas fa-phone" style="font-size:.85rem"></i></div>
            Call now: <?= PHONE_DISPLAY ?>
          </a>
          <a href="contact.php" class="btn btn-outline btn-lg" style="border-radius:16px;padding:1.15rem 2.25rem;font-size:1.1rem;background:rgba(255,255,255,.05);border-color:rgba(255,255,255,.15);color:#fff;display:inline-flex;gap:1rem;align-items:center;transition:all .3s ease;" onmouseover="this.style.background='rgba(255,255,255,.1)';this.style.borderColor='rgba(255,255,255,.3)';" onmouseout="this.style.background='rgba(255,255,255,.05)';this.style.borderColor='rgba(255,255,255,.15)';">
            Send Us a Message <i class="fas fa-arrow-right" style="font-size:.9rem;color:#A78BFA;"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>@media(max-width:900px){[style*="grid-template-columns:1fr 1fr"]{grid-template-columns:1fr !important}[style*="gap:5rem"]{gap:3rem !important}}</style>
<?php include __DIR__ . '/includes/footer.php'; ?>
