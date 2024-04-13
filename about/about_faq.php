<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>About + FAQ | LiteralHat</title>
    <meta name="About + FAQ | LiteralHat" content="View commonly asked questions and contact information." />
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


                    <?php include_once ($menusimple) ?>

                </div>


                <div class='widthcontainer'>

                    <section>
                        <div class='contentcontainer'>
                            <div class="whitebox center toneblack">
                                <div class='whiteborder padded'>
                                    <hr>
                                    <h1 class='white padtop large'>About + Faq</h1>
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div class='contentcontainer'>
                            <div class="whitebox padded">
                                <div class="center">
                                    <p class='large'>Hi. I'm Hat.</p>
                                    <p>I made this website.</p>
                                    <p>Sometimes I draw, sometimes I animate.</p>
                                    <p>On good days, I code. On bad days, I code anyways, but with more StackOverflow.
                                    </p>
                                    <p>I also enjoy pretending to be a competent guitarist.</p>
                                    <p>This is the website of my passion. Thanks for visiting.</p>
                                    <img src=<?php echo ($links . 'images/pagedolls/hat-hands-together.png'); ?>
                                        class='image small'
                                        src='boy with red mohawk standing on one foot and waving enthusiastically'></img>
                                </div>
                                <p class='bold smalltext centerbox'>if (sleepSchedule == 'fucked') {<br>
                                    doCoding();<br>
                                    } else {<br>
                                    shredGuitar();<br>
                                    }
                                </p>

                            </div>
                    </section>


                    <section>
                        <div class='contentcontainer'>
                            <div class="whitebox center tone1">
                                <div class='whiteborder'>
                                    <h2 class='white padtop'>Frequently Asked Questions</h2>
                                </div>
                            </div>
                        </div>


                        <div class='contentcontainer'>
                            <div class="whitebox padded tone2">
                                <div class="whitebox padded">
                                    <p class='question'>Are you up for hire?</p>
                                    <p>Please send any business enquiries to <i>support@literalhat.com</i>.</p>
                                    <p class='question'>Can I use your art in ______?</p>
                                    <p>I encourage you to.</p>
                                    <p>Profile pictures, banners, edits, videos etc. - all are fine as long as your use
                                        is not commercial.</p>
                                    <p>No need to credit... be kind to others in your usage.</p>
                                    <p class='question'>How can I support you?</p>
                                    <p>You can become a supporter through <a href='https://www.patreon.com/LiteralHat'
                                            target='_blank'>Patreon</a> where I post daily.</p>
                                    <p>Or, if you can, show my stuff to your friends. That's all I need.</p>
                                </div>
                            </div>
                        </div>
                    </section>


                    <div class='spacermedium'></div>





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