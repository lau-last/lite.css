function initDropdownButton() {
    let buttonsDropdown = document.querySelectorAll('[data-toggle="dropdown-button"]');
    buttonsDropdown.forEach(button => {
        button.addEventListener('click', () => {
            const arrow = button.querySelector('.dropdown-arrow');
            handleArrow(button);
            const target = button.getAttribute('data-target');
            const content = document.querySelector(target);
            const isOpen = content.getAttribute('data-expanded') === 'true';
            isOpen ? collapseDropdown(content) : expandDropdown(content);
        });
    });
}

function handleArrow(button) {
    const arrow = button.querySelector('.dropdown-arrow');
    if (!arrow) return;
    let valueOfArrow = arrow.getAttribute('data-arrow');
    valueOfArrow === 'up' ? arrow.setAttribute('data-arrow', 'down') : arrow.setAttribute('data-arrow', 'up');
}

function expandDropdown(content) {
    if (!content) return;
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
}

function collapseDropdown(content) {
    if (!content) return;
    const startHeight = content.scrollHeight;
    content.animate([
        {height: `${startHeight}px`},
        {height: '0px'}
    ], {
        duration: 300,
        easing: 'ease'
    }).onfinish = () => {
        content.setAttribute('data-expanded', 'false');
    };
}

document.addEventListener('DOMContentLoaded', () => {
    initDropdownButton();
});