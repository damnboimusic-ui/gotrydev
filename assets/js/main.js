/**
 * Main JavaScript for Gotry theme
 * Ініціалізація Lenis smooth scroll та інших функцій
 */

// Initialize Lenis smooth scroll
(function() {
    let lenis = null;
    
    function initLenis() {
        if (typeof Lenis === 'undefined') {
            setTimeout(initLenis, 200);
            return;
        }
        
        if (lenis) return; // Вже ініціалізований
        
        lenis = new Lenis({
            autoRaf: true,
            lerp: 0.08, // Плавність прокрутки (0.1 = швидше, 0.05 = повільніше)
            smoothWheel: true,
            smoothTouch: true,
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)) // Easing функція
        });
        
        // Зберігаємо в глобальну змінну для доступу з інших функцій
        window.lenis = lenis;
        
        // Animation loop для Lenis
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);
        
        console.log('✅ Lenis smooth scroll ініціалізовано');
    }
    
    // Ініціалізація після завантаження DOM
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initLenis);
    } else {
        initLenis();
    }
    
    // Fallback: якщо Lenis не завантажився, використовуємо стандартний scroll
    setTimeout(function() {
        if (!lenis && typeof Lenis !== 'undefined') {
            initLenis();
        }
    }, 1000);
})();

// Greeting + scroll indicator
(function() {
    function initHeaderUtilities() {
        const greetingText = document.getElementById('greeting-text');
        const scrollIndicator = document.querySelector('.scroll-indicator');
        const scrollDot = document.querySelector('.scroll-dot-top');

        if (greetingText) {
            const hour = new Date().getHours();
            let greeting = 'Добрий день!';
            if (hour >= 5 && hour < 12) greeting = 'Доброго ранку!';
            if (hour >= 12 && hour < 18) greeting = 'Добрий день!';
            if (hour >= 18 && hour < 22) greeting = 'Добрий вечір!';
            if (hour >= 22 || hour < 5) greeting = 'Доброї ночі!';
            greetingText.textContent = greeting;
        }

        if (scrollIndicator && scrollDot) {
            function updateScrollIndicator() {
                const windowHeight = window.innerHeight;
                const documentHeight = document.documentElement.scrollHeight;
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                const scrollableHeight = Math.max(documentHeight - windowHeight, 1);
                const scrollPercent = Math.min(scrollTop / scrollableHeight, 1);
                const lineHeight = 220;
                const totalDotSize = 33.4;
                const maxMove = lineHeight - totalDotSize;
                const dotPosition = scrollPercent * maxMove;
                scrollDot.style.top = `${dotPosition}px`;
            }

            let ticking = false;
            function requestIndicatorUpdate() {
                if (ticking) return;
                ticking = true;
                requestAnimationFrame(() => {
                    updateScrollIndicator();
                    ticking = false;
                });
            }

            window.addEventListener('scroll', requestIndicatorUpdate, { passive: true });
            window.addEventListener('resize', requestIndicatorUpdate, { passive: true });
            if (window.lenis) {
                window.lenis.on('scroll', requestIndicatorUpdate);
            }
            updateScrollIndicator();
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initHeaderUtilities);
    } else {
        initHeaderUtilities();
    }
})();

// Smooth scroll for in-page links
(function() {
    function initSmoothAnchors() {
        const links = document.querySelectorAll('a[href^="#"]');
        const offset = -76;

        links.forEach((link) => {
            link.addEventListener('click', (event) => {
                const href = link.getAttribute('href');
                if (!href || href === '#') return;
                const target = document.querySelector(href);
                if (!target) return;

                event.preventDefault();
                if (window.lenis) {
                    window.lenis.scrollTo(target, { offset, duration: 1.05 });
                } else {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initSmoothAnchors);
    } else {
        initSmoothAnchors();
    }
})();

// Minimal menu toggle
(function() {
    const menuBtn = document.getElementById('hamburger-menu');
    const menu = document.getElementById('site-menu');
    const backdrop = document.getElementById('site-menu-backdrop');
    const closeBtn = document.getElementById('site-menu-close');
    const menuLinks = menu ? menu.querySelectorAll('a[href^="#"]') : [];

    if (!menuBtn || !menu || !backdrop || !closeBtn) return;

    function openMenu() {
        document.body.classList.add('menu-open');
        menuBtn.setAttribute('aria-expanded', 'true');
        menu.setAttribute('aria-hidden', 'false');
        backdrop.setAttribute('aria-hidden', 'false');
    }

    function closeMenu() {
        document.body.classList.remove('menu-open');
        menuBtn.setAttribute('aria-expanded', 'false');
        menu.setAttribute('aria-hidden', 'true');
        backdrop.setAttribute('aria-hidden', 'true');
    }

    menuBtn.addEventListener('click', function() {
        if (document.body.classList.contains('menu-open')) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    closeBtn.addEventListener('click', closeMenu);
    backdrop.addEventListener('click', closeMenu);
    menuLinks.forEach((link) => link.addEventListener('click', closeMenu));
})();

// Conversion CTA tracking hooks
(function() {
    function pushDataLayer(eventName, payload) {
        if (Array.isArray(window.dataLayer)) {
            window.dataLayer.push(Object.assign({ event: eventName }, payload));
        }
    }

    function trackEvent(eventName, payload) {
        window.dispatchEvent(new CustomEvent('gotry:track', { detail: { event: eventName, payload } }));
        pushDataLayer(eventName, payload);
    }

    function initCtaTracking() {
        document.addEventListener('click', (event) => {
            const element = event.target.closest('[data-cta]');
            if (!element) return;

            const cta = element.getAttribute('data-cta');
            const href = element.getAttribute('href') || '';
            const payload = {
                cta,
                href,
                label: (element.textContent || '').trim().slice(0, 80)
            };

            if (cta === 'book-call') {
                trackEvent('book_call_click', payload);
                if (href && !href.startsWith('#')) {
                    trackEvent('book_call_open', payload);
                }
                return;
            }

            if (cta === 'send-brief') {
                trackEvent('brief_submit_click', payload);
                return;
            }

            trackEvent('cta_click', payload);
        });

        const params = new URLSearchParams(window.location.search);
        if (params.get('contact_status') === 'success') {
            trackEvent('brief_submit_success', { source: 'contact_form' });
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCtaTracking);
    } else {
        initCtaTracking();
    }
})();

// Swiper sliders for cases and projects
(function() {
    function initSwipers() {
        if (typeof Swiper === 'undefined') {
            setTimeout(initSwipers, 200);
            return;
        }

        const casesEl = document.querySelector('.cases-swiper');
        if (casesEl) {
            new Swiper(casesEl, {
                slidesPerView: 1.05,
                spaceBetween: 16,
                loop: true,
                grabCursor: true,
                pagination: {
                    el: '.cases-pagination',
                    clickable: true
                },
                navigation: {
                    nextEl: '.cases-next',
                    prevEl: '.cases-prev'
                },
                breakpoints: {
                    768: {
                        slidesPerView: 1.8,
                        spaceBetween: 20
                    },
                    1024: {
                        slidesPerView: 2.4,
                        spaceBetween: 24
                    },
                    1280: {
                        slidesPerView: 2.8,
                        spaceBetween: 24
                    }
                }
            });
        }

        const projectsEl = document.querySelector('.projects-swiper');
        if (projectsEl) {
            new Swiper(projectsEl, {
                slidesPerView: 1.05,
                spaceBetween: 16,
                loop: true,
                grabCursor: true,
                pagination: {
                    el: '.projects-pagination',
                    clickable: true
                },
                navigation: {
                    nextEl: '.projects-next',
                    prevEl: '.projects-prev'
                },
                breakpoints: {
                    768: {
                        slidesPerView: 1.8,
                        spaceBetween: 20
                    },
                    1024: {
                        slidesPerView: 2.4,
                        spaceBetween: 24
                    },
                    1280: {
                        slidesPerView: 2.8,
                        spaceBetween: 24
                    }
                }
            });
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initSwipers);
    } else {
        initSwipers();
    }
})();

// Team sticky roster interaction
(function() {
    function initTeamRoster() {
        const rows = document.querySelectorAll('.team-roster-row[data-team-image]');
        if (!rows.length) return;

        const photoEl = document.querySelector('.js-team-focus-photo');
        const quoteOneEl = document.querySelector('.js-team-focus-quote-one');
        const quoteTwoEl = document.querySelector('.js-team-focus-quote-two');
        const nameEl = document.querySelector('.js-team-focus-name');
        const metaEl = document.querySelector('.js-team-focus-meta');

        if (!photoEl || !quoteOneEl || !quoteTwoEl || !nameEl || !metaEl) return;

        function applyRow(row) {
            rows.forEach((item) => item.classList.remove('is-active'));
            row.classList.add('is-active');

            const nextImage = row.getAttribute('data-team-image');
            const nextAlt = row.getAttribute('data-team-alt') || '';
            const quoteOne = row.getAttribute('data-team-quote-one') || '';
            const quoteTwo = row.getAttribute('data-team-quote-two') || '';
            const name = row.getAttribute('data-team-name') || '';
            const meta = row.getAttribute('data-team-meta') || '';

            if (nextImage) {
                photoEl.src = nextImage;
            }
            photoEl.alt = nextAlt;
            quoteOneEl.textContent = quoteOne;
            quoteTwoEl.textContent = quoteTwo;
            nameEl.textContent = name;
            metaEl.textContent = meta;
        }

        rows.forEach((row) => {
            row.setAttribute('tabindex', '0');
            row.addEventListener('mouseenter', () => applyRow(row));
            row.addEventListener('click', () => applyRow(row));
            row.addEventListener('focus', () => applyRow(row));
            row.addEventListener('keydown', (event) => {
                if (event.key === 'Enter' || event.key === ' ') {
                    event.preventDefault();
                    applyRow(row);
                }
            });
        });

        const initialActive = document.querySelector('.team-roster-row.is-active') || rows[0];
        if (initialActive) {
            applyRow(initialActive);
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initTeamRoster);
    } else {
        initTeamRoster();
    }
})();

// Process timeline progress + active steps on scroll
(function() {
    function initProcessTimeline() {
        const section = document.querySelector('.process-section');
        const grid = document.querySelector('.process-grid');
        const cards = grid ? Array.from(grid.querySelectorAll('.process-card')) : [];
        if (!section || !grid || !cards.length) return;

        const existingLayer = grid.querySelector('.process-node-layer');
        if (existingLayer) {
            existingLayer.remove();
        }

        const nodeLayer = document.createElement('div');
        nodeLayer.className = 'process-node-layer';
        grid.appendChild(nodeLayer);

        const nodes = cards.map(() => {
            const node = document.createElement('span');
            node.className = 'process-node';
            nodeLayer.appendChild(node);
            return node;
        });

        function clamp(value, min, max) {
            return Math.max(min, Math.min(max, value));
        }

        function updateTimeline() {
            const sectionRect = section.getBoundingClientRect();
            const viewportHeight = window.innerHeight || document.documentElement.clientHeight;
            const gridRect = grid.getBoundingClientRect();

            cards.forEach((card, index) => {
                const cardRect = card.getBoundingClientRect();
                const y = (cardRect.top - gridRect.top) + 30;
                nodes[index].style.top = `${y}px`;
            });

            // Start filling when section enters viewport and finish near section end.
            const startPoint = viewportHeight * 0.78;
            const trackLength = Math.max(sectionRect.height * 0.72, 1);
            const progress = clamp((startPoint - sectionRect.top) / trackLength, 0, 1);
            grid.style.setProperty('--process-progress', progress.toFixed(4));

            let activeIndex = -1;
            const activationLine = viewportHeight * 0.62;
            cards.forEach((card, index) => {
                const cardRect = card.getBoundingClientRect();
                if (cardRect.top <= activationLine) {
                    activeIndex = index;
                }
            });

            cards.forEach((card, index) => {
                card.classList.toggle('is-active', index <= activeIndex);
                nodes[index].classList.toggle('is-active', index <= activeIndex);
            });
        }

        let ticking = false;
        function requestUpdate() {
            if (ticking) return;
            ticking = true;
            requestAnimationFrame(() => {
                updateTimeline();
                ticking = false;
            });
        }

        window.addEventListener('scroll', requestUpdate, { passive: true });
        window.addEventListener('resize', requestUpdate, { passive: true });
        if (window.lenis) {
            window.lenis.on('scroll', requestUpdate);
        }

        updateTimeline();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initProcessTimeline);
    } else {
        initProcessTimeline();
    }
})();
