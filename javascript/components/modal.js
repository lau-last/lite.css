function showModal() {
    let buttonsModal = document.querySelectorAll('button[data-toggle="modal"]');
    buttonsModal.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-target');
            const content = document.querySelector(target);
            content.style.display = 'flex';
            addNoScroll();
        });
    });
}

function hideModal() {
    let buttonsCloseModal = document.querySelectorAll('[data-function="close-modal"]');
    buttonsCloseModal.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-target');
            const content = document.querySelector(target);
            content.style.display = 'none';
            removeNoScroll();
        });
    });
}

function addNoScroll() {
    document.body.classList.add('no-scroll');
}

function removeNoScroll() {
    document.body.classList.remove('no-scroll');
}

function init() {
    showModal();
    hideModal();
}

document.addEventListener('DOMContentLoaded', () => {
    init();
});