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
define('BASE_PATH', '/brocusitsolutionsusa'); // '' on production

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
    ['href' => '',                'slug' => 'index',         'label' => 'Home',          'dropdown' => []],
    ['href' => 'home-security',  'slug' => 'home-security', 'label' => 'Home Security', 'dropdown' => [
        'products' => [
            ['href' => 'home-security/smart-indoor-camera.php', 'slug' => 'smart-indoor-camera', 'label' => 'Smart Indoor Camera', 'desc' => 'High-res indoor monitoring'],
            ['href' => 'home-security/smart-outdoor-camera.php', 'slug' => 'smart-outdoor-camera', 'label' => 'Smart Outdoor Camera', 'desc' => 'Weatherproof exterior security'],
            ['href' => 'home-security/smart-doorbell-camera.php', 'slug' => 'smart-doorbell-camera', 'label' => 'Smart Doorbell Camera', 'desc' => 'See who is at your front door'],
            ['href' => 'home-security/smart-door-locks.php', 'slug' => 'smart-door-locks', 'label' => 'Smart Door Locks', 'desc' => 'Keyless entry and remote access'],
            ['href' => 'home-security/door-and-window-sensors.php', 'slug' => 'door-and-window-sensors', 'label' => 'Door & Window Sensors', 'desc' => 'Perimeter breach detection'],
            ['href' => 'home-security/smart-alarm-system.php', 'slug' => 'smart-alarm-system', 'label' => 'Smart Alarm System', 'desc' => 'Comprehensive home protection'],
            ['href' => 'home-security/smart-security-panel.php', 'slug' => 'smart-security-panel', 'label' => 'Security Control Panel', 'desc' => 'The central hub for your system'],
        ],
        'services' => [
            ['href' => 'home-security/professional-monitoring/', 'slug' => 'professional-monitoring', 'label' => '24/7 Monitoring', 'desc' => 'Round-the-clock professional alarm monitoring'],
            ['href' => 'home-security/professional-installation/', 'slug' => 'professional-installation', 'label' => 'Professional Installation', 'desc' => 'Done right the first time by vetted installers'],
            ['href' => 'home-security/security-app/', 'slug' => 'security-app', 'label' => 'Security App Control', 'desc' => 'Remote system control from your phone'],
            ['href' => 'home-security/smart-home-integration/', 'slug' => 'smart-home-integration', 'label' => 'Smart Home Integration', 'desc' => 'Connect locks, lights, & thermostats'],
            ['href' => 'home-security/emergency-response/', 'slug' => 'emergency-response', 'label' => 'Emergency Response', 'desc' => 'Life safety monitoring for fire, CO, & medical'],
        ],
    ]],
    ['href' => 'about',          'slug' => 'about',         'label' => 'About',         'dropdown' => []],
    ['href' => 'contact',        'slug' => 'contact',       'label' => 'Contact',       'dropdown' => []],
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
// NOTE: Hostinger enforces FROM must match SMTP_USERNAME
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
