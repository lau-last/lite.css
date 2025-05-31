// On stocke ici les index de chaque carrousel, identifiés par leur data-target
const slideIndexes = {};

// Boutons "suivant"
function nextSlide() {
    const controlNext = document.querySelectorAll('[data-control="next"]');
    controlNext.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-target');
            const content = document.querySelector(target);
            const slides = content.getElementsByClassName("slide");

            // Si l'index n'est pas défini, on commence à 0
            if (!(target in slideIndexes)) slideIndexes[target] = 0;

            // Incrémenter l'index
            slideIndexes[target]++;
            if (slideIndexes[target] >= slides.length) slideIndexes[target] = 0;

            // Mettre à jour l'affichage
            hideAllSlides(slides);
            showSlide(slides, slideIndexes[target]);
            handleIndicator(target, slideIndexes[target]);
        });
    });
}

// Boutons "précédent"
function prevSlide() {
    const controlPrev = document.querySelectorAll('[data-control="prev"]');
    controlPrev.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-target');
            const content = document.querySelector(target);
            const slides = content.getElementsByClassName("slide");

            if (!(target in slideIndexes)) slideIndexes[target] = 0;

            // Décrémenter l'index
            slideIndexes[target]--;
            if (slideIndexes[target] < 0) slideIndexes[target] = slides.length - 1;

            // Mettre à jour l'affichage
            hideAllSlides(slides);
            showSlide(slides, slideIndexes[target]);
            handleIndicator(target, slideIndexes[target]);
        });
    });
}

// Clic sur les indicateurs (dots)
function goToSlide() {
    const containerDotList = document.querySelectorAll('[data-dot]');
    containerDotList.forEach(containerDot => {
        const dots = containerDot.getElementsByClassName("dot");

        Array.from(dots).forEach(dot => {
            dot.addEventListener('click', () => {
                const target = dot.parentElement.getAttribute('data-dot');
                const content = document.querySelector(target);
                const slideIndex = parseInt(dot.getAttribute('data-index'), 10);

                // Mettre à jour l'index global du carrousel
                slideIndexes[target] = slideIndex;

                const slides = content.getElementsByClassName("slide");

                // Mettre à jour l'affichage
                hideAllSlides(slides);
                showSlide(slides, slideIndex);
                handleIndicator(target, slideIndex);
            });
        });
    });
}

// Affiche la slide à l'index donné
function showSlide(slides, slideIndex) {
    slides[slideIndex].classList.add('show-slide');
    return slideIndex;
}

// Cache toutes les slides
function hideAllSlides(elements) {
    Array.from(elements).forEach(element => {
        element.classList.remove('show-slide');
    });
}

// Active le bon point (dot) dans les indicateurs
function handleIndicator(target, slideIndex) {
    const dots = getCarouselDots(target);
    removeActive(dots);
    addActive(dots, slideIndex);
}

// Récupère les "dots" pour un carrousel donné
function getCarouselDots(target) {
    const containerDot = document.querySelector(`[data-dot="${target}"]`);
    return containerDot.getElementsByClassName("dot");
}

// Supprime la classe active des dots
function removeActive(elements) {
    Array.from(elements).forEach(element => {
        element.classList.remove('active');
    });
}

// Ajoute la classe active au bon dot
function addActive(elements, slideIndex) {
    elements[slideIndex].classList.add('active');
}

// Initialise tous les comportements
function init() {
    nextSlide();
    prevSlide();
    goToSlide();
}

// Lancement quand le DOM est prêt
document.addEventListener('DOMContentLoaded', () => {
    init();
});