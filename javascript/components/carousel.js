export default class CarouselManager  {
    constructor() {
        this.slideIndexes = {};
    }

    init() {
        this.initNextButtons();
        this.initPrevButtons();
        this.initDotControls();
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
        const containers = document.querySelectorAll('[data-dot]');
        containers.forEach(container => {
            const dots = container.getElementsByClassName('dot');
            Array.from(dots).forEach(dot => {
                dot.addEventListener('click', () => {
                    const target = container.getAttribute('data-dot');
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
        const container = document.querySelector(`[data-dot="${target}"]`);
        if (!container) return;

        const dots = container.getElementsByClassName('dot');
        Array.from(dots).forEach(dot => dot.classList.remove('active'));
        if (dots[index]) dots[index].classList.add('active');
    }
};