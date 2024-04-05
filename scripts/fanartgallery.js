const fanartGallery = document.getElementById('fanartgallery');
const year = document.getElementById('year');
const lightBoxElement = document.getElementById('lightBoxElement');
const galleryDisplay = document.getElementById('galleryDisplay');
const galleryCredit = document.getElementById('galleryCredit');
const loadingDiv = document.getElementById('loadingDiv');
const loadText = document.getElementById('loadText');


let galleryList = {
    2020: ["ari.jpg", "bitterhunibunni-2.jpg", "bitterhunibunni-3.jpg", "bitterhunibunni.jpg", "cactus-2.jpg", "cactus.jpg", "carml_.jpg", "cato.jpg", "cup-1.jpg", "cup-2.jpg", "cup.jpg", "dannie-mango-2.jpg", "dannie-mango-3.jpg", "dannie-mango-4.jpg", "dannie-mango-5.jpg", "dannie-mango-6.jpg", "dannie-mango.jpg", "dannie-mango.jpg", "furumasukusaga-2.jpg", "furumasukusaga.jpg", "hugsnerdsalad-2.jpg", "hugsnerdsalad-3.jpg", "hugsnerdsalad.jpg", "josiexbj.jpg", "julpik-2.jpg", "julpik.jpg", "kimeuro.jpg", "kimeuro400900.jpg", "kira.cant.draw.jpg", "kuudere-potato.jpg", "lakluslime.jpg", "lui-1.jpg", "lui-2.jpg", "lui-3.jpg", "lui-4.jpg", "lui.jpg", "magiciionaboard.jpg", "majolerigolo-2.jpg", "majolerigolo-3.jpg", "majolerigolo-4.jpg", "majolerigolo-5.jpg", "majolerigolo-6.jpg", "majolerigolo-7.jpg", "majolerigolo-8.jpg", "majolerigolo-9.jpg", "majolerigolo.jpg", "mellowdaniel.jpg", "melo-2.jpg", "melo.jpg", "milletsoda.jpg", "mintfresh.jpg", "mug.jpg", "pissbucket-2.jpg", "pissbucket-3.jpg", "pissbucket-4.jpg", "pissbucket-5.jpg", "pissbucket-6.jpg", "pissbucket-7.jpg", "pissbucket-8.jpg", "pissbucket.jpg", "pissbukket.jpg", "princesspoweramazing.jpg", "scissorsmori-10.jpg", "scissorsmori-11.jpg", "scissorsmori-12.jpg", "scissorsmori-13.jpg", "scissorsmori-14.jpg", "scissorsmori-15.jpg", "scissorsmori-2.jpg", "scissorsmori-3.jpg", "scissorsmori-4.jpg", "scissorsmori-5.jpg", "scissorsmori-6.jpg", "scissorsmori-7.jpg", "scissorsmori-8.jpg", "scissorsmori-9.jpg", "scissorsmori_1.jpg", "seth-2.jpg", "seth.jpg", "taliachanx.jpg", "understuckonice-2.jpg", "understuckonice.jpg", "unknown-1.jpg", "unknown-10.jpg", "unknown-11.jpg", "unknown-12.jpg", "unknown-13.jpg", "unknown-14.jpg", "unknown-15.jpg", "unknown-16.jpg", "unknown-17.jpg", "unknown-18.jpg", "unknown-19.jpg", "unknown-2.jpg", "unknown-20.jpg", "unknown-21.jpg", "unknown-22.jpg", "unknown-23.jpg", "unknown-24.jpg", "unknown-25.jpg", "unknown-26.jpg", "unknown-27.jpg", "unknown-28.jpg", "unknown-29.jpg", "unknown-3.jpg", "unknown-30.jpg", "unknown-4.jpg", "unknown-5.jpg", "unknown-6.jpg", "unknown-7.jpg", "unknown-8.jpg", "unknown-9.jpg", "viomee.jpg", "zeagulls-2.jpg", "zeagulls.jpg", "zuma.jpg"],
    2021: ["197.webp", "acheshat.webp", "acid wizard.webp", "aracn0phobia-2.webp", "aracn0phobia-3.webp", "aracn0phobia-4.webp", "aracn0phobia-5.webp", "aracn0phobia.webp", "ash._.bella.webp", "bitterhunnibunni.webp", "cawshii.webp", "ciphybara-2.webp", "ciphybara.webp", "d3mn1-2.webp", "d3mn1-3.webp", "d3mn1-4.webp", "d3mn1.webp", "danniemango.webp", "digitab-2.webp", "digitab.webp", "discardedglue.webp", "dubdraws._.webp", "em.11y.webp", "eristhemad-2.webp", "eristhemad.webp", "fish___.webp", "foxifox.webp", "furumasuku-2.webp", "furumasuku-3.webp", "furumasuku.webp", "greenboi-2.webp", "greenboi-3.webp", "greenboi-4.webp", "greenboi.webp", "hugsnerdsalad.webp", "indighosty.webp", "indighosty2.webp", "indyghosty.webp", "just.someartist-2.webp", "just.someartist-3.webp", "just.someartist.webp", "kalsa.webp", "kimberly.s.l-2.webp", "kimberly.s.l.webp", "kimeuro-2.webp", "kimeuro.webp", "kinzator.webp", "knut_xl.webp", "lucky.webp", "lucky2.webp", "lui-2.webp", "lui-3.webp", "lui.webp", "maddened_muffins-2.webp", "maddened_muffins-3.webp", "maddened_muffins-4.webp", "maddened_muffins.webp", "madmin.webp", "majolerigolo-2.webp", "majolerigolo-3.webp", "majolerigolo.webp", "milletsoda-2.webp", "milletsoda-3.webp", "milletsoda-4.webp", "milletsoda.webp", "mmp69.webp", "nachorick.art.webp", "ness-2.webp", "ness-3.webp", "ness.webp", "neutral neurons-2.webp", "neutral-neurons.webp", "nexketch-2.webp", "nexketch-3.webp", "nexketch-4.webp", "nexketch-5.webp", "niohokyo.webp", "niohyoko.webp", "nioyhok.webp", "official_misterfitghoul.webp", "oranghost.webp", "pakmur-2.webp", "pakmur.webp", "pass10n4rt.webp", "pissbucket-1.webp", "pissbucket-10.webp", "pissbucket-11.webp", "pissbucket-2.webp", "pissbucket-3.webp", "pissbucket-4.webp", "pissbucket-5.webp", "pissbucket-6.webp", "pissbucket-7.webp", "pissbucket-8.webp", "pissbucket-9.webp", "pissbucket.webp", "qintique.webp", "qivvvvv.webp", "razorbwades.webp", "reelrenzo.webp", "rgpamins-2.webp", "rgpamins.webp", "rikuriku.webp", "rpganims.webp", "scissors_mori.webp", "staggerknight.webp", "strange candle.webp", "sugarflareegq-2.webp", "sugarflareegq-3.webp", "sugarflareegq-4.webp", "sugarflareegq.webp", "tappimus-2.webp", "tappimus.webp", "tenshii_z.webp", "theuniverse-2.webp", "theuniverse-3.webp", "theuniverse-4.webp", "theuniverse.webp", "ubaepeach.webp", "ubaepeach2.webp", "ubaepeachy.webp", "unknown-1.webp", "unknown-10.webp", "unknown-11.webp", "unknown-12.webp", "unknown-13.webp", "unknown-14.webp", "unknown-15.webp", "unknown-16.webp", "unknown-17.webp", "unknown-18.webp", "unknown-19.webp", "unknown-2.webp", "unknown-20.webp", "unknown-21.webp", "unknown-22.webp", "unknown-23.webp", "unknown-24.webp", "unknown-25.webp", "unknown-26.webp", "unknown-27.webp", "unknown-28.webp", "unknown-29.webp", "unknown-3.webp", "unknown-30.webp", "unknown-31.webp", "unknown-32.webp", "unknown-33.webp", "unknown-34.webp", "unknown-35.webp", "unknown-36.webp", "unknown-37.webp", "unknown-38.webp", "unknown-39.webp", "unknown-4.webp", "unknown-40.webp", "unknown-41.webp", "unknown-42.webp", "unknown-5.webp", "unknown-6.webp", "unknown-7.webp", "unknown-8.webp", "unknown-9.webp", "viomee-2.webp", "viomee.webp", "weirddegree.webp", "weirddegree2.webp", "zeagulls-2.webp", "zeagulls.webp", "_crowebarr.webp"],
    2022: ["abdel.webp", "absolutetomink.webp", "agrumpyrobin.webp", "baldintegra.webp", "baldintegrawhateven.webp", "baldintegrawhateven2.webp", "bandannaboy.webp", "bitterhunibuni.webp", "bitterhunnibunni-2.webp", "bitterhunnibunni.webp", "boredarttoast-2.webp", "boredarttoast.webp", "boredarttoaste.webp", "cake878.webp", "carson.webp", "ciphybara-2.webp", "ciphybara-3.webp", "ciphybara-5.webp", "ciphybara.webp", "critical.webp", "critical2.webp", "critty-2.webp", "critty.webp", "d3mn1-2.webp", "d3mn1-3.webp", "d3mn1.webp", "d3mni-2.webp", "d3mni-3.webp", "d3mni-4.webp", "d3mni-5.webp", "d3mni-6.webp", "d3mni-7.webp", "d3mni.webp", "dcx.17-1.webp", "dcx.17-10.webp", "dcx.17-11.webp", "dcx.17-12.webp", "dcx.17-13.webp", "dcx.17-14.webp", "dcx.17-15.webp", "dcx.17-16.webp", "dcx.17-17.webp", "dcx.17-18.webp", "dcx.17-19.webp", "dcx.17-2.webp", "dcx.17-20.webp", "dcx.17-21.webp", "dcx.17-22.webp", "dcx.17-23.webp", "dcx.17-24.webp", "dcx.17-25.webp", "dcx.17-26.webp", "dcx.17-27.webp", "dcx.17-28.webp", "dcx.17-29.webp", "dcx.17-3.webp", "dcx.17-30.webp", "dcx.17-31.webp", "dcx.17-32.webp", "dcx.17-33.webp", "dcx.17-34.webp", "dcx.17-35.webp", "dcx.17-36.webp", "dcx.17-37.webp", "dcx.17-38.webp", "dcx.17-39.webp", "dcx.17-4.webp", "dcx.17-40.webp", "dcx.17-41.webp", "dcx.17-42.webp", "dcx.17-43.webp", "dcx.17-5.webp", "dcx.17-6.webp", "dcx.17-7.webp", "dcx.17-8.webp", "dcx.17-9.webp", "digitab-2.webp", "digitab.webp", "digitab2.webp", "discuit.webp", "dubdraws._-1.webp", "dubdraws._-11.webp", "dubdraws._-12.webp", "dubdraws._-13.webp", "dubdraws._-14.webp", "dubdraws._-2.webp", "dubdraws._-3.webp", "dubdraws._-4.webp", "dubdraws._-5.webp", "dubdraws._-6.webp", "dubdraws._-7.webp", "dubdraws._-8.webp", "dubdraws._-9.webp", "eristhemad-2.webp", "eristhemad-3.webp", "eristhemad.webp", "eurokim400900-2.webp", "eurokim400900-3.webp", "eurokim400900.webp", "ficklepish-1.webp", "ficklepish-10.webp", "ficklepish-11.webp", "ficklepish-12.webp", "ficklepish-13.webp", "ficklepish-14.webp", "ficklepish-15.webp", "ficklepish-2.webp", "ficklepish-3.webp", "ficklepish-4.webp", "ficklepish-5.webp", "ficklepish-6.webp", "ficklepish-7.webp", "ficklepish-8.webp", "ficklepish-9.webp", "funsbuns.webp", "furumasuku-3.webp", "furumasuku.webp", "grb.webp", "htpuraa.webp", "hugsnerdsalad-10.webp", "hugsnerdsalad-11.webp", "hugsnerdsalad-12.webp", "hugsnerdsalad-13.webp", "hugsnerdsalad-14.webp", "hugsnerdsalad-15.webp", "hugsnerdsalad-16.webp", "hugsnerdsalad-17.webp", "hugsnerdsalad-18.webp", "hugsnerdsalad-19.webp", "hugsnerdsalad-2.webp", "hugsnerdsalad-3.webp", "hugsnerdsalad-4.webp", "hugsnerdsalad-5.webp", "hugsnerdsalad-6.webp", "hugsnerdsalad-7.webp", "hugsnerdsalad-8.webp", "hugsnerdsalad-9.webp", "hugsnerdsalad.webp", "hugsnerdsalad3.webp", "hugsnordseled.webp", "hydrogen.webp", "icritty.webp", "joenutz.webp", "joosalt.webp", "jorden.webp", "jorden2.webp", "jorden3.webp", "joyii.spam_.webp", "jpinach.webp", "jpinach2.webp", "jpinach3.webp", "just.someartist.webp", "kiyoshi-2.webp", "kiyoshi.webp", "koldthewizard.webp", "kolthewiz.webp", "krliz-2.webp", "krliz.webp", "krlizz.webp", "kromaticlost.webp", "laven.webp", "limpbusiness-2.webp", "limpbusiness..webp", "limpbusiness.webp", "little_cute._.bean-2.webp", "little_cute._.bean.webp", "lucky.webp", "lui.webp", "lyle.webp", "maboi9798-2.webp", "maboi9798-3.webp", "maboi9798-4.webp", "maboi9798-5.webp", "maboi9798-6.webp", "maboi9798-7.webp", "maboi9798.webp", "mengdevii.webp", "miles.webp", "mochatea.webp", "moichein.webp", "nexketch-1.webp", "nexketch-3.webp", "nexketch-4.webp", "nexketch-5.webp", "nexketch-6.webp", "nexketch-7.webp", "noodle.webp", "ottomoth-1.webp", "ottomoth-10.webp", "ottomoth-11.webp", "ottomoth-12.webp", "ottomoth-13.webp", "ottomoth-14.webp", "ottomoth-15.webp", "ottomoth-16.webp", "ottomoth-17.webp", "ottomoth-18.webp", "ottomoth-19.webp", "ottomoth-2.webp", "ottomoth-20.webp", "ottomoth-21.webp", "ottomoth-22.webp", "ottomoth-3.webp", "ottomoth-4.webp", "ottomoth-5.webp", "ottomoth-6.webp", "ottomoth-7.webp", "ottomoth-8.webp", "ottomoth-9.webp", "pinworms.webp", "pissbucket-2.webp", "pissbucket-3.webp", "pissbucket-4.webp", "pissbucket-5.webp", "pissbucket-6.webp", "pissbucket.webp", "qritty.webp", "queenn_janee-2.webp", "queenn_janee-3.webp", "queenn_janee.webp", "quiccwater_art.webp", "quicwaterr_art.webp", "rat.webp", "reelrenzo.webp", "reiscollectionart.webp", "rgpanims.webp", "rgpanims2.webp", "sheperd2.webp", "shepherd.webp", "sketching_with_devon.webp", "spong.webp", "stupied_idiot.webp", "t0mink.webp", "tripea.webp", "unknown-1.webp", "unknown-10.webp", "unknown-11.webp", "unknown-12.webp", "unknown-13.webp", "unknown-14.webp", "unknown-15.webp", "unknown-16.webp", "unknown-17.webp", "unknown-18.webp", "unknown-19.webp", "unknown-2.webp", "unknown-20.webp", "unknown-3.webp", "unknown-4.webp", "unknown-5.webp", "unknown-6.webp", "unknown-7.webp", "unknown-8.webp", "unknown-9.webp", "uviuh_rip.webp", "viomee.webp", "walterwhite.webp", "wanderingrobot.webp", "xxtoy_nightmarexx.webp", "zy-2.webp", "zy.webp"],
    2023: ["agrumpyrobin.png", "atomizermiser.jpg", "axeman.jpg", "baldintegra.png", "bitterhunnibunni.png", "d3mni.gif", "d3mni.png", "dubstep.png", "furumasuku.png", "hugsnerdsalad.png", "jameng.jpg", "moichein.jpg", "Nolca.png", "paranoidandroid.jpg", "paranoidandroid-2.png", "ramenwaterbottle.jpg", "remi.png", "remi-2.png", "s.v.valan.png", "squid_goes_bork.png", "stupied.idiot.png", "stupied.idiot-2.png", "sugar.png", "tasia.jpg", "unknown.jpg", "unknown.png", "queenn_janee.jpg"],
    2024: []
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
        <img loading="lazy" class='fanartimage' src='https://reloaded.literalhat.com/literalfanart/${yearLoading}/literalfanart-${yearLoading}-${artworkLoading}' alt='Fanart by ${artistName}'></div>`
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
        lightBoxID.innerHTML += `<div class='galleryCredit'>
 
                    <h2 class='white'>By ${artistCredit}</h2>
                    <hr>
                    </div>
                    `
    }
};



// <img loading="lazy" class='lightBoxImage' src='https://reloaded.literalhat.com/literalfanart/${yearLoading}/literalfanart-${yearLoading}-${name}' alt='Fanart by ${artistName}'>