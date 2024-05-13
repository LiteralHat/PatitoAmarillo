<?php include_once ('../config.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>About + FAQ | LiteralHat</title>
    <meta name="About + FAQ | LiteralHat" content="View commonly asked questions and contact information." />
    <?php include_once (INCLUDES_FOLDER . '/headtags.php') ?>
</head>

<body>
    <main>

        <!-- Header and opening main content div used for styling  -->
        <?php include_once (ELEMENT_HEADER) ?>
        <?php include_once (ELEMENT_MENUTOP) ?>
        <!-- side bar on the left.  -->

        <div class="contentrowblack centerbox">
            <div class='boxedsection'>
                <div class='biggerwidthcontainer'>
                    <section>
                        <div class="spacermedium"></div>
                        <div class='contentcontainer'>
                            <h1 class='white padtop large huge'>About + Faq</h1>
                        </div>

                        <div class='contentcontainer'>
                            <div class="center white medium">
                                <br>
                                <p>Hi.</p>
                                <p>I'm a web developer.</p>
                                <p>Sometimes I draw, sometimes I animate.</p>
                                <p>I enjoy pretending to be competent at guitar and Javascript.</p>
                                <p>I do not practice 'consistency' in my projects, please be so kind as to not
                                    expect such from me.</p>
                                <p>This website is my pride and joy. In the end, my goal is to make it the home of
                                    everything I've done. I would appreciate it if you bookmarked LiteralHat.com,
                                    and come back sometime.</p>
                                <div class="spacermedium"></div>

                            </div>

                    </section>
                </div>
            </div>
        </div>

        <div class="contentrowblack centerbox">
            <div class='boxedsection'>
                <div class='biggerwidthcontainer'>

                    <section>
                        <div class='contentcontainer'>
                            <div class="whitebox center toneblack">
                                <div class='whiteborder'>
                                    <h2 class='white padtop'>Frequently Asked Questions</h2>
                                </div>
                            </div>
                        </div>

                        <div class='contentcontainer'>
                            <div class="whitebox padded">
                                <h3>Can I use your art in ______?</h3>
                                <p class='bold'>You may, as long as your use is non-commercial.</p>
                                <p>You may use any of my artworks in your profile pictures, banners, edits, forum
                                    signatures (and/or posts). You may modify my artworks, edit or crop them as you
                                    wish. You may print them out and hang them on your wall as decor or for your own
                                    personal delight. You are free to repost my art online to your hearts content.</p>
                                <p>You may use my music in your animations, videos, covers, or edits. You may remix my
                                    music to your hearts content, and reupload them to other platforms.</p>
                                <p class='warning'>Do not use my artworks, characters, music, animations, anything I've
                                    made, really - for profit.</p>
                                <p>No need to credit. But be kind to others in your usage.</p>
                                <h3>Are you up for hire?</h3>
                                <p>No, sorry.</p>
                                <h3>How can I support you?</h3>
                                <p><a href='<?php echo BASE_URL . "community/support.php" ?>'>Help, Save, Support</a></p>
                                <h3>How can I contact you?</h3>
                                <p>I don't use social media... You're free to comment or message but it won't be seen.
                                </p>
                                <p>Email <i>support@literalhat.com</i> instead, and I will get back to you when I have
                                    the time.</p>
                            </div>

                        </div>
                    </section>


                    <div class='spacermedium'></div>





                </div>






            </div>

        </div>
        <!-- Footer and closing div tags used for styled main content box  -->

        <?php include_once (ELEMENT_FOOTER) ?>
    </main>
</body>

</html>