document.addEventListener('DOMContentLoaded', () => {

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // --- 1. LÓGICA DO MENU HAMBÚRGUER (abertura/fechamento suave) ---
    const menuBtn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');
    const navLinks = document.querySelectorAll('.nav-link');

    function toggleMenu(forceClose = false) {
        const isOpen = menu.classList.contains('menu-open');
        const willOpen = forceClose ? false : !isOpen;

        menu.classList.toggle('menu-open', willOpen);
        iconOpen.classList.toggle('hidden', willOpen);
        iconClose.classList.toggle('hidden', !willOpen);
        menuBtn.setAttribute('aria-expanded', String(willOpen));
    }

    menuBtn.addEventListener('click', () => toggleMenu());

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 768) {
                toggleMenu(true);
            }
        });
    });

    // Fecha o menu mobile se a tela for redimensionada para desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            toggleMenu(true);
        }
    });

    // --- 2. LÓGICA DO DARK / LIGHT MODE (com transição suave via View Transitions API) ---
    const themeToggles = document.querySelectorAll('.theme-toggle');
    const htmlElement = document.documentElement;

    function updateThemeUI(isLight) {
        themeToggles.forEach(btn => {
            const moon = btn.querySelector('.icon-moon');
            const sun = btn.querySelector('.icon-sun');
            moon.classList.toggle('hidden', isLight);
            sun.classList.toggle('hidden', !isLight);
        });
    }

    function applyTheme() {
        const isLight = htmlElement.classList.toggle('light');
        htmlElement.classList.toggle('dark', !isLight);
        localStorage.setItem('theme', isLight ? 'light' : 'dark');
        updateThemeUI(isLight);
    }

    function toggleTheme() {
        // Tecnologia atual (2026): anima a troca de tema com um recorte suave,
        // com fallback automático em navegadores sem suporte.
        if (!prefersReducedMotion && document.startViewTransition) {
            document.startViewTransition(() => applyTheme());
        } else {
            applyTheme();
        }
    }

    themeToggles.forEach(btn => btn.addEventListener('click', toggleTheme));

    // Carrega o tema salvo do usuário
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'light') {
        htmlElement.classList.add('light');
        htmlElement.classList.remove('dark');
        updateThemeUI(true);
    } else {
        htmlElement.classList.add('dark');
        updateThemeUI(false);
    }

    // --- 3. SCROLL-SPY — destaca o link da seção visível ---
    const sections = document.querySelectorAll('section[id]');
    const sectionLinks = document.querySelectorAll('.nav-link[data-section]');

    if ('IntersectionObserver' in window && sections.length) {
        const spyObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    sectionLinks.forEach(link => {
                        link.classList.toggle('active', link.dataset.section === id);
                    });
                }
            });
        }, { rootMargin: '-45% 0px -50% 0px', threshold: 0 });

        sections.forEach(section => spyObserver.observe(section));
    }

    // --- 4. ANIMAÇÃO DE ENTRADA — elementos aparecem suavemente ao rolar ---
    const revealEls = document.querySelectorAll('.reveal');

    if ('IntersectionObserver' in window && revealEls.length && !prefersReducedMotion) {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        revealEls.forEach(el => revealObserver.observe(el));
    } else {
        revealEls.forEach(el => el.classList.add('in-view'));
    }

});
