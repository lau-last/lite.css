export default class NavbarManager {
    init() {
        this.initToggleNavbar();
    };


    initToggleNavbar() {
        const buttons = document.querySelectorAll('[data-action="toggle-navbar"]');
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const targetSelector = button.getAttribute('data-target');
                const content = document.querySelector(targetSelector);
                if (!content) return;

                const isOpen = content.getAttribute('data-expanded') === 'true' || content.getAttribute('data-expanded') === null;
                isOpen ? this.collapse(content) : this.expand(content);
            });
        });
    };

    expand(content) {
        const startHeight = 0;
        const endHeight = content.scrollHeight;

        content.setAttribute('data-expanded', 'true');
        content.animate([
            { height: `${startHeight}px` },
            { height: `${endHeight}px` }
        ], {
            duration: 300,
            easing: 'ease'
        });
    };

    collapse(content) {
        const startHeight = content.scrollHeight;

        const animation = content.animate([
            { height: `${startHeight}px` },
            { height: '0px' }
        ], {
            duration: 300,
            easing: 'ease'
        });

        animation.onfinish = () => {
            content.setAttribute('data-expanded', 'false');
        };
    };
};