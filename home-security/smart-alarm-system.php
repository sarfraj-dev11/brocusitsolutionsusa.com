<?php
/**
 * Smart Alarm System — Product Page
 * All content from Brocus-Home-Security-Product-Pages.docx
 */

$product = [
    'title'     => 'Smart Home Alarm System Installation & Monitoring | Brocus IT Solutions',
    'meta_desc' => 'Independent advice on smart home alarm systems with professional monitoring, plus a vetted provider to install it. Compare monitored and self-monitored options. Free consultation. Call today.',
    'h1'        => 'Smart Home Alarm Systems, <span class="grad">Built Around Your Home</span>',
    'hero_subtitle' => 'A modern alarm system senses trouble, sounds the alarm, and can bring help — all from one app. Independent advice and a vetted provider to design and install the right system for your home.',
    'hero_image'     => 'images/products/smart-alarm-system.png',
    'hero_image_alt' => 'Smart home alarm system with touchscreen panel and sensors',

    'trust_line' => 'Brocus is an independent advisor, not a security brand. We compare full alarm systems across a vetted provider network and design one around your home, not around a single product line.',

    'benefits' => [
        'Sensors, a panel, and an app working as one connected system',
        '24/7 professional monitoring options that respond for you',
        'Cellular and battery backup so it works in an outage',
        'Designed around your home, your entries, and your budget',
    ],

    'sections' => [
        [
            'heading' => 'What a modern alarm system includes',
            'paragraphs' => [
                'It is far more than a siren. A modern alarm system combines entry and motion sensors, a control panel, an app, and optional cameras, all working together, with the choice of professional monitoring that responds when an alarm trips.',
            ],
        ],
        [
            'heading' => 'Alarms work as a deterrent',
            'paragraphs' => [
                'In a University of North Carolina at Charlotte study of more than 400 burglars, about 83 percent said they would check for an alarm before attempting a break-in, and around 60 percent would move to another target if one was present. With the FBI putting the average burglary loss at more than 2,600 dollars, an alarm is one of the few measures with strong evidence behind it.',
            ],
        ],
        [
            'heading' => 'Monitored or self-monitored?',
            'paragraphs' => [
                'This is the main decision. Self-monitored means alerts come to your phone and the response is up to you. Professionally monitored means trained staff respond and can dispatch help even when your phone is away. We help you weigh which fits your home, your schedule, and your peace of mind.',
            ],
        ],
        [
            'heading' => 'What to look for in an alarm system',
            'bullets' => [
                '<strong>Wireless sensors.</strong> Easier to place well and to expand later.',
                '<strong>Cellular and battery backup.</strong> So the system keeps working when the power or internet drops.',
                '<strong>App control.</strong> Arm, disarm, and check status from anywhere.',
                '<strong>Monitoring options.</strong> The ability to add professional monitoring when you want it.',
                '<strong>Room to grow.</strong> Start with the essentials and add cameras, locks, and sensors over time.',
            ],
        ],
        [
            'heading' => 'When a full alarm is worth it, and when it is not',
            'paragraphs' => [
                'For most homes with several entry points, a full alarm system is worth it. For a small, low-risk space, a few sensors and a camera may give you most of the benefit for less. We will tell you honestly which describes you.',
            ],
        ],
        [
            'heading' => 'How the alarm fits your system',
            'paragraphs' => [
                'The alarm system is the spine everything attaches to. Cameras and locks extend it, sensors feed it, and monitoring is what turns a tripped sensor into someone actually responding. Build this right and every other piece has a place to plug in.',
            ],
        ],
    ],

    'mid_cta_text' => 'Design your system with an advisor.',

    'sections_after_cta' => [
        [
            'heading' => 'What it costs',
            'paragraphs' => [
                'Your total comes from three parts: the equipment, optional professional installation, and a monitoring plan if you choose one, billed monthly. Rather than guess, we will size and price a system for your specific home on the call.',
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'Are home alarm systems worth it?', 'a' => 'The evidence says yes for most homes. Visible alarms deter many burglars, and monitoring brings a real response.'],
        ['q' => 'Do alarm systems need monitoring?', 'a' => 'Not required, but monitoring is what turns an alert into a response when you cannot act yourself.'],
        ['q' => 'What is the difference between monitored and self-monitored?', 'a' => 'Self-monitored sends alerts to you. Monitored has trained staff who respond and can dispatch help.'],
        ['q' => 'Do alarm systems work without power or internet?', 'a' => 'A properly installed system uses cellular and battery backup to keep working during an outage.'],
    ],

    'faq_schema' => '{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type": "Question", "name": "Are home alarm systems worth it?", "acceptedAnswer": {"@type": "Answer", "text": "The evidence says yes for most homes. Visible alarms deter many burglars, and monitoring brings a real response."}},
    {"@type": "Question", "name": "Do alarm systems need monitoring?", "acceptedAnswer": {"@type": "Answer", "text": "Not required, but monitoring is what turns an alert into a response when you cannot act yourself."}},
    {"@type": "Question", "name": "What is the difference between monitored and self-monitored?", "acceptedAnswer": {"@type": "Answer", "text": "Self-monitored sends alerts to you. Monitored has trained staff who respond and can dispatch help."}},
    {"@type": "Question", "name": "Do alarm systems work without power or internet?", "acceptedAnswer": {"@type": "Answer", "text": "A properly installed system uses cellular and battery backup to keep working during an outage."}}
  ]
}',

    'final_headline' => 'Protect <span class="grad">the whole home</span>',
    'final_subtitle' => 'Talk to an advisor and design an alarm system that fits your home and the way you live.',

    'related' => [
        ['href' => 'home-security/smart-security-panel.php', 'icon' => 'fa-tablet-screen-button', 'label' => 'Smart Security Panel'],
        ['href' => 'home-security/door-and-window-sensors.php', 'icon' => 'fa-door-open', 'label' => 'Door & Window Sensors'],
        ['href' => 'home-security/smart-indoor-camera.php', 'icon' => 'fa-camera', 'label' => 'Smart Indoor Camera'],
        ['href' => 'home-security/smart-door-locks.php', 'icon' => 'fa-lock', 'label' => 'Smart Door Locks'],
    ],
];

require_once __DIR__ . '/../includes/product-page-template.php';
