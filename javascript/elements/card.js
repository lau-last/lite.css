export default class CardElement extends HTMLElement {
    constructor() {
        super();
        this.render();
    }

    render() {
        const header = this.querySelector('card-header')?.innerHTML || '';
        const body = this.querySelector('card-body')?.innerHTML || '';
        const footer = this.querySelector('card-footer')?.innerHTML || '';

        this.innerHTML = `
            <div class="card" style="width: 30rem;">
                <div class="card-header">${header}</div>
                <div class="card-body">${body}</div>
                <div class="card-footer">${footer}</div>
            </div>
        `;
    }
}

customElements.define('card-element', CardElement);
