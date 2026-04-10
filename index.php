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
    'title' => 'Digital Architect',
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
    <title>&lt;<?php echo $config['short_name']; ?>&gt; | <?php echo $config['name']; ?></title>
    
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
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        scan: {
                            '0%': { transform: 'translateY(-100vh)' },
                            '100%': { transform: 'translateY(100vh)' },
                        },
                        type: {
                            '0%, 100%': { opacity: '1' },
                            '50%': { opacity: '0' },
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
            0%, 100% { clip-path: inset(0 0 0 0); transform: translate(0); }
            20% { clip-path: inset(20% 0 60% 0); transform: translate(-2px, 2px); }
            40% { clip-path: inset(40% 0 40% 0); transform: translate(2px, -2px); }
            60% { clip-path: inset(60% 0 20% 0); transform: translate(-2px, -2px); }
            80% { clip-path: inset(80% 0 0 0); transform: translate(2px, 2px); }
        }
        
        @keyframes glitch-2 {
            0%, 100% { clip-path: inset(0 0 0 0); transform: translate(0); }
            20% { clip-path: inset(60% 0 20% 0); transform: translate(2px, -2px); }
            40% { clip-path: inset(40% 0 40% 0); transform: translate(-2px, 2px); }
            60% { clip-path: inset(20% 0 60% 0); transform: translate(2px, 2px); }
            80% { clip-path: inset(0 0 80% 0); transform: translate(-2px, -2px); }
        }
        
        /* Cursor Glow */
        .cursor-glow {
            position: fixed;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(41, 121, 255, 0.15) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            transform: translate(-50%, -50%);
            transition: all 0.1s ease;
            z-index: 9999;
            mix-blend-mode: screen;
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
            50% { opacity: 0; }
        }
        
        /* Parallax container */
        .parallax-container {
            transform-style: preserve-3d;
            perspective: 1000px;
        }
        
        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #2979FF, #00D4AA);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%232979FF'/><text x='50' y='65' font-size='50' text-anchor='middle' fill='white' font-family='monospace'>&lt;/&gt;</text></svg>">
</head>
<body class="bg-surface text-on-surface font-sans antialiased selection:bg-primary selection:text-white transition-colors duration-500">
    
    <!-- Cursor Glow -->
    <div class="cursor-glow hidden lg:block" id="cursorGlow"></div>
    
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
                <a href="#<?php echo $item['id']; ?>" class="text-xs font-bold tracking-[0.2em] uppercase group">
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
            <div class="absolute right-10 top-1/4 opacity-10 pointer-events-none hidden xl:block">
                <svg width="300" height="300" viewBox="0 0 100 100" class="animate-spin-slow">
                    <circle cx="50" cy="50" r="45" fill="none" stroke="currentColor" stroke-dasharray="2,2" stroke-width="0.5"/>
                    <circle cx="50" cy="50" r="35" fill="none" stroke="currentColor" stroke-width="0.2"/>
                    <line x1="50" y1="0" x2="50" y2="100" stroke="currentColor" stroke-width="0.2"/>
                    <line x1="0" y1="50" x2="100" y2="50" stroke="currentColor" stroke-width="0.2"/>
                </svg>
            </div>
            
            <div class="absolute left-20 bottom-20 opacity-10 pointer-events-none hidden xl:block">
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
                            <span class="inline-block animate-slide-up">CLARK</span>
                        </span>
                        <span class="block overflow-hidden">
                            <span class="inline-block animate-slide-up" style="animation-delay: 0.1s">STEVEN</span>
                        </span>
                        <span class="block overflow-hidden gradient-text">
                            <span class="inline-block animate-slide-up" style="animation-delay: 0.2s">EDONG.</span>
                        </span>
                    </h1>
                    
                    <!-- Subtitle -->
                    <p class="text-lg md:text-xl text-on-surface-variant max-w-xl leading-relaxed font-light asymmetric-border mb-8 md:mb-12">
                        <span class="text-primary font-medium">&lt;<?php echo $config['title']; ?>/&gt;</span><br>
                        A technical architect bridging the gap between clinical performance and editorial aesthetics. Building resilient digital ecosystems from <?php echo $config['location']; ?>, <?php echo $config['postal']; ?>.
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-4">
                        <a href="#archive" class="group bg-primary text-white px-8 py-4 text-xs font-bold tracking-[0.2em] uppercase hover:bg-primary-dark transition-all duration-500 flex items-center gap-3">
                            View Archive
                            <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                        <a href="#transmit" class="group border border-on-surface dark:border-gray-600 px-8 py-4 text-xs font-bold tracking-[0.2em] uppercase hover:bg-on-surface hover:text-white dark:hover:bg-white dark:hover:text-on-surface transition-all duration-500">
                            Initiate Link
                        </a>
                    </div>
                </div>
                
                <!-- Profile Image -->
                <div class="col-span-12 lg:col-span-5 relative flex items-center justify-center order-1 lg:order-2 mb-8 lg:mb-0">
                    <div class="relative w-full max-w-[350px] aspect-[4/5] group overflow-hidden">
                        <!-- Image Frame -->
                        <div class="absolute inset-0 border-2 border-primary/30 rounded-lg transform rotate-3 group-hover:rotate-6 transition-transform duration-700"></div>
                        
                        <!-- Image -->
                        <img 
                            src="<?php echo $config['profile_image']; ?>" 
                            alt="<?php echo $config['name']; ?>"
                            class="relative z-10 w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000 rounded-lg shadow-2xl"
                            onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&h=750&fit=crop'"
                        >
                        
                        <!-- Sunglasses Overlay (Dark Mode Only) -->
                        <div class="sunglasses-overlay absolute top-[35%] left-1/2 -translate-x-1/2 opacity-0 pointer-events-none z-20 transition-opacity duration-500">
                            <div class="w-[140px] h-[40px] bg-gradient-to-b from-[#1a1a1a] to-[#0a0a0a] rounded-full shadow-lg flex items-center justify-center gap-4">
                                <div class="w-[50px] h-[30px] bg-gradient-to-br from-[#2a2a2a] to-[#1a1a1a] rounded-full border-2 border-[#3a3a3a]"></div>
                                <div class="w-[8px] h-[3px] bg-[#3a3a3a] rounded-full"></div>
                                <div class="w-[50px] h-[30px] bg-gradient-to-br from-[#2a2a2a] to-[#1a1a1a] rounded-full border-2 border-[#3a3a3a]"></div>
                            </div>
                        </div>
                        
                        <!-- Hover Label -->
                        <div class="absolute bottom-6 left-6 text-white z-30 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <p class="text-xs tracking-widest uppercase font-bold bg-black/50 px-3 py-1 rounded">System Online</p>
                        </div>
                    </div>
                    
                    <!-- Decorative Elements -->
                    <div class="absolute -right-8 top-1/4 w-20 h-20 border border-primary/30 rounded-full animate-float hidden lg:block"></div>
                    <div class="absolute -left-4 bottom-1/4 w-12 h-12 bg-teal/20 rounded-full animate-float hidden lg:block" style="animation-delay: -2s;"></div>
                </div>
            </div>
        </section>

        <!-- Identity / Manifest Section -->
        <section class="py-24 md:py-32 bg-on-surface text-white" id="manifest">
            <div class="max-w-[1440px] mx-auto px-6 md:px-16">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-16">
                    <div class="space-y-4 group">
                        <span class="text-[10px] tracking-[0.5em] uppercase opacity-40 block">01 / Identity</span>
                        <h3 class="text-2xl md:text-3xl font-light"><?php echo $config['name']; ?></h3>
                        <div class="h-[1px] w-0 bg-primary group-hover:w-full transition-all duration-700"></div>
                    </div>
                    <div class="space-y-4 group">
                        <span class="text-[10px] tracking-[0.5em] uppercase opacity-40 block">02 / Age Units</span>
                        <h3 class="text-2xl md:text-3xl font-light"><?php echo $config['age']; ?> Years</h3>
                        <div class="h-[1px] w-0 bg-teal group-hover:w-full transition-all duration-700"></div>
                    </div>
                    <div class="space-y-4 group">
                        <span class="text-[10px] tracking-[0.5em] uppercase opacity-40 block">03 / Coordinates</span>
                        <h3 class="text-2xl md:text-3xl font-light leading-snug"><?php echo $config['location']; ?>,<br><?php echo $config['postal']; ?></h3>
                        <div class="h-[1px] w-0 bg-orange group-hover:w-full transition-all duration-700"></div>
                    </div>
                </div>
                
                <!-- Additional Stats -->
                <div class="mt-20 pt-12 border-t border-white/10 grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <span class="text-4xl md:text-5xl font-bold text-primary">50+</span>
                        <p class="text-xs tracking-[0.3em] uppercase mt-2 opacity-60">Deployments</p>
                    </div>
                    <div class="text-center">
                        <span class="text-4xl md:text-5xl font-bold text-teal">6+</span>
                        <p class="text-xs tracking-[0.3em] uppercase mt-2 opacity-60">Years Active</p>
                    </div>
                    <div class="text-center">
                        <span class="text-4xl md:text-5xl font-bold text-orange">30+</span>
                        <p class="text-xs tracking-[0.3em] uppercase mt-2 opacity-60">Clients Served</p>
                    </div>
                    <div class="text-center">
                        <span class="text-4xl md:text-5xl font-bold text-purple">100%</span>
                        <p class="text-xs tracking-[0.3em] uppercase mt-2 opacity-60">Availability</p>
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
                        The<br>Archive
                    </h2>
                    <p class="max-w-xs text-on-surface-variant text-sm font-medium leading-relaxed">
                        Selected works from the laboratory. Rigorous examination of patterns and technical architecture.
                    </p>
                </div>
                
                <!-- Projects Grid -->
                <div class="space-y-20 md:space-y-32">
                    <?php foreach ($projects as $index => $project): ?>
                    <div class="group grid grid-cols-12 gap-6 md:gap-8 items-center">
                        <!-- Image -->
                        <div class="col-span-12 <?php echo $index % 2 === 0 ? 'lg:col-span-7' : 'lg:col-span-7 lg:order-2'; ?> overflow-hidden bg-surface-dim aspect-video relative rounded-lg">
                            <img 
                                src="<?php echo $project['image']; ?>" 
                                alt="<?php echo $project['title']; ?>"
                                class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <!-- Hover Overlay -->
                            <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                                <span class="text-white text-xs font-bold tracking-widest uppercase">View Case Study</span>
                                <span class="material-symbols-outlined text-white">arrow_outward</span>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="col-span-12 <?php echo $index % 2 === 0 ? 'lg:col-span-5 lg:pl-8' : 'lg:col-span-5 lg:order-1 lg:pr-8'; ?>">
                            <span class="text-xs font-bold tracking-[0.3em] uppercase text-<?php echo $project['accent']; ?> mb-4 block"><?php echo $project['subtitle']; ?></span>
                            <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 md:mb-6 tracking-tighter"><?php echo $project['title']; ?></h3>
                            <p class="text-on-surface-variant mb-6 md:mb-8 leading-relaxed text-sm md:text-base">
                                <?php echo $project['desc']; ?>
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <a href="#" class="flex items-center gap-2 text-xs font-bold tracking-widest uppercase border border-on-surface dark:border-gray-600 px-6 py-3 hover:bg-on-surface hover:text-white dark:hover:bg-white dark:hover:text-on-surface transition-all duration-300 group/link">
                                    Live Demo
                                    <span class="material-symbols-outlined text-sm transition-transform group-hover/link:translate-x-1">open_in_new</span>
                                </a>
                                <a href="#" class="flex items-center gap-2 text-xs font-bold tracking-widest uppercase px-6 py-3 bg-surface-dim hover:bg-gray-200 dark:hover:bg-[#1a1c22] transition-all duration-300">
                                    <span class="material-symbols-outlined text-sm">code</span>
                                    Source
                                </a>
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
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tighter uppercase mb-6 md:mb-12">
                        Initiate<br>Inquiry
                    </h2>
                    <p class="text-lg md:text-xl font-light text-on-surface-variant mb-8 md:mb-16 leading-relaxed">
                        Available for senior partnerships and strategic consulting. Ready to define the next iteration.
                    </p>
                    
                    <!-- Social Links -->
                    <div class="space-y-4 md:space-y-6">
                        <?php foreach ($socialLinks as $link): ?>
                        <a href="<?php echo $link['url']; ?>" class="group flex items-center justify-between border-b border-gray-200 dark:border-[#27273a] pb-3 md:pb-4">
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
        
        // Check saved theme
        const savedTheme = localStorage.getItem('theme') || 'dark';
        if (savedTheme === 'dark') {
            html.classList.add('dark');
            themeIcon.textContent = 'light_mode';
        } else {
            themeIcon.textContent = 'dark_mode';
        }
        
        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            const isDark = html.classList.contains('dark');
            themeIcon.textContent = isDark ? 'light_mode' : 'dark_mode';
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            
            // Trigger sunglasses animation
            if (isDark) {
                setTimeout(() => {
                    document.querySelector('.sunglasses-overlay')?.classList.add('dark-active');
                }, 100);
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
        
        // Cursor Glow (Desktop only)
        const cursorGlow = document.getElementById('cursorGlow');
        if (cursorGlow && window.matchMedia('(pointer: fine)').matches) {
            document.addEventListener('mousemove', (e) => {
                cursorGlow.style.left = e.clientX + 'px';
                cursorGlow.style.top = e.clientY + 'px';
            });
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
    </script>
</body>
</html>
