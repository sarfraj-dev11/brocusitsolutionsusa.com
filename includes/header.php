<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page Title & Meta -->
    <title><?= htmlspecialchars($meta['title'] ?? $SITE['company']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($meta['description'] ?? $SITE['description']) ?>">
    <?php if (!empty($meta['keywords'])): ?>
    <meta name="keywords" content="<?= htmlspecialchars($meta['keywords']) ?>">
    <?php endif; ?>
    <meta name="author" content="<?= $SITE['company'] ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= $SITE['base_url'] . '/' . ltrim($current_page === 'home' ? '' : $current_page, '/') ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= $SITE['company'] ?>">
    <meta property="og:url" content="<?= $SITE['base_url'] . '/' . ltrim($current_page === 'home' ? '' : $current_page, '/') ?>">
    <meta property="og:title" content="<?= htmlspecialchars($meta['title'] ?? $SITE['company']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($meta['description'] ?? $SITE['description']) ?>">
    <meta property="og:image" content="<?= $SITE['base_url'] ?>/assets/images/og-image.webp">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon.png">

    <!-- Preconnects -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

    <!-- Bootstrap 5.3.3 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Google Fonts — Outfit (headings) + Inter (body) -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap"></noscript>

    <!-- Font Awesome 6.5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Site CSS -->
    <link rel="stylesheet" href="/assets/css/variables.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/components.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": ["Organization", "LocalBusiness"],
        "name": "<?= $SITE['company'] ?>",
        "url": "<?= $SITE['base_url'] ?>",
        "logo": "<?= $SITE['base_url'] ?>/assets/images/logo.webp",
        "description": "<?= addslashes($SITE['description']) ?>",
        "telephone": "<?= $SITE['phone_display'] ?>",
        "email": "<?= $SITE['email'] ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?= $SITE['address']['street'] ?>",
            "addressLocality": "<?= $SITE['address']['city'] ?>",
            "addressRegion": "<?= $SITE['address']['state'] ?>",
            "postalCode": "<?= $SITE['address']['zip'] ?>",
            "addressCountry": "<?= $SITE['address']['country'] ?>"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "<?= $SITE['phone_display'] ?>",
            "contactType": "customer service",
            "areaServed": "US",
            "availableLanguage": "English"
        },
        "sameAs": [
            <?= '"' . implode('","', array_values($SITE['social'])) . '"' ?>
        ]
    }
    </script>
</head>
<body>

<!-- ═══════ TOP CALL BAR ═══════ -->
<div class="top-bar" id="topBar">
    <div class="container">
        <a href="tel:<?= $SITE['phone'] ?>">
            <i class="fa-solid fa-phone-volume me-2"></i>
            Call Now - <?= $SITE['phone_display'] ?>
        </a>
    </div>
</div>

<!-- ═══════ MAIN NAVBAR ═══════ -->
<header class="sticky-top">
    <nav class="navbar navbar-expand-lg main-navbar" id="mainNavbar" aria-label="Main navigation">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <img src="/assets/images/logo.webp" alt="<?= $SITE['company'] ?>" width="200" height="52" style="height:52px;width:auto;">
            </a>

            <!-- Mobile Toggler (Hamburger) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </span>
            </button>

            <!-- Desktop Nav (hidden on mobile) -->
            <div class="collapse navbar-collapse d-none d-lg-flex" id="desktopNav">
                <ul class="navbar-nav mx-auto">
                    <?php foreach ($SITE['nav'] as $item): ?>
                        <?php if (!empty($item['children'])): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?= ($current_page === ltrim($item['url'], '/')) ? 'active' : '' ?>" href="<?= $item['url'] ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="<?= $item['icon'] ?> me-1"></i> <?= $item['label'] ?>
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($item['children'] as $child): ?>
                                <li>
                                    <a class="dropdown-item" href="<?= $child['url'] ?>">
                                        <i class="<?= $child['icon'] ?>"></i> <?= $child['label'] ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link <?= ($current_page === ltrim($item['url'], '/') || ($item['url'] === '/' && $current_page === 'home')) ? 'active' : '' ?>" href="<?= $item['url'] ?>">
                                <i class="<?= $item['icon'] ?> me-1"></i> <?= $item['label'] ?>
                            </a>
                        </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>

                <div class="d-flex align-items-center gap-2">
                    <a href="tel:<?= $SITE['phone'] ?>" class="nav-cta-btn">
                        <i class="fa-solid fa-phone-volume"></i> <?= $SITE['phone_display'] ?>
                    </a>
                </div>
            </div>

            <!-- Mobile Offcanvas Nav -->
            <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <img src="/assets/images/logo-white.webp" alt="<?= $SITE['company'] ?>" height="40" id="offcanvasNavbarLabel">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <?php foreach ($SITE['nav'] as $item): ?>
                            <?php if (!empty($item['children'])): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between <?= ($current_page === ltrim($item['url'], '/')) ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span><i class="<?= $item['icon'] ?> me-2"></i><?= $item['label'] ?></span>
                                    <i class="fa-solid fa-chevron-down" style="font-size:0.7rem;"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="<?= $item['url'] ?>">
                                            <i class="<?= $item['icon'] ?>"></i> All <?= $item['label'] ?>
                                        </a>
                                    </li>
                                    <?php foreach ($item['children'] as $child): ?>
                                    <li>
                                        <a class="dropdown-item" href="<?= $child['url'] ?>">
                                            <i class="<?= $child['icon'] ?>"></i> <?= $child['label'] ?>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link <?= ($current_page === ltrim($item['url'], '/') || ($item['url'] === '/' && $current_page === 'home')) ? 'active' : '' ?>" href="<?= $item['url'] ?>">
                                    <i class="<?= $item['icon'] ?> me-2"></i><?= $item['label'] ?>
                                </a>
                            </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>

                    <hr class="my-3">

                    <!-- Mobile CTA -->
                    <a href="tel:<?= $SITE['phone'] ?>" class="btn-primary-gradient w-100 justify-content-center mb-2" style="text-decoration:none;">
                        <i class="fa-solid fa-phone-volume"></i> Call <?= $SITE['phone_display'] ?>
                    </a>
                    <a href="/contact#quote-form" class="btn-outline-primary-custom w-100 justify-content-center" style="text-decoration:none;">
                        <i class="fa-solid fa-arrow-right"></i> Get a Free Quote
                    </a>

                    <!-- Mobile Contact Info -->
                    <div class="mt-4 pt-3 border-top">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="fa-solid fa-envelope text-primary-custom" style="width:18px;"></i>
                            <a href="mailto:<?= $SITE['email'] ?>" class="text-muted small"><?= $SITE['email'] ?></a>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="fa-solid fa-clock text-primary-custom" style="width:18px;"></i>
                            <span class="text-muted small"><?= $SITE['hours']['display'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<main id="main-content">
