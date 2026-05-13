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
    'turnstile_secret_key' => getenv('TURNSTILE_SECRET_KEY') ?: '',
];

$socials = [
    [
        'label' => 'github',
        'url' => 'https://github.com/debugged-me',
    ],
    [
        'label' => 'linkedin',
        'url' => 'https://linkedin.com',
    ],
    [
        'label' => 'facebook',
        'url' => 'https://facebook.com/debugged.me',
    ],
];

$projects = [
    [
        'title' => 'DOIT College Portal',
        'desc' => 'Academic portal for DOIT College handling enrollment, student records, registrar workflows, and online services.',
        'url' => 'https://portal.doitcollege.com/',
        'tags' => ['PHP', 'CodeIgniter 3', 'MySQL', 'Bootstrap', 'jQuery', 'AJAX', 'DataTables'],
    ],
    [
        'title' => 'WCManila SRMS',
        'desc' => 'Student Records Management System focused on grading, enrollment processing, transcript generation, and reporting.',
        'url' => 'https://wcmanila-srms.com/',
        'tags' => ['PHP', 'CodeIgniter 3', 'MariaDB', 'Bootstrap', 'jQuery', 'AJAX', 'Select2'],
    ],
    [
        'title' => 'IHMA Mati',
        'desc' => 'Academic records platform for IHMA Mati supporting records, grading, and institution-wide administrative workflows.',
        'url' => 'https://srms.ihmamati.edu.ph/',
        'tags' => ['PHP', 'CodeIgniter 3', 'MySQL', 'Bootstrap', 'jQuery', 'DataTables', 'Select2'],
    ],
    [
        'title' => 'DepEd QAME',
        'desc' => 'Quality Assurance Monitoring and Evaluation platform for education teams, with dashboards, assessment flows, and review tools.',
        'url' => 'https://deped-qame.com/',
        'tags' => ['PHP', 'CodeIgniter 3', 'MariaDB', 'Bootstrap', 'jQuery', 'AJAX', 'DataTables'],
    ],
    [
        'title' => 'DepEd Davao Sports',
        'desc' => 'Sports event management platform covering athlete registration, schedules, scoring, and event coordination.',
        'url' => 'https://sports.depeddavor.com/',
        'tags' => ['PHP', 'MySQL', 'Bootstrap', 'jQuery', 'AJAX', 'DataTables'],
    ],
    [
        'title' => 'TrabaWho Mati',
        'desc' => 'Job-matching platform connecting job seekers and employers through searchable listings and civic employment workflows.',
        'url' => 'https://trabawho.mati.gov.ph/',
        'tags' => ['PHP', 'CodeIgniter 3', 'MySQL', 'Bootstrap', 'jQuery', 'Select2', 'AJAX'],
    ],
    [
        'title' => 'Plagiarism AI Checker',
        'desc' => 'AI-powered plagiarism detection tool for academic institutions and educational platforms.',
        'url' => 'https://plagiarism-ai-checker.com',
        'tags' => ['PHP', 'CodeIgniter 3', 'MySQL', 'Bootstrap', 'jQuery', 'AJAX', 'DataTables'],
    ],
    [
        'title' => 'SRMS Mobile App',
        'desc' => 'Flutter-based mobile application for student records management with cross-platform compatibility and modern UI.',
        'url' => 'https://play.google.com/store/apps/details?id=com.srms.srms_flutter_project',
        'tags' => ['Flutter', 'Dart', 'Mobile', 'Android', 'iOS'],
    ],
    [
        'title' => 'SECNCI',
        'desc' => 'Official website for SECNCI School Records Management System.',
        'url' => 'https://secnci.com',
        'tags' => ['PHP', 'HTML5', 'CSS3', 'JavaScript', 'Bootstrap'],
    ],
    [
        'title' => 'KCast Online',
        'desc' => 'Official website for SECNCI School Records Management System',
        'url' => 'https://kcast.online',
        'tags' => ['PHP', 'MySQL', 'Bootstrap', 'jQuery', 'AJAX', 'JavaScript'],
    ],
];

$experience = [
    [
        'company' => 'SoftTech Services',
        'position' => 'Full-Stack Developer',
        'period' => '2023 - Present',
    ],
    [
        'company' => 'Various Clients',
        'position' => 'Backend Developer',
        'period' => '2023 - Present',
    ],
];

$stackGroups = [
    [
        'label' => 'Backend',
        'items' => [
            ['name' => 'PHP', 'icon' => 'devicon-php-plain', 'tone' => '#777bb4', 'text' => '#ffffff'],
            ['name' => 'CodeIgniter 3', 'icon' => 'devicon-codeigniter-plain', 'tone' => '#ee4323', 'text' => '#ffffff'],
            ['name' => 'Laravel', 'icon' => 'devicon-laravel-original', 'tone' => '#ff2d20', 'text' => '#ffffff'],
            ['name' => 'REST APIs', 'icon' => 'devicon-api-plain', 'tone' => '#1cff68', 'text' => '#111111'],
        ],
    ],
    [
        'label' => 'Database',
        'items' => [
            ['name' => 'MySQL', 'icon' => 'devicon-mysql-plain', 'tone' => '#00758f', 'text' => '#ffffff'],
            ['name' => 'MariaDB', 'icon' => 'devicon-mariadb-plain', 'tone' => '#003545', 'text' => '#ffffff'],
            ['name' => 'PostgreSQL', 'icon' => 'devicon-postgresql-plain', 'tone' => '#336791', 'text' => '#ffffff'],
        ],
    ],
    [
        'label' => 'Frontend',
        'items' => [
            ['name' => 'Bootstrap', 'icon' => 'devicon-bootstrap-plain', 'tone' => '#7952b3', 'text' => '#ffffff'],
            ['name' => 'jQuery', 'icon' => 'devicon-jquery-plain', 'tone' => '#0769ad', 'text' => '#ffffff'],
            ['name' => 'AJAX', 'icon' => 'devicon-ajax-plain', 'tone' => '#5a5a5a', 'text' => '#ffffff'],
            ['name' => 'JavaScript', 'icon' => 'devicon-javascript-plain', 'tone' => '#f7df1e', 'text' => '#111111'],
            ['name' => 'HTML5', 'icon' => 'devicon-html5-plain', 'tone' => '#e34c26', 'text' => '#ffffff'],
            ['name' => 'CSS3', 'icon' => 'devicon-css3-plain', 'tone' => '#1572b6', 'text' => '#ffffff'],
        ],
    ],
    [
        'label' => 'Libraries',
        'items' => [
            ['name' => 'DataTables', 'icon' => 'devicon-datatables-plain', 'tone' => '#3399ff', 'text' => '#ffffff'],
            ['name' => 'Select2', 'icon' => 'devicon-select2-plain', 'tone' => '#5897fb', 'text' => '#ffffff'],
            ['name' => 'Chart.js', 'icon' => 'devicon-chartjs-plain', 'tone' => '#ff6384', 'text' => '#ffffff'],
        ],
    ],
    [
        'label' => 'Tools',
        'items' => [
            ['name' => 'Git', 'icon' => 'devicon-git-plain', 'tone' => '#f1502f', 'text' => '#ffffff'],
            ['name' => 'VS Code', 'icon' => 'devicon-vscode-plain', 'tone' => '#007acc', 'text' => '#ffffff'],
            ['name' => 'Linux', 'icon' => 'devicon-linux-plain', 'tone' => '#facc15', 'text' => '#111111'],
            ['name' => 'Apache', 'icon' => 'devicon-apache-plain', 'tone' => '#d22128', 'text' => '#ffffff'],
            ['name' => 'XAMPP', 'icon' => 'devicon-xampp-plain', 'tone' => '#fb7a24', 'text' => '#ffffff'],
        ],
    ],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($config['short_name'], ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="Portfolio of <?php echo htmlspecialchars($config['name'], ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto+Flex:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
        <canvas id="particleCanvas" class="particle-canvas"></canvas>
        <div class="ambient-orb ambient-orb--one"></div>
        <div class="ambient-orb ambient-orb--two"></div>
        <div class="ambient-orb ambient-orb--three"></div>

        <header class="site-header">
            <a class="brand" href="#home"><?php echo htmlspecialchars($config['short_name'], ENT_QUOTES, 'UTF-8'); ?></a>
            <button class="menu-toggle" id="menuToggle" aria-expanded="false" aria-controls="siteDrawer" aria-label="Toggle navigation">
                <span></span>
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
                            Hi! I'm <strong><?php echo htmlspecialchars($config['first_name'], ENT_QUOTES, 'UTF-8'); ?></strong>, a creative <?php echo htmlspecialchars($config['subtitle'], ENT_QUOTES, 'UTF-8'); ?> with <?php echo htmlspecialchars($config['years_experience'], ENT_QUOTES, 'UTF-8'); ?> of experience building scalable systems, responsive interfaces, and production-ready web and mobile solutions.
                        </p>

                        <div class="eyebrow-status reveal">
                            <span class="status-dot"></span>
                            <span><?php echo htmlspecialchars($config['status'], ENT_QUOTES, 'UTF-8'); ?></span>
                        </div>

                        <a class="hero-cta reveal" href="#contact"><span>Let's Talk</span></a>
                    </div>

                    <div class="hero-stats">
                        <div class="reveal">
                            <div class="hero-stat-number"><?php echo htmlspecialchars($config['years_experience'], ENT_QUOTES, 'UTF-8'); ?></div>
                            <p class="hero-stat-label">Years of Experience</p>
                        </div>
                        <div class="reveal">
                            <div class="hero-stat-number"><?php echo count($projects); ?></div>
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
                    <h2 class="reveal">I believe in a user-centered development approach, ensuring that every project I build is tailored to the practical needs of its users and stakeholders.</h2>

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
                                                <i class="<?php echo htmlspecialchars($item['icon'], ENT_QUOTES, 'UTF-8'); ?>"></i>
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

            <section class="section" id="github-contributions">
                <div class="container">
                    <h2 class="section-heading reveal" style="margin-bottom: 2rem;">GitHub Contributions</h2>
                    <p class="github-description reveal" style="margin-bottom: 1.5rem; color: var(--muted); font-size: 0.95rem;">
                        <em>Data pulled from live GitHub account</em>
                    </p>
                    <div class="contribution-graph-container reveal">
                        <div class="contribution-header">
                            <span class="contributions-count">1,267 contributions in 2026</span>
                            <div class="year-selector">
                                <button class="year-btn active" data-year="2026">2026</button>
                                <button class="year-btn" data-year="2025">2025</button>
                                <button class="year-btn" data-year="2024">2024</button>
                                <button class="year-btn" data-year="2023">2023</button>
                            </div>
                        </div>
                        <div class="contribution-graph"></div>
                        <div class="contributions-legend">
                            <span>Less</span>
                            <div class="legend-colors">
                                <span class="legend-color-box box-0"></span>
                                <span class="legend-color-box box-1"></span>
                                <span class="legend-color-box box-2"></span>
                                <span class="legend-color-box box-3"></span>
                                <span class="legend-color-box box-4"></span>
                            </div>
                            <span>More</span>
                        </div>
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
                    <h2 class="section-heading reveal" style="margin-bottom: 2rem;">Deployed Projects</h2>

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

    <script src="assets/js/main.js"></script>
</body>

</html>