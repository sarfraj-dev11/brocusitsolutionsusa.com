<?php
require_once __DIR__ . '/includes/bootstrap.php';
$page_title = 'Independent Advisors for US Households | Brocus IT Solutions';
$page_desc  = 'Brocus IT Solutions helps US households make confident home decisions with free, independent, no-pressure advice, then connects you with vetted providers. Starting with home security. Call today.';
require_once __DIR__ . '/includes/head.php';
?>
<?php include __DIR__ . '/includes/header.php'; ?>


<!-- ═══ HERO ═══ -->
<style>
  .hero-sec {
    min-height: 100svh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: radial-gradient(ellipse 80% 80% at 50% -20%, #3b96ff 0%, #5746c6 45%, #110c28 100%);
    position: relative;
    overflow: hidden;
    padding: 0;
    margin-top: -140px;
  }

  .hero-split-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    max-width: 1280px;
    width: 100%;
    margin: 0 auto;
    padding: 13rem 1.5rem 5rem;
    gap: 4rem;
    align-items: center;
    position: relative;
    z-index: 2;
  }

  .hero-left-content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  .hero-top-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.4rem 1rem;
    background: rgba(255, 255, 255, .05);
    border: 1px solid rgba(255, 255, 255, .15);
    border-radius: 8px;
    font-size: 0.8rem;
    font-weight: 500;
    color: #fff;
    margin-bottom: 1.5rem;
    animation: fadeUp .6s .05s both;
  }

  .hero-top-pill i {
    color: #8B5CF6;
  }

  .hero-main-h1 {
    font-family: var(--font-display);
    font-size: clamp(3rem, 5vw, 4.5rem);
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: -0.03em;
    margin: 0 0 1.25rem;
    color: #fff;
    animation: fadeUp .7s .15s both;
  }

  .hero-main-sub {
    font-size: clamp(1.05rem, 1.5vw, 1.2rem);
    color: rgba(255, 255, 255, .8);
    line-height: 1.6;
    max-width: 500px;
    margin-bottom: 2.5rem;
    animation: fadeUp .7s .25s both;
  }

  .hero-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-bottom: 3rem;
    animation: fadeUp .7s .35s both;
  }

  .hero-stats-row {
    display: flex;
    gap: 4rem;
    animation: fadeUp .7s .45s both;
  }

  .hero-stat-block {
    display: flex;
    flex-direction: column;
  }

  .hero-stat-num {
    font-family: var(--font-display);
    font-size: 3rem;
    font-weight: 700;
    line-height: 1;
    margin-bottom: 0.5rem;
    color: #fff;
  }

  .hero-stat-label {
    font-size: 0.85rem;
    color: rgba(255, 255, 255, .6);
    position: relative;
    padding-bottom: 0.75rem;
  }

  .hero-stat-label::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, #8B5CF6, transparent);
    border-radius: 2px;
  }

  .hero-right-image {
    position: relative;
    width: 100%;
    height: 100%;
    min-height: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: fadeUp .8s .35s both;
  }

  .hero-img-cutout {
    width: 100%;
    height: 650px;
    object-fit: cover;
    border-radius: 24px;
    mask-image: radial-gradient(ellipse at center, black 60%, transparent 100%);
    -webkit-mask-image: radial-gradient(ellipse at center, black 60%, transparent 100%);
    border: 1px solid rgba(255, 255, 255, .1);
    box-shadow: 0 32px 80px rgba(0, 0, 0, .4);
  }

  .floating-stars-pill {
    position: absolute;
    bottom: 20%;
    left: -10%;
    background: #fff;
    padding: 0.75rem 1.5rem;
    border-radius: 999px;
    display: flex;
    gap: 0.4rem;
    box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
    z-index: 5;
    animation: fadeUp .8s .65s both;
  }

  .floating-stars-pill i {
    color: #8B5CF6;
    font-size: 1.1rem;
  }

  @media (max-width: 900px) {
    .hero-sec {
      margin-top: -100px;
    }

    .hero-split-grid {
      grid-template-columns: 1fr;
      text-align: center;
      padding-top: 9rem;
      padding-bottom: 4rem;
      gap: 2.5rem;
    }

    .hero-left-content {
      align-items: center;
    }

    .hero-buttons {
      justify-content: center;
      gap: .875rem;
    }

    .hero-stats-row {
      justify-content: center;
      gap: 2.5rem;
    }

    .hero-img-cutout {
      height: 320px;
    }

    .hero-right-image {
      min-height: auto;
    }

    .floating-stars-pill {
      left: 50%;
      transform: translateX(-50%);
      bottom: 5%;
    }
  }

  @media (max-width: 600px) {
    .hero-split-grid {
      padding-top: 8rem;
      padding-bottom: 3rem;
    }

    .hero-main-h1 {
      font-size: clamp(2.2rem, 8vw, 3rem);
    }

    .hero-main-sub {
      font-size: .98rem;
    }

    .hero-right-image {
      display: none;
    }

    .hero-stats-row {
      gap: 2rem;
    }

    .hero-stat-num {
      font-size: 2.25rem;
    }

    .hero-buttons .btn {
      padding: .75rem 1.5rem !important;
      font-size: .95rem !important;
      border-radius: 10px !important;
    }
  }
</style>

<section id="hero" class="hero-sec">
  <div style="position:absolute;top:0;right:0;width:60%;height:100%;background:radial-gradient(ellipse 70% 80% at 80% 40%,rgba(255,255,255,.15),transparent 70%);pointer-events:none"></div>
  <div style="position:absolute;bottom:0;left:0;width:40%;height:60%;background:radial-gradient(ellipse 60% 60% at 20% 80%,rgba(255,255,255,.08),transparent 70%);pointer-events:none"></div>

  <div class="hero-split-grid">
    <!-- Left Column: Content -->
    <div class="hero-left-content">
      <div class="hero-top-pill">
        <i class="fas fa-shield-check"></i> INDEPENDENT ADVISORS FOR US HOUSEHOLDS
      </div>

      <h1 class="hero-main-h1">
        Big Home Decisions,<br>
        <span style="color: #A78BFA;">Made Simple</span><br>
        and Honest
      </h1>

      <p class="hero-main-sub">
        Brocus helps people across the United States make confident choices about their home, without the sales pressure. We are independent, we explain your real options in plain language, and we connect you with vetted providers who do the work. Right now we are helping families choose the right home security.
      </p>

      <div class="hero-buttons">
        <a href="tel:+18889584443" class="btn btn-lg" style="background:#8B5CF6;color:#fff;border-radius:10px;font-weight:600;box-shadow:0 8px 24px rgba(139,92,246,.4);white-space:nowrap;">
          <i class="fas fa-phone-flip" style="font-size:.85rem"></i> Call now: (888) 958-4443
        </a>
        <a href="contact.php" class="btn btn-lg" style="background:rgba(255,255,255,.1);color:#fff;border:1.5px solid rgba(255,255,255,.35);border-radius:10px;white-space:nowrap;backdrop-filter:blur(8px);">
          Get free advice
        </a>
      </div>

      <div class="hero-stats-row">
        <div class="hero-stat-block">
          <div class="hero-stat-num">83%</div>
          <div class="hero-stat-label">Deterrence Rate</div>
        </div>
        <div class="hero-stat-block">
          <div class="hero-stat-num">100k+</div>
          <div class="hero-stat-label">Homes Protected</div>
        </div>
      </div>
    </div>

    <!-- Right Column: Image -->
    <div class="hero-right-image">
      <img src="<?= asset('images/hero-house.jpg') ?>" alt="Modern Home Security" class="hero-img-cutout">

      <div class="floating-stars-pill">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
    </div>
  </div>
</section>

<!-- ═══ WHAT WE DO ═══ -->
<section style="padding:7rem 0;background:linear-gradient(160deg,#fdfcff 0%,#f5f0ff 50%,#eff6ff 100%);position:relative;overflow:hidden;">
  <!-- Subtle decorative blob -->
  <div style="position:absolute;top:-120px;right:-120px;width:500px;height:500px;border-radius:50%;background:radial-gradient(circle,#f0ebff 0%,transparent 70%);pointer-events:none;"></div>
  <div style="position:absolute;bottom:-80px;left:-80px;width:360px;height:360px;border-radius:50%;background:radial-gradient(circle,#ebf5ff 0%,transparent 70%);pointer-events:none;"></div>

  <div style="max-width:1200px;margin:0 auto;padding:0 1.5rem;position:relative;z-index:1;">

    <!-- Top label -->
    <div style="text-align:center;margin-bottom:4rem;">
      <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.4rem 1rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#5B21B6;background:rgba(124,58,237,.08);border:1px solid rgba(124,58,237,.2);">
        <span style="width:6px;height:6px;border-radius:50%;background:#7C3AED;display:inline-block;box-shadow:0 0 8px #7C3AED;"></span>
        One honest place to start
      </span>
    </div>

    <!-- New Layout with Image -->
    <div style="max-width:800px;margin:0 auto 4rem;text-align:center;">
      <h2 style="font-family:var(--font);font-size:clamp(2.5rem,5vw,3.75rem);font-weight:800;line-height:1.1;letter-spacing:-.03em;color:#0D0D1A;margin:0;">
        Most home advice is sold.<br>
        <span style="background:linear-gradient(135deg,#6D28D9,#4F46E5);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Ours is free.</span>
      </h2>
    </div>

    <!-- Image & Content Split -->
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(min(100%,400px),1fr));gap:5rem;align-items:center;">

      <!-- Left: Beautiful Image -->
      <div style="position:relative;padding-right:1rem;">
        <div style="position:absolute;top:-20px;left:-20px;width:100%;height:100%;background:linear-gradient(135deg,#E8D7FF,#BFDBFE);border-radius:32px;z-index:0;transform:rotate(-3deg);"></div>
        <img src="<?= asset('images/advisor_lifestyle.png') ?>" alt="Friendly Advisor" style="position:relative;z-index:1;width:100%;height:auto;border-radius:32px;box-shadow:0 24px 60px rgba(0,0,0,.15);object-fit:cover;aspect-ratio:4/5;">

        <!-- Floating badge -->
        <div style="position:absolute;bottom:30px;right:-10px;background:#fff;padding:1.25rem 1.5rem;border-radius:20px;box-shadow:0 20px 40px rgba(0,0,0,.1);z-index:2;display:flex;align-items:center;gap:1rem;">
          <div style="width:48px;height:48px;border-radius:50%;background:#F0FDF4;display:flex;align-items:center;justify-content:center;color:#16A34A;font-size:1.25rem;">
            <i class="fas fa-check-circle"></i>
          </div>
          <div>
            <div style="font-family:var(--font);font-weight:800;font-size:1.25rem;color:#111827;line-height:1;">100%</div>
            <div style="font-size:.85rem;color:#6B7280;font-weight:500;">Free & Independent</div>
          </div>
        </div>
      </div>

      <!-- Right: Text & Features -->
      <div>
        <p style="font-size:1.15rem;color:#374151;line-height:1.8;margin:0 0 3rem;font-weight:400;">
          Most home services are sold by the companies that profit from the sale, so the advice always points back to their product. Brocus is different. We are an independent advisory service. We do not sell or install anything ourselves. We listen to what you need, walk you through your choices, and match you with a trusted provider. The advice is free and there is never any pressure to buy.
        </p>

        <!-- Feature List inline -->
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:2.5rem 1.5rem;">
          <?php foreach (
            [
              ['i' => 'fa-shield-halved', 'c' => '#7C3AED', 'bg' => 'rgba(124,58,237,.1)', 't' => 'Truly Independent', 'd' => 'Not tied to any brand.'],
              ['i' => 'fa-hand-holding-heart', 'c' => '#059669', 'bg' => 'rgba(5,150,105,.1)', 't' => 'Always Free', 'd' => 'Costs you nothing.'],
              ['i' => 'fa-comments', 'c' => '#2563EB', 'bg' => 'rgba(37,99,235,.1)', 't' => 'Plain Language', 'd' => 'No jargon or scripts.'],
              ['i' => 'fa-user-check', 'c' => '#D97706', 'bg' => 'rgba(217,119,6,.1)', 't' => 'Vetted Providers', 'd' => 'We check everyone.'],
            ] as $f
          ): ?>
            <div style="display:flex;gap:1rem;align-items:flex-start;">
              <div style="width:48px;height:48px;border-radius:14px;background:<?= $f['bg'] ?>;display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:<?= $f['c'] ?>;flex-shrink:0;">
                <i class="fas <?= $f['i'] ?>"></i>
              </div>
              <div>
                <h3 style="font-family:var(--font);font-size:1.05rem;font-weight:700;color:#111827;margin:0 0 .25rem;letter-spacing:-0.01em;"><?= $f['t'] ?></h3>
                <p style="font-size:.95rem;color:#6B7280;line-height:1.5;margin:0;"><?= $f['d'] ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- ═══ SERVICES SHOWCASE (Premium) ═══ -->
<section id="services" style="padding:8rem 0;background:linear-gradient(135deg,#050508 0%,#0f0b20 50%,#050508 100%);position:relative;overflow:hidden;">
  <!-- Ambient background glows -->
  <div style="position:absolute;top:-200px;right:-100px;width:700px;height:700px;border-radius:50%;background:radial-gradient(circle,rgba(124,58,237,.15),transparent 70%);pointer-events:none;filter:blur(60px);"></div>
  <div style="position:absolute;bottom:-150px;left:-150px;width:500px;height:500px;border-radius:50%;background:radial-gradient(circle,rgba(59,130,246,.12),transparent 70%);pointer-events:none;filter:blur(60px);"></div>

  <div style="max-width:1100px;margin:0 auto;padding:0 1.5rem;position:relative;z-index:1;">

    <!-- Section Header -->
    <div style="text-align:center;margin-bottom:5rem;">
      <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.4rem 1.25rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:#C4B5FD;background:rgba(196,181,253,.08);border:1px solid rgba(196,181,253,.2);">
        <span style="width:6px;height:6px;border-radius:50%;background:#8B5CF6;display:inline-block;box-shadow:0 0 10px #8B5CF6;"></span>
        What we can help you with
      </span>
      <h2 style="font-family:var(--font);font-size:clamp(2.5rem,5vw,3.75rem);font-weight:800;color:#fff;letter-spacing:-.03em;margin:1.5rem 0 1rem;">Available right now</h2>
      <p style="font-size:1.15rem;color:rgba(255,255,255,.6);line-height:1.7;max-width:600px;margin:0 auto;font-weight:400;">More services are planned. Right now we specialize in protecting homes and families across the United States.</p>
    </div>

    <!-- Premium Horizontal Service Showcase -->
    <div style="background:rgba(15,10,30,.6);border-radius:32px;overflow:hidden;box-shadow:0 32px 80px rgba(0,0,0,.5);border:1px solid rgba(124,58,237,.25);backdrop-filter:blur(32px);-webkit-backdrop-filter:blur(32px);display:grid;grid-template-columns:repeat(auto-fit,minmax(min(100%,450px),1fr));position:relative;z-index:2;">

      <!-- Left: Image Box -->
      <div style="position:relative;min-height:350px;">
        <img src="<?= asset('images/hero-house.jpg') ?>" alt="Home Security" style="position:absolute;width:100%;height:100%;object-fit:cover;display:block;opacity:.85;">
        <!-- Gradient Overlays to blend image into background smoothly -->
        <div style="position:absolute;inset:0;background:linear-gradient(to bottom,transparent 40%,rgba(15,10,30,1) 100%);"></div>
        <div style="position:absolute;inset:0;background:linear-gradient(to right,transparent 40%,rgba(15,10,30,1) 100%);"></div>

        <!-- Glowing Badge -->
        <div style="position:absolute;top:2.5rem;left:2.5rem;background:rgba(124,58,237,.2);border:1px solid rgba(124,58,237,.4);color:#C4B5FD;font-size:.75rem;font-weight:700;padding:6px 14px;border-radius:999px;display:flex;align-items:center;gap:8px;backdrop-filter:blur(12px);">
          <span style="width:6px;height:6px;border-radius:50%;background:#A78BFA;display:inline-block;animation:pulseDot 2s infinite;box-shadow:0 0 8px #A78BFA;"></span>
          Available Now
        </div>
      </div>

      <!-- Right: Content Box -->
      <div style="padding:4rem 3.5rem;display:flex;flex-direction:column;justify-content:center;background:rgba(15,10,30,.8);">

        <div style="display:flex;align-items:center;gap:1.5rem;margin-bottom:1.5rem;">
          <div style="width:64px;height:64px;border-radius:20px;background:linear-gradient(135deg,rgba(124,58,237,.15),rgba(59,130,246,.15));border:1px solid rgba(124,58,237,.3);display:flex;align-items:center;justify-content:center;font-size:1.75rem;color:#C4B5FD;flex-shrink:0;">
            <i class="fas fa-shield-halved"></i>
          </div>
          <div>
            <h3 style="font-family:var(--font);font-weight:800;font-size:2rem;color:#fff;margin:0 0 .35rem;letter-spacing:-.02em;">Home Security</h3>
            <div style="font-size:.85rem;color:#A78BFA;font-weight:700;text-transform:uppercase;letter-spacing:.1em;">Independent Advisory</div>
          </div>
        </div>

        <p style="font-size:1.1rem;color:rgba(255,255,255,.7);line-height:1.8;margin:0 0 2rem;font-weight:400;">
          Independent guidance on alarms, cameras, smart locks, and 24/7 monitoring — matched precisely to your home and budget, with absolutely zero sales pressure.
        </p>

        <ul style="list-style:none;padding:0;margin:0 0 2.5rem;display:flex;flex-direction:column;gap:.875rem;">
          <li style="display:flex;align-items:center;gap:1rem;color:rgba(255,255,255,.85);font-size:1.05rem;font-weight:500;">
            <div style="width:24px;height:24px;border-radius:50%;background:rgba(124,58,237,.25);color:#A78BFA;display:flex;align-items:center;justify-content:center;font-size:.75rem;"><i class="fas fa-check"></i></div>
            Compare top-rated security systems
          </li>
          <li style="display:flex;align-items:center;gap:1rem;color:rgba(255,255,255,.85);font-size:1.05rem;font-weight:500;">
            <div style="width:24px;height:24px;border-radius:50%;background:rgba(124,58,237,.25);color:#A78BFA;display:flex;align-items:center;justify-content:center;font-size:.75rem;"><i class="fas fa-check"></i></div>
            Transparent pricing without hidden fees
          </li>
          <li style="display:flex;align-items:center;gap:1rem;color:rgba(255,255,255,.85);font-size:1.05rem;font-weight:500;">
            <div style="width:24px;height:24px;border-radius:50%;background:rgba(124,58,237,.25);color:#A78BFA;display:flex;align-items:center;justify-content:center;font-size:.75rem;"><i class="fas fa-check"></i></div>
            Setup with fully vetted local installers
          </li>
        </ul>

        <div>
          <a href="<?= url('home-security.php') ?>" class="btn btn-primary btn-lg" style="width:100%;justify-content:center;border-radius:16px;font-size:1.1rem;background:linear-gradient(135deg,#7C3AED,#4F46E5);border:1px solid rgba(139,92,246,.5);box-shadow:0 10px 30px rgba(124,58,237,.3);padding:1.15rem 2rem;">
            Explore Home Security <i class="fas fa-arrow-right" style="margin-left:.5rem;font-size:.9rem;"></i>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══ WHY CHOOSE BROCUS ═══ -->
<section style="padding:9rem 0;background:linear-gradient(180deg,#F8FAFC 0%,#F1F5F9 100%);position:relative;overflow:hidden;">
  <!-- Premium ambient lighting -->
  <div style="position:absolute;top:-10%;right:-5%;width:600px;height:600px;background:radial-gradient(circle,rgba(124,58,237,.06),transparent 70%);border-radius:50%;pointer-events:none;"></div>

  <div style="max-width:1240px;margin:0 auto;padding:0 1.5rem;display:grid;grid-template-columns:repeat(auto-fit,minmax(min(100%,450px),1fr));gap:6rem;align-items:center;position:relative;z-index:1;">

    <!-- Left: Content -->
    <div style="padding-right:1rem;">
      <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.5rem 1.25rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:#6D28D9;background:#F5F3FF;border:1px solid #EDE9FE;margin-bottom:1.5rem;">
        <span style="width:6px;height:6px;border-radius:50%;background:#8B5CF6;display:inline-block;animation:pulseDot 2s infinite;box-shadow:0 0 10px #8B5CF6;"></span>
        The Brocus Advantage
      </span>

      <h2 style="font-family:var(--font);font-size:clamp(2.5rem,4.5vw,3.5rem);font-weight:800;color:#0F172A;letter-spacing:-.03em;line-height:1.15;margin:0 0 2.5rem;">
        Advice you can <span style="background:linear-gradient(135deg,#6D28D9,#4F46E5);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">actually trust.</span>
      </h2>

      <div style="display:flex;flex-direction:column;gap:1.25rem;margin-bottom:3.5rem;">
        <?php foreach (
          [
            ['t' => '100% Independent', 'd' => 'Independent, so we are not tied to any single brand.'],
            ['t' => 'Always Free', 'd' => 'Free, no-pressure consultation with a real person.'],
            ['t' => 'Plain-Language Guidance', 'd' => 'Plain-language guidance instead of sales scripts.'],
            ['t' => 'Dedicated Support', 'd' => 'One point of contact from your first question to your final decision.'],
            ['t' => 'Strictly Vetted', 'd' => 'Providers vetted before we ever recommend them.'],
          ] as $f
        ): ?>
          <div style="display:flex;align-items:center;gap:1.5rem;background:#FFFFFF;padding:1.5rem 2rem;border-radius:24px;border:1px solid #E2E8F0;box-shadow:0 4px 12px rgba(15,23,42,.02);transition:all .4s cubic-bezier(0.4, 0, 0.2, 1);" onmouseover="this.style.borderColor='rgba(124,58,237,.3)';this.style.boxShadow='0 20px 40px rgba(124,58,237,.08)';this.style.transform='translateX(8px)';" onmouseout="this.style.borderColor='#E2E8F0';this.style.boxShadow='0 4px 12px rgba(15,23,42,.02)';this.style.transform='translateX(0)';">
            <div style="width:48px;height:48px;border-radius:50%;background:#F5F3FF;color:#7C3AED;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.2rem;border:1px solid rgba(124,58,237,.15);box-shadow:0 8px 16px rgba(124,58,237,.1);">
              <i class="fas fa-check"></i>
            </div>
            <div>
              <div style="font-family:var(--font);font-weight:800;color:#0F172A;font-size:1.2rem;margin-bottom:.2rem;letter-spacing:-.01em;"><?= $f['t'] ?></div>
              <div style="color:#475569;font-size:1.05rem;line-height:1.4;"><?= $f['d'] ?></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <a href="tel:+18889584443" class="btn btn-primary btn-lg" style="display:inline-flex;align-items:center;gap:1rem;background:linear-gradient(135deg,#7C3AED,#4F46E5);border:none;box-shadow:0 16px 40px rgba(124,58,237,.25);border-radius:20px;padding:1.25rem 2.5rem;font-size:1.15rem;font-weight:700;color:#fff;transition:all .3s;">
        <div style="width:38px;height:38px;border-radius:50%;background:rgba(255,255,255,.2);display:flex;align-items:center;justify-content:center;box-shadow:inset 0 2px 4px rgba(255,255,255,.2);"><i class="fas fa-phone-flip" style="font-size:.9rem;"></i></div>
        Speak to an advisor
      </a>
    </div>

    <!-- Right: Image & Floating Stats -->
    <div style="position:relative;margin-top:2rem;">
      <!-- Main Image -->
      <div style="border-radius:32px;overflow:hidden;box-shadow:0 30px 80px rgba(15,23,42,.12);position:relative;z-index:1;height:650px;">
        <img src="<?= asset('images/advisor.jpg') ?>" alt="Brocus advisor" style="width:100%;height:100%;object-fit:cover;display:block;">
        <div style="position:absolute;inset:0;background:linear-gradient(to top, rgba(15,23,42,0.4), transparent 60%);"></div>
      </div>

      <!-- Floating Glass Panel -->
      <div class="why-stats-panel" style="position:absolute;bottom:-3rem;left:-2rem;right:2rem;background:rgba(255,255,255,.95);backdrop-filter:blur(32px);-webkit-backdrop-filter:blur(32px);border:1px solid rgba(226,232,240,.8);border-radius:24px;padding:2.5rem;box-shadow:0 30px 60px rgba(15,23,42,.08);z-index:2;">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:2.5rem 1.5rem;">

          <div style="display:flex;align-items:center;gap:1.25rem;">
            <div style="width:52px;height:52px;border-radius:16px;background:#F5F3FF;color:#7C3AED;display:flex;align-items:center;justify-content:center;font-size:1.4rem;border:1px solid rgba(124,58,237,.15);"><i class="fas fa-comment-dollar"></i></div>
            <div>
              <div style="font-family:var(--font);font-size:1.3rem;font-weight:800;color:#0F172A;line-height:1.2;margin-bottom:.2rem;">Free</div>
              <div style="font-size:1rem;color:#64748B;font-weight:500;">Consultation</div>
            </div>
          </div>

          <div style="display:flex;align-items:center;gap:1.25rem;">
            <div style="width:52px;height:52px;border-radius:16px;background:#F5F3FF;color:#7C3AED;display:flex;align-items:center;justify-content:center;font-size:1.4rem;border:1px solid rgba(124,58,237,.15);"><i class="fas fa-shield-alt"></i></div>
            <div>
              <div style="font-family:var(--font);font-size:1.3rem;font-weight:800;color:#0F172A;line-height:1.2;margin-bottom:.2rem;">Zero</div>
              <div style="font-size:1rem;color:#64748B;font-weight:500;">Sales Pressure</div>
            </div>
          </div>

          <div style="display:flex;align-items:center;gap:1.25rem;">
            <div style="width:52px;height:52px;border-radius:16px;background:#F5F3FF;color:#7C3AED;display:flex;align-items:center;justify-content:center;font-size:1.4rem;border:1px solid rgba(124,58,237,.15);"><i class="fas fa-flag-usa"></i></div>
            <div>
              <div style="font-family:var(--font);font-size:1.3rem;font-weight:800;color:#0F172A;line-height:1.2;margin-bottom:.2rem;">US Based</div>
              <div style="font-size:1rem;color:#64748B;font-weight:500;">Advisors</div>
            </div>
          </div>

          <div style="display:flex;align-items:center;gap:1.25rem;">
            <div style="width:52px;height:52px;border-radius:16px;background:#F5F3FF;color:#7C3AED;display:flex;align-items:center;justify-content:center;font-size:1.4rem;border:1px solid rgba(124,58,237,.15);"><i class="fas fa-user-check"></i></div>
            <div>
              <div style="font-family:var(--font);font-size:1.3rem;font-weight:800;color:#0F172A;line-height:1.2;margin-bottom:.2rem;">Vetted</div>
              <div style="font-size:1rem;color:#64748B;font-weight:500;">Providers</div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
<style>
  @media(max-width: 900px) {
    .why-stats-panel {
      left: 1rem !important;
      right: 1rem !important;
      bottom: -4rem !important;
      padding: 1.5rem !important;
    }
  }
</style>

<!-- ═══ HOW IT WORKS ═══ -->
<section id="how" style="padding:9rem 0;background:#FFFFFF;position:relative;overflow:hidden;border-top:1px solid #F1F5F9;">
  <!-- Subtle decorative gradients for a premium feel -->
  <div style="font-size:12rem;font-weight:800;color: rgb(75 91 131 / 12%);line-height:1;position:absolute;top:-1.5rem;right:-1.5rem;letter-spacing:-.05em;pointer-events:none;font-family:var(--font);transition:color .4s ease;"></div>

  <div style="max-width:1200px;margin:0 auto;padding:0 1.5rem;position:relative;z-index:1;">
    <div style="text-align:center;margin-bottom:5.5rem;">
      <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.5rem 1.25rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:#6D28D9;background:#F5F3FF;border:1px solid #EDE9FE;">
        <span style="width:6px;height:6px;border-radius:50%;background:#8B5CF6;display:inline-block;animation:pulseDot 2s infinite;box-shadow:0 0 10px #8B5CF6;"></span>
        How We Work
      </span>
      <h2 style="font-family:var(--font);font-size:clamp(2.5rem,4.5vw,3.5rem);font-weight:800;color:#0F172A;letter-spacing:-.03em;margin:1.5rem 0 1.25rem;">Three simple steps</h2>
      <p style="font-size:1.15rem;color:#475569;line-height:1.75;max-width:600px;margin:0 auto;font-weight:400;">Whether you are just curious or ready to decide, we meet you where you are — no quiz designed to upsell you.</p>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:3rem;position:relative;">
      <!-- Elegant connecting line on desktop -->
      <div style="position:absolute;top:5.5rem;left:10%;right:10%;height:2px;background:linear-gradient(to right, transparent, rgba(124,58,237,.25), transparent);z-index:0;"></div>

      <?php foreach (
        [
          ['n' => '01', 'i' => 'fa-comments', 'bg' => 'linear-gradient(135deg,#7C3AED,#4F46E5)', 't' => 'Tell us what you need', 'd' => 'A quick call or message about your home and what you are looking for.'],
          ['n' => '02', 'i' => 'fa-lightbulb', 'bg' => 'linear-gradient(135deg,#6D28D9,#4338CA)', 't' => 'We explain your options', 'd' => 'Clearly, with the pros and cons, so you can decide with confidence.'],
          ['n' => '03', 'i' => 'fa-handshake', 'bg' => 'linear-gradient(135deg,#5B21B6,#3730A3)', 't' => 'We connect you with the right provider', 'd' => 'When you are ready, we match you with a vetted provider who delivers and services it.']
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

<!-- ═══ SPOTLIGHT (Home Security) ═══ -->
<!-- ═══ SPOTLIGHT (Home Security) ═══ -->
<section style="padding:9rem 0;background:linear-gradient(to bottom, #F8FAFC 0%, #FFFFFF 100%);position:relative;overflow:hidden;">
  <!-- Subtle decorative elements -->
  <div style="position:absolute;top:10%;right:-5%;width:600px;height:600px;background:radial-gradient(circle,rgba(124,58,237,.04),transparent 70%);border-radius:50%;pointer-events:none;"></div>
  <div style="position:absolute;bottom:-10%;left:-5%;width:500px;height:500px;background:radial-gradient(circle,rgba(59,130,246,.04),transparent 70%);border-radius:50%;pointer-events:none;"></div>

  <div style="max-width:1240px;margin:0 auto;padding:0 1.5rem;position:relative;z-index:1;">

    <!-- Premium Bento Container -->
    <div style="background:#fff;border-radius:40px;box-shadow:0 40px 100px rgba(15,10,30,.06), 0 10px 30px rgba(15,10,30,.03);border:1px solid rgba(226,232,240,.8);display:grid;grid-template-columns:repeat(auto-fit,minmax(min(100%,500px),1fr));overflow:hidden;">

      <!-- Left: Cinematic Image with Integrated Stats -->
      <div style="position:relative;min-height:550px;">
        <img src="<?= asset('images/hero-house.jpg') ?>" alt="Home security protection" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;">
        <!-- Deep gradient to make text readable and blend edges -->
        <div style="position:absolute;inset:0;background:linear-gradient(to top, rgba(10,5,20,0.9) 0%, rgba(10,5,20,0.4) 40%, transparent 100%);"></div>
        <div style="position:absolute;inset:0;background:linear-gradient(to right, rgba(10,5,20,0.3) 0%, transparent 50%);"></div>

        <!-- Glass Stats Panel (Bento sub-item) -->
        <div style="position:absolute;bottom:2.5rem;left:2.5rem;right:2.5rem;background:rgba(255,255,255,.03);backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);border:1px solid rgba(255,255,255,.1);border-radius:28px;padding:2.5rem;box-shadow:0 30px 60px rgba(0,0,0,.3);">
          <div style="font-size:.7rem;color:#E2E8F0;font-weight:700;letter-spacing:.15em;text-transform:uppercase;margin-bottom:1.75rem;display:flex;align-items:center;gap:.75rem;">
            <div style="width:28px;height:28px;border-radius:50%;background:rgba(124,58,237,.3);display:flex;align-items:center;justify-content:center;color:#E9D5FF;border:1px solid rgba(196,181,253,.2);"><i class="fas fa-university" style="font-size:.7rem;"></i></div>
            UNC Charlotte Study (422 Burglars)
          </div>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:2.5rem;position:relative;">
            <!-- Subtle elegant divider -->
            <div style="position:absolute;top:0;bottom:0;left:50%;width:1px;background:linear-gradient(to bottom,rgba(255,255,255,.05),rgba(255,255,255,.15),rgba(255,255,255,.05));"></div>

            <div style="padding-right:1.5rem;">
              <div style="font-family:var(--font);font-size:3.5rem;font-weight:800;color:#fff;line-height:1;margin-bottom:.5rem;letter-spacing:-.03em;">83<span style="font-size:1.75rem;color:#A78BFA;">%</span></div>
              <div style="font-size:.95rem;color:#CBD5E1;font-weight:400;line-height:1.5;">Check for an alarm system first</div>
            </div>
            <div style="padding-left:1.5rem;">
              <div style="font-family:var(--font);font-size:3.5rem;font-weight:800;color:#fff;line-height:1;margin-bottom:.5rem;letter-spacing:-.03em;">60<span style="font-size:1.75rem;color:#A78BFA;">%</span></div>
              <div style="font-size:.95rem;color:#CBD5E1;font-weight:400;line-height:1.5;">Would move to a different target</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Content -->
      <div style="padding:6rem 5rem;display:flex;flex-direction:column;justify-content:center;background:#fff;">
        <div>
          <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.5rem 1.25rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#6D28D9;background:#F5F3FF;border:1px solid #EDE9FE;margin-bottom:2rem;">
            <span style="width:6px;height:6px;border-radius:50%;background:#8B5CF6;display:inline-block;animation:pulseDot 2s infinite;box-shadow:0 0 8px #8B5CF6;"></span>
            Featured Focus
          </span>

          <h2 style="font-family:var(--font);font-size:clamp(2.5rem,4vw,3.25rem);font-weight:800;color:#0F172A;line-height:1.15;letter-spacing:-.03em;margin:0 0 1.5rem;">
            Right now, we are focused on <span style="background:linear-gradient(135deg,#6D28D9,#4F46E5);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">protecting your home</span>
          </h2>

          <p style="color:#475569;line-height:1.85;margin-bottom:3rem;font-size:1.15rem;font-weight:400;">
            Home security is where Brocus starts. We help you cut through confusing contracts and surprise fees, and figure out what actually fits, whether that is full professional monitoring or a simple setup. The reassuring part is that visible security works. In a University of North Carolina at Charlotte study of 422 burglars, about 83 percent said they would check for an alarm before breaking in, and around 60 percent would move to a different target if they found one.
          </p>

          <a href="tel:+18889584443" class="btn btn-primary btn-lg" style="display:inline-flex;align-items:center;gap:1rem;background:linear-gradient(135deg,#7C3AED,#4F46E5);border:none;box-shadow:0 16px 40px rgba(124,58,237,.25);border-radius:20px;padding:1.25rem 2.5rem;font-size:1.15rem;font-weight:700;color:#fff;transition:all .3s;">
            <div style="width:38px;height:38px;border-radius:50%;background:rgba(255,255,255,.2);display:flex;align-items:center;justify-content:center;box-shadow:inset 0 2px 4px rgba(255,255,255,.2);"><i class="fas fa-phone-flip" style="font-size:.9rem;"></i></div>
            Get free advice: (888) 958-4443
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══ FAQ ═══ -->
<section style="padding:9rem 0;background-color:#0B0F19;background-image:radial-gradient(rgba(255,255,255,.05) 1.5px, transparent 1.5px);background-size:32px 32px;position:relative;border-top:1px solid rgba(255,255,255,.05);overflow:hidden;">

  <!-- Ambient glow to make the grid pop -->
  <div style="position:absolute;top:0;left:50%;transform:translateX(-50%);width:1000px;height:500px;background:radial-gradient(ellipse,rgba(124,58,237,.15),transparent 70%);pointer-events:none;"></div>

  <div class="faq-grid" style="max-width:1200px;margin:0 auto;padding:0 1.5rem;display:grid;grid-template-columns:1fr 1.5fr;gap:5rem;position:relative;z-index:1;">
    
    <!-- Left Column -->
    <div>
      <span style="display:inline-flex;align-items:center;gap:.6rem;padding:.5rem 1.25rem;border-radius:999px;font-size:.75rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:#C4B5FD;background:rgba(124,58,237,.1);border:1px solid rgba(124,58,237,.2);margin-bottom:1.5rem;">
        Support
      </span>
      <h2 style="font-family:var(--font);font-size:clamp(2.5rem,4vw,3.5rem);font-weight:800;color:#fff;letter-spacing:-.03em;line-height:1.15;margin-bottom:1.5rem;">Frequently asked <span style="background:linear-gradient(135deg,#A78BFA,#C4B5FD);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">questions</span></h2>
      <p style="font-size:1.15rem;color:rgba(255,255,255,.65);line-height:1.75;margin-bottom:2.5rem;font-weight:400;font-family:var(--font-p, 'Inter', sans-serif);">Have a different question and can't find the answer you're looking for? Reach out to our support team and we'll get back to you as soon as we can.</p>
      
      <a href="contact.php" class="btn btn-outline" style="border-color:rgba(255,255,255,.2);color:#fff;display:inline-flex;align-items:center;gap:.75rem;border-radius:12px;padding:.875rem 1.5rem;transition:all .3s ease;" onmouseover="this.style.background='rgba(255,255,255,.05)';" onmouseout="this.style.background='transparent';">
        <i class="fas fa-envelope" style="font-size:.9rem;color:#A78BFA;"></i> Contact Support
      </a>
    </div>
    
    <!-- Right Column (Accordion) -->
    <div style="display:flex;flex-direction:column;gap:1rem;">
      <?php foreach (
        [
          ['q' => 'Does Brocus provide the service itself?', 'a' => 'No. We are an independent advisory and referral service. We help you choose, then connect you with a vetted provider who delivers it.'],
          ['q' => 'Is the advice really free?', 'a' => 'Yes, with no obligation to move forward.'],
          ['q' => 'Are you tied to one brand?', 'a' => 'No. Being independent is the whole point.'],
          ['q' => 'What can you help with today?', 'a' => 'Home security across the United States, with more home services planned.']
        ] as $i => $faq
      ): ?>
        <div class="faq-item" id="faq-<?= $i ?>" style="background:rgba(255,255,255,.02);border:1px solid rgba(255,255,255,.08);border-radius:24px;padding:1.75rem 2.25rem;cursor:pointer;transition:all .3s ease;" onclick="toggleFaq(<?= $i ?>)" onmouseover="this.style.background='rgba(255,255,255,.04)';this.style.borderColor='rgba(124,58,237,.3)';" onmouseout="this.style.background='rgba(255,255,255,.02)';this.style.borderColor='rgba(255,255,255,.08)';">
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
        
        <h2 style="font-family:var(--font);font-size:clamp(2.5rem,5vw,4rem);font-weight:800;color:#fff;letter-spacing:-.03em;line-height:1.1;margin-bottom:1.5rem;">Skip the sales pitch.<br><span style="background:linear-gradient(135deg,#A78BFA,#60A5FA);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Talk to someone on your side.</span></h2>
        
        <p style="font-size:1.2rem;color:rgba(255,255,255,.75);margin-bottom:3.5rem;line-height:1.75;font-family:var(--font-p, 'Inter', sans-serif);font-weight:400;">Connect with an independent advisor who builds recommendations around your home and budget, not a sales quota.</p>
        
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

    [style*="grid-template-columns:1fr 1fr"] {
      grid-template-columns: 1fr !important
    }

    [style*="gap:5rem"] {
      gap: 2.5rem !important
    }

    [style*="gap:4rem"] {
      gap: 2rem !important
    }
  }
</style>
<script>
  function toggleFaq(i) {
    const el = document.getElementById('faq-' + i);
    el.classList.toggle('open');
  }
</script>

<?php include 'includes/footer.php'; ?>