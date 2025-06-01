export default class CarouselManager {
    constructor() {
        this.slideIndexes = {};
        this.interval = 5000;
    }

    init() {
        this.activeFirstSlideAndDot();
        this.initAutoPlay();
        this.initNextButtons();
        this.initPrevButtons();
        this.initDotControls();
    };


    initAutoPlay() {
        const carousels = document.querySelectorAll('[data-carousel="slide"]');
        for (const carousel of carousels) {
            const autoPlay = carousel.getAttribute('data-auto-play');
            const interval = carousel.getAttribute('data-interval');
            if (interval) {
                this.interval = interval;
            }
            if (autoPlay === 'true') {
                setInterval(() => {
                    const target = '#' + carousel.id;
                    this.changeSlide(target, 1);
                }, this.interval);
            }
        }
    }


    activeFirstSlideAndDot() {
        const carousels = document.querySelectorAll('[data-carousel="slide"]');
        for (const carousel of carousels) {
            const slides = carousel.getElementsByClassName('slide');
            const targetSelector = carousel.id;
            const containerDot = document.querySelector(`[data-dot-target="#${targetSelector}"]`);

            if (!containerDot) {
                continue;
            }

            const dots = containerDot.getElementsByClassName('dot');

            // Vérifier s'il y a déjà une slide active
            let indexWithActiveSlide = 0;
            let alreadyActive = false;
            for (let i = 0; i < slides.length; i++) {
                if (slides[i].classList.contains('show-slide')) {
                    alreadyActive = true;
                    indexWithActiveSlide = i;
                    break;
                }
            }

            if (!alreadyActive) {
                slides[0].classList.add('show-slide');
                if (dots[0]) {
                    dots[0].classList.add('active');
                }
            }
            this.slideIndexes['#' + targetSelector] = indexWithActiveSlide;
            this.updateIndicators('#' + targetSelector, indexWithActiveSlide);
        }
    };

    initNextButtons() {
        const buttons = document.querySelectorAll('[data-control="next"]');
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-target');
                this.changeSlide(target, 1);
            });
        });
    };

    initPrevButtons() {
        const buttons = document.querySelectorAll('[data-control="prev"]');
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-target');
                this.changeSlide(target, -1);
            });
        });
    };

    initDotControls() {
        const containers = document.querySelectorAll('[data-dot-target]');
        containers.forEach(container => {
            const dots = container.getElementsByClassName('dot');
            Array.from(dots).forEach(dot => {
                dot.addEventListener('click', () => {
                    const target = container.getAttribute('data-dot-target');
                    const index = parseInt(dot.getAttribute('data-index'), 10);
                    this.goToSlide(target, index);
                });
            });
        });
    };

    changeSlide(target, direction) {
        const content = document.querySelector(target);
        const slides = content.getElementsByClassName('slide');

        if (!(target in this.slideIndexes)) this.slideIndexes[target] = 0;

        let newIndex = this.slideIndexes[target] + direction;
        if (newIndex >= slides.length) newIndex = 0;
        if (newIndex < 0) newIndex = slides.length - 1;

        this.updateDisplay(target, slides, newIndex);
    };

    goToSlide(target, index) {
        const content = document.querySelector(target);
        const slides = content.getElementsByClassName('slide');

        this.slideIndexes[target] = index;
        this.updateDisplay(target, slides, index);
    };

    updateDisplay(target, slides, index) {
        this.hideAll(slides);
        this.show(slides, index);
        this.updateIndicators(target, index);
        this.slideIndexes[target] = index;
    };

    show(slides, index) {
        slides[index].classList.add('show-slide');
    };

    hideAll(slides) {
        Array.from(slides).forEach(slide => {
            slide.classList.remove('show-slide');
        });
    };

    updateIndicators(target, index) {
        const container = document.querySelector(`[data-dot-target="${target}"]`);
        if (!container) return;

        const dots = container.getElementsByClassName('dot');
        Array.from(dots).forEach(dot => dot.classList.remove('active'));
        if (dots[index]) dots[index].classList.add('active');
    };
};