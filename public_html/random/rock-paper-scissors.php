<?php include_once ('../../config.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rock Paper Scissors | LiteralHat</title>
    <meta name="Rock Paper Scissors | LiteralHat" content="" />
    <?php include_once (INCLUDES_FOLDER . '/headtags.php') ?>
</head>

<body>
    <main>

        <!-- Header and opening main content div used for styling  -->
        <?php include_once (ELEMENT_HEADER) ?>
        <?php include_once (ELEMENT_MENUTOP) ?>
        <!-- side bar on the left.  -->

        <div class="contentrowstripe centerbox">
            <div class='boxedsection'>
                <div class='sidecontainer'>
                    <div class='spacermedium'></div>
                    <?php include_once (ELEMENT_MENUSIMPLE) ?>

                </div>

                <div class='widthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox center toneblack">
                                <div class='whiteborder padded'>
                                    <h1 class='white padtop large'>
                                        Rock Paper Scissors
                                    </h1>
                                </div>
                     
                        </div>
                    </div>

                    <div class='contentcontainer'>
                        <div class="whitebox padded center tone3">
                            <div class='whitebox padded'>
                                <h2>Welcome to rock, paper, scissors.</h2>
                                <p>its literally just rock paper scissors, man</p>

                                <p>I don't know why I made this, I don't even like javascript</p>
                                
                                <p>This page is best viewed on desktop - if you're on mobile, you may experience some display issues.</p>
                            </div>
                        </div>
                    </div>


                    <div class='spacermedium'>
                    </div>
                </div>

                <div class='sidecontainer'>
                    <div class='contentbox padtop'>
                    </div>
                </div>
            </div>
        </div>



        <div class="contentrowblack centerbox padded" id='pickAnOpponent'>
            <div class='boxedsection'>
                <div class='contentcontainer'>
                    <h2 class='white'>- Pick an Opponent -</h2>
                </div>
            </div>
        </div>

        <div class="contentrowblack centerbox">
            <div class='boxedsection'>
                <div class='bigwidthcontainer'>
                    <div class='contentcontainer'>


                    
                        <div class='rowbox' id='mainMenuBox'>
                            <div class='contentcontainer'>
                                <div class='padded center rpsbox'>
                                    <img class='medium' src='../images/rock-paper-scissors/literalhat-hat-neutral.png'>
                                    <button class='buttonwhiteoutline buttonfixedwidth' id='playHat'>Hat</button>
                                    <p class='padded white'>
                                        The easiest to play against, because he <i><b>really</b></i> doesnt want to be
                                        here.
                                    </p>
                                </div>
                            </div>
                            <div class='contentcontainer'>
                                <div class='padded center rpsbox'>
                                    <img class='medium' src='../images/rock-paper-scissors/literalhat-fang-neutral.png'>
                                    <button class='buttonwhiteoutline buttonfixedwidth' id='playFang'>Fang</button>
                                    <p class='padded white'>
                                        The only one who actually likes this game. Probably skipped class to be here.
                                        Fair play.
                                    </p>
                                </div>
                            </div>
                            <div class='contentcontainer'>
                                <div class='padded center rpsbox'>
                                    <img class='medium' src='../images/rock-paper-scissors/literalhat-levy-neutral.png'>
                                    <button class='buttonwhiteoutline buttonfixedwidth' id='playLevy'>Chicken
                                        Man</button>
                                    <p class='padded white'>
                                        Fucking cheater.
                                    </p>
                                </div>
                            </div>
                        </div>

                        </div>

                        <div class='columnbox' id='gameBox'>

                            <div class='gamerowBox flexcenter'>
                                <div class='contentcontainer'>
                                    <div class='toneblack'>
                                        <div class='whiteborder'>
                                            <div class='whitebox toneblack noshadow paddedsm scorebox center'>

                                                <h2 class='white' id='opponentName'>Levy</h2>
                                                <hr>
                                                <p class='large white padtop' id='opponentScore'>0</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class='contentcontainer'>
                                    <img id='characterImage' src=''>
                                </div>

                                <div class='contentcontainer'>


                                    <div class='toneblack'>
                                        <div class='whiteborder'>
                                            <div class='whitebox toneblack noshadow padded scorebox center'>

                                                <h2 class='white'>YOU</h2>
                                                <hr>
                                                <p class='large white padtop' id='playerScore'>0</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <div class='contentcontainer'>
                                <div class='toneblack' id='characterDialogueBox'>
                                    <div class='whiteborder'>
                                        <div class='whitebox toneblack noshadow'>
                                            <div class='whiteborderdotted paddedsm' id='funnybox'>

                                                <p class='center'>
                                                    <span class='small white' id='characterName'></span><span
                                                        class='small white'> | </span>
                                                    <span class='small white' id='characterMove'></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span class='small white' id='playerMove'>YOU | ...<span>
                                                </p>
                                                <p class='white padtop italics' id='characterDialogue'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>






                        <div class='columnbox center' id='gameBoxPlayer'>

                            <div class='contentcontainer'>
                                <p class='white medium'>Select a weapon!</p>
                            </div>

                            <div class='rowbox'>
                                <div class='columnbox'>
                                    <div class='contentcontainer'>
                                        <button class='hidebutton rpsicon' id='actionRock'>
                                            <img class='tiny center' src='../images/rock-paper-scissors/rock.png'>
                                            <span class='white medium quote'>Rock!</span>
                                        </button>
                                    </div>
                                </div>
                                <div class='columnbox'>
                                    <div class='contentcontainer'>
                                        <button class='hidebutton rpsicon' id='actionPaper'>
                                            <img class='tiny center' src='../images/rock-paper-scissors/paper.png'>
                                            <span class='white medium quote'>Paper!</span>
                                        </button>
                                    </div>
                                </div>
                                <div class='columnbox'>
                                    <div class='contentcontainer'>
                                        <button class='hidebutton rpsicon' id='actionScissor'>
                                            <img class='tiny center' src='../images/rock-paper-scissors/scissors.png'>
                                            <span class='white medium quote'>Scissor!</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>





            <!-- Footer and closing div tags used for styled main content box  -->

            <script src=<?php echo BASE_URL . '/scripts/rock-paper-scissors.js' ?>></script>
            <?php include_once (ELEMENT_FOOTER) ?>
    </main>
</body>

</html>