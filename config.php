<?php
/**
 * ═══════════════════════════════════════════════════════════════
 * BROCUS IT SOLUTIONS USA — CENTRALIZED CONFIGURATION
 * ═══════════════════════════════════════════════════════════════
 * 
 * ALL site-wide content lives here. Change once → updates everywhere.
 * This file is included at the top of index.php and available
 * to every page and component via the $SITE global array.
 * 
 * ── USAGE IN TEMPLATES ──
 *   <?= $SITE['phone_display'] ?>
 *   <?= $SITE['email'] ?>
 *   <?= $SITE['company'] ?>
 */

$SITE = [

    // ── COMPANY IDENTITY ──────────────────────────────────────
    'company'           => 'Brocus IT Solutions USA',
    'company_short'     => 'Brocus',
    'tagline'           => 'Smart Solutions. Trusted Services. Nationwide Coverage.',
    'description'       => 'Brocus IT Solutions USA provides trusted home security systems, smart home automation, and technology services across all 50 US states. Professional installation, 24/7 monitoring, and expert support.',
    'founded_year'      => '2015',
    'domain'            => 'brocusitsolutionsusa.com',
    'base_url'          => 'https://brocusitsolutionsusa.com',

    // ── CONTACT DETAILS ───────────────────────────────────────
    'phone'             => '+18557869984',           // tel: link format
    'phone_display'     => '(855) 786-9984',         // Human-readable
    'phone_alt'         => '+18552488052',            // Secondary phone
    'phone_alt_display' => '(855) 248-8052',
    'email'             => 'support@brocusitsolutionsusa.com',
    'email_sales'       => 'sales@brocusitsolutionsusa.com',

    // ── ADDRESS ───────────────────────────────────────────────
    'address'   => [
        'street'    => '10639 Mistflower Lane',
        'city'      => 'Tampa',
        'state'     => 'FL',
        'zip'       => '33647',
        'country'   => 'US',
        'full'      => '10639 Mistflower Lane, Tampa, FL 33647, USA',
    ],

    // ── BUSINESS HOURS ────────────────────────────────────────
    'hours'     => [
        'display'   => 'Mon – Fri: 10 AM – 8 PM ET',
        'short'     => '10am–8pm ET',
        'schema'    => 'Mo-Fr 10:00-20:00',
    ],

    // ── SOCIAL MEDIA ──────────────────────────────────────────
    'social'    => [
        'facebook'  => 'https://facebook.com/brocusitsolutions',
        'twitter'   => 'https://twitter.com/brocusitsolutions',
        'instagram' => 'https://instagram.com/brocusitsolutions',
        'linkedin'  => 'https://linkedin.com/company/brocusitsolutions',
        'youtube'   => 'https://youtube.com/@brocusitsolutions',
    ],

    // ── STATS / TRUST SIGNALS ─────────────────────────────────
    'stats'     => [
        ['icon' => 'fa-solid fa-shield-halved',  'number' => '50,000+',  'label' => 'Homes Protected',    'sub' => 'Nationwide & growing'],
        ['icon' => 'fa-solid fa-clock',          'number' => '24/7',     'label' => 'Live Monitoring',     'sub' => 'Round-the-clock protection'],
        ['icon' => 'fa-solid fa-map-location-dot','number' => 'All 50',  'label' => 'States Covered',     'sub' => 'Coast to coast'],
        ['icon' => 'fa-solid fa-award',          'number' => '10+',     'label' => 'Years in Business',   'sub' => 'Trusted since 2015'],
    ],

    // ── NAVIGATION ────────────────────────────────────────────
    'nav' => [
        ['label' => 'Home',          'url' => '/',               'icon' => 'fa-solid fa-house'],
        ['label' => 'Home Security', 'url' => '/home-security',  'icon' => 'fa-solid fa-shield-halved',
            'children' => [
                ['label' => 'Security Cameras',      'url' => '/home-security#cameras',     'icon' => 'fa-solid fa-video'],
                ['label' => 'Doorbell Camera',        'url' => '/home-security#doorbell',    'icon' => 'fa-solid fa-bell'],
                ['label' => 'Smart Door Locks',       'url' => '/home-security#locks',       'icon' => 'fa-solid fa-lock'],
                ['label' => 'Alarm System',           'url' => '/home-security#alarm',       'icon' => 'fa-solid fa-bell-concierge'],
                ['label' => 'Security Panel',         'url' => '/home-security#panel',       'icon' => 'fa-solid fa-tablet-screen-button'],
                ['label' => 'Door & Window Sensors',  'url' => '/home-security#sensors',     'icon' => 'fa-solid fa-door-open'],
                ['label' => '24/7 Monitoring',        'url' => '/home-security#monitoring',  'icon' => 'fa-solid fa-eye'],
            ]
        ],
        ['label' => 'About',         'url' => '/about',          'icon' => 'fa-solid fa-building'],
        ['label' => 'Contact',       'url' => '/contact',        'icon' => 'fa-solid fa-envelope'],
    ],

    // ── SERVICES (expandable — add new services here) ─────────
    'services'  => [
        'home-security' => [
            'name'          => 'Home Security',
            'slug'          => 'home-security',
            'tagline'       => 'Smart Home Security Systems That Protect What Matters Most',
            'description'   => 'Professionally installed smart home security systems with 24/7 monitoring, security cameras, smart locks, and complete home automation across all 50 US states.',
            'icon'          => 'fa-solid fa-shield-halved',
            'color'         => '#1a56db',
            'active'        => true,
            'phone'         => '+18557869984',
            'phone_display' => '(855) 786-9984',
            'products' => [
                [
                    'name'  => 'Smart Home Security Camera',
                    'slug'  => 'cameras',
                    'desc'  => 'See every corner of your property in stunning clarity with night vision, motion detection, and instant mobile alerts.',
                    'icon'  => 'fa-solid fa-video',
                    'image' => '/assets/images/security-camera.webp',
                ],
                [
                    'name'  => 'Smart Doorbell Camera',
                    'slug'  => 'doorbell',
                    'desc'  => 'Know who is at your door before you answer with HD video, two-way audio, and instant mobile alerts.',
                    'icon'  => 'fa-solid fa-bell',
                    'image' => '/assets/images/doorbell-camera.webp',
                ],
                [
                    'name'  => 'Smart Door Locks',
                    'slug'  => 'locks',
                    'desc'  => 'Lock and unlock remotely, set custom access codes, and get notified instantly when someone enters.',
                    'icon'  => 'fa-solid fa-lock',
                    'image' => '/assets/images/smart-lock.webp',
                ],
                [
                    'name'  => 'Home Alarm System',
                    'slug'  => 'alarm',
                    'desc'  => 'Instant alerts and loud siren protection to keep your home safe from unauthorized entry around the clock.',
                    'icon'  => 'fa-solid fa-bell-concierge',
                    'image' => '/assets/images/alarm-system.webp',
                ],
                [
                    'name'  => 'Home Security System Panel',
                    'slug'  => 'panel',
                    'desc'  => 'The central hub connecting all your devices for seamless, one-touch security control from a single screen.',
                    'icon'  => 'fa-solid fa-tablet-screen-button',
                    'image' => '/assets/images/security-panel.webp',
                ],
                [
                    'name'  => 'Door & Window Sensors',
                    'slug'  => 'sensors',
                    'desc'  => 'Instant alerts if any entry point in your home is opened or tampered with, day or night.',
                    'icon'  => 'fa-solid fa-door-open',
                    'image' => '/assets/images/door-sensors.webp',
                ],
            ],
            'services_list' => [
                [
                    'name'  => '24/7 Smart Home Monitoring',
                    'slug'  => 'monitoring',
                    'desc'  => 'Your home is monitored every hour of every day. When a sensor is triggered, trained specialists verify the event and dispatch emergency services if required.',
                    'icon'  => 'fa-solid fa-eye',
                    'image' => '/assets/images/monitoring.webp',
                ],
                [
                    'name'  => 'Professional Installation',
                    'slug'  => 'installation',
                    'desc'  => 'A certified technician handles the complete setup, configures every device, tests the system, and walks you through how everything works.',
                    'icon'  => 'fa-solid fa-screwdriver-wrench',
                    'image' => '/assets/images/installation.webp',
                ],
                [
                    'name'  => 'Smart Home Security App',
                    'slug'  => 'app',
                    'desc'  => 'Control your entire security system from anywhere. View live camera feeds, receive alerts, arm or disarm your system, and manage automation.',
                    'icon'  => 'fa-solid fa-mobile-screen-button',
                    'image' => '/assets/images/app-control.webp',
                ],
                [
                    'name'  => 'Smart Home Integration',
                    'slug'  => 'integration',
                    'desc'  => 'Your security system integrates with Amazon Alexa and Google Assistant for voice control and smart home automation.',
                    'icon'  => 'fa-solid fa-microchip',
                    'image' => '/assets/images/smart-integration.webp',
                ],
                [
                    'name'  => 'Emergency Response Management',
                    'slug'  => 'emergency',
                    'desc'  => 'From break-ins and fires to carbon monoxide leaks, your system connects to a professional monitoring center that dispatches local emergency services.',
                    'icon'  => 'fa-solid fa-truck-medical',
                    'image' => '/assets/images/emergency-response.webp',
                ],
            ],
            'faqs' => [
                [
                    'q' => 'Do I need a long-term contract for home security?',
                    'a' => 'Not always. We offer both contract and month-to-month options. If you finance your equipment, a multi-year service agreement is usually required. If you purchase equipment upfront, you can choose month-to-month professional monitoring.',
                ],
                [
                    'q' => 'What happens if my internet goes down?',
                    'a' => 'Your security system continues to work. Our systems automatically switch to a cellular backup connection, allowing alarms and alerts to still reach the monitoring center even if your internet service is interrupted.',
                ],
                [
                    'q' => 'Does the system work during power outages?',
                    'a' => 'Yes. Our systems include a backup battery that keeps the security system running during power outages for 3 to 5 days, so your home remains protected.',
                ],
                [
                    'q' => 'Can I control the system from my phone?',
                    'a' => 'Yes. The Smart Home Security App allows you to control your system remotely. View live camera feeds, receive alerts, arm or disarm the system, and control smart home devices from anywhere.',
                ],
                [
                    'q' => 'Is professional installation included?',
                    'a' => 'Systems are typically installed by certified technicians who set up the devices, test the system, and show you how to use it. Installation may be included with certain packages or available during promotional periods.',
                ],
                [
                    'q' => 'What areas do you serve?',
                    'a' => 'We provide home security services across all 50 US states. Our network of certified installation professionals covers urban, suburban, and many rural areas nationwide.',
                ],
            ],
            'how_it_works' => [
                ['step' => '1', 'title' => 'Tell Us About Your Home',     'desc' => 'Speak with a security advisor by phone or online. We\'ll ask a few simple questions about your home and recommend the right equipment and monitoring plan.'],
                ['step' => '2', 'title' => 'Review Your Custom Quote',    'desc' => 'We send you a clear, itemized quote with no hidden fees. Once you confirm your order, we handle scheduling your professional installation.'],
                ['step' => '3', 'title' => 'Professional Installation',   'desc' => 'A certified team comes to your home, sets up your entire system, tests every component, and walks you through how to use it.'],
            ],
        ],
        // ── ADD NEW SERVICES HERE ──────────────────────────────
        // 'tech-services' => [
        //     'name' => 'Tech Services',
        //     'slug' => 'tech-services',
        //     ...
        // ],
    ],

    // ── CTA (Call-to-Action) CONTENT ──────────────────────────
    'cta' => [
        'primary'   => [
            'text'  => 'Get a Free Consultation',
            'icon'  => 'fa-solid fa-phone-volume',
            'type'  => 'phone',     // 'phone' = tel link, 'link' = href
        ],
        'secondary' => [
            'text'  => 'Get a Free Quote',
            'icon'  => 'fa-solid fa-arrow-right',
            'url'   => '/contact#quote-form',
            'type'  => 'link',
        ],
    ],

    // ── PAGE-SPECIFIC META ────────────────────────────────────
    'pages_meta' => [
        'home' => [
            'title'         => 'Brocus IT Solutions USA | Smart Home Security & Technology Services Nationwide',
            'description'   => 'Brocus IT Solutions USA offers professionally installed smart home security systems with 24/7 monitoring, security cameras, smart locks, and technology services across all 50 US states. Get your free consultation today.',
            'keywords'      => 'home security, smart home, security cameras, 24/7 monitoring, smart locks, home automation, USA',
        ],
        'home-security' => [
            'title'         => 'Smart Home Security Systems | 24/7 Monitoring | Brocus IT Solutions USA',
            'description'   => 'Protect your home with professionally installed smart security systems. Security cameras, smart locks, doorbell cameras, alarm systems, and 24/7 professional monitoring across all 50 US states.',
            'keywords'      => 'home security systems, security cameras, smart locks, 24/7 monitoring, home alarm, doorbell camera, professional installation',
        ],
        'about' => [
            'title'         => 'About Us | Brocus IT Solutions USA',
            'description'   => 'Learn about Brocus IT Solutions USA — a trusted provider of smart home security and technology services across all 50 US states. Our mission, values, and commitment to protecting American families.',
            'keywords'      => 'about brocus, home security company, trusted security provider, USA security services',
        ],
        'contact' => [
            'title'         => 'Contact Us | Get a Free Quote | Brocus IT Solutions USA',
            'description'   => 'Contact Brocus IT Solutions USA for a free home security consultation. Call us, email, or fill out our quick quote form. Available Mon-Fri, 10 AM – 8 PM ET.',
            'keywords'      => 'contact brocus, free security quote, home security consultation, call brocus',
        ],
        'privacy-policy' => [
            'title'         => 'Privacy Policy | Brocus IT Solutions USA',
            'description'   => 'Read the privacy policy of Brocus IT Solutions USA. Learn how we collect, use, and protect your personal information.',
            'keywords'      => '',
        ],
    ],

    // ── LEGAL & COMPLIANCE ────────────────────────────────────
    'legal' => [
        'copyright'     => '© ' . date('Y') . ' Brocus IT Solutions USA. All rights reserved.',
        'disclaimer'    => 'Brocus IT Solutions USA is an authorized dealer. Availability, pricing, and features may vary by location. Professional installation and credit approval may be required. Contact us for details specific to your area.',
    ],
];

/**
 * Helper: get a nested config value with dot notation
 * Usage: site('address.city') → 'Tampa'
 */
function site($key, $default = '') {
    global $SITE;
    $keys = explode('.', $key);
    $value = $SITE;
    foreach ($keys as $k) {
        if (is_array($value) && isset($value[$k])) {
            $value = $value[$k];
        } else {
            return $default;
        }
    }
    return $value;
}

/**
 * Helper: phone link
 * Usage: <?= phone_link() ?>  →  <a href="tel:+18557869984">(855) 786-9984</a>
 */
function phone_link($class = '', $icon = true) {
    global $SITE;
    $iconHtml = $icon ? '<i class="fa-solid fa-phone me-2"></i>' : '';
    $cls = $class ? " class=\"{$class}\"" : '';
    return "<a href=\"tel:{$SITE['phone']}\"{$cls}>{$iconHtml}{$SITE['phone_display']}</a>";
}

/**
 * Helper: email link
 */
function email_link($class = '', $icon = true) {
    global $SITE;
    $iconHtml = $icon ? '<i class="fa-solid fa-envelope me-2"></i>' : '';
    $cls = $class ? " class=\"{$class}\"" : '';
    return "<a href=\"mailto:{$SITE['email']}\"{$cls}>{$iconHtml}{$SITE['email']}</a>";
}

/**
 * Helper: get active service phone
 */
function service_phone($slug) {
    global $SITE;
    if (isset($SITE['services'][$slug]['phone'])) {
        return $SITE['services'][$slug]['phone'];
    }
    return $SITE['phone'];
}

function service_phone_display($slug) {
    global $SITE;
    if (isset($SITE['services'][$slug]['phone_display'])) {
        return $SITE['services'][$slug]['phone_display'];
    }
    return $SITE['phone_display'];
}
