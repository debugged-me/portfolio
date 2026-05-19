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
        const section = document.getElementById('github-contributions');
        const graphContainer = document.querySelector('.contribution-graph');
        const yearButtons = document.querySelectorAll('.year-btn');
        const contributionsCount = document.querySelector('.contributions-count');
        const githubUsername = section ? section.dataset.githubUsername : '';
        const githubEndpoint = section ? section.dataset.githubEndpoint : '';
        const contributionCache = new Map();
        let activeRequestId = 0;

        if (!section || !graphContainer || !contributionsCount || !githubUsername || !githubEndpoint) return;

        function setButtonsDisabled(disabled) {
            yearButtons.forEach(function(button) {
                button.disabled = disabled;
            });
        }

        async function loadContributionData(year) {
            if (contributionCache.has(year)) {
                return contributionCache.get(year);
            }

            const params = new URLSearchParams({
                username: githubUsername,
                year: String(year)
            });
            const response = await fetch(`${githubEndpoint}?${params.toString()}`, {
                headers: {
                    'Accept': 'application/json'
                }
            });

            if (!response.ok) {
                throw new Error(`Failed to load contribution data for ${year}`);
            }

            const payload = await response.json();
            contributionCache.set(year, payload);
            return payload;
        }

        function renderGraph(payload) {
            const year = payload.year;
            const data = Array.isArray(payload.days) ? payload.days : [];
            const totalContributions = Number(payload.totalContributions) || 0;
            const startDay = new Date(year, 0, 1).getDay();
            const totalCells = startDay + data.length;
            const weeks = Math.max(1, Math.ceil(totalCells / 7));

            contributionsCount.textContent = `${totalContributions.toLocaleString()} contributions in ${year}`;
            graphContainer.innerHTML = '';
            graphContainer.style.gridTemplateColumns = `repeat(${weeks}, minmax(0, 1fr))`;

            for (let i = 0; i < startDay; i += 1) {
                const emptyCell = document.createElement('div');
                emptyCell.className = 'contribution-day box-0';
                graphContainer.appendChild(emptyCell);
            }

            data.forEach(function(day) {
                const cell = document.createElement('div');
                cell.className = `contribution-day box-${day.level}`;

                const tooltip = document.createElement('div');
                tooltip.className = 'contribution-tooltip';
                const date = new Date(`${day.date}T00:00:00`);
                const dateStr = date.toLocaleDateString('en-US', {
                    month: 'short',
                    day: 'numeric',
                    year: 'numeric'
                });

                tooltip.innerHTML = day.contributions > 0
                    ? `<strong>${day.contributions} contribution${day.contributions > 1 ? 's' : ''}</strong><br>${dateStr}`
                    : `No contributions<br>${dateStr}`;

                cell.appendChild(tooltip);
                graphContainer.appendChild(cell);
            });
        }

        async function showYear(year) {
            const requestId = ++activeRequestId;
            setButtonsDisabled(true);
            contributionsCount.textContent = `Loading ${year} contributions...`;

            try {
                const payload = await loadContributionData(year);
                if (requestId !== activeRequestId) {
                    return;
                }

                renderGraph(payload);
            } catch (error) {
                if (requestId !== activeRequestId) {
                    return;
                }

                graphContainer.innerHTML = '';
                contributionsCount.textContent = `Unable to load GitHub contributions for ${year}`;
            } finally {
                if (requestId === activeRequestId) {
                    setButtonsDisabled(false);
                }
            }
        }

        yearButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                yearButtons.forEach(function(btn) {
                    btn.classList.remove('active');
                });
                button.classList.add('active');
                showYear(parseInt(button.dataset.year, 10));
            });
        });

        const activeButton = document.querySelector('.year-btn.active') || yearButtons[0];
        if (activeButton) {
            showYear(parseInt(activeButton.dataset.year, 10));
        }
    }

    // Initialize contribution graph
    initContributionGraph();

    // Initialize particles
    initParticles();

    // ============================================
    // CONTACT FORM WITH GOOGLE RECAPTCHA
    // ============================================
    function initContactForm() {
        const contactSection = document.getElementById('contact');
        const contactForm = document.getElementById('contactForm');
        if (!contactSection || !contactForm) return;

        const recaptchaSiteKey = contactSection.dataset.recaptchaSiteKey || '';
        const recaptchaAction = contactSection.dataset.recaptchaAction || 'contact_form';
        const recaptchaField = contactForm.querySelector('#g-recaptcha-response');

        function resetSubmitButton(submitBtn, originalText, failed) {
            submitBtn.querySelector('.btn-text').textContent = failed ? 'Failed to Send' : originalText;
            submitBtn.style.background = failed ? '#ef4444' : '';

            if (failed) {
                window.setTimeout(function() {
                    submitBtn.querySelector('.btn-text').textContent = originalText;
                    submitBtn.style.background = '';
                    submitBtn.disabled = false;
                }, 3000);
                return;
            }

            submitBtn.disabled = false;
        }

        // Handle form submission
        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();

            const submitBtn = contactForm.querySelector('.contact-submit');
            const originalText = submitBtn.querySelector('.btn-text').textContent;
            if (!recaptchaSiteKey || typeof grecaptcha === 'undefined') {
                alert('reCAPTCHA is not ready yet. Please try again in a moment.');
                return;
            }

            submitBtn.disabled = true;
            submitBtn.querySelector('.btn-text').textContent = 'Sending...';
            submitBtn.style.background = '';

            try {
                await new Promise(function(resolve) {
                    grecaptcha.ready(resolve);
                });
                const token = await grecaptcha.execute(recaptchaSiteKey, {
                    action: recaptchaAction
                });

                if (!token) {
                    throw new Error('Missing reCAPTCHA token');
                }

                if (recaptchaField) {
                    recaptchaField.value = token;
                }

                const formData = new FormData(contactForm);
                const response = await fetch('contact.php', {
                    method: 'POST',
                    body: formData
                });
                const data = await response.json();

                if (data.success) {
                    submitBtn.querySelector('.btn-text').textContent = 'Message Sent!';
                    submitBtn.style.background = '#1cff68';
                    contactForm.reset();
                    if (recaptchaField) {
                        recaptchaField.value = '';
                    }

                    window.setTimeout(function() {
                        submitBtn.querySelector('.btn-text').textContent = originalText;
                        submitBtn.style.background = '';
                        submitBtn.disabled = false;
                    }, 3000);
                } else {
                    throw new Error(data.message || 'Failed to send message');
                }
            } catch (error) {
                if (recaptchaField) {
                    recaptchaField.value = '';
                }
                resetSubmitButton(submitBtn, originalText, true);
                console.error('Contact form error:', error);
            }
        });
    }

    // Initialize contact form
    initContactForm();

    window.setTimeout(hideIntro, 1450);
}());
