export default class InputManager {
    init() {
        this.handleSwitchLabelClick();
    };

    handleSwitchLabelClick() {
        const containersSwitch = document.querySelectorAll('.switch');
        containersSwitch.forEach(container => {
            let inputSelector = container.querySelector('input').id;
            let labelsSelector = document.querySelectorAll(`[data-label="${inputSelector}"]`);
            labelsSelector.forEach(label => {
                label.addEventListener('click', () => {
                    container.querySelector('input').click();
                });
            });
        });
    }


}