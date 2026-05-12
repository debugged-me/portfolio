/**
 * <CLARkODER> - Portfolio JavaScript
 * EDONG, CLARK STEVEN T. | Mati City, Philippines
 */

(function() {
    'use strict';

    const themeToggle = document.getElementById('themeToggle');
    const nav = document.getElementById('nav');
    const navMobileToggle = document.getElementById('navMobileToggle');
    const navLinks = document.querySelector('.nav-links');
    const contactForm = document.getElementById('contactForm');

    // Hacker Typewriter Data
    const hackerCommands = [
        'whoami',
        'cat /etc/passwd | grep developer',
        'ssh root@clarkoder.dev',
        'git init --bare',
        'npm run deploy:production',
        'docker-compose up -d',
        './build.sh --optimize'
    ];

    const aboutJson = `{
  "name": "EDONG, CLARK STEVEN T.",
  "age": 27,
  "location": "Dahican, Mati City, Philippines",
  "postal": "8200",
  "role": "Digital Architect",
  "status": "available",
  "skills": ["Full Stack", "UI/UX", "DevOps"],
  "experience": "6+ years"
}`;

    // ============================================
    // HACKER TYPEWRITER EFFECT
    // ============================================
    function initHackerEffect() {
        const hackerCommand = document.getElementById('hackerCommand');
        const typewriterText = document.getElementById('typewriterText');
        
        if (!hackerCommand || !typewriterText) return;

        let commandIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let isTypingCode = false;

        // Hacker command typer
        function typeHackerCommand() {
            const currentCommand = hackerCommands[commandIndex];
            
            if (isDeleting) {
                hackerCommand.textContent = currentCommand.substring(0, charIndex - 1);
                charIndex--;
            } else {
                hackerCommand.textContent = currentCommand.substring(0, charIndex + 1);
                charIndex++;
            }

            let typeSpeed = isDeleting ? 50 : 100;

            if (!isDeleting && charIndex === currentCommand.length) {
                typeSpeed = 2000; // Pause at end
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                commandIndex = (commandIndex + 1) % hackerCommands.length;
                typeSpeed = 500;
            }

            setTimeout(typeHackerCommand, typeSpeed);
        }

        // Code block typer with syntax highlighting
        function typeCodeBlock() {
            const lines = aboutJson.split('\n');
            let currentLine = 0;
            let currentChar = 0;
            
            function typeLine() {
                if (currentLine >= lines.length) {
                    // Finished typing, restart after delay
                    setTimeout(() => {
                        typewriterText.innerHTML = '';
                        currentLine = 0;
                        currentChar = 0;
                        typeLine();
                    }, 5000);
                    return;
                }

                const line = lines[currentLine];
                const highlightedLine = highlightSyntax(line);
                
                if (currentChar === 0) {
                    // Start new line
                    const lineDiv = document.createElement('span');
                    lineDiv.className = 'code-line';
                    lineDiv.dataset.line = currentLine;
                    typewriterText.appendChild(lineDiv);
                }

                const lineDiv = typewriterText.querySelector(`[data-line="${currentLine}"]`);
                lineDiv.innerHTML = highlightedLine.substring(0, currentChar + 1);
                
                currentChar++;

                if (currentChar >= highlightedLine.length) {
                    currentLine++;
                    currentChar = 0;
                    setTimeout(typeLine, 100);
                } else {
                    setTimeout(typeLine, 30 + Math.random() * 50); // Random typing speed
                }
            }

            typeLine();
        }

        // Syntax highlighting helper
        function highlightSyntax(line) {
            return line
                .replace(/"([^"]+)":/g, '<span class="code-key">"$1"</span>:')
                .replace(/: "([^"]+)"/g, ': <span class="code-string">"$1"</span>')
                .replace(/: (\d+)/g, ': <span class="code-number">$1</span>')
                .replace(/([{}\[\]])/g, '<span class="code-bracket">$1</span>');
        }

        // Start both animations
        typeHackerCommand();
        typeCodeBlock();
    }

    // ============================================
    // THEME MANAGEMENT
    // ============================================
    function initTheme() {
        const savedTheme = localStorage.getItem('theme') || 'dark';
        document.documentElement.setAttribute('data-theme', savedTheme);
        updateThemeIcon(savedTheme);
    }

    function toggleTheme() {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        
        document.documentElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        updateThemeIcon(newTheme);
    }

    function updateThemeIcon(theme) {
        const icon = themeToggle.querySelector('.theme-icon');
        icon.textContent = theme === 'dark' ? '◐' : '◑';
    }

    // ============================================
    // ENHANCED PROJECT FILTERING
    // ============================================
    function initProjectFilter() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card-wrapper');
        const archiveStatus = document.getElementById('archiveStatus');

        if (!filterButtons.length || !projectCards.length) return;

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.dataset.filter;
                
                // Update active button with smooth transition
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                // Filter projects with staggered animation
                let visibleCount = 0;
                projectCards.forEach((card, index) => {
                    const category = card.dataset.category;
                    const shouldShow = filter === 'all' || category === filter;
                    
                    // Add staggered animation
                    setTimeout(() => {
                        if (shouldShow) {
                            card.classList.remove('is-hidden');
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(20px)';
                            
                            setTimeout(() => {
                                card.style.transition = 'all 0.4s cubic-bezier(0.65, 0, 0.35, 1)';
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 50);
                            visibleCount++;
                        } else {
                            card.style.transition = 'all 0.3s ease';
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(-20px)';
                            
                            setTimeout(() => {
                                card.classList.add('is-hidden');
                            }, 300);
                        }
                    }, index * 50);
                });

                // Update status with animation
                if (archiveStatus) {
                    archiveStatus.style.opacity = '0';
                    setTimeout(() => {
                        const totalText = filter === 'all' ? 
                            `Showing all ${visibleCount} deployments.` :
                            `Showing ${visibleCount} ${filter} deployments.`;
                        archiveStatus.textContent = totalText;
                        archiveStatus.style.opacity = '1';
                    }, 200);
                }
            });
        });
    }

    // ============================================
    // ENHANCED INTERACTIONS
    // ============================================
    function initEnhancedInteractions() {
        // Add ripple effect to buttons
        document.querySelectorAll('button, .project-card').forEach(element => {
            element.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                ripple.classList.add('ripple');
                this.appendChild(ripple);

                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;

                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';

                setTimeout(() => ripple.remove(), 600);
            });
        });

        // Enhanced parallax effect on scroll
        let ticking = false;
        function updateParallax() {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.parallax');
            
            parallaxElements.forEach(element => {
                const speed = element.dataset.speed || 0.5;
                const yPos = -(scrolled * speed);
                element.style.transform = `translateY(${yPos}px)`;
            });

            ticking = false;
        }

        function requestTick() {
            if (!ticking) {
                window.requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }

        window.addEventListener('scroll', requestTick);

        // Add magnetic effect to project cards
        document.querySelectorAll('.project-card').forEach(card => {
            card.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const deltaX = (x - centerX) / centerX;
                const deltaY = (y - centerY) / centerY;
                
                const rotateX = deltaY * 2;
                const rotateY = deltaX * 2;
                
                this.style.transform = `perspective(1000px) rotateX(${-rotateX}deg) rotateY(${rotateY}deg) translateZ(10px)`;
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateZ(0)';
            });
        });
    }

    // ============================================
    // SCROLL ANIMATIONS
    // ============================================
    function initScrollAnimations() {
        const observerOptions = {
            root: null,
            rootMargin: '-50px 0px -50px 0px',
            threshold: [0, 0.25, 0.5, 0.75, 1]
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const el = entry.target;
                const ratio = entry.intersectionRatio;
                
                if (ratio > 0.25) {
                    if (!el.classList.contains('animated')) {
                        const delay = parseFloat(el.dataset.delay) || 0;
                        setTimeout(() => {
                            el.classList.add('animated');
                        }, delay * 1000);
                    }
                    
                    if (el.classList.contains('skill-progress')) {
                        el.classList.add('animate');
                    }
                    
                    if (el.classList.contains('protocol-node')) {
                        el.classList.add('visible');
                        updateTimelineProgress();
                    }
                }
                else if (ratio < 0.1) {
                    if (el.hasAttribute('data-animate') && el.classList.contains('animated')) {
                        el.classList.remove('animated');
                    }
                }
            });
        }, observerOptions);

        document.querySelectorAll('[data-animate]').forEach(el => observer.observe(el));
        document.querySelectorAll('.skill-progress').forEach(el => observer.observe(el));
        document.querySelectorAll('.protocol-node').forEach(el => observer.observe(el));
    }

    // ============================================
    // NAVIGATION
    // ============================================
    function handleNavScroll() {
        const scrollY = window.scrollY;
        
        if (scrollY > 50) {
            nav.style.background = document.documentElement.getAttribute('data-theme') === 'dark' 
                ? 'rgba(10, 11, 13, 0.95)' 
                : 'rgba(248, 249, 250, 0.95)';
            nav.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.1)';
        } else {
            nav.style.background = document.documentElement.getAttribute('data-theme') === 'dark'
                ? 'rgba(10, 11, 13, 0.9)'
                : 'rgba(248, 249, 250, 0.9)';
            nav.style.boxShadow = 'none';
        }
    }

    function toggleMobileNav() {
        navLinks.classList.toggle('active');
        const spans = navMobileToggle.querySelectorAll('span');
        
        if (navLinks.classList.contains('active')) {
            spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
            spans[1].style.transform = 'rotate(-45deg)';
        } else {
            spans[0].style.transform = 'none';
            spans[1].style.transform = 'none';
        }
    }

    function closeMobileNav() {
        navLinks.classList.remove('active');
        const spans = navMobileToggle.querySelectorAll('span');
        spans[0].style.transform = 'none';
        spans[1].style.transform = 'none';
    }

    // ============================================
    // SMOOTH SCROLL
    // ============================================
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                
                if (target) {
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });

                    closeMobileNav();
                }
            });
        });
    }

    // ============================================
    // TIMELINE PROGRESS
    // ============================================
    function updateTimelineProgress() {
        const visibleItems = document.querySelectorAll('.protocol-node.visible');
        const totalItems = document.querySelectorAll('.protocol-node').length;
        
        if (totalItems > 0) {
            const progress = (visibleItems.length / totalItems) * 100;
            document.querySelector('.spine-pulse')?.style.setProperty('--progress', `${progress}%`);
        }
    }

    // ============================================
    // PARALLAX TILT
    // ============================================
    function initParallaxTilt() {
        const cards = document.querySelectorAll('.work-card, .skills-category, .manifest-panel');
        
        cards.forEach(card => {
            card.addEventListener('mousemove', handleTilt);
            card.addEventListener('mouseleave', resetTilt);
        });
    }

    function handleTilt(e) {
        const card = e.currentTarget;
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const rotateX = (y - centerY) / 20;
        const rotateY = (centerX - x) / 20;
        
        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-5px)`;
    }

    function resetTilt(e) {
        const card = e.currentTarget;
        card.style.transform = '';
    }

    // ============================================
    // PARTICLES
    // ============================================
    function initParticles() {
        const container = document.getElementById('heroParticles');
        if (!container) return;

        for (let i = 0; i < 15; i++) {
            createParticle(container, i);
        }
    }

    function createParticle(container, index) {
        const particle = document.createElement('div');
        const size = Math.random() * 3 + 1;
        const x = Math.random() * 100;
        const y = Math.random() * 100;
        const duration = Math.random() * 10 + 10;
        const delay = index * 0.5;
        
        particle.style.cssText = `
            position: absolute;
            width: ${size}px;
            height: ${size}px;
            background: ${Math.random() > 0.5 ? 'var(--primary)' : 'var(--accent-teal)'};
            border-radius: 50%;
            left: ${x}%;
            top: ${y}%;
            opacity: ${Math.random() * 0.3 + 0.2};
            pointer-events: none;
            animation: float ${duration}s ease-in-out ${delay}s infinite;
        `;
        
        container.appendChild(particle);
    }

    // ============================================
    // CONTACT FORM
    // ============================================
    function initContactForm() {
        if (!contactForm) return;

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = contactForm.querySelector('.btn-submit');
            const originalHTML = submitBtn.innerHTML;
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="btn-icon">◌</span><span class="btn-text">TRANSMITTING...</span>';
            
            const formData = new FormData(contactForm);
            
            fetch('contact.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                submitBtn.innerHTML = '<span class="btn-icon">✓</span><span class="btn-text">TRANSMITTED</span>';
                submitBtn.style.background = 'var(--accent-teal)';
                
                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalHTML;
                    submitBtn.style.background = '';
                    contactForm.reset();
                }, 3000);
            })
            .catch(error => {
                submitBtn.innerHTML = '<span class="btn-icon">✕</span><span class="btn-text">FAILED</span>';
                submitBtn.style.background = '#ef4444';
                
                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalHTML;
                    submitBtn.style.background = '';
                }, 3000);
            });
        });
    }

    // ============================================
    // SUNGLASSES PROTOCOL
    // ============================================
    function initSunglassesProtocol() {
        const profileWrapper = document.querySelector('.profile-image-wrapper');
        if (!profileWrapper) return;

        profileWrapper.addEventListener('mouseenter', () => {
            if (document.documentElement.getAttribute('data-theme') === 'dark') {
                const sunglasses = profileWrapper.querySelector('.sunglasses-overlay');
                if (sunglasses) {
                    sunglasses.style.animation = 'none';
                    sunglasses.offsetHeight;
                    sunglasses.style.animation = 'sunglassesSlide 0.5s ease-out forwards';
                }
            }
        });

        profileWrapper.addEventListener('mouseleave', () => {
            const sunglasses = profileWrapper.querySelector('.sunglasses-overlay');
            if (sunglasses) {
                sunglasses.style.opacity = '0';
                sunglasses.style.transform = 'translateX(-50%) translateY(-50px)';
            }
        });
    }

    // ============================================
    // GHOST BORDERS
    // ============================================
    function initGhostBorders() {
        const nodes = document.querySelectorAll('.work-link, .network-node, .stack-item, .module-tag');
        
        nodes.forEach(node => {
            node.addEventListener('mouseenter', () => {
                node.style.borderColor = 'var(--primary)';
                node.style.boxShadow = '0 0 20px rgba(41, 121, 255, 0.2)';
            });
            
            node.addEventListener('mouseleave', () => {
                node.style.borderColor = '';
                node.style.boxShadow = '';
            });
        });
    }

    // ============================================
    // BUTTON INTERACTIONS
    // ============================================
    function initButtonInteractions() {
        const buttons = document.querySelectorAll('.btn-primary, .btn-outline');
        
        buttons.forEach(btn => {
            btn.addEventListener('mousedown', () => {
                btn.style.transform = 'scale(0.95)';
            });
            
            btn.addEventListener('mouseup', () => {
                btn.style.transform = '';
            });
            
            btn.addEventListener('mouseleave', () => {
                btn.style.transform = '';
            });
        });
    }

    // ============================================
    // KEYBOARD NAVIGATION
    // ============================================
    function initKeyboardNav() {
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeMobileNav();
            }
        });
    }

    // ============================================
    // REDUCED MOTION
    // ============================================
    function initReducedMotion() {
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
        
        if (prefersReducedMotion.matches) {
            document.querySelectorAll('[data-animate]').forEach(el => {
                el.style.opacity = '1';
                el.style.transform = 'none';
                el.classList.add('animated');
            });
        }
    }

    // ============================================
    // INITIALIZATION
    // ============================================
    function init() {
        initTheme();
        initHackerEffect(); // Start hacker typewriter
        initProjectFilter();
        initEnhancedInteractions();
        initScrollAnimations();
        initSmoothScroll();
        initParallaxTilt();
        initParticles();
        initContactForm();
        initSunglassesProtocol();
        initGhostBorders();
        initButtonInteractions();
        initKeyboardNav();
        initReducedMotion();

        // Event listeners
        themeToggle.addEventListener('click', toggleTheme);
        window.addEventListener('scroll', handleNavScroll, { passive: true });
        navMobileToggle.addEventListener('click', toggleMobileNav);

        // Preloader
        document.body.style.opacity = '0';
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.body.style.transition = 'opacity 0.6s ease';
                document.body.style.opacity = '1';
            }, 100);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();