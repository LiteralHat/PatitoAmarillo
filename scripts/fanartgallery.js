
function lightBox(element) {

    if (element.classList.contains('lightBoxOn')) {
        element.classList.remove('lightBoxOn');
        let paragraph = element.parentElement.querySelector('h3');
        if (paragraph) {
            paragraph.remove();
        }

    } else {
        let artistCredit = element.id.replace(/^[^_]*_/g, "");
        element.src =  element.src.replace(/leviathan/, 'reloaded');
        console.log(element.src);
        element.classList.add('lightBoxOn');
        let paragraph = document.createElement('h3');
        paragraph.textContent = 'Fanart By ' + artistCredit ;
        element.parentElement.appendChild(paragraph);

    }
};


