function toggleNavbar() {
    let buttonsNavbar = document.querySelectorAll('button[data-toggle="navbar"]');
    buttonsNavbar.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-target');
            const content = document.querySelector(target);
            const isOpen = content.getAttribute('data-expanded') === 'true';
            content.setAttribute('data-expanded', isOpen ? 'false' : 'true');
        });
    });
}
document.addEventListener('DOMContentLoaded', () => {
    toggleNavbar();
});

