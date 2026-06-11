<?php
/**
 * ═══════════════════════════════════════════════════════════════
 * BROCUS IT SOLUTIONS USA — MAIN ROUTER
 * ═══════════════════════════════════════════════════════════════
 * All requests are routed through this file via .htaccess
 */

require_once __DIR__ . '/config.php';

// ── Parse the requested page ────────────────────────────────
$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$page = $request ?: 'home';

// ── Map routes to page files ────────────────────────────────
$routes = [
    'home'              => 'pages/home.php',
    'home-security'     => 'pages/home-security.php',
    'about'             => 'pages/about.php',
    'contact'           => 'pages/contact.php',
    'privacy-policy'    => 'pages/privacy-policy.php',
];

// ── Current page identifier (for nav active state) ──────────
$current_page = $page;

// ── Resolve the page file ───────────────────────────────────
if (array_key_exists($page, $routes)) {
    $page_file = __DIR__ . '/' . $routes[$page];
} else {
    http_response_code(404);
    $page_file = __DIR__ . '/pages/home.php';
    $current_page = '404';
}

// ── Get page meta ───────────────────────────────────────────
$meta = isset($SITE['pages_meta'][$page]) ? $SITE['pages_meta'][$page] : $SITE['pages_meta']['home'];

// ── Render ──────────────────────────────────────────────────
include __DIR__ . '/includes/header.php';
include $page_file;
include __DIR__ . '/includes/footer.php';
