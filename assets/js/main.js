    // --- 1. LÓGICA DO MENU HAMBÚRGUER ---
        const menuBtn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');
        const iconOpen = document.getElementById('icon-open');
        const iconClose = document.getElementById('icon-close');
        const navLinks = document.querySelectorAll('.nav-link');

        function toggleMenu() {
            const isExpanded = menuBtn.getAttribute('aria-expanded') === 'true';
            
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
            
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
            
            menuBtn.setAttribute('aria-expanded', !isExpanded);
        }

        menuBtn.addEventListener('click', toggleMenu);

        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (!menu.classList.contains('hidden') && window.innerWidth < 768) {
                    toggleMenu();
                }
            });
        });

        // --- 2. LÓGICA DO DARK / LIGHT MODE ---
        const themeToggles = document.querySelectorAll('.theme-toggle');
        const htmlElement = document.documentElement;

        function updateThemeUI(isLight) {
            themeToggles.forEach(btn => {
                const moon = btn.querySelector('.icon-moon');
                const sun = btn.querySelector('.icon-sun');
                if (isLight) {
                    moon.classList.add('hidden');
                    sun.classList.remove('hidden');
                } else {
                    moon.classList.remove('hidden');
                    sun.classList.add('hidden');
                }
            });
        }

        function toggleTheme() {
            const isLight = htmlElement.classList.toggle('light');
            if (isLight) {
                htmlElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                htmlElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
            updateThemeUI(isLight);
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