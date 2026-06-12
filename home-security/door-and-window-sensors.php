<?php
/**
 * Smart Door & Window Sensors — Product Page
 * All content from Brocus-Home-Security-Product-Pages.docx
 */

$product = [
    'title'     => 'Smart Door & Window Sensor Installation | Brocus IT Solutions',
    'meta_desc' => 'Independent advice on smart door and window sensors that alert you the moment an entry opens, plus professional installation and monitoring. Free, no-pressure consultation. Call today.',
    'h1'        => 'Smart Door and Window Sensors, <span class="grad">Installed Where They Matter</span>',
    'hero_subtitle' => 'Sensors are the first thing to know when a door or window opens. They are the foundation of any alarm system. Independent advice and a vetted provider to place and install them where they count.',
    'hero_image'     => 'images/products/door-window-sensors.png',
    'hero_image_alt' => 'Smart door and window sensors installed on a window frame in a home',

    'trust_line' => 'Brocus is an independent advisor, not a parts supplier. We compare sensors across a vetted provider network and plan the coverage your home needs, with no padding.',

    'benefits' => [
        'Instant alerts the moment a door or window opens',
        'Entry, motion, and glass-break sensors for full coverage',
        'Professional placement so nothing is missed',
        'Tied into your alarm and monitoring for a real response',
    ],

    'sections' => [
        [
            'heading' => 'Why sensors are the foundation',
            'paragraphs' => [
                'Cameras show you what happened. Sensors are what actually triggers the alarm and the response. They are the trip-wire of the whole system, and the reason a break-in is caught the moment it starts rather than after the fact.',
            ],
        ],
        [
            'heading' => 'Most break-ins start at a door or window',
            'paragraphs' => [
                'This is where the data points. FBI figures show the large majority of break-ins happen through a door or a window, often one left unsecured. Sensors put a guard on every one of those points, so nothing opens without you knowing.',
            ],
        ],
        [
            'heading' => 'The main types of sensors',
            'bullets' => [
                '<strong>Entry sensors.</strong> On doors and windows, they alert the instant the two parts separate.',
                '<strong>Motion sensors.</strong> Cover a room or hallway and catch movement once someone is inside.',
                '<strong>Glass-break sensors.</strong> Listen for the sound of a window shattering, even before it opens.',
            ],
        ],
        [
            'heading' => 'Where to place them, and how many',
            'paragraphs' => [
                'Cover every exterior door, every accessible ground-floor window, and add a motion sensor on a main path through the home. More is not always better. The right points matter far more than the count, and we map them for your specific layout.',
            ],
        ],
        [
            'heading' => 'What to look for in sensors',
            'bullets' => [
                '<strong>Wireless with long battery life.</strong> Easy to place and low maintenance.',
                '<strong>Tamper alerts.</strong> So you know if a sensor is removed or interfered with.',
                '<strong>Works with your panel.</strong> Every sensor should report to one hub and your app.',
                '<strong>Low false-alarm design.</strong> Good sensors tell a real event from a pet or a draft.',
            ],
        ],
        [
            'heading' => 'How sensors fit your system',
            'paragraphs' => [
                'Sensors sit at the base of everything. The panel listens to them, monitoring reacts to them, and cameras confirm what they pick up. Take the sensors away and an alarm has nothing to trigger it.',
            ],
        ],
    ],

    'mid_cta_text' => 'Map your coverage in one call.',

    'sections_after_cta' => [
        [
            'heading' => 'What it costs',
            'paragraphs' => [
                'Each sensor is inexpensive on its own, so the real number depends on how many doors and windows you protect. We will count the points that matter for your layout and give you a clear total on the call.',
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'How do door and window sensors work?', 'a' => 'Two parts sit on the door or window and its frame. When they separate, the sensor signals the panel and triggers an alert.'],
        ['q' => 'How many sensors do I need?', 'a' => 'Enough to cover every exterior door and accessible window, plus a motion sensor or two. We can map it for your home.'],
        ['q' => 'Where should sensors go?', 'a' => 'On every exterior door, ground-floor and accessible windows, and main interior paths for motion.'],
        ['q' => 'Do sensors work without power?', 'a' => 'Sensors are battery powered and keep working in an outage, and a good panel has cellular and battery backup too.'],
    ],

    'faq_schema' => '{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type": "Question", "name": "How do door and window sensors work?", "acceptedAnswer": {"@type": "Answer", "text": "Two parts sit on the door or window and its frame. When they separate, the sensor signals the panel and triggers an alert."}},
    {"@type": "Question", "name": "How many sensors do I need?", "acceptedAnswer": {"@type": "Answer", "text": "Enough to cover every exterior door and accessible window, plus a motion sensor or two. We can map it for your home."}},
    {"@type": "Question", "name": "Where should sensors go?", "acceptedAnswer": {"@type": "Answer", "text": "On every exterior door, ground-floor and accessible windows, and main interior paths for motion."}},
    {"@type": "Question", "name": "Do sensors work without power?", "acceptedAnswer": {"@type": "Answer", "text": "Sensors are battery powered and keep working in an outage, and a good panel has cellular and battery backup too."}}
  ]
}',

    'final_headline' => 'Cover <span class="grad">every way in</span>',
    'final_subtitle' => 'Talk to an advisor and put a sensor on every way into your home.',

    'related' => [
        ['href' => 'home-security/smart-alarm-system.php', 'icon' => 'fa-bell-concierge', 'label' => 'Smart Alarm System'],
        ['href' => 'home-security/smart-security-panel.php', 'icon' => 'fa-tablet-screen-button', 'label' => 'Smart Security Panel'],
        ['href' => 'home-security/smart-door-locks.php', 'icon' => 'fa-lock', 'label' => 'Smart Door Locks'],
        ['href' => 'home-security/smart-outdoor-camera.php', 'icon' => 'fa-video', 'label' => 'Smart Outdoor Camera'],
    ],
];

require_once __DIR__ . '/../includes/product-page-template.php';
