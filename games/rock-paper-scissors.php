<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralBlank.</title>
    <meta name="LiteralHat | Blank." content="" />
    <?php include_once ($folder . '/elements/headtags.php') ?>
</head>

<body>
    <main>

        <!-- Header and opening main content div used for styling  -->
        <?php include_once ($header) ?>
        <?php include_once ($menutop) ?>
        <!-- side bar on the left.  -->

        <div class="contentrowstripe centerbox">
            <div class='boxedsection'>
                <div class='sidecontainer'>
                    <div class='spacermedium'></div>
                    <?php include_once ($menusimple) ?>

                </div>

                <div class='widthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox center toneblack">
                            <div class='whiteborder padded'>
                                <div class='whiteborder padded'>
                                    <h1 class='white padtop large'>
                                        Rock Paper Scissors
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='contentcontainer'>
                        <div class="whitebox padded center tone3">
                            <div class='whitebox padded'>
                                <h2>Welcome to rock, paper, scissors.</h2>
                                <p class='bold'>The game is pretty straightforward: choose between rock, paper, scissors
                                    against an opponent.</p>
                                <p>Rock wins against scissors; paper wins against rock; and scissors wins against paper.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='sidecontainer'>
                    <div class='contentbox padtop'>
                    </div>
                </div>
            </div>
        </div>



        <div class="contentrowblack centerbox padded">
            <div class='boxedsection'>
                <div class='contentcontainer'>
                    <h2 class='white'>- Pick an Opponent -</h2>
                </div>
            </div>
        </div>

        <div class="contentrowblack centerbox">
            <div class='boxedsection'>
                <div class='bigwidthcontainer'>
                    <div class='rowbox'>

                        <div class='contentcontainer'>
                            <div class='padded center rpsbox'>
                                <img class='medium' src='../images/rock-paper-scissors/literalhat-hat-neutral.png'>
                                <button class='buttonwhiteoutline buttonfixedwidth'>Hat</button>
                                <p class='padded white'>
                                    The easiest to play against, because he <i><b>really</b></i> doesnt want to be here.
                                </p>
                            </div>
                        </div>

                        <div class='contentcontainer'>
                            <div class='padded center rpsbox'>
                                <img class='medium' src='../images/rock-paper-scissors/literalhat-fang-neutral.png'>
                                <button class='buttonwhiteoutline buttonfixedwidth'>Fang</button>
                                <p class='padded white'>
                                    The only one who actually likes this game. Probably skipped class to be here. Fair play. 
                                </p>
                            </div>
                        </div>

                        <div class='contentcontainer'>
                            <div class='padded center rpsbox'>
                                <img class='medium' src='../images/rock-paper-scissors/literalhat-cm-neutral.png'>
                                <button class='buttonwhiteoutline buttonfixedwidth'>Chicken Man</button>
                                <p class='padded white'>
                                    Fucking cheater.
                                </p>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>





        <!-- Footer and closing div tags used for styled main content box  -->

        <script src=<?php echo $links . '/scripts/rock-paper-scissors.js'?>></script>
        <?php include ($footer) ?>
    </main>
</body>

</html>