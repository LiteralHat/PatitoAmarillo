function lightBox(element) {
    const parent = element.parentElement;
    const isLightBoxOn = element.classList.contains('lightBoxOn');

    if (isLightBoxOn) {
        element.classList.remove('lightBoxOn');
        const paragraph = parent.querySelector('h3');
        if (paragraph) {
            paragraph.remove();
        }
    } else {
        const artistCredit = element.id.split('_').slice(1).join('_');
        element.src = element.src.replace(/leviathan/, 'reloaded');
        element.classList.add('lightBoxOn');
        const paragraph = document.createElement('h3');
        paragraph.textContent = 'Fanart By ' + artistCredit;
        parent.appendChild(paragraph);
    }
}



