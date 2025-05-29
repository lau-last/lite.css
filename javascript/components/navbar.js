document.addEventListener('DOMContentLoaded', () => {
    let buttons = document.querySelectorAll('button[data-toggle="navbar"]');
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-target');
            const content = document.querySelector(target);
            const isOpen = content.getAttribute('data-expanded') === 'true';
            content.setAttribute('data-expanded', isOpen ? 'false' : 'true');
        });
    });
});