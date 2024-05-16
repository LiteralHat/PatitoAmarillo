<?php include_once '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome Home. | LiteralHat</title>
    <meta name="Welcome Home. | LiteralHat" content="Be gay, do crime. Create more than you consume. Desire less." />
    <?php include_once ELEMENT_HEADTAGS ?>
</head>

<body>
    <main>

        <!-- Header and opening main content div used for styling  -->
        <?php include_once ELEMENT_HEADER ?>
        <?php include_once ELEMENT_MENUTOP ?>
        <!-- side bar on the left.  -->

        <div class="contentrowstripe centerbox">


            <div class='boxedsection'>
                <!-- side content box (should be a pair on the top and bottom) -->
                <div class='sidecontainer' id='menuleft'>
                    <div class="spacermedium"></div>
                    <div class='contentcontainer' id='hattyleft'>
                        <img src='images/pagedolls/hat-sitting.png' width='250px;'>
                    </div>
                    <br>
                    <?php include_once ELEMENT_MENULEFT ?>

                </div>

                <div class="extrawidthcontainer center">
                    <div class='contentcontainer'>
                        <div class="whitebox toneblack">
                            <div class="whiteborderdotted">
                                <div class='blackborder'>
                                    <div class='whiteborder'>
                                        <section class="section">
                                            <img src="images/pagedolls/literalhat-punks-not-dead.png" height="1000px"
                                                id='sitelogo'
                                                alt='literalhat.com logo behind a large group of cartoon sheep'>

                                            <h2 class='white'>Be Gay, Do Crime.</h2>
                                            <h2 class='white'>Create more than you consume.</h2>
                                            <h2 class='white'>Desire less.</h2>

                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Look, the excessive divs are important. I swear. -->



                </div>


                <div class='sidecontainer' id='menuright'>

                    <div class='contentcontainer' id='hattyright'>
                        <img src='images/pagedolls/hat-sitting.png' width='250px;'>
                    </div>

                    <div class='contentcontainer'>
                        <div class='whitebox tonered center'>
                            <div class='whiteborder paddedsm'>
                                <section>
                                    <h2 class='white'>Supporters!</h2>
                                    <hr>

                                    <ul class='centeredlist hearts fontheader padtop mediumtext text10'>
                                        <li>Somber-Sonder</li>
                                        <li>M1n1Cat</li>
                                        <li>Hugs</li>
                                        <li>Brew</li>
                                        <li>Jay Aury</li>
                                        <li>Thatoneguy</li>
                                        <li>Crassinova</li>
                                        <li>Jaegar Foxx</li>
                                        <li>sadsrius</li>
                                        <li>Kinzator</li>
                                        <li>Ciphybara</li>
                                        <li>4jaws</li>
                                    </ul>
                                    <hr>
                                    <br>
                                </section>

                                <img src=<?php echo (BASE_URL . "images/pagedolls/mail.png") ?> width='200px;' class="">

                            </div>
                        </div>
                    </div>



                </div>
            </div>


        </div>

        <div class="contentrowblack centerbox">

                <div class='contentcontainer'>
                    <div class="whitebox padded center tone3">
                        <div class='spacersmall'></div>
                        <blockquote class='white fontfancy mediumtext uppercase textsize3 center'>" If I can't
                            dance, its not my revolution. " </blockquote>
                        <div class='spacersmall'></div>
                    </div>
                </div>


            <div class='boxedsection'>
                <div class='sidecontainer'>
                    <div class='contentcontainer padright'>
                        <div class="whitebox toneblack">
                            <section>
                                <ul class='coollist padtop'>
                                    <li><a href="https://www.youtube.com/c/literalhat" target="_blank">YouTube</a>
                                    </li>
                                    <li><a href="https://www.reddit.com/r/LiteralHat/" target="_blank">Subreddit</a>
                                    </li>
                                    <li><a href="https://www.instagram.com/literalhat/" target="_blank">Instagram</a>
                                    </li>
                                    <li><a href="https://literalhat.newgrounds.com/" target="_blank">Newgrounds</a>
                                    </li>
                                    <li><a href="https://twitter.com/LiteralHat" target="_blank">Twitter</a>
                                    </li>
                                    <li><a href="https://www.tumblr.com/blog/literalhat" target="_blank">Tumblr</a>
                                    </li>
                                    <li><a href="https://www.patreon.com/LiteralHat" target="_blank">Patreon</a>
                                    </li>
                                    <li><a href="https://literalhat.bandcamp.com/" target="_blank">Bandcamp</a>
                                    </li>
                                    <li><a href="https://open.spotify.com/intl-de/artist/4bvQi5fC5LUNHyiCdEiVqx"
                                            target="_blank">Spotify</a>
                                    </li>
                                    <li><a href="https://literalhat.bandcamp.com/" target="_blank">Soundcloud</a>
                                        </p>
                                    </li>
                                </ul>
                            </section>

                        </div>
                    </div>
                </div>


                <div class='widthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox center toneblack">

                            <hr>
                            <h1 class='white padtop'>Welcome home.</h1>
                            <hr>

                        </div>
                    </div>

                    <div class='contentcontainer'>
                        <div class="whitebox padded toneblack white center">
                            <section class="section">
                                <p>Website was last updated on <?php
                                $filename = 'index.php';
                                echo date("F d Y H:i:s", filemtime($filename));
                                ?> UTC. Refer to the <a href='about/changelog'>changelog</a> for more
                                    information.</p>
                                <h2 class='padtop textred'>With love to my
                                    testers:
                                </h2>
                                <p class='mediumtext'>
                                <ul class='linodots nounderline fontheader mediumtext'>
                                    <li><a href="https://www.instagram.com/maker_gniht/" target="_blank">Puggleman</a>
                                    </li>
                                    <li><a href="https://demscyphozoa.neocities.org/" target="_blank">penis</a>
                                    </li>
                                    <li><a href="https://www.instagram.com/queenn_janee?igsh=MWNwYmo3azJzaGo2OQ%3D%3D&utm_source=qr"
                                            target="_blank">Queen Jane</a></li>
                                    <li><a href="https://www.reddit.com/user/Kinzator_Entertainer"
                                            target="_blank">Kinzator</a>
                                    </li>
                                    <li><a href="https://pin.it/lVxQBMC3o" target="_blank">Relaxande</a></li>
                                    <li><a href="https://youtube.com/@KoldTheWizard" target="_blank">KoldTheWizard</a>
                                    </li>
                                    <li><a href='https://twitter.com/Furumasuku' target='_blank'>Furumasuku</a>
                                    </li>
                                    <li>cunt</li>
                                    <li>Ami</li>
                                    <li>Ari</li>
                                </ul>
                                <div class='spacersmall'></div>
                                </p>
                            </section>
                        </div>
                    </div>

                </div>

                <div class='sidecontainer'>

                    <div class='contentcontainer padright'>
                        <div class="whitebox toneblack">
                            <div class='whiteborder padded center'>
                                <img src='images/marla/marla1.jpg' style='width:10rem'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Footer and closing div tags used for styled main content box  -->

        <?php include_once ELEMENT_FOOTER ?>
    </main>
</body>

</html>