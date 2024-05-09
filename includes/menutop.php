<!-- top part of content box that houses external links  -->
<div class="contentrowblack centerbox">
    <div class='boxedsection'>
        <div class="bigwidthcontainer">
            <div class='contentcontainer'>
                <div class='tonegreen whitebox noshadow center'>
                    <nav>
                        <ul id="menutop" class="nounderline">
                            <li><a href="https://www.patreon.com/LiteralHat" target="_blank">Patreon!</a></li>
                            <li><a href=<?php echo $links . "cat_sounds.html" ?>>Cat Sounds!</a></li>
                            <li><a id='randomsong' href="" target="_blank"></a></li>
                            <li><a href="https://www.reddit.com/r/fuckcars/" target="_blank">FUCK CARS!</a></li>
                            <li><a href="https://en.crimethinc.com/tce" target="_blank">Liberty!</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

const randomsong = document.getElementById('randomsong');

const randomSongArray = {
    bombtrack: 'https://www.youtube.com/watch?v=MUaL1FnotRQ',
    worry: 'https://www.youtube.com/watch?v=Ub5oVqDX8dY',
    frijolero: 'https://www.youtube.com/watch?v=C468ckG8cfc',
    'violent pornography': 'https://www.youtube.com/watch?v=WWXcpWliHSY',
    'leave it alone': 'https://www.youtube.com/watch?v=cuR12uCt61Q'
}

const keysArray = Object.keys(randomSongArray);
const randomIndex = Math.floor(Math.random() * keysArray.length);
const randomKey = keysArray[randomIndex];
const randomValue = randomSongArray[randomKey];

randomsong.innerHTML = randomKey + '!';
randomsong.href =randomValue;

</script>