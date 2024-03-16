let logoimage = document.getElementById('logoimage');
let randomNumber = Math.floor(Math.random() * 4);

const logo = [
    'hat', 'dolly-bowtie', 'worry-cat-blue', 'worry-cat-orange'
];


console.log("I see you looking at the console. what are you, hackerman??");
let icon = logo[randomNumber];

logoimage.innerHTML = (logoimage.innerHTML.replace("x", icon))




