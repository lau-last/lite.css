export default class CopyToClipboardManager {

    init() {
        this.initCopyOnClick();
    }

    initCopyOnClick() {
        const buttonCopyToClipboard = document.querySelectorAll('[data-action="copy"]');
        buttonCopyToClipboard.forEach(button => {
            button.addEventListener('click', () => {
                const targetSelector = button.getAttribute('data-target');
                const target = document.querySelector(targetSelector);
                if (!target) return;
                const textToCopy = target.innerText;
                navigator.clipboard.writeText(textToCopy).then(() => {
                    this.handleTooltip(button);
                });
            });
        });
    };

    handleTooltip(button) {
        button.classList.add('tooltip-visible');
        setTimeout(() => {
            button.classList.remove('tooltip-visible');
        }, 1500);
    };

}