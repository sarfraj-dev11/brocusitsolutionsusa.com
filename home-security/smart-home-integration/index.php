<?php
require_once dirname(__DIR__, 2) . '/includes/bootstrap.php';
$page_slug  = 'smart-home-integration';
$page_title = 'Smart Home Security Integration | Brocus IT Solutions';
$page_desc  = 'Independent advice on integrating your security with smart home devices like locks, lights, and thermostats, plus a vetted provider to set it up. Free, no-pressure consultation. Call today.';
require_once dirname(__DIR__, 2) . '/includes/head.php';
?>
<?php include dirname(__DIR__, 2) . '/includes/header.php'; ?>

<style>
  /* ── Hero layout ── */
  .hero-flex {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 4rem;
  }

  .hero-left {
    flex: 1 1 460px;
    max-width: 580px;
  }

  .hero-right {
    flex: 1 1 380px;
    max-width: 480px;
  }

  /* ── Hero form card ── */
  .hero-form-card {
    background: #0D0720;
    border: 1px solid rgba(167, 139, 250, .25);
    border-radius: 20px;
    padding: 2.25rem;
    box-shadow: 0 24px 64px rgba(0, 0, 0, .55), 0 0 0 1px rgba(167, 139, 250, .08) inset;
  }

  .hero-form-card .form-badge {
    display: inline-flex;
    align-items: center;
    gap: .45rem;
    padding: .3rem .9rem;
    border-radius: 999px;
    font-size: .68rem;
    font-weight: 800;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: #A78BFA;
    background: rgba(167, 139, 250, .12);
    border: 1px solid rgba(167, 139, 250, .3);
    margin-bottom: 1.25rem;
  }

  .hero-form-card h3 {
    font-family: var(--font-display);
    font-size: 1.5rem;
    font-weight: 800;
    color: #fff;
    margin: 0 0 .5rem;
    line-height: 1.2;
  }

  .hero-form-card .form-sub {
    font-size: .86rem;
    color: rgba(255, 255, 255, .55);
    line-height: 1.55;
    margin: 0 0 1.75rem;
  }

  .hf-label {
    display: block;
    font-size: .72rem;
    font-weight: 700;
    letter-spacing: .04em;
    color: rgba(255, 255, 255, .65);
    margin-bottom: .45rem;
    text-transform: uppercase;
    text-align: left;
  }

  .hf-label span {
    color: #A78BFA;
  }

  .hf-input {
    width: 100%;
    box-sizing: border-box;
    background: rgba(255, 255, 255, .06);
    color: #fff;
    font-size: .92rem;
    padding: .875rem 1.1rem;
    border-radius: 10px;
    border: 1.5px solid rgba(255, 255, 255, .12);
    outline: none;
    transition: border-color .2s, background .2s;
    font-family: var(--font-display);
  }

  .hf-input::placeholder {
    color: rgba(255, 255, 255, .3);
  }

  .hf-input:focus {
    border-color: #A78BFA;
    background: rgba(167, 139, 250, .08);
  }

  .hf-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
  }

  .hf-submit {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: .85rem;
    padding: .85rem 1.75rem;
    font-size: .95rem;
    font-weight: 700;
    color: #fff !important;
    border-radius: 999px;
    margin-top: .5rem;
    background: linear-gradient(135deg, #7C3AED 0%, #5B21B6 100%);
    border: none;
    box-shadow: 0 8px 28px rgba(124, 58, 237, .45);
    transition: transform .2s, box-shadow .2s;
    cursor: pointer;
  }

  .hf-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 36px rgba(124, 58, 237, .6);
  }

  .hf-submit .btn-icon {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: rgba(255, 255, 255, .18);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  /* ══ GLOBAL HERO OVERRIDES ══ */
  /* Override global .page-hero text-align:center */
  section.page-hero {
    text-align: left !important;
    overflow-x: hidden;
  }

  /* Badge — always left, never centred */
  section.page-hero .label {
    display: inline-flex !important;
    text-align: left !important;
    margin-left: 0 !important;
  }

  /* H1 & subtitle — explicitly left */
  section.page-hero .page-h {
    text-align: left !important;
  }

  section.page-hero .page-sub {
    text-align: left !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
  }

  /* ══ FROSTED OUTLINE BUTTON ══ */
  .btn-outline-hero {
    display: inline-flex;
    align-items: center;
    gap: .6rem;
    font-size: 1rem;
    font-weight: 700;
    color: #fff !important;
    text-decoration: none;
    background: rgba(255, 255, 255, .12);
    border: 1.5px solid rgba(255, 255, 255, .3);
    border-radius: 999px;
    padding: .9rem 1.75rem;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    transition: background .2s, border-color .2s, transform .2s;
    white-space: nowrap;
  }

  .btn-outline-hero:hover {
    background: rgba(255, 255, 255, .2);
    border-color: rgba(255, 255, 255, .5);
    transform: translateY(-2px);
  }

  /* ══ TABLET: ≤991px ══ */
  @media (max-width:991px) {
    section.page-hero {
      /* Desktop header uses margin-top:-140px trick; on tablet/mobile
         the header is shorter so we reset and use padding instead */
      margin-top: 0 !important;
      padding: 7.5rem 0 4rem !important;
      /* ~120px top = call-strip(34) + nav(60) + 26px breathing room */
    }

    .hero-flex {
      flex-direction: column !important;
      gap: 2.5rem !important;
      align-items: flex-start !important;
    }

    .hero-left {
      flex: 1 1 100% !important;
      max-width: 100% !important;
      width: 100% !important;
    }

    .hero-right {
      flex: 1 1 100% !important;
      width: 100% !important;
      max-width: 560px !important;
    }

    .hero-buttons {
      flex-direction: row !important;
      flex-wrap: wrap;
      gap: .85rem;
    }

    .hero-buttons a,
    .hero-buttons .btn-outline-hero {
      flex: 1 1 auto;
      justify-content: center;
      text-align: center;
      min-width: 160px;
    }

    .hf-row {
      grid-template-columns: 1fr 1fr;
    }

    .hero-trust-pills {
      flex-wrap: wrap;
      gap: .5rem;
    }
  }

  /* ══ MOBILE: ≤640px ══ */
  @media (max-width:640px) {
    section.page-hero {
      margin-top: 0 !important;
      /* call-strip(34) + nav(56px at 600px) + 24px gap = ~114px → 7rem */
      padding: 2rem 0 3.5rem !important;
    }

    .page-hero-inner {
      padding: 0 1.25rem !important;


      .page-h {
        font-size: clamp(1.85rem, 6vw, 2.4rem) !important;
        line-height: 1.15 !important;
        margin-bottom: 1rem !important;
      }

      .page-sub {
        font-size: .95rem !important;
        line-height: 1.7 !important;
        margin-bottom: 1.5rem !important;
      }

      .hero-flex {
        gap: 2rem !important;
      }

      .hero-right {
        max-width: 100% !important;
      }

      .hero-form-card {
        padding: 1.5rem 1.1rem !important;
      }

      .hero-form-card h3 {
        font-size: 1.2rem !important;
      }

      .hf-row {
        grid-template-columns: 1fr !important;
        gap: .75rem !important;
      }

      .hero-buttons {
        flex-direction: column !important;
        gap: .75rem !important;
      }

      .hero-buttons a,
      .hero-buttons .btn-outline-hero {
        width: 100% !important;
        justify-content: center !important;
        text-align: center !important;
        font-size: .95rem !important;
        padding: .9rem 1.25rem !important;
        min-width: unset !important;
        flex: none !important;
      }

      .hero-trust-pills {
        gap: .4rem !important;
      }

      .hero-trust-pills span {
        font-size: .72rem !important;
        padding: .28rem .65rem !important;
      }
    }

    /* ══ SMALL MOBILE: ≤390px ══ */
    @media (max-width:390px) {
      section.page-hero {
        margin-top: 0 !important;
        padding: 2.5rem 0 3rem !important;
      }

      .page-h {
        font-size: 1.75rem !important;
      }

      .page-hero-inner {
        padding: 0 1rem !important;
      }
    }
</style>


<!-- PAGE HERO -->
<section class="page-hero" style="background:
    linear-gradient(160deg, rgba(30,10,80,.84) 0%, rgba(10,5,32,.78) 42%, rgba(5,5,8,.9) 100%),
    url('<?= asset('images/home-security-hero-bg.jpg') ?>') center center / cover no-repeat;
  position:relative;overflow:hidden;">

  <!-- Ambient orbs -->
  <div style="position:absolute;top:-100px;left:-100px;width:600px;height:600px;background:radial-gradient(circle,rgba(139,92,246,.3),transparent 65%);pointer-events:none;animation:pulse 6s ease-in-out infinite;"></div>
  <div style="position:absolute;top:20%;right:-150px;width:500px;height:500px;background:radial-gradient(circle,rgba(59,130,246,.18),transparent 65%);pointer-events:none;"></div>
  <div style="position:absolute;bottom:0;left:50%;transform:translateX(-50%);width:900px;height:300px;background:radial-gradient(ellipse,rgba(124,58,237,.12),transparent 70%);pointer-events:none;"></div>

  <div class="page-hero-inner" style="position:relative;z-index:2;max-width:1200px;margin:0 auto;padding:0 1.5rem;">

    <!-- Breadcrumb -->
    <nav style="display:flex;align-items:center;gap:.5rem;margin-bottom:2rem;font-size:.82rem;color:var(--w40);">
      <a href="<?= url('home-security') ?>" style="color:var(--w40);transition:color .2s;" onmouseover="this.style.color='rgba(255,255,255,.75)'" onmouseout="this.style.color='var(--w40)'">Home Security</a>
      <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
        <polyline points="9 18 15 12 9 6" />
      </svg>
      <span style="color:var(--w70);">Smart Home Integration</span>
    </nav>

    <!-- Split: LEFT text  |  RIGHT photo -->
    <div class="hero-flex" style="display:flex;flex-wrap:wrap;align-items:center;gap:4rem;">

      <!-- ── LEFT ── -->
      <div class="hero-left" style="flex:1 1 460px;max-width:580px;">

        <!-- Eyebrow label -->
        <span class="label" style="margin-bottom:1.5rem;">
          <i class="fas fa-shield-halved" style="color:#A78BFA;font-size:.72rem;"></i>
          Home Security
        </span>

        <!-- H1 -->
        <h1 class="page-h" style="text-align:left;margin-bottom:1.25rem;">
          Security and Smart Home,<br>
          <span class="grad">Working as One</span>
        </h1>

        <!-- Subtitle -->
        <p class="page-sub" style="text-align:left;max-width:520px;margin-bottom:2rem;">
          Your security can do more than guard the door. Tie it to your lights, locks, and thermostat and the whole home responds together, arming, locking, and powering down with a single action. Independent advice and a vetted provider to connect it all.
        </p>

        <!-- CTA Buttons -->
        <div class="hero-buttons" style="display:flex;flex-wrap:wrap;gap:1rem;margin-bottom:1.5rem;">
          <a href="tel:<?= PHONE_TEL ?>" class="btn btn-primary btn-lg">
            <i class="fas fa-phone" style="font-size:.82rem;"></i> Call now: <?= PHONE_DISPLAY ?>
          </a>
          <a href="#quote-form" class="btn-outline-hero btn-lg">
            Get a free quote <i class="fas fa-arrow-right" style="font-size:.78rem;"></i>
          </a>
        </div>

        <!-- Trust badge pills — below CTA -->
        <div class="hero-trust-pills" style="display:flex;flex-wrap:wrap;gap:.5rem;">
          <?php foreach (['Independent advice', 'Free, no-obligation consultation', 'Vetted provider network', 'No cost to compare'] as $b): ?>
            <span style="display:inline-flex;align-items:center;gap:.4rem;padding:.3rem .8rem;border-radius:999px;font-size:.75rem;color:var(--w70);border:1px solid var(--w15);background:rgba(255,255,255,.04);">
              <i class="fas fa-check" style="color:#A78BFA;font-size:.58rem;"></i><?= $b ?>
            </span>
          <?php endforeach; ?>
        </div>

      </div>

      <!-- ── RIGHT: Lead Form ── -->
      <div class="hero-right">
        <div class="hero-form-card">

          <div class="form-badge">
            <i class="fas fa-shield-check" style="font-size:.65rem;"></i> Free Quote
          </div>

          <h3>Get my free quote</h3>
          <p class="form-sub">Enter your ZIP and phone, and we will check the best options at your address.</p>

          <form action="<?= url('contact') ?>" method="get" style="display:flex;flex-direction:column;gap:1.1rem;">

            <!-- Full Name (Optional) -->
            <div>
              <label class="hf-label">Full Name</label>
              <input type="text" name="name" placeholder="Your name" class="hf-input">
            </div>

            <!-- Phone + ZIP side-by-side -->
            <div class="hf-row">
              <div>
                <label class="hf-label">Phone <span>*</span></label>
                <input type="tel" name="phone" placeholder="(555) 000-0000" required class="hf-input">
              </div>
              <div>
                <label class="hf-label">ZIP Code <span>*</span></label>
                <input type="text" name="zip" placeholder="Enter ZIP" required class="hf-input">
              </div>
            </div>

            <!-- Submit -->
            <button type="submit" class="hf-submit">
              <span class="btn-icon"><i class="fas fa-paper-plane" style="font-size:.75rem;"></i></span>
              <span>Get my free quote</span>
            </button>

          </form>

          <!-- Trust line -->
          <p style="margin:1.1rem 0 0;text-align:center;font-size:.73rem;color:rgba(255,255,255,.35);display:flex;align-items:center;justify-content:center;gap:.4rem;">
            <i class="fas fa-lock" style="font-size:.65rem;"></i> Secure &amp; confidential &mdash; no obligation.
          </p>

        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══ SECTION 2: BENEFITS — WHITE BG ══ -->
<style>
  .s2-benefit-card {
    background: #fff;
    border: 1px solid #E8E4F8;
    border-radius: 20px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform .3s cubic-bezier(.22, .68, 0, 1.2), box-shadow .3s ease, border-color .3s ease;
  }

  .s2-benefit-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 28px 64px rgba(124, 58, 237, .14);
    border-color: rgba(124, 58, 237, .4);
  }

  /* Compact image — fixed height */
  .s2-img-wrap {
    position: relative;
    width: 100%;
    height: 220px;
    overflow: hidden;
    flex-shrink: 0;
  }

  .s2-img-wrap img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform .55s cubic-bezier(.25, .46, .45, .94);
  }

  .s2-benefit-card:hover .s2-img-wrap img {
    transform: scale(1.07);
  }

  /* Gradient overlay on image bottom */
  .s2-img-wrap::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 50%;
    background: linear-gradient(transparent, rgba(10, 5, 30, .55));
    pointer-events: none;
  }

  /* Number badge */
  .s2-num-badge {
    position: absolute;
    top: 1rem;
    left: 1rem;
    z-index: 2;
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: rgba(255, 255, 255, .15);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, .3);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: .7rem;
    font-weight: 900;
    color: #fff;
    letter-spacing: .05em;
    font-family: var(--font-display);
  }

  /* Card body */
  .s2-card-body {
    padding: 1.4rem 1.5rem 1.6rem;
    display: flex;
    flex-direction: column;
    gap: .65rem;
    position: relative;
  }

  .s2-card-body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 1.5rem;
    right: 1.5rem;
    height: 2px;
    background: linear-gradient(90deg, #7C3AED, #A78BFA, transparent);
    border-radius: 999px;
  }

  @media(max-width:767px) {
    .s2-grid-2x2 {
      grid-template-columns: 1fr !important;
    }
  }
</style>

<section style="background:#F8F7FF;padding:6rem 0 0;position:relative;">
  <div style="max-width:1200px;margin:0 auto;padding:0 1.5rem;">

    <!-- Section header -->
    <div style="text-align:center;margin-bottom:4.5rem;">
      <span style="display:inline-flex;align-items:center;gap:.45rem;font-size:.7rem;font-weight:800;letter-spacing:.15em;text-transform:uppercase;color:#7C3AED;background:rgba(124,58,237,.07);border:1px solid rgba(124,58,237,.18);border-radius:999px;padding:.35rem 1rem;margin-bottom:1.25rem;">
        <i class="fas fa-bolt" style="font-size:.62rem;"></i> Quick Benefits
      </span>
      <h2 style="font-family:var(--font-display);font-size:clamp(1.8rem,3.5vw,2.5rem);font-weight:900;color:#0F172A;letter-spacing:-.03em;margin:0 0 .75rem;line-height:1.15;">Why smart home integration matters</h2>
      <p style="font-size:1.05rem;color:#475569;max-width:520px;margin:0 auto;line-height:1.7;">Four things that happen the moment you connect your security to the rest of your home.</p>
    </div>

    <!-- 2×2 benefit cards -->
    <div class="s2-grid-2x2" style="display:grid;grid-template-columns:1fr 1fr;gap:1.75rem;margin-bottom:4rem;">
      <?php
      $s2_benefits = [
        ['img' => 'shi_s2_one_system.png',    'num' => '01', 'text' => 'One system that links security, locks, lights, and climate'],
        ['img' => 'shi_s2_routines.png',      'num' => '02', 'text' => 'Routines, such as arming the system locks the doors and dims the lights'],
        ['img' => 'shi_s2_voice_control.png',  'num' => '03', 'text' => 'Control everything from a single app or your voice'],
        ['img' => 'shi_s2_pro_setup.png',      'num' => '04', 'text' => 'Set up and tested by a professional, not pieced together'],
      ];
      foreach ($s2_benefits as $b): ?>
        <div class="s2-benefit-card">
          <div class="s2-img-wrap">
            <img src="<?= BASE_PATH ?>/assets/images/<?= $b['img'] ?>" alt="<?= htmlspecialchars($b['text']) ?>" loading="lazy">
            <div class="s2-num-badge"><?= $b['num'] ?></div>
          </div>
          <div class="s2-card-body">
            <h3 style="font-family:var(--font-display);font-size:1.05rem;font-weight:800;color:#0F172A;line-height:1.4;margin:0;letter-spacing:-.01em;"><?= $b['text'] ?></h3>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- CTA row -->
    <div style="display:flex;align-items:center;justify-content:center;gap:1.25rem;flex-wrap:wrap;padding-bottom:4rem;">
      <a href="tel:<?= PHONE_TEL ?>" class="btn btn-primary" style="display:inline-flex;align-items:center;gap:.7rem;border-radius:999px;padding:1rem 2rem;font-size:1rem;">
        <i class="fas fa-phone" style="font-size:.82rem;"></i> Call now: <?= PHONE_DISPLAY ?>
      </a>
      <a href="#quote-form" style="display:inline-flex;align-items:center;gap:.6rem;font-size:.97rem;font-weight:700;color:#7C3AED;text-decoration:none;border:2px solid #EDE9FE;border-radius:999px;padding:1rem 2rem;transition:all .2s;background:#fff;" onmouseover="this.style.borderColor='#7C3AED';this.style.background='#F5F3FF'" onmouseout="this.style.borderColor='#EDE9FE';this.style.background='#fff'">
        Get a free quote <i class="fas fa-arrow-right" style="font-size:.8rem;"></i>
      </a>
    </div>

  </div>

  <!-- Trust strip -->
  <div style="padding:1.75rem 1.5rem;background:#fff;border-top:1px solid #EDE9FE;text-align:center;">
    <p style="max-width:800px;margin:0 auto;font-size:.9rem;color:#4B5563;line-height:1.75;">
      <span style="color:#6D28D9;font-weight:700;">Brocus is an independent advisor, not a device brand.</span>
      We compare integrated systems across a vetted provider network and recommend the setup that fits the devices you already own.
    </p>
  </div>

</section>

<!-- ══ SECTION 3: SEO DEPTH ZONE ══ -->
<style>
  .seo3-card {
    background: rgba(255, 255, 255, .05);
    border: 1px solid rgba(167, 139, 250, .2);
    border-radius: 20px;
    padding: 0;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
  }

  .seo3-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 24px 60px rgba(124, 58, 237, .25);
    border-color: rgba(167, 139, 250, .5);
  }

  .seo3-img-wrap {
    width: 100%;
    height: 200px;
    overflow: hidden;
    flex-shrink: 0;
  }

  .seo3-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform .55s cubic-bezier(.25, .46, .45, .94);
  }

  .seo3-card:hover .seo3-img-wrap img {
    transform: scale(1.08);
  }

  .seo3-body {
    padding: 1.75rem;
    display: flex;
    flex-direction: column;
    gap: .85rem;
    flex: 1;
    position: relative;
  }

  .seo3-body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 1.75rem;
    right: 1.75rem;
    height: 2px;
    background: linear-gradient(90deg, #7C3AED, #A78BFA, transparent);
    border-radius: 999px;
  }

  .seo3-card:nth-child(2) .seo3-body::before {
    background: linear-gradient(90deg, #7C3AED, #A78BFA, #60A5FA);
  }

  .seo3-card:nth-child(3) .seo3-body::before {
    background: linear-gradient(90deg, #3B82F6, #60A5FA, transparent);
  }

  @media(max-width:768px) {
    .seo3-grid {
      grid-template-columns: 1fr !important;
    }
  }
</style>

<section style="background:linear-gradient(160deg,#080420 0%,#0D0630 40%,#091530 100%);padding:6rem 0;position:relative;overflow:hidden;">
  <div style="position:absolute;top:-80px;left:-60px;width:500px;height:500px;background:radial-gradient(circle,rgba(124,58,237,.12),transparent 65%);pointer-events:none;"></div>
  <div style="position:absolute;bottom:-60px;right:-40px;width:420px;height:420px;background:radial-gradient(circle,rgba(96,165,250,.08),transparent 65%);pointer-events:none;"></div>

  <div style="max-width:1200px;margin:0 auto;padding:0 1.5rem;position:relative;z-index:1;">

    <div class="seo3-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;">

      <!-- Card 1 -->
      <div class="seo3-card">
        <div class="seo3-img-wrap">
          <img src="<?= BASE_PATH ?>/assets/images/shi_s3_means_security.png" alt="What smart home integration means for security" loading="lazy">
        </div>
        <div class="seo3-body">
          <span style="display:inline-block;font-size:.68rem;font-weight:800;letter-spacing:.1em;text-transform:uppercase;color:#A78BFA;">01</span>
          <h3 style="font-family:var(--font-display);font-size:1.15rem;font-weight:800;color:#F8FAFC;margin:0;line-height:1.35;">What smart home integration means for security</h3>
          <p style="font-size:.9rem;color:rgba(255,255,255,.6);line-height:1.8;margin:0;">Integration is when your devices stop acting alone. Arm the system at night and the doors lock, the porch light comes on, and the thermostat settles, all from one command. Security stops being a separate gadget and becomes part of how the home runs.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="seo3-card" style="border-color:rgba(124,58,237,.4);">
        <div class="seo3-img-wrap">
          <img src="<?= BASE_PATH ?>/assets/images/shi_s3_connect.png" alt="What you can connect" loading="lazy">
        </div>
        <div class="seo3-body" style="background:rgba(124,58,237,.06);">
          <span style="display:inline-block;font-size:.68rem;font-weight:800;letter-spacing:.1em;text-transform:uppercase;color:#A78BFA;">02</span>
          <h3 style="font-family:var(--font-display);font-size:1.15rem;font-weight:800;color:#fff;margin:0;line-height:1.35;">What you can connect</h3>
          <p style="font-size:.9rem;color:rgba(255,255,255,.65);line-height:1.8;margin:0;">Locks, lights, thermostats, garage doors, smart plugs, and voice assistants can all tie into the security system and the same app. Instead of juggling separate apps, you run the whole home from one place.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="seo3-card">
        <div class="seo3-img-wrap">
          <img src="<?= BASE_PATH ?>/assets/images/shi_s3_hub.png" alt="Why a single hub matters" loading="lazy">
        </div>
        <div class="seo3-body">
          <span style="display:inline-block;font-size:.68rem;font-weight:800;letter-spacing:.1em;text-transform:uppercase;color:#A78BFA;">03</span>
          <h3 style="font-family:var(--font-display);font-size:1.15rem;font-weight:800;color:#F8FAFC;margin:0;line-height:1.35;">Why a single hub matters</h3>
          <p style="font-size:.9rem;color:rgba(255,255,255,.6);line-height:1.8;margin:0;">Integration only works when devices speak the same language through one hub. Mismatched gear that will not connect is the most common smart home frustration, and the reason many setups end up half-working. We help you pick devices that actually play together.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ══ SECTION 4: WHAT TO LOOK FOR ══ -->
<style>
  .wtlf-card {
    background: #fff;
    border: 1px solid #EDE9FE;
    border-radius: 20px;
    padding: 0;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    transition: transform .28s ease, box-shadow .28s ease, border-color .28s ease;
  }

  .wtlf-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 56px rgba(124, 58, 237, .12);
    border-color: rgba(124, 58, 237, .45);
  }

  /* Image wrapper */
  .wtlf-img-wrap {
    width: 100%;
    height: 210px;
    border-radius: 0;
    overflow: hidden;
    flex-shrink: 0;
  }

  .wtlf-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    border-radius: 0;
    transition: transform .5s cubic-bezier(.25, .46, .45, .94);
  }

  .wtlf-card:hover .wtlf-img-wrap img {
    transform: scale(1.07);
  }

  /* Card body */
  .wtlf-body {
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    gap: .85rem;
    flex: 1;
  }

  .wtlf-icon {
    width: 44px;
    height: 44px;
    border-radius: 13px;
    background: #F5F3FF;
    border: 1px solid #EDE9FE;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: background .25s, border-color .25s;
  }

  .wtlf-card:hover .wtlf-icon {
    background: #EDE9FE;
    border-color: rgba(124, 58, 237, .4);
  }

  @media(max-width:768px) {
    .wtlf-grid-5 {
      grid-template-columns: 1fr 1fr !important;
    }
  }

  @media(max-width:480px) {
    .wtlf-grid-5 {
      grid-template-columns: 1fr !important;
    }
  }
</style>

<section style="background:#F8F7FF;padding:7rem 0;border-top:1px solid #E2E8F0;border-bottom:1px solid #E2E8F0;">

  <div style="max-width:1200px;margin:0 auto;padding:0 1.5rem;">

    <!-- Header -->
    <div style="text-align:center;margin-bottom:4.5rem;">
      <div style="display:inline-flex;align-items:center;gap:.55rem;padding:.35rem 1.1rem;border-radius:999px;font-size:.72rem;font-weight:800;letter-spacing:.14em;text-transform:uppercase;color:#7C3AED;background:rgba(124,58,237,.06);border:1px solid rgba(124,58,237,.15);margin-bottom:1.5rem;">
        <i class="fas fa-list-check" style="font-size:.65rem;"></i> 5 Things That Actually Matter
      </div>
      <h2 style="font-family:var(--font-display);font-size:clamp(2rem,4vw,2.8rem);font-weight:900;color:#0F172A;letter-spacing:-.04em;line-height:1.1;margin:0 0 1rem;">
        What to look for in an <span style="background:linear-gradient(135deg,#7C3AED,#4F46E5);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">integrated system</span>
      </h2>
      <p style="font-size:1.05rem;color:#475569;max-width:500px;margin:0 auto;line-height:1.7;">Not all integrated systems are equal. Here's what separates the best from the rest.</p>
    </div>

    <!-- 5-card uniform grid -->
    <div class="wtlf-grid-5" style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-bottom:4rem;">
      <?php
      $wtlf_items = [
        ['img' => 'shi_s3_hub.png',           'icon' => 'fa-square-check',  'num' => '01', 'tag' => 'Unified',       'title' => 'One hub and one app',        'body' => 'Everything controlled from a single place.'],
        ['img' => 'shi_s2_one_system.png',    'icon' => 'fa-link',          'num' => '02', 'tag' => 'Compatibility', 'title' => 'Wide device compatibility',  'body' => 'So the devices you own and the ones you add all connect.'],
        ['img' => 'shi_s2_routines.png',      'icon' => 'fa-sliders',       'num' => '03', 'tag' => 'Automation',    'title' => 'Routines and scenes',        'body' => 'One tap to arm, lock, and set the lights for the night.'],
        ['img' => 'shi_s2_voice_control.png',  'icon' => 'fa-microphone',    'num' => '04', 'tag' => 'Convenience',   'title' => 'Voice control',              'body' => 'Run the system hands-free when it suits you.'],
        ['img' => 'shi_s2_pro_setup.png',      'icon' => 'fa-arrow-up-right-dots', 'num' => '05', 'tag' => 'Scalable', 'title' => 'Room to grow',               'body' => 'Add devices over time without starting over.'],
      ];
      foreach ($wtlf_items as $c): ?>
        <div class="wtlf-card">
          <!-- Image with hover zoom -->
          <div class="wtlf-img-wrap">
            <img src="<?= BASE_PATH ?>/assets/images/<?= $c['img'] ?>" alt="<?= htmlspecialchars($c['title']) ?>" loading="lazy">
          </div>
          <!-- Card body -->
          <div class="wtlf-body">
            <!-- Icon + meta row -->
            <div style="display:flex;align-items:center;justify-content:space-between;">
              <div class="wtlf-icon">
                <i class="fas <?= $c['icon'] ?>" style="color:#7C3AED;font-size:1rem;"></i>
              </div>
              <span style="font-size:.65rem;font-weight:800;color:#7C3AED;letter-spacing:.08em;background:rgba(124,58,237,.07);border:1px solid rgba(124,58,237,.15);border-radius:999px;padding:.2rem .65rem;"><?= $c['num'] ?> · <?= $c['tag'] ?></span>
            </div>
            <!-- Title -->
            <h3 style="font-family:var(--font-display);font-size:1rem;font-weight:800;color:#0F172A;margin:0;line-height:1.35;"><?= $c['title'] ?></h3>
            <!-- Body -->
            <p style="font-size:.88rem;color:#475569;line-height:1.7;margin:0;"><?= $c['body'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>

      <!-- Card 6 — CTA Extension -->
      <div class="wtlf-card" style="background:linear-gradient(145deg,#4F46E5,#7C3AED);border:none;display:flex;flex-direction:column;justify-content:space-between;position:relative;overflow:hidden;">
        <!-- Glow orb -->
        <div style="position:absolute;top:-40px;right:-40px;width:180px;height:180px;background:radial-gradient(circle,rgba(255,255,255,.12),transparent 65%);pointer-events:none;"></div>
        <div style="position:absolute;bottom:-30px;left:-30px;width:140px;height:140px;background:radial-gradient(circle,rgba(255,255,255,.07),transparent 65%);pointer-events:none;"></div>
        <!-- Body -->
        <div class="wtlf-body" style="position:relative;z-index:1;gap:1rem;">
          <!-- Icon -->
          <div style="width:48px;height:48px;border-radius:14px;background:rgba(255,255,255,.15);border:1px solid rgba(255,255,255,.25);display:flex;align-items:center;justify-content:center;">
            <i class="fas fa-phone-volume" style="color:#fff;font-size:1.2rem;"></i>
          </div>
          <div>
            <div style="font-size:.65rem;font-weight:800;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:.4rem;">Free Consultation</div>
            <h3 style="font-family:var(--font-display);font-size:1.1rem;font-weight:900;color:#fff;margin:0;line-height:1.3;">Ready to get protected?<br>Speak to an advisor now.</h3>
          </div>
          <p style="font-size:.85rem;color:rgba(255,255,255,.7);line-height:1.65;margin:0;">No pressure, no sales pitch. We help you pick only what your home actually needs.</p>
          <!-- Call button -->
          <a href="tel:<?= PHONE_TEL ?>"
            style="display:inline-flex;align-items:center;gap:.75rem;padding:.95rem 1.5rem;background:#fff;border-radius:12px;font-size:.95rem;font-weight:800;color:#4F46E5;text-decoration:none;box-shadow:0 8px 24px rgba(0,0,0,.2);transition:all .25s;margin-top:.25rem;"
            onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 14px 36px rgba(0,0,0,.3)'"
            onmouseout="this.style.transform='none';this.style.boxShadow='0 8px 24px rgba(0,0,0,.2)'">
            <i class="fas fa-phone" style="font-size:.85rem;"></i>
            <?= PHONE_DISPLAY ?>
          </a>
          <!-- Trust pills -->
          <div style="display:flex;flex-wrap:wrap;gap:.5rem;margin-top:.1rem;">
            <?php foreach (['Free', 'No obligation', '5 min call'] as $pill): ?>
              <span style="display:inline-flex;align-items:center;gap:.3rem;font-size:.7rem;font-weight:700;color:rgba(255,255,255,.8);background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);border-radius:999px;padding:.25rem .7rem;">
                <i class="fas fa-check" style="font-size:.55rem;color:#A5F3FC;"></i><?= $pill ?>
              </span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

    </div>


    <!-- Bottom CTA -->
    <div style="background:linear-gradient(135deg,#4F46E5 0%,#7C3AED 50%,#6D28D9 100%);border-radius:24px;padding:3rem 3.5rem;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:2rem;position:relative;overflow:hidden;">
      <div style="position:absolute;top:-60px;right:80px;width:280px;height:280px;background:radial-gradient(circle,rgba(255,255,255,.08),transparent 65%);pointer-events:none;"></div>
      <div>
        <div style="font-size:.7rem;font-weight:800;letter-spacing:.15em;text-transform:uppercase;color:rgba(255,255,255,.5);margin-bottom:.6rem;">Unified Control</div>
        <h3 style="font-family:var(--font-display);font-size:1.7rem;font-weight:900;color:#fff;margin:0 0 .6rem;line-height:1.15;">Tie it all together. Call <?= PHONE_DISPLAY ?></h3>
        <p style="font-size:.97rem;color:rgba(255,255,255,.7);margin:0;max-width:480px;line-height:1.65;">Integration builds on the panel and the app, using them as the center that every other device connects through. The security system stays the backbone, and the smart home grows around it.</p>
      </div>
      <div style="display:flex;flex-direction:column;align-items:flex-start;gap:.85rem;">
        <a href="tel:<?= PHONE_TEL ?>" style="display:inline-flex;align-items:center;gap:.85rem;font-size:1rem;font-weight:800;color:#4F46E5;background:#fff;border-radius:14px;padding:1.1rem 2.25rem;text-decoration:none;white-space:nowrap;box-shadow:0 12px 32px rgba(0,0,0,.25);transition:all .25s;"
          onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 20px 48px rgba(0,0,0,.35)'"
          onmouseout="this.style.transform='none';this.style.boxShadow='0 12px 32px rgba(0,0,0,.25)'">
          <i class="fas fa-phone" style="font-size:.9rem;"></i> Call <?= PHONE_DISPLAY ?>
        </a>
        <div style="font-size:.78rem;color:rgba(255,255,255,.4);text-align:center;width:100%;">Free advice · No obligation</div>
      </div>
    </div>

  </div>
</section>


<!-- ══ SECTION 5: OPTIONS & COSTS ══ -->
<style>
  .s5-card {
    background: rgba(255, 255, 255, .05);
    border: 1px solid rgba(167, 139, 250, .18);
    border-radius: 20px;
    padding: 0;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
  }

  .s5-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 24px 60px rgba(59, 130, 246, .2);
    border-color: rgba(167, 139, 250, .45);
  }

  .s5-img-wrap {
    width: 100%;
    height: 200px;
    overflow: hidden;
    flex-shrink: 0;
  }

  .s5-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform .55s cubic-bezier(.25, .46, .45, .94);
  }

  .s5-card:hover .s5-img-wrap img {
    transform: scale(1.08);
  }

  .s5-body {
    padding: 1.75rem;
    display: flex;
    flex-direction: column;
    gap: .85rem;
    flex: 1;
    position: relative;
  }

  .s5-body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 1.75rem;
    right: 1.75rem;
    height: 2px;
    background: linear-gradient(90deg, #7C3AED, #A78BFA, transparent);
    border-radius: 999px;
  }

  .s5-card:nth-child(2) .s5-body::before {
    background: linear-gradient(90deg, #7C3AED, #A78BFA, #60A5FA);
  }

  .s5-card:nth-child(3) .s5-body::before {
    background: linear-gradient(90deg, #3B82F6, #60A5FA, transparent);
  }

  @media(max-width:768px) {
    .s5-cols {
      grid-template-columns: 1fr !important;
    }
  }
</style>

<section style="background:linear-gradient(160deg,#030B1A 0%,#071228 50%,#050F22 100%);padding:6rem 0;position:relative;overflow:hidden;">
  <div style="position:absolute;top:-80px;right:-60px;width:480px;height:480px;background:radial-gradient(circle,rgba(59,130,246,.1),transparent 65%);pointer-events:none;"></div>
  <div style="position:absolute;bottom:-60px;left:-40px;width:400px;height:400px;background:radial-gradient(circle,rgba(124,58,237,.08),transparent 65%);pointer-events:none;"></div>

  <div style="max-width:1200px;margin:0 auto;padding:0 1.5rem;position:relative;z-index:1;">

    <div class="s5-cols" style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-bottom:3rem;">

      <!-- Card 1 -->
      <div class="s5-card">
        <div class="s5-img-wrap">
          <img src="<?= BASE_PATH ?>/assets/images/shi_s5_overkill.png" alt="When integration is overkill" loading="lazy">
        </div>
        <div class="s5-body">
          <span style="display:inline-block;font-size:.68rem;font-weight:800;letter-spacing:.1em;text-transform:uppercase;color:#A78BFA;">01</span>
          <h3 style="font-family:var(--font-display);font-size:1.15rem;font-weight:800;color:#F8FAFC;margin:0;line-height:1.35;">When integration is overkill</h3>
          <p style="font-size:.9rem;color:rgba(255,255,255,.6);line-height:1.8;margin:0;">If you want straightforward security and nothing more, you do not need a fully connected home. We will tell you honestly when a simpler setup serves you better than a web of linked devices.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="s5-card" style="border-color:rgba(124,58,237,.4);">
        <div class="s5-img-wrap">
          <img src="<?= BASE_PATH ?>/assets/images/shi_s5_system_fit.png" alt="How integration fits your system" loading="lazy">
        </div>
        <div class="s5-body" style="background:rgba(124,58,237,.06);">
          <span style="display:inline-block;font-size:.68rem;font-weight:800;letter-spacing:.1em;text-transform:uppercase;color:#A78BFA;">02</span>
          <h3 style="font-family:var(--font-display);font-size:1.15rem;font-weight:800;color:#fff;margin:0;line-height:1.35;">How integration fits your system</h3>
          <p style="font-size:.9rem;color:rgba(255,255,255,.65);line-height:1.8;margin:0;">Integration builds on the panel and the app, using them as the center that every other device connects through. The security system stays the backbone, and the smart home grows around it.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="s5-card">
        <div class="s5-img-wrap">
          <img src="<?= BASE_PATH ?>/assets/images/shi_s5_cost.png" alt="What it costs" loading="lazy">
        </div>
        <div class="s5-body">
          <span style="display:inline-block;font-size:.68rem;font-weight:800;letter-spacing:.1em;text-transform:uppercase;color:#A78BFA;">03</span>
          <h3 style="font-family:var(--font-display);font-size:1.15rem;font-weight:800;color:#F8FAFC;margin:0;line-height:1.35;">What it costs</h3>
          <p style="font-size:.9rem;color:rgba(255,255,255,.6);line-height:1.8;margin:0;">Cost depends on how many devices you connect and what you already own. The system and app usually carry the integration, with the variable being the devices themselves. We will price it for your home on the call.</p>
        </div>
      </div>

    </div>

    <!-- CTA strip -->
    <div style="background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.07);border-radius:20px;padding:2rem 2.5rem;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:1.5rem;">
      <h3 style="font-family:var(--font-display);font-size:1.35rem;font-weight:800;color:#fff;margin:0;line-height:1.3;">Tie it all together. Call <?= PHONE_DISPLAY ?></h3>
      <a href="tel:<?= PHONE_TEL ?>" style="display:inline-flex;align-items:center;gap:.75rem;padding:.9rem 1.75rem;background:linear-gradient(135deg,#7C3AED,#4F46E5);border-radius:999px;font-size:.92rem;font-weight:700;color:#fff;text-decoration:none;white-space:nowrap;box-shadow:0 8px 24px rgba(124,58,237,.35);transition:all .25s;" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 14px 36px rgba(124,58,237,.45)'" onmouseout="this.style.transform='none';this.style.boxShadow='0 8px 24px rgba(124,58,237,.35)'">
        <i class="fas fa-phone" style="font-size:.8rem;"></i> Call <?= PHONE_DISPLAY ?>
      </a>
    </div>

  </div>
</section>





<!-- ══ SECTION 6: FREQUENTLY ASKED QUESTIONS ══ -->
<style>
  .faq-accordion-item {
    background: rgba(15, 23, 42, .02);
    border: 1px solid rgba(15, 23, 42, .06);
    border-radius: 16px;
    margin-bottom: 1rem;
    transition: background .3s, border-color .3s;
  }

  .faq-accordion-item:hover {
    background: rgba(15, 23, 42, .04);
    border-color: rgba(124, 58, 237, .3);
  }

  .faq-trigger {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 1.5rem;
    padding: 1.75rem 2rem;
    background: none;
    border: none;
    cursor: pointer;
    text-align: left;
    font-family: var(--font-display);
  }

  .faq-icon-box {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: rgba(124, 58, 237, .06);
    border: 1px solid rgba(124, 58, 237, .15);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: transform .3s, background .3s, border-color .3s;
  }

  .faq-accordion-item:hover .faq-icon-box {
    background: rgba(124, 58, 237, .12);
    border-color: rgba(124, 58, 237, .3);
  }

  .faq-answer-wrapper {
    max-height: 0;
    overflow: hidden;
    transition: max-height .4s cubic-bezier(.4, 0, .2, 1), opacity .3s;
    opacity: 0;
  }

  .faq-answer-content {
    padding: 0 2rem 1.75rem;
    font-size: .98rem;
    color: #475569;
    line-height: 1.75;
    margin: 0;
  }
</style>

<section style="padding:5.5rem 0;background:#F8F7FF;border-top:1px solid #E2E8F0;border-bottom:1px solid #E2E8F0;position:relative;overflow:hidden;">
  <div style="position:absolute;top:-200px;left:50%;transform:translateX(-50%);width:600px;height:400px;background:radial-gradient(circle,rgba(124,58,237,.02),transparent 70%);pointer-events:none;"></div>

  <div style="max-width:860px;margin:0 auto;padding:0 1.5rem;position:relative;z-index:1;">

    <div style="text-align:center;margin-bottom:4.5rem;">
      <div style="display:inline-flex;align-items:center;gap:.55rem;padding:.35rem 1.1rem;border-radius:999px;font-size:.72rem;font-weight:800;letter-spacing:.14em;text-transform:uppercase;color:#7C3AED;background:rgba(124,58,237,.06);border:1px solid rgba(124,58,237,.15);margin-bottom:1.25rem;">
        FAQ
      </div>
      <h2 style="font-family:var(--font-display);font-size:clamp(1.85rem,3vw,2.6rem);font-weight:900;color:#0F172A;letter-spacing:-.03em;margin:0;">Frequently Asked Questions</h2>
    </div>

    <div style="display:flex;flex-direction:column;">
      <?php
      $faqs = [
        ['q' => 'Can I connect my security to smart home devices?', 'a' => 'Yes. Locks, lights, thermostats, and cameras can all tie into your main security system and be controlled from one place.'],
        ['q' => 'What is smart home integration?',               'a' => 'It is when your devices communicate and work together. For example, arming your security system can automatically lock your doors and turn off your lights.'],
        ['q' => 'Does smart home integration need a hub?',       'a' => 'Yes. A central hub or panel coordinates the devices so they speak the same language and do not require multiple different apps.'],
        ['q' => 'Can security and lights work together?',         'a' => 'Yes. You can set rules so that if a camera detects motion at night, the outdoor floodlights immediately turn on to deter intruders.'],
      ];
      foreach ($faqs as $faq): ?>
        <div class="faq-accordion-item">
          <button class="faq-trigger" onclick="var b=this; var item=b.closest('.faq-accordion-item'); var wrap=b.nextElementSibling; var isOpen=wrap.style.maxHeight !== '0px' && wrap.style.maxHeight !== ''; wrap.style.maxHeight=isOpen?'0px':wrap.scrollHeight+'px'; wrap.style.opacity=isOpen?'0':'1'; item.style.background=isOpen?'rgba(15,23,42,.02)':'rgba(15,23,42,.04)'; item.style.borderColor=isOpen?'rgba(15,23,42,.06)':'rgba(124,58,237,.3)'; b.querySelector('.faq-icon-box').style.transform=isOpen?'rotate(0deg)':'rotate(45deg)';" aria-expanded="false">
            <span style="font-size:1.08rem;font-weight:700;color:#0F172A;letter-spacing:-.01em;line-height:1.4;"><?= $faq['q'] ?></span>
            <span class="faq-icon-box">
              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="3.5" stroke-linecap="round">
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </span>
          </button>
          <div class="faq-answer-wrapper">
            <p class="faq-answer-content"><?= $faq['a'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ══ SECTION 7: FINAL CALL TO ACTION ══ -->
<section style="padding:5rem 0;background-color:#FFFFFF;position:relative;overflow:hidden;">
  <div style="max-width:1200px;margin:0 auto;padding:0 1.5rem;position:relative;z-index:1;">

    <div style="position:relative;background:linear-gradient(135deg,rgba(30,11,62,.95) 0%,rgba(13,21,71,.95) 100%);border-radius:24px;padding:3rem 2.5rem;text-align:center;overflow:hidden;border:1px solid rgba(124,58,237,.3);box-shadow:0 20px 48px rgba(0,0,0,.12);backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);">

      <!-- Glowing Orbs inside the card -->
      <div style="position:absolute;top:-20%;left:-10%;width:400px;height:400px;background:radial-gradient(circle,rgba(124,58,237,.4),transparent 70%);border-radius:50%;filter:blur(60px);pointer-events:none;"></div>
      <div style="position:absolute;bottom:-20%;right:-10%;width:400px;height:400px;background:radial-gradient(circle,rgba(59,130,246,.3),transparent 70%);border-radius:50%;filter:blur(60px);pointer-events:none;"></div>

      <div style="position:relative;z-index:2;max-width:700px;margin:0 auto;">

        <span style="display:inline-block;font-size:.75rem;font-weight:800;letter-spacing:.15em;text-transform:uppercase;color:#A78BFA;margin-bottom:1.5rem;">Security and smart home, working as one</span>
        <h2 style="font-family:var(--font-display);font-size:clamp(1.8rem,4vw,2.5rem);font-weight:900;color:#fff;letter-spacing:-.03em;line-height:1.2;margin:0 0 2.5rem;">Talk to an advisor to build a system where security and convenience work together.</h2>

        <div style="display:flex;flex-wrap:wrap;gap:1.25rem;justify-content:center;align-items:center;">
          <a href="tel:<?= PHONE_TEL ?>" class="btn btn-primary btn-lg" style="background:linear-gradient(135deg,#7C3AED,#4F46E5);border:none;box-shadow:0 16px 40px rgba(124,58,237,.35);border-radius:16px;padding:1.15rem 2.25rem;display:inline-flex;gap:1rem;align-items:center;transition:all .3s ease;color:#fff;font-weight:800;text-decoration:none;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 20px 50px rgba(124,58,237,.5)';" onmouseout="this.style.transform='none';this.style.boxShadow='0 16px 40px rgba(124,58,237,.35)';">
            <div style="width:34px;height:34px;border-radius:50%;background:rgba(255,255,255,.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;"><i class="fas fa-phone" style="font-size:.85rem"></i></div>
            Call now: <?= PHONE_DISPLAY ?>
          </a>
          <a href="<?= url('contact') ?>" class="btn btn-outline btn-lg" style="border-radius:16px;padding:1.15rem 2.25rem;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.15);color:#fff;display:inline-flex;gap:1rem;align-items:center;transition:all .3s ease;font-weight:800;text-decoration:none;" onmouseover="this.style.background='rgba(255,255,255,.1)';this.style.borderColor='rgba(255,255,255,.3)';" onmouseout="this.style.background='rgba(255,255,255,.05)';this.style.borderColor='rgba(255,255,255,.15)';">
            Get a free quote <i class="fas fa-arrow-right" style="font-size:.9rem;color:#A78BFA;"></i>
          </a>
        </div>

      </div>
    </div>
  </div>
</section>

<?php include dirname(__DIR__, 2) . '/includes/footer.php'; ?>