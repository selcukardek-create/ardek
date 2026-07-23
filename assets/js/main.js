/**
 * Selçuk Üniversitesi - Modern Premium Web Template
 * Enhanced JavaScript with Modern ES6+ Features
 * Version 2.0 - 2025
 */

(function() {
    'use strict';

    // ==================== UTILITY FUNCTIONS ====================
    const debounce = (func, wait) => {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    };

    const throttle = (func, limit) => {
        let inThrottle;
        return function(...args) {
            if (!inThrottle) {
                func.apply(this, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    };

    const sendAgentLog = ({ hypothesisId, location, message, data, runId = 'pre-fix' }) => {
        // #region agent log
        fetch('http://127.0.0.1:7242/ingest/cc20a9f1-754c-421d-9dd5-8d3919b3ee61', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                sessionId: 'debug-session',
                runId,
                hypothesisId,
                location,
                message,
                data,
                timestamp: Date.now()
            })
        }).catch(() => {});
        // #endregion
    };

    // ==================== HEADER SCROLL - ENHANCED ====================
    const initHeaderScroll = () => {
        const header = document.getElementById('header');
        if (!header) return;

        const handleScroll = throttle(() => {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }, 10);

        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll(); // Initial check
    };

    // ==================== MEGA MENU - ENHANCED ====================
    const initMegaMenu = () => {
        const navItems = document.querySelectorAll('.nav-item');
        const megaMenus = document.querySelectorAll('.mega-menu');
        const header = document.getElementById('header');
        let menuTimeout;

        const closeAllMenus = () => {
            megaMenus.forEach(menu => menu.classList.remove('active'));
            navItems.forEach(nav => nav.classList.remove('active'));
            
            if (window.scrollY <= 100) {
                header?.classList.remove('mega-open');
            }
        };

        navItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                clearTimeout(menuTimeout);
                const menuId = this.dataset.menu;
                
                // Close all menus
                megaMenus.forEach(menu => menu.classList.remove('active'));
                navItems.forEach(nav => nav.classList.remove('active'));
                
                // Open current menu
                const targetMenu = document.getElementById(`menu-${menuId}`);
                if (targetMenu) {
                    targetMenu.classList.add('active');
                    this.classList.add('active');
                    header?.classList.add('mega-open');
                }
            });
            
            item.addEventListener('mouseleave', function() {
                menuTimeout = setTimeout(closeAllMenus, 150);
            });
        });
        
        megaMenus.forEach(menu => {
            menu.addEventListener('mouseenter', () => clearTimeout(menuTimeout));
            menu.addEventListener('mouseleave', () => {
                menuTimeout = setTimeout(closeAllMenus, 150);
            });
        });
        
        // Close menu on click outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.nav-item') && !e.target.closest('.mega-menu')) {
                closeAllMenus();
            }
        });
    };

    // ==================== HERO SLIDER - ENHANCED ====================
    const initHeroSlider = () => {
        const heroSlides = document.querySelectorAll('.hero-slide');
        const heroTitles = document.querySelectorAll('.hero-title');
        const heroDots = document.querySelectorAll('.hero-dot');
        const heroThumbs = document.querySelectorAll('.hero-thumb');
        
        if (heroSlides.length === 0) return;

        let currentSlide = 0;
        let heroInterval;

        const showSlide = (index) => {
            // Wrap around
            if (index >= heroSlides.length) index = 0;
            if (index < 0) index = heroSlides.length - 1;
            
            currentSlide = index;
            
            // Update slides with smooth transition
            heroSlides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
            
            // Update titles with fade
            heroTitles.forEach((title, i) => {
                title.classList.toggle('active', i === index);
            });
            
            // Update dots
            heroDots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
            
            // Update thumbnails
            heroThumbs.forEach((thumb, i) => {
                thumb.classList.toggle('active', i === index);
            });
        };
        
        const nextSlide = () => {
            const nextIndex = currentSlide + 1;
            stopHeroSlider();
            showSlide(nextIndex);
            startHeroSlider();
        };
        
        const startHeroSlider = () => {
            // Check if current slide has video, if yes use 41 seconds, otherwise 5 seconds
            const currentSlideElement = heroSlides[currentSlide];
            const hasVideo = currentSlideElement?.querySelector('video');
            const intervalTime = hasVideo ? 41000 : 5000;
            heroInterval = setInterval(nextSlide, intervalTime);
        };
        
        // Update interval when slide changes
        const showSlideWithInterval = (index) => {
            stopHeroSlider();
            showSlide(index);
            startHeroSlider();
        };
        
        const stopHeroSlider = () => {
            clearInterval(heroInterval);
        };
        
        // Dot click handlers
        heroDots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                stopHeroSlider();
                showSlide(index);
                startHeroSlider();
            });
        });
        
        // Thumbnail click handlers
        heroThumbs.forEach((thumb, index) => {
            thumb.addEventListener('click', () => {
                stopHeroSlider();
                showSlide(index);
                startHeroSlider();
            });
        });
        
        // Pause on hover
        const hero = document.querySelector('.hero');
        if (hero) {
            hero.addEventListener('mouseenter', stopHeroSlider);
            hero.addEventListener('mouseleave', startHeroSlider);
        }
        
        // Start hero slider
        startHeroSlider();
    };

    // ==================== MEGA MENU SLIDERS - ENHANCED ====================
    const initMegaSliders = () => {
        const megaSliders = document.querySelectorAll('.mega-menu-slider');
        
        megaSliders.forEach(slider => {
            const slides = slider.querySelectorAll('.mega-slide');
            const dots = slider.querySelectorAll('.mega-dot');
            if (slides.length === 0) return;
            
            let currentIndex = 0;
            let sliderInterval;

            const showMegaSlide = (index) => {
                if (index >= slides.length) index = 0;
                if (index < 0) index = slides.length - 1;
                
                currentIndex = index;
                
                slides.forEach((slide, i) => {
                    slide.classList.toggle('active', i === index);
                });
                
                dots.forEach((dot, i) => {
                    dot.classList.toggle('active', i === index);
                });
            };
            
            const nextMegaSlide = () => showMegaSlide(currentIndex + 1);
            
            // Auto slide
            sliderInterval = setInterval(nextMegaSlide, 4000);
            
            // Dot clicks
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    clearInterval(sliderInterval);
                    showMegaSlide(index);
                    sliderInterval = setInterval(nextMegaSlide, 4000);
                });
            });
            
            // Pause on hover
            slider.addEventListener('mouseenter', () => clearInterval(sliderInterval));
            slider.addEventListener('mouseleave', () => {
                sliderInterval = setInterval(nextMegaSlide, 4000);
            });
        });
    };

    // ==================== SCROLL TO TOP - ENHANCED ====================
    const initScrollToTop = () => {
        const scrollTopBtn = document.getElementById('scrollTop');
        
        if (!scrollTopBtn) return;
        
        const handleScroll = throttle(() => {
            if (window.scrollY > 500) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        }, 100);
        
        window.addEventListener('scroll', handleScroll, { passive: true });
        
        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    };

    // ==================== MOBILE MENU - ENHANCED ====================
    const initMobileMenu = () => {
        const mobileToggle = document.querySelector('.mobile-toggle');
        const body = document.body;
        const headerRight = document.querySelector('.header-right');
        
        if (!mobileToggle) return;
        
        mobileToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            this.classList.toggle('active');
            body.classList.toggle('mobile-menu-open');
        });
        
        // Close on outside click (only when menu is open)
        document.addEventListener('click', (e) => {
            if (body.classList.contains('mobile-menu-open')) {
                if (!e.target.closest('.mobile-toggle') && 
                    !e.target.closest('.header-right')) {
                    mobileToggle.classList.remove('active');
                    body.classList.remove('mobile-menu-open');
                }
            }
        });
        
        // Close menu when clicking on a link inside the menu
        if (headerRight) {
            headerRight.addEventListener('click', (e) => {
                if (e.target.tagName === 'A' || e.target.closest('a')) {
                    // Small delay to allow navigation
                    setTimeout(() => {
                        mobileToggle.classList.remove('active');
                        body.classList.remove('mobile-menu-open');
                    }, 100);
                }
            });
        }
        
        // Mobile Menu Accordion
        const mobileMenuItems = document.querySelectorAll('.mobile-menu-item');
        mobileMenuItems.forEach(item => {
            const header = item.querySelector('.mobile-menu-header');
            if (header) {
                header.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const isActive = item.classList.contains('active');
                    
                    // Close all other items
                    mobileMenuItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('active');
                            const otherHeader = otherItem.querySelector('.mobile-menu-header');
                            if (otherHeader) otherHeader.classList.remove('active');
                        }
                    });
                    
                    // Toggle current item
                    if (isActive) {
                        item.classList.remove('active');
                        header.classList.remove('active');
                    } else {
                        item.classList.add('active');
                        header.classList.add('active');
                    }
                });
            }
        });
        
        // Close accordion items when clicking on links
        const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // Don't prevent default to allow navigation
                // Close menu after a short delay
                setTimeout(() => {
                    mobileToggle.classList.remove('active');
                    body.classList.remove('mobile-menu-open');
                    // Close all accordion items
                    mobileMenuItems.forEach(item => {
                        item.classList.remove('active');
                        const header = item.querySelector('.mobile-menu-header');
                        if (header) header.classList.remove('active');
                    });
                }, 200);
            });
        });
    };

    // ==================== SMOOTH SCROLL - ENHANCED ====================
    const initSmoothScroll = () => {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || href === '#!') return;
                
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const headerOffset = 100;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    };

    // ==================== SCROLL ANIMATIONS - ENHANCED ====================
    const initScrollAnimations = () => {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        // Observe sections
        document.querySelectorAll('.section').forEach(section => {
            section.classList.add('animate-ready');
            observer.observe(section);
        });
        
        // Observe cards
        document.querySelectorAll('.news-card, .event-card, .announcement-card, .campus-card').forEach(card => {
            card.classList.add('animate-ready');
            observer.observe(card);
        });
    };

    // ==================== NEWS SLIDER - ENHANCED ====================
    const initNewsSlider = () => {
        const newsSlider = document.querySelector('.news-featured-slider');
        if (!newsSlider) return;
        
        const newsSlides = newsSlider.querySelectorAll('.news-slide');
        const newsPrev = newsSlider.querySelector('.news-slider-prev');
        const newsNext = newsSlider.querySelector('.news-slider-next');
        const newsContainer = newsSlider.querySelector('.news-slider-container');
        
        if (newsSlides.length === 0) return;
        
        let newsCurrentSlide = 0;
        let newsInterval;
        let isInitialized = false;

        const showNewsSlide = (index) => {
            if (index >= newsSlides.length) index = 0;
            if (index < 0) index = newsSlides.length - 1;
            
            newsCurrentSlide = index;
            
            newsSlides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.add('active');
                    slide.style.zIndex = '2';
                } else {
                    slide.classList.remove('active');
                    slide.style.zIndex = '1';
                }
            });
        };
        
        const nextNewsSlide = () => showNewsSlide(newsCurrentSlide + 1);
        const prevNewsSlide = () => showNewsSlide(newsCurrentSlide - 1);
        
        // Initialize first slide
        if (!isInitialized) {
            showNewsSlide(0);
            isInitialized = true;
        }
        
        // Auto slide
        newsInterval = setInterval(nextNewsSlide, 6000);
        
        // Button controls
        if (newsPrev) {
            newsPrev.addEventListener('click', () => {
                clearInterval(newsInterval);
                prevNewsSlide();
                newsInterval = setInterval(nextNewsSlide, 6000);
            });
        }
        
        if (newsNext) {
            newsNext.addEventListener('click', () => {
                clearInterval(newsInterval);
                nextNewsSlide();
                newsInterval = setInterval(nextNewsSlide, 6000);
            });
        }
        
        // Pause on hover
        newsSlider.addEventListener('mouseenter', () => clearInterval(newsInterval));
        newsSlider.addEventListener('mouseleave', () => {
            newsInterval = setInterval(nextNewsSlide, 6000);
        });
        
        // Fix slider on scroll - ensure images are loaded
        const fixSliderOnScroll = debounce(() => {
            newsSlides.forEach(slide => {
                const img = slide.querySelector('.news-slide-image img');
                if (img && !img.complete) {
                    img.addEventListener('load', () => {
                        showNewsSlide(newsCurrentSlide);
                    }, { once: true });
                }
            });
        }, 100);
        
        window.addEventListener('scroll', fixSliderOnScroll, { passive: true });
    };

    // ==================== ACADEMIC SLIDER - ENHANCED ====================
    const initAcademicSlider = () => {
        const academicSlider = document.querySelector('.academic-slider');
        if (!academicSlider) return;
        
        const academicSlides = academicSlider.querySelectorAll('.academic-slide');
        const academicDots = academicSlider.querySelectorAll('.academic-dot');
        const prevBtn = academicSlider.querySelector('.academic-prev');
        const nextBtn = academicSlider.querySelector('.academic-next');
        
        if (academicSlides.length === 0) return;
        
        let currentAcademicSlide = 0;
        let academicInterval;

        const showAcademicSlide = (index) => {
            if (index >= academicSlides.length) index = 0;
            if (index < 0) index = academicSlides.length - 1;
            
            currentAcademicSlide = index;
            
            academicSlides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
            
            academicDots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
        };
        
        const nextAcademicSlide = () => showAcademicSlide(currentAcademicSlide + 1);
        const prevAcademicSlide = () => showAcademicSlide(currentAcademicSlide - 1);
        
        // Auto slide
        academicInterval = setInterval(nextAcademicSlide, 6000);
        
        // Button controls
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                clearInterval(academicInterval);
                prevAcademicSlide();
                academicInterval = setInterval(nextAcademicSlide, 6000);
            });
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                clearInterval(academicInterval);
                nextAcademicSlide();
                academicInterval = setInterval(nextAcademicSlide, 6000);
            });
        }
        
        // Dot controls
        academicDots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                clearInterval(academicInterval);
                showAcademicSlide(index);
                academicInterval = setInterval(nextAcademicSlide, 6000);
            });
        });
        
        // Pause on hover
        academicSlider.addEventListener('mouseenter', () => clearInterval(academicInterval));
        academicSlider.addEventListener('mouseleave', () => {
            academicInterval = setInterval(nextAcademicSlide, 6000);
        });
    };

    // ==================== RANKING NEWS SLIDER ====================
    const initRankingSlider = () => {
        const rankingWrapper = document.querySelector('.ranking-news-wrapper');
        if (!rankingWrapper) return;

        const rankingCards = rankingWrapper.querySelectorAll('.ranking-news-card');
        const prevBtn = rankingWrapper.querySelector('.ranking-prev');
        const nextBtn = rankingWrapper.querySelector('.ranking-next');
        
        if (rankingCards.length === 0) return;

        let currentIndex = 0;
        let rankingInterval;

        const showRankingCard = (index) => {
            rankingCards.forEach((card, i) => {
                if (i === index) {
                    card.classList.add('active');
                } else {
                    card.classList.remove('active');
                }
            });
        };

        const nextRankingCard = () => {
            currentIndex = (currentIndex + 1) % rankingCards.length;
            showRankingCard(currentIndex);
        };

        const prevRankingCard = () => {
            currentIndex = (currentIndex - 1 + rankingCards.length) % rankingCards.length;
            showRankingCard(currentIndex);
        };

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                clearInterval(rankingInterval);
                nextRankingCard();
                rankingInterval = setInterval(nextRankingCard, 5000);
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                clearInterval(rankingInterval);
                prevRankingCard();
                rankingInterval = setInterval(nextRankingCard, 5000);
            });
        }

        // Auto-play
        rankingInterval = setInterval(nextRankingCard, 5000);

        // Pause on hover
        rankingWrapper.addEventListener('mouseenter', () => clearInterval(rankingInterval));
        rankingWrapper.addEventListener('mouseleave', () => {
            rankingInterval = setInterval(nextRankingCard, 5000);
        });

        // Initialize
        showRankingCard(0);
    };

    // ==================== EVENTS SLIDER ====================
    const initEventsSlider = () => {
        const eventsSlider = document.getElementById('eventsSlider');
        const prevBtn = document.getElementById('eventsPrev');
        const nextBtn = document.getElementById('eventsNext');
        
        if (!eventsSlider) return;
        
        const scrollAmount = 340; // Card width + gap
        
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                eventsSlider.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            });
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                eventsSlider.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            });
        }
    };

    // ==================== ANNOUNCEMENTS SLIDER ====================
    const initAnnouncementsSlider = () => {
        const announcementsGrid = document.querySelector('.announcements-grid');
        const navButtons = document.querySelectorAll('.announcements-nav-btn');
        
        if (!announcementsGrid) {
            console.log('Announcements grid not found');
            return;
        }
        
        if (navButtons.length === 0) {
            console.log('Announcements nav buttons not found');
            return;
        }
        
        const cards = Array.from(announcementsGrid.querySelectorAll('.announcement-card'));
        if (cards.length === 0) {
            console.log('Announcement cards not found');
            return;
        }
        
        let currentIndex = 0;
        
        const getCardsPerView = () => {
            if (window.innerWidth >= 1200) return 4;
            if (window.innerWidth >= 768) return 2;
            return 1;
        };
        
        const updateSlider = () => {
            const cardsPerView = getCardsPerView();
            const totalSlides = Math.ceil(cards.length / cardsPerView);
            
            // Ensure currentIndex is within bounds
            if (currentIndex >= totalSlides) currentIndex = 0;
            if (currentIndex < 0) currentIndex = totalSlides - 1;
            
            const startIndex = currentIndex * cardsPerView;
            const endIndex = Math.min(startIndex + cardsPerView, cards.length);
            
            cards.forEach((card, index) => {
                if (index >= startIndex && index < endIndex) {
                    card.style.display = 'block';
                    card.style.opacity = '0';
                    card.style.transform = 'translateX(20px)';
                    setTimeout(() => {
                        card.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
                        card.style.opacity = '1';
                        card.style.transform = 'translateX(0)';
                    }, 50);
                } else {
                    card.style.display = 'none';
                }
            });
        };
        
        const showNext = () => {
            const cardsPerView = getCardsPerView();
            const totalSlides = Math.ceil(cards.length / cardsPerView);
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlider();
        };
        
        const showPrev = () => {
            const cardsPerView = getCardsPerView();
            const totalSlides = Math.ceil(cards.length / cardsPerView);
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateSlider();
        };
        
        // Button event listeners - daha spesifik seçim
        navButtons.forEach((btn, index) => {
            // Butonun tıklanabilir olduğundan emin ol
            btn.style.pointerEvents = 'auto';
            btn.style.cursor = 'pointer';
            btn.style.zIndex = '10';
            
            // İkon kontrolü ile buton yönünü belirle
            const icon = btn.querySelector('i');
            const isLeft = icon && icon.classList.contains('fa-chevron-left');
            const isRight = icon && icon.classList.contains('fa-chevron-right');
            
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                console.log('Button clicked:', isLeft ? 'prev' : 'next');
                
                if (isLeft) {
                    showPrev();
                } else if (isRight) {
                    showNext();
                } else {
                    // Fallback: index'e göre
                    if (index === 0) {
                        showPrev();
                    } else {
                        showNext();
                    }
                }
            });
            
            // Hover efekti için
            btn.addEventListener('mouseenter', () => {
                btn.style.transform = 'scale(1.1)';
            });
            
            btn.addEventListener('mouseleave', () => {
                btn.style.transform = 'scale(1)';
            });
        });
        
        // Handle window resize
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                currentIndex = 0;
                updateSlider();
            }, 250);
        });
        
        // Initialize
        updateSlider();
        
        console.log('Announcements slider initialized:', cards.length, 'cards');
    };

    // ==================== PARALLAX EFFECTS - NEW ====================
    const initParallax = () => {
        // Hero slider görsellerinden parallax kaldırıldı - sadece campus-life-bg için parallax
        const parallaxElements = document.querySelectorAll('.campus-life-bg');
        
        if (parallaxElements.length === 0) return;
        
        const handleScroll = throttle(() => {
            const scrolled = window.pageYOffset;
            
            parallaxElements.forEach(element => {
                const rate = scrolled * 0.5;
                element.style.transform = `translate3d(0, ${rate}px, 0)`;
            });
        }, 10);
        
        window.addEventListener('scroll', handleScroll, { passive: true });
    };

    // ==================== LAZY LOADING - NEW ====================
    const initLazyLoading = () => {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                            img.removeAttribute('data-src');
                            observer.unobserve(img);
                        }
                    }
                });
            });
            
            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
    };

    // ==================== PERFORMANCE MONITORING - NEW ====================
    const initPerformanceMonitoring = () => {
        if ('PerformanceObserver' in window) {
            try {
                const perfObserver = new PerformanceObserver((list) => {
                    for (const entry of list.getEntries()) {
                        if (entry.entryType === 'largest-contentful-paint') {
                            console.log('LCP:', entry.renderTime || entry.loadTime);
                        }
                    }
                });
                perfObserver.observe({ entryTypes: ['largest-contentful-paint'] });
            } catch (e) {
                // Performance monitoring not critical
            }
        }
    };

    // ==================== HERO QUICK LINKS CARDS ====================
    const initHeroQuickLinks = () => {
        const grid = document.querySelector('.hero-discover-grid');
        if (!grid) {
            return;
        }

        const cards = grid.querySelectorAll('.discover-card');

        cards.forEach((card, index) => {
            card.style.setProperty('--delay', `${index * 80}ms`);
            card.classList.add('discover-ready');
        });
    };

    const logFontDiagnostics = (runId = 'pre-fix') => {
        const targets = [
            { selector: '.calls-title', id: 'H1', label: 'calls-title' },
            { selector: '.news-section-title', id: 'H2', label: 'news-section-title' },
            { selector: '.events-title', id: 'H3', label: 'events-title' },
            { selector: '.section-title', id: 'H4', label: 'section-title' },
            { selector: '.academic-title', id: 'H5', label: 'academic-title' },
            { selector: '.mobile-title', id: 'H6', label: 'mobile-title' },
            { selector: '.announcements-title', id: 'H7', label: 'announcements-title' },
            { selector: '.campuses-title', id: 'H8', label: 'campuses-title' },
            { selector: '.stats-title', id: 'H9', label: 'stats-title' },
            { selector: '.campus-life-main-title', id: 'H10', label: 'campus-life-main-title' },
            { selector: '.call-title', id: 'H11', label: 'call-title' },
            { selector: '.call-desc', id: 'H12', label: 'call-desc' }
        ];

        targets.forEach(target => {
            const el = document.querySelector(target.selector);
            const computed = el ? window.getComputedStyle(el) : null;
            sendAgentLog({
                hypothesisId: target.id,
                location: 'assets/js/main.js:logFontDiagnostics',
                message: `font-snapshot:${target.label}`,
                data: {
                    found: Boolean(el),
                    fontFamily: computed?.fontFamily || null,
                    fontWeight: computed?.fontWeight || null,
                    fontSize: computed?.fontSize || null
                },
                runId
            });
        });
    };

    const logSpacingDiagnostics = (runId = 'post-fix') => {
        const section = document.querySelector('.section');
        const computed = section ? window.getComputedStyle(section) : null;
        sendAgentLog({
            hypothesisId: 'S1',
            location: 'assets/js/main.js:logSpacingDiagnostics',
            message: 'section-padding',
            data: {
                found: Boolean(section),
                paddingTop: computed?.paddingTop || null,
                paddingBottom: computed?.paddingBottom || null,
                marginTop: computed?.marginTop || null,
                marginBottom: computed?.marginBottom || null
            },
            runId
        });
    };

    // ==================== INITIALIZE ALL ====================
    const init = () => {
        // Core functionality
        initHeaderScroll();
        initMegaMenu();
        initHeroSlider();
        initMegaSliders();
        initScrollToTop();
        initMobileMenu();
        initSmoothScroll();
        initScrollAnimations();
        initNewsSlider();
        initAcademicSlider();
        initRankingSlider();
        initEventsSlider();
        initAnnouncementsSlider();
        initHeroQuickLinks();
        
        // Enhanced features
        initParallax();
        initLazyLoading();
        initPerformanceMonitoring();
        logFontDiagnostics('post-fix');
        logSpacingDiagnostics('post-fix');
        
        // Remove loading class if exists
        document.body.classList.remove('loading');
        document.body.classList.add('loaded');
    };

    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Expose to global scope if needed
    window.BogaziciSite = {
        init,
        debounce,
        throttle
    };

})();
