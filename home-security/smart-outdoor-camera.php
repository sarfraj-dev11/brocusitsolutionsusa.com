<?php
/**
 * Smart Outdoor Security Camera — Product Page
 * All content from Brocus-Home-Security-Product-Pages.docx
 */

$product = [
    'title'     => 'Smart Outdoor Security Camera Installation & Monitoring | Brocus IT Solutions',
    'meta_desc' => 'Independent advice on smart outdoor security cameras that deter intruders before they reach your door, plus professional installation and monitoring. Free, no-pressure consultation. Call today.',
    'h1'        => 'Smart Outdoor Security Cameras, <span class="grad">Professionally Installed</span>',
    'hero_subtitle' => 'Stop trouble at the edge of your property. Outdoor cameras watch your perimeter, record anyone who approaches, and warn off intruders before they reach a door. Independent advice and a vetted provider to install and monitor.',
    'hero_image'     => 'images/products/smart-outdoor-camera.png',
    'hero_image_alt' => 'Smart outdoor security camera installed under a roofline',

    'trust_line' => 'Brocus is an independent advisor, not an equipment dealer. We weigh outdoor cameras across a vetted provider network and point you to the coverage that suits your property, not the priciest kit.',

    'benefits' => [
        'Weatherproof cameras with clear night vision, day and night',
        'Smart deterrence with light and siren to scare off intruders early',
        'Professional placement so there are no blind spots',
        'Coverage planned around your home and your budget',
    ],

    'sections' => [
        [
            'heading' => 'Why outdoor cameras matter most',
            'paragraphs' => [
                'The best place to stop a break-in is outside, before anyone reaches a door or window. Outdoor cameras are your first layer, and when they are visible, they do as much to prevent a crime as to record one.',
            ],
        ],
        [
            'heading' => 'The deterrent effect is real',
            'paragraphs' => [
                'This is one of the few areas of home security with strong evidence behind it. In a University of North Carolina at Charlotte study of more than 400 burglars, around 60 percent said a visible camera or security system would lead them to choose a different target. A multi-city evaluation by the Urban Institute found monitored camera systems reduced crime in covered areas, in some cases by close to 20 percent, without pushing it next door.',
            ],
        ],
        [
            'heading' => 'Coverage planning: how many, and where',
            'paragraphs' => [
                'More cameras is not the goal. The right cameras in the right places is. Cover the front entrance and driveway, since the front door is a common entry point. Cover back and side doors, which intruders prefer because they are hidden. Watch ground-floor windows and any dark corner where someone could approach unseen. A typical home is served well by a handful of well-placed cameras, not a dozen.',
            ],
        ],
        [
            'heading' => 'What to look for in an outdoor camera',
            'bullets' => [
                '<strong>Weather resistance.</strong> A proper weatherproof rating to survive heat, cold, rain, and dust year-round.',
                '<strong>Real night vision, ideally in color.</strong> Most incidents happen in low light, so the camera must see clearly after dark.',
                '<strong>A wide, useful field of view.</strong> Enough to watch an entry and its approach without a dozen units.',
                '<strong>Smart deterrence.</strong> A built-in light and siren can warn an intruder off the moment they are detected.',
                '<strong>Backup that survives an outage.</strong> Cellular and battery backup so a cut wire or power cut does not blind your system.',
            ],
        ],
        [
            'heading' => 'When you may not need more cameras',
            'paragraphs' => [
                'If every entrance is already covered and monitored, adding more cameras often gives you little. We will tell you when you have enough, and where a single well-placed camera or a motion light would do more than three more crowded into one view.',
            ],
        ],
        [
            'heading' => 'How outdoor cameras fit your system',
            'paragraphs' => [
                'Outdoor cameras are the outer ring of a complete setup. They hand off to entry sensors if anyone slips past, and to monitoring that acts on what the cameras see. Working together, footage becomes a response instead of a record you watch after the fact.',
            ],
        ],
    ],

    'mid_cta_text' => 'Plan your coverage in one call.',

    'sections_after_cta' => [
        [
            'heading' => 'What it costs',
            'paragraphs' => [
                'Expect outdoor cameras to run higher than indoor ones, since they are weather-built and often carry lights and sirens. Skilled installation counts for more outside, and any monitoring plan is a monthly charge that depends on the provider. We will lay out real figures for your property on the call.',
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'How many outdoor cameras do I need?', 'a' => 'Most single-family homes are covered well by a few at the key approaches rather than a large number. We can map it out for you.'],
        ['q' => 'Do outdoor cameras really deter burglars?', 'a' => 'Research says visible cameras lead many burglars to pick a different target, especially when paired with monitoring.'],
        ['q' => 'What happens if the power or internet goes out?', 'a' => 'With cellular and battery backup, a properly installed system keeps recording and stays connected to monitoring.'],
        ['q' => 'Do I need professional installation outdoors?', 'a' => 'It is strongly worth it. Correct height, angle, weather sealing, and integration are what make the footage useful.'],
    ],

    'faq_schema' => '{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type": "Question", "name": "How many outdoor cameras do I need?", "acceptedAnswer": {"@type": "Answer", "text": "Most single-family homes are covered well by a few at the key approaches rather than a large number. We can map it out for you."}},
    {"@type": "Question", "name": "Do outdoor cameras really deter burglars?", "acceptedAnswer": {"@type": "Answer", "text": "Research says visible cameras lead many burglars to pick a different target, especially when paired with monitoring."}},
    {"@type": "Question", "name": "What happens if the power or internet goes out?", "acceptedAnswer": {"@type": "Answer", "text": "With cellular and battery backup, a properly installed system keeps recording and stays connected to monitoring."}},
    {"@type": "Question", "name": "Do I need professional installation outdoors?", "acceptedAnswer": {"@type": "Answer", "text": "It is strongly worth it. Correct height, angle, weather sealing, and integration are what make the footage useful."}}
  ]
}',

    'final_headline' => 'Protect <span class="grad">your perimeter</span>',
    'final_subtitle' => 'Talk to an advisor and map outdoor coverage that closes every approach to your home.',

    'related' => [
        ['href' => 'home-security/smart-indoor-camera.php', 'icon' => 'fa-camera', 'label' => 'Smart Indoor Camera'],
        ['href' => 'home-security/smart-doorbell-camera.php', 'icon' => 'fa-bell', 'label' => 'Smart Doorbell Camera'],
        ['href' => 'home-security/smart-security-panel.php', 'icon' => 'fa-tablet-screen-button', 'label' => 'Smart Security Panel'],
        ['href' => 'home-security/door-and-window-sensors.php', 'icon' => 'fa-door-open', 'label' => 'Door & Window Sensors'],
    ],
];

require_once __DIR__ . '/../includes/product-page-template.php';
