const logo = [
    'hat', 'dolly-bowtie', 'worry-cat-blue', 'worry-cat-orange', 'furumasukusaga-vore'
];

let logoimage = document.getElementById('logoimage');
let randomNumber = Math.floor(Math.random() * 4);
let terribleVoreIcon = Math.floor(Math.random() * 100);
let icon = logo[1];


console.log(terribleVoreIcon)

if (terribleVoreIcon == 69) {
    icon = logo[4];
} else {
    icon = logo[randomNumber];
};



console.log("I see you looking at the console. what are you, hackerman??");

logoimage.innerHTML = (logoimage.innerHTML.replace("x", icon))




