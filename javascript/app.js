import NavbarManager from './components/navbar.js';
import TabsManager from './components/tab.js';
import ModalManager from './components/modal.js';
import DropdownManager from './components/dropdown.js';
import CarouselManager from "./components/carousel.js";
import ThemeManager from "./components/theme.js";
import InputManager from "./components/input.js";


const navbar = new NavbarManager();
const tabs = new TabsManager();
const modal = new ModalManager();
const carousel = new CarouselManager();
const dropdown = new DropdownManager();
const themeManager = new ThemeManager();
const inputManager = new InputManager();


document.addEventListener('DOMContentLoaded', function () {
    navbar.init();
    tabs.init();
    modal.init();
    dropdown.init();
    carousel.init();
    themeManager.init();
    inputManager.init();
});