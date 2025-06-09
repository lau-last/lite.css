import NavbarManager from './components/navbar.js';
import NavbarSideManager from './components/navbar_side.js';
import BurgerManager from './components/burger.js';
import TabsManager from './components/tab.js';
import ModalManager from './components/modal.js';
import DropdownManager from './components/dropdown.js';
import CarouselManager from "./components/carousel.js";
import ThemeManager from "./components/theme.js";
import InputManager from "./components/input.js";
import CopyToClipboardManager from "./components/clipboard.js";
import SyntaxHighlighterManager from "./components/highlighter.js";
import ToggleManager from "./components/toggle.js";
import TextContrastManager from "./components/text_contrast.js";


const navbar = new NavbarManager();
const navbarSide = new NavbarSideManager();
const burger = new BurgerManager();
const tabs = new TabsManager();
const modal = new ModalManager();
const carousel = new CarouselManager();
const dropdown = new DropdownManager();
const theme = new ThemeManager();
const input = new InputManager();
const copyToClipboard = new CopyToClipboardManager();
const syntaxHighlighter = new SyntaxHighlighterManager();
const toggle = new ToggleManager();
const textContrast = new TextContrastManager();

document.addEventListener('DOMContentLoaded', function () {
    navbar.init();
    navbarSide.init();
    burger.init();
    tabs.init();
    modal.init();
    dropdown.init();
    carousel.init();
    theme.init();
    input.init();
    copyToClipboard.init();
    syntaxHighlighter.init();
    toggle.init();
    textContrast.init();
});