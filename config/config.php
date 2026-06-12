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
define('BASE_PATH', '/brocusitsolutionsusa.com'); // '' on production

// ── Brand ────────────────────────────────────────────
define('SITE_NAME',    'Brocus IT Solutions LLC');
define('SITE_SHORT',   'Brocus IT Solutions');
define('SITE_TAGLINE', 'Independent Advisors for US Households');
define('SITE_DOMAIN',  'brocusitsolutionsusa.com');
define('SITE_URL',     'https://brocusitsolutionsusa.com');

// ── Contact ──────────────────────────────────────────
define('PHONE_DISPLAY', '(855) 487-0595');
define('PHONE_TEL',     '(855) 487-0595');
define('EMAIL_INFO',    'support@brocusitsolutionsusa.com');

// ── Address ──────────────────────────────────────────
define('ADDR_LINE1', '10639 Mistflower Lane');
define('ADDR_CITY',  'Tampa');
define('ADDR_STATE', 'FL');
define('ADDR_ZIP',   '33647');
define('ADDR_FULL',  '10639 Mistflower Lane, Tampa, FL 33647');

// ── Business hours ───────────────────────────────────
define('HOURS_WEEKDAY',  'Monday–Friday:');
define('HOURS_SATURDAY', '9:30 AM – 6:00 PM');
define('HOURS_SUNDAY',   'Closed');

// ── Navigation pages ─────────────────────────────────
define('NAV_ITEMS', serialize([
    ['href' => '',                    'slug' => 'index',         'label' => 'Home'],
    ['href' => 'home-security',      'slug' => 'home-security', 'label' => 'Home Security'],
    ['href' => 'about',              'slug' => 'about',         'label' => 'About'],
    ['href' => 'contact',            'slug' => 'contact',       'label' => 'Contact'],
]));

// ── Footer legal links ───────────────────────────────
define('LEGAL_LINKS', serialize([
    ['href' => 'privacy-policy',                 'label' => 'Privacy Policy'],
    ['href' => 'terms-and-conditions',           'label' => 'Terms &amp; Conditions'],
    ['href' => 'electronic-disclosure-consent',  'label' => 'Electronic Disclosure'],
]));

// ── Announce bar ─────────────────────────────────────
define('ANNOUNCE_TEXT', 'Free, independent home security advice — no sales pressure, real people');
define('ANNOUNCE_LINK_TEXT', 'Learn more');
define('ANNOUNCE_LINK_HREF', 'home-security');

// ── Analytics (leave empty until live) ───────────────
define('GA_ID', '');   // e.g. 'G-XXXXXXXXXX'

// ── Email / mailer ───────────────────────────────────
define('MAIL_FROM',      'support@brocusitsolutionsusa.com');
define('MAIL_FROM_NAME', SITE_SHORT);
define('MAIL_TO',        'support@brocusitsolutionsusa.com');

// ── SMTP (Hostinger Business Mail) ──────────────────
define('SMTP_HOST',     'smtp.hostinger.com');
define('SMTP_PORT',     465);
define('SMTP_SECURE',   'ssl');              // 'ssl' for port 465
define('SMTP_USERNAME', 'support@brocusitsolutionsusa.com');
define('SMTP_PASSWORD', 'BrocusS#2k26TsusaIT');

// ── Copyright ────────────────────────────────────────
define('COPYRIGHT_YEAR', '2025');
