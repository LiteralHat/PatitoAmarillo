const fanartGallery = document.getElementById('fanartgallery');
const year = document.getElementById('year');
const lightBoxElement = document.getElementById('lightBoxElement');
const galleryDisplay = document.getElementById('galleryDisplay');
const galleryCredit = document.getElementById('galleryCredit');
const loadingDiv = document.getElementById('loadingDiv');
const loadText = document.getElementById('loadText');


let galleryList = {
    2020: [ "ari", "bitterhunibunni-2", "bitterhunibunni-3", "bitterhunibunni", "cactus-2", "cactus", "carml_", "cato", "cup-1", "cup-2", "cup", "danniemango-2", "danniemango-3", "danniemango-4", "danniemango-5", "danniemango-6", "danniemango", "danniemango", "furumasukusaga-2", "furumasukusaga", "hugsnerdsalad-2", "hugsnerdsalad-3", "hugsnerdsalad", "josiexbj", "julpik-2", "julpik", "kimeuro", "kimeuro400900", "kira.cant.draw", "kuuderepotato", "lakluslime", "lui-1", "lui-2", "lui-3", "lui-4", "lui", "magiciionaboard", "majolerigolo-2", "majolerigolo-3", "majolerigolo-4", "majolerigolo-5", "majolerigolo-6", "majolerigolo-7", "majolerigolo-8", "majolerigolo-9", "majolerigolo", "mellowdaniel", "melo-2", "melo", "milletsoda", "mintfresh", "mug", "pissbucket-2", "pissbucket-3", "pissbucket-4", "pissbucket-5", "pissbucket-6", "pissbucket-7", "pissbucket-8", "pissbucket", "pissbukket", "princesspoweramazing", "scissorsmori-10", "scissorsmori-11", "scissorsmori-12", "scissorsmori-13", "scissorsmori-14", "scissorsmori-15", "scissorsmori-2", "scissorsmori-3", "scissorsmori-4", "scissorsmori-5", "scissorsmori-6", "scissorsmori-7", "scissorsmori-8", "scissorsmori-9", "scissorsmori_1", "seth-2", "seth", "taliachanx", "understuckonice-2", "understuckonice", "unknown-1", "unknown-10", "unknown-11", "unknown-12", "unknown-13", "unknown-14", "unknown-15" ],
    2021: [ "197", "acheshat", "acidwizard", "aracn0phobia-2", "aracn0phobia-3", "aracn0phobia-4", "aracn0phobia-5", "aracn0phobia", "ash._.bella", "bitterhunnibunni", "cawshii", "ciphybara-2", "ciphybara", "d3mn1-2", "d3mn1-3", "d3mn1-4", "d3mn1", "danniemango", "digitab-2", "digitab", "discardedglue", "dubdraws._", "em.11y", "eristhemad-2", "eristhemad", "fish___", "foxifox", "furumasuku-2", "furumasuku-3", "furumasuku", "greenboi-2", "greenboi-3", "greenboi-4", "greenboi", "hugsnerdsalad", "indighosty", "indighosty2", "indyghosty", "just.someartist-2", "just.someartist-3", "just.someartist", "kalsa", "kimberly.s.l-2", "kimberly.s.l", "kimeuro-2", "kimeuro", "kinzator", "knut_xl", "lucky", "lucky2", "lui-2", "lui-3", "lui", "maddened_muffins-2", "maddened_muffins-3", "maddened_muffins-4", "maddened_muffins", "madmin", "majolerigolo-2", "majolerigolo-3", "majolerigolo", "milletsoda-2", "milletsoda-3", "milletsoda-4", "milletsoda", "mmp69", "nachorick.art", "ness-2", "ness-3", "ness", "neutral-neurons", "neutralneurons-2", "nexketch-2", "nexketch-3", "nexketch-4", "nexketch-5", "niohokyo", "niohyoko", "nioyhok", "official_misterfitghoul", "oranghost", "pakmur-2", "pakmur", "pass10n4rt" ],
    2022: [ "abdel", "absolutetomink", "agrumpyrobin", "baldintegra-2", "baldintegra", "bandannaboy", "bitterhunibuni", "bitterhunnibunni-2", "bitterhunnibunni", "boredarttoast-2", "boredarttoast", "boredarttoaste", "cake878", "carson", "ciphybara-2", "ciphybara-3", "ciphybara-5", "ciphybara", "critical", "critical2", "critty-2", "critty", "d3mn1-2", "d3mn1-3", "d3mn1", "d3mni-2", "d3mni-3", "d3mni-4", "d3mni-5", "d3mni-6", "d3mni-7", "d3mni", "dcx.17-1", "dcx.17-10", "dcx.17-11", "dcx.17-12", "dcx.17-13", "dcx.17-14", "dcx.17-15", "dcx.17-16", "dcx.17-17", "dcx.17-18", "dcx.17-19", "dcx.17-2", "dcx.17-20", "dcx.17-23", "dcx.17-24", "dcx.17-25", "dcx.17-26", "dcx.17-27", "dcx.17-28", "dcx.17-29", "dcx.17-3", "dcx.17-30", "dcx.17-31", "dcx.17-32", "dcx.17-33", "dcx.17-34", "dcx.17-35", "dcx.17-36", "dcx.17-37", "dcx.17-38", "dcx.17-39", "dcx.17-4", "dcx.17-40", "dcx.17-41", "dcx.17-42", "dcx.17-43", "dcx.17-44", "dcx.17-45", "dcx.17-46", "dcx.17-48", "dcx.17-49", "dcx.17-5", "dcx.17-50", "dcx.17-51", "dcx.17-52", "dcx.17-53", "dcx.17-54", "dcx.17-55", "dcx.17-56", "dcx.17-57", "dcx.17-58", "dcx.17-59", "dcx.17-6", "dcx.17-60", "dcx.17-61", "dcx.17-62", "dcx.17-64", "dcx.17-65", "dcx.17-66", "dcx.17-67", "dcx.17-69", "dcx.17-7", "dcx.17-70", "dcx.17-71", "dcx.17-72", "dcx.17-73", "dcx.17-74", "dcx.17-75", "dcx.17-76", "dcx.17-77", "dcx.17-78", "dcx.17-79", "dcx.17-8", "dcx.17-80", "dcx.17-81", "dcx.17-82", "dcx.17-83", "dcx.17-84", "dcx.17-85", "dcx.17-86", "dcx.17-87", "dcx.17-88", "dcx.17-9", "digitab-2", "digitab", "digitab2", "discuit", "dubdraws._-1", "dubdraws._-11", "dubdraws._-12", "dubdraws._-13", "dubdraws._-14", "dubdraws._-2", "dubdraws._-3", "dubdraws._-4", "dubdraws._-5", "dubdraws._-6", "dubdraws._-7", "dubdraws._-8", "dubdraws._-9", "eristhemad-2", "eristhemad-3", "eristhemad", "eurokim400900-2", "eurokim400900-80", "eurokim400900", "ficklepish-1", "ficklepish-10", "ficklepish-11", "ficklepish-12", "ficklepish-13", "ficklepish-14", "ficklepish-15", "ficklepish-2", "ficklepish-3", "ficklepish-4", "ficklepish-5", "ficklepish-6", "ficklepish-7", "ficklepish-8", "ficklepish-9", "funsbuns", "furumasuku-3", "furumasuku", "grb", "htpuraa", "hugsnerdsalad-10", "hugsnerdsalad-11", "hugsnerdsalad-12", "hugsnerdsalad-13", "hugsnerdsalad-14", "hugsnerdsalad-2", "hugsnerdsalad-3", "hugsnerdsalad-4", "hugsnerdsalad-5", "hugsnerdsalad-6", "hugsnerdsalad-69", "hugsnerdsalad-7", "hugsnerdsalad-70", "hugsnerdsalad-8", "hugsnerdsalad-81", "hugsnerdsalad-9", "hugsnerdsalad", "hugsnerdsalad2", "hugsnerdsalad3", "hugsnerdsalad6", "hugsnordseled", "hydrogen", "icritty", "joenutz", "joosalt", "jorden", "jorden2", "jorden3", "joyii.spam_", "jpinach", "jpinach2", "jpinach3", "just.someartist", "kiyoshi-2", "kiyoshi", "koldthewizard", "kolthewiz", "krliz-2", "krliz", "krlizz", "kromaticlost", "laven", "limpbusiness-2", "limpbusiness.", "limpbusiness", "little_cute._.bean-2", "little_cute._.bean", "lucky", "lui", "lyle", "maboi9798-2", "maboi9798-3", "maboi9798-4", "maboi9798-5", "maboi9798-6", "maboi9798-82", "maboi9798", "mengdevii", "miles", "mochatea", "moichein", "nexketch-1", "nexketch-2", "nexketch-3", "nexketch-4", "nexketch-5", "nexketch-6", "nexketch-7", "noodle", "ottomoth-1", "ottomoth-10", "ottomoth-11", "ottomoth-12", "ottomoth-13", "ottomoth-14", "ottomoth-15", "ottomoth-16", "ottomoth-17", "ottomoth-18", "ottomoth-19", "ottomoth-2", "ottomoth-20", "ottomoth-21", "ottomoth-22", "ottomoth-3", "ottomoth-4", "ottomoth-5", "ottomoth-6", "ottomoth-7", "ottomoth-8", "ottomoth-9", "pinworms", "pissbucket-2", "pissbucket-3", "pissbucket-71", "pissbucket-72", "pissbucket-83", "pissbucket", "qritty", "queenn_janee-2", "queenn_janee-3", "queenn_janee", "quiccwater_art", "quicwaterr_art", "rat", "reelrenzo", "reiscollectionart", "rgpanims", "rgpanims2", "sam.is.snazzy", "sheperd2", "shepherd", "sketching_with_devon", "spong", "stupied_idiot", "t0mink", "tripea", "undoinglee", "unknown-1", "unknown-10", "unknown-11", "unknown-2", "unknown-22", "unknown-3", "unknown-4", "unknown-5", "unknown-6", "unknown-7", "unknown-73", "unknown-74", "unknown-75", "unknown-76", "unknown-77", "unknown-8", "unknown-84", "unknown-9", "unknown", "unknown2", "uviuh_rip", "viomee", "walterwhite", "wanderingrobot", "xxtoy_nightmarexx", "zy-2", "zy" ],
    2023: [ "agrumpyrobin", "atomizermiser", "axeman", "baldintegra", "bitterhunnibunni", "d3mni", "dcx.17-1", "dcx.17-10", "dcx.17-11", "dcx.17-12", "dcx.17-13", "dcx.17-14", "dcx.17-15", "dcx.17-2", "dcx.17-3", "dcx.17-4", "dcx.17-5", "dcx.17-7", "dcx.17-8", "dcx.17-9", "dubstep", "furumasuku", "hugsnerdsalad", "jameng", "moichein", "nolca", "parachutesheep-2", "parachutesheep", "paranoidandroid-2", "paranoidandroid", "queenn_janee", "ramenwaterbottle", "relaxande", "remi-2", "remi", "s.v.valan", "squid_goes_bork", "stupied.idiot-2", "stupied.idiot", "sugar", "tasia", "unknown", "unknowns0l" ],
    2024: [ "esoteric_madness", "himignicest", "sam.is.snazzy" ]
};

// Default Values
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