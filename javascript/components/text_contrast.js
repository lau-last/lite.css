export default class TextContrastManager {

    static variableColors = {
        primary: '--primary-color',
        secondary: '--secondary-color',
        tertiary: '--tertiary-color',
        success: '--success-color',
        info: '--info-color',
        warning: '--warning-color',
        danger: '--danger-color',
        neutral: '--neutral-color',
        light: '--light-color',
        dark: '--dark-color',
    };

    init() {
        this.setTextContrast();
        window.addEventListener('themeChange', () => {
            this.setTextContrast();
        });
    }

    getClassSelectors(key) {
        return [
            `.bg-${key}-fill`,
            `.btn-${key}`,
            `.badge-${key}`,
            `.table-${key}`
        ];
    }

    setTextContrast() {
        for (const key in TextContrastManager.variableColors) {

            const cssVar = TextContrastManager.variableColors[key];
            const colorValue = this.getCssVarColor(cssVar);

            if (!colorValue) continue;

            const textColor = this.getContrastYIQ(colorValue);
            const selectors = this.getClassSelectors(key);

            for (const selector of selectors) {
                this.setColorText(selector, textColor);
            }

        }
    }

    setColorText(selector, textColor) {
        const elements = document.querySelectorAll(selector);
        if (!elements.length) return;

        elements.forEach(element => {
            element.style.color = textColor;
            element.querySelectorAll('*').forEach(child => {
                child.style.color = textColor;
            });
        });
    }

    getContrastYIQ(hexColor) {

        const cleanHex = hexColor.replace('#', '');

        const red = parseInt(cleanHex.slice(0, 2), 16);
        const green = parseInt(cleanHex.slice(2, 4), 16);
        const blue = parseInt(cleanHex.slice(4, 6), 16);

        // Calcul YIQ : pondération perceptuelle de la luminosité
        const yiq = (red * 299 + green * 587 + blue * 114) / 1000;

        // Retourne une couleur contrastée
        return yiq >= 128 ? '#000000' : '#ffffff';
    }


    getCssVarColor(varName, element = document.documentElement) {
        if (!varName.startsWith('--')) {
            console.warn(`Nom de variable CSS invalide : ${varName}`);
            return null;
        }

        const value = getComputedStyle(element).getPropertyValue(varName).trim();
        return value || null;
    }

}