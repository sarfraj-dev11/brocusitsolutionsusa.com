<?php
/**
 * Smart Security Panel — Product Page
 * All content from Brocus-Home-Security-Product-Pages.docx
 */

$product = [
    'title'     => 'Smart Security Panel & Hub Setup | Brocus IT Solutions',
    'meta_desc' => 'Independent advice on smart security panels and hubs, the brain of your system, plus a vetted provider to install and configure it. Free, no-pressure consultation. Call today.',
    'h1'        => 'Smart Security Panels and Hubs, <span class="grad">Configured for You</span>',
    'hero_subtitle' => 'The panel is the brain of your security system. It connects every device, arms and disarms the system, and keeps you online during an outage. Independent advice and a vetted provider to set it up right.',
    'hero_image'     => 'images/products/smart-security-panel.png',
    'hero_image_alt' => 'Smart home security panel touchscreen hub mounted on wall',

    'trust_line' => 'Brocus is an independent advisor, not a hardware vendor. We compare panels across a vetted provider network and recommend the hub that will hold your whole system together.',

    'benefits' => [
        'One hub that connects cameras, sensors, and locks',
        'Arm and disarm from the panel, your phone, or your voice',
        'Cellular and battery backup that keeps working in an outage',
        'Configured and integrated by a professional',
    ],

    'sections' => [
        [
            'heading' => 'What the panel actually does',
            'paragraphs' => [
                'The panel is the command center of your system. Every sensor, camera, and lock reports to it, and it talks to the monitoring center. You arm and disarm from the wall, the app, or your voice. Nothing else works well without a good one.',
            ],
        ],
        [
            'heading' => 'Why the hub is the most important piece',
            'paragraphs' => [
                'A system is only as reliable as its brain. A strong panel keeps every device talking to each other, holds the connection to monitoring, and stays online when the power or internet drops. Skimp here and the rest of the system suffers.',
            ],
        ],
        [
            'heading' => 'What to look for in a panel',
            'bullets' => [
                '<strong>Touchscreen and app control.</strong> Simple arming at the wall and from your phone.',
                '<strong>Cellular and battery backup.</strong> The single most important feature for reliability.',
                '<strong>Wide device compatibility.</strong> So your cameras, sensors, and locks all connect to one hub.',
                '<strong>Voice and routines.</strong> Arm at night or when you leave with a single command.',
            ],
        ],
        [
            'heading' => 'Backup that keeps working in an outage',
            'paragraphs' => [
                'The clearest difference between a real system and a do-it-yourself kit is what happens when the wifi drops. Cellular backup keeps the panel connected to monitoring, and battery backup keeps it powered through an outage. Without both, most kits simply go dark.',
            ],
        ],
        [
            'heading' => 'Do you need a separate panel?',
            'paragraphs' => [
                'Most full systems need a hub of some kind, but a single camera or a doorbell does not. We will tell you honestly what your setup actually requires rather than adding hardware you will not use.',
            ],
        ],
        [
            'heading' => 'How the panel fits your system',
            'paragraphs' => [
                'Think of the panel as the hub the rest of the system plugs into. Sensors report to it, cameras and locks pair with it, and monitoring runs through it. Choose the panel well and everything else has a stable home.',
            ],
        ],
    ],

    'mid_cta_text' => 'Set it up right. Call us today.',

    'sections_after_cta' => [
        [
            'heading' => 'What it costs',
            'paragraphs' => [
                'A panel is usually folded into the price of the system rather than sold on its own, and the value is in setting it up correctly. We will walk you through what your system needs and what it costs on the call.',
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'What does a security panel do?', 'a' => 'It is the hub that connects your devices, arms and disarms the system, and links to the monitoring center.'],
        ['q' => 'Do I need a security hub?', 'a' => 'Most full systems do. A single camera or doorbell usually does not.'],
        ['q' => 'Does the panel work without internet?', 'a' => 'A good panel uses cellular and battery backup to stay connected during an outage.'],
        ['q' => 'Can I control the panel from my phone?', 'a' => 'Yes. Modern panels pair with an app so you can arm, disarm, and check status from anywhere.'],
    ],

    'faq_schema' => '{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type": "Question", "name": "What does a security panel do?", "acceptedAnswer": {"@type": "Answer", "text": "It is the hub that connects your devices, arms and disarms the system, and links to the monitoring center."}},
    {"@type": "Question", "name": "Do I need a security hub?", "acceptedAnswer": {"@type": "Answer", "text": "Most full systems do. A single camera or doorbell usually does not."}},
    {"@type": "Question", "name": "Does the panel work without internet?", "acceptedAnswer": {"@type": "Answer", "text": "A good panel uses cellular and battery backup to stay connected during an outage."}},
    {"@type": "Question", "name": "Can I control the panel from my phone?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Modern panels pair with an app so you can arm, disarm, and check status from anywhere."}}
  ]
}',

    'final_headline' => 'The brain of your system, <span class="grad">done right</span>',
    'final_subtitle' => 'Talk to an advisor and get a hub that keeps your whole system reliable, even in an outage.',

    'related' => [
        ['href' => 'home-security/smart-alarm-system.php', 'icon' => 'fa-bell-concierge', 'label' => 'Smart Alarm System'],
        ['href' => 'home-security/door-and-window-sensors.php', 'icon' => 'fa-door-open', 'label' => 'Door & Window Sensors'],
        ['href' => 'home-security/smart-indoor-camera.php', 'icon' => 'fa-camera', 'label' => 'Smart Indoor Camera'],
        ['href' => 'home-security/smart-outdoor-camera.php', 'icon' => 'fa-video', 'label' => 'Smart Outdoor Camera'],
    ],
];

require_once __DIR__ . '/../includes/product-page-template.php';
