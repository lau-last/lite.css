export default class NavbarSideManager {
    init() {
        this.initSideNavbar();
    };


    initSideNavbar() {
        this.handleOpenButton();
        this.handleCloseButton();
    };


    removeClass(currentButton) {
        const openButtons = document.querySelectorAll('[data-toggle="navbar-side"]');
        if (!openButtons) return;

        openButtons.forEach(button => {

            if (button !== currentButton) {
                const target = button.getAttribute('data-target');
                const content = document.querySelector(target);

                // content.style.transition = 'none';

                button.classList.remove('animate-burger');
                content.classList.remove('show-aside-start');
                content.classList.remove('show-aside-end');
            };
        });
    };

    handleOpenButton() {
        const openButtons = document.querySelectorAll('[data-toggle="navbar-side"]');
        if (!openButtons) return;

        openButtons.forEach(button => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-target');
                const content = document.querySelector(target);

                if (!content) return;

                this.removeClass(button);
                this.handleToggleClass(content);
                this.handlePushMode(content);
            });
        });
    };

    handleCloseButton() {
        const closeButtons = document.querySelectorAll('[data-function="close-navbar-side"]');
        if (!closeButtons) return;

        closeButtons.forEach(button => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-target');
                const content = document.querySelector(target);

                if (!content) return;

                this.handleToggleClass(content);
                this.handlePushMode(content);
            });
        });
    };

    handleToggleClass(content) {
        const side = this.getSide(content);
        content.classList.toggle(`show-aside-${side}`);
    }

    handlePushMode(content) {
        const side = this.getSide(content);
        const mode = this.getMode(content);

        if (mode !== 'push') return;

        const isVisibleStart = side === 'start' && content.classList.contains('show-aside-start');
        const isVisibleEnd = side === 'end' && content.classList.contains('show-aside-end');

        if (side === 'start') {
            document.body.style.marginLeft = isVisibleStart ? '300px' : '0';
        } else if (side === 'end') {
            document.body.style.marginRight = isVisibleEnd ? '300px' : '0';
        }
    }


    getMode(content) {
        return content.getAttribute('data-mode') || 'push';
    };


    getSide(content) {
        return content.getAttribute('data-position') || 'start';
    };


    toggleBurger(button) {
        const shouldAnimate = button.getAttribute('data-animated') === 'true';
        if (shouldAnimate) {
            button.classList.toggle('animate-burger');
        }
    };

};