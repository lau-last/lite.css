export default class TabsManager {
    init() {
        const tabButtons = document.querySelectorAll('[data-toggle="tab"]');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const targetSelector = button.getAttribute('data-target');
                const content = document.querySelector(targetSelector);

                if (!content) return;

                this.deactivateTabs();
                this.hideAllContents();
                this.clearActiveData();

                this.activateTab(button);
                this.showContent(content);
            });
        });
    };

    deactivateTabs() {
        const buttons = document.querySelectorAll('[data-toggle="tab"]');
        buttons.forEach(button => button.classList.remove('active'));
    };

    activateTab(button) {
        button.classList.add('active');
    };

    hideAllContents() {
        const contents = document.querySelectorAll('.tab-content');
        contents.forEach(content => {
            content.style.display = 'none';
        });
    };

    showContent(content) {
        content.style.display = 'block';
    };

    clearActiveData() {
        const activeContents = document.querySelectorAll('.tab-content[data-active="true"]');
        activeContents.forEach(content => {
            content.removeAttribute('data-active');
        });
    };
};