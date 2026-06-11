<?php
/**
 * ─────────────────────────────────────────────────────
 *  BROCUS IT SOLUTIONS LLC — SITE CONFIGURATION
 *  Edit this file only. Everything else reads from here.
 * ─────────────────────────────────────────────────────
 */

// ── Environment ──────────────────────────────────────
define('APP_ENV',    'development');          // 'development' | 'production'
define('SHOW_ERRORS', APP_ENV === 'development');

// ── Base path (change to '' on live server) ──────────
define('BASE_PATH', ''); // '' on production

// ── Brand ────────────────────────────────────────────
define('SITE_NAME',    'Brocus IT Solutions LLC');
define('SITE_SHORT',   'Brocus IT Solutions');
define('SITE_TAGLINE', 'Independent Advisors for US Households');
define('SITE_DOMAIN',  'brocusitsolutionsusa.com');
define('SITE_URL',     'https://brocusitsolutionsusa.com');

// ── Contact ──────────────────────────────────────────
define('PHONE_DISPLAY', '(888) 958-4443');
define('PHONE_TEL',     '(888) 958-4443');
define('EMAIL_INFO',    'info@brocusitsolutionsusa.com');

// ── Address ──────────────────────────────────────────
define('ADDR_LINE1', '10639 Mistflower Lane');
define('ADDR_CITY',  'Tampa');
define('ADDR_STATE', 'FL');
define('ADDR_ZIP',   '33647');
define('ADDR_FULL',  '10639 Mistflower Lane, Tampa, FL 33647');

// ── Business hours ───────────────────────────────────
define('HOURS_WEEKDAY',  'Monday–Friday 9 AM–6 PM EST');
define('HOURS_SATURDAY', 'Saturday 10 AM–4 PM EST');
define('HOURS_SUNDAY',   'Closed');

// ── Navigation pages ─────────────────────────────────
define('NAV_ITEMS', serialize([
    ['href' => 'index.php',          'slug' => 'index',         'label' => 'Home'],
    ['href' => 'home-security.php',  'slug' => 'home-security', 'label' => 'Home Security'],
    ['href' => 'about.php',          'slug' => 'about',         'label' => 'About'],
    ['href' => 'contact.php',        'slug' => 'contact',       'label' => 'Contact'],
]));

// ── Footer legal links ───────────────────────────────
define('LEGAL_LINKS', serialize([
    ['href' => 'privacy-policy.php',             'label' => 'Privacy Policy'],
    ['href' => 'terms-and-conditions.php',       'label' => 'Terms &amp; Conditions'],
    ['href' => 'electronic-disclosure-consent.php', 'label' => 'Electronic Disclosure'],
]));

// ── Announce bar ─────────────────────────────────────
define('ANNOUNCE_TEXT', 'Free, independent home security advice — no sales pressure, real people');
define('ANNOUNCE_LINK_TEXT', 'Learn more');
define('ANNOUNCE_LINK_HREF', 'home-security.php');

// ── Analytics (leave empty until live) ───────────────
define('GA_ID', '');   // e.g. 'G-XXXXXXXXXX'

// ── Email / mailer ───────────────────────────────────
define('MAIL_FROM',      EMAIL_INFO);
define('MAIL_FROM_NAME', SITE_SHORT);
define('MAIL_TO',        EMAIL_INFO);   // where form submissions go

// ── Copyright ────────────────────────────────────────
define('COPYRIGHT_YEAR', '2025');
