<?php
$page_title='Services | Brocussolutionsusa';
$page_desc='Cloud architecture, AI integration, cybersecurity, digital transformation, custom development, and data analytics — powered by Brocussolutionsusa.';
require_once __DIR__ . '/includes/bootstrap.php';
require_once __DIR__ . '/includes/head.php';
?>
<?php include 'includes/header.php'; ?>

<section class="page-hero">
  <div class="page-hero-inner">
    <span class="label">What We Do</span>
    <h1 class="page-h">Six ways we help your<br>business <span class="grad">move faster</span></h1>
    <p class="page-sub">From cloud infrastructure to AI-powered products — end-to-end technology services that turn complexity into competitive advantage.</p>
  </div>
</section>

<!-- Services grid -->
<section style="padding:3rem 0 7rem">
  <div class="services-grid">
    <?php
    $svcs=[
      ['id'=>'cloud','icon'=>'fa-cloud','bg'=>'rgba(139,92,246,.15)','ic'=>'#A78BFA','ac'=>'#A78BFA','t'=>'Cloud Architecture','d'=>'Design and deploy resilient, scalable multi-cloud infrastructures on AWS, GCP, and Azure. We handle migrations, auto-scaling, cost optimisation, and disaster recovery — so your infrastructure never holds you back.','tags'=>['AWS','GCP','Azure','Kubernetes','Terraform']],
      ['id'=>'ai','icon'=>'fa-brain','bg'=>'rgba(99,102,241,.15)','ic'=>'#818CF8','ac'=>'#818CF8','t'=>'AI & ML Integration','d'=>'Embed intelligent automation, predictive analytics, and LLM-powered workflows into your existing systems. From fine-tuning foundation models to building custom ML pipelines that process millions of events in real time.','tags'=>['OpenAI','TensorFlow','PyTorch','MLflow','Ray']],
      ['id'=>'security','icon'=>'fa-shield-halved','bg'=>'rgba(6,182,212,.15)','ic'=>'#67E8F9','ac'=>'#67E8F9','t'=>'Cybersecurity','d'=>'Comprehensive security audits, zero-trust architecture design, threat modelling, penetration testing, and 24/7 SOC monitoring. We find the gaps before the bad actors do.','tags'=>['SOC2','ISO 27001','Zero Trust','SIEM','Pen Testing']],
      ['id'=>'transform','icon'=>'fa-rotate','bg'=>'rgba(245,158,11,.15)','ic'=>'#FCD34D','ac'=>'#FCD34D','t'=>'Digital Transformation','d'=>'End-to-end roadmap planning and execution to modernise legacy systems. We translate business goals into technical strategy — and then execute with precision, on time, on budget.','tags'=>['Agile','DevOps','CI/CD','Microservices','API-first']],
      ['id'=>'dev','icon'=>'fa-code','bg'=>'rgba(16,185,129,.15)','ic'=>'#6EE7B7','ac'=>'#6EE7B7','t'=>'Custom Software Dev','d'=>'Full-stack product engineering from MVP to production-grade. React, Next.js, Node, Python, Go — we pick the right tool for the job and ship products that scale with your business.','tags'=>['React','Next.js','Node.js','Python','PostgreSQL']],
      ['id'=>'data','icon'=>'fa-chart-line','bg'=>'rgba(239,68,68,.15)','ic'=>'#FCA5A5','ac'=>'#FCA5A5','t'=>'Data & Analytics','d'=>'Transform raw data into strategic insight. Real-time dashboards, ETL pipelines, data warehouses, and BI platforms that give your team the visibility to make better decisions, faster.','tags'=>['Snowflake','dbt','Looker','Kafka','Spark']],
    ];
    foreach($svcs as $s): ?>
    <div class="svc-card" id="<?= $s['id'] ?>">
      <div class="svc-icon" style="background:<?= $s['bg'] ?>;color:<?= $s['ic'] ?>"><i class="fas <?= $s['icon'] ?>"></i></div>
      <h2 class="svc-title"><?= $s['t'] ?></h2>
      <p class="svc-desc"><?= $s['d'] ?></p>
      <div style="display:flex;flex-wrap:wrap;gap:.4rem;margin-bottom:1.5rem">
        <?php foreach($s['tags'] as $tag): ?>
        <span style="font-size:.7rem;padding:.2rem .6rem;border-radius:6px;background:rgba(255,255,255,.06);color:rgba(255,255,255,.55);font-weight:500"><?= $tag ?></span>
        <?php endforeach; ?>
      </div>
      <a href="contact" class="svc-link" style="color:<?= $s['ac'] ?>">Get started <i class="fas fa-arrow-right" style="font-size:.7rem"></i></a>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA -->
<section style="padding:5rem 0 7rem;text-align:center;background:linear-gradient(180deg,transparent,rgba(109,40,217,.08),transparent)">
  <div style="max-width:600px;margin:0 auto;padding:0 1.5rem">
    <span class="label" style="display:inline-flex;margin-bottom:1.25rem">Ready to start?</span>
    <h2 style="font-size:clamp(1.75rem,3.5vw,2.75rem);font-weight:900;letter-spacing:-.03em;margin-bottom:1rem">Not sure which service<br>is right for you?</h2>
    <p style="color:rgba(255,255,255,.6);font-size:1rem;line-height:1.75;margin-bottom:2rem">Book a free 30-minute discovery call. We&rsquo;ll assess your situation and recommend the right approach — no commitment required.</p>
    <a href="contact" class="btn btn-primary btn-lg">Book a Free Call <i class="fas fa-arrow-right"></i></a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
