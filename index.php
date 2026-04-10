<?php

/**
 * <CLARkODER> - Developer Portfolio
 * EDONG, CLARK STEVEN T. | 27 | Dahican, Mati City, Philippines, 8200
 * Clinical Editorial Design System
 */

$config = [
    'name' => 'EDONG, CLARK STEVEN T.',
    'short_name' => 'CLARkODER',
    'age' => 27,
    'subtitle' => 'System Engineer',
    'location' => 'Dahican, Mati City, Philippines',
    'postal' => '8200',
    'email' => 'clark.edong@example.com',
    'phone' => '+63 912 345 6789',
    'status' => 'SYSTEM_ONLINE',
    'version' => 'v2.0.24',
    'coordinates' => '6.9558° N, 126.2165° E',
    'profile_image' => 'assets/profile.jpg',
    'resume_pdf' => 'assets/resume.pdf'
];

$navItems = [
    ['id' => 'manifest', 'label' => 'Manifest', 'index' => '01'],
    ['id' => 'archive', 'label' => 'Archive', 'index' => '02'],
    ['id' => 'capabilities', 'label' => 'Stack', 'index' => '03'],
    ['id' => 'protocol', 'label' => 'Protocol', 'index' => '04'],
    ['id' => 'transmit', 'label' => 'Contact', 'index' => '05'],
];

$projects = [
    [
        'title' => 'Nova Financial Core',
        'subtitle' => 'Case 01 / Systems',
        'desc' => 'Developing a modular UI framework for high-frequency trading. Prioritizing information density without compromising cognitive load.',
        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800',
        'accent' => 'primary'
    ],
    [
        'title' => 'Vogue Digital Platform',
        'subtitle' => 'Case 02 / Editorial',
        'desc' => 'A reimagining of luxury publishing. Implemented fluid typography and complex grid systems that adapt to any viewport with mathematical precision.',
        'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800',
        'accent' => 'teal'
    ],
    [
        'title' => 'E-Commerce Engine',
        'subtitle' => 'Case 03 / Commerce',
        'desc' => 'Full-stack marketplace with real-time inventory and payment processing. Scalable architecture handling 10K+ concurrent users.',
        'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800',
        'accent' => 'purple'
    ],
    [
        'title' => 'Analytics Dashboard',
        'subtitle' => 'Case 04 / Data',
        'desc' => 'Data visualization platform with real-time metrics and custom reporting. Processing millions of data points with sub-second latency.',
        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800',
        'accent' => 'orange'
    ]
];

$skills = [
    ['name' => 'TypeScript', 'icon' => 'code', 'level' => 95],
    ['name' => 'React / Next', 'icon' => 'widgets', 'level' => 92],
    ['name' => 'Node.js', 'icon' => 'terminal', 'level' => 88],
    ['name' => 'PostgreSQL', 'icon' => 'database', 'level' => 85],
    ['name' => 'Tailwind', 'icon' => 'palette', 'level' => 94],
    ['name' => 'Docker', 'icon' => 'deployed_code', 'level' => 82],
    ['name' => 'AWS', 'icon' => 'cloud', 'level' => 80],
    ['name' => 'GraphQL', 'icon' => 'hub', 'level' => 78],
];

$timeline = [
    ['year' => '2024', 'title' => 'Senior Architect', 'desc' => 'Leading enterprise system design and technical strategy.'],
    ['year' => '2022', 'title' => 'Lead Developer', 'desc' => 'Managing teams and architecting scalable solutions.'],
    ['year' => '2020', 'title' => 'Full Stack Engineer', 'desc' => 'Building end-to-end applications with modern frameworks.'],
    ['year' => '2019', 'title' => 'Frontend Specialist', 'desc' => 'Focusing on UI engineering and design systems.'],
    ['year' => '2018', 'title' => 'System Boot', 'desc' => 'Initiated development journey. First commit.'],
];

$socialLinks = [
    ['label' => 'LinkedIn', 'url' => '#', 'icon' => 'linkedin'],
    ['label' => 'GitHub', 'url' => '#', 'icon' => 'github'],
    ['label' => 'Twitter', 'url' => '#', 'icon' => 'twitter'],
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
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@300&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
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
                        'spin-slow': 'spin 20s linear infinite',
                        'pulse-slow': 'pulse 4s ease-in-out infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'scan': 'scan 4s linear infinite',
                        'type': 'type 0.5s step-end infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-20px)'
                            },
                        },
                        scan: {
                            '0%': {
                                transform: 'translateY(-100vh)'
                            },
                            '100%': {
                                transform: 'translateY(100vh)'
                            },
                        },
                        type: {
                            '0%, 100%': {
                                opacity: '1'
                            },
                            '50%': {
                                opacity: '0'
                            },
                        },
                    },
                },
            },
        }
    </script>

    <!-- Custom Styles -->
    <style>
        :root {
            --cursor-x: 50%;
            --cursor-y: 50%;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }

        /* Pause animations on hover */
        .hover\:pause:hover * {
            animation-play-state: paused !important;
        }

        .hover-pause:hover,
        .hover-pause:hover * {
            animation-play-state: paused !important;
        }

        /* Text Reveal Animation */
        .text-reveal {
            position: relative;
            display: inline-block;
            overflow: hidden;
        }

        .text-reveal::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: currentColor;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.5s cubic-bezier(0.65, 0, 0.35, 1);
        }

        .group:hover .text-reveal::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        /* Technical Grid Background */
        .technical-grid {
            background-image:
                radial-gradient(circle, #e5e7eb 1px, transparent 1px),
                radial-gradient(circle, #e5e7eb 1px, transparent 1px);
            background-size: 40px 40px;
            background-position: 0 0, 20px 20px;
        }

        .dark .technical-grid {
            background-image:
                radial-gradient(circle, #27273a 1px, transparent 1px),
                radial-gradient(circle, #27273a 1px, transparent 1px);
        }

        /* Asymmetric Border */
        .asymmetric-border {
            border-left: 1px solid currentColor;
            padding-left: 2rem;
        }

        /* Glitch Effect */
        .glitch {
            position: relative;
        }

        .glitch::before,
        .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .glitch::before {
            animation: glitch-1 0.3s infinite linear alternate-reverse;
            color: #2979FF;
            z-index: -1;
        }

        .glitch::after {
            animation: glitch-2 0.3s infinite linear alternate-reverse;
            color: #00D4AA;
            z-index: -2;
        }

        @keyframes glitch-1 {

            0%,
            100% {
                clip-path: inset(0 0 0 0);
                transform: translate(0);
            }

            20% {
                clip-path: inset(20% 0 60% 0);
                transform: translate(-2px, 2px);
            }

            40% {
                clip-path: inset(40% 0 40% 0);
                transform: translate(2px, -2px);
            }

            60% {
                clip-path: inset(60% 0 20% 0);
                transform: translate(-2px, -2px);
            }

            80% {
                clip-path: inset(80% 0 0 0);
                transform: translate(2px, 2px);
            }
        }

        @keyframes glitch-2 {

            0%,
            100% {
                clip-path: inset(0 0 0 0);
                transform: translate(0);
            }

            20% {
                clip-path: inset(60% 0 20% 0);
                transform: translate(2px, -2px);
            }

            40% {
                clip-path: inset(40% 0 40% 0);
                transform: translate(-2px, 2px);
            }

            60% {
                clip-path: inset(20% 0 60% 0);
                transform: translate(2px, 2px);
            }

            80% {
                clip-path: inset(0 0 80% 0);
                transform: translate(-2px, -2px);
            }
        }

        /* Projects Grid with Drop Animation */
        .projects-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        @media (min-width: 768px) {
            .projects-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .project-card-wrapper {
            animation: dropIn 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
            animation-delay: var(--delay, 0s);
            opacity: 0;
            transform: translateY(-100px);
        }

        @keyframes dropIn {
            0% {
                opacity: 0;
                transform: translateY(-100px) scale(0.8);
            }

            60% {
                opacity: 1;
                transform: translateY(10px) scale(1.02);
            }

            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .project-card {
            transition: transform 0.5s cubic-bezier(0.65, 0, 0.35, 1), box-shadow 0.5s ease;
        }

        /* Animate on scroll */
        .animate-drop {
            display: inline-block;
            animation: dropText 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
            opacity: 0;
            transform: translateY(-50px);
        }

        @keyframes dropText {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-widget-drop {
            display: inline-block;
            animation: widgetFall 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
            opacity: 0;
        }

        @keyframes widgetFall {
            0% {
                opacity: 0;
                transform: translateY(-150px) rotate(-10deg);
            }

            40% {
                opacity: 1;
                transform: translateY(10px) rotate(3deg);
            }

            60% {
                transform: translateY(-5px) rotate(-1deg);
            }

            80% {
                transform: translateY(2px) rotate(0.5deg);
            }

            100% {
                opacity: 1;
                transform: translateY(0) rotate(0deg);
            }
        }

        .animate-bounce {
            animation: bounce 0.5s ease;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Enhanced Card Hover Effects */
        .project-card-image {
            position: relative;
            overflow: hidden;
        }

        .project-card-image::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(41, 121, 255, 0.2), rgba(0, 212, 170, 0.2));
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: 5;
        }

        .project-card:hover .project-card-image::before {
            opacity: 1;
        }

        .project-card-image img {
            transition: transform 0.8s cubic-bezier(0.65, 0, 0.35, 1);
        }

        .project-card:hover .project-card-image img {
            transform: scale(1.1);
        }

        /* Enhanced Button Effects */
        .btn-enhanced {
            position: relative;
            overflow: hidden;
        }

        .btn-enhanced::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn-enhanced:hover::before {
            left: 100%;
        }

        /* Scroll Indicator Animation */
        .scroll-indicator {
            animation: scrollBounce 2s ease-in-out infinite;
        }

        @keyframes scrollBounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(10px);
            }
        }

        /* Text Reveal on Scroll */
        .reveal-text {
            clip-path: inset(0 100% 0 0);
            transition: clip-path 0.8s cubic-bezier(0.65, 0, 0.35, 1);
        }

        .reveal-text.revealed {
            clip-path: inset(0 0 0 0);
        }

        /* Enhanced Interactive Elements */
        .hover-lift {
            transition: transform 0.4s cubic-bezier(0.65, 0, 0.35, 1), box-shadow 0.4s ease;
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(41, 121, 255, 0.15);
        }

        /* Glow Button Effect */
        .btn-glow {
            position: relative;
            overflow: hidden;
        }

        .btn-glow::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .btn-glow:hover::after {
            opacity: 1;
        }

        /* Floating Badge */
        .floating-badge {
            animation: floatBadge 3s ease-in-out infinite;
        }

        @keyframes floatBadge {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-10px) rotate(2deg);
            }
        }

        /* Card 3D Tilt Effect */
        .tilt-card {
            transform-style: preserve-3d;
            transition: transform 0.3s ease;
        }

        .tilt-card:hover {
            transform: perspective(1000px) rotateX(5deg) rotateY(-5deg) translateZ(10px);
        }

        /* Shimmer Effect on Images */
        .shimmer-effect {
            position: relative;
            overflow: hidden;
        }

        .shimmer-effect::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% {
                left: -100%;
            }

            50%,
            100% {
                left: 100%;
            }
        }

        /* Pulse Ring Animation */
        .pulse-ring {
            position: relative;
        }

        .pulse-ring::before {
            content: '';
            position: absolute;
            inset: -4px;
            border-radius: 50%;
            border: 2px solid currentColor;
            opacity: 0;
            animation: pulseRing 2s ease-out infinite;
        }

        @keyframes pulseRing {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }

            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }

        /* Typing Cursor Animation */
        .typing-cursor::after {
            content: '|';
            animation: blink 1s step-end infinite;
            color: #2979FF;
        }

        @keyframes blink {

            0%,
            50% {
                opacity: 1;
            }

            51%,
            100% {
                opacity: 0;
            }
        }

        /* Magnetic Button Effect */
        .magnetic-btn {
            transition: transform 0.3s cubic-bezier(0.65, 0, 0.35, 1);
        }

        /* Ripple Effect */
        .ripple {
            position: relative;
            overflow: hidden;
        }

        .ripple::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .ripple:active::after {
            width: 300px;
            height: 300px;
        }

        /* Enhanced Nav Links */
        .nav-link {
            position: relative;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: #2979FF;
            transition: width 0.3s ease;
        }

        .nav-link:hover::before {
            width: 100%;
        }

        /* Interactive Card Hover Glow */
        .glow-card {
            transition: box-shadow 0.4s ease;
        }

        .glow-card:hover {
            box-shadow: 0 0 30px rgba(41, 121, 255, 0.2), 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        /* Skill Card Interactive */
        .skill-card {
            transition: all 0.4s cubic-bezier(0.65, 0, 0.35, 1);
        }

        .skill-card:hover {
            transform: translateY(-5px) scale(1.02);
            background: rgba(41, 121, 255, 0.05);
        }

        .skill-card:hover .material-symbols-outlined {
            transform: scale(1.2);
        }

        /* Interactive Project Card */
        .project-card-interactive {
            transition: all 0.5s cubic-bezier(0.65, 0, 0.35, 1);
        }

        .project-card-interactive:hover {
            transform: translateY(-10px) scale(1.01);
        }

        /* Section Active Indicator */
        .section-dot {
            width: 6px;
            height: 6px;
            background: #2979FF;
            border-radius: 50%;
            display: inline-block;
            margin-right: 8px;
            animation: dotPulse 2s ease-in-out infinite;
        }

        @keyframes dotPulse {
            0%, 100% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.5);
                opacity: 0.5;
            }
        }

        /* Skew Hover Effect */
        .skew-hover {
            transition: transform 0.3s ease;
        }

        .skew-hover:hover {
            transform: skewX(-5deg);
        }

        /* Image Reveal Animation */
        .image-reveal {
            clip-path: inset(0 100% 0 0);
            transition: clip-path 1s cubic-bezier(0.65, 0, 0.35, 1);
        }

        .image-reveal.revealed {
            clip-path: inset(0 0 0 0);
        }

        /* Number Counter Animation */
        .counter {
            display: inline-block;
        }

        /* Gradient Border Animation */
        .gradient-border {
            position: relative;
        }

        .gradient-border::before {
            content: '';
            position: absolute;
            inset: -2px;
            background: linear-gradient(135deg, #2979FF, #00D4AA, #FF6B35, #A855F7);
            border-radius: inherit;
            z-index: -1;
            animation: gradientRotate 3s linear infinite;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gradient-border:hover::before {
            opacity: 1;
        }

        @keyframes gradientRotate {
            0% {
                filter: hue-rotate(0deg);
            }

            100% {
                filter: hue-rotate(360deg);
            }
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Hide scrollbar but allow scrolling */
        body {
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #2979FF;
            border-radius: 4px;
        }

        .dark ::-webkit-scrollbar-thumb {
            background: #2979FF;
        }

        /* Line draw animation */
        .line-draw {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: draw 2s ease forwards;
        }

        @keyframes draw {
            to {
                stroke-dashoffset: 0;
            }
        }

        /* Terminal effect */
        .terminal-text::after {
            content: '_';
            animation: blink 1s step-end infinite;
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }

        /* Parallax container */
        .parallax-container {
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        /* Animation utilities - FIXED no flip transforms */
        .perspective-500 {
            perspective: 500px;
            transform-style: preserve-3d;
        }

        .rotate-x-180 {
            transform: rotateX(180deg);
        }

        .scale-y-\[-1\] {
            transform: scaleY(-1);
        }

        .transform-style-preserve-3d {
            transform-style: preserve-3d;
        }

        /* Slide up animation - FIXED */
        @keyframes slideUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slide-up {
            animation: slideUp 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
        }

        /* Scroll-triggered animation that re-triggers */
        @keyframes slideUpReveal {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-reveal {
            opacity: 0;
            transform: translateY(50px);
        }

        .slide-reveal.active {
            animation: slideUpReveal 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
        }

        /* Flip animations removed - were causing text flip issues */

        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #2979FF, #00D4AA);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Auto-flip animation (scroll-triggered) - FIXED to not flip text incorrectly */
        .auto-flip {
            display: inline-block;
            opacity: 0;
            transform-origin: center;
            transition: transform 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55), opacity 0.5s ease;
        }

        .auto-flip.flipped-x {
            opacity: 1;
            transform: rotateX(0deg);
        }

        .auto-flip.flipped-y {
            opacity: 1;
            transform: rotateY(0deg);
        }

        .auto-flip-card {
            perspective: 500px;
        }

        /* Widget drop animation - more natural falling */
        @keyframes widgetDrop {
            0% {
                opacity: 0;
                transform: translateY(-200px) rotate(0deg);
            }

            60% {
                opacity: 1;
                transform: translateY(15px) rotate(2deg);
            }

            80% {
                transform: translateY(-5px) rotate(-1deg);
            }

            100% {
                opacity: 1;
                transform: translateY(0) rotate(0deg);
            }
        }

        .project-card-wrapper {
            opacity: 0;
            transform: translateY(-50px);
        }

        .project-card-wrapper.animated {
            animation: widgetDrop 0.7s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
            animation-delay: var(--delay, 0s);
        }

        /* Particle cursor system */
        .cursor-particle {
            position: fixed;
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            mix-blend-mode: screen;
        }

        .cursor-dot {
            width: 8px;
            height: 8px;
            background: #2979FF;
        }

        .cursor-trail {
            width: 20px;
            height: 20px;
            border: 2px solid #2979FF;
            animation: trailFade 1s ease-out forwards;
        }

        .cursor-core {
            width: 6px;
            height: 6px;
            background: #00D4AA;
        }

        @keyframes trailFade {
            0% {
                transform: scale(1);
                opacity: 0.6;
            }

            100% {
                transform: scale(2.5);
                opacity: 0;
            }
        }

        /* Background particle effect */
        .bg-particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            overflow: hidden;
        }

        .bg-particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: #2979FF;
            border-radius: 50%;
            opacity: 0.15;
            animation: particleFloat 15s ease-in-out infinite;
        }

        @keyframes particleFloat {

            0%,
            100% {
                transform: translateY(0) translateX(0) rotate(0deg);
            }

            25% {
                transform: translateY(-40px) translateX(25px) rotate(90deg);
            }

            50% {
                transform: translateY(-80px) translateX(-15px) rotate(180deg);
            }

            75% {
                transform: translateY(-40px) translateX(-30px) rotate(270deg);
            }
        }

        @keyframes geoFloat {
            0%, 100% {
                transform: translate(0, 0) rotate(0deg);
            }
            25% {
                transform: translate(30px, -40px) rotate(45deg);
            }
            50% {
                transform: translate(-20px, -80px) rotate(90deg);
            }
            75% {
                transform: translate(-40px, -40px) rotate(135deg);
            }
        }

        /* Dynamic reaction on mouse movement */
        .hover-react {
            transition: transform 0.3s cubic-bezier(0.65, 0, 0.35, 1);
        }

        /* Flip auto without hover - FIXED to start from correct position */
        @keyframes flipInX {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0deg);
            }
        }

        @keyframes flipInY {
            0% {
                opacity: 0;
                transform: translateX(-30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0deg);
            }
        }
    </style>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/favicon.png">
</head>

<body class="bg-surface text-on-surface font-sans antialiased selection:bg-primary selection:text-white transition-colors duration-500">

    <!-- Enhanced Cursor Glow -->
    <div class="cursor-glow hidden lg:block" id="cursorGlow" style="position: fixed; width: 400px; height: 400px; border-radius: 50%; background: radial-gradient(circle, rgba(41, 121, 255, 0.12) 0%, transparent 70%); pointer-events: none; z-index: 9998; transform: translate(-50%, -50%); transition: opacity 0.3s ease;"></div>

    <!-- Custom Cursor Follower -->
    <div class="cursor-follower hidden lg:block" id="cursorFollower" style="position: fixed; width: 20px; height: 20px; border: 2px solid #2979FF; border-radius: 50%; pointer-events: none; z-index: 9999; transform: translate(-50%, -50%); transition: transform 0.15s ease, opacity 0.3s ease;"></div>

    <!-- Custom Cursor Dot -->
    <div class="cursor-dot-custom hidden lg:block" id="cursorDot" style="position: fixed; width: 8px; height: 8px; background: #00D4AA; border-radius: 50%; pointer-events: none; z-index: 9999; transform: translate(-50%, -50%);"></div>

    <!-- Background Particles -->
    <div class="bg-particles" id="bgParticles"></div>

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-[100] bg-white/90 dark:bg-[#0a0b0d]/90 backdrop-blur-md border-b border-gray-200 dark:border-[#27273a] transition-colors duration-500">
        <div class="flex justify-between items-center max-w-[1440px] mx-auto px-6 md:px-16 h-20 md:h-24">
            <!-- Logo -->
            <a href="#" class="text-xl md:text-2xl font-bold tracking-tighter uppercase group cursor-pointer flex items-center gap-1">
                <span class="inline-block transition-transform duration-500 group-hover:-translate-y-1">&lt;</span>
                <span class="text-primary glitch" data-text="<?php echo $config['short_name']; ?>"><?php echo $config['short_name']; ?></span>
                <span class="inline-block transition-transform duration-500 group-hover:translate-y-1">/&gt;</span>
            </a>

            <!-- Desktop Nav -->
            <div class="hidden md:flex items-center gap-8 lg:gap-12">
                <?php foreach ($navItems as $item): ?>
                    <a href="#<?php echo $item['id']; ?>" class="text-xs font-bold tracking-[0.2em] uppercase group nav-link">
                        <span class="text-reveal text-on-surface-variant hover:text-primary transition-colors"><?php echo $item['label']; ?></span>
                    </a>
                <?php endforeach; ?>

                <!-- Theme Toggle -->
                <button id="themeToggle" class="w-10 h-10 rounded-full border border-gray-200 dark:border-[#27273a] flex items-center justify-center hover:border-primary transition-colors">
                    <span class="material-symbols-outlined text-lg" id="themeIcon">dark_mode</span>
                </button>

                <a href="#transmit" class="bg-on-surface text-white dark:bg-white dark:text-on-surface px-6 py-3 text-xs font-bold tracking-[0.15em] uppercase hover:bg-primary dark:hover:bg-primary dark:hover:text-white transition-all duration-500">
                    Transmit
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden" id="mobileMenuBtn">
                <span class="material-symbols-outlined text-3xl">menu_open</span>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="hidden md:hidden bg-white/95 dark:bg-[#0a0b0d]/95 border-t border-gray-200 dark:border-[#27273a]" id="mobileMenu">
            <div class="px-6 py-8 space-y-6">
                <?php foreach ($navItems as $item): ?>
                    <a href="#<?php echo $item['id']; ?>" class="block text-sm font-bold tracking-[0.2em] uppercase text-on-surface hover:text-primary transition-colors mobile-link">
                        <span class="text-primary"><?php echo $item['index']; ?></span> <?php echo $item['label']; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </nav>

    <main class="parallax-container">

        <!-- Hero Section -->
        <section class="min-h-screen pt-20 md:pt-24 flex items-center relative overflow-hidden technical-grid" id="hero">
            <!-- Scanning Line -->
            <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-transparent via-primary to-transparent animate-scan z-10 opacity-60"></div>

            <!-- Floating Geometric Elements -->
            <div class="absolute right-10 top-1/4 opacity-10 pointer-events-none hidden xl:block hover-pause">
                <svg width="300" height="300" viewBox="0 0 100 100" class="animate-spin-slow">
                    <circle cx="50" cy="50" r="45" fill="none" stroke="currentColor" stroke-dasharray="2,2" stroke-width="0.5" />
                    <circle cx="50" cy="50" r="35" fill="none" stroke="currentColor" stroke-width="0.2" />
                    <line x1="50" y1="0" x2="50" y2="100" stroke="currentColor" stroke-width="0.2" />
                    <line x1="0" y1="50" x2="100" y2="50" stroke="currentColor" stroke-width="0.2" />
                </svg>
            </div>

            <div class="absolute left-20 bottom-20 opacity-10 pointer-events-none hidden xl:block hover-pause">
                <div class="w-40 h-40 border border-current rounded-full animate-pulse-slow"></div>
            </div>

            <div class="max-w-[1440px] mx-auto px-6 md:px-16 w-full grid grid-cols-12 gap-8 py-12 md:py-20">
                <!-- Text Content -->
                <div class="col-span-12 lg:col-span-7 order-2 lg:order-1">
                    <!-- Status Badge -->
                    <div class="mb-8 overflow-hidden">
                        <span class="inline-flex items-center gap-2 text-xs font-bold tracking-[0.3em] uppercase text-primary mb-6">
                            <span class="w-2 h-2 bg-teal rounded-full animate-pulse"></span>
                            <?php echo $config['status']; ?>
                        </span>

                        <!-- Hacker Terminal -->
                        <div class="font-mono text-sm text-on-surface-variant mb-4 opacity-80">
                            <span class="text-teal">root@<?php echo strtolower($config['short_name']); ?>:~$</span>
                            <span class="terminal-text" id="terminalCommand">whoami</span>
                        </div>
                    </div>

                    <!-- Main Title -->
                    <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-[8rem] font-bold leading-[0.85] tracking-tighter mb-8 md:mb-12">
                        <span class="block overflow-hidden">
                            <span class="inline-block animate-slide-up hover-lift inline-block">CLARK</span>
                        </span>
                        <span class="block overflow-hidden">
                            <span class="inline-block animate-slide-up hover-lift inline-block" style="animation-delay: 0.1s">STEVEN</span>
                        </span>
                        <span class="block overflow-hidden gradient-text">
                            <span class="inline-block animate-slide-up hover-lift inline-block" style="animation-delay: 0.2s">EDONG.</span>
                        </span>
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-lg md:text-xl text-on-surface-variant max-w-xl leading-relaxed font-light asymmetric-border mb-8 md:mb-12">
                        <span class="text-primary font-medium">&lt;<?php echo $config['title']; ?>/&gt;</span><br>
                        A technical architect bridging the gap between clinical performance and editorial aesthetics. Building resilient digital ecosystems from <?php echo $config['location']; ?>, <?php echo $config['postal']; ?>.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-4">
                        <a href="#archive" class="group bg-primary text-white px-8 py-4 text-xs font-bold tracking-[0.2em] uppercase hover:bg-primary-dark transition-all duration-500 flex items-center gap-3 btn-glow hover-lift">
                            View Archive
                            <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                        <a href="#transmit" class="group border border-on-surface dark:border-gray-600 px-8 py-4 text-xs font-bold tracking-[0.2em] uppercase hover:bg-on-surface hover:text-white dark:hover:bg-white dark:hover:text-on-surface transition-all duration-500 skew-hover">
                            Initiate Link
                        </a>
                    </div>
                </div>

                <!-- Profile Image -->
                <div class="col-span-12 lg:col-span-5 relative flex items-center justify-center order-1 lg:order-2 mb-8 lg:mb-0">
                    <div class="relative w-full max-w-[350px] aspect-[4/5] group overflow-hidden tilt-card">
                        <!-- Image Frame -->
                        <div class="absolute inset-0 border-2 border-primary/30 rounded-lg transform rotate-3 group-hover:rotate-6 transition-transform duration-700"></div>

                        <!-- Image with shimmer effect - shows dark mode image in dark mode -->
                        <img
                            id="profileImage"
                            src="assets/profile.jpg"
                            alt="<?php echo $config['name']; ?>"
                            class="relative z-10 w-full h-full object-cover transition-all duration-1000 rounded-lg shadow-2xl image-reveal"
                            onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&h=750&fit=crop'">

                        <!-- Hover Label with floating animation -->
                        <div class="absolute bottom-6 left-6 text-white z-30 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <p class="text-xs tracking-widest uppercase font-bold bg-black/50 px-3 py-1 rounded floating-badge">System Online</p>
                        </div>

                        <!-- Decorative corner elements -->
                        <div class="absolute top-4 right-4 w-4 h-4 border-t-2 border-r-2 border-primary/50 opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        <div class="absolute bottom-4 left-4 w-4 h-4 border-b-2 border-l-2 border-primary/50 opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                    </div>

                    <!-- Decorative Elements -->
                    <div class="absolute -right-8 top-1/4 w-20 h-20 border border-primary/30 rounded-full animate-float hidden lg:block pulse-ring"></div>
                    <div class="absolute -left-4 bottom-1/4 w-12 h-12 bg-teal/20 rounded-full animate-float hidden lg:block" style="animation-delay: -2s;"></div>
                </div>
            </div>
        </section>

        <!-- Identity / Manifest Section -->
        <section class="py-24 md:py-32 bg-on-surface text-white" id="manifest">
            <div class="max-w-[1440px] mx-auto px-6 md:px-16">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-16">
                    <div class="space-y-4 group">
                        <span class="text-[10px] tracking-[0.5em] uppercase opacity-40 block group-hover:text-primary transition-colors duration-300">01 / Identity</span>
                        <h3 class="text-2xl md:text-3xl font-light group-hover:translate-x-2 transition-all duration-300"><?php echo $config['name']; ?></h3>
                        <div class="h-[1px] w-0 bg-primary group-hover:w-full transition-all duration-700"></div>
                    </div>
                    <div class="space-y-4 group">
                        <span class="text-[10px] tracking-[0.5em] uppercase opacity-40 block group-hover:text-teal transition-colors duration-300">02 / Age Units</span>
                        <h3 class="text-2xl md:text-3xl font-light group-hover:translate-x-2 transition-all duration-300"><?php echo $config['age']; ?> Years</h3>
                        <div class="h-[1px] w-0 bg-teal group-hover:w-full transition-all duration-700"></div>
                    </div>
                    <div class="space-y-4 group">
                        <span class="text-[10px] tracking-[0.5em] uppercase opacity-40 block group-hover:text-orange transition-colors duration-300">03 / Coordinates</span>
                        <h3 class="text-2xl md:text-3xl font-light leading-snug group-hover:translate-x-2 transition-all duration-300"><?php echo $config['location']; ?>,<br><?php echo $config['postal']; ?></h3>
                        <div class="h-[1px] w-0 bg-orange group-hover:w-full transition-all duration-700"></div>
                    </div>
                </div>

                <!-- Additional Stats -->
                <div class="mt-20 pt-12 border-t border-white/10 grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center group cursor-pointer">
                        <span class="text-4xl md:text-5xl font-bold text-primary block group-hover:scale-125 group-hover:text-teal transition-all duration-300">50+</span>
                        <p class="text-xs tracking-[0.3em] uppercase mt-2 opacity-60 group-hover:opacity-100 transition-opacity">Deployments</p>
                    </div>
                    <div class="text-center group cursor-pointer">
                        <span class="text-4xl md:text-5xl font-bold text-teal block group-hover:scale-125 group-hover:text-orange transition-all duration-300">6+</span>
                        <p class="text-xs tracking-[0.3em] uppercase mt-2 opacity-60 group-hover:opacity-100 transition-opacity">Years Active</p>
                    </div>
                    <div class="text-center group cursor-pointer">
                        <span class="text-4xl md:text-5xl font-bold text-orange block group-hover:scale-125 group-hover:text-purple transition-all duration-300">30+</span>
                        <p class="text-xs tracking-[0.3em] uppercase mt-2 opacity-60 group-hover:opacity-100 transition-opacity">Clients Served</p>
                    </div>
                    <div class="text-center group cursor-pointer">
                        <span class="text-4xl md:text-5xl font-bold text-purple block group-hover:scale-125 group-hover:text-primary transition-all duration-300">100%</span>
                        <p class="text-xs tracking-[0.3em] uppercase mt-2 opacity-60 group-hover:opacity-100 transition-opacity">Availability</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Archive / Projects Section -->
        <section class="py-24 md:py-40" id="archive">
            <div class="max-w-[1440px] mx-auto px-6 md:px-16">
                <!-- Section Header -->
                <div class="flex flex-col md:flex-row justify-between items-baseline mb-16 md:mb-24 border-b border-gray-200 dark:border-[#27273a] pb-8 md:pb-12">
                    <h2 class="text-4xl md:text-6xl lg:text-7xl font-bold tracking-tighter uppercase mb-6 md:mb-0">
                        <span class="block animate-widget-drop">The</span>
                        <span class="block animate-widget-drop" style="animation-delay: 0.15s">Archive</span>
                    </h2>
                    <p class="max-w-xs text-on-surface-variant text-sm font-medium leading-relaxed">
                        Selected works from the laboratory. Rigorous examination of patterns and technical architecture.
                    </p>
                </div>

                <!-- Projects Grid with Enhanced Transitions -->
                <div class="projects-grid">
                    <?php foreach ($projects as $index => $project): ?>
                        <div class="project-card-wrapper group" style="--delay: <?php echo $index * 0.15; ?>s;">
                            <div class="project-card project-card-interactive bg-surface-dim rounded-xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl hover:shadow-primary/20 transition-all duration-500">
                                <div class="project-card-image aspect-video relative overflow-hidden">
                                    <img
                                        src="<?php echo $project['image']; ?>"
                                        alt="<?php echo $project['title']; ?>"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                                    <!-- Floating Tech Stack Tags -->
                                    <div class="absolute top-4 left-4 flex flex-wrap gap-2 opacity-0 group-hover:opacity-100 transition-all duration-500 transform -translate-y-2 group-hover:translate-y-0">
                                        <span class="text-[10px] font-bold tracking-widest uppercase bg-black/50 text-white px-3 py-1 rounded-full backdrop-blur-sm">React</span>
                                        <span class="text-[10px] font-bold tracking-widest uppercase bg-black/50 text-white px-3 py-1 rounded-full backdrop-blur-sm">Node.js</span>
                                    </div>
                                </div>

                                <!-- Card Content -->
                                <div class="p-6 md:p-8 relative">
                                    <!-- Card number badge -->
                                    <div class="absolute -top-5 left-6 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center text-sm font-bold shadow-lg transform group-hover:scale-110 transition-transform duration-300">
                                        <?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>
                                    </div>

                                    <span class="text-xs font-bold tracking-[0.3em] uppercase text-<?php echo $project['accent']; ?> mb-3 block"><?php echo $project['subtitle']; ?></span>
                                    <h3 class="text-2xl md:text-3xl font-bold mb-3 tracking-tight group-hover:text-primary transition-colors"><?php echo $project['title']; ?></h3>
                                    <p class="text-on-surface-variant leading-relaxed text-sm md:text-base">
                                        <?php echo $project['desc']; ?>
                                    </p>

                                    <!-- Tech Pills -->
                                    <div class="flex flex-wrap gap-2 mt-4 pt-4 border-t border-gray-200 dark:border-[#27273a]">
                                        <span class="text-[10px] font-bold tracking-wider uppercase bg-gray-100 dark:bg-[#27273a] px-3 py-1 rounded">JavaScript</span>
                                        <span class="text-[10px] font-bold tracking-wider uppercase bg-gray-100 dark:bg-[#27273a] px-3 py-1 rounded">PostgreSQL</span>
                                        <span class="text-[10px] font-bold tracking-wider uppercase bg-gray-100 dark:bg-[#27273a] px-3 py-1 rounded">AWS</span>
                                    </div>

                                    <!-- Action buttons -->
                                    <div class="flex gap-3 mt-4 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                                        <a href="#" class="flex-1 py-3 text-center text-xs font-bold tracking-widest uppercase bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors">View</a>
                                        <a href="#" class="flex-1 py-3 text-center text-xs font-bold tracking-widest uppercase border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-100 dark:hover:bg-[#27273a] transition-colors">Code</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Stack / Capabilities Section -->
        <section class="py-24 md:py-40 bg-surface-dim border-y border-gray-200 dark:border-[#27273a] relative overflow-hidden" id="capabilities">
            <!-- Background Pattern -->
            <div class="absolute inset-0 technical-grid opacity-50"></div>

            <div class="max-w-[1440px] mx-auto px-6 md:px-16 grid grid-cols-12 gap-8 md:gap-12 relative z-10">
                <div class="col-span-12 lg:col-span-4">
                    <h2 class="text-4xl md:text-5xl font-bold tracking-tighter uppercase mb-6 md:mb-8">
                        System<br>Capabilities
                    </h2>
                    <p class="text-on-surface-variant font-light text-base md:text-lg asymmetric-border">
                        Core engine stack and proficiency matrix. Selected for performance and reliability.
                    </p>
                </div>

                <div class="col-span-12 lg:col-span-8 grid grid-cols-2 sm:grid-cols-4 gap-px bg-gray-200 dark:bg-[#27273a]">
                    <?php foreach ($skills as $skill): ?>
                        <div class="bg-surface p-6 md:p-10 flex flex-col items-center justify-center group cursor-crosshair hover:bg-surface-dim transition-colors duration-300">
                            <span class="material-symbols-outlined text-3xl md:text-4xl mb-4 text-primary transition-transform duration-700 group-hover:rotate-180">
                                <?php echo $skill['icon']; ?>
                            </span>
                            <span class="text-xs font-bold tracking-widest uppercase text-center"><?php echo $skill['name']; ?></span>
                            <div class="mt-3 w-full h-1 bg-gray-200 dark:bg-[#27273a] rounded-full overflow-hidden">
                                <div class="h-full bg-primary rounded-full" style="width: <?php echo $skill['level']; ?>%"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Protocol / Timeline Section -->
        <section class="py-24 md:py-40" id="protocol">
            <div class="max-w-[1440px] mx-auto px-6 md:px-16">
                <div class="text-center mb-16 md:mb-24">
                    <span class="text-xs font-bold tracking-[0.3em] uppercase text-primary mb-4 block">2018 — 2024</span>
                    <h2 class="text-4xl md:text-6xl font-bold tracking-tighter uppercase">The Journey</h2>
                </div>

                <div class="relative">
                    <!-- Timeline Line -->
                    <div class="absolute left-4 md:left-1/2 top-0 bottom-0 w-[2px] bg-gray-200 dark:bg-[#27273a] md:-translate-x-1/2"></div>
                    <div class="absolute left-4 md:left-1/2 top-0 w-[2px] h-[30%] bg-gradient-to-b from-primary to-teal md:-translate-x-1/2 animate-pulse"></div>

                    <!-- Timeline Items -->
                    <div class="space-y-12 md:space-y-0">
                        <?php foreach ($timeline as $index => $item): ?>
                            <div class="relative md:grid md:grid-cols-2 md:gap-16 <?php echo $index > 0 ? 'md:mt-12' : ''; ?>">
                                <!-- Marker -->
                                <div class="absolute left-4 md:left-1/2 top-0 w-3 h-3 rounded-full bg-primary border-4 border-surface md:-translate-x-1/2 z-10 shadow-lg shadow-primary/30"></div>

                                <!-- Content -->
                                <div class="pl-12 md:pl-0 <?php echo $index % 2 === 0 ? 'md:pr-16 md:text-right' : 'md:col-start-2 md:pl-16'; ?>">
                                    <span class="text-primary font-mono text-sm font-bold"><?php echo $item['year']; ?></span>
                                    <h3 class="text-xl md:text-2xl font-bold mt-2 mb-2"><?php echo $item['title']; ?></h3>
                                    <p class="text-on-surface-variant text-sm"><?php echo $item['desc']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

<!-- Contact / Transmit Section -->
        <section class="py-24 md:py-40" id="transmit">
            <div class="max-w-[1440px] mx-auto px-6 md:px-16 grid grid-cols-12 gap-8 md:gap-16">
                <div class="col-span-12 lg:col-span-5">
                    <span class="text-xs font-bold tracking-[0.3em] uppercase text-primary mb-4 block">05 / Transmit</span>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tighter uppercase mb-6 md:mb-12 group">
                        <span class="block group-hover:-translate-y-1 transition-transform duration-300">Initiate</span>
                        <span class="block group-hover:translate-x-2 transition-transform duration-300">Inquiry</span>
                    </h2>
                    <p class="text-lg md:text-xl font-light text-on-surface-variant mb-8 md:mb-16 leading-relaxed">
                        Available for senior partnerships and strategic consulting. Ready to define the next iteration.
                    </p>

                    <!-- Social Links -->
                    <div class="space-y-4 md:space-y-6">
                        <?php foreach ($socialLinks as $link): ?>
                        <a href="<?php echo $link['url']; ?>" class="group flex items-center justify-between border-b border-gray-200 dark:border-[#27273a] pb-3 md:pb-4 hover:bg-gray-50 dark:hover:bg-[#1a1c22] transition-colors rounded-lg px-4 -mx-4">
                                <span class="text-xs font-bold tracking-[0.3em] uppercase group-hover:text-primary transition-colors flex items-center gap-3">
                                    <span class="material-symbols-outlined text-lg"><?php echo $link['icon']; ?></span>
                                    <?php echo $link['label']; ?>
                                </span>
                                <span class="material-symbols-outlined -rotate-45 transition-transform duration-500 group-hover:rotate-0">arrow_forward</span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="col-span-12 lg:col-span-7">
                    <form id="contactForm" class="space-y-6 md:space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                            <div class="space-y-3 md:space-y-4">
                                <label class="text-[10px] font-bold tracking-[0.4em] uppercase text-on-surface-variant">Identity</label>
                                <input type="text" placeholder="Full Name" required
                                    class="w-full bg-transparent border-0 border-b border-gray-200 dark:border-[#27273a] px-0 py-3 md:py-4 focus:ring-0 focus:border-primary transition-colors placeholder:text-gray-400">
                            </div>
                            <div class="space-y-3 md:space-y-4">
                                <label class="text-[10px] font-bold tracking-[0.4em] uppercase text-on-surface-variant">Channel</label>
                                <input type="email" placeholder="Email Address" required
                                    class="w-full bg-transparent border-0 border-b border-gray-200 dark:border-[#27273a] px-0 py-3 md:py-4 focus:ring-0 focus:border-primary transition-colors placeholder:text-gray-400">
                            </div>
                        </div>
                        <div class="space-y-3 md:space-y-4">
                            <label class="text-[10px] font-bold tracking-[0.4em] uppercase text-on-surface-variant">Data Packet</label>
                            <textarea placeholder="Project Description / Message" rows="4" required
                                class="w-full bg-transparent border-0 border-b border-gray-200 dark:border-[#27273a] px-0 py-3 md:py-4 focus:ring-0 focus:border-primary transition-colors placeholder:text-gray-400 resize-none"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full md:w-auto bg-on-surface text-white dark:bg-white dark:text-on-surface px-8 md:px-16 py-4 md:py-6 text-sm font-bold tracking-[0.3em] uppercase hover:bg-primary dark:hover:bg-primary dark:hover:text-white transition-all duration-500 flex items-center justify-center gap-4 group">
                            Transmit Message
                            <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform">arrow_right_alt</span>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="py-8 md:py-12 border-t border-gray-200 dark:border-[#27273a]">
        <div class="max-w-[1440px] mx-auto px-6 md:px-16 flex flex-col md:flex-row justify-between items-center gap-4 md:gap-8">
            <div class="text-lg md:text-xl font-bold tracking-tighter uppercase">
                &lt;<?php echo $config['short_name']; ?>/&gt;
            </div>
            <p class="text-[10px] tracking-[0.3em] uppercase text-on-surface-variant">
                © <?php echo date('Y'); ?> <?php echo $config['name']; ?> / <?php echo $config['location']; ?> / <?php echo $config['postal']; ?>
            </p>
            <div class="flex gap-4 md:gap-8">
                <span class="text-[10px] tracking-[0.3em] uppercase font-bold text-on-surface-variant flex items-center gap-2">
                    <span class="w-2 h-2 bg-teal rounded-full animate-pulse"></span>
                    <?php echo $config['status']; ?>
                </span>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Theme Toggle
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');
        const html = document.documentElement;

        // Check saved theme and set profile image
        const savedTheme = localStorage.getItem('theme') || 'dark';
        if (savedTheme === 'dark') {
            html.classList.add('dark');
            themeIcon.textContent = 'light_mode';
            document.getElementById('profileImage').src = 'assets/profile-darkmode.png';
        } else {
            themeIcon.textContent = 'dark_mode';
            document.getElementById('profileImage').src = 'assets/profile.jpg';
        }

        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            const isDark = html.classList.contains('dark');
            themeIcon.textContent = isDark ? 'light_mode' : 'dark_mode';
            localStorage.setItem('theme', isDark ? 'dark' : 'light');

            // Switch profile image based on theme
            const profileImg = document.getElementById('profileImage');
            if (profileImg) {
                profileImg.src = isDark ? 'assets/profile-darkmode.png' : 'assets/profile.jpg';
            }
        });

        // Mobile Menu
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu on link click
        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Custom Cursor with Particles (Desktop only)
        if (window.matchMedia('(pointer: fine)').matches) {
            const particles = [];
            const maxParticles = 15;
            let cursorX = 0,
                cursorY = 0;
            let lastX = 0,
                lastY = 0;
            let mouseSpeed = 0;

            // Create cursor particles
            for (let i = 0; i < maxParticles; i++) {
                const particle = document.createElement('div');
                particle.className = 'cursor-particle';

                if (i === 0) {
                    particle.classList.add('cursor-core');
                } else {
                    particle.classList.add('cursor-trail');
                    particle.style.animationDelay = `${i * 0.05}s`;
                }

                particle.style.left = '-100px';
                particle.style.top = '-100px';
                document.body.appendChild(particle);

                particles.push({
                    element: particle,
                    x: -100,
                    y: -100,
                    vx: 0,
                    vy: 0
                });
            }

            document.addEventListener('mousemove', (e) => {
                cursorX = e.clientX;
                cursorY = e.clientY;

                // Calculate mouse speed
                const dx = cursorX - lastX;
                const dy = cursorY - lastY;
                mouseSpeed = Math.sqrt(dx * dx + dy * dy);
                lastX = cursorX;
                lastY = cursorY;

                if (cursorGlow) {
                    cursorGlow.style.left = cursorX + 'px';
                    cursorGlow.style.top = cursorY + 'px';
                    cursorGlow.style.opacity = mouseSpeed > 50 ? '0' : '1';
                }

                // Update custom cursor elements
                const cursorFollower = document.getElementById('cursorFollower');
                const cursorDot = document.getElementById('cursorDot');
                if (cursorFollower) {
                    cursorFollower.style.left = cursorX + 'px';
                    cursorFollower.style.top = cursorY + 'px';
                    // Scale based on speed
                    const scale = 1 + Math.min(mouseSpeed / 100, 0.5);
                    cursorFollower.style.transform = `translate(-50%, -50%) scale(${scale})`;
                }
                if (cursorDot) {
                    cursorDot.style.left = cursorX + 'px';
                    cursorDot.style.top = cursorY + 'px';
                }
            });

            function animateParticles() {
                particles.forEach((p, i) => {
                    const delay = i * 0.08;

                    if (i === 0) {
                        p.x += (cursorX - p.x) * 0.5;
                        p.y += (cursorY - p.y) * 0.5;
                    } else {
                        const targetX = particles[0].x - (i * 3);
                        const targetY = particles[0].y - (i * 3);
                        p.x += (targetX - p.x) * 0.15;
                        p.y += (targetY - p.y) * 0.15;
                    }

                    p.element.style.left = p.x + 'px';
                    p.element.style.top = p.y + 'px';
                });

                requestAnimationFrame(animateParticles);
            }
            animateParticles();

            document.addEventListener('mouseleave', () => {
                particles.forEach(p => {
                    p.element.style.opacity = '0';
                });
            });

            document.addEventListener('mouseenter', () => {
                particles.forEach(p => {
p.element.style.opacity = '';
                });
            });
        }
        
        // Enhanced Background particles with geometric shapes
        const bgParticles = document.getElementById('bgParticles');
        const particleCount = 30;

        if (bgParticles) {
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                const size = Math.random() * 4 + 2;
                const isGeo = Math.random() > 0.7;
                
                particle.style.cssText = `
                    position: absolute;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${Math.random() * 100}%;
                    top: ${Math.random() * 100}%;
                    opacity: ${Math.random() * 0.2 + 0.05};
                    animation: particleFloat ${15 + Math.random() * 20}s ease-in-out ${Math.random() * 10}s infinite;
                    pointer-events: none;
                `;
                
                if (isGeo) {
                    // Geometric shapes (squares, triangles)
                    if (Math.random() > 0.5) {
                        particle.style.border = `1px solid rgba(41, 121, 255, ${Math.random() * 0.3})`;
                        particle.style.borderRadius = '0';
                    } else {
                        // Triangle using CSS
                        particle.style.width = '0';
                        particle.style.height = '0';
                        particle.style.borderLeft = `${size/2}px solid transparent`;
                        particle.style.borderRight = `${size/2}px solid transparent`;
                        particle.style.borderBottom = `${size}px solid rgba(0, 212, 170, ${Math.random() * 0.2})`;
                        particle.style.background = 'transparent';
                    }
                } else {
                    particle.style.background = Math.random() > 0.5 ? 'rgba(41, 121, 255, 0.3)' : 'rgba(0, 212, 170, 0.3)';
                    particle.style.borderRadius = '50%';
                }
                
                bgParticles.appendChild(particle);
            }

            // Add floating geometric shapes
            for (let i = 0; i < 5; i++) {
                const geo = document.createElement('div');
                const size = 30 + Math.random() * 50;
                geo.style.cssText = `
                    position: absolute;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${Math.random() * 100}%;
                    top: ${Math.random() * 100}%;
                    border: 1px solid rgba(41, 121, 255, 0.1);
                    border-radius: ${Math.random() > 0.5 ? '50%' : '0'};
                    animation: geoFloat ${20 + Math.random() * 15}s ease-in-out infinite;
                    pointer-events: none;
                `;
                bgParticles.appendChild(geo);
            }
        }

// Terminal Command Rotator
        const commands = ['whoami', 'ls -la /projects', 'git status', 'npm run build', 'docker ps', 'ssh deploy@production'];
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

        // Parallax Effect
        document.addEventListener('mousemove', (e) => {
            const targets = document.querySelectorAll('.parallax-target');
            const x = (window.innerWidth - e.pageX * 2) / 100;
            const y = (window.innerHeight - e.pageY * 2) / 100;

            targets.forEach(target => {
                target.style.transform = `translateX(${x}px) translateY(${y}px)`;
            });
        });

        // Intersection Observer for Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        document.querySelectorAll('[data-animate]').forEach(el => observer.observe(el));

        // Smooth Scroll for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Active Section Highlighting
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');

        function updateActiveNav() {
            const scrollPos = window.scrollY + 100;

            sections.forEach(section => {
                const top = section.offsetTop;
                const height = section.offsetHeight;
                const id = section.getAttribute('id');

                if (scrollPos >= top && scrollPos < top + height) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === `#${id}`) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }

        window.addEventListener('scroll', updateActiveNav);
        updateActiveNav();

        // Form Submission
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', async (e) => {
                e.preventDefault();
                const btn = contactForm.querySelector('button[type="submit"]');
                const originalText = btn.innerHTML;

                btn.innerHTML = '<span class="animate-pulse">TRANSMITTING...</span>';
                btn.disabled = true;

                // Simulate transmission
                await new Promise(resolve => setTimeout(resolve, 2000));

                btn.innerHTML = '<span class="text-teal">TRANSMITTED ✓</span>';

                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.disabled = false;
                    contactForm.reset();
                }, 3000);
            });
        }

        // Scroll Reveal Animation
        const revealElements = document.querySelectorAll('.group');
        revealElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                el.querySelector('.h-[1px]')?.classList.remove('w-0');
                el.querySelector('.h-[1px]')?.classList.add('w-full');
            });
        });

        // Projects Drop Animation on Scroll - FIXED to re-animate properly
        const projectCards = document.querySelectorAll('.project-card-wrapper');

        const projectObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Remove and re-add class to re-trigger animation
                    entry.target.classList.remove('animated');
                    void entry.target.offsetWidth; // Force reflow
                    entry.target.classList.add('animated');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        projectCards.forEach(card => {
            projectObserver.observe(card);
        });

        // Initial check for cards already in view
        projectCards.forEach(card => {
            const rect = card.getBoundingClientRect();
            if (rect.top < window.innerHeight) {
                card.classList.add('animated');
            }
        });

        // Enhanced Scroll Animations
        const scrollObserverOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const scrollObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, scrollObserverOptions);

        document.querySelectorAll('.reveal-text').forEach(el => scrollObserver.observe(el));

        // Image Reveal on Scroll
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, {
            threshold: 0.2
        });

        document.querySelectorAll('.image-reveal').forEach(el => imageObserver.observe(el));

        // Trigger initial reveal if already in view
        setTimeout(() => {
            document.querySelectorAll('.image-reveal').forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight) {
                    el.classList.add('revealed');
                }
            });
        }, 500);

        // Hero Title Animation - trigger on load
        document.querySelectorAll('.animate-slide-up').forEach((el, i) => {
            setTimeout(() => {
                el.style.animation = 'slideUp 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards';
            }, i * 150);
        });

        // Widget drop animation for Archive section
        document.querySelectorAll('.animate-widget-drop').forEach((el, i) => {
            setTimeout(() => {
                el.style.animation = 'widgetFall 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards';
            }, i * 150 + 300);
        });
    </script>
</body>

</html>