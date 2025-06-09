export default class ThemeManager {

    init() {
        this.initTheme();
        this.initCheckbox();
        this.toggleTheme();
        this.handleClickButtonTheme();
    }

    initCheckbox() {
        const checkbox = document.getElementById('switch-theme');
        if (!checkbox) return;
        let theme = localStorage.getItem('theme');
        if (theme === null) {
            theme = this.getSystemTheme();
        }
        checkbox.checked = theme === 'dark';
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
        if (!checkbox) return;
        checkbox.addEventListener('change', () => {
            const theme = checkbox.checked ? 'dark' : 'light';
            this.handleTransition();
            this.applyTheme(theme);
            localStorage.setItem('theme', theme);
            window.dispatchEvent(new Event('themeChange'));
        });
    }

    handleTransition() {
        document.body.classList.add('transition-theme');
        setTimeout(() => {
            document.body.classList.remove('transition-theme');
        }, 400);
    }

    handleClickButtonTheme() {
        const buttons = document.querySelectorAll('[data-btn-theme]');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const desiredTheme = button.getAttribute('data-btn-theme');
                const targetSelector = button.getAttribute('data-target');
                const target = document.querySelector(targetSelector);

                if (target && target.type === 'checkbox') {
                    target.checked = (desiredTheme === 'dark');
                }
                this.handleTransition();
                this.applyTheme(desiredTheme);
                localStorage.setItem('theme', desiredTheme);
            });
        });
    }
}