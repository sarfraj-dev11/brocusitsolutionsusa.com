<?php
/**
 * Smart Indoor Security Camera — Product Page
 * All content from Brocus-Home-Security-Product-Pages.docx
 */

$product = [
    'title'     => 'Smart Indoor Security Camera Installation & Monitoring | Brocus IT Solutions',
    'meta_desc' => 'Independent advice on smart indoor security cameras, plus a vetted provider for installation and monitoring. Watch over kids, pets, and valuables. Free, no-pressure consultation. Call today.',
    'h1'        => 'Smart Indoor Security Cameras, <span class="grad">Installed and Set Up for You</span>',
    'hero_subtitle' => 'Keep an eye on what matters inside — your kids, a pet, an older parent, or your valuables — from your phone. Independent advice, no pressure, and a vetted provider to install and set it up.',
    'hero_image'     => 'images/products/smart-indoor-camera.png',
    'hero_image_alt' => 'Smart indoor security camera installed in a modern living room',

    'trust_line' => 'Brocus is an independent advisor, not a camera seller. We compare indoor cameras across a vetted provider network and recommend what fits your home, so the advice stays on your side.',

    'benefits' => [
        'Clear HD video and night vision, with two-way audio from your phone',
        'Smart alerts for the rooms that matter, not every shadow',
        'Professional setup and integration with the rest of your system',
        'Advice matched to your home, your concerns, and your budget',
    ],

    'sections' => [
        [
            'heading' => 'What an indoor camera is really for',
            'paragraphs' => [
                'An indoor security camera does the one thing the rest of your system cannot. It lets you see inside when you are not there. Check that the kids got home, that a pet is calm, that a caregiver or contractor is doing what they should, or that a room with valuables has not been touched. It is about reassurance as much as security.',
            ],
        ],
        [
            'heading' => 'Where to place an indoor camera',
            'paragraphs' => [
                'Good coverage is about the right spots, not more cameras. The inside of your main entry doors catches anyone who comes in. A common living area covers the heart of the home. A clear view of the room with a safe or valuables protects what matters most. Avoid private rooms, and avoid pointing a camera straight at a window, where glare ruins the image.',
            ],
        ],
        [
            'heading' => 'What to look for in an indoor camera',
            'bullets' => [
                '<strong>Clear video, day and night.</strong> Sharp resolution and reliable night vision so footage is useful, not a blurry shape.',
                '<strong>Two-way audio.</strong> Speak to a child, a pet, or a visitor through the camera from your phone.',
                '<strong>Motion zones and smart alerts.</strong> Choose which areas trigger an alert so you are not pinged constantly.',
                '<strong>Local or cloud storage.</strong> Decide where recordings are saved and what a subscription adds.',
                '<strong>A monitoring option.</strong> Tied into a monitored system, a triggered event gets a real response, not just an alert.',
            ],
        ],
        [
            'heading' => 'A quick word on privacy',
            'paragraphs' => [
                'We will tell you when not to use one. Indoor cameras do not belong in bedrooms or bathrooms, and if you share your home with roommates or tenants, recording shared spaces can cross legal and personal lines. If your real worry is someone breaking in, outdoor cameras and entry sensors are the better spend. We would rather point you there than sell you a camera you do not need.',
            ],
        ],
        [
            'heading' => 'How an indoor camera fits your system',
            'paragraphs' => [
                'An indoor camera is one piece of a bigger picture. It covers the part outdoor cameras and door sensors cannot reach, which is what happens once someone is already inside. Linked to a monitored system, a triggered camera becomes a response, not just a clip on your phone.',
            ],
        ],
    ],

    'mid_cta_text' => 'See inside from anywhere. Call us today.',

    'sections_after_cta' => [
        [
            'heading' => 'What it costs',
            'paragraphs' => [
                'Indoor cameras are usually the cheapest hardware in a home setup. What moves the total is whether you add professional installation and a monitoring plan, and monitoring is billed monthly and differs from one provider to the next. We will price your exact setup on the call, with nothing owed for the advice.',
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'Can I watch my indoor camera on my phone?', 'a' => 'Yes. It streams to an app so you can check in live and get alerts from anywhere.'],
        ['q' => 'Do indoor cameras need a subscription?', 'a' => 'Not always. Many record locally for free, while cloud storage and professional monitoring usually carry a monthly fee.'],
        ['q' => 'Where should I place an indoor camera?', 'a' => 'Entry points, a main living area, and any room with valuables, while avoiding private spaces and windows.'],
        ['q' => 'Are indoor cameras worth it if I have outdoor cameras?', 'a' => 'They can be, since outdoor cameras stop at your walls and indoor cameras cover what happens inside.'],
    ],

    'faq_schema' => '{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type": "Question", "name": "Can I watch my indoor camera on my phone?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. It streams to an app so you can check in live and get alerts from anywhere."}},
    {"@type": "Question", "name": "Do indoor cameras need a subscription?", "acceptedAnswer": {"@type": "Answer", "text": "Not always. Many record locally for free, while cloud storage and professional monitoring usually carry a monthly fee."}},
    {"@type": "Question", "name": "Where should I place an indoor camera?", "acceptedAnswer": {"@type": "Answer", "text": "Entry points, a main living area, and any room with valuables, while avoiding private spaces and windows."}},
    {"@type": "Question", "name": "Are indoor cameras worth it if I have outdoor cameras?", "acceptedAnswer": {"@type": "Answer", "text": "They can be, since outdoor cameras stop at your walls and indoor cameras cover what happens inside."}}
  ]
}',

    'final_headline' => 'See inside <span class="grad">from anywhere</span>',
    'final_subtitle' => 'Talk to an independent advisor and get the indoor setup that fits your home, your concerns, and your budget.',

    'related' => [
        ['href' => 'home-security/smart-outdoor-camera.php', 'icon' => 'fa-video', 'label' => 'Smart Outdoor Camera'],
        ['href' => 'home-security/smart-doorbell-camera.php', 'icon' => 'fa-bell', 'label' => 'Smart Doorbell Camera'],
        ['href' => 'home-security/smart-alarm-system.php', 'icon' => 'fa-bell-concierge', 'label' => 'Smart Alarm System'],
        ['href' => 'home-security/door-and-window-sensors.php', 'icon' => 'fa-door-open', 'label' => 'Door & Window Sensors'],
    ],
];

require_once __DIR__ . '/../includes/product-page-template.php';
