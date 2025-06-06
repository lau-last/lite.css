export default class BurgerManager {

    init() {
        this.initAnimateBurgerNavbar();
        this.initAnimateBurgerNavbarSide();
    }

    toggleBurger(button) {
        const shouldAnimate = button.getAttribute('data-animated') === 'true';
        if (shouldAnimate) {
            button.classList.toggle('animate-burger');
        }
    };

    initAnimateBurgerNavbar() {
        document.querySelectorAll('[data-toggle="navbar"]').forEach(button => {
            button.addEventListener('click', () => {
                this.toggleBurger(button);
            });
        });
    };

    initAnimateBurgerNavbarSide() {
        document.querySelectorAll('[data-toggle="navbar-side"]').forEach(button => {
            button.addEventListener('click', () => {
                this.toggleBurger(button);
            });

            const targetSelector = button.getAttribute('data-target');

            document.querySelectorAll(`[data-target="${targetSelector}"]`).forEach(otherButton => {
                const isCloseFunction = otherButton.getAttribute('data-function') === 'close-navbar-side';
                if (isCloseFunction) {
                    otherButton.addEventListener('click', () => {
                        this.toggleBurger(button);
                    });
                }
            });
        });
    };
}