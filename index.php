<?php

/**
 * <CLARkODER> - Developer Portfolio
 * EDONG, CLARK STEVEN T. | Mati City, Philippines
 */

$config = [
    'name' => 'EDONG, CLARK STEVEN T.',
    'short_name' => 'CLARkODER',
    'age' => 27,
    'subtitle' => 'Full-Stack Developer',
    'location' => 'Mati City, Philippines',
    'postal' => '8200',
    'email' => 'clarksteven.edong@softtechservices.net',
    'phone' => '+639 703 735 533',
    'status' => 'AVAILABLE',
    'profile_image' => 'assets/profile.jpg',
    // Cloudflare Turnstile — site key is public, secret key is in contact.php
    'turnstile_site_key' => '0x4AAAAAACu7HA_zSWn5iEok',
];

$navItems = [
    ['id' => 'manifest', 'label' => 'About', 'index' => '01'],
    ['id' => 'archive', 'label' => 'Archive', 'index' => '02'],
    ['id' => 'capabilities', 'label' => 'Stack', 'index' => '03'],
    ['id' => 'protocol', 'label' => 'Journey', 'index' => '04'],
    ['id' => 'transmit', 'label' => 'Contact', 'index' => '05'],
];

// Real projects — live screenshots from thum.io
$projects = [
    [
        'title' => 'DOIT College Portal',
        'category' => 'Education',
        'desc' => 'Academic portal for DOIT College — handles student records, enrollment, and online services.',
        'url' => 'https://portal.doitcollege.com/',
        'tags' => ['PHP', 'MySQL', 'Bootstrap'],
        'accent' => 'primary',
    ],
    [
        'title' => 'WCManila SRMS',
        'category' => 'Education',
        'desc' => 'Student Records Management System for WCManila — grade tracking, enrollment, and reporting.',
        'url' => 'https://wcmanila-srms.com/',
        'tags' => ['PHP', 'MySQL', 'jQuery'],
        'accent' => 'teal',
    ],
    [
        'title' => 'WCManila College SRMS',
        'category' => 'Education',
        'desc' => 'College-tier SRMS branch with curriculum mapping, subject loading, and faculty modules.',
        'url' => 'https://college.wcmanila-srms.com/',
        'tags' => ['PHP', 'MySQL', 'AJAX'],
        'accent' => 'primary',
    ],
    [
        'title' => 'IHMA Mati SRMS',
        'category' => 'Education',
        'desc' => 'Institute of Health and Management SRMS — handles records, grading, and academic workflows.',
        'url' => 'https://srms.ihmamati.edu.ph/',
        'tags' => ['PHP', 'MySQL', 'Tailwind'],
        'accent' => 'teal',
    ],
    [
        'title' => 'DepEd QAME',
        'category' => 'Government',
        'desc' => 'Quality Assurance Monitoring & Evaluation system for the Department of Education.',
        'url' => 'https://deped-qame.com/',
        'tags' => ['PHP', 'MySQL', 'Chart.js'],
        'accent' => 'orange',
    ],
    [
        'title' => 'DepEd Davao Sports',
        'category' => 'Government',
        'desc' => 'Sports management platform for DepEd Davao Oriental — events, registration, and results.',
        'url' => 'https://sports.depeddavor.com/',
        'tags' => ['PHP', 'MySQL'],
        'accent' => 'orange',
    ],
    [
        'title' => 'DepEd Davao Events',
        'category' => 'Government',
        'desc' => 'Events management for DepEd Davao Oriental — scheduling, attendance, and announcements.',
        'url' => 'https://events.depeddavor.com/',
        'tags' => ['PHP', 'MySQL'],
        'accent' => 'orange',
    ],
    [
        'title' => 'DepEd Davao BAC',
        'category' => 'Government',
        'desc' => 'Bids and Awards Committee portal for procurement transparency and bidder management.',
        'url' => 'https://bac.depeddavor.com/',
        'tags' => ['PHP', 'MySQL'],
        'accent' => 'orange',
    ],
    [
        'title' => 'TrabaWho Mati',
        'category' => 'Government',
        'desc' => 'Job-matching platform for the City Government of Mati — connects job seekers and employers.',
        'url' => 'https://trabawho.mati.gov.ph/',
        'tags' => ['PHP', 'MySQL', 'Tailwind'],
        'accent' => 'purple',
    ],
    [
        'title' => 'FBMSO',
        'category' => 'Business',
        'desc' => 'Business management system built on SoftTechCo infrastructure for internal operations.',
        'url' => 'https://fbmso.softtechco.biz/',
        'tags' => ['PHP', 'MySQL'],
        'accent' => 'primary',
    ],
    [
        'title' => 'SoftTech CMS',
        'category' => 'Business',
        'desc' => 'Content Management System for SoftTech Services — pages, posts, media, and roles.',
        'url' => 'https://cms.softtechservices.net/',
        'tags' => ['PHP', 'MySQL', 'TinyMCE'],
        'accent' => 'primary',
    ],
    [
        'title' => 'PlagiaScope',
        'category' => 'Business',
        'desc' => 'Plagiarism detection tool — document similarity scoring and source matching for academia.',
        'url' => 'https://plagiascope.softtechco.biz/',
        'tags' => ['PHP', 'Python', 'NLP'],
        'accent' => 'teal',
    ],
    [
        'title' => 'SoftTech PMS',
        'category' => 'Business',
        'desc' => 'Project Management System — tasks, milestones, time tracking, and team collaboration.',
        'url' => 'https://softtech-pms.com/',
        'tags' => ['PHP', 'MySQL', 'Tailwind'],
        'accent' => 'primary',
    ],
    [
        'title' => 'SRMS Mobile (Flutter)',
        'category' => 'Mobile',
        'desc' => 'Companion mobile app for SRMS — published on Google Play. Built with Flutter.',
        'url' => 'https://play.google.com/store/apps/details?id=com.srms.srms_flutter_project',
        'tags' => ['Flutter', 'Dart', 'REST API'],
        'accent' => 'purple',
    ],
];

$skills = [
    ['name' => 'PHP', 'icon' => 'php', 'level' => 95],
    ['name' => 'MySQL', 'icon' => 'database', 'level' => 92],
    ['name' => 'JavaScript', 'icon' => 'javascript', 'level' => 88],
    ['name' => 'Tailwind', 'icon' => 'palette', 'level' => 90],
    ['name' => 'Flutter', 'icon' => 'phone_iphone', 'level' => 82],
    ['name' => 'Laravel', 'icon' => 'rocket_launch', 'level' => 80],
    ['name' => 'React', 'icon' => 'widgets', 'level' => 75],
    ['name' => 'Git', 'icon' => 'commit', 'level' => 88],
];

$timeline = [
    ['year' => '2025', 'title' => 'Full-Stack Developer', 'desc' => 'Building education, government, and SaaS systems across the Davao Region.'],
    ['year' => '2023', 'title' => 'Web Systems Engineer', 'desc' => 'Delivered SRMS suite for multiple academic institutions.'],
    ['year' => '2021', 'title' => 'Backend Developer', 'desc' => 'Focused on PHP/MySQL backends for business and government clients.'],
    ['year' => '2019', 'title' => 'Junior Developer', 'desc' => 'Started professional career — frontend and CMS work.'],
    ['year' => '2018', 'title' => 'System Boot', 'desc' => 'First commit. Started learning web development.'],
];

$socialLinks = [
    [
        'label' => 'Email',
        'value' => $config['email'],
        'url' => 'https://mail.google.com/mail/?view=cm&fs=1&to=' . rawurlencode($config['email']) . '&su=' . rawurlencode('Portfolio Inquiry'),
        'icon' => 'mail',
        'target' => '_blank',
    ],
    [
        'label' => 'Call / Viber',
        'value' => $config['phone'],
        'url' => 'tel:' . preg_replace('/\s+/', '', $config['phone']),
        'icon' => 'call',
        'target' => '_self',
    ],
    [
        'label' => 'Mati City',
        'value' => 'Davao Oriental, Philippines',
        'url' => 'https://maps.google.com/?q=' . rawurlencode($config['location']),
        'icon' => 'location_on',
        'target' => '_blank',
    ],
];

// Helper: live screenshot URL via thum.io
function thumb($url)
{
    return 'https://image.thum.io/get/width/640/crop/400/' . $url;
}

function hostLabel($url)
{
    $host = parse_url($url, PHP_URL_HOST) ?: $url;

    return preg_replace('/^www\./', '', $host);
}

$projectCountsByCategory = [];
foreach ($projects as $project) {
    $projectCountsByCategory[$project['category']] = ($projectCountsByCategory[$project['category']] ?? 0) + 1;
}

$projectTotal = count($projects);
$projectSectorCount = count($projectCountsByCategory);
$featuredProject = $projects[0];
$terminalCommands = [
    'ls live/' . strtolower(str_replace(' ', '-', $projects[0]['title'])),
    'curl -I https://' . hostLabel($projects[0]['url']),
    'mysql -e "SHOW DATABASES LIKE \'%srms%\';"',
    'grep -R "DepEd" deployments/government/',
    'flutter build appbundle --release',
];

?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLARkODER</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%232979FF'/><text x='50' y='68' font-size='50' text-anchor='middle' fill='white' font-family='system-ui'>&lt;/&gt;</text></svg>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@300&display=swap" rel="stylesheet">

    <!-- Cloudflare Turnstile -->
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Space Grotesk', 'system-ui', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        primary: '#2979FF',
                        'primary-dark': '#1B5FD7',
                        teal: '#00D4AA',
                        orange: '#FF6B35',
                        purple: '#A855F7',
                        surface: {
                            DEFAULT: '#fafafa',
                            dim: '#f3f4f6',
                        },
                        'on-surface': {
                            DEFAULT: '#0a0a0f',
                            variant: '#4a5059',
                        },
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s ease-in-out infinite',
                    },
                },
            },
        }
    </script>

    <!-- Custom Styles -->
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #2979FF;
            border-radius: 4px;
        }

        /* Subtle dot grid background */
        .dot-grid {
            background-image: radial-gradient(circle, #e5e7eb 1px, transparent 1px);
            background-size: 24px 24px;
        }

        /* Asymmetric Border */
        .asymmetric-border {
            border-left: 2px solid #2979FF;
            padding-left: 1rem;
        }

        /* Scroll Progress Bar */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 2px;
            background: linear-gradient(90deg, #2979FF, #00D4AA);
            z-index: 9999;
            transition: width 0.1s ease;
        }

        /* Project Card */
        .project-card {
            transition: transform 0.3s cubic-bezier(0.65, 0, 0.35, 1), box-shadow 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(41, 121, 255, 0.12);
        }

        .project-card img {
            transition: transform 0.6s cubic-bezier(0.65, 0, 0.35, 1);
        }

        .project-card:hover img {
            transform: scale(1.05);
        }

        /* Reveal-on-scroll */
        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s cubic-bezier(0.65, 0, 0.35, 1);
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Filter buttons */
        .filter-btn {
            padding: 0.4rem 0.9rem;
            border: 1px solid #e5e7eb;
            background: transparent;
            border-radius: 9999px;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            cursor: pointer;
            transition: all 0.2s ease;
            color: #4a5059;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: #2979FF;
            border-color: #2979FF;
            color: white;
        }

        /* Live time chip */
        .live-time {
            font-family: 'JetBrains Mono', monospace;
            background: rgba(41, 121, 255, 0.08);
            border: 1px solid rgba(41, 121, 255, 0.2);
            border-radius: 6px;
            padding: 0.35rem 0.7rem;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 11px;
            letter-spacing: 0.08em;
        }

        .live-time .dot {
            width: 5px;
            height: 5px;
            background: #00D4AA;
            border-radius: 50%;
            animation: pulse 1.2s ease-in-out infinite;
        }

        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #2979FF, #00D4AA);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Back to top */
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: #2979FF;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
            z-index: 999;
            box-shadow: 0 4px 12px rgba(41, 121, 255, 0.3);
        }

        .back-to-top.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .back-to-top:hover {
            background: #1B5FD7;
            transform: translateY(-2px);
        }

        .back-to-top span {
            color: white;
            font-size: 18px;
        }

        /* Skeleton for screenshots while loading */
        .screenshot-frame {
            background: linear-gradient(90deg, #f3f4f6 0%, #e5e7eb 50%, #f3f4f6 100%);
            background-size: 200% 100%;
            animation: shimmer 1.5s ease-in-out infinite;
        }

        @keyframes shimmer {
            0% {
                background-position: 200% 0;
            }

            100% {
                background-position: -200% 0;
            }
        }

        .screenshot-frame img.loaded {
            animation: none;
        }

        /* Nav active link */
        .nav-link {
            position: relative;
        }

        .nav-link.active {
            color: #2979FF;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: #2979FF;
            transition: width 0.25s ease;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        /* Timeline marker */
        .timeline-dot {
            box-shadow: 0 0 0 4px #fafafa;
        }

        /* ============== RESTORED EFFECTS ============== */

        /* Scanning line across hero */
        .scan-line {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, #2979FF, transparent);
            animation: scanMove 5s linear infinite;
            opacity: 0.6;
            z-index: 1;
            pointer-events: none;
        }

        @keyframes scanMove {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(100%);
            }
        }

        /* Floating background particles */
        .bg-particles {
            position: absolute;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: 0;
        }

        .bg-particle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.18;
            animation: particleFloat 18s ease-in-out infinite;
        }

        @keyframes particleFloat {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            25% {
                transform: translate(20px, -30px) rotate(60deg);
            }

            50% {
                transform: translate(-15px, -55px) rotate(120deg);
            }

            75% {
                transform: translate(-25px, -25px) rotate(200deg);
            }
        }

        /* Floating geometric shapes (subtle decoration) */
        .geo-shape {
            position: absolute;
            border: 1px solid rgba(41, 121, 255, 0.18);
            pointer-events: none;
            animation: geoFloat 14s ease-in-out infinite;
        }

        @keyframes geoFloat {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            50% {
                transform: translate(20px, -40px) rotate(180deg);
            }
        }

        /* Spinning ring decoration */
        .spin-slow {
            animation: spin 22s linear infinite;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /* ============== CUSTOM CURSOR + TRAIL ============== */

        /* Hide native cursor on desktop when over interactive areas (optional — comment out if you want it visible) */
        /* @media (pointer: fine) { body, a, button { cursor: none; } } */

        /* Cursor glow halo */
        .cursor-glow {
            position: fixed;
            width: 360px;
            height: 360px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(41, 121, 255, 0.18) 0%, rgba(0, 212, 170, 0.06) 40%, transparent 70%);
            pointer-events: none;
            z-index: 9997;
            transform: translate(-50%, -50%);
            transition: opacity 0.3s ease;
            left: -500px;
            top: -500px;
        }

        /* Cursor outline follower */
        .cursor-follower {
            position: fixed;
            width: 26px;
            height: 26px;
            border: 2px solid #2979FF;
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: width 0.2s ease, height 0.2s ease, border-color 0.2s ease, opacity 0.3s ease;
            left: -500px;
            top: -500px;
            mix-blend-mode: difference;
        }

        .cursor-follower.hovering {
            width: 50px;
            height: 50px;
            border-color: #00D4AA;
        }

        /* Cursor center dot */
        .cursor-dot {
            position: fixed;
            width: 6px;
            height: 6px;
            background: #00D4AA;
            border-radius: 50%;
            pointer-events: none;
            z-index: 10000;
            transform: translate(-50%, -50%);
            left: -500px;
            top: -500px;
            box-shadow: 0 0 12px rgba(0, 212, 170, 0.7);
        }

        /* Cursor trail particles */
        .cursor-trail {
            position: fixed;
            border-radius: 50%;
            pointer-events: none;
            z-index: 9998;
            transform: translate(-50%, -50%);
            mix-blend-mode: screen;
        }

        /* Hide all cursor elements on touch / small devices */
        @media (max-width: 1023px),
        (pointer: coarse) {

            .cursor-glow,
            .cursor-follower,
            .cursor-dot,
            .cursor-trail {
                display: none !important;
            }
        }

        /* Tilt card 3D effect for profile */
        .tilt-card {
            transform-style: preserve-3d;
            transition: transform 0.25s cubic-bezier(0.65, 0, 0.35, 1);
        }

        .tilt-card .tilt-inner {
            transform-style: preserve-3d;
            transition: transform 0.4s cubic-bezier(0.65, 0, 0.35, 1);
        }

        /* Stronger project card hover w/ glow */
        .project-card {
            position: relative;
        }

        .project-card::before {
            content: '';
            position: absolute;
            inset: -1px;
            border-radius: inherit;
            background: linear-gradient(135deg, rgba(41, 121, 255, 0.35), rgba(0, 212, 170, 0.35));
            opacity: 0;
            z-index: -1;
            transition: opacity 0.35s ease;
            filter: blur(8px);
        }

        .project-card:hover::before {
            opacity: 1;
        }

        .project-card:hover {
            transform: translateY(-6px) scale(1.01);
            box-shadow: 0 18px 40px rgba(41, 121, 255, 0.18);
        }

        /* Skill card hover */
        .skill-card {
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .skill-card:hover {
            background-color: rgba(41, 121, 255, 0.05);
            transform: translateY(-3px);
        }

        .skill-card:hover .material-symbols-outlined {
            transform: rotate(15deg) scale(1.12);
            transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        /* Nav link underline already exists, also add color transition */
        .nav-link {
            transition: color 0.2s ease;
        }

        /* Parallax-target moves on scroll */
        .parallax {
            transition: transform 0.15s ease-out;
            will-change: transform;
        }

        /* Profile glow on hover */
        .profile-wrapper {
            position: relative;
        }

        .profile-wrapper::after {
            content: '';
            position: absolute;
            inset: -8px;
            background: radial-gradient(circle, rgba(41, 121, 255, 0.25), transparent 70%);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: -1;
            border-radius: 12px;
        }

        .profile-wrapper:hover::after {
            opacity: 1;
        }

        .project-card-wrapper {
            transition: opacity 0.25s ease, transform 0.25s ease;
        }

        .project-card-wrapper.is-hidden {
            display: none;
        }

        .archive-panel {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(10, 10, 15, 0.08);
            background:
                radial-gradient(circle at top right, rgba(41, 121, 255, 0.12), transparent 34%),
                linear-gradient(180deg, rgba(255, 255, 255, 0.96), rgba(243, 244, 246, 0.94));
            backdrop-filter: blur(18px);
            box-shadow: 0 24px 50px rgba(10, 10, 15, 0.08);
        }

        .archive-lead {
            max-width: 32rem;
        }

        .archive-metric {
            border: 1px solid rgba(10, 10, 15, 0.08);
            background: rgba(255, 255, 255, 0.86);
            transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
        }

        .archive-metric:hover {
            transform: translateY(-3px);
            border-color: rgba(41, 121, 255, 0.24);
            box-shadow: 0 16px 32px rgba(41, 121, 255, 0.08);
        }

        .hero-metric {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(10, 10, 15, 0.08);
            background: rgba(255, 255, 255, 0.82);
            backdrop-filter: blur(14px);
            transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
        }

        .hero-metric:hover {
            transform: translateY(-4px);
            border-color: rgba(41, 121, 255, 0.26);
            box-shadow: 0 18px 36px rgba(41, 121, 255, 0.09);
        }

        .hero-metric::before {
            content: '';
            position: absolute;
            inset: 0 auto 0 0;
            width: 4px;
            background: linear-gradient(180deg, #2979FF, #00D4AA);
        }

        .project-card .project-hover-row {
            transition: transform 0.25s ease, color 0.25s ease;
        }

        .project-card:hover .project-hover-row,
        .project-card:focus-within .project-hover-row {
            transform: translateX(4px);
            color: #2979FF;
        }
    </style>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/favicon.png">
</head>

<body class="bg-surface text-on-surface font-sans antialiased selection:bg-primary selection:text-white">

    <!-- Custom Cursor System (desktop) -->
    <div class="cursor-glow" id="cursorGlow"></div>
    <div class="cursor-follower" id="cursorFollower"></div>
    <div class="cursor-dot" id="cursorDot"></div>

    <!-- Scroll Progress Bar -->
    <div class="scroll-progress" id="scrollProgress" style="width: 0"></div>

    <!-- Back to Top -->
    <div class="back-to-top" id="backToTop" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
        <span class="material-symbols-outlined">arrow_upward</span>
    </div>

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-white/85 backdrop-blur-md border-b border-gray-200">
        <div class="flex justify-between items-center max-w-6xl mx-auto px-5 md:px-8 h-14">
            <a href="#" class="text-base font-bold tracking-tight uppercase flex items-center gap-0.5 group">
                <span class="text-on-surface">&lt;</span>
                <span class="text-primary"><?php echo $config['short_name']; ?></span>
                <span class="text-on-surface">/&gt;</span>
            </a>

            <div class="hidden md:flex items-center gap-7">
                <?php foreach ($navItems as $item): ?>
                    <a href="#<?php echo $item['id']; ?>" class="text-[10px] font-bold tracking-[0.2em] uppercase text-on-surface-variant hover:text-primary transition-colors nav-link" data-target="<?php echo $item['id']; ?>">
                        <?php echo $item['label']; ?>
                    </a>
                <?php endforeach; ?>
                <a href="#transmit" class="bg-on-surface text-white px-4 py-2 text-[10px] font-bold tracking-[0.15em] uppercase hover:bg-primary transition-colors rounded">
                    Hire Me
                </a>
            </div>

            <button class="md:hidden" id="mobileMenuBtn" aria-label="Open menu">
                <span class="material-symbols-outlined text-2xl">menu</span>
            </button>
        </div>

        <div class="hidden md:hidden bg-white border-t border-gray-200" id="mobileMenu">
            <div class="px-5 py-5 space-y-4">
                <?php foreach ($navItems as $item): ?>
                    <a href="#<?php echo $item['id']; ?>" class="block text-xs font-bold tracking-[0.2em] uppercase text-on-surface hover:text-primary transition-colors mobile-link">
                        <span class="text-primary mr-2"><?php echo $item['index']; ?></span><?php echo $item['label']; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </nav>

    <main>

        <!-- Hero Section (compact, not full screen) -->
        <section class="pt-20 pb-12 md:pt-24 md:pb-16 relative overflow-hidden dot-grid" id="hero">
            <!-- Scanning line -->
            <div class="scan-line"></div>

            <!-- Floating background particles -->
            <div class="bg-particles" id="bgParticles"></div>

            <!-- Decorative spinning ring -->
            <div class="absolute right-6 top-24 opacity-[0.08] pointer-events-none hidden lg:block">
                <svg width="200" height="200" viewBox="0 0 100 100" class="spin-slow">
                    <circle cx="50" cy="50" r="45" fill="none" stroke="currentColor" stroke-dasharray="2,2" stroke-width="0.5" />
                    <circle cx="50" cy="50" r="32" fill="none" stroke="currentColor" stroke-width="0.3" />
                    <line x1="50" y1="0" x2="50" y2="100" stroke="currentColor" stroke-width="0.2" />
                    <line x1="0" y1="50" x2="100" y2="50" stroke="currentColor" stroke-width="0.2" />
                </svg>
            </div>

            <!-- Floating geometric shapes -->
            <div class="geo-shape hidden md:block" style="left: 8%; top: 70%; width: 40px; height: 40px; border-radius: 50%; animation-delay: -2s;"></div>
            <div class="geo-shape hidden md:block" style="right: 12%; top: 80%; width: 28px; height: 28px; animation-delay: -5s;"></div>

            <div class="max-w-6xl mx-auto px-5 md:px-8 grid grid-cols-12 gap-6 relative z-10">
                <!-- Text Content -->
                <div class="col-span-12 lg:col-span-8 order-2 lg:order-1">
                    <div class="mb-4 flex flex-wrap items-center gap-3">
                        <span class="inline-flex items-center gap-2 text-[10px] font-bold tracking-[0.3em] uppercase text-primary">
                            <span class="w-1.5 h-1.5 bg-teal rounded-full animate-pulse"></span>
                            <?php echo $config['status']; ?>
                        </span>
                        <div class="live-time">
                            <span class="dot"></span>
                            <span id="timeDisplay">--:--:--</span>
                            <span class="opacity-60">PH</span>
                        </div>
                    </div>

                    <p class="font-mono text-xs text-on-surface-variant mb-3">
                        <span class="text-teal">root@<?php echo strtolower($config['short_name']); ?>:~$</span>
                        <span id="terminalCommand">whoami</span><span class="animate-pulse">_</span>
                    </p>

                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-[1.05] tracking-tighter mb-3">
                        <span class="block">Clark Steven</span>
                        <span class="block gradient-text">Edong.</span>
                    </h1>

                    <p class="text-sm md:text-base text-on-surface-variant max-w-2xl leading-relaxed asymmetric-border mb-5">
                        <span class="text-primary font-medium">&lt;<?php echo $config['subtitle']; ?>/&gt;</span><br>
                        Shipping live portals, records systems, and operations tools for schools, government offices, and business teams across Davao Oriental. From DOIT College Portal to TrabaWho Mati, the work here is already in production.
                    </p>

                    <div class="flex flex-wrap gap-3">
                        <a href="#archive" class="group bg-primary text-white px-5 py-2.5 text-[11px] font-bold tracking-[0.15em] uppercase hover:bg-primary-dark transition-colors flex items-center gap-2 rounded">
                            View Archive
                            <span class="material-symbols-outlined text-base group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
                        </a>
                        <a href="#transmit" class="border border-on-surface px-5 py-2.5 text-[11px] font-bold tracking-[0.15em] uppercase hover:bg-on-surface hover:text-white transition-colors rounded">
                            Contact
                        </a>
                    </div>

                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-3 max-w-3xl">
                        <div class="hero-metric rounded-xl px-4 py-3">
                            <span class="text-[10px] font-bold tracking-[0.3em] uppercase text-on-surface-variant block mb-1">Live Deployments</span>
                            <strong class="text-2xl font-bold tracking-tight text-on-surface"><?php echo $projectTotal; ?></strong>
                            <p class="text-xs text-on-surface-variant mt-1">Client systems currently listed in the archive.</p>
                        </div>
                        <div class="hero-metric rounded-xl px-4 py-3">
                            <span class="text-[10px] font-bold tracking-[0.3em] uppercase text-on-surface-variant block mb-1">Sectors</span>
                            <strong class="text-2xl font-bold tracking-tight text-on-surface"><?php echo $projectSectorCount; ?></strong>
                            <p class="text-xs text-on-surface-variant mt-1">Education, government, business, and mobile delivery.</p>
                        </div>
                        <div class="hero-metric rounded-xl px-4 py-3">
                            <span class="text-[10px] font-bold tracking-[0.3em] uppercase text-on-surface-variant block mb-1">Primary Stack</span>
                            <strong class="text-lg font-bold tracking-tight text-on-surface">PHP + MySQL</strong>
                            <p class="text-xs text-on-surface-variant mt-1">JavaScript and Flutter layered where the product needs it.</p>
                        </div>
                    </div>
                </div>

                <!-- Profile Image -->
                <div class="col-span-12 lg:col-span-4 flex items-center justify-center lg:justify-end order-1 lg:order-2 mb-6 lg:mb-0">
                    <div class="relative w-40 sm:w-48 md:w-56 aspect-[4/5] group profile-wrapper tilt-card" id="profileTilt">
                        <div class="absolute inset-0 border-2 border-primary/30 rounded-lg transform rotate-2 group-hover:rotate-3 transition-transform duration-500"></div>
                        <div class="tilt-inner relative z-10 w-full h-full">
                            <img
                                id="profileImage"
                                src="<?php echo $config['profile_image']; ?>"
                                alt="<?php echo $config['name']; ?>"
                                class="w-full h-full object-cover rounded-lg shadow-lg"
                                onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=500&fit=crop'">
                            <!-- Corner decoration on hover -->
                            <div class="absolute top-2 right-2 w-3 h-3 border-t-2 border-r-2 border-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-2 left-2 w-3 h-3 border-b-2 border-l-2 border-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Manifest / Stats Section -->
        <section class="py-10 md:py-12 bg-on-surface text-white" id="manifest">
            <div class="max-w-6xl mx-auto px-5 md:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="reveal">
                        <span class="text-[9px] tracking-[0.4em] uppercase opacity-50 block mb-1">01 / Identity</span>
                        <h3 class="text-base md:text-lg font-light"><?php echo $config['name']; ?></h3>
                    </div>
                    <div class="reveal">
                        <span class="text-[9px] tracking-[0.4em] uppercase opacity-50 block mb-1">02 / Age</span>
                        <h3 class="text-base md:text-lg font-light"><?php echo $config['age']; ?> Years</h3>
                    </div>
                    <div class="reveal">
                        <span class="text-[9px] tracking-[0.4em] uppercase opacity-50 block mb-1">03 / Location</span>
                        <h3 class="text-base md:text-lg font-light"><?php echo $config['location']; ?></h3>
                    </div>
                </div>

                <div class="pt-6 border-t border-white/10 grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="text-center reveal">
                        <span class="text-2xl md:text-3xl font-bold text-primary block"><?php echo count($projects); ?>+</span>
                        <p class="text-[9px] tracking-[0.25em] uppercase mt-1 opacity-60">Projects</p>
                    </div>
                    <div class="text-center reveal">
                        <span class="text-2xl md:text-3xl font-bold text-teal block">6+</span>
                        <p class="text-[9px] tracking-[0.25em] uppercase mt-1 opacity-60">Years Active</p>
                    </div>
                    <div class="text-center reveal">
                        <span class="text-2xl md:text-3xl font-bold text-orange block">10+</span>
                        <p class="text-[9px] tracking-[0.25em] uppercase mt-1 opacity-60">Clients Served</p>
                    </div>
                    <div class="text-center reveal">
                        <span class="text-2xl md:text-3xl font-bold text-purple block">100%</span>
                        <p class="text-[9px] tracking-[0.25em] uppercase mt-1 opacity-60">Delivered</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Archive / Projects Section (real projects) -->
        <section class="py-12 md:py-16 relative overflow-hidden" id="archive">
            <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-primary/[0.05] to-transparent pointer-events-none"></div>
            <div class="max-w-6xl mx-auto px-5 md:px-8">
                <div class="archive-panel rounded-[28px] p-5 md:p-8 mb-6">
                    <div class="grid grid-cols-12 gap-5 md:gap-6 items-end">
                        <div class="col-span-12 lg:col-span-5">
                            <div class="archive-lead">
                                <span class="text-[10px] font-bold tracking-[0.35em] uppercase text-primary mb-2 block">02 / Archive</span>
                                <h2 class="text-2xl md:text-4xl font-bold tracking-tighter uppercase mb-3">
                                    Live Systems,
                                    <span class="text-primary">Not Concepts.</span>
                                </h2>
                                <p class="text-sm md:text-base text-on-surface-variant leading-relaxed">
                                    Real deployments for schools, government offices, and business operations. Filter by sector, then open the live system directly.
                                </p>
                            </div>
                        </div>

                        <div class="col-span-12 lg:col-span-7">
                            <div class="grid grid-cols-3 gap-3">
                                <div class="archive-metric rounded-xl p-3">
                                    <span class="text-[9px] font-bold tracking-[0.28em] uppercase text-on-surface-variant block mb-1">Systems</span>
                                    <strong class="text-2xl font-bold tracking-tight text-on-surface"><?php echo $projectTotal; ?></strong>
                                </div>
                                <div class="archive-metric rounded-xl p-3">
                                    <span class="text-[9px] font-bold tracking-[0.28em] uppercase text-on-surface-variant block mb-1">Sectors</span>
                                    <strong class="text-2xl font-bold tracking-tight text-on-surface"><?php echo $projectSectorCount; ?></strong>
                                </div>
                                <div class="archive-metric rounded-xl p-3">
                                    <span class="text-[9px] font-bold tracking-[0.28em] uppercase text-on-surface-variant block mb-1">Based In</span>
                                    <strong class="text-lg font-bold tracking-tight text-on-surface">Mati</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex flex-col gap-3 lg:flex-row lg:items-center lg:justify-between">
                        <div class="flex flex-wrap gap-2" id="projectFilters">
                            <button class="filter-btn active" data-filter="all">All / <?php echo $projectTotal; ?></button>
                            <?php foreach ($projectCountsByCategory as $category => $count): ?>
                                <button class="filter-btn" data-filter="<?php echo $category; ?>"><?php echo $category; ?> / <?php echo $count; ?></button>
                            <?php endforeach; ?>
                        </div>
                        <p class="text-[11px] font-bold tracking-[0.18em] uppercase text-on-surface-variant" id="archiveStatus">
                            Showing all <?php echo $projectTotal; ?> deployments.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4 md:gap-5" id="projectsGrid">
                    <?php foreach ($projects as $index => $project): ?>
                        <a href="<?php echo $project['url']; ?>" target="_blank" rel="noopener"
                            class="project-card-wrapper block reveal"
                            data-category="<?php echo $project['category']; ?>"
                            data-title="<?php echo htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8'); ?>"
                            data-desc="<?php echo htmlspecialchars($project['desc'], ENT_QUOTES, 'UTF-8'); ?>"
                            data-url="<?php echo htmlspecialchars($project['url'], ENT_QUOTES, 'UTF-8'); ?>"
                            data-host="<?php echo htmlspecialchars(hostLabel($project['url']), ENT_QUOTES, 'UTF-8'); ?>"
                            data-tags="<?php echo htmlspecialchars(implode('|', $project['tags']), ENT_QUOTES, 'UTF-8'); ?>"
                            tabindex="0">
                            <article class="bg-white rounded-2xl overflow-hidden border border-gray-200 project-card h-full">
                                <div class="screenshot-frame aspect-[16/10] relative overflow-hidden bg-gray-100">
                                    <img
                                        src="<?php echo thumb($project['url']); ?>"
                                        alt="<?php echo $project['title']; ?>"
                                        loading="lazy"
                                        class="w-full h-full object-cover object-top"
                                        onload="this.classList.add('loaded')"
                                        onerror="this.src='https://via.placeholder.com/640x400/f3f4f6/9ca3af?text=<?php echo urlencode($project['title']); ?>'">
                                    <div class="absolute inset-x-0 top-0 p-3 flex items-start justify-between gap-3 z-10">
                                        <span class="text-[9px] font-bold tracking-[0.2em] uppercase bg-white/90 backdrop-blur-sm text-on-surface px-2 py-1 rounded-full">
                                            <?php echo $project['category']; ?>
                                        </span>
                                        <span class="inline-flex items-center gap-1 rounded-full bg-on-surface/80 px-2.5 py-1 text-[9px] font-bold tracking-[0.2em] uppercase text-white backdrop-blur-sm">
                                            #<?php echo str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT); ?>
                                        </span>
                                    </div>
                                    <div class="absolute inset-x-0 bottom-0 px-4 py-3 bg-gradient-to-t from-black/65 via-black/10 to-transparent text-white">
                                        <p class="text-[11px] font-mono"><?php echo hostLabel($project['url']); ?></p>
                                    </div>
                                </div>
                                <div class="p-4 md:p-5 flex flex-col h-full">
                                    <div class="flex items-start justify-between gap-3 mb-2">
                                        <div>
                                            <h3 class="text-base font-bold tracking-tight text-on-surface">
                                                <?php echo $project['title']; ?>
                                            </h3>
                                            <p class="text-[11px] font-bold tracking-[0.18em] uppercase text-primary mt-1"><?php echo $project['category']; ?> Delivery</p>
                                        </div>
                                        <span class="material-symbols-outlined text-primary">arrow_outward</span>
                                    </div>
                                    <p class="text-sm text-on-surface-variant leading-relaxed mb-4 flex-1">
                                        <?php echo $project['desc']; ?>
                                    </p>
                                    <div class="flex flex-wrap gap-1.5 mb-4">
                                        <?php foreach ($project['tags'] as $tag): ?>
                                            <span class="text-[9px] font-bold tracking-[0.2em] uppercase bg-gray-100 text-on-surface-variant px-2.5 py-1 rounded-full">
                                                <?php echo $tag; ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="project-hover-row flex items-center justify-between text-[11px] font-bold tracking-[0.2em] uppercase text-on-surface-variant">
                                        <span>Open Live System</span>
                                        <span class="material-symbols-outlined text-base">north_east</span>
                                    </div>
                                </div>
                            </article>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Stack / Capabilities Section -->
        <section class="py-12 md:py-16 bg-surface-dim border-y border-gray-200" id="capabilities">
            <div class="max-w-6xl mx-auto px-5 md:px-8 grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-4">
                    <h2 class="text-2xl md:text-3xl font-bold tracking-tighter uppercase mb-3">
                        The <span class="text-primary">Stack</span>
                    </h2>
                    <p class="text-on-surface-variant text-xs leading-relaxed asymmetric-border">
                        Core technologies used daily. Picked for shipping speed and reliability.
                    </p>
                </div>

                <div class="col-span-12 lg:col-span-8 grid grid-cols-2 sm:grid-cols-4 gap-px bg-gray-200 rounded overflow-hidden">
                    <?php foreach ($skills as $skill): ?>
                        <div class="bg-white p-4 flex flex-col items-center justify-center skill-card">
                            <span class="material-symbols-outlined text-2xl mb-2 text-primary">
                                <?php echo $skill['icon']; ?>
                            </span>
                            <span class="text-[10px] font-bold tracking-widest uppercase text-center mb-2"><?php echo $skill['name']; ?></span>
                            <div class="w-full">
                                <div class="flex justify-end mb-0.5">
                                    <span class="text-[9px] font-mono font-bold text-primary skill-percentage" data-target="<?php echo $skill['level']; ?>">0%</span>
                                </div>
                                <div class="w-full h-0.5 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-full bg-primary rounded-full skill-progress-bar" data-width="<?php echo $skill['level']; ?>" style="width: 0%"></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Protocol / Timeline Section -->
        <section class="py-12 md:py-16" id="protocol">
            <div class="max-w-6xl mx-auto px-5 md:px-8">
                <div class="text-center mb-8">
                    <span class="text-[10px] font-bold tracking-[0.3em] uppercase text-primary mb-2 block">2018 — 2025</span>
                    <h2 class="text-2xl md:text-3xl font-bold tracking-tighter uppercase">The Journey</h2>
                </div>

                <div class="relative max-w-2xl mx-auto">
                    <div class="absolute left-3 md:left-1/2 top-0 bottom-0 w-[2px] bg-gray-200 md:-translate-x-1/2"></div>

                    <div class="space-y-6 md:space-y-0">
                        <?php foreach ($timeline as $index => $item): ?>
                            <div class="relative md:grid md:grid-cols-2 md:gap-10 <?php echo $index > 0 ? 'md:mt-6' : ''; ?> reveal">
                                <div class="timeline-dot absolute left-3 md:left-1/2 top-1 w-2.5 h-2.5 rounded-full bg-primary md:-translate-x-1/2 z-10"></div>
                                <div class="pl-9 md:pl-0 <?php echo $index % 2 === 0 ? 'md:pr-10 md:text-right' : 'md:col-start-2 md:pl-10'; ?>">
                                    <span class="text-primary font-mono text-xs font-bold"><?php echo $item['year']; ?></span>
                                    <h3 class="text-sm md:text-base font-bold mt-0.5 mb-1"><?php echo $item['title']; ?></h3>
                                    <p class="text-on-surface-variant text-xs leading-relaxed"><?php echo $item['desc']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="py-12 md:py-16 bg-surface-dim border-t border-gray-200" id="transmit">
            <div class="max-w-6xl mx-auto px-5 md:px-8 grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-5">
                    <span class="text-[10px] font-bold tracking-[0.3em] uppercase text-primary mb-2 block">05 / Contact</span>
                    <h2 class="text-2xl md:text-3xl font-bold tracking-tighter uppercase mb-3">
                        Let's <span class="text-primary">Talk</span>
                    </h2>
                    <p class="text-sm text-on-surface-variant mb-6 leading-relaxed">
                        Need a student portal, records platform, internal dashboard, or a Flutter companion app? Send the scope, target users, and timeline. I handle builds grounded in actual operations, not template demos.
                    </p>

                    <div class="space-y-2">
                        <?php foreach ($socialLinks as $link): ?>
                            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" <?php echo $link['target'] === '_blank' ? ' rel="noopener"' : ''; ?> class="group flex items-center justify-between border border-gray-200 bg-white rounded-xl px-4 py-3 hover:border-primary transition-colors">
                                <span class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-base text-primary"><?php echo $link['icon']; ?></span>
                                    <span>
                                        <span class="text-[10px] font-bold tracking-[0.2em] uppercase block group-hover:text-primary transition-colors"><?php echo $link['label']; ?></span>
                                        <span class="text-sm text-on-surface-variant"><?php echo $link['value']; ?></span>
                                    </span>
                                </span>
                                <span class="material-symbols-outlined text-base -rotate-45 group-hover:rotate-0 transition-transform text-on-surface-variant">arrow_forward</span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="col-span-12 lg:col-span-7">
                    <form id="contactForm" class="space-y-4 bg-white border border-gray-200 rounded-lg p-5">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="text-[9px] font-bold tracking-[0.3em] uppercase text-on-surface-variant block mb-1.5">Name</label>
                                <input type="text" name="name" placeholder="Full Name" required
                                    class="w-full bg-transparent border-0 border-b border-gray-200 px-0 py-2 text-sm focus:ring-0 focus:border-primary transition-colors placeholder:text-gray-400 focus:outline-none">
                            </div>
                            <div>
                                <label class="text-[9px] font-bold tracking-[0.3em] uppercase text-on-surface-variant block mb-1.5">Email</label>
                                <input type="email" name="email" placeholder="you@email.com" required
                                    class="w-full bg-transparent border-0 border-b border-gray-200 px-0 py-2 text-sm focus:ring-0 focus:border-primary transition-colors placeholder:text-gray-400 focus:outline-none">
                            </div>
                        </div>
                        <div>
                            <label class="text-[9px] font-bold tracking-[0.3em] uppercase text-on-surface-variant block mb-1.5">Inquiry Type</label>
                            <select name="subject"
                                class="w-full bg-transparent border-0 border-b border-gray-200 px-0 py-2 text-sm focus:ring-0 focus:border-primary transition-colors focus:outline-none">
                                <option value="project">Project Collaboration</option>
                                <option value="hire">Hiring Opportunity</option>
                                <option value="consult">Consultation</option>
                                <option value="other">Other Inquiry</option>
                            </select>
                        </div>
                        <div>
                            <label class="text-[9px] font-bold tracking-[0.3em] uppercase text-on-surface-variant block mb-1.5">Message</label>
                            <textarea name="message" placeholder="Project description / inquiry..." rows="4" required
                                class="w-full bg-transparent border-0 border-b border-gray-200 px-0 py-2 text-sm focus:ring-0 focus:border-primary transition-colors placeholder:text-gray-400 focus:outline-none resize-none"></textarea>
                        </div>

                        <!-- Cloudflare Turnstile -->
                        <div class="cf-turnstile" data-sitekey="<?php echo $config['turnstile_site_key']; ?>" data-theme="light" data-size="flexible"></div>

                        <button type="submit"
                            class="w-full md:w-auto bg-on-surface text-white px-6 py-3 text-[11px] font-bold tracking-[0.2em] uppercase hover:bg-primary transition-colors flex items-center justify-center gap-2 rounded">
                            Send Message
                            <span class="material-symbols-outlined text-base">arrow_right_alt</span>
                        </button>
                        <p id="formStatus" class="text-xs text-on-surface-variant mt-2 hidden" aria-live="polite"></p>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-6 border-t border-gray-200">
        <div class="max-w-6xl mx-auto px-5 md:px-8 flex items-center justify-between gap-3">
            <div class="text-sm font-bold tracking-tight uppercase">
                &lt;<?php echo $config['short_name']; ?>/&gt;
            </div>
            <span class="text-[9px] tracking-[0.25em] uppercase font-bold text-on-surface-variant flex items-center gap-2">
                <span class="w-1.5 h-1.5 bg-teal rounded-full animate-pulse"></span>
                <?php echo $config['status']; ?>
            </span>
        </div>
    </footer>

    <script>
        // Mobile menu
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenuBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => mobileMenu.classList.add('hidden'));
        });

        // Terminal command rotator
        const commands = <?php echo json_encode($terminalCommands, JSON_UNESCAPED_SLASHES); ?>;
        let cmdIndex = 0;
        const terminalCommand = document.getElementById('terminalCommand');
        if (terminalCommand) {
            setInterval(() => {
                cmdIndex = (cmdIndex + 1) % commands.length;
                terminalCommand.style.opacity = '0';
                setTimeout(() => {
                    terminalCommand.textContent = commands[cmdIndex];
                    terminalCommand.style.opacity = '1';
                }, 200);
            }, 3000);
        }

        // Live time
        function updateLiveTime() {
            const el = document.getElementById('timeDisplay');
            if (!el) return;
            const now = new Date();
            const ph = new Date(now.toLocaleString('en-US', {
                timeZone: 'Asia/Manila'
            }));
            const h = String(ph.getHours()).padStart(2, '0');
            const m = String(ph.getMinutes()).padStart(2, '0');
            const s = String(ph.getSeconds()).padStart(2, '0');
            el.textContent = `${h}:${m}:${s}`;
        }
        updateLiveTime();
        setInterval(updateLiveTime, 1000);

        // Reveal on scroll
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -40px 0px'
        });
        document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

        // Smooth scroll for anchors
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', function(e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Active nav link highlighting
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');

        function updateActiveNav() {
            const scrollPos = window.scrollY + 80;
            sections.forEach(section => {
                const top = section.offsetTop;
                const height = section.offsetHeight;
                const id = section.getAttribute('id');
                if (scrollPos >= top && scrollPos < top + height) {
                    navLinks.forEach(l => l.classList.toggle('active', l.dataset.target === id));
                }
            });
        }
        window.addEventListener('scroll', updateActiveNav);
        updateActiveNav();

        // Scroll progress
        const progress = document.getElementById('scrollProgress');
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            const max = document.documentElement.scrollHeight - window.innerHeight;
            const pct = (window.scrollY / max) * 100;
            if (progress) progress.style.width = pct + '%';
            if (backToTop) backToTop.classList.toggle('visible', window.scrollY > 400);
        });

        // Project filter
        const filterBtns = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card-wrapper');
        const archiveStatus = document.getElementById('archiveStatus');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.dataset.filter;
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                let visibleCards = [];

                projectCards.forEach(card => {
                    const isVisible = filter === 'all' || card.dataset.category === filter;
                    card.classList.toggle('is-hidden', !isVisible);

                    if (isVisible) {
                        visibleCards.push(card);
                    }
                });

                if (archiveStatus) {
                    archiveStatus.textContent = filter === 'all' ?
                        `Showing all ${visibleCards.length} deployments.` :
                        `Showing ${visibleCards.length} ${filter.toLowerCase()} deployment${visibleCards.length === 1 ? '' : 's'}.`;
                }
            });
        });

        // Skill counters
        const skillObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                const card = entry.target;
                const pctEl = card.querySelector('.skill-percentage');
                const bar = card.querySelector('.skill-progress-bar');
                if (!pctEl || !bar) return;
                const target = parseInt(pctEl.dataset.target);
                let current = 0;
                const step = target / 60;
                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    pctEl.textContent = Math.round(current) + '%';
                    bar.style.width = Math.round(current) + '%';
                }, 16);
                skillObserver.unobserve(card);
            });
        }, {
            threshold: 0.4
        });
        document.querySelectorAll('.skill-card').forEach(c => skillObserver.observe(c));

        // ============== CUSTOM CURSOR + TRAIL ==============
        const cursorGlow = document.getElementById('cursorGlow');
        const cursorFollower = document.getElementById('cursorFollower');
        const cursorDot = document.getElementById('cursorDot');
        const isDesktopCursor = window.matchMedia('(pointer: fine)').matches && window.innerWidth >= 1024;

        if (isDesktopCursor && cursorGlow && cursorFollower && cursorDot) {
            let mx = window.innerWidth / 2;
            let my = window.innerHeight / 2;
            let gx = mx,
                gy = my,
                fx = mx,
                fy = my;

            // Trail particles
            const TRAIL_COUNT = 14;
            const trail = [];
            for (let i = 0; i < TRAIL_COUNT; i++) {
                const el = document.createElement('div');
                el.className = 'cursor-trail';
                const size = Math.max(14 - i * 0.7, 4);
                el.style.width = size + 'px';
                el.style.height = size + 'px';
                el.style.background = i % 2 === 0 ?
                    `rgba(41, 121, 255, ${Math.max(0.5 - i * 0.03, 0.05)})` :
                    `rgba(0, 212, 170, ${Math.max(0.45 - i * 0.03, 0.05)})`;
                document.body.appendChild(el);
                trail.push({
                    el: el,
                    x: mx,
                    y: my
                });
            }

            document.addEventListener('mousemove', (e) => {
                mx = e.clientX;
                my = e.clientY;
            });

            // Hover scale on interactive elements
            const hoverables = 'a, button, input, textarea, .filter-btn, .project-card-wrapper, .skill-card';
            document.addEventListener('mouseover', (e) => {
                if (e.target.closest && e.target.closest(hoverables)) cursorFollower.classList.add('hovering');
            });
            document.addEventListener('mouseout', (e) => {
                if (e.target.closest && e.target.closest(hoverables)) cursorFollower.classList.remove('hovering');
            });

            // Hide cursor system when leaving window
            document.addEventListener('mouseleave', () => {
                cursorGlow.style.opacity = '0';
                cursorFollower.style.opacity = '0';
                cursorDot.style.opacity = '0';
                trail.forEach(p => p.el.style.opacity = '0');
            });
            document.addEventListener('mouseenter', () => {
                cursorGlow.style.opacity = '';
                cursorFollower.style.opacity = '';
                cursorDot.style.opacity = '';
                trail.forEach(p => p.el.style.opacity = '');
            });

            function cursorLoop() {
                // Dot snaps instantly
                cursorDot.style.left = mx + 'px';
                cursorDot.style.top = my + 'px';

                // Follower eases
                fx += (mx - fx) * 0.22;
                fy += (my - fy) * 0.22;
                cursorFollower.style.left = fx + 'px';
                cursorFollower.style.top = fy + 'px';

                // Glow eases slower
                gx += (mx - gx) * 0.10;
                gy += (my - gy) * 0.10;
                cursorGlow.style.left = gx + 'px';
                cursorGlow.style.top = gy + 'px';

                // Trail: each particle chases the previous one
                let prevX = mx,
                    prevY = my;
                for (let i = 0; i < trail.length; i++) {
                    const p = trail[i];
                    const ease = Math.max(0.35 - i * 0.015, 0.1);
                    p.x += (prevX - p.x) * ease;
                    p.y += (prevY - p.y) * ease;
                    p.el.style.left = p.x + 'px';
                    p.el.style.top = p.y + 'px';
                    prevX = p.x;
                    prevY = p.y;
                }

                requestAnimationFrame(cursorLoop);
            }
            cursorLoop();
        } else {
            [cursorGlow, cursorFollower, cursorDot].forEach(el => {
                if (el) el.style.display = 'none';
            });
        }

        // Tilt-card effect for profile
        const profileTilt = document.getElementById('profileTilt');
        if (profileTilt && window.matchMedia('(pointer: fine)').matches) {
            const inner = profileTilt.querySelector('.tilt-inner');
            profileTilt.addEventListener('mousemove', (e) => {
                const rect = profileTilt.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const rotY = ((x / rect.width) - 0.5) * 14;
                const rotX = ((y / rect.height) - 0.5) * -14;
                inner.style.transform = `perspective(800px) rotateX(${rotX}deg) rotateY(${rotY}deg) translateZ(8px)`;
            });
            profileTilt.addEventListener('mouseleave', () => {
                inner.style.transform = 'perspective(800px) rotateX(0deg) rotateY(0deg) translateZ(0)';
            });
        }

        // Generate floating background particles
        const bgParticlesEl = document.getElementById('bgParticles');
        if (bgParticlesEl) {
            const colors = ['rgba(41, 121, 255, 0.4)', 'rgba(0, 212, 170, 0.35)', 'rgba(255, 107, 53, 0.3)'];
            for (let i = 0; i < 14; i++) {
                const p = document.createElement('div');
                const size = 3 + Math.random() * 6;
                p.className = 'bg-particle';
                p.style.cssText = `
                    width: ${size}px;
                    height: ${size}px;
                    left: ${Math.random() * 100}%;
                    top: ${Math.random() * 100}%;
                    background: ${colors[Math.floor(Math.random() * colors.length)]};
                    animation-delay: -${Math.random() * 18}s;
                    animation-duration: ${14 + Math.random() * 12}s;
                `;
                bgParticlesEl.appendChild(p);
            }
        }

        // Parallax on scroll for decorative shapes
        const parallaxEls = document.querySelectorAll('.geo-shape, .spin-slow');
        window.addEventListener('scroll', () => {
            const y = window.scrollY;
            parallaxEls.forEach((el, i) => {
                el.style.transform = `translateY(${y * (0.06 + i * 0.02)}px)`;
            });
        }, {
            passive: true
        });

        // Form submission with Turnstile verification
        const form = document.getElementById('contactForm');
        const formStatus = document.getElementById('formStatus');

        function showStatus(msg, color) {
            if (!formStatus) return;
            formStatus.textContent = msg;
            formStatus.classList.remove('hidden');
            formStatus.style.color = color;
        }

        if (form) {
            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                const btn = form.querySelector('button[type="submit"]');
                const original = btn.innerHTML;

                const tokenInput = form.querySelector('input[name="cf-turnstile-response"]');
                const token = tokenInput ? tokenInput.value : '';
                if (!token) {
                    showStatus('Please complete the verification challenge.', '#FF6B35');
                    return;
                }

                btn.innerHTML = '<span class="animate-pulse">SENDING...</span>';
                btn.disabled = true;
                showStatus('Transmitting...', '#4a5059');

                try {
                    const fd = new FormData(form);
                    const res = await fetch('contact.php', {
                        method: 'POST',
                        body: fd
                    });
                    const data = await res.json();
                    if (data.success) {
                        btn.innerHTML = '<span class="text-teal">SENT ✓</span>';
                        showStatus(data.message || 'Message sent successfully.', '#00D4AA');
                        form.reset();
                        if (window.turnstile) window.turnstile.reset();
                    } else if (data.logged) {
                        btn.innerHTML = '<span class="text-orange">SAVED</span>';
                        showStatus(data.message || 'Message saved, but email delivery still needs server setup.', '#FF6B35');
                    } else {
                        btn.innerHTML = '<span class="text-orange">FAILED</span>';
                        showStatus(data.message || 'Something went wrong.', '#FF6B35');
                    }
                } catch (err) {
                    btn.innerHTML = '<span class="text-orange">ERROR</span>';
                    showStatus('Network error. Please try again.', '#FF6B35');
                }

                setTimeout(() => {
                    btn.innerHTML = original;
                    btn.disabled = false;
                }, 2500);
            });
        }
    </script>
</body>

</html>