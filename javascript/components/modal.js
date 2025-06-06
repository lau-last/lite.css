export default class ModalManager {
    init() {
        this.initOpenButtons();
        this.initCloseButtons();
    };

    initOpenButtons() {
        const buttons = document.querySelectorAll('[data-toggle="modal"]');
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const targetSelector = button.getAttribute('data-target');
                const modal = document.querySelector(targetSelector);
                if (!modal) return;

                modal.style.display = 'flex';
                this.disableScroll();
                this.handleImageModal(button);
            });
        });
    };

    initCloseButtons() {
        const closeButtons = document.querySelectorAll('[data-function="close-modal"]');
        closeButtons.forEach(button => {
            button.addEventListener('click', () => {
                const targetSelector = button.getAttribute('data-target');
                const modal = document.querySelector(targetSelector);
                if (!modal) return;

                modal.style.display = 'none';
                this.enableScroll();
            });
        });
    };

    handleImageModal(button) {
        if (!(button instanceof HTMLImageElement)) return;

        const imgTargetSelector = button.getAttribute('data-img');
        const modalImg = document.querySelector(imgTargetSelector);
        if (modalImg) {
            modalImg.src = button.src;
        }
    };

    disableScroll() {
        document.documentElement.classList.add('no-scroll');
    };

    enableScroll() {
        document.documentElement.classList.remove('no-scroll');
    };
};