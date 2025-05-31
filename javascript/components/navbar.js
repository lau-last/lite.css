function expandNavbar(content) {
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

function collapseNavbar(content) {
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

function initNavbar() {
    const buttonsNavbar = document.querySelectorAll('[data-toggle="navbar"]');
    buttonsNavbar.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-target');
            const content = document.querySelector(target);
            if (!content) return;
            const isOpen = content.getAttribute('data-expanded') === 'true' || content.getAttribute('data-expanded') === null;
            isOpen ? collapseNavbar(content) : expandNavbar(content);
            animateBurger(button);
        });
    });
}

function showNavbarSide(content) {
    if (!content) return;
    const side = getSideOfNavbarSide(content);
    side === 'start' ? content.style.left = "0" : content.style.right = "0";
}

function hideNavbarSide(content) {
    if (!content) return;
    const side = getSideOfNavbarSide(content);
    side === 'start' ? content.style.left = "-300px" : content.style.right = "-300px";
}

function getSideOfNavbarSide(content) {
    if (!content) return;
    return content.getAttribute('data-navbar-side');
}

function animateBurger(button) {
    let toAnimate = button.getAttribute('data-animated');
    if (toAnimate !== 'true') return;
    button.classList.toggle('animate-burger');
}

function initNavbarSide() {
    const buttonsNavbarSideOpen = document.querySelectorAll('[data-toggle="navbar-side"]');
    buttonsNavbarSideOpen.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-target');
            const content = document.querySelector(target);
            showNavbarSide(content);
            animateBurger(button);
        });
    });
    const buttonsNavbarSideClose = document.querySelectorAll('[data-function="close-navbar-side"]');
    buttonsNavbarSideClose.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-target');
            const content = document.querySelector(target);
            hideNavbarSide(content);
            animateBurger(button);
        });
    });
}


document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
    initNavbarSide();
});




