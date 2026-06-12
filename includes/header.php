<?php
/** Dynamic header — reads all values from config. Never edit this for content. */
$_nav   = unserialize(NAV_ITEMS);
$_cur   = currentPage();
?>

<!-- ── MAIN NAV ── -->
<header id="site-header">
  <!-- Mobile Top Call Strip -->
  <div class="sh-mobile-call-strip">
    <a href="tel:<?= PHONE_TEL ?>">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.13.87.35 1.71.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      Call now: <?= PHONE_DISPLAY ?>
    </a>
  </div>
  <div class="nav-inner">

    <!-- Logo -->
    <a href="<?= url('') ?>" class="sh-logo" aria-label="<?= SITE_NAME ?> home">
      <img src="<?= asset('images/brocus-new-logo.png') ?>" alt="<?= SITE_NAME ?> Logo" class="logo-transparent" style="height:49px;width:auto;object-fit:contain">
      <img src="<?= asset('images/brocus-new-logo.png') ?>" alt="<?= SITE_NAME ?> Logo" class="logo-scrolled" style="height:49px;width:auto;object-fit:contain;display:none;">
    </a>

    <!-- Nav links (centered) -->
    <nav class="sh-nav" aria-label="Primary">
      <?php foreach ($_nav as $item): ?>
      <a href="<?= url($item['href']) ?>"
         class="sh-link <?= activeClass($item['slug']) ?>"
         <?= $_cur === $item['slug'] ? 'aria-current="page"' : '' ?>>
        <?= htmlspecialchars($item['label']) ?>
      </a>
      <?php endforeach; ?>
    </nav>

    <!-- Right: single Call Now button -->
    <div class="sh-actions">
      <a href="tel:<?= PHONE_TEL ?>" class="sh-cta-pill">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.13.87.35 1.71.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        Call now: <?= PHONE_DISPLAY ?>
      </a>
      <!-- Burger (mobile only) -->
      <button class="sh-burger" id="sh-burger"
              aria-label="Open navigation menu"
              aria-expanded="false"
              aria-controls="sh-mobile-menu">
        <svg class="icon-menu" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        <svg class="icon-close" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
  </div>

  <!-- Mobile drawer -->
  <div class="sh-mobile-menu" id="sh-mobile-menu" role="dialog" aria-label="Navigation menu">
    <nav>
      <?php foreach ($_nav as $item): ?>
      <a href="<?= url($item['href']) ?>"><?= htmlspecialchars($item['label']) ?></a>
      <?php endforeach; ?>
    </nav>
    <div class="sh-mobile-footer">
      <a href="tel:<?= PHONE_TEL ?>" class="sh-mobile-cta">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.13.87.35 1.71.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        Call now: <?= PHONE_DISPLAY ?>
      </a>
    </div>
  </div>
</header>

<style>
/* ── Header ── */
#site-header{position:sticky;top:0;z-index:200;background:transparent;transition:background .35s,border-color .35s,backdrop-filter .35s,box-shadow .35s;border-bottom:1px solid transparent}
#site-header.scrolled{background:#161d39;backdrop-filter:blur(24px) saturate(180%);-webkit-backdrop-filter:blur(24px) saturate(180%);border-bottom-color:rgba(255,255,255,.15);box-shadow:0 10px 30px rgba(0,0,0,.1)}
#site-header.scrolled .logo-transparent{display:none !important}
#site-header.scrolled .logo-scrolled{display:block !important}

/* Layout: logo | [nav centered] | button */
.nav-inner{display:grid;grid-template-columns:auto 1fr auto;align-items:center;max-width:1200px;margin:0 auto;padding:0 24px;height:68px}

/* Logo */
.sh-logo{display:flex;align-items:center;text-decoration:none;flex-shrink:0}
.sh-logo img{transition:filter .3s}

/* Nav — centered within its grid cell */
.sh-nav{display:flex;align-items:center;justify-content:center;gap:28px}
.sh-link{font-size:15px;font-weight:500;color:#fff;text-decoration:none;letter-spacing:0.01em;transition:color 0.2s,opacity 0.2s;white-space:nowrap}
.sh-link:hover{opacity:0.8}
.sh-link--active{font-weight:700;opacity:1}

/* Right actions */
.sh-actions{display:flex;align-items:center;gap:12px;flex-shrink:0}

/* Single CTA pill */
.sh-cta-pill{display:inline-flex;align-items:center;gap:7px;padding:8px 18px;background:#8B5CF6;color:#fff;border-radius:999px;font-size:13.5px;font-weight:600;text-decoration:none;white-space:nowrap;transition:background .2s,transform .1s;box-shadow:0 4px 16px rgba(139,92,246,.35)}
.sh-cta-pill:hover{background:#7C3AED;transform:translateY(-1px)}
#site-header.scrolled .sh-cta-pill{background:#fff;color:#7C3AED;box-shadow:0 4px 16px rgba(0,0,0,.15)}
#site-header.scrolled .sh-cta-pill:hover{background:rgba(255,255,255,.9)}

/* Burger */
.sh-burger{display:none;align-items:center;justify-content:center;width:36px;height:36px;border-radius:8px;background:rgba(167,139,250,.12);border:1px solid rgba(167,139,250,.3);color:#A78BFA;cursor:pointer;transition:all .18s;flex-shrink:0}
.sh-burger:hover{background:rgba(167,139,250,.22);border-color:#A78BFA}
#site-header.scrolled .sh-burger{color:#fff;background:rgba(255,255,255,.15);border-color:rgba(255,255,255,.35)}
.sh-burger .icon-close{display:none}
.sh-burger.open .icon-menu{display:none}
.sh-burger.open .icon-close{display:block}

/* Mobile drawer */
.sh-mobile-menu{display:none;position:absolute;top:100%;left:0;width:100%;height:calc(100vh - 56px);background:#171e3c;backdrop-filter:blur(40px) saturate(180%);-webkit-backdrop-filter:blur(40px) saturate(180%);border-top:1px solid rgba(124,58,237,.2);padding:1.5rem 1.25rem 3rem;flex-direction:column;animation:fadeBg .25s ease-out forwards;overflow-y:auto}
@keyframes fadeBg{from{opacity:0}to{opacity:1}}
.sh-mobile-menu.open{display:flex}
.sh-mobile-menu nav{display:flex;flex-direction:column;gap:0.5rem;flex:1}
.sh-mobile-menu nav a{display:flex;justify-content:space-between;align-items:center;padding:1.25rem 1rem;font-size:1.15rem;font-weight:600;color:rgba(255,255,255,.9);border-bottom:1px solid rgba(255,255,255,.05);text-decoration:none;transition:all .2s;border-radius:10px;animation:slideRight .4s cubic-bezier(.16,1,.3,1) both}
.sh-mobile-menu nav a:nth-child(1){animation-delay:.05s}
.sh-mobile-menu nav a:nth-child(2){animation-delay:.1s}
.sh-mobile-menu nav a:nth-child(3){animation-delay:.15s}
.sh-mobile-menu nav a:nth-child(4){animation-delay:.2s}
@keyframes slideRight{from{opacity:0;transform:translateX(-20px)}to{opacity:1;transform:translateX(0)}}
.sh-mobile-menu nav a::after{content:'→';font-family:system-ui;opacity:0;transform:translateX(-8px);transition:all .2s;color:#A78BFA;font-weight:600}
.sh-mobile-menu nav a:last-child{border-bottom:none}
.sh-mobile-menu nav a:hover{color:#fff;padding-left:1.5rem;background:rgba(255,255,255,.04);border-bottom-color:transparent}
.sh-mobile-menu nav a:hover::after{opacity:1;transform:translateX(0)}
.sh-mobile-footer{margin-top:auto;padding-top:2rem;border-top:1px solid rgba(124,58,237,.2);animation:fadeUpFooter .5s cubic-bezier(.16,1,.3,1) .3s both}
@keyframes fadeUpFooter{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
.sh-mobile-cta{display:flex;align-items:center;justify-content:center;gap:.75rem;padding:1rem;border-radius:14px;background:linear-gradient(135deg,#7C3AED,#4F46E5);color:#fff;font-weight:600;text-decoration:none;font-size:1.05rem;box-shadow:0 8px 24px rgba(124,58,237,.35);transition:all .2s}
.sh-mobile-cta:active{transform:translateY(2px);box-shadow:0 4px 12px rgba(124,58,237,.35)}

/* Mobile Call Strip */
.sh-mobile-call-strip{display:none;background:linear-gradient(135deg,#7C3AED,#4F46E5);text-align:center;padding:8px 15px;}
.sh-mobile-call-strip a{color:#fff;font-size:14px;font-weight:600;text-decoration:none;display:flex;align-items:center;justify-content:center;gap:8px;}

/* Responsive breakpoints */
@media(max-width:900px){
  .sh-mobile-call-strip{display:block;}
  .sh-nav,.sh-cta-pill{display:none !important}
  .sh-burger{display:flex !important}
  .nav-inner{display:flex !important;justify-content:space-between;height:56px !important;padding:0 1.25rem !important}
  .sh-logo img{height:50px !important}
}
@media(max-width:480px){
  .nav-inner{padding:0 1rem !important}
  .sh-logo img{height:44px !important}
}
@media(max-width:380px){
  .nav-inner{padding:0 .875rem !important}
  .sh-logo img{height:40px !important}
}
</style>

<script>
(function(){
  var hdr=document.getElementById('site-header');
  var btn=document.getElementById('sh-burger');
  var menu=document.getElementById('sh-mobile-menu');
  window.addEventListener('scroll',function(){hdr.classList.toggle('scrolled',window.scrollY>10)},{passive:true});
  if(btn&&menu){
    btn.addEventListener('click',function(){var o=menu.classList.toggle('open');btn.classList.toggle('open',o);btn.setAttribute('aria-expanded',String(o))});
    document.addEventListener('click',function(e){if(!hdr.contains(e.target)&&!btn.contains(e.target)){menu.classList.remove('open');btn.classList.remove('open');btn.setAttribute('aria-expanded','false')}},{passive:true});
    document.addEventListener('keydown',function(e){if(e.key==='Escape'){menu.classList.remove('open');btn.classList.remove('open');btn.setAttribute('aria-expanded','false')}});
  }
})();
</script>
