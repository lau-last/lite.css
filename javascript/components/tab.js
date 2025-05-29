function removeActive() {
    let buttonsTab = document.querySelectorAll('button[data-toggle="tab"]');
    buttonsTab.forEach(button => {
        button.classList.remove('active');
    });
}

function addActive(element) {
    element.classList.add('active');
}

function hideContents() {
    let contentsTab = document.querySelectorAll('.tab-content');
    contentsTab.forEach(content => {
        content.style.display = 'none';
    });
}

function showContent(element) {
    element.style.display = 'block';
}

function removeDataActive() {
    let contentsTab = document.querySelectorAll('.tab-content[data-active="true"]');
    if (contentsTab.length === 0) {return;}
    contentsTab.forEach(content => {
        content.removeAttribute('data-active');
    });
}

function init() {
    let buttonsTab = document.querySelectorAll('button[data-toggle="tab"]');
    buttonsTab.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-target');
            const content = document.querySelector(target);
            removeDataActive();
            hideContents();
            removeActive();
            addActive(button);
            showContent(content);
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    init();
});