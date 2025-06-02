export default class SyntaxHighlighterManager {

    // Couleurs utilisées pour chaque type de token HTML
    static class = {
        tag: "highlight-tag",             // Bleu clair pour les chevrons < et > et le nom des balises
        tagName: "highlight-tag-name",         // Bleu clair pour le nom des balises
        attributeName: "highlight-attribute-name",   // Bleu clair plus clair pour les noms d'attributs
        attributeValue: "highlight-attribute-value",  // Orange clair pour les valeurs d'attributs (entre guillemets)
        comment: "highlight-comment",         // Vert olive pour les commentaires HTML
        equalSign: "highlight-equal-sign"        // Gris clair pour le signe égal '=' dans les attributs
    };

    /**
     * Initialise le surlignage en appliquant la méthode highlight
     * à tous les éléments du DOM qui ont l'attribut data-type="code"
     */
    init() {
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
        // Étape 3 : colorer les balises, leurs noms et attributs
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
            .replace(/&/g, "&amp;")  // d'abord &, sinon les &lt; deviennent &amp;lt;
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
        return text.replace(
            /(&lt;\/?)([a-zA-Z0-9\-]+)([^&]*?)(&gt;)/g,
            (match, p1, tagName, attrs, p4) => {
                // p1 = "<" ou "</"
                // tagName = nom de la balise
                // attrs = chaîne des attributs (ex : ' href="test" class="c"')
                // p4 = ">" ou "/>"
                // Colorier les chevrons < ou </
                let tagStart = `<span class="${SyntaxHighlighterManager.class.tag}">${p1}</span>`;
                // Colorier le nom de la balise
                let tagNameColored = `<span class="${SyntaxHighlighterManager.class.tagName}">${tagName}</span>`;
                // Colorier les attributs
                let attrsColored = this.colorAttributes(attrs);
                // Colorier la fermeture de la balise >
                let tagEnd = `<span class="${SyntaxHighlighterManager.class.tag}">${p4}</span>`;
                return tagStart + tagNameColored + attrsColored + tagEnd;
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
        // Regex qui capture :
        // 1) le nom de l'attribut ([a-zA-Z\-:]+)
        // 2) le signe égal (=) optionnel
        // 3) la valeur optionnelle entre guillemets ("...")
        return attrs.replace(/([a-zA-Z\-:]+)(=)?("([^"]*)")?/g, (match, attrName, equalSign, attrValue) => {
            // Colorier le nom de l'attribut
            let colored = `<span class="${SyntaxHighlighterManager.class.attributeName}">${attrName}</span>`;
            // Si il y a un signe égal, le colorier aussi
            if (equalSign) {
                colored += `<span class="${SyntaxHighlighterManager.class.equalSign}">${equalSign}</span>`;
            }
            // Si il y a une valeur d'attribut, la colorier également
            if (attrValue) {
                colored += `<span class="${SyntaxHighlighterManager.class.attributeValue}">${attrValue}</span>`;
            }
            return colored;
        });
    };
}


