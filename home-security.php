<?php
require_once __DIR__ . '/includes/bootstrap.php';
$page_title = 'Independent Home Security Advice in the USA | ' . SITE_NAME;
$page_desc  = 'Free, independent home security advice for US homeowners. Compare monitoring, equipment, and contracts with no sales pressure, then get matched with a vetted provider. Call today.';
require_once __DIR__ . '/includes/head.php';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<!-- PAGE HERO -->
<section class="page-hero" style="background:radial-gradient(ellipse 80% 60% at 50% 0%,rgba(37,99,235,.18),var(--bg) 65%)">
  <div class="page-hero-inner">
    <span class="label"><i class="fas fa-shield-halved" style="font-size:.7rem"></i> Home Security</span>
    <h1 class="page-h">Independent Home Security<br><span class="grad">Advice, Built Around Your Home</span></h1>
    <p class="page-sub">Free guidance with no sales pressure — we help you choose right, then connect you with a vetted provider who delivers it.</p>
    <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;margin-top:2rem">
      <a href="tel:<?= PHONE_TEL ?>" class="btn btn-primary btn-lg"><i class="fas fa-phone-flip" style="font-size:.85rem"></i> Talk to a Real Advisor</a>
      <a href="<?= url('contact.php') ?>" class="btn btn-outline btn-lg">Request a Callback</a>
    </div>
  </div>
</section>

<!-- INTRO -->
<section style="padding:6rem 0">
  <div style="max-width:1100px;margin:0 auto;padding:0 1.5rem;display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center">
    <div>
      <span class="label">The Problem</span>
      <h2 style="font-family:var(--font-display);font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;margin:.875rem 0 1.25rem;line-height:1.25">Choosing home security is harder than it should be</h2>
      <p style="color:rgba(255,255,255,.65);line-height:1.8;margin-bottom:1rem">Dozens of brands, confusing contracts, surprise fees, and salespeople who are paid to push one product. You end up guessing whether you are buying the right thing or simply the thing someone wanted to sell you.</p>
      <p style="color:rgba(255,255,255,.65);line-height:1.8;margin-bottom:1.5rem">Brocus helps you fix that. As an independent advisory service, we are not a manufacturer, an alarm dealer, or a monitoring company. We listen to what your home actually needs, explain your real options in plain language, and connect you with a vetted provider.</p>
      <a href="tel:<?= PHONE_TEL ?>" class="btn btn-primary"><i class="fas fa-phone-flip" style="font-size:.8rem"></i> <?= PHONE_DISPLAY ?> — One call, real answers</a>
    </div>
    <div style="border-radius:24px;overflow:hidden;border:1px solid rgba(255,255,255,.08)">
      <img src="/brocusitsolutionsusa/assets/images/advisor.jpg" alt="Independent home security advisor" width="520" height="420" style="width:100%;height:420px;object-fit:cover;display:block">
    </div>
  </div>
</section>

<!-- WHAT "INDEPENDENT" MEANS -->
<section style="padding:5rem 0;background:rgba(37,99,235,.04);border-top:1px solid rgba(37,99,235,.12);border-bottom:1px solid rgba(37,99,235,.12)">
  <div style="max-width:900px;margin:0 auto;padding:0 1.5rem;text-align:center">
    <span class="label">What "independent" actually means for you</span>
    <h2 class="sec-h" style="margin:.875rem auto 1.5rem">We are not tied to any brand</h2>
    <p style="font-size:1.05rem;color:rgba(255,255,255,.65);line-height:1.8;margin-bottom:2.5rem">Most security websites are owned by the company trying to sell you a system, so their advice always points back to their own product. Our recommendations are not tied to a single brand. That means we can tell you when a basic setup is enough, when professional monitoring is worth it, and when you may not need a new system at all.</p>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:1rem">
      <?php foreach([
        ['i'=>'fa-scale-balanced','c'=>'#60A5FA','t'=>'Unbiased Guidance'],
        ['i'=>'fa-circle-dollar-to-slot','c'=>'#6EE7B7','t'=>'Free Consultation'],
        ['i'=>'fa-user-tie','c'=>'#A78BFA','t'=>'One Point of Contact'],
        ['i'=>'fa-star-half-stroke','c'=>'#FCD34D','t'=>'Vetted Providers Only'],
      ] as $f): ?>
      <div style="background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.07);border-radius:16px;padding:1.5rem;text-align:center">
        <div style="width:44px;height:44px;border-radius:12px;background:<?= $f['c'] ?>18;color:<?= $f['c'] ?>;display:flex;align-items:center;justify-content:center;font-size:1.1rem;margin:0 auto .875rem"><i class="fas <?= $f['i'] ?>"></i></div>
        <div style="font-weight:600;font-size:.9rem"><?= $f['t'] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- HONEST STATS -->
<section style="padding:7rem 0">
  <div style="max-width:1100px;margin:0 auto;padding:0 1.5rem">
    <div class="sec-header" style="text-align:left;margin-left:0;padding:0;margin-bottom:3rem">
      <span class="label">Honest numbers, not scare tactics</span>
      <h2 class="sec-h" style="text-align:left">A clear look at home security in the US today</h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem">
      <?php foreach([
        ['stat'=>'229','unit'=>'per 100k','title'=>'Burglary rate in 2024','desc'=>'According to FBI Crime Data, the national burglary rate is at one of its lowest levels on record — not "every few seconds" like some ads claim.','c'=>'#60A5FA'],
        ['stat'=>'$2,600+','unit'=>'avg loss','title'=>'Financial hit per burglary','desc'=>'The FBI estimates the average loss per burglary exceeds $2,600 — before accounting for the stress and sense of violated safety.','c'=>'#FCA5A5'],
        ['stat'=>'83%','unit'=>'','title'=>'Would check for alarm first','desc'=>'In a UNC Charlotte study of 422 incarcerated burglars, 83% said they would try to find out whether a home had an alarm before attempting entry.','c'=>'#6EE7B7'],
        ['stat'=>'60%','unit'=>'','title'=>'Would move to different target','desc'=>'Roughly 60% of burglars said they would move on if they found a security system — confirming visible security genuinely deters crime.','c'=>'#A78BFA'],
      ] as $s): ?>
      <div class="feat-card">
        <div style="font-size:2.5rem;font-weight:900;color:<?= $s['c'] ?>;line-height:1;margin-bottom:.25rem"><?= $s['stat'] ?><span style="font-size:1rem;opacity:.7"> <?= $s['unit'] ?></span></div>
        <div style="font-weight:700;margin-bottom:.625rem"><?= $s['title'] ?></div>
        <p class="feat-desc"><?= $s['desc'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <p style="font-size:.75rem;color:rgba(255,255,255,.3);margin-top:1.5rem;padding:0 .25rem">Sources: FBI Crime Data Explorer / Uniform Crime Reporting; University of North Carolina at Charlotte, "Through the Eyes of a Burglar" (2013)</p>
  </div>
</section>

<!-- HOW WORKING WITH BROCUS IS DIFFERENT -->
<section style="padding:7rem 0;background:linear-gradient(180deg,#06080F,#0A0E20 50%,#06080F)">
  <div class="sec-header">
    <span class="label">Our Process</span>
    <h2 class="sec-h">How working with Brocus is different</h2>
  </div>
  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:2rem;max-width:1000px;margin:0 auto;padding:0 1.5rem">
    <?php foreach([
      ['n'=>'First','i'=>'fa-ear-listen','c'=>'#60A5FA','t'=>'We listen','d'=>'You tell us about your home over a quick call or message. Size, layout, whether you rent or own, what worries you most. No quiz designed to upsell you.'],
      ['n'=>'Then','i'=>'fa-lightbulb','c'=>'#A78BFA','t'=>'We explain your options','d'=>'Monitored or self-monitored. Cameras, sensors, smart locks, or a full system. Contract or month to month. You leave the call understanding your choices — even if you decide to wait.'],
      ['n'=>'Finally','i'=>'fa-handshake','c'=>'#6EE7B7','t'=>'We connect you with the right provider','d'=>'When you are ready, we match you with a vetted third-party provider who supplies the equipment, handles installation, and provides ongoing service.'],
    ] as $s): ?>
    <div class="feat-card">
      <div style="font-size:.68rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:<?= $s['c'] ?>;margin-bottom:.875rem"><?= $s['n'] ?></div>
      <div style="width:46px;height:46px;border-radius:13px;background:<?= $s['c'] ?>18;color:<?= $s['c'] ?>;display:flex;align-items:center;justify-content:center;font-size:1.1rem;margin-bottom:1.25rem"><i class="fas <?= $s['i'] ?>"></i></div>
      <h3 style="font-size:1.05rem;font-weight:700;margin-bottom:.625rem"><?= $s['t'] ?></h3>
      <p style="font-size:.88rem;color:rgba(255,255,255,.6);line-height:1.75"><?= $s['d'] ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- WHAT WE HELP YOU FIGURE OUT -->
<section style="padding:7rem 0">
  <div style="max-width:1100px;margin:0 auto;padding:0 1.5rem;display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:start">
    <div>
      <span class="label">What we help you figure out</span>
      <h2 style="font-family:var(--font-display);font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;margin:.875rem 0 2rem;line-height:1.25">The questions that actually matter</h2>
      <?php foreach([
        ['t'=>'Whether you need professional monitoring at all','d'=>'For some homes, self-monitoring through an app is plenty. For others, a monitored system that can dispatch help is worth every dollar. We help you tell the difference.'],
        ['t'=>'The right equipment for your home type','d'=>'A studio apartment, a three-bedroom house, and a large multi-story home all need different coverage. We help you avoid both under-protecting and overspending.'],
        ['t'=>'Contracts and the fine print','d'=>'Long-term agreements, financing, cancellation terms, and equipment ownership all affect what you really pay. We point out the questions to ask before you sign anything.'],
        ['t'=>'Renter-friendly options','d'=>'If you lease, you have choices that leave no damage and move with you. We cover those too.'],
      ] as $item): ?>
      <div style="border-bottom:1px solid rgba(255,255,255,.06);padding:1.25rem 0">
        <div style="font-weight:600;margin-bottom:.375rem;display:flex;align-items:center;gap:.625rem">
          <i class="fas fa-circle-check" style="color:#6EE7B7;font-size:.7rem;flex-shrink:0"></i><?= $item['t'] ?>
        </div>
        <p style="font-size:.875rem;color:rgba(255,255,255,.55);line-height:1.7;padding-left:1.375rem"><?= $item['d'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <div>
      <div style="background:rgba(245,158,11,.06);border:1px solid rgba(245,158,11,.15);border-radius:20px;padding:2rem;margin-bottom:1.5rem">
        <div style="display:flex;align-items:center;gap:.75rem;margin-bottom:1rem">
          <div style="width:36px;height:36px;border-radius:10px;background:rgba(245,158,11,.15);color:#FCD34D;display:flex;align-items:center;justify-content:center;font-size:.9rem"><i class="fas fa-triangle-exclamation"></i></div>
          <span style="font-weight:700;font-size:.95rem">When home security may not be the right call</span>
        </div>
        <p style="font-size:.875rem;color:rgba(255,255,255,.6);line-height:1.75;margin-bottom:1rem">We would rather lose a referral than give you bad advice. There are real situations where you should pause:</p>
        <?php foreach([
          'If your building already provides robust security, a second system may be redundant.',
          'If your main concern is one entry point, a small targeted device may solve it for far less.',
          'If your budget is tight this month, we will tell you which low-cost habits give you the most protection now.',
        ] as $w): ?>
        <div style="display:flex;align-items:flex-start;gap:.625rem;margin-bottom:.625rem;font-size:.85rem;color:rgba(255,255,255,.6)">
          <i class="fas fa-minus" style="color:rgba(245,158,11,.5);font-size:.6rem;margin-top:.35rem;flex-shrink:0"></i><?= $w ?>
        </div>
        <?php endforeach; ?>
      </div>
      <div style="background:rgba(16,185,129,.06);border:1px solid rgba(16,185,129,.15);border-radius:16px;padding:1.5rem">
        <p style="font-size:.875rem;color:rgba(255,255,255,.65);line-height:1.7;margin:0"><em>"Honest guidance like this is exactly why people call us instead of a salesperson."</em></p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section style="padding:9rem 0;background-color:#0B0F19;background-image:radial-gradient(rgba(255,255,255,.05) 1.5px, transparent 1.5px);background-size:32px 32px;position:relative;border-top:1px solid rgba(255,255,255,.05);overflow:hidden;">

  <!-- Ambient glow to make the grid pop -->
  <div style="position:absolute;top:0;left:50%;transform:translateX(-50%);width:1000px;height:500px;background:radial-gradient(ellipse,rgba(124,58,237,.15),transparent 70%);pointer-events:none;"></div>

  <div class="faq-grid" style="max-width:1200px;margin:0 auto;padding:0 1.5rem;display:grid;grid-template-columns:1fr 1.5fr;gap:5rem;position:relative;z-index:1;">
    
    <!-- Left Column -->
    <div>
      <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.5rem 1.25rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:#C4B5FD;background:rgba(124,58,237,.1);border:1px solid rgba(124,58,237,.2);margin-bottom:1.5rem;">
        FAQ
      </span>
      <h2 style="font-family:var(--font);font-size:clamp(2.5rem,4vw,3.5rem);font-weight:800;color:#fff;letter-spacing:-.03em;line-height:1.15;margin-bottom:1.5rem;">Frequently asked <span style="background:linear-gradient(135deg,#A78BFA,#C4B5FD);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">questions</span></h2>
      <p style="font-size:1.15rem;color:rgba(255,255,255,.65);line-height:1.75;margin-bottom:2.5rem;font-weight:400;font-family:var(--font-p, 'Inter', sans-serif);">Still have questions about how our independent service works? Our advisors are always happy to help you get the answers you need.</p>
      
      <a href="tel:<?= PHONE_TEL ?>" class="btn btn-outline" style="border-color:rgba(255,255,255,.2);color:#fff;display:inline-flex;align-items:center;gap:.75rem;border-radius:12px;padding:.875rem 1.5rem;transition:all .3s ease;" onmouseover="this.style.background='rgba(255,255,255,.05)';" onmouseout="this.style.background='transparent';">
        <i class="fas fa-phone-flip" style="font-size:.9rem;color:#A78BFA;"></i> <?= PHONE_DISPLAY ?>
      </a>
    </div>
    
    <!-- Right Column (Accordion) -->
    <div style="display:flex;flex-direction:column;gap:1rem;">
      <?php foreach([
        ['q'=>'Does Brocus install the security system?','a'=>'No. We are an independent advisory and referral service. We help you choose the right setup and then connect you with a vetted third-party provider who supplies, installs, and services it.'],
        ['q'=>'Is the consultation really free?','a'=>'Yes. Speaking with one of our advisors costs you nothing, and there is no obligation to move forward.'],
        ['q'=>'Do you only recommend one brand?','a'=>'No. Because we are independent, we are free to recommend what genuinely fits your home rather than a single product line.'],
        ['q'=>'What if I am not sure I even need a system?','a'=>'That is one of the best reasons to call. We will give you an honest answer, even if the answer is that you do not need a full system right now.'],
        ['q'=>'Which areas do you cover?','a'=>'We help homeowners across the United States and match you with providers who serve your location.'],
      ] as $i=>$faq): ?>
        <div class="faq-item" id="hs-faq-<?= $i ?>" style="background:rgba(255,255,255,.02);border:1px solid rgba(255,255,255,.08);border-radius:24px;padding:1.75rem 2.25rem;cursor:pointer;transition:all .3s ease;" onclick="toggleFaq2(<?= $i ?>)" onmouseover="this.style.background='rgba(255,255,255,.04)';this.style.borderColor='rgba(124,58,237,.3)';" onmouseout="this.style.background='rgba(255,255,255,.02)';this.style.borderColor='rgba(255,255,255,.08)';">
          <div class="faq-q" style="display:flex;justify-content:space-between;align-items:center;color:#F8FAFC;font-family:var(--font);font-weight:700;font-size:1.15rem;letter-spacing:-.01em;">
            <span style="padding-right:1.5rem;line-height:1.4;"><?= $faq['q'] ?></span>
            <div class="faq-icon" style="width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.05);display:flex;align-items:center;justify-content:center;color:#A78BFA;transition:all .3s ease;flex-shrink:0;"><i class="fas fa-plus" style="font-size:.9rem;"></i></div>
          </div>
          <div class="faq-a" style="color:rgba(255,255,255,.65);font-size:1.05rem;line-height:1.75;font-weight:400;font-family:var(--font-p, 'Inter', sans-serif);">
            <div style="padding-top:1.25rem;border-top:1px solid rgba(255,255,255,.08);margin-top:1.25rem;">
              <?= $faq['a'] ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ FINAL CTA ═══ -->
<section id="cta-banner" style="padding:9rem 0;background-color:#050508;position:relative;overflow:hidden;">
  <div style="max-width:1200px;margin:0 auto;padding:0 1.5rem;position:relative;z-index:1;">
    
    <div style="position:relative;background:linear-gradient(135deg,rgba(30,11,62,.8) 0%,rgba(13,21,71,.8) 100%);border-radius:32px;padding:6rem 3rem;text-align:center;overflow:hidden;border:1px solid rgba(124,58,237,.3);box-shadow:0 30px 60px rgba(0,0,0,.5);backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);">
      
      <!-- Glowing Orbs inside the card -->
      <div style="position:absolute;top:-20%;left:-10%;width:400px;height:400px;background:radial-gradient(circle,rgba(124,58,237,.4),transparent 70%);border-radius:50%;filter:blur(60px);pointer-events:none;"></div>
      <div style="position:absolute;bottom:-20%;right:-10%;width:400px;height:400px;background:radial-gradient(circle,rgba(59,130,246,.3),transparent 70%);border-radius:50%;filter:blur(60px);pointer-events:none;"></div>

      <div style="position:relative;z-index:2;max-width:700px;margin:0 auto;">
        <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.4rem 1.25rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:#C4B5FD;background:rgba(196,181,253,.1);border:1px solid rgba(196,181,253,.25);margin-bottom:2rem;">
          <span style="width:6px;height:6px;border-radius:50%;background:#A78BFA;display:inline-block;animation:pulseDot 2s infinite;box-shadow:0 0 8px #A78BFA;"></span>
          Ready for straight answers?
        </span>
        
        <h2 style="font-family:var(--font);font-size:clamp(2.5rem,5vw,4rem);font-weight:800;color:#fff;letter-spacing:-.03em;line-height:1.1;margin-bottom:1.5rem;">Skip the sales pitch.<br><span style="background:linear-gradient(135deg,#A78BFA,#60A5FA);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Get advice built around your home.</span></h2>
        
        <p style="font-size:1.2rem;color:rgba(255,255,255,.75);margin-bottom:3.5rem;line-height:1.75;font-family:var(--font-p, 'Inter', sans-serif);font-weight:400;">Advice that is built around your home, your budget, and what actually keeps your family safe.</p>
        
        <div style="display:flex;flex-wrap:wrap;gap:1.25rem;justify-content:center;align-items:center;">
          <a href="tel:<?= PHONE_TEL ?>" class="btn btn-primary btn-lg" style="background:linear-gradient(135deg,#7C3AED,#4F46E5);border:none;box-shadow:0 16px 40px rgba(124,58,237,.35);border-radius:16px;padding:1.15rem 2.25rem;font-size:1.1rem;display:inline-flex;gap:1rem;align-items:center;transition:all .3s ease;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 20px 50px rgba(124,58,237,.5)';" onmouseout="this.style.transform='none';this.style.boxShadow='0 16px 40px rgba(124,58,237,.35)';">
            <div style="width:34px;height:34px;border-radius:50%;background:rgba(255,255,255,.2);display:flex;align-items:center;justify-content:center;"><i class="fas fa-phone-flip" style="font-size:.85rem"></i></div>
            Call now: <?= PHONE_DISPLAY ?>
          </a>
          <a href="contact.php" class="btn btn-outline btn-lg" style="border-radius:16px;padding:1.15rem 2.25rem;font-size:1.1rem;background:rgba(255,255,255,.05);border-color:rgba(255,255,255,.15);color:#fff;display:inline-flex;gap:1rem;align-items:center;transition:all .3s ease;" onmouseover="this.style.background='rgba(255,255,255,.1)';this.style.borderColor='rgba(255,255,255,.3)';" onmouseout="this.style.background='rgba(255,255,255,.05)';this.style.borderColor='rgba(255,255,255,.15)';">
            Get free advice <i class="fas fa-arrow-right" style="font-size:.9rem;color:#A78BFA;"></i>
          </a>
        </div>
        
        <div style="margin-top:3.5rem;display:flex;justify-content:center;align-items:center;gap:1.5rem;flex-wrap:wrap;">
          <span style="display:inline-flex;align-items:center;gap:.6rem;font-size:.95rem;color:rgba(255,255,255,.6);font-family:var(--font-p, 'Inter', sans-serif);"><i class="fas fa-check" style="color:#059669;font-size:.8rem;"></i> Free consultation</span>
          <span style="width:4px;height:4px;border-radius:50%;background:rgba(255,255,255,.2);"></span>
          <span style="display:inline-flex;align-items:center;gap:.6rem;font-size:.95rem;color:rgba(255,255,255,.6);font-family:var(--font-p, 'Inter', sans-serif);"><i class="fas fa-check" style="color:#059669;font-size:.8rem;"></i> No obligation</span>
          <span style="width:4px;height:4px;border-radius:50%;background:rgba(255,255,255,.2);"></span>
          <span style="display:inline-flex;align-items:center;gap:.6rem;font-size:.95rem;color:rgba(255,255,255,.6);font-family:var(--font-p, 'Inter', sans-serif);"><i class="fas fa-check" style="color:#059669;font-size:.8rem;"></i> US-based advisors</span>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .faq-grid { grid-template-columns: 1fr 1.5fr; }

  .faq-item.open {
    background: rgba(255,255,255,.04) !important;
    border-color: rgba(124,58,237,.4) !important;
  }

  .faq-item.open .faq-icon {
    background: rgba(124, 58, 237, .2) !important;
    color: #C4B5FD !important;
    transform: rotate(45deg);
  }

  .faq-a {
    display: none;
  }

  .faq-item.open .faq-a {
    display: block;
    animation: fadeIn .4s cubic-bezier(0.4, 0, 0.2, 1) forwards;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(-5px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @media(max-width:900px) {
    .faq-grid {
      grid-template-columns: 1fr !important;
      gap: 3rem !important;
    }
  }
</style>
<script>function toggleFaq2(i){document.getElementById('hs-faq-'+i).classList.toggle('open');}</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
