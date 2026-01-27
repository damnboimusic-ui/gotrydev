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

// Sticky navigation scroll effect (як на референсі)
(function() {
    const topNav = document.getElementById('topNav');
    if (!topNav) return;
    
    function updateNav() {
        const scrollY = window.scrollY || window.pageYOffset;
        if (scrollY > 50) {
            topNav.classList.add('scrolled');
        } else {
            topNav.classList.remove('scrolled');
        }
    }
    
    // Використовуємо Lenis scroll event, якщо доступний
    if (window.lenis) {
        window.lenis.on('scroll', updateNav);
    } else {
        // Fallback на window scroll
        window.addEventListener('scroll', updateNav);
    }
    
    // Початкова перевірка
    updateNav();
})();

// Smooth scroll для навігаційних посилань
(function() {
    const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#' || !href) return;
            
            const target = document.querySelector(href);
            if (!target) return;
            
            e.preventDefault();
            
            // Використовуємо Lenis для smooth scroll, якщо доступний
            if (window.lenis) {
                window.lenis.scrollTo(target, {
                    offset: -80, // Враховуємо висоту навігації
                    duration: 1.2
                });
            } else {
                // Fallback на стандартний scroll
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
            
            // Оновлюємо активний стан навігації
            navLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });
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
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    1024: {
                        slidesPerView: 3,
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
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    1024: {
                        slidesPerView: 3,
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
