<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralFanart.</title>
    <meta name="LiteralHat | Fanart." content="Browse, look, and explore the fanart of LiteralHat." />
    <?php include_once ($folder . '/elements/headtags.php') ?>
</head>

<body>
    <main>


        <!-- Header and opening main content div used for styling  -->
        <?php include_once ($header) ?>
        <?php include_once ($menutop) ?>
        <!-- side bar on the left.  -->



        <div id='lightBoxContainer'>
        </div>

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
                                <h1 class='white padtop larger'>
                                    LiteralFanart
                                </h1>
                                <hr>
                            </div>
                        </div>
                    </div>



                    <div class='contentcontainer'>
                        <div class="whitebox tone3 paddedsm">
                            <div class="whitebox padded center">
                                <h2>Welcome to the fanart gallery.</h2>
                                <p>This is where you can view artworks made by you.</p>
                                <p>To enlarge an image and see the artist's name, simply click on the image.</p>
                                <p>If you want an image removed, or your artwork is credited with 'unknown', please email <i>support@literalhat.com</i>.</p>
                                <p class='bold'>If you have something to submit, hold on for now - you'll be able to submit directly here in the future.</p>
                            </div>
                        </div>
                    </div>

                    <div class='contentcontainer'>
                        <section class='whitebox toneblack'>
                            <div class='whiteborder padded'>

                                <h2 class='white' id='year'></h2>
                                <p class='white'>
                                    <span class='white yearhover' onclick='updateYear(2024)'>2024</span>
                                    -
                                    <span class='white yearhover' onclick='updateYear(2023)'>2023</span>
                                    -
                                    <span class='white yearhover' onclick='updateYear(2022)'>2022</span>
                                    -
                                    <span class='white yearhover' onclick='updateYear(2021)'>2021</span>
                                    -
                                    <span class='white yearhover' onclick='updateYear(2020)'>2020</span>
                                </p>

                                <hr>
                                <div class='padtop' id="fanartgallery">
                                    <!-- js appends here -->
                                </div>


                            </div>
                        </section>

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
        <script src="../scripts/fanartgallery.js"></script>


        <?php include ($footer) ?>
    </main>
</body>

</html>