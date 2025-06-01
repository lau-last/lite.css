export default class NavbarManager {
    init() {
        this.initToggleNavbar();
        this.initSideNavbar();
        this.initAnimateBurger();
    };

    // --- NAVBAR COLLAPSIBLE (TYPE ACCORDÉON / MOBILE) ---
    initToggleNavbar() {
        const buttons = document.querySelectorAll('[data-toggle="navbar"]');
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const targetSelector = button.getAttribute('data-target');
                const content = document.querySelector(targetSelector);
                if (!content) return;

                const isOpen = content.getAttribute('data-expanded') === 'true' || content.getAttribute('data-expanded') === null;
                isOpen ? this.collapse(content) : this.expand(content);

                // this.toggleBurger(button);
            });
        });
    };

    expand(content) {
        const startHeight = 0;
        const endHeight = content.scrollHeight;

        content.setAttribute('data-expanded', 'true');
        content.animate([
            {height: `${startHeight}px`},
            {height: `${endHeight}px`}
        ], {
            duration: 300,
            easing: 'ease'
        });
    };

    collapse(content) {
        const startHeight = content.scrollHeight;

        const animation = content.animate([
            {height: `${startHeight}px`},
            {height: '0px'}
        ], {
            duration: 300,
            easing: 'ease'
        });

        animation.onfinish = () => {
            content.setAttribute('data-expanded', 'false');
        };
    };

    // --- NAVBAR LATÉRALE (SLIDE IN/OUT) ---
    initSideNavbar() {
        const openButtons = document.querySelectorAll('[data-toggle="navbar-side"]');
        openButtons.forEach(button => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-target');
                const content = document.querySelector(target);

                if (!content) return;

                this.showSide(content);
                // this.toggleBurger(button);
            });
        });

        const closeButtons = document.querySelectorAll('[data-function="close-navbar-side"]');
        closeButtons.forEach(button => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-target');
                const content = document.querySelector(target);

                if (!content) return;

                this.hideSide(content);
                // this.toggleBurger(button);
            });
        });
    };

    showSide(content) {
        const side = this.getSide(content);
        if (side === 'start') {
            content.style.left = '0';
        } else {
            content.style.right = '0';
        }
    };

    hideSide(content) {
        const side = this.getSide(content);
        if (side === 'start') {
            content.style.left = '-300px';
        } else {
            content.style.right = '-300px';
        }
    };

    getSide(content) {
        return content.getAttribute('data-navbar-side');
    };

    // --- BURGER BUTTON ---
    toggleBurger(button) {
        const shouldAnimate = button.getAttribute('data-animated') === 'true';
        if (shouldAnimate) {
            button.classList.toggle('animate-burger');
        }
    };

    initAnimateBurger() {
        document.querySelectorAll('[data-toggle="navbar"]').forEach(button => {
            button.addEventListener('click', () => {
                this.toggleBurger(button);
            });
        });
    };
};