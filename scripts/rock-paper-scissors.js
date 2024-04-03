console.log('hello world!');

const mainMenuBox = document.getElementById('mainMenuBox');
const gameBox = document.getElementById('gameBox');
const gameBoxPlayer = document.getElementById('gameBoxPlayer');
const pickAnOpponent = document.getElementById('pickAnOpponent');

gameBox.style.display = 'none';
gameBoxPlayer.style.display = 'none';

const playHat = document.getElementById('playHat');
const playFang = document.getElementById('playFang');
const playLevy = document.getElementById('playLevy');

playHat.onclick = startHat;
playLevy.onclick = startLevy;
playFang.onclick = startFang;

let opponentName = document.getElementById('opponentName');
let characterImage = document.getElementById('characterImage');
let characterDialogue = document.getElementById('characterDialogue');
let characterName = document.getElementById('characterName');
let characterMove = document.getElementById('characterMove');
let playerMove = document.getElementById('playerMove');



const actionRock = document.getElementById('actionRock');
const actionPaper = document.getElementById('actionPaper');
const actionScissor = document.getElementById('actionScissor');



const opponents = [
    {
        name: 'Hat',
        starttext: 'He gives you a perfunctory glance and faces away from you.'
    },
    {
        name: 'Fang',
        starttext: 'She shakes your hand violently, jumps up and down, then awaits your move.'
    },
    {
        name: 'Levy',
        starttext: 'He absolutely reeks of deep fried chicken.'
    }
];


const dialogues = [
    {
        name: 'Hat',
        'win': ["You’re clearly holding him up, what’s even the point?",
            "He looks down at the floor, hoping you'll leave him alone.",
            "Congratulations. Here’s your useless Reddit gold.",
            "Wow, you're awarding yourself a gold star for that one? Impressive.",
            "The boy stares at you, completely unmoved.",
            "You're really pushing it, aren't you? Can't you see he's had enough?",
            "He responds with a sarcastic clap, clearly unimpressed.",
            "You're fishing for a reaction, but he's not taking the bait.",
            "He looks into the distance, clearly not paying attention.",
            "He looks at you with a congratulatory stare."],
        'lose': ["He stares with a completely hollow gaze.",
            "He checks his imaginary watch, a silent plea for you to wrap it up.",
            "You're both stuck in this awkward limbo, yet you insist on prolonging the agony.",
            "He's mentally checked out, wondering when this torture will finally end.",
            "He's not even pretending to be interested anymore.",
            "A yawn escapes him, a subtle hint that he's beyond bored.",
            "He’s not even bothering to keep count.",
            "He rolls his eyes, then looks at his non-existent wristwatch. ",
            "He yawns softly before shutting his eyes for a microsleep. ",
            "This isn’t fun for both of you, why are you still here?"],
        'tie': []
    },
    {
        name: 'Fang',
        'win': ["She fucking dies inside.",
            "You just killed a part of her.",
            "Underneath that smile lies a world of pain, masked by your victory.",
            "She lost, but she's still enjoying this shitass game for some reason.",
            "She giggles and looks at you, wanting to play another game.",
            "She dotes you on to play another with her.",
            "She looks away, slightly embarrassed.",
            "She looks up with a smile that belies her absolutely crushed reality.",
            "Her entire heart shatters and breaks inside, but she’s happy you won.",
            "She gazes upwards with a sardonic grin, betraying the fact that her soul is now trapped in a desolate void of existential dread and misery."],
        'lose': ["She smiles brightly, knowing she won.",
            "She gleams happily, knowing she won.",
            "She tap dances dramatically, even though she has no idea how to do so and fails miserably.",
            "She twirls around happily like a beyblade.",
            "Maybe you should go play some Minecraft instead. This game sucks anyways.",
            "She grabs each of her head bows and begins bouncing around in happiness.",
            "She pats you on the back, knowing you'll have a chance in the next round..",
            "She wins!",
            "A point for the Ferocious Fang!",
            "Adjusting her bowtie, she smiles proudly."],
        'tie': []
    },
    {
        name: 'Levy',

        'lose': ["He wears a smug grin, heavily mocking your chronic lack of skill.",
            "He looks at you with disbelief as if that’s the best you can do.",
            "He chuckles as he bears witness to your woeful inadequacy.",
            "Try harder, maybe?",
            "Are you even trying lol?",
            "You owe him a chicken meal now.",
            "He offers a patronizing clap, as if applauding your futile attempt.",
            "Kind of sad to lose a RPS game to a dropkick like this.",
            "Skill issue git gud get rekt",
            "What are you, a noob?"],
        'win': ["He’ll win next though.",
            "He furrows his eyebrows, as if YOU’RE the one cheating. You’re not cheating, right??",
            "He might resort to violence if you don’t let him win the next game. ",
            "You should watch your back.",
            "He grits his teeth.",
            "He toggles on.",
            "I hope YOU'RE not the one cheating.",
            "You're never gonna have a win streak against someone like him.",
            "He clenches his fists, certain that victory is within his grasp.",
            "He is probably mentally insulting you with some very rude and socially unacceptable words. "],
        'tie': []

    }
];


let dots = '....';
let result = '';
let finalText = '';
var i = 0;
var characterPicture = '';
var characterWeapon = '';
let fighting = 0;
let loss = false;
var gameOpponent = '';
var userWeapon = '';

function startHat() {
    startGame(opponents[0]);
    fighting = 0;
}

function startFang() {
    startGame(opponents[1]);
    fighting = 1;
}

function startLevy() {
    startGame(opponents[2]);
    fighting = 2;
}

function startGame(opponent) {
    // Hides all the other divs
    mainMenuBox.style.display = 'none';
    gameBox.style.display = '';
    pickAnOpponent.style.display = 'none';
    gameBoxPlayer.style.display = '';
    // Init chosen character
    characterImage.src = `../images/rock-paper-scissors/literalhat-${opponent.name}-neutral.png`;
    opponentName.innerText = opponent.name;
    characterDialogue.innerHTML = `${opponent.starttext}`;
    characterName.innerHTML = `${opponent.name.toUpperCase()}`;
    characterMove.innerHTML = `...`;
    gameOpponent = opponent.name;
    console.log('User chose to play game with ' + gameOpponent + '.');
}



actionRock.onclick = playRock;
actionPaper.onclick = playPaper;
actionScissor.onclick = playScissor;


const gameTree = [
    {
        name: 'rock',
        'rock': 'tie',
        'paper': 'lose',
        'scissors': 'win'
    },
    {
        name: 'paper',
        'rock': 'win',
        'paper': 'tie',
        'scissors': 'lose'
    },
    {
        name: 'scissors',
        'rock': 'lose',
        'paper': 'win',
        'scissors': 'tie'
    }
];

const winTree = {
        'rock': 'paper',
        'paper': 'scissors',
        'scissors': 'rock'
};

const loseTree = {
    'rock': 'scissors',
    'paper': 'rock',
    'scissors': 'paper'
};

var moveAllowed = true;


function playRock() {
    if (moveAllowed === true) {
        userWeapon = 'rock';
        gameTime(gameTree[0]);

    } else {
        return;
    };
};

function playPaper() {
    if (moveAllowed === true) {
        userWeapon = 'paper';
        gameTime(gameTree[1]);

    } else {
        return;
    };
};

function playScissor() {
    if (moveAllowed === true) {
        userWeapon = 'scissors';
        gameTime(gameTree[2]);

    } else {
        return;
    };
};



/* The text */

// function characterThink() {
//     if (i < dots.length) {
//         characterDialogue.innerHTML += dots.charAt(i);
//         i++;
//         setTimeout(characterThink, 200)
//     };
//     return;
// };



function gameTime(playerWeapon) {
    moveAllowed = false;
    characterWeapon = characterThink();
    console.log(userWeapon);
    console.log('User played: ' + playerWeapon.name + ', Char played: ' + characterWeapon);
    result = playerWeapon[characterWeapon];
    playerMove.innerHTML = 'YOU | ' + playerWeapon.name.toUpperCase();
    characterImage.src = `../images/rock-paper-scissors/literalhat-${gameOpponent}-neutral.png`;
    characterDialogue.innerHTML = '';
    characterMove.innerHTML = '...'
    i = 0;
    typeWriterDots();

}


function characterThink() {
    let characterResult = mathFloorThatBadBoy(gameOpponent);
    characterPicture = `../images/rock-paper-scissors/literalhat-${gameOpponent}-${characterResult}.png`;
    return (characterResult);
}



function mathFloorThatBadBoy(characterInQuestion) {
    var chanceRolling = Math.floor(Math.random() * 100);
    switch (characterInQuestion) {
        case 'Fang':
            return gameTree[Math.floor(Math.random() * 3)].name;
        case 'Hat':
            if (chanceRolling < 50) {
                console.log(loseTree[userWeapon]);
                return loseTree[userWeapon];
            } else {
                return gameTree[Math.floor(Math.random() * 3)].name;
            }
        case 'Levy':
            if (chanceRolling < 50) {
                console.log(winTree[userWeapon]);
                return winTree[userWeapon];
            } else {
                return gameTree[Math.floor(Math.random() * 3)].name;
            }
    }
}



function typeWriterDots() {
    if (i < dots.length) {
        characterDialogue.innerHTML += dots.charAt(i);
        i++;
        setTimeout(typeWriterDots, 300);
    } else {
        i = 0;
        characterMove.innerHTML = characterWeapon.toUpperCase();
        characterImage.src = characterPicture;

        if (result == 'win') {
            console.log(finalText);
            playerScore.innerHTML++;
            finalText = '. YOU WIN! ' + dialogues[fighting][result][Math.floor(Math.random() * 10)];
        } else if (result == 'lose') {
            console.log(finalText);
            opponentScore.innerHTML++;
            finalText = '. YOU LOSE! ' + dialogues[fighting][result][Math.floor(Math.random() * 10)];
        } else {
            console.log('youbothtie');
            finalText = ". IT'S A TIE. ";
            console.log(finalText);
        };
        typeWriter();
    }
}


function typeWriter() {
    if (i < finalText.length) {
        characterDialogue.innerHTML += finalText.charAt(i);
        i++;
        setTimeout(typeWriter, 10);
    } else {
        moveAllowed = true;
    }

}


