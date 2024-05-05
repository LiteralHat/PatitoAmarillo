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
                                    <p>Hi. You may know me as LiteralHat, Hat, Charlie, Richter, or any insult of your choice - It doesn't matter.</p>
                                    <p>Sometimes I draw, animate, make music, code, or write articles.</p>
                                    <p>None of my stuff is 'consistent', please be so kind as to not expect such from me - I do
                                        whatever I feel like doing.</p>
                                    <p>This website is my pride and joy. In the end, my goal is to make it the home of
                                        everything I've done. I would appreciate it if you bookmarked LiteralHat.com,
                                        and come back sometime.</p>
                                </div>
                            </div>
                    </section>

                    <div class='spacermedium'></div>


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
                               <p class='warning'>Do not use my artworks, characters, music, animations, anything I've made, really - for profit.</p>
                                    <p>No need to credit. But be kind to others in your usage.</p>
                                <h3>Are you up for hire?</h3>
                                <p>No, sorry.</p>
                                <h3>How can I support you?</h3>
                                <p><a href='<?php echo $links . "community/support.php" ?>'>Help, Save, Support</a></p>
                                <h3>How can I contact you?</h3>
                                <p>I don't use social media. All my
                                    posts on Instagram, Twitter, etc. are done with
                                    a script. In other words, completely automated and I don't even visit the site.
                                    You're free to comment or message but it won't be seen.</p>
                                <p>Email <i>support@literalhat.com</i> instead, and I will get back to you when I have the time.</p>
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