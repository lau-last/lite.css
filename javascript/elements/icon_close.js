export default class IconClose extends HTMLElement {
    constructor() {
        super();
        this.render();
    }

    render() {
        this.innerHTML =
            `<span class="icon-close-light"></span>`;
    }
}

customElements.define('icon-close', IconClose);