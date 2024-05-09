<?php include_once ('variables.php');
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome Home. | LiteralHat</title>
    <meta name="Welcome Home. | LiteralHat" content="Be gay, do crime. Create more than you consume. Desire less." />
    <?php include_once ($headtags) ?>
</head>

<body>
    <main>

        <!-- Header and opening main content div used for styling  -->
        <?php include_once ($header) ?>
        <?php include_once ($menutop) ?>
        <!-- side bar on the left.  -->

        <div class="contentrowstripe centerbox">


            <div class='boxedsection'>
                <!-- side content box (should be a pair on the top and bottom) -->
                <div class='sidecontainer' id='menuleft'>
                    <div class='spacermedium'></div>
                    <div class='contentcontainer' id='hattyleft'>
                        <img src='images/pagedolls/hat-sitting.png' width='250px;'>
                    </div>
                    <?php include_once ($menuleft) ?>

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


                    <div class='contentcontainer'>
                        <div class="whitebox padded center tone3">
                            <div class='spacersmall'></div>
                            <blockquote class='white fontfancy mediumtext uppercase textsize3 center'>" If I can't dance, its not my revolution. "                            </blockquote>
                            <div class='spacersmall'></div>
                        </div>
                    </div>
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

                                    <ul class='centeredlist hearts white fontheader padtop mediumtext text10'>
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

                                </section>

                            </div>
                        </div>
                    </div>

                </div>
            </div>






            <div class='boxedsection'>
                <div class='sidecontainer'>
                    <div class='contentcontainer padright'>
                        <div class="whitebox toneblack">
                            <div class='whiteborder paddedsm'>
                                <section>
                                    <ul class='coollist padtop mediumtext'>
                                        <li><a href="https://www.youtube.com/c/literalhat" target="_blank">YouTube</a>
                                        </li>
                                        <li><a href="https://www.reddit.com/r/LiteralHat/" target="_blank">Subreddit</a>
                                        </li>
                                        <li><a href="https://www.instagram.com/literalhat/"
                                                target="_blank">Instagram</a>
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


                    <div class='contentcontainer'>
                        <div class='whitebox padded'>
                            <section>
                                <form>
                                    <p>Do you consider yourself a gamer?</p>
                                    <input name='getfucked' type='radio'><span> YES</span></input>
                                    <input name='getfucked' type='radio'><span> no</span></input>
                                    <button type='button'
                                        onclick="location.href='https://www.youtube.com/watch?v=4Jui6Prje6o'">Submit</button>
                                </form>
                            </section>
                        </div>
                    </div>



                </div>


                <div class='extrawidthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox center toneblack">
                            <div class='whiteborder padded'>
                                <hr>
                                <h1 class='white padtop'>LiteralHat.com.</h1>
                                <hr>
                            </div>
                        </div>
                    </div>

                    <div class='contentcontainer'>
                        <div class="whitebox padded">
                            <section class="section">
                                <h2 class='padtop bold'>Welcome home.
                                </h2>

                                <p>This is my website.</p>
                                <p>I post everything I make on this site, ranging from art to animations and music.</p>
                                <p>I built this site from scratch, it receives updates whenever I have free time.</p>
                                <p>Hope you enjoy your stay.</p>
                                <p>This website was last updated on <?php
                                $filename = 'index.php';
                                echo date("F d Y H:i:s", filemtime($filename));
                                ?> UTC. Please refer to the <a href='about/changelog'>changelog</a> for more information.</p> 
                                
                        
                                <p>Please report any major issues on <a
                                        href='https://github.com/LiteralHat/literalhat.com'>GitHub.</a></p>
                                        <p>
                                <h2 class='padtop bold text4'>With love to my
                                    testers:
                                </h2>
                                <p class='mediumtext bold'>
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
                                <p>I hate that I have to say this, but be respectful and do not inquire them about me - rather, check out their work at your own discretion.</p>


                        

                            </section>
                        </div>
                    </div>





                </div>


                <div class='sidecontainer'>

                    <div class='contentcontainer padright'>
                        <div class="whitebox toneblack">
                            <div class='whiteborder padded center'>
                                <h2 class='white'>Caty</h2>
                                <img src='images/marla/marla1.jpg' style='width:10rem'>
                            </div>
                        </div>
                    </div>

                    <div class='contentcontainer'>
                        <div class='whitebox tonered padded'>
                            <section>
                                <h2 class='white'>!Achtung!</h2>
                                <p class='white'>If your site looks broken, you need to clear your browser cache.</p>
                            </section>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer and closing div tags used for styled main content box  -->

        <?php include ($footer) ?>
    </main>
</body>

</html>