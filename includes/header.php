<?php

/** Dynamic header — reads all values from config. Never edit this for content. */
$_nav   = unserialize(NAV_ITEMS);
$_cur   = currentPage();
?>

<!-- ── SCROLL PROGRESS BAR ── -->
<div id="sh-progress-bar" aria-hidden="true"></div>

<!-- ── MAIN NAV ── -->
<header id="site-header">
  <!-- Mobile Top Call Strip -->
  <div class="sh-mobile-call-strip">
    <a href="tel:<?= PHONE_TEL ?>">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.13.87.35 1.71.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
      </svg>
      <span>Call us free:</span> <strong><?= PHONE_DISPLAY ?></strong>
    </a>
  </div>

  <div class="nav-inner">
    <!-- Logo -->
    <a href="<?= url('index.php') ?>" class="sh-logo" aria-label="<?= SITE_NAME ?> home">
      <img src="<?= asset('images/brocus-new-logo.png') ?>?v=2" alt="<?= SITE_NAME ?> Logo" class="logo-transparent" style="max-height: 60px; width: auto;">
      <img src="<?= asset('images/brocus-new-logo.png') ?>?v=2" alt="<?= SITE_NAME ?> Logo" class="logo-scrolled" style="max-height: 60px; width: auto;">
    </a>

    <!-- Nav links (desktop) -->
    <nav class="sh-nav" aria-label="Primary">
      <?php foreach ($_nav as $item):
        $hasDropdown = !empty($item['dropdown']) && (!empty($item['dropdown']['products']) || !empty($item['dropdown']['services']));
      ?>
        <?php if ($hasDropdown): ?>
          <div class="sh-dropdown-wrap">
            <a href="<?= url($item['href']) ?>"
              class="sh-link <?= activeClass($item['slug']) ?> sh-has-dropdown"
              <?= $_cur === $item['slug'] ? 'aria-current="page"' : '' ?>
              aria-haspopup="true" aria-expanded="false">
              <?= htmlspecialchars($item['label']) ?>
              <svg class="sh-chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <polyline points="6 9 12 15 18 9" />
              </svg>
              <span class="sh-link-underline"></span>
            </a>
            <!-- Mega Dropdown -->
            <div class="sh-mega" role="menu">
              <div class="sh-mega-card">
                <div class="sh-mega-inner">
                  <!-- Products Column -->
                  <div class="sh-mega-col">
                    <div class="sh-mega-col-header">
                      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                        <rect x="2" y="3" width="7" height="7" rx="1" />
                        <rect x="15" y="3" width="7" height="7" rx="1" />
                        <rect x="2" y="14" width="7" height="7" rx="1" />
                        <rect x="15" y="14" width="7" height="7" rx="1" />
                      </svg>
                      Products
                    </div>
                    <?php if (empty($item['dropdown']['products'])): ?>
                      <div class="sh-mega-coming">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                          <circle cx="12" cy="12" r="10" />
                          <polyline points="12 6 12 12 16 14" />
                        </svg>
                        Coming soon
                      </div>
                    <?php else: ?>
                      <?php foreach ($item['dropdown']['products'] as $child): ?>
                        <a href="<?= url($child['href']) ?>" class="sh-mega-link" role="menuitem">
                          <div class="sh-mega-link-icon"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                              <rect x="2" y="3" width="7" height="7" rx="1" />
                              <rect x="15" y="3" width="7" height="7" rx="1" />
                              <rect x="2" y="14" width="7" height="7" rx="1" />
                              <rect x="15" y="14" width="7" height="7" rx="1" />
                            </svg></div>
                          <div class="sh-mega-link-body">
                            <div class="sh-mega-link-title"><?= htmlspecialchars($child['label']) ?></div>
                            <div class="sh-mega-link-desc"><?= htmlspecialchars($child['desc']) ?></div>
                          </div>
                        </a>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </div>
                  <!-- Divider -->
                  <div class="sh-mega-divider"></div>
                  <!-- Services Column -->
                  <div class="sh-mega-col">
                    <div class="sh-mega-col-header">
                      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                      </svg>
                      Services
                    </div>
                    <?php foreach ($item['dropdown']['services'] as $child): ?>
                      <a href="<?= url($child['href']) ?>" class="sh-mega-link <?= $_cur === $child['slug'] ? 'sh-mega-link--active' : '' ?>" role="menuitem">
                        <div class="sh-mega-link-icon"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                          </svg></div>
                        <div class="sh-mega-link-body">
                          <div class="sh-mega-link-title"><?= htmlspecialchars($child['label']) ?></div>
                          <div class="sh-mega-link-desc"><?= htmlspecialchars($child['desc']) ?></div>
                        </div>
                      </a>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php else: ?>
          <a href="<?= url($item['href']) ?>"
            class="sh-link <?= activeClass($item['slug']) ?>"
            <?= $_cur === $item['slug'] ? 'aria-current="page"' : '' ?>>
            <?= htmlspecialchars($item['label']) ?>
            <span class="sh-link-underline"></span>
          </a>
        <?php endif; ?>
      <?php endforeach; ?>
    </nav>

    <!-- Right actions -->
    <div class="sh-actions">
      <a href="tel:<?= PHONE_TEL ?>" class="sh-cta-pill" id="sh-cta-desktop">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.13.87.35 1.71.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
        </svg>
        <?= PHONE_DISPLAY ?>
      </a>

      <!-- Animated Hamburger (mobile only) -->
      <button class="sh-burger" id="sh-burger"
        aria-label="Open navigation menu"
        aria-expanded="false"
        aria-controls="sh-mobile-menu">
        <span class="burger-bar bar1"></span>
        <span class="burger-bar bar2"></span>
        <span class="burger-bar bar3"></span>
      </button>
    </div>
  </div>

  <!-- Mobile Drawer -->
  <div class="sh-mobile-menu" id="sh-mobile-menu" role="dialog" aria-modal="true" aria-label="Navigation menu">
    <!-- Drawer Header -->
    <div class="sh-drawer-header">
      <img src="<?= asset('images/transparent-logo.png') ?>" alt="<?= SITE_NAME ?>" height="44" width="130">
      <button class="sh-drawer-close" id="sh-drawer-close" aria-label="Close menu">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
          <line x1="18" y1="6" x2="6" y2="18" />
          <line x1="6" y1="6" x2="18" y2="18" />
        </svg>
      </button>
    </div>

    <!-- Nav links -->
    <div class="sh-drawer-section-label">Navigation</div>
    <nav class="sh-drawer-nav" aria-label="Mobile Primary">
      <?php foreach ($_nav as $idx => $item):
        $hasDropdown = !empty($item['dropdown']) && (!empty($item['dropdown']['products']) || !empty($item['dropdown']['services']));
      ?>
        <?php if ($hasDropdown): ?>
          <!-- Parent with accordion -->
          <div class="sh-drawer-accordion" style="--i:<?= $idx ?>">
            <button class="sh-drawer-link sh-drawer-parent" aria-expanded="false">
              <span><?= htmlspecialchars($item['label']) ?></span>
              <svg class="sh-acc-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </button>
            <div class="sh-drawer-sub" hidden>
              <!-- Products -->
              <div class="sh-drawer-sub-label">Products</div>
              <?php if (empty($item['dropdown']['products'])): ?>
                <div class="sh-drawer-sub-coming">Coming soon</div>
              <?php else: ?>
                <?php foreach ($item['dropdown']['products'] as $child): ?>
                  <a href="<?= url($child['href']) ?>" class="sh-drawer-sub-link"><?= htmlspecialchars($child['label']) ?></a>
                <?php endforeach; ?>
              <?php endif; ?>
              <!-- Services -->
              <div class="sh-drawer-sub-label" style="margin-top:.75rem">Services</div>
              <?php foreach ($item['dropdown']['services'] as $child): ?>
                <a href="<?= url($child['href']) ?>" class="sh-drawer-sub-link <?= $_cur === $child['slug'] ? 'sh-drawer-sub-link--active' : '' ?>"><?= htmlspecialchars($child['label']) ?></a>
              <?php endforeach; ?>
              <!-- Link to parent page -->
              <a href="<?= url($item['href']) ?>" class="sh-drawer-sub-all">View all <?= htmlspecialchars($item['label']) ?> &rarr;</a>
            </div>
          </div>
        <?php else: ?>
          <a href="<?= url($item['href']) ?>"
            class="sh-drawer-link <?= activeClass($item['slug']) ?>"
            style="--i:<?= $idx ?>"
            <?= $_cur === $item['slug'] ? 'aria-current="page"' : '' ?>>
            <span><?= htmlspecialchars($item['label']) ?></span>
            <svg class="sh-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12" />
              <polyline points="12 5 19 12 12 19" />
            </svg>
          </a>
        <?php endif; ?>
      <?php endforeach; ?>
    </nav>

    <!-- Drawer Footer CTA -->
    <div class="sh-drawer-footer">
      <a href="tel:<?= PHONE_TEL ?>" class="sh-drawer-cta">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.13.87.35 1.71.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
        </svg>
        <div>
          <div class="sh-drawer-cta-label">Call us free, anytime</div>
          <div class="sh-drawer-cta-number"><?= PHONE_DISPLAY ?></div>
        </div>
      </a>
    </div>
  </div>

  <!-- Backdrop overlay -->
  <div class="sh-overlay" id="sh-overlay" aria-hidden="true"></div>
</header>

<style>
  /* ── FONTS ── */
  #site-header,
  #site-header * {
    font-family: 'Space Grotesk', system-ui, sans-serif
  }

  /* ── SCROLL PROGRESS BAR ── */
  #sh-progress-bar {
    position: fixed;
    top: 0;
    left: 0;
    height: 3px;
    width: 0%;
    z-index: 9999;
    background: linear-gradient(90deg, #7C3AED, #6366F1, #A78BFA);
    border-radius: 0 3px 3px 0;
    box-shadow: 0 0 10px rgba(139, 92, 246, 0.7);
    transition: width .1s linear;
    pointer-events: none;
  }

  /* ── HEADER BASE ── */
  #site-header {
    position: sticky;
    top: 0;
    z-index: 500;
    overflow: visible;
    background: rgba(10, 8, 30, 0.0);
    transition: background .4s ease, border-color .4s ease, box-shadow .4s ease, backdrop-filter .4s ease, transform .35s cubic-bezier(.4, 0, .2, 1);
    border-bottom: 1px solid transparent;
    animation: headerEntrance .6s cubic-bezier(.16, 1, .3, 1) both;
  }

  @keyframes headerEntrance {
    from {
      opacity: 0;
      transform: translateY(-100%)
    }

    to {
      opacity: 1;
      transform: translateY(0)
    }
  }

  #site-header.hidden {
    transform: translateY(-110%);
    box-shadow: none
  }

  #site-header.scrolled {
    background: rgba(10, 8, 30, 0.88);
    backdrop-filter: blur(28px) saturate(200%);
    -webkit-backdrop-filter: blur(28px) saturate(200%);
    border-bottom-color: rgba(139, 92, 246, 0.18);
    box-shadow: 0 8px 40px rgba(0, 0, 0, 0.25);
  }

  /* ── LOGO SWAP ── */
  .logo-transparent {
    display: block;
    height: 56px;
    width: auto;
    object-fit: contain;
    transition: opacity .3s
  }

  .logo-scrolled {
    display: none;
    height: 56px;
    width: auto;
    object-fit: contain
  }

  #site-header.scrolled .logo-transparent {
    display: none !important
  }

  #site-header.scrolled .logo-scrolled {
    display: block !important
  }

  /* ── NAV INNER GRID ── */
  .nav-inner {
    display: grid;
    grid-template-columns: auto 1fr auto;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 28px;
    height: 72px;
    overflow: visible;
  }

  /* ── LOGO ── */
  .sh-logo {
    display: flex;
    align-items: center;
    text-decoration: none;
    flex-shrink: 0;
    transition: opacity .2s, transform .25s cubic-bezier(.34, 1.56, .64, 1)
  }

  .sh-logo:hover {
    opacity: .9;
    transform: scale(1.04)
  }

  /* ── DESKTOP NAV ── */
  .sh-nav {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    overflow: visible;
    position: relative;
  }

  .sh-link {
    position: relative;
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    padding: 8px 14px;
    font-size: 14.5px;
    font-weight: 500;
    letter-spacing: 0.01em;
    color: rgba(255, 255, 255, 0.75);
    text-decoration: none;
    border-radius: 8px;
    transition: color .2s;
    white-space: nowrap;
  }

  .sh-link:hover {
    color: #fff;
  }

  /* Active — just bold + white, no pill */
  .sh-link--active {
    color: #fff;
    font-weight: 600;
  }

  /* Underline — glowing white bar */
  .sh-link-underline {
    position: absolute;
    bottom: 2px;
    left: 50%;
    transform: translateX(-50%);
    height: 2px;
    border-radius: 99px;
    background: rgba(255, 255, 255, 0.9);
    filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.6));
    width: 0;
    transition: width .28s cubic-bezier(.4, 0, .2, 1);
  }

  .sh-link--active .sh-link-underline {
    width: calc(100% - 20px)
  }

  .sh-link:hover .sh-link-underline {
    width: calc(100% - 20px)
  }

  /* ── DROPDOWN WRAP ── */
  .sh-dropdown-wrap {
    position: relative;
    display: inline-flex
  }

  .sh-has-dropdown {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    cursor: pointer
  }

  .sh-chevron {
    transition: transform .25s cubic-bezier(.4, 0, .2, 1);
    flex-shrink: 0;
    opacity: .7
  }

  /* ── DROPDOWN WRAP ── */
  .sh-dropdown-wrap {
    position: relative;
    display: inline-flex;
    align-items: center
  }

  /* Trigger — inline row so chevron sits beside text */
  .sh-has-dropdown {
    flex-direction: row !important;
    gap: 4px !important;
    cursor: pointer;
  }

  .sh-chevron {
    flex-shrink: 0;
    opacity: .5;
    transition: transform .25s cubic-bezier(.4, 0, .2, 1), opacity .2s;
    margin-top: 0 !important;
  }

  /* Rotate chevron on both hover AND open */
  .sh-dropdown-wrap:hover .sh-chevron,
  .sh-dropdown-wrap.open .sh-chevron {
    transform: rotate(180deg);
    opacity: 1
  }

  /* ── MEGA DROPDOWN PANEL ── */
  .sh-mega {
    position: absolute;
    top: calc(100% + 4px);
    /* sits directly under the nav link with a tiny gap */
    left: 50%;
    transform: translateX(-50%) translateY(-8px);
    width: 520px;
    /* 8px invisible top extension = hover bridge so mouse can travel to card */
    padding: 8px 0 0;
    opacity: 0;
    pointer-events: none;
    visibility: hidden;
    transition: opacity .22s cubic-bezier(.4, 0, .2, 1), transform .22s cubic-bezier(.4, 0, .2, 1), visibility 0s linear .22s;
    z-index: 9999;
  }

  /* Hover OR .open class */
  .sh-dropdown-wrap:hover .sh-mega,
  .sh-dropdown-wrap.open .sh-mega {
    opacity: 1;
    pointer-events: auto;
    visibility: visible;
    transform: translateX(-50%) translateY(0);
    transition: opacity .22s cubic-bezier(.4, 0, .2, 1), transform .22s cubic-bezier(.4, 0, .2, 1), visibility 0s;
  }

  /* The visible card */
  .sh-mega-card {
    background: #ffffff;
    border: 1px solid #E2E8F0;
    border-radius: 24px;
    box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.1), 0 10px 20px -5px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    position: relative;
  }

  /* caret */
  .sh-mega-card::before {
    content: '';
    position: absolute;
    top: -5px;
    left: 50%;
    transform: translateX(-50%) rotate(45deg);
    width: 10px;
    height: 10px;
    background: #ffffff;
    border-top: 1px solid #E2E8F0;
    border-left: 1px solid #E2E8F0;
    z-index: 1;
  }

  /* Two-column grid */
  .sh-mega-inner {
    display: grid;
    grid-template-columns: 1fr 1px 1fr;
    position: relative;
    z-index: 2;
  }

  /* Column */
  .sh-mega-col {
    padding: 24px 16px
  }

  .sh-mega-col-header {
    display: flex;
    align-items: center;
    gap: 7px;
    padding: 0 6px 12px;
    font-size: 10.5px;
    font-weight: 700;
    letter-spacing: .15em;
    text-transform: uppercase;
    color: #64748B;
    border-bottom: 1px solid #F1F5F9;
    margin-bottom: 16px;
  }

  /* Divider */
  .sh-mega-divider {
    background: #F1F5F9;
    margin: 24px 0
  }

  /* Links */
  .sh-mega-link {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 12px;
    border-radius: 16px;
    text-decoration: none;
    background: #ffffff;
    border: 1px solid transparent;
    margin-bottom: 8px;
    transition: all .2s cubic-bezier(.4, 0, .2, 1);
  }

  .sh-mega-link:hover {
    background: #F8FAFC;
    border-color: #E2E8F0;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px -4px rgba(0, 0, 0, 0.05);
  }

  .sh-mega-link--active {
    background: #F1F5F9;
    border-color: #E2E8F0;
  }

  .sh-mega-link-icon {
    width: 40px;
    height: 40px;
    border-radius: 12px;
    background: linear-gradient(135deg, #7C3AED, #4F46E5);
    box-shadow: 0 6px 12px -2px rgba(124, 58, 237, 0.3);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .sh-mega-link-icon svg {
    opacity: 1;
    width: 18px;
    height: 18px;
  }

  .sh-mega-link-body {
    display: flex;
    flex-direction: column;
    gap: 3px
  }

  .sh-mega-link-title {
    font-size: 14.5px;
    font-weight: 700;
    color: #0F172A
  }

  .sh-mega-link-desc {
    font-size: 12px;
    color: #64748B;
    line-height: 1.45
  }

  /* Coming soon */
  .sh-mega-coming {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    padding: 32px 16px;
    border-radius: 16px;
    border: 1px dashed #CBD5E1;
    background: #F8FAFC;
    color: #64748B;
    font-size: 13px;
    font-weight: 500;
    text-align: center;
  }

  .sh-mega-coming svg {
    color: #94A3B8
  }

  /* ── MOBILE DRAWER ACCORDION ── */
  .sh-drawer-accordion {
    opacity: 0;
    transform: translateX(24px);
    animation: drawerLinkIn .4s cubic-bezier(.16, 1, .3, 1) forwards;
    animation-delay: calc(var(--i) * 60ms + 80ms);
  }

  .sh-drawer-parent {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 16px;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 500;
    letter-spacing: .01em;
    color: rgba(255, 255, 255, 0.75);
    background: transparent;
    border: 1px solid transparent;
    cursor: pointer;
    text-align: left;
    transition: all .22s;
    font-family: 'Space Grotesk', system-ui, sans-serif;
  }

  .sh-drawer-parent:hover {
    color: #fff;
    background: rgba(255, 255, 255, 0.07);
    border-color: rgba(255, 255, 255, 0.1)
  }

  .sh-drawer-parent[aria-expanded="true"] {
    color: #fff;
    background: rgba(255, 255, 255, 0.07);
    border-color: rgba(255, 255, 255, 0.1)
  }

  .sh-acc-chevron {
    transition: transform .28s cubic-bezier(.4, 0, .2, 1);
    flex-shrink: 0;
    opacity: .5
  }

  .sh-drawer-parent[aria-expanded="true"] .sh-acc-chevron {
    transform: rotate(180deg);
    opacity: 1
  }

  .sh-drawer-sub {
    padding: 4px 8px 8px 12px;
    border-left: 1px solid rgba(255, 255, 255, 0.08);
    margin: 4px 0 4px 16px
  }

  .sh-drawer-sub-label {
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .12em;
    text-transform: uppercase;
    color: rgba(167, 139, 250, 0.55);
    padding: 8px 8px 4px
  }

  .sh-drawer-sub-link {
    display: block;
    padding: 9px 10px;
    border-radius: 8px;
    font-size: 14.5px;
    font-weight: 500;
    color: rgba(255, 255, 255, 0.7);
    text-decoration: none;
    transition: all .18s
  }

  .sh-drawer-sub-link:hover {
    color: #fff;
    background: rgba(255, 255, 255, 0.06)
  }

  .sh-drawer-sub-link--active {
    color: #fff;
    font-weight: 600
  }

  .sh-drawer-sub-coming {
    font-size: 12px;
    color: rgba(255, 255, 255, 0.3);
    padding: 8px 10px;
    font-style: italic
  }

  .sh-drawer-sub-all {
    display: block;
    margin-top: 8px;
    padding: 8px 10px;
    font-size: 13px;
    font-weight: 600;
    color: rgba(167, 139, 250, 0.7);
    text-decoration: none;
    border-top: 1px solid rgba(255, 255, 255, 0.06);
    transition: color .18s
  }

  .sh-drawer-sub-all:hover {
    color: #A78BFA
  }

  /* ── RIGHT ACTIONS ── */
  .sh-actions {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-shrink: 0
  }

  /* ── DESKTOP CTA PILL ── */
  .sh-cta-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 9px 22px;
    background: linear-gradient(135deg, #7C3AED 0%, #4F46E5 100%);
    color: #fff;
    border-radius: 999px;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0.01em;
    text-decoration: none;
    white-space: nowrap;
    box-shadow: 0 4px 20px rgba(124, 58, 237, 0.4);
    transition: transform .18s, box-shadow .18s, filter .18s;
    border: 1px solid rgba(255, 255, 255, 0.15);
    animation: ctaPulse 3s ease-in-out infinite;
  }

  @keyframes ctaPulse {

    0%,
    100% {
      box-shadow: 0 4px 20px rgba(124, 58, 237, 0.4)
    }

    50% {
      box-shadow: 0 4px 28px rgba(124, 58, 237, 0.7), 0 0 0 4px rgba(124, 58, 237, 0.12)
    }
  }

  .sh-cta-pill:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 32px rgba(124, 58, 237, 0.6) !important;
    filter: brightness(1.1);
    animation: none
  }

  .sh-cta-pill:active {
    transform: translateY(0)
  }

  #site-header.scrolled .sh-cta-pill {
    background: #fff;
    color: #6D28D9;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
    animation: none
  }

  #site-header.scrolled .sh-cta-pill:hover {
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2) !important;
    filter: brightness(1.04)
  }

  /* ── ANIMATED HAMBURGER BUTTON ── */
  .sh-burger {
    display: none;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 5px;
    width: 42px;
    height: 42px;
    border-radius: 10px;
    background: rgba(139, 92, 246, 0.1);
    border: 1.5px solid rgba(139, 92, 246, 0.3);
    cursor: pointer;
    padding: 0;
    transition: background .2s, border-color .2s;
    flex-shrink: 0;
  }

  .sh-burger:hover {
    background: rgba(139, 92, 246, 0.2);
    border-color: rgba(139, 92, 246, 0.6)
  }

  #site-header.scrolled .sh-burger {
    background: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.25)
  }

  #site-header.scrolled .sh-burger:hover {
    background: rgba(255, 255, 255, 0.18)
  }

  .burger-bar {
    display: block;
    width: 20px;
    height: 2px;
    border-radius: 2px;
    background: #A78BFA;
    transition: transform .35s cubic-bezier(.4, 0, .2, 1), opacity .25s, width .3s;
    transform-origin: center;
  }

  #site-header.scrolled .burger-bar {
    background: #fff
  }

  /* X animation when open */
  .sh-burger.open .bar1 {
    transform: translateY(7px) rotate(45deg)
  }

  .sh-burger.open .bar2 {
    opacity: 0;
    transform: scaleX(0)
  }

  .sh-burger.open .bar3 {
    transform: translateY(-7px) rotate(-45deg)
  }

  /* ── MOBILE CALL STRIP ── */
  .sh-mobile-call-strip {
    display: none;
    background: linear-gradient(135deg, #6D28D9, #4338CA);
    padding: 7px 16px;
    text-align: center;
  }

  .sh-mobile-call-strip a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    color: #fff;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    letter-spacing: 0.01em;
  }

  .sh-mobile-call-strip a strong {
    font-weight: 700;
    letter-spacing: 0.03em
  }

  /* ── MOBILE DRAWER ── */
  .sh-mobile-menu {
    display: none;
    position: fixed;
    top: 0;
    right: 0;
    width: min(340px, 90vw);
    height: 100dvh;
    background: linear-gradient(160deg, #0d0a22 0%, #120f2e 60%, #0a0820 100%);
    border-left: 1px solid rgba(139, 92, 246, 0.15);
    box-shadow: -20px 0 60px rgba(0, 0, 0, 0.5);
    flex-direction: column;
    z-index: 600;
    transform: translateX(100%);
    transition: transform .38s cubic-bezier(.4, 0, .2, 1);
    overflow-y: auto;
    overflow-x: hidden;
  }

  .sh-mobile-menu.open {
    display: flex;
    transform: translateX(0);
  }

  /* Drawer Header */
  .sh-drawer-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 24px 16px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.07);
    flex-shrink: 0;
  }

  .sh-drawer-header img {
    height: 40px;
    width: auto;
    object-fit: contain
  }

  .sh-drawer-close {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.07);
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.7);
    cursor: pointer;
    transition: background .18s, color .18s;
  }

  .sh-drawer-close:hover {
    background: rgba(239, 68, 68, 0.15);
    border-color: rgba(239, 68, 68, 0.3);
    color: #f87171
  }

  /* Drawer Section Label */
  .sh-drawer-section-label {
    padding: 16px 24px 4px;
    font-size: 10.5px;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: rgba(167, 139, 250, 0.5);
  }

  /* Drawer Nav Links */
  .sh-drawer-nav {
    display: flex;
    flex-direction: column;
    padding: 4px 16px;
    flex: 1;
    gap: 4px
  }

  .sh-drawer-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 16px;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 500;
    letter-spacing: 0.01em;
    color: rgba(255, 255, 255, 0.75);
    text-decoration: none;
    border: 1px solid transparent;
    transition: all .22s cubic-bezier(.4, 0, .2, 1);
    opacity: 0;
    transform: translateX(24px);
    animation: drawerLinkIn .4s cubic-bezier(.16, 1, .3, 1) forwards;
    animation-delay: calc(var(--i) * 60ms + 80ms);
  }

  @keyframes drawerLinkIn {
    to {
      opacity: 1;
      transform: translateX(0)
    }
  }

  .sh-drawer-link:hover {
    color: #fff;
    background: rgba(255, 255, 255, 0.07);
    border-color: rgba(255, 255, 255, 0.1);
    padding-left: 20px;
  }

  .sh-drawer-link.sh-link--active {
    color: #fff;
    font-weight: 600;
    background: rgba(255, 255, 255, 0.08);
    border-color: rgba(255, 255, 255, 0.12);
  }

  .sh-arrow {
    color: rgba(255, 255, 255, 0.25);
    flex-shrink: 0;
    transition: transform .2s, color .2s
  }

  .sh-drawer-link:hover .sh-arrow {
    transform: translateX(4px);
    color: rgba(255, 255, 255, 0.7)
  }

  .sh-drawer-link.sh-link--active .sh-arrow {
    color: rgba(255, 255, 255, 0.6)
  }

  /* Drawer Footer */
  .sh-drawer-footer {
    padding: 20px 16px 28px;
    border-top: 1px solid rgba(255, 255, 255, 0.07);
    flex-shrink: 0;
    opacity: 0;
    animation: drawerLinkIn .4s cubic-bezier(.16, 1, .3, 1) .5s forwards;
  }

  .sh-drawer-cta {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 16px 20px;
    background: linear-gradient(135deg, rgba(124, 58, 237, 0.85), rgba(79, 70, 229, 0.85));
    border: 1px solid rgba(139, 92, 246, 0.35);
    border-radius: 16px;
    text-decoration: none;
    color: #fff;
    box-shadow: 0 8px 32px rgba(124, 58, 237, 0.3);
    transition: transform .18s, box-shadow .18s, filter .18s;
  }

  .sh-drawer-cta:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 40px rgba(124, 58, 237, 0.45);
    filter: brightness(1.06)
  }

  .sh-drawer-cta:active {
    transform: translateY(0)
  }

  .sh-drawer-cta svg {
    flex-shrink: 0;
    opacity: 0.9
  }

  .sh-drawer-cta-label {
    font-size: 12px;
    font-weight: 500;
    opacity: .75;
    letter-spacing: 0.03em;
    text-transform: uppercase;
    margin-bottom: 2px
  }

  .sh-drawer-cta-number {
    font-size: 17px;
    font-weight: 700;
    letter-spacing: 0.02em
  }

  /* ── OVERLAY ── */
  .sh-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0);
    z-index: 550;
    backdrop-filter: blur(0px);
    transition: background .35s, backdrop-filter .35s;
  }

  .sh-overlay.active {
    display: block;
    background: rgba(0, 0, 0, 0.55);
    backdrop-filter: blur(4px);
  }

  /* ── RESPONSIVE ── */
  @media(max-width:960px) {

    .sh-nav,
    .sh-cta-pill {
      display: none !important
    }

    .sh-burger {
      display: flex !important
    }

    .sh-mobile-call-strip {
      display: block
    }

    .nav-inner {
      display: flex !important;
      justify-content: space-between;
      height: 60px !important;
      padding: 0 20px !important;
    }

    .logo-transparent,
    .logo-scrolled {
      height: 48px !important
    }
  }

  @media(max-width:600px) {
    .nav-inner {
      height: 56px !important;
      padding: 0 16px !important
    }

    .logo-transparent,
    .logo-scrolled {
      height: 44px !important
    }

    .sh-mobile-menu {
      width: 100vw;
      border-left: none
    }
  }

  @media(max-width:380px) {
    .nav-inner {
      padding: 0 12px !important
    }

    .logo-transparent,
    .logo-scrolled {
      height: 40px !important
    }

    .sh-drawer-link {
      font-size: 15px;
      padding: 12px 14px
    }
  }

  /* Tablet tweak: show small pill */
  @media(min-width:700px) and (max-width:960px) {
    .sh-cta-pill {
      display: inline-flex !important;
      font-size: 13px;
      padding: 8px 14px
    }
  }
</style>

<script>
  (function() {
    var hdr = document.getElementById('site-header');
    var burger = document.getElementById('sh-burger');
    var menu = document.getElementById('sh-mobile-menu');
    var overlay = document.getElementById('sh-overlay');
    var closeBtn = document.getElementById('sh-drawer-close');
    var progress = document.getElementById('sh-progress-bar');
    var lastY = 0;
    var ticking = false;

    /* ── DESKTOP DROPDOWN (click-to-toggle) ── */
    var dropWraps = document.querySelectorAll('.sh-dropdown-wrap');

    function closeAllDropdowns(except) {
      dropWraps.forEach(function(w) {
        if (w !== except) {
          w.classList.remove('open');
          var btn = w.querySelector('.sh-has-dropdown');
          if (btn) btn.setAttribute('aria-expanded', 'false');
        }
      });
    }
    dropWraps.forEach(function(wrap) {
      var trigger = wrap.querySelector('.sh-has-dropdown');
      if (!trigger) return;
      trigger.addEventListener('click', function(e) {
        var isOpen = wrap.classList.contains('open');
        closeAllDropdowns(wrap);
        if (isOpen) {
          wrap.classList.remove('open');
          trigger.setAttribute('aria-expanded', 'false');
        } else {
          wrap.classList.add('open');
          trigger.setAttribute('aria-expanded', 'true');
        }
      });
    });
    /* Click outside — close all */
    document.addEventListener('click', function(e) {
      if (!e.target.closest('.sh-dropdown-wrap')) closeAllDropdowns(null);
    });
    /* Escape key */
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') closeAllDropdowns(null);
    });
    /* Scroll — close dropdowns */
    window.addEventListener('scroll', function() {
      closeAllDropdowns(null);
    }, {
      passive: true
    });

    /* Smart scroll: scrolled class + hide-on-down / show-on-up + progress bar */
    window.addEventListener('scroll', function() {
      if (!ticking) {
        requestAnimationFrame(function() {
          var y = window.scrollY;
          /* Scrolled glass effect */
          hdr.classList.toggle('scrolled', y > 10);
          /* Smart hide / reveal — only after 120px */
          if (y > 120) {
            if (y > lastY + 4) {
              hdr.classList.add('hidden');
            } else if (y < lastY - 4) {
              hdr.classList.remove('hidden');
            }
          } else {
            hdr.classList.remove('hidden');
          }
          lastY = y;
          /* Scroll progress bar */
          if (progress) {
            var docH = document.documentElement.scrollHeight - window.innerHeight;
            var pct = docH > 0 ? (y / docH * 100) : 0;
            progress.style.width = pct.toFixed(1) + '%';
          }
          ticking = false;
        });
        ticking = true;
      }
    }, {
      passive: true
    });

    function openMenu() {
      menu.classList.add('open');
      overlay.classList.add('active');
      burger.classList.add('open');
      burger.setAttribute('aria-expanded', 'true');
      document.body.style.overflow = 'hidden';
      /* Re-trigger stagger animations */
      menu.querySelectorAll('.sh-drawer-link').forEach(function(el) {
        el.style.animation = 'none';
        el.offsetHeight;
        el.style.animation = '';
      });
    }

    function closeMenu() {
      menu.style.transform = 'translateX(100%)';
      overlay.classList.remove('active');
      burger.classList.remove('open');
      burger.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
      setTimeout(function() {
        menu.classList.remove('open');
        menu.style.transform = '';
      }, 380);
    }

    if (burger && menu) {
      burger.addEventListener('click', function() {
        menu.classList.contains('open') ? closeMenu() : openMenu();
      });
      if (closeBtn) closeBtn.addEventListener('click', closeMenu);
      overlay.addEventListener('click', closeMenu);
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && menu.classList.contains('open')) closeMenu();
      });
      menu.querySelectorAll('.sh-drawer-link:not(.sh-drawer-parent)').forEach(function(link) {
        link.addEventListener('click', closeMenu);
      });
      /* Drawer accordion: expand/collapse sub-menus */
      menu.querySelectorAll('.sh-drawer-parent').forEach(function(btn) {
        btn.addEventListener('click', function() {
          var sub = btn.parentElement.querySelector('.sh-drawer-sub');
          var expanded = btn.getAttribute('aria-expanded') === 'true';
          btn.setAttribute('aria-expanded', String(!expanded));
          if (expanded) {
            sub.hidden = true;
          } else {
            sub.hidden = false;
            /* close siblings */
            menu.querySelectorAll('.sh-drawer-parent').forEach(function(other) {
              if (other !== btn && other.getAttribute('aria-expanded') === 'true') {
                other.setAttribute('aria-expanded', 'false');
                other.parentElement.querySelector('.sh-drawer-sub').hidden = true;
              }
            });
          }
        });
      });
      /* close drawer when sub-nav link clicked */
      menu.querySelectorAll('.sh-drawer-sub-link,.sh-drawer-sub-all').forEach(function(link) {
        link.addEventListener('click', closeMenu);
      });
    }
  })();
</script>