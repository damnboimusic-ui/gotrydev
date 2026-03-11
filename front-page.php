<?php
/**
 * Template for Front Page (Home)
 * Konpo Studio Inspired Layout
 */

get_header(); 
$booking_url = gotry_get_booking_url();
?>

<!-- Main Grid Container -->
<div class="main-grid" id="main-grid">
    <!-- Left Sidebar - Contains Hamburger and Scroll Indicator -->
    <div class="header-side" id="header-side">
        <!-- Hamburger Menu Button - Top of Sidebar -->
        <button class="hamburger-menu" id="hamburger-menu" aria-label="Меню" aria-expanded="false" aria-controls="site-menu">
            <div></div>
            <div></div>
            <div></div>
        </button>
        
        <!-- Right vertical line that goes down from hamburger -->
        <div class="sidebar-right-line"></div>
        
        <!-- Scroll Indicator - Inside Sidebar -->
        <div class="scroll-indicator">
            <div class="scroll-dot scroll-dot-top"></div>
            <div class="scroll-line"></div>
        </div>
    </div>
    
    <!-- Header Navigation - At main-grid level, fixed at top right -->
    <header class="top-nav" id="top-nav">
        <!-- Logo - Left Edge of Header -->
        <div class="header-logo">
            <a href="/" class="logo-link">
                <img src="https://antongotry.dev/wp-content/uploads/2026/01/dark-1d-logo.svg" alt="Gotry Logo" class="logo-img">
            </a>
        </div>
        
        <!-- Spacer - fills space between logo and right content -->
        <div class="header-spacer"></div>
        
        <!-- Right Content - Greeting + Button (Right Edge) -->
        <div class="header-right">
            <span class="nav-greeting" id="greeting-text">Добрий вечір!</span>
            <a href="#book-call" class="nav-hire-btn" data-cta="book-call">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 17L17 7M7 7h10v10"/>
                </svg>
                <span>Забронювати дзвінок</span>
            </a>
        </div>
        
        <!-- Header divider line - positioned at bottom of entire header (top-nav) -->
        <div class="header-divider"></div>
    </header>

    <div class="site-menu-backdrop" id="site-menu-backdrop" aria-hidden="true"></div>
    <aside class="site-menu" id="site-menu" aria-hidden="true">
        <div class="site-menu-panel">
            <div class="site-menu-header">
                <span class="site-menu-kicker">Меню</span>
                <button class="site-menu-close" id="site-menu-close" aria-label="Закрити меню">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6L6 18M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <nav class="site-menu-links">
                <a href="#hero" class="site-menu-link">Головна</a>
                <a href="#cases" class="site-menu-link">Кейси</a>
                <a href="#offer" class="site-menu-link">Формати</a>
                <a href="#services" class="site-menu-link">Послуги</a>
                <a href="#team" class="site-menu-link">Команда</a>
                <a href="#contact" class="site-menu-link">Бриф</a>
            </nav>
            <div class="site-menu-footer">
                <span class="site-menu-note">Працюємо з фаундерами та командами, що люблять дизайн.</span>
                <a href="#book-call" class="site-menu-cta" data-cta="book-call">Забронювати дзвінок</a>
            </div>
        </div>
    </aside>
    
    <!-- Main Content Area - Right Side (Working Area) - Starts below header -->
    <div class="main-content">
        <!-- Hero Section -->
        <section class="hero-section" id="hero">
            <div class="wide-container">
                <div class="hero-content">
                    <!-- Main Title -->
                    <h1 class="hero-main-title">
                        <span class="title-line-1">Дизайн повного циклу</span>
                        <span class="title-line-2">
                            <span class="strikethrough-text">Агенція</span> Студія.
                        </span>
                    </h1>
                    
                    <!-- Globe Icon - centered -->
                    <div class="hero-globe-wrapper">
                        <svg class="globe-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="2" y1="12" x2="22" y2="12"/>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                        </svg>
                    </div>
                    
                    <!-- Description - centered below globe -->
                    <p class="hero-description">Gotry — це plug-and-play команда досвідчених дизайнерів для CXO, які знають, що дизайн — це несправедлива перевага.</p>
                    <div class="hero-actions">
                        <a href="#book-call" class="hero-cta hero-cta-primary" data-cta="book-call">
                            <span>Забронювати дзвінок 30 хв</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7 17L17 7M7 7h10v10"/>
                            </svg>
                        </a>
                        <a href="#cases" class="hero-cta hero-cta-secondary" data-cta="view-cases">
                            <span>Дивитись кейси</span>
                        </a>
                    </div>
                </div>
                
                <!-- Cases Intro Blocks -->
                <div class="cases-intro" id="cases">
                    <div class="cases-intro-copy">
                        <span class="cases-kicker">Кейси</span>
                        <h2 class="cases-title">Публічні кейси: задача, рішення, результат.</h2>
                    </div>
                    <div class="cases-intro-actions">
                        <p class="cases-note">Без випадкових цифр: фіксуємо тільки те, що можна показати і перевірити в live-проєктах.</p>
                        <a href="#book-call" class="cases-cta" data-cta="book-call">
                            <span>Обговорити свій кейс</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7 17L17 7M7 7h10v10"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="cases-proof-grid">
                    <article class="case-proof-card">
                        <div class="case-proof-head">
                            <span class="case-proof-logo">Surge AI</span>
                            <span class="case-proof-type">B2B SaaS</span>
                        </div>
                        <div class="case-proof-body">
                            <p><strong>Задача:</strong> перезапустити маркетинговий сайт під enterprise-аудиторію.</p>
                            <p><strong>Рішення:</strong> нова інформаційна архітектура, дизайн-система та конверсійний flow для demo.</p>
                            <p><strong>Результат:</strong> зрозумілий value proposition, швидший пресейл-діалог і стабільний потік цільових запитів.</p>
                        </div>
                        <div class="case-proof-meta">
                            <span>Термін: 8 тижнів</span>
                            <span>Стек: Figma + WordPress</span>
                        </div>
                    </article>
                    <article class="case-proof-card">
                        <div class="case-proof-head">
                            <span class="case-proof-logo">amp</span>
                            <span class="case-proof-type">Product Platform</span>
                        </div>
                        <div class="case-proof-body">
                            <p><strong>Задача:</strong> зібрати єдиний UX для продуктового кабінету та маркетингових сторінок.</p>
                            <p><strong>Рішення:</strong> уніфікована UI-мова, модульні компоненти та оновлений customer journey.</p>
                            <p><strong>Результат:</strong> узгоджена продуктова подача, простіший онбординг і краща читабельність пропозиції.</p>
                        </div>
                        <div class="case-proof-meta">
                            <span>Термін: 6 тижнів</span>
                            <span>Стек: Figma + Front-end</span>
                        </div>
                    </article>
                    <article class="case-proof-card">
                        <div class="case-proof-head">
                            <span class="case-proof-logo">Vectornator</span>
                            <span class="case-proof-type">Creative Software</span>
                        </div>
                        <div class="case-proof-body">
                            <p><strong>Задача:</strong> підсилити бренд і структуру контенту для масштабування e-commerce напрямку.</p>
                            <p><strong>Рішення:</strong> бренд-апдейт, нова сітка контенту, оптимізація ключових e-commerce сторінок.</p>
                            <p><strong>Результат:</strong> чіткіша продуктова комунікація та краща готовність до рекламного трафіку.</p>
                        </div>
                        <div class="case-proof-meta">
                            <span>Термін: 10 тижнів</span>
                            <span>Стек: Brand + OpenCart</span>
                        </div>
                    </article>
                </div>

                <div class="cases-metrics">
                    <div class="cases-metric">
                        <span class="cases-metric-value">Публічний формат</span>
                        <span class="cases-metric-label">Показуємо лише відкриті кейси</span>
                    </div>
                    <div class="cases-metric">
                        <span class="cases-metric-value">Full-cycle команда</span>
                        <span class="cases-metric-label">Стратегія, дизайн, розробка, запуск</span>
                    </div>
                    <div class="cases-metric">
                        <span class="cases-metric-value">Один контакт</span>
                        <span class="cases-metric-label">Фаундер отримує прозорий процес</span>
                    </div>
                </div>
                
                <!-- Project Cards -->
                <div class="projects-section">
                    <div class="projects-divider"></div>
                    <div class="projects-swiper swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Card 1: Surge (Gradient) -->
                                <div class="project-card project-card-gradient project-card-image-1">
                                    <div class="project-card-content project-card-top-right">
                                        <span class="project-type">Бренд • Сайт • Система</span>
                                        <span class="project-name">surge<sup class="project-sup">AI</sup></span>
                                    </div>
                                    <div class="project-card-bottom-left">
                                        <span class="project-name project-name-large">ChatGPT</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="swiper-slide">
                                <!-- Card 2: ComPsych (White) -->
                                <div class="project-card project-card-white project-card-image-2">
                                    <div class="project-card-content project-card-top-right">
                                        <span class="project-type project-type-dark">Бренд</span>
                                        <div class="project-logo-wrapper">
                                            <svg class="project-logo" width="32" height="32" viewBox="0 0 32 32" fill="#2563eb">
                                                <path d="M16 2C8.268 2 2 8.268 2 16s6.268 14 14 14 14-6.268 14-14S23.732 2 16 2zm0 24c-5.523 0-10-4.477-10-10S10.477 6 16 6s10 4.477 10 10-4.477 10-10 10zm0-16c-3.314 0-6 2.686-6 6s2.686 6 6 6 6-2.686 6-6-2.686-6-6-6z"/>
                                            </svg>
                                        </div>
                                        <span class="project-name project-name-dark">ComPsych</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="swiper-slide">
                                <!-- Card 3: amp (Dark) -->
                                <div class="project-card project-card-dark project-card-image-3">
                                    <div class="project-card-content project-card-top-right">
                                        <span class="project-type">Продукт</span>
                                        <svg class="project-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                                        </svg>
                                        <span class="project-name">amp</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-controls">
                            <button class="swiper-btn projects-prev" aria-label="Попередній проєкт">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M15 18l-6-6 6-6"/>
                                </svg>
                            </button>
                            <div class="swiper-pagination projects-pagination"></div>
                            <button class="swiper-btn projects-next" aria-label="Наступний проєкт">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 18l6-6-6-6"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- About/Credibility Section -->
                <section class="about-credibility-section">
                    <div class="about-headline">
                        <span class="headline-main">Лаконічні, швидкі й безкомпромісні до стандартів світового рівня, Gotry створено для компаній, що формують категор</span><span class="headline-fade">ії.</span>
                    </div>
                    <div class="about-tagline">Дизайн-студія з реальною агенцією.</div>
                    <div class="about-divider"></div>
                    <div class="about-content-wrapper">
                        <div class="about-content">
                            <p class="about-paragraph">
                                З 2020 року працюємо зі <span class="about-link">стартапами</span> і <span class="about-link">SMB</span>, де сайт має не просто виглядати красиво, а закривати комерційну задачу: зріст запитів, якісні ліди, зрозумілий sales flow.
                            </p>
                            <p class="about-paragraph">
                                У нас одна команда на весь цикл: <span class="about-link">два дизайнери</span>, <span class="about-link">WordPress/OpenCart</span> розробка та <span class="about-link">full-code</span> для складної логіки. Це прибирає розрив між макетом і production.
                            </p>
                            <p class="about-paragraph-short">Дизайн і розробка працюють як один механізм.</p>
                        </div>
                        <div class="about-logos">
                        <!-- FWA Logo -->
                        <div class="about-logo-item">
                            <svg width="48" height="24" viewBox="0 0 48 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 2H6V22H2V2Z" fill="currentColor"/>
                                <path d="M6 2H12V6H6V2Z" fill="currentColor"/>
                                <path d="M6 10H12V14H6V10Z" fill="currentColor"/>
                                <path d="M16 2H24V6H16V2Z" fill="currentColor"/>
                                <path d="M16 10H24V14H16V10Z" fill="currentColor"/>
                                <path d="M16 14H24V18H16V14Z" fill="currentColor"/>
                                <path d="M28 2H36V6H28V2Z" fill="currentColor"/>
                                <path d="M28 10H36V14H28V10Z" fill="currentColor"/>
                                <path d="M28 14H36V18H28V14Z" fill="currentColor"/>
                            </svg>
                        </div>
                        <!-- Awwwards Logo (W.) -->
                        <div class="about-logo-item">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <text x="4" y="24" font-family="Arial, sans-serif" font-size="20" font-weight="900" fill="currentColor">W.</text>
                            </svg>
                        </div>
                        <!-- Webby Awards Logo (Globe with stripes) -->
                        <div class="about-logo-item">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="11" stroke="currentColor" stroke-width="1.2" fill="none"/>
                                <ellipse cx="16" cy="16" rx="11" ry="5.5" stroke="currentColor" stroke-width="1.2" fill="none"/>
                                <ellipse cx="16" cy="16" rx="11" ry="5.5" stroke="currentColor" stroke-width="1.2" fill="none" transform="rotate(90 16 16)"/>
                                <circle cx="16" cy="16" r="1.5" fill="currentColor"/>
                            </svg>
                        </div>
                        <!-- Apple Logo -->
                        <div class="about-logo-item">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2 6.4C20.6 6.8 19.6 7.4 18.6 7.3C18.4 5.7 19 4.4 19.4 3.6C20.2 2.6 21.2 2 21.8 2C22.8 2 23.6 2.6 24.2 2.6C24.7 2.6 25.8 1.8 27 2C28.1 2.2 29 2.8 29.5 3.6C28.4 4.2 27.6 5.2 27.6 6.4C27.6 7.6 28.4 8.6 29.4 9.2C28.9 9.8 28.3 10.5 27.4 11.4C26.2 12.5 25.2 13.8 23.8 13.8C22.8 13.8 22.2 13.2 21 13.2C19.7 13.2 19 13.8 18 13.8C16.6 13.8 15.6 12.5 14.5 11.4C13.1 10 11.8 8.4 12.2 6.6C12.4 5.2 13.2 4.2 14.2 3.6C15.3 3 16.4 3.4 17 3.6C17.4 3.4 18.6 2.8 20 2.8C20.4 2.8 20.9 2.9 21.2 3.2C21.8 3.4 22.6 4.2 23 5C22.6 5.2 22 5.8 21.2 6.4Z" fill="currentColor"/>
                                <path d="M22.8 16.4C22.6 18.6 24.4 20.4 26.6 20.6C26.8 22.8 24.9 24.7 22.8 24.9C20.6 25.1 18.8 23.3 18.8 21.1C19.6 18.9 21.4 17.1 22.8 16.4Z" fill="currentColor"/>
                            </svg>
                        </div>
                        <!-- CSS Design Awards Logo (Comb) -->
                        <div class="about-logo-item">
                            <svg width="24" height="32" viewBox="0 0 24 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="8" y="4" width="8" height="24" rx="0.5" fill="currentColor"/>
                                <rect x="9" y="6" width="6" height="1.5" fill="none" stroke="currentColor" stroke-width="0.3" opacity="0.3"/>
                                <rect x="9" y="9" width="6" height="1.5" fill="none" stroke="currentColor" stroke-width="0.3" opacity="0.3"/>
                                <rect x="9" y="12" width="6" height="1.5" fill="none" stroke="currentColor" stroke-width="0.3" opacity="0.3"/>
                                <rect x="9" y="15" width="6" height="1.5" fill="none" stroke="currentColor" stroke-width="0.3" opacity="0.3"/>
                                <rect x="9" y="18" width="6" height="1.5" fill="none" stroke="currentColor" stroke-width="0.3" opacity="0.3"/>
                                <rect x="9" y="21" width="6" height="1.5" fill="none" stroke="currentColor" stroke-width="0.3" opacity="0.3"/>
                                <rect x="9" y="24" width="6" height="1.5" fill="none" stroke="currentColor" stroke-width="0.3" opacity="0.3"/>
                            </svg>
                        </div>
                        <!-- Chevron/Arrow Logo -->
                        <div class="about-logo-item">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 12L16 6L22 12M10 20L16 26L22 20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    </div>
                </section>
            </div>
        </section>

        <!-- Offer Matrix Section -->
        <section class="offer-section" id="offer">
            <div class="wide-container">
                <div class="offer-header">
                    <span class="offer-kicker">Offer Matrix</span>
                    <h2 class="offer-title">Формати співпраці під ваш етап росту</h2>
                    <p class="offer-description">Модель hybrid: прозорі діапазони бюджету, фіксований результат на етап і зрозумілий scope до старту.</p>
                </div>
                <div class="offer-grid">
                    <article class="offer-card">
                        <div class="offer-card-head">
                            <h3 class="offer-card-title">Launch Site</h3>
                            <span class="offer-card-tag">Brand + Website</span>
                        </div>
                        <div class="offer-fields">
                            <div class="offer-field"><span class="offer-field-label">Для кого</span><p class="offer-field-value">Фаундери, яким потрібен сильний запуск продукту або сервісу.</p></div>
                            <div class="offer-field"><span class="offer-field-label">Що входить</span><p class="offer-field-value">Позиціонування, структура сторінки, дизайн, верстка, QA, запуск.</p></div>
                            <div class="offer-field"><span class="offer-field-label">Термін</span><p class="offer-field-value">4-8 тижнів</p></div>
                            <div class="offer-field"><span class="offer-field-label">Бюджет від</span><p class="offer-field-value">$3 500</p></div>
                            <div class="offer-field"><span class="offer-field-label">Очікуваний результат</span><p class="offer-field-value">Сайт, який чітко продає пропозицію і веде до заявки.</p></div>
                        </div>
                        <a href="#book-call" class="offer-cta" data-cta="book-call">Забронювати дзвінок 30 хв</a>
                    </article>
                    <article class="offer-card">
                        <div class="offer-card-head">
                            <h3 class="offer-card-title">E-commerce</h3>
                            <span class="offer-card-tag">WordPress / OpenCart</span>
                        </div>
                        <div class="offer-fields">
                            <div class="offer-field"><span class="offer-field-label">Для кого</span><p class="offer-field-value">SMB, які запускають або перезбирають інтернет-магазин.</p></div>
                            <div class="offer-field"><span class="offer-field-label">Що входить</span><p class="offer-field-value">UX каталогу, картка товару, checkout, інтеграції та базова аналітика.</p></div>
                            <div class="offer-field"><span class="offer-field-label">Термін</span><p class="offer-field-value">6-10 тижнів</p></div>
                            <div class="offer-field"><span class="offer-field-label">Бюджет від</span><p class="offer-field-value">$5 000</p></div>
                            <div class="offer-field"><span class="offer-field-label">Очікуваний результат</span><p class="offer-field-value">Керований e-commerce фундамент для росту реклами й продажів.</p></div>
                        </div>
                        <a href="#book-call" class="offer-cta" data-cta="book-call">Забронювати дзвінок 30 хв</a>
                    </article>
                    <article class="offer-card">
                        <div class="offer-card-head">
                            <h3 class="offer-card-title">Custom Product</h3>
                            <span class="offer-card-tag">Full-code + Integrations</span>
                        </div>
                        <div class="offer-fields">
                            <div class="offer-field"><span class="offer-field-label">Для кого</span><p class="offer-field-value">Команди з нетиповою бізнес-логікою та API-інтеграціями.</p></div>
                            <div class="offer-field"><span class="offer-field-label">Що входить</span><p class="offer-field-value">Техпроєктування, кастомна розробка, інтеграції, performance та support.</p></div>
                            <div class="offer-field"><span class="offer-field-label">Термін</span><p class="offer-field-value">8-16 тижнів</p></div>
                            <div class="offer-field"><span class="offer-field-label">Бюджет від</span><p class="offer-field-value">$9 000</p></div>
                            <div class="offer-field"><span class="offer-field-label">Очікуваний результат</span><p class="offer-field-value">Контрольована технічна база для масштабування без шаблонних обмежень.</p></div>
                        </div>
                        <a href="#book-call" class="offer-cta" data-cta="book-call">Забронювати дзвінок 30 хв</a>
                    </article>
                </div>
            </div>
        </section>
        
        <!-- Services Section - Moved outside hero-section for sticky to work -->
        <section class="services-section" id="services">
            <div class="wide-container">
                <h2 class="services-title">Послуги</h2>
                <div class="services-cards-stack">
                    <!-- Card 1: Product Design -->
                    <div class="service-card">
                        <div class="service-card-inner">
                            <div class="service-card-header">
                                <h3 class="service-card-title">Продуктовий дизайн</h3>
                                <a href="#book-call" class="service-card-action-btn" aria-label="Забронювати дзвінок" data-cta="book-call">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 12L12 4M12 4H6M12 4V10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="service-card-divider"></div>
                            <div class="service-card-content">
                                <p class="service-card-description">Хороший дизайн дає завантаження. Великий дизайн дає щоденне використання. Ми проєктуємо цифрові продукти, що формують звички й ростять бізнес.</p>
                                <div class="service-card-footer">
                                    <div class="service-card-pattern">
                                        <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20" cy="20" r="3" fill="#E0D9ED"/>
                                            <circle cx="40" cy="20" r="3" fill="#E0D9ED"/>
                                            <circle cx="60" cy="20" r="3" fill="#9B51E0"/>
                                            <circle cx="80" cy="20" r="3" fill="#E0D9ED"/>
                                            <circle cx="100" cy="20" r="3" fill="#E0D9ED"/>
                                            <circle cx="20" cy="40" r="3" fill="#E0D9ED"/>
                                            <circle cx="40" cy="40" r="3" fill="#9B51E0"/>
                                            <circle cx="60" cy="40" r="3" fill="#9B51E0"/>
                                            <circle cx="80" cy="40" r="3" fill="#9B51E0"/>
                                            <circle cx="100" cy="40" r="3" fill="#E0D9ED"/>
                                            <circle cx="20" cy="60" r="3" fill="#E0D9ED"/>
                                            <circle cx="40" cy="60" r="3" fill="#9B51E0"/>
                                            <circle cx="60" cy="60" r="3" fill="#9B51E0"/>
                                            <circle cx="80" cy="60" r="3" fill="#E0D9ED"/>
                                            <circle cx="100" cy="60" r="3" fill="#E0D9ED"/>
                                            <circle cx="20" cy="80" r="3" fill="#E0D9ED"/>
                                            <circle cx="40" cy="80" r="3" fill="#E0D9ED"/>
                                            <circle cx="60" cy="80" r="3" fill="#E0D9ED"/>
                                            <circle cx="80" cy="80" r="3" fill="#E0D9ED"/>
                                            <circle cx="100" cy="80" r="3" fill="#E0D9ED"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 2: Design Systems -->
                    <div class="service-card">
                        <div class="service-card-inner">
                            <div class="service-card-header">
                                <h3 class="service-card-title">Дизайн-системи</h3>
                                <a href="#book-call" class="service-card-action-btn" aria-label="Забронювати дзвінок" data-cta="book-call">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 12L12 4M12 4H6M12 4V10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="service-card-divider"></div>
                            <div class="service-card-content">
                                <p class="service-card-description">Зростання створює хаос та неефективність. Ми будуємо масштабовані дизайн-системи, які об’єднують команди й дають одне джерело правди замість десяти помилок.</p>
                                <div class="service-card-footer">
                                    <div class="service-card-pattern">
                                        <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20" cy="20" r="3" fill="#E0D9ED"/>
                                            <circle cx="40" cy="20" r="3" fill="#E0D9ED"/>
                                            <circle cx="60" cy="20" r="3" fill="#9B51E0"/>
                                            <circle cx="80" cy="20" r="3" fill="#E0D9ED"/>
                                            <circle cx="100" cy="20" r="3" fill="#E0D9ED"/>
                                            <circle cx="20" cy="40" r="3" fill="#E0D9ED"/>
                                            <circle cx="40" cy="40" r="3" fill="#9B51E0"/>
                                            <circle cx="60" cy="40" r="3" fill="#9B51E0"/>
                                            <circle cx="80" cy="40" r="3" fill="#9B51E0"/>
                                            <circle cx="100" cy="40" r="3" fill="#E0D9ED"/>
                                            <circle cx="20" cy="60" r="3" fill="#E0D9ED"/>
                                            <circle cx="40" cy="60" r="3" fill="#9B51E0"/>
                                            <circle cx="60" cy="60" r="3" fill="#9B51E0"/>
                                            <circle cx="80" cy="60" r="3" fill="#E0D9ED"/>
                                            <circle cx="100" cy="60" r="3" fill="#E0D9ED"/>
                                            <circle cx="20" cy="80" r="3" fill="#E0D9ED"/>
                                            <circle cx="40" cy="80" r="3" fill="#E0D9ED"/>
                                            <circle cx="60" cy="80" r="3" fill="#E0D9ED"/>
                                            <circle cx="80" cy="80" r="3" fill="#E0D9ED"/>
                                            <circle cx="100" cy="80" r="3" fill="#E0D9ED"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 3: Brand Design -->
                    <div class="service-card">
                        <div class="service-card-inner">
                            <div class="service-card-header">
                                <h3 class="service-card-title">Бренд-дизайн</h3>
                                <a href="#book-call" class="service-card-action-btn" aria-label="Забронювати дзвінок" data-cta="book-call">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 12L12 4M12 4H6M12 4V10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="service-card-divider"></div>
                            <div class="service-card-content">
                                <p class="service-card-description">Довіра будується роками. Ми створюємо її за ніч. Ваш бренд має формувати категорію, говорити з аудиторією й перетворювати увагу в конверсії.</p>
                                <div class="service-card-footer">
                                    <div class="service-card-pattern">
                                        <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20" cy="20" r="3" fill="#E0D9ED"/>
                                            <circle cx="40" cy="20" r="3" fill="#E0D9ED"/>
                                            <circle cx="60" cy="20" r="3" fill="#9B51E0"/>
                                            <circle cx="80" cy="20" r="3" fill="#E0D9ED"/>
                                            <circle cx="100" cy="20" r="3" fill="#E0D9ED"/>
                                            <circle cx="20" cy="40" r="3" fill="#E0D9ED"/>
                                            <circle cx="40" cy="40" r="3" fill="#9B51E0"/>
                                            <circle cx="60" cy="40" r="3" fill="#9B51E0"/>
                                            <circle cx="80" cy="40" r="3" fill="#9B51E0"/>
                                            <circle cx="100" cy="40" r="3" fill="#E0D9ED"/>
                                            <circle cx="20" cy="60" r="3" fill="#E0D9ED"/>
                                            <circle cx="40" cy="60" r="3" fill="#9B51E0"/>
                                            <circle cx="60" cy="60" r="3" fill="#9B51E0"/>
                                            <circle cx="80" cy="60" r="3" fill="#E0D9ED"/>
                                            <circle cx="100" cy="60" r="3" fill="#E0D9ED"/>
                                            <circle cx="20" cy="80" r="3" fill="#E0D9ED"/>
                                            <circle cx="40" cy="80" r="3" fill="#E0D9ED"/>
                                            <circle cx="60" cy="80" r="3" fill="#E0D9ED"/>
                                            <circle cx="80" cy="80" r="3" fill="#E0D9ED"/>
                                            <circle cx="100" cy="80" r="3" fill="#E0D9ED"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 4: Website Design -->
                    <div class="service-card">
                        <div class="service-card-inner">
                            <div class="service-card-header">
                                <h3 class="service-card-title">Дизайн сайтів</h3>
                                <a href="#book-call" class="service-card-action-btn" aria-label="Забронювати дзвінок" data-cta="book-call">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 12L12 4M12 4H6M12 4V10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="service-card-divider"></div>
                            <div class="service-card-content">
                                <p class="service-card-description">Ваш сайт має не лише гарно виглядати й швидко вантажитись. Він будує довіру, збирає кліки й ростить конверсію. Нагороди? Лише бонус.</p>
                                <div class="service-card-footer">
                                    <a href="#book-call" class="service-card-learn-btn" data-cta="book-call">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 11L11 3M11 3H5M11 3V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span>Забронювати дзвінок</span>
                                    </a>
                                    <div class="service-card-pattern">
                                        <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="15" cy="15" r="3" fill="#E0D9ED"/>
                                            <circle cx="30" cy="15" r="3" fill="#E0D9ED"/>
                                            <circle cx="45" cy="15" r="3" fill="#9B51E0"/>
                                            <circle cx="60" cy="15" r="3" fill="#E0D9ED"/>
                                            <circle cx="75" cy="15" r="3" fill="#9B51E0"/>
                                            <circle cx="90" cy="15" r="3" fill="#E0D9ED"/>
                                            <circle cx="105" cy="15" r="3" fill="#E0D9ED"/>
                                            <circle cx="15" cy="30" r="3" fill="#E0D9ED"/>
                                            <circle cx="30" cy="30" r="3" fill="#9B51E0"/>
                                            <circle cx="45" cy="30" r="3" fill="#9B51E0"/>
                                            <circle cx="60" cy="30" r="3" fill="#9B51E0"/>
                                            <circle cx="75" cy="30" r="3" fill="#E0D9ED"/>
                                            <circle cx="90" cy="30" r="3" fill="#9B51E0"/>
                                            <circle cx="105" cy="30" r="3" fill="#E0D9ED"/>
                                            <circle cx="15" cy="45" r="3" fill="#E0D9ED"/>
                                            <circle cx="30" cy="45" r="3" fill="#9B51E0"/>
                                            <circle cx="45" cy="45" r="3" fill="#9B51E0"/>
                                            <circle cx="60" cy="45" r="3" fill="#E0D9ED"/>
                                            <circle cx="75" cy="45" r="3" fill="#9B51E0"/>
                                            <circle cx="90" cy="45" r="3" fill="#E0D9ED"/>
                                            <circle cx="105" cy="45" r="3" fill="#E0D9ED"/>
                                            <circle cx="15" cy="60" r="3" fill="#E0D9ED"/>
                                            <circle cx="30" cy="60" r="3" fill="#E0D9ED"/>
                                            <circle cx="45" cy="60" r="3" fill="#9B51E0"/>
                                            <circle cx="60" cy="60" r="3" fill="#E0D9ED"/>
                                            <circle cx="75" cy="60" r="3" fill="#E0D9ED"/>
                                            <circle cx="90" cy="60" r="3" fill="#E0D9ED"/>
                                            <circle cx="105" cy="60" r="3" fill="#E0D9ED"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Studio Signature Section -->
        <section class="studio-signature-section" id="studio-signature">
            <div class="wide-container">
                <div class="studio-signature-shell">
                    <div class="studio-signature-copy">
                        <span class="studio-signature-kicker">Studio Signature</span>
                        <h2 class="studio-signature-title">Сайт, що виглядає як категорія, а не як шаблон.</h2>
                        <p class="studio-signature-description">
                            Ми збираємо бренд, інтерфейс і сенси в одну точку уваги. Результат: сторінка не просто красива, вона веде користувача по чіткому маршруту до заявки.
                        </p>
                        <div class="studio-signature-points">
                            <div class="studio-signature-point">
                                <span class="studio-signature-point-index">01</span>
                                <span class="studio-signature-point-text">Стратегія позиціонування</span>
                            </div>
                            <div class="studio-signature-point">
                                <span class="studio-signature-point-index">02</span>
                                <span class="studio-signature-point-text">Візуальна система + motion</span>
                            </div>
                            <div class="studio-signature-point">
                                <span class="studio-signature-point-index">03</span>
                                <span class="studio-signature-point-text">Запуск і ріст конверсії</span>
                            </div>
                        </div>
                        <a href="#book-call" class="studio-signature-cta" data-cta="book-call">
                            <span>Забронювати дзвінок</span>
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 11L11 3M11 3H5M11 3V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <div class="studio-signature-visual">
                        <div class="studio-orbit-card">
                            <div class="studio-orbit-glow"></div>
                            <div class="studio-orbit-grid"></div>
                            <div class="studio-orbit-center">
                                <span class="studio-orbit-label">Gotry Studio</span>
                                <strong class="studio-orbit-value">Premium Web Systems</strong>
                            </div>
                            <div class="studio-orbit-chip chip-top">Brand</div>
                            <div class="studio-orbit-chip chip-right">UX/UI</div>
                            <div class="studio-orbit-chip chip-bottom">Web</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team-section" id="team">
            <div class="wide-container">
                <div class="team-scroll-track">
                    <div class="team-sticky-shell">
                        <div class="team-header">
                            <span class="team-kicker">Команда</span>
                            <h2 class="team-title">Команда, що перетворює ідею на сильний цифровий продукт.</h2>
                            <p class="team-description">2 дизайнери та 3 розробники: від креативної концепції й брендбуку до WordPress, OpenCart і full-code реалізації.</p>
                        </div>

                        <div class="team-roster">
                            <div class="team-roster-row is-active" data-team-image="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=1600&q=80" data-team-alt="Креативний дизайнер" data-team-quote-one="Креативний дизайнер формує візуальну драматургію сайту і створює сильний перший екран, який запамʼятовується." data-team-quote-two="Він відповідає за тон бренду в інтерфейсі, композицію та відчуття преміальності в кожному блоці." data-team-name="Креативний дизайнер" data-team-meta="Сайти, сторітелінг, концепти">
                                <span class="team-roster-name">Креативний дизайнер</span>
                                <span class="team-roster-role">Сайти, сторітелінг, концепти</span>
                            </div>
                            <div class="team-roster-row" data-team-image="https://images.unsplash.com/photo-1545239351-1141bd82e8a6?auto=format&fit=crop&w=1600&q=80" data-team-alt="Senior бренд-дизайнер" data-team-quote-one="Senior бренд-дизайнер вибудовує цілісну бренд-систему: від логотипу до правил використання в digital і офлайні." data-team-quote-two="Логобуки і брендбуки створюють впізнаваність та системність, щоб бізнес виглядав доросло на будь-якому носії." data-team-name="Senior бренд-дизайнер" data-team-meta="Логобуки, брендбуки, айдентика">
                                <span class="team-roster-name">Senior бренд-дизайнер</span>
                                <span class="team-roster-role">Логобуки, брендбуки, айдентика</span>
                            </div>
                            <div class="team-roster-row" data-team-image="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=1600&q=80" data-team-alt="Web Developer WordPress Elementor" data-team-quote-one="Web Developer швидко збирає production-версії на WordPress + Elementor без втрати якості дизайн-макетів." data-team-quote-two="Оптимальний вибір, коли важлива швидкість запуску, стабільність і зручна робота з контентом для команди клієнта." data-team-name="Web Developer" data-team-meta="WordPress + Elementor">
                                <span class="team-roster-name">Web Developer</span>
                                <span class="team-roster-role">WordPress + Elementor</span>
                            </div>
                            <div class="team-roster-row" data-team-image="https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&fit=crop&w=1600&q=80" data-team-alt="E-commerce Developer OpenCart" data-team-quote-one="E-commerce Developer на OpenCart закриває структуру каталогу, сторінки товару, кошик, checkout і базові інтеграції." data-team-quote-two="Фокус на конверсії магазину, швидкості роботи та зручному управлінні товарами в адмін-панелі." data-team-name="E-commerce Developer" data-team-meta="OpenCart, каталог, checkout">
                                <span class="team-roster-name">E-commerce Developer</span>
                                <span class="team-roster-role">OpenCart, каталог, checkout</span>
                            </div>
                            <div class="team-roster-row" data-team-image="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?auto=format&fit=crop&w=1600&q=80" data-team-alt="Full-code Developer" data-team-quote-one="Full-code Developer бере задачі, де потрібні кастомні модулі, API-інтеграції та нестандартна бізнес-логіка." data-team-quote-two="Це шар, який дає контроль, масштабованість і технічну гнучкість для складних продуктів." data-team-name="Full-code Developer" data-team-meta="Кастомна логіка, API, performance">
                                <span class="team-roster-name">Full-code Developer</span>
                                <span class="team-roster-role">Кастомна логіка, API, performance</span>
                            </div>
                        </div>

                        <article class="team-focus-card">
                            <div class="team-focus-media">
                                <img
                                    src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=1600&q=80"
                                    alt="Команда на стратегічній сесії"
                                    class="team-focus-photo js-team-focus-photo"
                                    loading="lazy"
                                >
                            </div>
                            <div class="team-focus-overlay"></div>
                            <div class="team-focus-content">
                                <p class="team-focus-quote js-team-focus-quote-one">
                                    Ми поєднуємо креатив, бренд та інженерію так, щоб сайт виглядав преміально, швидко запускався і ріс у конверсії.
                                </p>
                                <p class="team-focus-quote js-team-focus-quote-two">
                                    Працюємо від концепту до production: WordPress, Elementor, OpenCart та full-code для складних задач.
                                </p>
                                <div class="team-focus-meta">
                                    <strong class="js-team-focus-name">Команда Gotry</strong>
                                    <span class="js-team-focus-meta">Design • Brand • Web • OpenCart • Full-code</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="team-footer-line">
                    <span>Один контакт</span>
                    <span>Повний цикл</span>
                    <span>Прозорі дедлайни</span>
                    <span>WordPress / Elementor / OpenCart</span>
                </div>

                <a href="#book-call" class="team-cta" data-cta="book-call">
                    <span>Забронювати дзвінок і стартувати</span>
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 11L11 3M11 3H5M11 3V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </section>

        <!-- Process Section -->
        <section class="process-section" id="process">
            <div class="wide-container">
                <div class="process-header">
                    <span class="process-kicker">Process</span>
                    <h2 class="process-title">Як ми працюємо: 4 кроки до запуску</h2>
                </div>

                <div class="process-grid">
                    <article class="process-card">
                        <span class="process-index">01</span>
                        <h3 class="process-step-title">Бриф</h3>
                        <p class="process-step-copy">Фіксуємо бізнес-цілі, ЦА, KPI, контент та технічні обмеження.</p>
                    </article>
                    <article class="process-card">
                        <span class="process-index">02</span>
                        <h3 class="process-step-title">Концепт</h3>
                        <p class="process-step-copy">Будуємо структуру сторінки, тональність та візуальний напрям.</p>
                    </article>
                    <article class="process-card">
                        <span class="process-index">03</span>
                        <h3 class="process-step-title">Продакшн</h3>
                        <p class="process-step-copy">Дизайн + верстка + інтеграції: збираємо сайт у робочий продукт.</p>
                    </article>
                    <article class="process-card">
                        <span class="process-index">04</span>
                        <h3 class="process-step-title">Запуск</h3>
                        <p class="process-step-copy">Тестуємо, оптимізуємо швидкість і віддаємо готовий сайт у ріст.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- Fit / Anti-fit Section -->
        <section class="fit-section" id="fit">
            <div class="wide-container">
                <div class="fit-shell">
                    <div class="fit-column fit-good">
                        <span class="fit-label">Ми підходимо</span>
                        <ul class="fit-list">
                            <li>Стартапам і SMB, яким потрібно більше цільових звернень із сайту.</li>
                            <li>Командам, де є відповідальний за рішення та швидкий фідбек.</li>
                            <li>Проєктам, де важливі бренд, швидкість запуску й технічна якість одночасно.</li>
                        </ul>
                    </div>
                    <div class="fit-column fit-bad">
                        <span class="fit-label">Ми не підходимо</span>
                        <ul class="fit-list">
                            <li>Якщо головний критерій: “дешево і на завтра”.</li>
                            <li>Якщо немає відповідального з боку клієнта на контент і погодження.</li>
                            <li>Якщо потрібна лише копія шаблону без стратегії та комерційної логіки.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section" id="faq">
            <div class="wide-container">
                <div class="faq-header">
                    <span class="faq-kicker">FAQ</span>
                    <h2 class="faq-title">Питання, які закривають рішення перед стартом</h2>
                </div>
                <div class="faq-list">
                    <details class="faq-item" open>
                        <summary>Які строки старту і релізу?</summary>
                        <div class="faq-answer"><p>Після дзвінка фіксуємо scope і стартуємо зазвичай протягом 3-7 днів. Термін релізу залежить від формату: від 4 до 16 тижнів. <a href="#book-call" data-cta="book-call">Забронювати дзвінок</a>.</p></div>
                    </details>
                    <details class="faq-item">
                        <summary>Як формується бюджет?</summary>
                        <div class="faq-answer"><p>Працюємо за hybrid-моделлю: є діапазон “від”, а фінальна вартість залежить від обсягу інтеграцій, контенту і кількості екранів. <a href="#book-call" data-cta="book-call">Уточнити на дзвінку</a>.</p></div>
                    </details>
                    <details class="faq-item">
                        <summary>Скільки раундів правок включено?</summary>
                        <div class="faq-answer"><p>Кожен етап має заздалегідь погоджені раунди ревʼю. Це тримає дедлайни і не розмиває якість. <a href="#book-call" data-cta="book-call">Обговорити ваш процес</a>.</p></div>
                    </details>
                    <details class="faq-item">
                        <summary>Кому належить дизайн і код після релізу?</summary>
                        <div class="faq-answer"><p>Після оплати етапу передаємо вихідні матеріали, макети і кодову базу згідно з домовленим форматом у договорі.</p></div>
                    </details>
                    <details class="faq-item">
                        <summary>Є підтримка після запуску?</summary>
                        <div class="faq-answer"><p>Так, можемо вести проект у post-launch режимі: технічна підтримка, контентні правки, A/B-поліпшення конверсії.</p></div>
                    </details>
                    <details class="faq-item">
                        <summary>Що потрібно від мене на старті?</summary>
                        <div class="faq-answer"><p>Ціль бізнесу, продуктова пропозиція, поточні обмеження і один відповідальний контакт для оперативного рішень.</p></div>
                    </details>
                </div>
            </div>
        </section>

        <!-- Book Call Section -->
        <section class="book-call-section" id="book-call">
            <div class="wide-container">
                <div class="book-call-shell">
                    <div class="book-call-copy">
                        <span class="book-call-kicker">Primary CTA</span>
                        <h2 class="book-call-title">Забронюйте 30 хв і отримайте чіткий план запуску</h2>
                        <p class="book-call-description">На дзвінку розкладемо ваш проект по етапах: формат, реалістичні строки, бюджетний діапазон та найближчий план дій.</p>
                    </div>
                    <div class="book-call-actions">
                        <a href="<?php echo esc_url($booking_url); ?>" target="_blank" rel="noopener noreferrer" class="book-call-primary" data-cta="book-call">
                            <span>Відкрити календар</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7 17L17 7M7 7h10v10"/>
                            </svg>
                        </a>
                        <a href="https://t.me/notarikon" target="_blank" rel="noopener noreferrer" class="book-call-secondary" data-cta="book-call">
                            <span>Написати в Telegram</span>
                        </a>
                        <a href="#contact" class="book-call-tertiary" data-cta="send-brief">
                            <span>Не готові до дзвінка? Надішліть бриф</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section" id="contact">
            <div class="wide-container">
                <h2 class="contact-title">Не готові до дзвінка? Надішліть бриф</h2>
                <p class="contact-subtitle">Якщо зручніше в письмовому форматі, заповніть коротку форму і ми повернемось з конкретним планом.</p>
                <div class="contact-divider"></div>
                <div class="contact-wrapper">
                    <!-- Left: Contact Form -->
                    <div class="contact-form-wrapper">
                        <?php $contact_status = isset($_GET['contact_status']) ? sanitize_key($_GET['contact_status']) : ''; ?>
                        <?php if ($contact_status === 'success') : ?>
                            <div class="contact-form-alert contact-form-alert-success">Дякуємо! Повідомлення надіслано. Зв'яжемося з вами найближчим часом.</div>
                        <?php elseif ($contact_status === 'invalid') : ?>
                            <div class="contact-form-alert contact-form-alert-error">Будь ласка, заповніть коректно всі поля форми.</div>
                        <?php elseif ($contact_status === 'error') : ?>
                            <div class="contact-form-alert contact-form-alert-error">Не вдалося надіслати повідомлення. Спробуйте ще раз або напишіть у Telegram.</div>
                        <?php endif; ?>

                        <form class="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                            <input type="hidden" name="action" value="gotry_contact_submit">
                            <?php wp_nonce_field('gotry_contact_submit', 'gotry_contact_nonce'); ?>
                            <div class="contact-form-field">
                                <label for="contact-name" class="contact-form-label">Ім'я</label>
                                <input type="text" id="contact-name" name="name" class="contact-form-input" required>
                            </div>
                            <div class="contact-form-field">
                                <label for="contact-email" class="contact-form-label">Ел. пошта</label>
                                <input type="email" id="contact-email" name="email" class="contact-form-input" required>
                            </div>
                            <div class="contact-form-field">
                                <label for="contact-message" class="contact-form-label">Повідомлення</label>
                                <textarea id="contact-message" name="message" class="contact-form-textarea" rows="6" required></textarea>
                            </div>
                            <button type="submit" class="contact-form-submit" data-cta="send-brief">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 17L17 7M7 7h10v10"/>
                                </svg>
                                <span>Надіслати бриф</span>
                            </button>
                        </form>
                    </div>
                    
                    <!-- Right: Contact Info -->
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <span class="contact-info-label">Ел. пошта</span>
                            <a href="mailto:hello@antongotry.dev" class="contact-info-link">hello@antongotry.dev</a>
                        </div>
                        <div class="contact-info-item">
                            <span class="contact-info-label">Телеграм</span>
                            <a href="https://t.me/notarikon" target="_blank" rel="noopener noreferrer" class="contact-info-link">@notarikon</a>
                        </div>
                        <div class="contact-info-item">
                            <span class="contact-info-label">Локація</span>
                            <span class="contact-info-text">Україна</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Social Links / Credentials Grid Section -->
        <section class="social-links-section">
            <div class="wide-container">
                <div class="social-links-grid">
                    <a href="#cases" class="social-link-item" data-cta="view-cases">
                        <div class="social-link-icon">
                            <span class="social-link-label">01</span>
                        </div>
                        <span class="social-link-text">Публічні кейси</span>
                    </a>
                    <a href="#offer" class="social-link-item">
                        <div class="social-link-icon">
                            <span class="social-link-label">02</span>
                        </div>
                        <span class="social-link-text">Формати співпраці</span>
                    </a>
                    <a href="#process" class="social-link-item">
                        <div class="social-link-icon">
                            <span class="social-link-label">03</span>
                        </div>
                        <span class="social-link-text">4 кроки процесу</span>
                    </a>
                    <a href="<?php echo esc_url($booking_url); ?>" target="_blank" rel="noopener noreferrer" class="social-link-item" data-cta="book-call">
                        <div class="social-link-icon">
                            <span class="social-link-label">04</span>
                        </div>
                        <span class="social-link-text">Календар 30 хв</span>
                    </a>
                    <a href="https://t.me/notarikon" target="_blank" rel="noopener noreferrer" class="social-link-item" data-cta="book-call">
                        <div class="social-link-icon">
                            <span class="social-link-label">05</span>
                        </div>
                        <span class="social-link-text">Telegram</span>
                    </a>
                    <a href="https://github.com/Antongotry/gotrydev" target="_blank" rel="noopener noreferrer" class="social-link-item">
                        <div class="social-link-icon">
                            <span class="social-link-label">06</span>
                        </div>
                        <span class="social-link-text">GitHub</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer Anchors Sections -->
        <section class="footer-meta-section" id="credentials">
            <div class="wide-container">
                <div class="footer-meta-shell">
                    <h2 class="footer-meta-title">Нагороди та визнання</h2>
                    <p class="footer-meta-copy">Наші роботи потрапляли в підбірки дизайн-платформ і професійних спільнот. Головний критерій для нас: реальний вплив дизайну на бізнес-результат.</p>
                </div>
            </div>
        </section>

        <section class="footer-meta-section" id="terms">
            <div class="wide-container">
                <div class="footer-meta-shell">
                    <h2 class="footer-meta-title">Умови співпраці</h2>
                    <p class="footer-meta-copy">Працюємо по етапах із зафіксованим scope, дедлайнами і прозорими статусами. Кожен етап погоджується перед стартом наступного.</p>
                </div>
            </div>
        </section>

        <section class="footer-meta-section" id="privacy">
            <div class="wide-container">
                <div class="footer-meta-shell">
                    <h2 class="footer-meta-title">Політика конфіденційності</h2>
                    <p class="footer-meta-copy">Контактні дані з форми використовуються лише для комунікації по проєкту і не передаються третім сторонам без вашої згоди.</p>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Footer -->
<footer class="site-footer-main">
    <div class="wide-container">
        <div class="footer-content">
            <div class="footer-copyright">
                <span>2026 © Gotry</span>
            </div>
            <div class="footer-links">
                <a href="#credentials" class="footer-link">Наші нагороди</a>
                <a href="#terms" class="footer-link">Умови співпраці</a>
                <a href="#privacy" class="footer-link">Політика конфіденційності</a>
            </div>
        </div>
    </div>
</footer>

<?php get_footer(); ?>
