<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fanart | LiteralHat</title>
    <meta name="LiteralHat | Fanart" content="Browse, look, and explore the fanart of LiteralHat." />
    <?php include_once ($folder . '/headtags.php') ?>
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

                <div class='extrawidthcontainer'>
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
                                <p>Click on an image to enlarge and see the artist's name, click again to hide.</p>
                                <p>For image removals, or if you've been credited with 'unknown'. Email <i>support@literalhat.com</i>.</p>
                                <p>Please note that links are currently not permanent as I'm still trying to figure out a schema for the site's data. You can hyperlink something if you want to another page, but it may break in the future. </p>
                                <hr class='hrtextseparator'>
                                <div class='spacersmall'></div>
                                <a class='medium center fontheader uppercase nounderline' href='submitfanart.php' target='_blank'>Click here to
                                        submit your own fanart.</a>
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
                                <div class='center padded' id='loadingDiv'>
                                    <img src='../images/pagedolls/loading.gif' style='width:300px'>
                                    <div>
                                        <span class='fancy large white'>Loading</span>
                                        <span class='fancy large white' id='loadText'></span>
                                    </div>
                                </div>


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

        <script src="../scripts/fanartgallery.js"></script>

        <?php include ($footer) ?>
    </main>
</body>

</html>