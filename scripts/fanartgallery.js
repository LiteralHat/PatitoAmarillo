const fanartGallery = document.getElementById('fanartgallery');
const year = document.getElementById('year');
const lightBoxElement = document.getElementById('lightBoxElement');
const galleryDisplay = document.getElementById('galleryDisplay');
const galleryCredit = document.getElementById('galleryCredit');
const loadingDiv = document.getElementById('loadingDiv');
const loadText = document.getElementById('loadText');


let yearLoading = '2023';
let keyLoading = galleryList[yearLoading].length;
let artistName = '';

loadingDiv.style.display = 'none';
fanartGallery.classList.add('hidden');

// Animation for the loading thing
function updateDots() {
    let dots = loadText.textContent;
    dots = dots.length < 3 ? dots + '.' : '.';
    loadText.textContent = dots;
}
setInterval(updateDots, 300);

updateYear(yearLoading);

// does the thingy where the pictures show up or whatever lol
function updateYear(what) {
    loadingAnimation('start');
    yearLoading = what;
    keyLoading = galleryList[yearLoading].length;
    fanartGallery.innerHTML = '';
    year.innerHTML = `You are currently viewing: ${yearLoading}`
    for (let z = 0; z <= keyLoading - 1; z++) {
        let artworkLoading = galleryList[yearLoading][z]; //gives a unique ID for every single artwork
        fanartGallery.innerHTML += `
        <div id='${artworkLoading}' onclick='lightBox("${artworkLoading}")'>
        <img loading="lazy" class='fanartimage' src='https://leviathan.literalhat.com/literalfanart/${yearLoading}/literalfanart-${yearLoading}-${artworkLoading}.webp' alt='Fanart by ${artistName}'></div>`
    };
    Promise.all(Array.from(document.querySelectorAll('.fanartimage')).filter(img => !img.complete).map(img => new Promise(resolve => { img.onload = img.onerror = resolve; }))).then(() => {
        loadingAnimation('done');
    });

}

function loadingAnimation(status){
    if (status == 'start') {
        loadingDiv.style.display = '';
        fanartGallery.classList.add('hidden');
        console.log('Gallery Init')
    } else if (status =='done') {
        loadingDiv.style.display = 'none';
        fanartGallery.classList.remove('hidden');
        console.log('Gallery Init Complete')
    }
}


function lightBox(name) {
    var lightBoxID = document.getElementById(name);
    if (lightBoxID.classList.contains('lightBoxOn')) {


        lightBoxID.classList.remove('lightBoxElement');
        lightBoxID.classList.remove('lightBoxOn');
        var galleryCreditElement = lightBoxID.querySelector('.galleryCredit');
        galleryCreditElement.parentNode.removeChild(galleryCreditElement);

    } else {
        let artistCredit = name.replace(/\.[^.]+$/, '');
        artistCredit = artistCredit.replace(/-\d+$/, '');
        lightBoxID.classList.add('lightBoxElement');
        lightBoxID.classList.add('lightBoxOn');
        lightBoxID.innerHTML = lightBoxID.innerHTML.replace(/leviathan/g, 'reloaded');
        lightBoxID.innerHTML += `<div class='galleryCredit'>
 
                    <h2 class='white'>By ${artistCredit}</h2>
                    <hr>
                    </div>
                    `
    }
};



// <img loading="lazy" class='lightBoxImage' src='https://reloaded.literalhat.com/literalfanart/${yearLoading}/literalfanart-${yearLoading}-${name}' alt='Fanart by ${artistName}'>