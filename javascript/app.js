import NavbarManager from './components/navbar.js';
import TabsManager from './components/tab.js';
import ModalManager from './components/modal.js';
import DropdownManager from './components/dropdown.js';
import CarouselManager from "./components/carousel.js";
import ThemeManager from "./components/theme.js";
import InputManager from "./components/input.js";
import CopyToClipboardManager from "./components/clipboard.js";
import SyntaxHighlighterManager from "./components/highlighter.js";

import "./elements/icon_burger.js";
import "./elements/icon_close.js";
import "./elements/card.js";


const navbar = new NavbarManager();
const tabs = new TabsManager();
const modal = new ModalManager();
const carousel = new CarouselManager();
const dropdown = new DropdownManager();
const theme = new ThemeManager();
const input = new InputManager();
const copyToClipboard = new CopyToClipboardManager();
const syntaxHighlighter = new SyntaxHighlighterManager();


document.addEventListener('DOMContentLoaded', function () {
    navbar.init();
    tabs.init();
    modal.init();
    dropdown.init();
    carousel.init();
    theme.init();
    input.init();
    copyToClipboard.init();
    syntaxHighlighter.init();
});