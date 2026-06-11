<?php
require_once __DIR__ . '/includes/bootstrap.php';
$page_title = 'About ' . SITE_SHORT . ' | Independent Advisors for US Households';
$page_desc  = SITE_NAME . ' is a US-based independent advisory service that helps households make confident home decisions, starting with home security. Learn how we work.';
require_once __DIR__ . '/includes/head.php';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<section class="page-hero" style="background:radial-gradient(ellipse 80% 600px at 50% 10%, #3b96ff 0%, #5746c6 45%, #110c28 100%)">
  <div class="page-hero-inner">
    <span class="label">About Brocus</span>
    <h1 class="page-h">We Help You Make Confident<br><span class="grad">Home Decisions</span></h1>
    <p class="page-sub">An independent advisory company built on a simple belief: people deserve honest guidance before they spend money on their home.</p>
  </div>
</section>

<!-- MISSION -->
<section style="padding:7rem 0;background:linear-gradient(160deg,#fdfcff 0%,#f5f0ff 50%,#eff6ff 100%);position:relative;overflow:hidden;">
  <div style="max-width:1100px;margin:0 auto;padding:0 1.5rem;display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center">
    <div>
      <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.4rem 1rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#5B21B6;background:rgba(124,58,237,.08);border:1px solid rgba(124,58,237,.2);">
        <span style="width:6px;height:6px;border-radius:50%;background:#7C3AED;display:inline-block;box-shadow:0 0 8px #7C3AED;"></span>
        Who we are
      </span>
      <h2 style="font-family:var(--font-display);font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;margin:.875rem 0 1.25rem;line-height:1.25;color:#0F172A">Built to put you at the center of the decision</h2>
      <p style="color:#374151;line-height:1.8;margin-bottom:1rem">Brocus IT Solutions LLC is a United States based advisory company built on a simple belief: people deserve honest guidance before they spend money on their home. Too often, households are sold the wrong product, locked into the wrong contract, or talked into paying for things they will never use. We started Brocus to put you, not the sale, at the center of the decision.</p>
      <p style="color:#374151;line-height:1.8;margin-bottom:1rem">We are an independent advisory and referral service. We do not manufacture, sell, install, or service anything ourselves. What we do is help you understand your options clearly, then connect you with a trusted provider who delivers exactly what you decide on.</p>
      <p style="color:#374151;line-height:1.8">Today, our focus is helping families across the US choose the right home security — and we are building toward helping with more everyday home decisions over time.</p>
    </div>
    <div style="position:relative;padding-right:1rem;">
      <div style="position:absolute;top:-20px;left:-20px;width:100%;height:100%;background:linear-gradient(135deg,#E8D7FF,#BFDBFE);border-radius:32px;z-index:0;transform:rotate(-3deg);"></div>
      <img src="/assets/images/advisor.jpg" alt="Brocus IT Solutions advisor" width="520" height="440" style="position:relative;z-index:1;width:100%;height:440px;object-fit:cover;display:block;border-radius:24px;box-shadow:0 24px 60px rgba(0,0,0,.15);">
    </div>
  </div>
</section>

<!-- WHY WE EXIST -->
<section style="padding:5rem 0;background:#FFFFFF;">
  <div style="max-width:860px;margin:0 auto;padding:0 1.5rem;text-align:center">
    <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.4rem 1rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#5B21B6;background:rgba(124,58,237,.08);border:1px solid rgba(124,58,237,.2);">
      <span style="width:6px;height:6px;border-radius:50%;background:#7C3AED;display:inline-block;box-shadow:0 0 8px #7C3AED;"></span>
      Why we exist
    </span>
    <h2 style="font-family:var(--font-display);font-size:clamp(2rem,4vw,2.8rem);font-weight:800;color:#0F172A;letter-spacing:-.02em;margin:.875rem auto 1.5rem;line-height:1.15">The calm, straight-talking voice in the noise</h2>
    <p style="font-size:1.05rem;color:#475569;line-height:1.8;margin-bottom:1rem">Shopping for almost any home service today is noisy. Search for one and you are met with aggressive ads, vague pricing, and reviews that often have a financial interest in steering you one way. It is genuinely hard to know who to trust.</p>
    <p style="font-size:1.05rem;color:#475569;line-height:1.8">We saw an opportunity to be the calm, straight-talking voice in that noise. Someone whose only job is to help you understand the decision in front of you and make the choice that is right for your home. When the guidance is honest and the pressure is gone, people make better decisions and feel good about them afterward. That is the entire point of Brocus.</p>
  </div>
</section>

<!-- WHAT MAKES US DIFFERENT -->
<section style="padding:7rem 0">
  <div class="sec-header">
    <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.4rem 1.25rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:#C4B5FD;background:rgba(196,181,253,.08);border:1px solid rgba(196,181,253,.2);">
      <span style="width:6px;height:6px;border-radius:50%;background:#8B5CF6;display:inline-block;box-shadow:0 0 10px #8B5CF6;"></span>
      Our Approach
    </span>
    <h2 class="sec-h">What makes our approach different</h2>
  </div>
  <div class="feat-grid">
    <?php foreach (
      [
        ['i' => 'fa-scale-balanced', 'c' => 'rgba(96,165,250,.15)', 'ic' => '#60A5FA', 't' => 'We are independent', 'd' => 'Our recommendations are not bound to a single brand or product line, so we can give you a balanced view of your real choices.'],
        ['i' => 'fa-book-open', 'c' => 'rgba(167,139,250,.15)', 'ic' => '#A78BFA', 't' => 'We lead with education, not fear', 'd' => 'We will share genuine, sourced information so you can decide based on facts, not anxiety. If a smaller, cheaper solution is right for you, we will say so.'],
        ['i' => 'fa-clock', 'c' => 'rgba(110,231,183,.15)', 'ic' => '#6EE7B7', 't' => 'We respect your time and your budget', 'd' => 'No long scripts, no pressure, no upsell games. Just clear answers and a recommendation that fits what you can actually spend.'],
        ['i' => 'fa-user-check', 'c' => 'rgba(252,211,77,.15)', 'ic' => '#FCD34D', 't' => 'We stay with you', 'd' => 'You get one point of contact who understands your situation, from your first question to the moment you are set up with the right provider.'],
      ] as $f
    ): ?>
      <div class="feat-card">
        <div class="feat-icon" style="background:<?= $f['c'] ?>;color:<?= $f['ic'] ?>"><i class="fas <?= $f['i'] ?>"></i></div>
        <h3 class="feat-title"><?= $f['t'] ?></h3>
        <p class="feat-desc"><?= $f['d'] ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- HOW WE WORK -->
<section style="padding:7rem 0;background:linear-gradient(180deg,#F8FAFC 0%,#F1F5F9 100%);">
  <div style="max-width:1200px;margin:0 auto;padding:0 1.5rem;position:relative;z-index:1;">
    <div style="text-align:center;margin-bottom:5.5rem;">
      <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.5rem 1.25rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:#6D28D9;background:#F5F3FF;border:1px solid #EDE9FE;">
        <span style="width:6px;height:6px;border-radius:50%;background:#8B5CF6;display:inline-block;animation:pulseDot 2s infinite;box-shadow:0 0 10px #8B5CF6;"></span>
        How We Work
      </span>
      <h2 style="font-family:var(--font);font-size:clamp(2.5rem,4.5vw,3.5rem);font-weight:800;color:#0F172A;letter-spacing:-.03em;margin:1.5rem 0 1.25rem;">Your experience, step by step</h2>
      <p style="font-size:1.15rem;color:#475569;line-height:1.75;max-width:600px;margin:0 auto;font-weight:400;">From your first question to your final decision, here is what working with us looks like.</p>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:3rem;position:relative;">
      <!-- Connecting line -->
      <!-- <div style="position:absolute;top:5.5rem;left:10%;right:10%;height:2px;background:linear-gradient(to right, transparent, rgba(124,58,237,.25), transparent);z-index:0;"></div> -->

      <?php foreach (
        [
          ['n' => '01', 'i' => 'fa-comments', 'bg' => 'linear-gradient(135deg,#7C3AED,#4F46E5)', 't' => 'You reach out', 'd' => 'A quick call or message starts the conversation.'],
          ['n' => '02', 'i' => 'fa-house-chimney', 'bg' => 'linear-gradient(135deg,#6D28D9,#4338CA)', 't' => 'We learn about your home', 'd' => 'We ask about your space, your concerns, and your budget.'],
          ['n' => '03', 'i' => 'fa-lightbulb', 'bg' => 'linear-gradient(135deg,#5B21B6,#3730A3)', 't' => 'We explain your options', 'd' => 'Clearly, in plain language, with the pros and cons of each path.'],
          ['n' => '04', 'i' => 'fa-handshake', 'bg' => 'linear-gradient(135deg,#7C3AED,#4F46E5)', 't' => 'We connect you with a vetted provider', 'd' => 'When you are ready, we match you with an independent third-party provider who supplies and services your chosen solution.'],
          ['n' => '05', 'i' => 'fa-user-check', 'bg' => 'linear-gradient(135deg,#6D28D9,#4338CA)', 't' => 'You stay in control at every step', 'd' => 'If the answer is to wait, we respect that too.'],
        ] as $s
      ): ?>
        <div style="background:#FFFFFF;border-radius:32px;padding:3.5rem 2.5rem;box-shadow:0 12px 40px rgba(15,23,42,.04);border:1px solid rgba(226,232,240,.8);position:relative;transition:all .4s cubic-bezier(0.4, 0, 0.2, 1);z-index:1;display:flex;flex-direction:column;" onmouseover="this.style.transform='translateY(-10px)';this.style.boxShadow='0 30px 60px rgba(124,58,237,.08)';this.style.borderColor='rgba(124,58,237,.4)';" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 12px 40px rgba(15,23,42,.04)';this.style.borderColor='rgba(226,232,240,.8)';">

          <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:2.5rem;">
            <div style="font-family:var(--font);font-size:3.5rem;font-weight:800;color:transparent;-webkit-text-stroke:2px #C4B5FD;line-height:1;opacity:0.8;"><?= $s['n'] ?></div>
            <div style="width:64px;height:64px;border-radius:20px;background:<?= $s['bg'] ?>;display:flex;align-items:center;justify-content:center;font-size:1.5rem;color:#fff;box-shadow:0 12px 24px rgba(124,58,237,.25);">
              <i class="fas <?= $s['i'] ?>"></i>
            </div>
          </div>

          <h3 style="font-family:var(--font);font-size:1.5rem;font-weight:800;color:#0F172A;margin:0 0 1.25rem;letter-spacing:-.02em;line-height:1.2;"><?= $s['t'] ?></h3>
          <p style="font-size:1.1rem;color:#475569;line-height:1.75;margin:0;font-weight:400;"><?= $s['d'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- OUR STANDARDS -->
<section style="padding:7rem 0;background:#FFFFFF;">
  <div style="max-width:900px;margin:0 auto;padding:0 1.5rem">
    <div style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:24px;padding:3rem;text-align:center;box-shadow:0 12px 40px rgba(15,23,42,.04);transition:all .4s cubic-bezier(0.4,0,0.2,1);" onmouseover="this.style.borderColor='rgba(124,58,237,.3)';this.style.boxShadow='0 20px 50px rgba(124,58,237,.08)';" onmouseout="this.style.borderColor='#E2E8F0';this.style.boxShadow='0 12px 40px rgba(15,23,42,.04)';">
      <div style="width:60px;height:60px;border-radius:16px;background:rgba(124,58,237,.1);color:#7C3AED;display:flex;align-items:center;justify-content:center;font-size:1.4rem;margin:0 auto 1.5rem;border:1px solid rgba(124,58,237,.15);"><i class="fas fa-award"></i></div>
      <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.4rem 1rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#5B21B6;background:rgba(124,58,237,.08);border:1px solid rgba(124,58,237,.2);">
        <span style="width:6px;height:6px;border-radius:50%;background:#7C3AED;display:inline-block;box-shadow:0 0 8px #7C3AED;"></span>
        Our Standards
      </span>
      <h2 style="font-family:var(--font-display);font-size:1.8rem;font-weight:700;margin:.875rem 0 1.25rem;color:#0F172A">How we vet every provider</h2>
      <p style="color:#475569;line-height:1.8;font-size:1rem">Before we ever recommend a provider, we look at their track record, their service quality, and how they treat customers. We want the people we connect you with to reflect the same honesty and care that we put into our advice. Our reputation depends on it, so we take it seriously.</p>
    </div>
  </div>
</section>

<!-- WHERE WE ARE HEADED -->
<section style="padding:7rem 0;background-color:#0B0F19;background-image:radial-gradient(rgba(255,255,255,.05) 1.5px, transparent 1.5px);background-size:32px 32px;position:relative;overflow:hidden;">
  <div style="position:absolute;top:0;left:50%;transform:translateX(-50%);width:1000px;height:500px;background:radial-gradient(ellipse,rgba(124,58,237,.12),transparent 70%);pointer-events:none;"></div>
  <div style="max-width:860px;margin:0 auto;padding:0 1.5rem;text-align:center;position:relative;z-index:1;">
    <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.5rem 1.25rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:#C4B5FD;background:rgba(124,58,237,.1);border:1px solid rgba(124,58,237,.2);">
      <span style="width:6px;height:6px;border-radius:50%;background:#8B5CF6;display:inline-block;box-shadow:0 0 10px #8B5CF6;"></span>
      Looking Ahead
    </span>
    <h2 style="font-family:var(--font);font-size:clamp(2rem,4vw,2.8rem);font-weight:800;color:#fff;letter-spacing:-.02em;margin:.875rem auto 1.5rem;line-height:1.15">Where we are <span style="background:linear-gradient(135deg,#A78BFA,#60A5FA);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">headed</span></h2>
    <p style="font-size:1.1rem;color:rgba(255,255,255,.7);line-height:1.8;max-width:740px;margin:0 auto;font-weight:400;font-family:var(--font-p, 'Manrope', sans-serif);">We launched by helping US homeowners make smarter, calmer decisions about protecting their homes. Over time, our goal is to bring that same independent, no-pressure approach to more of the everyday choices households face, so that whenever a major home decision feels confusing, there is a trustworthy place to turn. Home security is where we start, not where we stop.</p>
  </div>
</section>

<!-- CTA -->
<section id="cta-banner" style="padding:9rem 0;background-color:#050508;position:relative;overflow:hidden;">
  <div style="max-width:1200px;margin:0 auto;padding:0 1.5rem;position:relative;z-index:1;">

    <div style="position:relative;background:linear-gradient(135deg,rgba(30,11,62,.8) 0%,rgba(13,21,71,.8) 100%);border-radius:32px;padding:6rem 3rem;text-align:center;overflow:hidden;border:1px solid rgba(124,58,237,.3);box-shadow:0 30px 60px rgba(0,0,0,.5);backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);">

      <!-- Glowing Orbs inside the card -->
      <div style="position:absolute;top:-20%;left:-10%;width:400px;height:400px;background:radial-gradient(circle,rgba(124,58,237,.4),transparent 70%);border-radius:50%;filter:blur(60px);pointer-events:none;"></div>
      <div style="position:absolute;bottom:-20%;right:-10%;width:400px;height:400px;background:radial-gradient(circle,rgba(59,130,246,.3),transparent 70%);border-radius:50%;filter:blur(60px);pointer-events:none;"></div>

      <div style="position:relative;z-index:2;max-width:700px;margin:0 auto;">
        <h2 style="font-family:var(--font);font-size:clamp(2.5rem,5vw,4rem);font-weight:800;color:#fff;letter-spacing:-.03em;line-height:1.1;margin-bottom:1.5rem;">Talk to an<br><span style="background:linear-gradient(135deg,#A78BFA,#60A5FA);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">advisor</span></h2>
        
        <p style="font-size:1.2rem;color:rgba(255,255,255,.75);margin-bottom:3.5rem;line-height:1.75;font-family:var(--font-p, 'Manrope', sans-serif);font-weight:400;">If you want honest guidance from people whose only goal is to help you choose well, we would be glad to hear from you.</p>
        
        <div style="display:flex;flex-wrap:wrap;gap:1.25rem;justify-content:center;align-items:center;">
          <a href="tel:<?= PHONE_TEL ?>" class="btn btn-primary btn-lg" style="background:linear-gradient(135deg,#7C3AED,#4F46E5);border:none;box-shadow:0 16px 40px rgba(124,58,237,.35);border-radius:16px;padding:1.15rem 2.25rem;font-size:1.1rem;display:inline-flex;gap:1rem;align-items:center;transition:all .3s ease;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 20px 50px rgba(124,58,237,.5)';" onmouseout="this.style.transform='none';this.style.boxShadow='0 16px 40px rgba(124,58,237,.35)';">
            <div style="width:34px;height:34px;border-radius:50%;background:rgba(255,255,255,.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;"><i class="fas fa-phone" style="font-size:.85rem"></i></div>
            Call now: <?= PHONE_DISPLAY ?>
          </a>
          <a href="contact.php" class="btn btn-outline btn-lg" style="border-radius:16px;padding:1.15rem 2.25rem;font-size:1.1rem;background:rgba(255,255,255,.05);border-color:rgba(255,255,255,.15);color:#fff;display:inline-flex;gap:1rem;align-items:center;transition:all .3s ease;" onmouseover="this.style.background='rgba(255,255,255,.1)';this.style.borderColor='rgba(255,255,255,.3)';" onmouseout="this.style.background='rgba(255,255,255,.05)';this.style.borderColor='rgba(255,255,255,.15)';">
            Get free advice <i class="fas fa-arrow-right" style="font-size:.9rem;color:#A78BFA;"></i>
          </a>
        </div>
        
        <div style="margin-top:3.5rem;display:flex;justify-content:center;align-items:center;gap:1.5rem;flex-wrap:wrap;">
          <span style="display:inline-flex;align-items:center;gap:.6rem;font-size:.95rem;color:rgba(255,255,255,.6);font-family:var(--font-p, 'Manrope', sans-serif);"><i class="fas fa-check" style="color:#059669;font-size:.8rem;"></i> Free consultation</span>
          <span style="width:4px;height:4px;border-radius:50%;background:rgba(255,255,255,.2);"></span>
          <span style="display:inline-flex;align-items:center;gap:.6rem;font-size:.95rem;color:rgba(255,255,255,.6);font-family:var(--font-p, 'Manrope', sans-serif);"><i class="fas fa-check" style="color:#059669;font-size:.8rem;"></i> No obligation</span>
          <span style="width:4px;height:4px;border-radius:50%;background:rgba(255,255,255,.2);"></span>
          <span style="display:inline-flex;align-items:center;gap:.6rem;font-size:.95rem;color:rgba(255,255,255,.6);font-family:var(--font-p, 'Manrope', sans-serif);"><i class="fas fa-check" style="color:#059669;font-size:.8rem;"></i> US-based advisors</span>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  @media(max-width:900px) {
    [style*="grid-template-columns:1fr 1fr"] {
      grid-template-columns: 1fr !important
    }

    [style*="gap:5rem"] {
      gap: 3rem !important
    }
  }
</style>
<?php include __DIR__ . '/includes/footer.php'; ?>