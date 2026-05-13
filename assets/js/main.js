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

    // ============================================
    // PARTICLE ANIMATION SYSTEM
    // ============================================
    function initParticles() {
        const canvas = document.getElementById('particleCanvas');
        if (!canvas) return;

        const ctx = canvas.getContext('2d');
        let particles = [];
        let animationId;

        // Set canvas size
        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }

        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        // Particle class
        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2 + 0.5;
                this.speedX = (Math.random() - 0.5) * 0.5;
                this.speedY = (Math.random() - 0.5) * 0.5;
                this.opacity = Math.random() * 0.5 + 0.2;
            }

            update() {
                this.x += this.speedX;
                this.y += this.speedY;

                // Bounce off edges
                if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
                if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;
            }

            draw() {
                ctx.fillStyle = `rgba(104, 207, 255, ${this.opacity})`;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        // Create particles
        function createParticles() {
            particles = [];
            const particleCount = Math.min(50, Math.floor((canvas.width * canvas.height) / 15000));
            for (let i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }
        }

        // Draw connections between nearby particles
        function drawConnections() {
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < 120) {
                        const opacity = (1 - distance / 120) * 0.2;
                        ctx.strokeStyle = `rgba(104, 207, 255, ${opacity})`;
                        ctx.lineWidth = 0.5;
                        ctx.beginPath();
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();
                    }
                }
            }
        }

        // Animation loop
        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            particles.forEach(particle => {
                particle.update();
                particle.draw();
            });

            drawConnections();
            animationId = requestAnimationFrame(animate);
        }

        // Initialize and start animation
        createParticles();
        animate();

        // Cleanup on page unload
        window.addEventListener('beforeunload', () => {
            if (animationId) {
                cancelAnimationFrame(animationId);
            }
        });
    }

    // ============================================
    // GITHUB CONTRIBUTION GRAPH
    // ============================================
    function initContributionGraph() {
        const graphContainer = document.querySelector('.contribution-graph');
        const yearButtons = document.querySelectorAll('.year-btn');
        const contributionsCount = document.querySelector('.contributions-count');

        if (!graphContainer) return;

        // Generate realistic contribution data
        function generateContributionData(year) {
            const data = [];
            const startDate = new Date(year, 0, 1);
            const endDate = new Date(year, 11, 31);
            const currentDate = new Date();

            for (let d = new Date(startDate); d <= endDate && d <= currentDate; d.setDate(d.getDate() + 1)) {
                const dayOfWeek = d.getDay();
                const isWeekend = dayOfWeek === 0 || dayOfWeek === 6;
                const isFuture = d > currentDate;

                let contributionLevel = 0;
                if (!isWeekend && !isFuture) {
                    // Generate realistic contribution pattern
                    const random = Math.random();
                    if (random > 0.85) contributionLevel = 4;
                    else if (random > 0.7) contributionLevel = 3;
                    else if (random > 0.5) contributionLevel = 2;
                    else if (random > 0.3) contributionLevel = 1;
                }

                data.push({
                    date: new Date(d),
                    level: contributionLevel,
                    contributions: contributionLevel > 0 ? Math.floor(Math.random() * 10) + 1 : 0
                });
            }

            return data;
        }

        // Render contribution graph
        function renderGraph(year) {
            const data = generateContributionData(year);
            const totalContributions = data.reduce((sum, day) => sum + day.contributions, 0);

            // Update contribution count
            if (contributionsCount) {
                contributionsCount.textContent = `${totalContributions.toLocaleString()} contributions in ${year}`;
            }

            // Clear and render graph
            graphContainer.innerHTML = '';

            // Add weekday labels
            const weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            const startDay = new Date(year, 0, 1).getDay();

            // Create empty cells for days before year starts
            for (let i = 0; i < startDay; i++) {
                const emptyCell = document.createElement('div');
                emptyCell.className = 'contribution-day box-0';
                graphContainer.appendChild(emptyCell);
            }

            // Create contribution cells
            data.forEach(day => {
                const cell = document.createElement('div');
                cell.className = `contribution-day box-${day.level}`;

                // Add tooltip
                const tooltip = document.createElement('div');
                tooltip.className = 'contribution-tooltip';

                if (day.contributions > 0) {
                    const dateStr = day.date.toLocaleDateString('en-US', {
                        month: 'short',
                        day: 'numeric',
                        year: 'numeric'
                    });
                    tooltip.innerHTML = `
                        <strong>${day.contributions} contribution${day.contributions > 1 ? 's' : ''}</strong><br>
                        ${dateStr}
                    `;
                } else {
                    const dateStr = day.date.toLocaleDateString('en-US', {
                        month: 'short',
                        day: 'numeric',
                        year: 'numeric'
                    });
                    tooltip.innerHTML = `No contributions<br>${dateStr}`;
                }

                cell.appendChild(tooltip);
                graphContainer.appendChild(cell);
            });
        }

        // Year button click handlers
        yearButtons.forEach(button => {
            button.addEventListener('click', () => {
                yearButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                renderGraph(parseInt(button.dataset.year));
            });
        });

        // Initialize with current year
        const currentYear = new Date().getFullYear();
        const activeButton = document.querySelector(`[data-year="${currentYear}"]`);
        if (activeButton) {
            activeButton.classList.add('active');
        }

        renderGraph(currentYear);
    }

    // Initialize contribution graph
    initContributionGraph();

    // Initialize particles
    initParticles();

    window.setTimeout(hideIntro, 1450);
}());
