function initDropdownButton() {
    let buttonsDropdown = document.querySelectorAll('[data-toggle="dropdown-button"]');
    buttonsDropdown.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-target');
            const content = document.querySelector(target);
            const isOpen = content.getAttribute('data-expanded') === 'true';
            isOpen ? collapseDropdown(content) : expandDropdown(content);
        });
    });
}
function expandDropdown(content) {
    if (!content) return;
    const startHeight = 0;
    const endHeight = content.scrollHeight;
    content.setAttribute('data-expanded', 'true');
    // content.classList.add('border');
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
function openDropdownButton(content) {
    if (!content) return;
    content.setAttribute('data-expanded', 'true');
}
function closeDropdownButton(content) {
    if (!content) return;
    content.setAttribute('data-expanded', 'false');
}
document.addEventListener('DOMContentLoaded', () => {
    initDropdownButton();
});