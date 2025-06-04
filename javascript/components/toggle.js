export default class ToggleManager {


    static iconShow =
        `<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor"
    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M7 8l-4 4l4 4" />
    <path d="M17 8l4 4l-4 4" />
    <path d="M14 4l-4 16" />
</svg>`;

    static iconHide =
        `<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor"
    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M7 8l-4 4l4 4" />
    <path d="M17 8l4 4l-2.5 2.5" />
    <path d="M14 4l-1.201 4.805m-.802 3.207l-2 7.988" />
    <path d="M3 3l18 18" />
</svg>`




    init() {
        this.initToggleDisplay();
        this.initIconDisplay();
    }


    initToggleDisplay() {
        const toggleButtons = document.querySelectorAll('[data-action="toggle-display"]');
        toggleButtons.forEach(button => {
            button.addEventListener('click', () => {
                const targetSelector = button.getAttribute('data-target');
                const target = document.querySelector(targetSelector);
                if (!target) return;
                target.classList.toggle('d-none');
                this.handleIconDisplay(button);
            });
        });
    }

    initIconDisplay() {
        const toggleButtons = document.querySelectorAll('[data-action="toggle-display"]');
        toggleButtons.forEach(button => {
            this.handleIconDisplay(button);
        });
    }

    handleIconDisplay(button) {
        const targetSelector = button.getAttribute('data-target');
        const target = document.querySelector(targetSelector);
        if (!target) return;
        if (target.classList.contains('d-none')) {
            button.innerHTML = ToggleManager.iconShow;
        } else {
            button.innerHTML = ToggleManager.iconHide;
        }
    }

}