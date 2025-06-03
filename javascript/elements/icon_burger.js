export default class IconBurger extends HTMLElement {
    constructor() {
        super();
        this.render();
        this.dispatchAttribute();
    }

    render() {
        this.innerHTML =
            `<div class="navbar-burger" data-toggle="navbar">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>`;
    }

    dispatchAttribute() {
        for (const attr of this.attributes) {
            if (attr.name.startsWith('data-animated')) {
                this.querySelector('.navbar-burger').setAttribute(attr.name, attr.value);
            }
        }
    }
}

customElements.define('icon-burger', IconBurger);


