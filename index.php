<?php

/**
 * <CLARkODER> - Developer Portfolio
 * EDONG, CLARK STEVEN T. | Mati City, Philippines
 */

$config = [
    'name' => 'EDONG, CLARK STEVEN T.',
    'short_name' => 'CLARkODER',
    'first_name' => 'Clark',
    'last_name' => 'Edong',
    'age' => 27,
    'subtitle' => 'Full-Stack Developer',
    'location' => 'Mati City, Philippines',
    'postal' => '8200',
    'email' => 'clarksteven.edong@softtechservices.net',
    'phone' => '+639 703 735 533',
    'status' => 'Available for freelance and full-time opportunities',
    'years_experience' => '6+',
    'hours_worked' => '10K+',
];

$socials = [
    [
        'label' => 'github',
        'url' => 'https://github.com/clarkoder',
    ],
    [
        'label' => 'linkedin',
        'url' => 'https://linkedin.com',
    ],
    [
        'label' => 'facebook',
        'url' => 'https://facebook.com',
    ],
];

$projects = [
    [
        'title' => 'DOIT College Portal',
        'desc' => 'Academic portal for DOIT College handling enrollment, student records, registrar workflows, and online services.',
        'url' => 'https://portal.doitcollege.com/',
        'tags' => ['Next.js', 'Payload CMS', 'Tailwind CSS'],
    ],
    [
        'title' => 'WCManila SRMS',
        'desc' => 'Student Records Management System focused on grading, enrollment processing, transcript generation, and reporting.',
        'url' => 'https://wcmanila-srms.com/',
        'tags' => ['React', 'Redux', 'React i18n'],
    ],
    [
        'title' => 'IHMA Mati SRMS',
        'desc' => 'Academic records platform for IHMA Mati supporting records, grading, and institution-wide administrative workflows.',
        'url' => 'https://srms.ihmamati.edu.ph/',
        'tags' => ['Next.js', 'PostgreSQL', 'System Design'],
    ],
    [
        'title' => 'DepEd QAME',
        'desc' => 'Quality Assurance Monitoring and Evaluation platform for education teams, with dashboards, assessment flows, and review tools.',
        'url' => 'https://deped-qame.com/',
        'tags' => ['React.js', 'Redux', 'Tailwind CSS'],
    ],
    [
        'title' => 'DepEd Davao Sports',
        'desc' => 'Sports event management platform covering athlete registration, schedules, scoring, and event coordination.',
        'url' => 'https://sports.depeddavor.com/',
        'tags' => ['HTML', 'SCSS', 'JavaScript'],
    ],
    [
        'title' => 'TrabaWho Mati',
        'desc' => 'Job-matching platform connecting job seekers and employers through searchable listings and civic employment workflows.',
        'url' => 'https://trabawho.mati.gov.ph/',
        'tags' => ['Next.js', 'Formik', 'Drag & Drop'],
    ],
];

$experience = [
    [
        'company' => 'SoftTech Services',
        'position' => 'Full-Stack Developer',
        'period' => '2023 - Present',
    ],
    [
        'company' => 'Freelance',
        'position' => 'Web Systems Engineer',
        'period' => '2021 - 2023',
    ],
    [
        'company' => 'Various Clients',
        'position' => 'Backend Developer',
        'period' => '2019 - 2021',
    ],
];

$stackGroups = [
    [
        'label' => 'Frontend',
        'items' => [
            ['name' => 'JavaScript', 'icon' => 'JS', 'tone' => '#f7df1e', 'text' => '#111111'],
            ['name' => 'TypeScript', 'icon' => 'TS', 'tone' => '#3178c6', 'text' => '#ffffff'],
            ['name' => 'React', 'icon' => 'Re', 'tone' => '#0ea5e9', 'text' => '#ffffff'],
            ['name' => 'Next.js', 'icon' => 'N', 'tone' => '#f5f5f5', 'text' => '#111111'],
            ['name' => 'Vue', 'icon' => 'Vu', 'tone' => '#42b883', 'text' => '#ffffff'],
            ['name' => 'Tailwind CSS', 'icon' => 'Tw', 'tone' => '#38bdf8', 'text' => '#0f172a'],
        ],
    ],
    [
        'label' => 'Backend',
        'items' => [
            ['name' => 'PHP', 'icon' => 'PHP', 'tone' => '#777bb4', 'text' => '#ffffff'],
            ['name' => 'Node.js', 'icon' => 'No', 'tone' => '#539e43', 'text' => '#ffffff'],
            ['name' => 'Laravel', 'icon' => 'La', 'tone' => '#ff2d20', 'text' => '#ffffff'],
            ['name' => 'Express', 'icon' => 'Ex', 'tone' => '#f3f4f6', 'text' => '#111111'],
            ['name' => 'REST APIs', 'icon' => 'API', 'tone' => '#1cff68', 'text' => '#111111'],
        ],
    ],
    [
        'label' => 'Database',
        'items' => [
            ['name' => 'MySQL', 'icon' => 'My', 'tone' => '#00758f', 'text' => '#ffffff'],
            ['name' => 'PostgreSQL', 'icon' => 'Pg', 'tone' => '#336791', 'text' => '#ffffff'],
            ['name' => 'MongoDB', 'icon' => 'Mo', 'tone' => '#13aa52', 'text' => '#ffffff'],
            ['name' => 'Query Optimization', 'icon' => 'Q', 'tone' => '#8b5cf6', 'text' => '#ffffff'],
        ],
    ],
    [
        'label' => 'Tools',
        'items' => [
            ['name' => 'Git', 'icon' => 'Gi', 'tone' => '#f1502f', 'text' => '#ffffff'],
            ['name' => 'Docker', 'icon' => 'Do', 'tone' => '#2496ed', 'text' => '#ffffff'],
            ['name' => 'AWS', 'icon' => 'Aw', 'tone' => '#ff9900', 'text' => '#111111'],
            ['name' => 'Linux', 'icon' => 'Li', 'tone' => '#facc15', 'text' => '#111111'],
            ['name' => 'CI/CD', 'icon' => 'CI', 'tone' => '#14b8a6', 'text' => '#ffffff'],
        ],
    ],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - <?php echo htmlspecialchars($config['short_name'], ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="Portfolio of <?php echo htmlspecialchars($config['name'], ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto+Flex:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #202020;
            --bg-soft: #303030;
            --surface: rgba(255, 255, 255, 0.03);
            --surface-strong: rgba(255, 255, 255, 0.06);
            --text: #dddddd;
            --muted: #a8a8a8;
            --border: rgba(255, 255, 255, 0.12);
            --accent: #68cfff;
            --accent-2: #8fe2ff;
            --container: 1148px;
            --anton: "Anton", sans-serif;
            --body: "Roboto Flex", sans-serif;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            scrollbar-width: none;
        }

        *::-webkit-scrollbar {
            display: none;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background:
                radial-gradient(circle at top left, rgba(104, 207, 255, 0.1), transparent 24rem),
                radial-gradient(circle at 90% 16%, rgba(143, 226, 255, 0.08), transparent 18rem),
                linear-gradient(180deg, #212121 0%, #1d1d1d 100%);
            color: var(--text);
            font-family: var(--body);
            min-height: 100vh;
            overflow-x: hidden;
        }

        body.menu-open {
            overflow: hidden;
        }

        body.intro-active {
            overflow: hidden;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            color: inherit;
            font: inherit;
            background: none;
            border: 0;
        }

        .page-shell {
            position: relative;
            isolation: isolate;
        }

        .intro-loader {
            position: fixed;
            inset: 0;
            z-index: 90;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #000000;
            overflow: hidden;
            transition: opacity 0.45s ease, visibility 0.45s ease;
        }

        .intro-loader.is-hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .intro-loader::before,
        .intro-loader::after {
            content: "";
            position: absolute;
            inset: 0;
            background: #000000;
            transform: translateY(0);
            transition: transform 0.9s cubic-bezier(0.22, 1, 0.36, 1);
        }

        .intro-loader::after {
            background: #111111;
            transition-delay: 0.08s;
        }

        .intro-loader.is-hidden::before {
            transform: translateY(-100%);
        }

        .intro-loader.is-hidden::after {
            transform: translateY(100%);
        }

        .intro-name {
            position: relative;
            z-index: 1;
            display: flex;
            gap: 0.03em;
            font-family: var(--anton);
            font-size: clamp(4.5rem, 18vw, 12rem);
            line-height: 0.9;
            text-transform: uppercase;
            letter-spacing: 0.02em;
            color: #d9d9d9;
            white-space: nowrap;
            overflow: hidden;
        }

        .intro-name span {
            display: inline-block;
            transform: translateY(110%);
            animation: introLetterIn 0.7s cubic-bezier(0.22, 1, 0.36, 1) forwards;
            animation-delay: calc(var(--intro-index) * 0.05s);
        }

        @keyframes introLetterIn {
            to {
                transform: translateY(0);
            }
        }

        .container {
            width: min(var(--container), calc(100% - 2rem));
            margin: 0 auto;
        }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 40;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: min(var(--container), calc(100% - 2rem));
            margin: 0 auto;
            padding: 1.25rem 0 0;
        }

        .brand {
            font-family: var(--anton);
            font-size: 1.45rem;
            letter-spacing: 0.06em;
            color: rgba(255, 255, 255, 0.92);
        }

        .menu-toggle {
            position: relative;
            width: 3.3rem;
            height: 3.3rem;
            z-index: 45;
            border-radius: 999px;
        }

        .menu-toggle span {
            position: absolute;
            left: 50%;
            width: 46%;
            height: 2px;
            background: var(--text);
            border-radius: 999px;
            transition: transform 0.28s ease, opacity 0.25s ease, width 0.25s ease;
        }

        .menu-toggle span:first-child {
            top: calc(50% - 6px);
            transform: translate(-50%, -50%);
        }

        .menu-toggle span:last-child {
            top: calc(50% + 6px);
            transform: translate(-50%, -50%);
        }

        .menu-open .menu-toggle {
            opacity: 0;
            pointer-events: none;
        }

        .drawer-close {
            position: absolute;
            top: 1.4rem;
            right: 1.6rem;
            width: 3.3rem;
            height: 3.3rem;
            z-index: 46;
        }

        .drawer-close span {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 46%;
            height: 2px;
            background: var(--text);
            border-radius: 999px;
        }

        .drawer-close span:first-child {
            transform: translate(-50%, -50%) rotate(45deg);
        }

        .drawer-close span:last-child {
            transform: translate(-50%, -50%) rotate(-45deg);
        }

        .drawer-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.7);
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.2s ease;
            z-index: 30;
        }

        .drawer {
            position: fixed;
            top: 0;
            right: 0;
            width: min(31.25rem, calc(100vw - 3rem));
            height: 100dvh;
            padding: 8.2rem 2.2rem 3rem;
            background: transparent;
            transform: translateX(100%);
            transition: transform 0.55s cubic-bezier(0.22, 1, 0.36, 1);
            z-index: 35;
            overflow: hidden;
        }

        .drawer::before {
            content: "";
            position: absolute;
            inset: -12% -24% -12% 16%;
            background: radial-gradient(circle at left center, #3a3a3a 0%, #2f2f2f 48%, #2a2a2a 100%);
            border-radius: 48%;
            z-index: -1;
        }

        .menu-open .drawer-overlay {
            opacity: 1;
            pointer-events: auto;
        }

        .menu-open .drawer {
            transform: translateX(0);
        }

        .drawer-grid {
            display: grid;
            gap: 3rem;
            align-content: start;
            height: 100%;
            max-width: 19rem;
            margin: 0 auto;
        }

        .drawer-label {
            color: var(--muted);
            font-size: 0.95rem;
            margin-bottom: 1.25rem;
        }

        .drawer-list {
            list-style: none;
            display: grid;
            gap: 0.8rem;
        }

        .drawer-link,
        .drawer-nav button {
            font-size: 1.2rem;
            line-height: 1.4;
        }

        .drawer-nav button {
            display: inline-flex;
            align-items: center;
            gap: 0.85rem;
        }

        .drawer-dot {
            width: 0.88rem;
            height: 0.88rem;
            border-radius: 999px;
            transition: transform 0.25s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.5rem;
            flex-shrink: 0;
        }

        .drawer-nav button:hover .drawer-dot,
        .drawer-nav button.is-active .drawer-dot {
            transform: scale(1.8);
        }

        .drawer-dot--home {
            background: #f1c40f;
            color: #111;
        }

        .drawer-dot--about {
            background: #3498db;
            color: #fff;
        }

        .drawer-dot--experience {
            background: #15b8a6;
            color: #111;
        }

        .drawer-dot--projects {
            background: #6366f1;
            color: #fff;
        }

        .drawer-dot--contact {
            background: #1cff68;
            color: #111;
        }

        .fixed-mail {
            position: fixed;
            left: 0;
            bottom: 8rem;
            padding: 0.25rem 0.85rem;
            writing-mode: vertical-rl;
            text-orientation: mixed;
            letter-spacing: 0.08em;
            color: var(--muted);
            z-index: 12;
            transition: color 0.2s ease;
        }

        .fixed-mail:hover {
            color: var(--text);
        }

        .progress-rail {
            position: fixed;
            right: 2%;
            top: 50vh;
            transform: translateY(-50%);
            width: 0.38rem;
            height: 6.25rem;
            border-radius: 999px;
            background: var(--bg-soft);
            overflow: hidden;
            z-index: 12;
        }

        .progress-fill {
            width: 100%;
            height: 0%;
            border-radius: inherit;
            background: linear-gradient(180deg, var(--accent) 0%, #2da7ff 100%);
            transition: height 0.15s linear;
        }

        .ambient-orb {
            position: fixed;
            border-radius: 999px;
            filter: blur(12px);
            opacity: 0.18;
            z-index: -2;
        }

        .ambient-orb--one {
            top: 12%;
            left: -4rem;
            width: 9rem;
            height: 9rem;
            background: rgba(255, 255, 255, 0.16);
        }

        .ambient-orb--two {
            top: 36%;
            right: 7%;
            width: 4rem;
            height: 4rem;
            background: rgba(104, 207, 255, 0.18);
        }

        .ambient-orb--three {
            bottom: 18%;
            left: 20%;
            width: 5rem;
            height: 5rem;
            background: rgba(66, 215, 255, 0.16);
        }

        .hero {
            position: relative;
            min-height: 100svh;
            padding: 5rem 0 2.5rem;
            overflow: hidden;
        }

        .hero-grid {
            min-height: calc(100svh - 5rem);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
            position: relative;
        }

        .hero-copy {
            max-width: 34rem;
        }

        .eyebrow-status {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 0.9rem;
            color: var(--muted);
            font-size: 0.95rem;
        }

        .status-dot {
            width: 0.72rem;
            height: 0.72rem;
            border-radius: 999px;
            background: #fff;
        }

        .hero-title {
            font-family: var(--anton);
            font-size: clamp(3.8rem, 9vw, 5.6rem);
            line-height: 0.92;
            letter-spacing: 0.02em;
            text-transform: uppercase;
        }

        .hero-title .accent {
            color: var(--accent);
        }

        .hero-title .offset {
            display: inline-block;
            margin-left: 1rem;
        }

        .hero-description {
            margin-top: 1.5rem;
            max-width: 33rem;
            font-size: 1.1rem;
            line-height: 1.7;
            color: var(--muted);
        }

        .hero-description strong {
            color: var(--text);
            font-weight: 500;
        }

        .hero-cta {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-top: 2.25rem;
            min-height: 3rem;
            padding: 0.8rem 2rem;
            background: var(--accent);
            color: #111;
            text-transform: uppercase;
            font-family: var(--anton);
            letter-spacing: 0.13em;
            font-size: 1rem;
        }

        .hero-cta span {
            position: relative;
            z-index: 1;
        }

        .hero-cta::before {
            content: "";
            position: absolute;
            top: 180%;
            left: 0;
            right: 0;
            height: 100%;
            background: #fff;
            border-radius: 50%;
            transform: scale(1.45);
            transition: top 0.4s ease;
        }

        .hero-cta:hover::before {
            top: 0;
        }

        .hero-stats {
            position: absolute;
            right: 4%;
            bottom: 10%;
            display: grid;
            gap: 1.5rem;
            text-align: right;
        }

        .hero-stat-number {
            font-family: var(--anton);
            font-size: clamp(2.1rem, 4vw, 2.8rem);
            line-height: 1;
            color: var(--accent);
            margin-bottom: 0.35rem;
        }

        .hero-stat-label {
            color: var(--muted);
            font-size: 1rem;
        }

        .hero-arrow {
            position: absolute;
            left: 50%;
            bottom: 4.7rem;
            transform: translateX(-50%);
            width: min(23.5rem, 58vw);
            height: auto;
            opacity: 0.92;
        }

        .section {
            padding: 0 0 14rem;
        }

        .lead-section h2 {
            max-width: 50rem;
            font-size: clamp(2.5rem, 7vw, 4rem);
            font-weight: 100;
            line-height: 1.1;
            margin-bottom: 5rem;
        }

        .micro-label {
            padding-bottom: 0.85rem;
            border-bottom: 1px solid var(--border);
            color: var(--muted);
        }

        .split-copy {
            display: grid;
            grid-template-columns: 5fr 7fr;
            gap: 2rem;
            margin-top: 2.25rem;
        }

        .split-copy h3 {
            font-size: clamp(2.4rem, 5vw, 3rem);
            line-height: 1.05;
        }

        .split-copy p {
            max-width: 28rem;
            color: var(--muted);
            font-size: 1.08rem;
            line-height: 1.75;
        }

        .split-copy p+p {
            margin-top: 0.75rem;
        }

        .section-kicker {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2.5rem;
        }

        .stack-mark {
            color: rgba(255, 255, 255, 0.82);
            font-size: 2.45rem;
            line-height: 1;
            display: inline-block;
            animation: stackSpin 10s linear infinite;
            transform-origin: center;
        }

        @keyframes stackSpin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .section-kicker h2,
        .section-heading {
            font-family: var(--anton);
            font-size: 1.25rem;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        .stack-section {
            position: relative;
            overflow: hidden;
        }

        .stack-section::before {
            content: "";
            position: absolute;
            inset: 5rem 0 2rem 0;
            background-image:
                radial-gradient(circle at 12% 22%, rgba(255, 255, 255, 0.45) 0 2px, transparent 2.5px),
                radial-gradient(circle at 34% 40%, rgba(255, 255, 255, 0.28) 0 1.5px, transparent 2px),
                radial-gradient(circle at 65% 28%, rgba(255, 255, 255, 0.22) 0 1.5px, transparent 2px),
                radial-gradient(circle at 82% 62%, rgba(255, 255, 255, 0.3) 0 2px, transparent 2.5px),
                radial-gradient(circle at 52% 78%, rgba(255, 255, 255, 0.2) 0 1.5px, transparent 2px);
            opacity: 0.35;
            pointer-events: none;
            animation: particleDrift 12s ease-in-out infinite alternate;
        }

        @keyframes particleDrift {
            0% {
                transform: translate3d(0, 0, 0);
            }

            100% {
                transform: translate3d(0, -18px, 0);
            }
        }

        .stack-stream {
            position: relative;
            z-index: 1;
            display: grid;
        }

        .stack-row {
            display: grid;
            grid-template-columns: minmax(12rem, 18rem) 1fr;
            gap: 2.75rem;
            align-items: start;
            padding: 2rem 0 2.4rem;
            border-top: 1px solid var(--border);
        }

        .stack-row:last-child {
            border-bottom: 1px solid var(--border);
        }

        .stack-title {
            font-family: var(--anton);
            font-size: clamp(2.7rem, 5vw, 3.65rem);
            line-height: 0.96;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.8);
            padding-top: 0.15rem;
        }

        .stack-skill-list {
            display: flex;
            flex-wrap: wrap;
            gap: 1.55rem 2.5rem;
            max-width: 48rem;
            min-height: 4rem;
        }

        .stack-skill {
            display: inline-flex;
            align-items: center;
            gap: 0.9rem;
            color: rgba(255, 255, 255, 0.92);
            font-size: clamp(1.15rem, 2vw, 1.35rem);
            line-height: 1.3;
            transform: translateY(0);
            transition: transform 0.25s ease, color 0.25s ease;
            animation: badgeFloat 3.8s ease-in-out infinite;
            animation-delay: var(--delay, 0s);
        }

        .stack-skill:hover {
            color: #ffffff;
            transform: translateY(-4px);
        }

        @keyframes badgeFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-4px);
            }
        }

        .stack-skill-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 3.1rem;
            height: 3.1rem;
            padding: 0 0.45rem;
            border-radius: 0.95rem;
            background: var(--badge-color, #ffffff);
            color: var(--badge-text, #111111);
            font-weight: 700;
            letter-spacing: -0.03em;
            box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.08);
        }

        .stack-skill-name {
            color: rgba(255, 255, 255, 0.92);
            white-space: nowrap;
        }

        .experience-list {
            display: grid;
            gap: 2rem;
            border-top: 1px solid var(--border);
        }

        .experience-item {
            padding-top: 2rem;
            border-bottom: 1px solid var(--border);
            padding-bottom: 2rem;
        }

        .experience-company {
            color: var(--muted);
            font-size: 1.2rem;
        }

        .experience-role {
            font-family: var(--anton);
            font-size: clamp(2.7rem, 5vw, 3.6rem);
            line-height: 0.98;
            margin: 0.9rem 0 0.6rem;
        }

        .experience-period {
            color: var(--muted);
            font-size: 1.05rem;
        }

        .project-list {
            display: grid;
            gap: 1rem;
        }

        .project-row {
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: 1.4rem;
            align-items: start;
            padding: 1.8rem 0;
            border-top: 1px solid var(--border);
            transition: opacity 0.28s ease;
        }

        .project-list:hover .project-row {
            opacity: 0.36;
        }

        .project-list:hover .project-row:hover {
            opacity: 1;
        }

        .project-index {
            font-family: var(--anton);
            color: var(--muted);
            font-size: 1.1rem;
            min-width: 3rem;
        }

        .project-title {
            font-family: var(--anton);
            font-size: clamp(2.5rem, 5vw, 3.9rem);
            line-height: 0.98;
            background: linear-gradient(90deg, var(--accent) 0 50%, var(--text) 50% 100%);
            background-size: 200% 100%;
            background-position: right;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            transition: background-position 0.55s ease;
        }

        .project-row:hover .project-title {
            background-position: left;
        }

        .project-description {
            margin-top: 0.85rem;
            max-width: 34rem;
            color: var(--muted);
            line-height: 1.7;
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin-top: 1rem;
        }

        .project-tag {
            display: inline-flex;
            align-items: center;
            gap: 0.55rem;
            color: var(--muted);
            font-size: 0.76rem;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        .project-tag::before {
            content: "";
            width: 0.5rem;
            height: 0.5rem;
            border-radius: 999px;
            background: var(--bg-soft);
            flex-shrink: 0;
        }

        .project-link-note {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            font-size: 0.72rem;
            white-space: nowrap;
            margin-top: 0.45rem;
        }

        .project-link-note::after {
            content: "↗";
            color: var(--accent);
            font-size: 0.9rem;
        }

        .contact-footer {
            padding-bottom: 2.5rem;
        }

        .footer-shell {
            padding-top: 2rem;
            min-height: 20rem;
        }

        .footer-main {
            text-align: center;
            max-width: 78rem;
            margin: 0 auto;
        }

        .contact-footer p {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
        }

        .contact-mail {
            display: block;
            margin: 1.1rem auto 0;
            font-family: var(--anton);
            font-size: clamp(2.35rem, 4.9vw, 4.15rem);
            line-height: 0.98;
            max-width: 26ch;
            width: 100%;
            overflow-wrap: anywhere;
        }

        .contact-mail:hover {
            text-decoration: underline;
        }

        .credit {
            position: static;
            align-items: center;
            text-align: center;
            display: inline-flex;
            flex-direction: column;
            gap: 0.45rem;
            color: var(--muted);
            font-size: 0.95rem;
            margin: 2rem auto 0;
            width: 100%;
        }

        .credit:hover {
            color: var(--text);
        }

        .credit-metrics {
            display: flex;
            justify-content: center;
            gap: 1.2rem;
            font-size: 0.84rem;
        }

        .credit-metric {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
        }

        .reveal {
            opacity: 0;
            transform: translateY(26px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 1100px) {
            .hero-grid {
                align-items: flex-start;
                padding-top: 4rem;
            }

            .hero-stats {
                position: static;
                margin-top: 2.5rem;
                text-align: left;
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .hero-arrow {
                bottom: 2.5rem;
            }

            .stack-mark {
                font-size: 2rem;
            }

            .stack-title {
                font-size: clamp(2.2rem, 14vw, 3rem);
            }

            .stack-skill {
                font-size: 1.05rem;
            }

            .stack-skill-badge {
                min-width: 2.7rem;
                height: 2.7rem;
                border-radius: 0.8rem;
                font-size: 0.9rem;
            }

            .project-row {
                grid-template-columns: auto 1fr;
            }

            .project-link-note {
                grid-column: 2;
            }
        }

        @media (max-width: 900px) {
            .section {
                padding-bottom: 9rem;
            }

            .split-copy {
                grid-template-columns: 1fr;
            }

            .stack-row {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .stack-skill-list {
                gap: 1.25rem 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .site-header {
                padding-top: 1rem;
            }

            .fixed-mail,
            .progress-rail {
                display: none;
            }

            .hero {
                padding-top: 4.4rem;
            }

            .hero-grid {
                min-height: auto;
                display: block;
                padding-bottom: 4rem;
            }

            .hero-title .offset {
                margin-left: 0.5rem;
            }

            .hero-stats {
                grid-template-columns: 1fr;
                gap: 1.15rem;
            }

            .hero-arrow {
                width: 78vw;
                bottom: 1rem;
            }

            .drawer {
                width: calc(100vw - 1.5rem);
                max-width: none;
                padding-top: 6.25rem;
            }

            .drawer::before {
                inset: -8% -10% -8% 10%;
                border-radius: 2.4rem 0 0 2.4rem;
            }

            .lead-section h2 {
                margin-bottom: 3rem;
            }

            .footer-shell {
                min-height: auto;
                padding-top: 1rem;
            }

            .footer-main {
                text-align: center;
            }

            .credit {
                position: static;
                align-items: center;
                text-align: center;
                margin-top: 1.5rem;
            }

            .credit-metrics {
                justify-content: center;
            }

            .project-row {
                grid-template-columns: 1fr;
                gap: 0.9rem;
            }

            .project-link-note {
                grid-column: auto;
            }
        }
    </style>
</head>

<body class="intro-active">
    <div class="intro-loader" id="introLoader" aria-hidden="true">
        <div class="intro-name">
            <?php $introName = strtoupper($config['first_name']); ?>
            <?php foreach (str_split($introName) as $charIndex => $char): ?>
                <span style="--intro-index: <?php echo htmlspecialchars((string) $charIndex, ENT_QUOTES, 'UTF-8'); ?>;">
                    <?php echo htmlspecialchars($char, ENT_QUOTES, 'UTF-8'); ?>
                </span>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="page-shell">
        <div class="ambient-orb ambient-orb--one"></div>
        <div class="ambient-orb ambient-orb--two"></div>
        <div class="ambient-orb ambient-orb--three"></div>

        <header class="site-header">
            <a class="brand" href="#home"><?php echo htmlspecialchars($config['short_name'], ENT_QUOTES, 'UTF-8'); ?></a>
            <button class="menu-toggle" id="menuToggle" aria-expanded="false" aria-controls="siteDrawer" aria-label="Toggle navigation">
                <span></span>
                <span></span>
            </button>
        </header>

        <div class="drawer-overlay" id="drawerOverlay"></div>
        <aside class="drawer" id="siteDrawer" aria-hidden="true">
            <button class="drawer-close" id="drawerClose" type="button" aria-label="Close navigation">
                <span></span>
                <span></span>
            </button>
            <div class="drawer-grid">
                <div>
                    <p class="drawer-label">SOCIAL</p>
                    <ul class="drawer-list">
                        <?php foreach ($socials as $social): ?>
                            <li>
                                <a class="drawer-link" href="<?php echo htmlspecialchars($social['url'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noreferrer">
                                    <?php echo htmlspecialchars($social['label'], ENT_QUOTES, 'UTF-8'); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="drawer-nav">
                    <p class="drawer-label">MENU</p>
                    <ul class="drawer-list">
                        <li><button type="button" data-target="#home"><span class="drawer-dot drawer-dot--home">↗</span>Home</button></li>
                        <li><button type="button" data-target="#about"><span class="drawer-dot drawer-dot--about">↗</span>About Me</button></li>
                        <li><button type="button" data-target="#experience"><span class="drawer-dot drawer-dot--experience">↗</span>Experience</button></li>
                        <li><button type="button" data-target="#projects"><span class="drawer-dot drawer-dot--projects">↗</span>Projects</button></li>
                        <li><button type="button" data-target="#contact"><span class="drawer-dot drawer-dot--contact">↗</span>Contact</button></li>
                    </ul>
                </div>

                <div>
                    <p class="drawer-label">GET IN TOUCH</p>
                    <a class="drawer-link" href="mailto:<?php echo htmlspecialchars($config['email'], ENT_QUOTES, 'UTF-8'); ?>">
                        <?php echo htmlspecialchars($config['email'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </div>
            </div>
        </aside>

        <a class="fixed-mail" href="mailto:<?php echo htmlspecialchars($config['email'], ENT_QUOTES, 'UTF-8'); ?>">
            <?php echo htmlspecialchars($config['email'], ENT_QUOTES, 'UTF-8'); ?>
        </a>

        <div class="progress-rail" aria-hidden="true">
            <div class="progress-fill" id="progressFill"></div>
        </div>

        <main>
            <section class="hero" id="home">
                <svg class="hero-arrow" viewBox="0 0 376 111" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M1 1V39.9286L188 110V70.6822L1 1Z" stroke="#2C2C2C"></path>
                    <path d="M375 1V39.9286L188 110V70.6822L375 1Z" stroke="#2C2C2C"></path>
                </svg>

                <div class="container hero-grid">
                    <div class="hero-copy">
                        <h1 class="hero-title reveal">
                            <span class="accent">FULL-STACK</span><br>
                            <span class="offset">DEVELOPER</span>
                        </h1>

                        <p class="hero-description reveal">
                            Hi! I'm <strong><?php echo htmlspecialchars($config['first_name'], ENT_QUOTES, 'UTF-8'); ?></strong>. A creative <?php echo htmlspecialchars($config['subtitle'], ENT_QUOTES, 'UTF-8'); ?> with <?php echo htmlspecialchars($config['years_experience'], ENT_QUOTES, 'UTF-8'); ?> of experience building scalable systems, responsive interfaces, and production-ready web solutions.
                        </p>

                        <a class="hero-cta reveal" href="#contact"><span>Let's Talk</span></a>

                        <div class="eyebrow-status reveal">
                            <span class="status-dot"></span>
                            <span><?php echo htmlspecialchars($config['status'], ENT_QUOTES, 'UTF-8'); ?></span>
                        </div>
                    </div>

                    <div class="hero-stats">
                        <div class="reveal">
                            <div class="hero-stat-number"><?php echo htmlspecialchars($config['years_experience'], ENT_QUOTES, 'UTF-8'); ?></div>
                            <p class="hero-stat-label">Years of Experience</p>
                        </div>
                        <div class="reveal">
                            <div class="hero-stat-number"><?php echo count($projects); ?>+</div>
                            <p class="hero-stat-label">Completed Projects</p>
                        </div>
                        <div class="reveal">
                            <div class="hero-stat-number"><?php echo htmlspecialchars($config['hours_worked'], ENT_QUOTES, 'UTF-8'); ?></div>
                            <p class="hero-stat-label">Hours Worked</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section lead-section" id="about">
                <div class="container">
                    <h2 class="reveal">I believe in a user centered development approach, ensuring that every project I build is tailored to the practical needs of its users and stakeholders.</h2>

                    <p class="micro-label reveal">This is me.</p>

                    <div class="split-copy">
                        <div>
                            <h3 class="reveal">Hi, I'm <?php echo htmlspecialchars($config['first_name'], ENT_QUOTES, 'UTF-8'); ?>.</h3>
                        </div>
                        <div>
                            <p class="reveal">I'm a full-stack developer focused on turning operational problems into dependable digital products. I work across interfaces, business logic, data design, and deployment workflows.</p>
                            <p class="reveal">My approach prioritizes performance, maintainability, and clarity. I build systems that are easy to use, straightforward to scale, and aligned with real-world business requirements.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section stack-section" id="stack">
                <div class="container">
                    <div class="section-kicker reveal">
                        <span class="stack-mark" aria-hidden="true">✻</span>
                        <h2>My Stack</h2>
                    </div>

                    <div class="stack-stream">
                        <?php foreach ($stackGroups as $groupIndex => $group): ?>
                            <article class="stack-row reveal">
                                <h3 class="stack-title"><?php echo htmlspecialchars($group['label'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <div class="stack-skill-list">
                                    <?php foreach ($group['items'] as $itemIndex => $item): ?>
                                        <span class="stack-skill" style="--delay: <?php echo htmlspecialchars((string) (($groupIndex * 0.15) + ($itemIndex * 0.08)), ENT_QUOTES, 'UTF-8'); ?>s;">
                                            <span
                                                class="stack-skill-badge"
                                                style="--badge-color: <?php echo htmlspecialchars($item['tone'], ENT_QUOTES, 'UTF-8'); ?>; --badge-text: <?php echo htmlspecialchars($item['text'], ENT_QUOTES, 'UTF-8'); ?>;">
                                                <?php echo htmlspecialchars($item['icon'], ENT_QUOTES, 'UTF-8'); ?>
                                            </span>
                                            <span class="stack-skill-name"><?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></span>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section class="section" id="experience">
                <div class="container">
                    <h2 class="section-heading reveal" style="margin-bottom: 2rem;">My Experience</h2>

                    <div class="experience-list">
                        <?php foreach ($experience as $item): ?>
                            <article class="experience-item reveal">
                                <p class="experience-company"><?php echo htmlspecialchars($item['company'], ENT_QUOTES, 'UTF-8'); ?></p>
                                <h3 class="experience-role"><?php echo htmlspecialchars($item['position'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p class="experience-period"><?php echo htmlspecialchars($item['period'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section class="section" id="projects">
                <div class="container">
                    <h2 class="section-heading reveal" style="margin-bottom: 2rem;">Selected Projects</h2>

                    <div class="project-list">
                        <?php foreach ($projects as $index => $project): ?>
                            <a class="project-row reveal" href="<?php echo htmlspecialchars($project['url'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noreferrer">
                                <div class="project-index">_<?php echo str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT); ?>.</div>
                                <div>
                                    <h3 class="project-title"><?php echo htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                    <p class="project-description"><?php echo htmlspecialchars($project['desc'], ENT_QUOTES, 'UTF-8'); ?></p>
                                    <div class="project-tags">
                                        <?php foreach ($project['tags'] as $tag): ?>
                                            <span class="project-tag"><?php echo htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <span class="project-link-note">Live Project</span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <footer class="contact-footer" id="contact">
                <div class="container footer-shell">
                    <div class="footer-main">
                        <p class="reveal">Have a project in mind?</p>
                        <a class="contact-mail reveal" href="mailto:<?php echo htmlspecialchars($config['email'], ENT_QUOTES, 'UTF-8'); ?>">
                            <?php echo htmlspecialchars($config['email'], ENT_QUOTES, 'UTF-8'); ?>
                        </a>
                    </div>

                    <a class="credit reveal" href="#home">
                        <span>Design &amp; built by <?php echo htmlspecialchars($config['name'], ENT_QUOTES, 'UTF-8'); ?></span>
                        <span class="credit-metrics">
                            <span class="credit-metric">★ <?php echo count($projects); ?></span>
                            <span class="credit-metric">⑂ <?php echo count($experience); ?></span>
                        </span>
                    </a>
                </div>
            </footer>
        </main>
    </div>

    <script>
        (function() {
            const body = document.body;
            const introLoader = document.getElementById('introLoader');
            const menuToggle = document.getElementById('menuToggle');
            const drawerClose = document.getElementById('drawerClose');
            const drawer = document.getElementById('siteDrawer');
            const overlay = document.getElementById('drawerOverlay');
            const progressFill = document.getElementById('progressFill');
            const menuButtons = Array.from(document.querySelectorAll('[data-target]'));
            const sections = Array.from(document.querySelectorAll('main section[id], footer[id]'));
            const reveals = document.querySelectorAll('.reveal');

            function hideIntro() {
                if (!introLoader) {
                    body.classList.remove('intro-active');
                    return;
                }

                introLoader.classList.add('is-hidden');
                body.classList.remove('intro-active');

                window.setTimeout(function() {
                    introLoader.remove();
                }, 1100);
            }

            function setMenuState(isOpen) {
                body.classList.toggle('menu-open', isOpen);
                menuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                drawer.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
            }

            function closeMenu() {
                setMenuState(false);
            }

            menuToggle.addEventListener('click', function() {
                setMenuState(!body.classList.contains('menu-open'));
            });

            if (drawerClose) {
                drawerClose.addEventListener('click', closeMenu);
            }

            overlay.addEventListener('click', closeMenu);

            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    closeMenu();
                }
            });

            function scrollToTarget(targetSelector) {
                const target = document.querySelector(targetSelector);
                if (!target) {
                    return;
                }

                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }

            document.querySelectorAll('a[href^="#"]').forEach(function(link) {
                link.addEventListener('click', function(event) {
                    const href = this.getAttribute('href');
                    if (!href || href === '#') {
                        return;
                    }

                    event.preventDefault();
                    scrollToTarget(href);
                    closeMenu();
                });
            });

            menuButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    scrollToTarget(button.getAttribute('data-target'));
                    closeMenu();
                });
            });

            const revealObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.12,
                rootMargin: '0px 0px -40px 0px'
            });

            reveals.forEach(function(item) {
                revealObserver.observe(item);
            });

            function updateProgress() {
                const scrollable = document.documentElement.scrollHeight - window.innerHeight;
                const progress = scrollable > 0 ? (window.scrollY / scrollable) * 100 : 0;
                progressFill.style.height = Math.max(0, Math.min(progress, 100)) + '%';
            }

            function updateActiveSection() {
                let currentId = '';

                sections.forEach(function(section) {
                    const top = section.offsetTop;
                    if (window.scrollY >= top - window.innerHeight * 0.35) {
                        currentId = section.getAttribute('id');
                    }
                });

                menuButtons.forEach(function(button) {
                    const target = button.getAttribute('data-target').replace('#', '');
                    button.classList.toggle('is-active', target === currentId);
                });
            }

            window.addEventListener('scroll', function() {
                updateProgress();
                updateActiveSection();
            }, {
                passive: true
            });

            window.addEventListener('resize', updateProgress);

            updateProgress();
            updateActiveSection();

            window.setTimeout(hideIntro, 1450);
        }());
    </script>
</body>

</html>