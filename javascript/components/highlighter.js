export default class SyntaxHighlighterManager {

    // Couleurs utilisées pour chaque type de token HTML
    static class = {
        tag: "highlight-tag",             // Les chevrons < et > et le nom des balises
        tagName: "highlight-tag-name",         // Le nom des balises
        attributeName: "highlight-attribute-name",   // Les noms d'attributs
        attributeValue: "highlight-attribute-value",  // Les valeurs d'attributs (entre guillemets)
        comment: "highlight-comment",         // Les commentaires HTML
        equalSign: "highlight-equal-sign",        // Le signe égal '=' dans les attributs
        text: "highlight-text",               // Le texte de base
    };

    /**
     * Initialise le surlignage en appliquant la méthode highlight
     * à tous les éléments du DOM qui ont l'attribut data-type="code"
     */
    init() {
        this.copyCodeInBlockCode();
        document.querySelectorAll('[data-type="code"]').forEach(element => {
            this.highlight(element);
        });
    };

    /**
     * Méthode principale qui transforme le contenu HTML d'un élément
     * en ajoutant des styles pour colorer syntaxiquement le code HTML
     * @param {HTMLElement} element - Élément DOM à surligner
     */
    highlight(element) {
        let html = element.innerHTML;
        // Étape 1 : échapper les caractères spéciaux pour éviter l'interprétation HTML
        html = this.escapeHTML(html);
        // Étape 2 : colorer les commentaires HTML
        html = this.colorComments(html);
        // Étape 3 : colorer le texte
        html = this.colorText(html);
        // Étape 4 : colorer les balises, leurs noms et attributs
        html = this.colorTags(html);
        // Remplacer le contenu initial par le contenu coloré
        element.innerHTML = html;
    };

    /**
     * Échappe les caractères spéciaux HTML pour ne pas casser l'affichage notamment les &, < et >
     * @param {string} text - texte à échapper
     * @returns {string} texte échappé
     */
    escapeHTML(text) {
        return text
            // .replace(/&/g, "&amp;")  // d'abord &, sinon les &lt; deviennent &amp;lt;
            .replace(/</g, "&lt;")   // remplacer < par &lt;
            .replace(/>/g, "&gt;");  // remplacer > par &gt;
    };


    /**
     * Colorie les commentaires HTML (ex : <!-- commentaire -->)
     * en utilisant la couleur définie dans colors.comment
     * @param {string} text - texte contenant potentiellement des commentaire
     * @returns {string} texte avec commentaires colorés
     */
    colorComments(text) {
        return text.replace(/(&lt;!--[\s\S]*?--&gt;)/g, match =>
            `<span class="${SyntaxHighlighterManager.class.comment}">${match}</span>`
        );
    };

    /**
     * Colorie les balises HTML, leur nom et leurs attributs
     * @param {string} text - texte contenant des balises HTML échappées
     * @returns {string} texte avec balises colorées
     */
    colorTags(text) {
        // Regex qui capture tout le contenu entre < et > (y compris les espaces et retours à la ligne)
        return text.replace(
            /(&lt;\/?)([a-zA-Z0-9\-]+)([\s\S]*?)(\/?)(&gt;)/g,
            (match, p1, tagName, attrs, selfClosing, p5) => {
                // p1 = "<" ou "</"
                // tagName = nom de la balise
                // attrs = chaîne des attributs (peut contenir des espaces, retours à la ligne, etc.)
                // selfClosing = "/" pour les balises auto-fermantes ou "" pour les autres
                // p5 = ">"

                // Colorier les chevrons < ou </
                let tagStart = `<span class="${SyntaxHighlighterManager.class.tag}">${p1}</span>`;
                // Colorier le nom de la balise
                let tagNameColored = `<span class="${SyntaxHighlighterManager.class.tagName}">${tagName}</span>`;
                // Colorier les attributs
                let attrsColored = this.colorAttributes(attrs);
                // Colorier la fermeture auto-fermante si présente
                let selfClosingColored = selfClosing ? `<span class="${SyntaxHighlighterManager.class.tag}">${selfClosing}</span>` : '';
                // Colorier la fermeture de la balise >
                let tagEnd = `<span class="${SyntaxHighlighterManager.class.tag}">${p5}</span>`;

                return tagStart + tagNameColored + attrsColored + selfClosingColored + tagEnd;
            }
        );
    };

    /**
     * Colorie les attributs dans la chaîne d'attributs,
     * en distinguant le nom, le signe égal et la valeur
     * @param {string} attrs - chaîne brute des attributs
     * @returns {string} attributs colorés
     */
    colorAttributes(attrs) {
        // Regex qui capture les attributs avec ou sans valeur, en gérant les espaces
        return attrs.replace(/(\s+)([a-zA-Z\-:]+)(=)("([^"]*)"|'([^']*)')?/g, (match, spaces, attrName, equalSign, quotedValue, doubleQuotedValue, singleQuotedValue) => {
            // Conserver les espaces
            let colored = spaces;
            // Colorier le nom de l'attribut
            colored += `<span class="${SyntaxHighlighterManager.class.attributeName}">${attrName}</span>`;
            // Colorier le signe égal
            colored += `<span class="${SyntaxHighlighterManager.class.equalSign}">${equalSign}</span>`;
            // Colorier la valeur d'attribut (avec les guillemets)
            if (quotedValue) {
                colored += `<span class="${SyntaxHighlighterManager.class.attributeValue}">${quotedValue}</span>`;
            }
            return colored;
        });
    };

    /**
     * Colorie le texte qui se trouve entre les balises HTML
     * @param {string} text - texte contenant du HTML échappé
     * @returns {string} texte avec le contenu textuel coloré
     */
    colorText(text) {
        // Colorer le texte entre > et < en évitant les commentaires
        return text.replace(/(&gt;)([^&]+?)(&lt;)/g, (match, p1, content, p3) => {
            // Si le contenu est vide ou ne contient que des espaces, on ne le colore pas
            if (!content.trim()) return match;

            // Éviter de colorer si c'est le début d'un commentaire
            if (p3 === '&lt;' && text.substr(text.indexOf(match) + match.length - 4, 7) === '&lt;!--') {
                return match;
            }

            return `${p1}<span class="${SyntaxHighlighterManager.class.text}">${content}</span>${p3}`;
        });
    };

    copyCodeInBlockCode(){
        document.querySelectorAll('[data-code-target]').forEach(element => {
            let targetSelector = element.getAttribute('data-code-target');
            let target = document.querySelector(targetSelector);
            target.innerHTML = element.innerHTML;
        });
    };
}