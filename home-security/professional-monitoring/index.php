<?php
require_once dirname(__DIR__, 2) . '/includes/bootstrap.php';
$page_slug  = 'professional-monitoring';
$page_title = '24/7 Home Security Monitoring | ' . SITE_NAME;
$page_desc  = 'Independent advice on 24/7 professional home security monitoring, plus a vetted provider to set it up. Trained staff respond to alarms day and night. Free, no-pressure consultation. Call today.';
require_once dirname(__DIR__, 2) . '/includes/head.php';
?>
<?php include dirname(__DIR__, 2) . '/includes/header.php'; ?>

<style>
  @media (max-width: 991px) {
    .page-hero { padding: 8.5rem 0 4.5rem !important; }
    .hero-flex { gap: 2.5rem !important; }
    .hero-left, .hero-right { flex: 1 1 100% !important; max-width: 100% !important; }
    .hero-buttons { flex-direction: column; }
    .hero-buttons a { width: 100%; justify-content: center; }
    .page-sub { margin-bottom: 2rem !important; }
    .hero-checklist { gap: 1.15rem !important; }
    .content-grid-2 { grid-template-columns: 1fr !important; gap: 2rem !important; }
  }
  @media (max-width: 575px) {
    .page-hero { padding: 9.5rem 0 6.5rem !important; }
    .hero-form-card { padding: 1.75rem 1.25rem !important; }
    .page-h { font-size: 2.1rem !important; line-height: 1.15 !important; }
    .hero-flex { gap: 2.5rem !important; }
    .page-sub { font-size: 1.05rem !important; margin-bottom: 2rem !important; }
    .hero-checklist { gap: 1rem !important; }
    .trust-badges { flex-direction: column; align-items: flex-start !important; gap: 0.85rem !important; }
  }
</style>

<!-- PAGE HERO -->
<section class="page-hero" style="background:
    linear-gradient(160deg, rgba(5,20,60,.88) 0%, rgba(10,8,30,.82) 45%, rgba(5,5,15,.92) 100%),
    url('<?= asset('images/home-security-hero-bg.jpg') ?>') center center / cover no-repeat;
  position:relative;overflow:hidden;padding:10rem 0 6rem;">
  
  <!-- Orbs -->
  <div style="position:absolute;top:-80px;left:-80px;width:550px;height:550px;background:radial-gradient(circle,rgba(59,130,246,.28),transparent 65%);pointer-events:none;animation:pulse 7s ease-in-out infinite;"></div>
  <div style="position:absolute;top:10%;right:-120px;width:480px;height:480px;background:radial-gradient(circle,rgba(139,92,246,.18),transparent 65%);pointer-events:none;"></div>
  <div style="position:absolute;bottom:0;left:50%;transform:translateX(-50%);width:900px;height:280px;background:radial-gradient(ellipse,rgba(59,130,246,.12),transparent 70%);pointer-events:none;"></div>

  <div class="page-hero-inner" style="position:relative;z-index:2;max-width:1200px;margin:0 auto;padding:0 1.5rem;text-align:left;">
    <!-- Breadcrumb -->
    <div style="display:flex;align-items:center;gap:.5rem;margin-bottom:2rem;font-size:.85rem;color:rgba(255,255,255,.45);letter-spacing:0.02em;">
      <a href="<?= url('home-security.php') ?>" style="color:rgba(255,255,255,.45);text-decoration:none;transition:color .2s;" onmouseover="this.style.color='rgba(255,255,255,.8)'" onmouseout="this.style.color='rgba(255,255,255,.45)'">Home Security</a>
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="9 18 15 12 9 6"/></svg>
      <span style="color:rgba(255,255,255,.85)">24/7 Professional Monitoring</span>
    </div>

    <div class="hero-flex" style="display:flex;flex-wrap:wrap;justify-content:space-between;gap:4rem;align-items:center;">
      <div class="hero-left" style="flex:1 1 500px;max-width:620px;">
        <span class="label" style="margin-bottom:1.5rem;display:inline-flex;background:linear-gradient(135deg,rgba(139,92,246,.15),rgba(59,130,246,.15));border-color:rgba(139,92,246,.25);"><i class="fas fa-shield-halved" style="color:#A78BFA;font-size:.75rem"></i> Professional Monitoring</span>
        <h1 class="page-h" style="font-size:clamp(2.5rem,8vw,3.8rem);text-align:left;margin-bottom:1.25rem;line-height:1.05;letter-spacing:-0.03em;">24/7 Professional Monitoring,<br><span class="grad">So Someone Always Responds</span></h1>
        <p class="page-sub" style="text-align:left;margin:0 0 2.5rem;max-width:560px;font-size:1.15rem;line-height:1.65;color:rgba(255,255,255,0.8);">An alarm only helps if someone acts on it. With 24/7 professional monitoring, trained staff watch your system around the clock and respond the moment something trips, even when you cannot. Independent advice and a vetted monitoring provider for your home.</p>
        
        <div class="hero-buttons" style="display:flex;flex-wrap:wrap;align-items:stretch;gap:1.25rem;margin-bottom:2rem;">
          <a href="tel:<?= PHONE_TEL ?>" class="btn btn-primary btn-lg" style="display:flex;align-items:center;justify-content:center;font-size:1.05rem;padding:1.15rem 2.25rem;background:linear-gradient(135deg,#7C3AED,#4F46E5);border:1px solid transparent;box-shadow:0 10px 25px rgba(124,58,237,.35);"><i class="fas fa-phone" style="font-size:.85rem;margin-right:8px;"></i> Call now <?= PHONE_DISPLAY ?></a>
          <a href="#quote-form" class="btn btn-outline btn-lg" style="display:flex;align-items:center;justify-content:center;font-size:1.05rem;padding:1.15rem 2.25rem;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.15);backdrop-filter:blur(8px);">Get a free quote</a>
        </div>
        
        <ul class="hero-checklist" style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:1.25rem;">
          <?php foreach(['Trained staff responding to alarms day and night','Police, fire, or medical dispatch when an event is verified','Backup that keeps working in a power or internet outage','Advice matched to your home and how much response you want'] as $item): ?>
          <li style="display:flex;align-items:flex-start;gap:1rem;color:rgba(255,255,255,.9);font-size:1.05rem;line-height:1.5;font-weight:500;">
            <div style="width:26px;height:26px;border-radius:8px;background:rgba(167,139,250,.15);border:1px solid rgba(167,139,250,.3);display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px;">
              <i class="fas fa-check" style="color:#A78BFA;font-size:.7rem;"></i>
            </div>
            <?= $item ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Lead Form -->
      <div class="hero-right" style="flex:0 0 440px;position:relative;">
        <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:120%;height:120%;background:radial-gradient(ellipse,rgba(139,92,246,.25),transparent 60%);pointer-events:none;z-index:0;"></div>
        
        <div id="quote-form" class="hero-form-card" style="position:relative;z-index:1;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.15);border-radius:24px;padding:3rem;box-shadow:0 40px 80px rgba(0,0,0,.6),inset 0 1px 0 rgba(255,255,255,.15);backdrop-filter:blur(30px);-webkit-backdrop-filter:blur(30px);">
          
          <h3 style="font-family:var(--font-display);font-size:1.45rem;font-weight:700;margin:0 0 2rem;line-height:1.35;background:linear-gradient(to right,#fff,rgba(255,255,255,.75));-webkit-background-clip:text;-webkit-text-fill-color:transparent;">Enter your ZIP and phone, and we will check the best options at your address.</h3>
          
          <form action="<?= url('contact.php') ?>" method="get" style="display:flex;flex-direction:column;gap:1.15rem;">
            <input type="text" name="zip" placeholder="ZIP code" required style="width:100%;padding:1.25rem 1.35rem;border-radius:14px;border:1px solid rgba(255,255,255,.15);background:rgba(255,255,255,.08);color:#fff;font-size:1.05rem;font-family:'Space Grotesk',sans-serif;outline:none;transition:all .2s;" onfocus="this.style.borderColor='#A78BFA';this.style.background='rgba(255,255,255,.12)'" onblur="this.style.borderColor='rgba(255,255,255,.15)';this.style.background='rgba(255,255,255,.08)'">
            
            <input type="tel" name="phone" placeholder="Phone" required style="width:100%;padding:1.25rem 1.35rem;border-radius:14px;border:1px solid rgba(255,255,255,.15);background:rgba(255,255,255,.08);color:#fff;font-size:1.05rem;font-family:'Space Grotesk',sans-serif;outline:none;transition:all .2s;" onfocus="this.style.borderColor='#A78BFA';this.style.background='rgba(255,255,255,.12)'" onblur="this.style.borderColor='rgba(255,255,255,.15)';this.style.background='rgba(255,255,255,.08)'">
            
            <input type="text" name="name" placeholder="Name (optional)" style="width:100%;padding:1.25rem 1.35rem;border-radius:14px;border:1px solid rgba(255,255,255,.15);background:rgba(255,255,255,.08);color:#fff;font-size:1.05rem;font-family:'Space Grotesk',sans-serif;outline:none;transition:all .2s;" onfocus="this.style.borderColor='#A78BFA';this.style.background='rgba(255,255,255,.12)'" onblur="this.style.borderColor='rgba(255,255,255,.15)';this.style.background='rgba(255,255,255,.08)'">
            
            <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;padding:1.35rem;font-size:1.15rem;font-weight:600;border-radius:14px;margin-top:1rem;background:linear-gradient(135deg,#8B5CF6,#6D28D9);border:1px solid rgba(167,139,250,.3);box-shadow:0 12px 30px rgba(109,40,217,.4);transition:transform .2s, box-shadow .2s;" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 15px 35px rgba(109,40,217,.5)'" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 12px 30px rgba(109,40,217,.4)'">Get my free quote</button>
          </form>
          
          <div style="display:flex;align-items:center;justify-content:center;gap:.6rem;margin-top:2rem;">
            <i class="fas fa-lock" style="color:rgba(255,255,255,.4);font-size:.8rem;"></i>
            <p style="font-size:.85rem;color:rgba(255,255,255,.6);margin:0;letter-spacing:0.01em;">Secure &amp; confidential. No obligation to purchase.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SHORT TRUST LINE -->
<section style="background:#060414;border-bottom:1px solid rgba(255,255,255,.05);padding:1.5rem 0;">
  <div style="max-width:1200px;margin:0 auto;padding:0 1.5rem;">
    <div class="trust-badges" style="display:flex;flex-wrap:wrap;justify-content:center;align-items:center;gap:2rem;">
      <?php foreach(['Independent advice','Free, no-obligation consultation','Vetted provider network','No cost to compare'] as $t): ?>
      <span style="display:inline-flex;align-items:center;gap:.6rem;font-size:.9rem;font-weight:500;color:rgba(255,255,255,.65);"><i class="fas fa-shield-check" style="color:#8B5CF6;font-size:.85rem;"></i><?= $t ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section style="background:#F8FAFC;padding:4rem 0;border-bottom:1px solid #E2E8F0;">
  <div style="max-width:1200px;margin:0 auto;padding:0 1.5rem;text-align:center;">
    <p style="font-size:1.15rem;color:#334155;max-width:900px;margin:0 auto;line-height:1.6;font-weight:500;">Brocus is an independent advisor, not a monitoring company. We compare monitoring options across a vetted provider network and recommend the level of response that fits your home, not the most expensive plan.</p>
  </div>
</section>

<!-- SEO DEPTH ZONE -->
<section style="padding:6rem 0;background:#fff;">
  <div style="max-width:860px;margin:0 auto;padding:0 1.5rem;">
    
    <div style="margin-bottom:4rem;">
      <h2 style="font-family:var(--font-display);font-size:2rem;font-weight:700;color:#0F172A;margin:0 0 1.25rem;">What 24/7 monitoring actually means</h2>
      <p style="font-size:1.1rem;color:#334155;line-height:1.75;margin:0 0 1.5rem;">When a sensor trips, the signal goes to a monitoring center that is staffed around the clock. Trained operators confirm the event and, if it is real, contact you and dispatch police, fire, or medical help. It is the difference between an alarm that only makes noise and one that brings a response.</p>
    </div>

    <div style="margin-bottom:4rem;">
      <h2 style="font-family:var(--font-display);font-size:2rem;font-weight:700;color:#0F172A;margin:0 0 1.25rem;">Why monitoring is worth it</h2>
      <p style="font-size:1.1rem;color:#334155;line-height:1.75;margin:0 0 1.5rem;">Independent research backs this up. In a <a href="https://inside.charlotte.edu/news-features/2013-05-15/through-eyes-burglar-study-provides-insights-habits-and-motivations/" rel="nofollow" target="_blank" style="color:#4F46E5;text-decoration:underline;text-underline-offset:2px;">University of North Carolina at Charlotte study</a> of more than 400 burglars, around 60 percent said they would avoid a home with a visible alarm or security system and move to another target.</p>
      <p style="font-size:1.1rem;color:#334155;line-height:1.75;margin:0;">A separate <a href="https://www.rutgers.edu/news/rutgers-study-finds-alarm-systems-are-valuable-crime-fighting-tool" rel="nofollow" target="_blank" style="color:#4F46E5;text-decoration:underline;text-underline-offset:2px;">Rutgers University study</a> of five years of police data found that homes with alarm systems were less likely to be burgled, with the benefit even reaching the surrounding neighborhood. Monitoring is what turns that deterrent into an actual response the moment an alarm goes off.</p>
    </div>

    <div style="margin-bottom:4rem;background:#F1F5F9;border:1px solid #E2E8F0;border-radius:16px;padding:2.5rem;">
      <h2 style="font-family:var(--font-display);font-size:1.75rem;font-weight:700;color:#0F172A;margin:0 0 1rem;">Monitored or self-monitored?</h2>
      <p style="font-size:1.05rem;color:#334155;line-height:1.7;margin:0 0 1.25rem;">This is the core choice. Self-monitored means alerts come to your phone and the response is up to you. Professionally monitored means trained staff respond and can dispatch help even when your phone is away or silenced.</p>
      <p style="font-size:1.05rem;color:#334155;line-height:1.7;margin:0;">We help you weigh which suits your home and your routine.</p>
    </div>

    <div style="margin-bottom:4rem;">
      <h2 style="font-family:var(--font-display);font-size:2rem;font-weight:700;color:#0F172A;margin:0 0 1.5rem;">What to look for in a monitoring service</h2>
      <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:1.5rem;">
        <li style="display:flex;gap:1rem;align-items:flex-start;">
          <div style="width:40px;height:40px;background:rgba(59,130,246,.1);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:#3B82F6;"><i class="fas fa-headset"></i></div>
          <div>
            <h3 style="font-size:1.15rem;font-weight:700;color:#0F172A;margin:0 0 .25rem;">A staffed, round-the-clock center</h3>
            <p style="font-size:1.05rem;color:#334155;margin:0;line-height:1.6;">Real people watching at three in the morning, not just an app alert.</p>
          </div>
        </li>
        <li style="display:flex;gap:1rem;align-items:flex-start;">
          <div style="width:40px;height:40px;background:rgba(139,92,246,.1);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:#8B5CF6;"><i class="fas fa-signal"></i></div>
          <div>
            <h3 style="font-size:1.15rem;font-weight:700;color:#0F172A;margin:0 0 .25rem;">Cellular backup signaling</h3>
            <p style="font-size:1.05rem;color:#334155;margin:0;line-height:1.6;">So the connection to the center survives a power or internet cut.</p>
          </div>
        </li>
        <li style="display:flex;gap:1rem;align-items:flex-start;">
          <div style="width:40px;height:40px;background:rgba(16,185,129,.1);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:#10B981;"><i class="fas fa-bolt"></i></div>
          <div>
            <h3 style="font-size:1.15rem;font-weight:700;color:#0F172A;margin:0 0 .25rem;">Fast, verified response</h3>
            <p style="font-size:1.05rem;color:#334155;margin:0;line-height:1.6;">Quick confirmation and dispatch, with steps to reduce false alarms.</p>
          </div>
        </li>
        <li style="display:flex;gap:1rem;align-items:flex-start;">
          <div style="width:40px;height:40px;background:rgba(245,158,11,.1);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:#F59E0B;"><i class="fas fa-mobile-alt"></i></div>
          <div>
            <h3 style="font-size:1.15rem;font-weight:700;color:#0F172A;margin:0 0 .25rem;">Mobile alerts alongside</h3>
            <p style="font-size:1.05rem;color:#334155;margin:0;line-height:1.6;">You stay informed while the center handles the response.</p>
          </div>
        </li>
        <li style="display:flex;gap:1rem;align-items:flex-start;">
          <div style="width:40px;height:40px;background:rgba(239,68,68,.1);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:#EF4444;"><i class="fas fa-file-contract"></i></div>
          <div>
            <h3 style="font-size:1.15rem;font-weight:700;color:#0F172A;margin:0 0 .25rem;">Clear contract terms</h3>
            <p style="font-size:1.05rem;color:#334155;margin:0;line-height:1.6;">Know the length, the cancellation terms, and what is included before you sign.</p>
          </div>
        </li>
      </ul>
    </div>

    <div class="content-grid-2" style="display:grid;grid-template-columns:1fr 1fr;gap:2rem;margin-bottom:4rem;">
      <div>
        <h2 style="font-family:var(--font-display);font-size:1.75rem;font-weight:700;color:#0F172A;margin:0 0 1rem;">When self-monitoring is enough</h2>
        <p style="font-size:1.05rem;color:#334155;line-height:1.7;margin:0;">For a low-risk home, or a single camera or doorbell, app alerts on your phone may be all you need. We will tell you honestly when paying for full monitoring is not worth it for your situation.</p>
      </div>
      <div>
        <h2 style="font-family:var(--font-display);font-size:1.75rem;font-weight:700;color:#0F172A;margin:0 0 1rem;">How monitoring fits your system</h2>
        <p style="font-size:1.05rem;color:#334155;line-height:1.7;margin:0;">Monitoring is the response layer that sits on top of your sensors, cameras, and panel. The hardware detects, and monitoring acts. One without the other leaves a gap.</p>
      </div>
    </div>

    <div style="margin-bottom:4rem;">
      <h2 style="font-family:var(--font-display);font-size:2rem;font-weight:700;color:#0F172A;margin:0 0 1.25rem;">What it costs</h2>
      <p style="font-size:1.1rem;color:#334155;line-height:1.75;margin:0 0 1.5rem;">Monitoring is a monthly service rather than a one-time purchase, and the price moves with the level of response you choose and the provider. We will give you clear figures for the level that fits, with nothing owed for the advice.</p>
      <div style="background:rgba(124,58,237,.05);border:1px solid rgba(124,58,237,.15);border-radius:12px;padding:2rem;text-align:center;">
        <h3 style="font-family:var(--font-display);font-size:1.4rem;font-weight:700;color:#5B21B6;margin:0 0 .5rem;">Get the right level of response</h3>
        <p style="font-size:1.1rem;color:#334155;margin:0 0 1.5rem;">Call us today for a free assessment of your home.</p>
        <a href="tel:<?= PHONE_TEL ?>" class="btn btn-primary btn-lg" style="font-size:1.05rem;padding:1rem 2rem;"><i class="fas fa-phone"></i> Call <?= PHONE_DISPLAY ?></a>
      </div>
    </div>

  </div>
</section>

<!-- COMMON QUESTIONS -->
<section style="padding:6rem 0;background:#F8FAFC;border-top:1px solid #E2E8F0;">
  <div style="max-width:860px;margin:0 auto;padding:0 1.5rem;">
    <div style="text-align:center;margin-bottom:3rem;">
      <h2 style="font-family:var(--font-display);font-size:clamp(1.5rem,3vw,2.2rem);font-weight:700;color:#0F172A;margin:0;">Frequently asked questions</h2>
    </div>
    <?php
    $faqs = [
      ['q'=>'What is professional alarm monitoring?','a'=>'A staffed center watches your system 24/7 and responds to alarms, contacting you and dispatching help when needed.'],
      ['q'=>'Is 24/7 monitoring worth it?','a'=>'For most homes, yes, because it turns an alert into a real response when you cannot act yourself.'],
      ['q'=>'How does alarm monitoring work?','a'=>'A tripped sensor sends a signal to the monitoring center, where trained staff verify it and dispatch police, fire, or medical help.'],
      ['q'=>'Does monitoring work if the internet goes down?','a'=>'A properly set up system uses cellular backup so monitoring stays connected during an outage.'],
    ];
    foreach($faqs as $i=>$faq): ?>
    <div style="border-bottom:1px solid #E2E8F0;<?= $i===0 ? 'border-top:1px solid #E2E8F0;' : '' ?>">
      <button onclick="var b=this;var p=b.nextElementSibling;var open=p.style.maxHeight!=='0px'&&p.style.maxHeight!=='';p.style.maxHeight=open?'0px':p.scrollHeight+'px';p.style.opacity=open?'0':'1';b.querySelector('.faq-icon').style.transform=open?'rotate(0deg)':'rotate(45deg)'"
        style="width:100%;display:flex;justify-content:space-between;align-items:center;gap:1rem;padding:1.5rem 0;background:none;border:none;cursor:pointer;text-align:left;font-family:'Space Grotesk',system-ui,sans-serif;">
        <span style="font-size:1.1rem;font-weight:600;color:#0F172A;"><?= $faq['q'] ?></span>
        <span class="faq-icon" style="width:26px;height:26px;border-radius:50%;background:rgba(124,58,237,.1);display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:transform .25s,background .2s;">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="3" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        </span>
      </button>
      <div style="max-height:0;overflow:hidden;transition:max-height .35s cubic-bezier(.4,0,.2,1),opacity .3s;opacity:0;">
        <p style="font-size:1.05rem;color:#475569;line-height:1.7;padding-bottom:1.5rem;margin:0;"><?= $faq['a'] ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- END OF PAGE CTA -->
<section style="padding:6rem 0;background:linear-gradient(135deg,#0A0518 0%,#0E0B2A 50%,#060414 100%);position:relative;overflow:hidden;">
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse at 50% 50%,rgba(59,130,246,.15),transparent 70%);pointer-events:none;"></div>
  <div style="max-width:680px;margin:0 auto;padding:0 1.5rem;text-align:center;position:relative;z-index:1;">
    <div style="width:64px;height:64px;border-radius:20px;background:rgba(59,130,246,.15);border:1px solid rgba(59,130,246,.25);display:flex;align-items:center;justify-content:center;margin:0 auto 1.5rem;">
      <i class="fas fa-shield-halved" style="color:#60A5FA;font-size:1.8rem;"></i>
    </div>
    <h2 style="font-family:var(--font-display);font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:#fff;margin:0 0 1rem;line-height:1.25;">Always someone watching</h2>
    <p style="color:rgba(255,255,255,.6);font-size:1.15rem;line-height:1.7;margin:0 0 2.5rem;">Talk to an advisor and set up monitoring that responds the moment your alarm goes off.</p>
    <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;">
      <a href="tel:<?= PHONE_TEL ?>" class="btn btn-primary btn-lg" style="font-size:1.1rem;padding:1.1rem 2.5rem;"><i class="fas fa-phone" style="font-size:.9rem"></i> Call now: <?= PHONE_DISPLAY ?></a>
      <a href="<?= url('contact.php') ?>" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,.25);color:rgba(255,255,255,.85);font-size:1.1rem;padding:1.1rem 2.5rem;">Get a free quote</a>
    </div>
  </div>
</section>

<?php include dirname(__DIR__, 2) . '/includes/footer.php'; ?>
