const fanartGallery = document.getElementById('fanartgallery');
const year = document.getElementById('year');
const lightBoxElement = document.getElementById('lightBoxElement');
const galleryDisplay = document.getElementById('galleryDisplay');
const galleryCredit = document.getElementById('galleryCredit');


lightBoxElement.style.display = 'none';




let galleryList = {
    2020: ["ari.jpg", "bitterhunibunni-2.jpg", "bitterhunibunni-3.jpg", "bitterhunibunni.jpg", "cactus-2.jpg", "cactus.jpg", "carml_.jpg", "cato.jpg", "cup-1.jpg", "cup-2.jpg", "cup.jpg", "dannie-mango-2.jpg", "dannie-mango-3.jpg", "dannie-mango-4.jpg", "dannie-mango-5.jpg", "dannie-mango-6.jpg", "dannie-mango.jpg", "dannie-mango.jpg", "furumasukusaga-2.jpg", "furumasukusaga.jpg", "hugsnerdsalad-2.jpg", "hugsnerdsalad-3.jpg", "hugsnerdsalad.jpg", "josiexbj.jpg", "julpik-2.jpg", "julpik.jpg", "kimeuro.jpg", "kimeuro400900.jpg", "kira.cant.draw.jpg", "kuudere-potato.jpg", "lakluslime.jpg", "lui-1.jpg", "lui-2.jpg", "lui-3.jpg", "lui-4.jpg", "lui.jpg", "magiciionaboard.jpg", "majolerigolo-2.jpg", "majolerigolo-3.jpg", "majolerigolo-4.jpg", "majolerigolo-5.jpg", "majolerigolo-6.jpg", "majolerigolo-7.jpg", "majolerigolo-8.jpg", "majolerigolo-9.jpg", "majolerigolo.jpg", "mellowdaniel.jpg", "melo-2.jpg", "melo.jpg", "milletsoda.jpg", "mintfresh.jpg", "mug.jpg", "pissbucket-2.jpg", "pissbucket-3.jpg", "pissbucket-4.jpg", "pissbucket-5.jpg", "pissbucket-6.jpg", "pissbucket-7.jpg", "pissbucket-8.jpg", "pissbucket.jpg", "pissbukket.jpg", "princesspoweramazing.jpg", "scissorsmori-10.jpg", "scissorsmori-11.jpg", "scissorsmori-12.jpg", "scissorsmori-13.jpg", "scissorsmori-14.jpg", "scissorsmori-15.jpg", "scissorsmori-2.jpg", "scissorsmori-3.jpg", "scissorsmori-4.jpg", "scissorsmori-5.jpg", "scissorsmori-6.jpg", "scissorsmori-7.jpg", "scissorsmori-8.jpg", "scissorsmori-9.jpg", "scissorsmori_1.jpg", "seth-2.jpg", "seth.jpg", "taliachanx.jpg", "understuckonice-2.jpg", "understuckonice.jpg", "unknown-1.jpg", "unknown-10.jpg", "unknown-11.jpg", "unknown-12.jpg", "unknown-13.jpg", "unknown-14.jpg", "unknown-15.jpg", "unknown-16.jpg", "unknown-17.jpg", "unknown-18.jpg", "unknown-19.jpg", "unknown-2.jpg", "unknown-20.jpg", "unknown-21.jpg", "unknown-22.jpg", "unknown-23.jpg", "unknown-24.jpg", "unknown-25.jpg", "unknown-26.jpg", "unknown-27.jpg", "unknown-28.jpg", "unknown-29.jpg", "unknown-3.jpg", "unknown-30.jpg", "unknown-4.jpg", "unknown-5.jpg", "unknown-6.jpg", "unknown-7.jpg", "unknown-8.jpg", "unknown-9.jpg", "viomee.jpg", "zeagulls-2.jpg", "zeagulls.jpg", "zuma.jpg"],
    2021: [],
    2022: [],
    2023: ["agrumpyrobin.png", "atomizermiser.jpg", "axeman.jpg", "baldintegra.png", "bitterhunnibunni.png", "d3mni.gif", "d3mni.png", "dubstep.png", "furumasuku.png", "hugsnerdsalad.png", "jameng.jpg", "moichein.jpg", "Nolca.png", "paranoidandroid.jpg", "paranoidandroid-2.png", "ramenwaterbottle.jpg", "remi.png", "remi-2.png", "s.v.valan.png", "squid_goes_bork.png", "stupied.idiot.png", "stupied.idiot-2.png", "sugar.png", "tasia.jpg", "unknown.jpg", "unknown.png", "unknown-2.jpg"],
    2024: []
};

// Default Values
let yearLoading = '2023';
let keyLoading = galleryList[yearLoading].length;
let artistName = '';

updateYear(yearLoading);

// does the thingy where the pictures show up or whatever lol
function updateYear(what) {
    yearLoading = what;
    keyLoading = galleryList[yearLoading].length;
    fanartGallery.innerHTML = '';
    year.innerHTML = `You are currently viewing: ${yearLoading}`
    for (let z = 0; z <= keyLoading - 1; z++) {
        let artworkLoading = galleryList[yearLoading][z];
        console.log(artistName);
        fanartGallery.innerHTML += `<img onclick='lightBox("${artworkLoading}")' loading="lazy" src='https://reloaded.literalhat.com/literalfanart/${yearLoading}/literalfanart-${yearLoading}-${artworkLoading}' alt='Fanart by ${artistName}'>`
    };
}



function lightBox(name){
lightBoxElement.style.display = '';
artistName = name.replace(/\.[^.]+$/, '');
galleryDisplay.innerHTML = `<img src='https://reloaded.literalhat.com/literalfanart/${yearLoading}/literalfanart-${yearLoading}-${name}' alt='Fanart by ${name}'>`
galleryCredit.innerHTML = `By ${artistName}`
};

function hidelightBox(){
    lightBoxElement.style.display = 'none';
}

// function checkIfImageExists(url, callback) {
//     const img = new Image();
//     img.src = url;

//     if (img.complete) {
//         callback(true);
//     } else {
//         img.onload = () => {
//             callback(true);
//         };

//         img.onerror = () => {
//             callback(false);
//         };
//     }
// }

// checkIfImageExists(`https://reloaded.literalhat.com/literalfanart/${yearLoading}/literalfanart-${yearLoading}-${galleryList[yearLoading][z]}`, (exists) => {
//     if (exists) {
//         fanartGallery.innerHTML += `<img loading="lazy" src='https://reloaded.literalhat.com/literalfanart/${yearLoading}/literalfanart-${yearLoading}-${galleryList[yearLoading][z]}'>`
//     } else {
//         console.log('rip')
//     }
// });
