import NavbarManager from './components/navbar.js';
import TabsManager from './components/tab.js';
import ModalManager from './components/modal.js';
import DropdownManager from './components/dropdown.js';
import CarouselManager from "./components/carousel.js";


document.addEventListener('DOMContentLoaded', function () {
    const navbar = new NavbarManager();
    const tabs = new TabsManager();
    const modal = new ModalManager();
    const carousel = new CarouselManager();
    const dropdown = new DropdownManager();
    navbar.init();
    tabs.init();
    modal.init();
    dropdown.init();
    carousel.init();
});