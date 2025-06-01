export default class ThemeManager {

    init() {
        this.initTheme();
        this.initCheckbox();
        this.toggleTheme();
        this.handleClickButtonTheme();
    }

    initCheckbox() {
        const checkbox = document.getElementById('switch-theme');
        checkbox.checked = localStorage.getItem('theme') === 'dark';
    }

    getSystemTheme() {
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    }

    applyTheme(theme) {
        document.documentElement.classList.remove('theme-dark', 'theme-light');
        document.documentElement.classList.add(`theme-${theme}`);
    }

    initTheme() {
        const savedTheme = localStorage.getItem('theme');
        const theme = savedTheme || this.getSystemTheme();
        this.applyTheme(theme);
    }

    toggleTheme() {
        const checkbox = document.getElementById('switch-theme');
        checkbox.addEventListener('change', () => {
            const theme = checkbox.checked ? 'dark' : 'light';
            this.applyTheme(theme);
            localStorage.setItem('theme', theme);
        });
    }

    handleClickButtonTheme() {
        const buttons = document.querySelectorAll('[data-btn-theme]');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const desiredTheme = button.getAttribute('data-btn-theme'); // 'dark' ou 'light'
                const targetSelector = button.getAttribute('data-target');
                const target = document.querySelector(targetSelector);

                if (target && target.type === 'checkbox') {
                    target.checked = (desiredTheme === 'dark');
                }

                this.applyTheme(desiredTheme);
                localStorage.setItem('theme', desiredTheme);
            });
        });
    }
}