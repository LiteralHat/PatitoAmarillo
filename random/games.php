<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralGames.</title>
    <meta name="LiteralHat | Games." content="Play some simple games." />
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
                                <hr>
                                <h1 class='white padtop larger'>
                                LiteralGames
                                </h1>
                                <hr>
                            </div>
                        </div>
                    </div>



                    <div class='contentcontainer'>
                        <div class='whitebox padded tone7'>
                            <div class='whitebox padded'>
                                <p>These are simple games I've made to learn Javascript.</p>
                                <p>If there are any bugs, contact me.</p>
                            </div>
                        </div>
                    </div>


                    <div class='rowbox'>
                        <div class='contentcontainer padright'>
                            <div class="whitebox padded">
                                <section>
                                    <h2>socials</h2>
                                </section>
                            </div>
                        </div>


                        <div class='contentcontainer padleft'>
                            <div class="whitebox padded">
                                <div class="center">
                                    <p>where is my FUCKING meow mix?</p>
                                </div>
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
        <!-- Footer and closing div tags used for styled main content box  -->

        <?php include ($footer) ?>
    </main>
</body>

</html>