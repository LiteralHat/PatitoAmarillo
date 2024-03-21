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

                <div class='biggerwidthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox center toneblack">
                            <div class='whiteborder padded'>
                                <hr>
                                <h1 class='white padtop large'>
                                    LiteralFanart
                                </h1>
                                <hr>
                            </div>
                        </div>
                    </div>


                    <div class='contentcontainer'>
                        <div class="whitebox tone3 padded">
                        <div class="whitebox padded">
                        <h2>Welcome to the fanart gallery.</h2>
                        <p>This gallery is still a work in progress and I'm mostly using it to test out gallery code. Eventually it will be updated with everything.</p>
                        <p>Images here are most likely low resolution - do not fear as I shall replace them when I have the time.</p>




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


            <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
            <script src="../scripts/galleryfanart.js"></script>
            <?php include ($footer) ?>
    </main>
</body>

</html>