export default class DropdownManager  {
    init() {
        this.initDropdownButtons();
    };

    initDropdownButtons() {
        const buttons = document.querySelectorAll('[data-toggle="dropdown-button"]');
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const targetSelector = button.getAttribute('data-target');
                const content = document.querySelector(targetSelector);
                if (!content) return;

                this.toggleArrow(button);

                const isOpen = content.getAttribute('data-expanded') === 'true';
                isOpen ? this.collapse(content) : this.expand(content);
            });
        });
    };

    toggleArrow(button) {
        const arrow = button.querySelector('.dropdown-arrow');
        if (!arrow) return;
        const current = arrow.getAttribute('data-arrow');
        arrow.setAttribute('data-arrow', current === 'up' ? 'down' : 'up');
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