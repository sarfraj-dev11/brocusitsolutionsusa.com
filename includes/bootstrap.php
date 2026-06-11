<?php
/**
 * BOOTSTRAP — the single entry point every page loads.
 * Usage: require_once dirname(__DIR__) . '/includes/bootstrap.php';
 */

// ── Error display ──────────────────────────────────
// Load config first so SHOW_ERRORS is available
require_once dirname(__DIR__) . '/config/config.php';

if (SHOW_ERRORS) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}

// ── Functions ──────────────────────────────────────
require_once __DIR__ . '/functions.php';

// ── Session (needed for CSRF) ──────────────────────
if (session_status() === PHP_SESSION_NONE) {
    session_start([
        'cookie_httponly' => true,
        'cookie_samesite' => 'Lax',
        'cookie_secure'   => APP_ENV === 'production',
    ]);
}

// ── Security headers (PHP-level, .htaccess adds more) ──
if (!headers_sent()) {
    header('X-Frame-Options: SAMEORIGIN');
    header('X-Content-Type-Options: nosniff');
    header('Referrer-Policy: strict-origin-when-cross-origin');
}
