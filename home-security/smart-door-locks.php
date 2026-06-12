<?php
/**
 * Smart Door Locks — Product Page
 * All content from Brocus-Home-Security-Product-Pages.docx
 */

$product = [
    'title'     => 'Smart Door Lock Installation & Setup | Brocus IT Solutions',
    'meta_desc' => 'Independent advice on smart door locks with keyless entry and app control, plus professional installation and integration with your security system. Free, no-pressure consultation. Call today.',
    'h1'        => 'Smart Door Locks, <span class="grad">Installed and Synced to Your System</span>',
    'hero_subtitle' => 'Lock and unlock your door from your phone, give codes to family, guests, or workers, and never hide a spare key again. Independent advice and a vetted provider to install it and tie it into your system.',
    'hero_image'     => 'images/products/smart-door-lock.png',
    'hero_image_alt' => 'Smart door lock with keypad installed on a modern front door',

    'trust_line' => 'Brocus is an independent advisor, not a lock retailer. We compare smart locks across a vetted provider network so you get the one that fits your door and your system, not the one with the biggest markup.',

    'benefits' => [
        'Keyless entry you control from your phone, from anywhere',
        'Unique codes for family, guests, cleaners, or deliveries',
        'Auto-lock so the door is never left open by mistake',
        'Installed and integrated with the rest of your security',
    ],

    'sections' => [
        [
            'heading' => 'A smart lock is more than convenience',
            'paragraphs' => [
                'A smart lock removes the weakest habit in home security — the hidden key and the shared spare. You control who gets in, see who comes and goes, and lock up from anywhere. It is convenience and security in the same device.',
            ],
        ],
        [
            'heading' => 'Most break-ins start at a door',
            'paragraphs' => [
                'There is a practical reason to start here. FBI burglary data shows most break-ins happen through a door or a window, and the front door is one of the most common entry points. A strong, well-controlled lock closes the easiest path in.',
            ],
        ],
        [
            'heading' => 'What to look for in a smart lock',
            'bullets' => [
                '<strong>A sturdy deadbolt.</strong> Look for a solid build and a recognized security grade, not just smart features.',
                '<strong>App and code access.</strong> Unlock from your phone and create codes you can manage or revoke.',
                '<strong>Works with your system.</strong> Choose a lock that pairs with your hub and app so everything lives in one place.',
                '<strong>A backup way in.</strong> A keypad or physical key so a dead battery never locks you out.',
                '<strong>Auto-lock and alerts.</strong> The door locks itself, and you get a notification if it is left open.',
            ],
        ],
        [
            'heading' => 'Codes for family, guests, and workers',
            'paragraphs' => [
                'This is where a smart lock earns its keep. Give a permanent code to family, a temporary one to a guest or a cleaner, and a delivery code you switch off afterward. You get a log of who used the door and when, with no keys to copy or lose.',
            ],
        ],
        [
            'heading' => 'Smart locks for renters',
            'paragraphs' => [
                'Many smart locks fit over your existing deadbolt with no permanent changes and swap back when you move, which makes them renter-friendly. If you lease, we point you to options that fit your agreement.',
            ],
        ],
        [
            'heading' => 'How a smart lock fits your system',
            'paragraphs' => [
                'A smart lock rarely works alone. It talks to your panel and app, sits alongside your door sensors, and slots into routines such as locking up the moment you arm the system at night. One device, woven into the whole.',
            ],
        ],
    ],

    'mid_cta_text' => 'Get a straight answer in one call.',

    'sections_after_cta' => [
        [
            'heading' => 'What it costs',
            'paragraphs' => [
                'Cost here is mostly the lock and, if you want it, professional fitting, with the real payoff in how cleanly it ties into your wider system. We will give you a clear figure for your door once we know what you already have.',
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'Are smart locks safe?', 'a' => 'Quality smart locks use strong encryption and a solid deadbolt. The bigger risk is a weak password, which we help you avoid.'],
        ['q' => 'Do smart locks work without wifi?', 'a' => 'Most still work by code or key without wifi. Remote control from your phone needs a connection.'],
        ['q' => 'Can I use a smart lock if I rent?', 'a' => 'Often yes. Many fit over your existing deadbolt and swap back when you move.'],
        ['q' => 'Do smart locks need professional installation?', 'a' => 'A single lock can be do-it-yourself, but a professional makes sure it fits, locks securely, and ties into your system.'],
    ],

    'faq_schema' => '{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type": "Question", "name": "Are smart locks safe?", "acceptedAnswer": {"@type": "Answer", "text": "Quality smart locks use strong encryption and a solid deadbolt. The bigger risk is a weak password, which we help you avoid."}},
    {"@type": "Question", "name": "Do smart locks work without wifi?", "acceptedAnswer": {"@type": "Answer", "text": "Most still work by code or key without wifi. Remote control from your phone needs a connection."}},
    {"@type": "Question", "name": "Can I use a smart lock if I rent?", "acceptedAnswer": {"@type": "Answer", "text": "Often yes. Many fit over your existing deadbolt and swap back when you move."}},
    {"@type": "Question", "name": "Do smart locks need professional installation?", "acceptedAnswer": {"@type": "Answer", "text": "A single lock can be do-it-yourself, but a professional makes sure it fits, locks securely, and ties into your system."}}
  ]
}',

    'final_headline' => 'Control your door <span class="grad">from anywhere</span>',
    'final_subtitle' => 'Talk to an advisor and choose a smart lock that fits your door and closes the easiest way in.',

    'related' => [
        ['href' => 'home-security/door-and-window-sensors.php', 'icon' => 'fa-door-open', 'label' => 'Door & Window Sensors'],
        ['href' => 'home-security/smart-alarm-system.php', 'icon' => 'fa-bell-concierge', 'label' => 'Smart Alarm System'],
        ['href' => 'home-security/smart-security-panel.php', 'icon' => 'fa-tablet-screen-button', 'label' => 'Smart Security Panel'],
        ['href' => 'home-security/smart-doorbell-camera.php', 'icon' => 'fa-bell', 'label' => 'Smart Doorbell Camera'],
    ],
];

require_once __DIR__ . '/../includes/product-page-template.php';
