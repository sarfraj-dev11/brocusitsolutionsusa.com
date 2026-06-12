<?php

/**
 * Shared HTML head — included at top of every page.
 * Set $page_title and $page_desc BEFORE including.
 *
 * Usage:
 *   require_once dirname(__DIR__) . '/includes/bootstrap.php';
 *   $page_title = 'My Page | ' . SITE_NAME;
 *   $page_desc  = 'Page description.';
 *   include dirname(__DIR__) . '/includes/head.php';
 */

$page_title = $page_title ?? (SITE_TAGLINE . ' | ' . SITE_NAME);
$page_desc  = $page_desc  ?? 'Brocus IT Solutions helps US households make smarter, calmer decisions about protecting their homes — starting with home security.';
$canonical  = $canonical  ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php pageMeta($page_title, $page_desc, $canonical); ?>
  <meta property="og:site_name" content="<?= htmlspecialchars(SITE_NAME) ?>">

  <!-- Favicon -->
  <link rel="icon" href="<?= asset('images/favicon-logo-192.jpg') ?>?v=3" type="image/jpeg">
  <link rel="shortcut icon" href="<?= asset('images/favicon-logo-192.jpg') ?>?v=3" type="image/jpeg">
  <link rel="apple-touch-icon" href="<?= asset('images/favicon-logo-192.jpg') ?>?v=3">

  <!-- Fonts: Space Grotesk (Headings) + Manrope (Body/UI) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300..800&family=Space+Grotesk:wght@400..700&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Site styles -->
  <link rel="stylesheet" href="<?= asset('css/style.css') ?>">

  <!-- Analytics (only on production) -->
  <?php gaScript(); ?>

  <!-- JSON-LD structured data -->
  <script type="application/ld+json">
    <?= localBusinessSchema() ?>
  </script>
</head>

<body>