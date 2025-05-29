document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('button').forEach(button => {
        button.addEventListener('mouseup', () => {
            button.blur();
        });
    });
});