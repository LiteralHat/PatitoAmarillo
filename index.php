<?php include_once ('variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralWebsite.</title>
    <meta name="Welcome to LiteralHat.com." content="Be gay, do crime. Create more than you consume. Desire less." />
    <?php include_once ($folder . '/elements/headtags.php') ?>
    <link rel="stylesheet" href="<?php echo ($links . 'css/styles.css') ?>">
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
                <div class='sidecontainer'>
                    <div id='menuspacer'></div>
                    <?php include_once ($menuleft) ?>
                </div>

                <div class="extrawidthcontainer">
                    <div class='contentcontainer'>
                        <div class="whitebox toneblack">
                            <div class="whiteborderdotted">
                                <div class='blackborder'>
                                    <div class='whiteborder'>
                                        <section class="section center">
                                            <img src="images/pagedolls/punks-not-dead.png" height="800px" id='sitelogo'>
                                            <p class="quote">Be gay, do crime. Create more than you consume. Desire
                                                less.
                                            </p>

                                            <p>Welcome to the 'effin coolest site in the world!</p>
                                        </section>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class='contentcontainer'>
                        <div class="whitebox padded center tone3">
                            <p class='fancy'>> That's sarcasm, let it burn! <</p>
                        </div>
                    </div>



                </div>

                <!-- side content box (should be a pair on the top and bottom) -->
                <div class='sidecontainer'>
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
                    <div class='contentcontainer'>
                        <div class='whitebox tonered padded'>

                            <h2 class='tonered'>!Achtung!</h2>
                            <p>Site broken? Clear your cache.</p>
                        </div>

                    </div>
                </div>
            </div>


            <div class='boxedsection'>


                <div class='sidecontainer'>
                </div>





                <div class='widthcontainer'>



                    <div class='rowbox'>
                        <div class='contentcontainer padright'>
                            <div class="whitebox padded">
                                <section class="section">
                                    <h2>social media</h2>
                                    <ul>
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


                        <div class='contentcontainer padleft'>
                            <div class="whitebox">
                                <div class=" center">
                                    <img class="framedimage" src="images/marla/marla1.jpg" height="250px;"
                                        alt="marla (cat) sitting, looking up at camera"></img>
                                    <p>she is cute</p>
                                </div>
                            </div>
                        </div>

                    </div>











                    <div class='rowbox'>
                        <div class='contentcontainer'>
                            <div class="whitebox center">
                                <img class="framedimage" src="images/marla/marla2.jpg" height="250px;"
                                    alt="marla (cat) sitting, looking up at camera"></img>
                            </div>
                        </div>



                        <div class="columnbox">
                            <div class='fixing'>
                                <div class='contentcontainer'>
                                    <div class="whitebox padded center">
                                        <p>Here are some cats, have a shit day!</p>
                                    </div>
                                </div>
                            </div>

                            <div class='contentcontainer'>
                                <div class="whitebox center">
                                    <img class="framedimage" src="images/marla/marla3.jpg" height="150px;"
                                        alt="marla (cat) sitting, looking up at camera"></img>
                                </div>


                            </div>
                        </div>


                    </div>
                </div>

                <div class='sidecontainer'>
                    
                </div>

            </div>

        </div>
        <!-- Footer and closing div tags used for styled main content box  -->

        <?php include ($footer) ?>
    </main>
</body>

</html>