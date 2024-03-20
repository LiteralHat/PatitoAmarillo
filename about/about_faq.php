<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralAbout.</title>
    <meta name="LiteralHat.com | About + FAQ" content="View commonly asked questions and contact information here." />
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
                            <div class="whitebox padded center">
                                <p class='large'>Hi.</p>
                                <p class='subtitle'>You can call me LiteralHat, or just 'Hat'. </p>
                                <p>Technical Animator from 2021-2023, now a front end web developer.</p>
                                <p>Some of the projects I've worked on are Rise of the TMNT: The Movie, LEGO: Monkie
                                    Kid, and
                                    Marvel's Moon Girl + Devil Dinosaur.</p>
                                <p>You may have also come from my YouTube animations or artworks.</p>
                                <p>In my free time I work on this website, play guitar, and draw.</p>
                                <p>Regardless of where you discovered LiteralHat, thank you for visiting this website of
                                    my
                                    passion.</p>
                                <img src=<?php echo ($links . 'images/pagedolls/mohawk-guy-waving.png'); ?>
                                    class='image small'
                                    src='boy with red mohawk standing on one foot and waving enthusiastically'></img>
                            </div>
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
                                <p class='question'>Can I use your art in ______?</p>
                                <p>You are free to use any of my work as profile photos, banners, wallpapers, on your
                                    website,
                                    in edits, on forums, etc.</p>
                                <p>You may also use my music or artwork in videos as long as it falls under fair use.
                                </p>
                                <p>You don't need to credit - but if you choose to, I am thankful.</p>
                                <p>If you are unsure / need something for commercial use - please contact.</p>

                                <p class='question'>Are you up for hire?</p>
                                <p>Not at this time, sorry.</p>

                                <p class='question'>What do you use to draw?</p>
                                <p>From most to least: paper + ink, watercolors, Photoshop 2020, graphite.</p>

                                <p class='question'>How can I contact you?</p>
                                <p>Please email <i>support@literalhat.com</i>.</p>
                                <p>I'm not really active on social media.</p>
                            </div>
                        </div>
                    </div>
                    </section>



                    
                    <section>
                        <div class='contentcontainer'>
                            <div class="whitebox center toneblack">
                                <div class='whiteborder'>
                                    <h2 class='white padtop'>Website Rebuild Information</h2>
                                </div>
                            </div>
                        </div>
                    

                    <div class='contentcontainer'>
                        <div class="whitebox paddedsm toneblack">
                            <div class='whiteborder'>
                            <div class="whitebox padded noshadow">
                            <p class="question">What happened to the old website?</p>
                        <p>It's been retired, so unfortunately you won't see it again. If you miss it, visit the <a
                                href="https://web.archive.org/web/*/literalhat.com">Wayback Machine</a> as I archived it
                            from the very start.</p>
                        <p class="question">Why are you rebuilding the website?</p>
                        <p>Numerous issues:</p>
                        <ul>
                            <li>The file structure of the site was a mess. No naming conventions were used. In other
                                words,
                                if you wanted to embed an image (such as an artwork) directly from my site onto your
                                forum /
                                myspace / etc. and I decided to move or modify the image, it would often break and you'd
                                have to manually embed it again.</li>
                            <li>It was not very mobile / web responsive. Things would scale wrong and look broken across
                                different devices and browsers. Styling was inconsistent. For example link colors would
                                be
                                red on one page but default blue on others.</li>
                            <li>It did not meet <a href="https://www.w3.org/WAI/standards-guidelines/wcag/">WCAG
                                    standards.</a></li>
                            <li>It's too laggy.</li>
                            <li>SEO was inconsistent, meaning some pages would show up on Google and others wouldn't.
                                Or,
                                the SEO would just be outdated at times and pages would have incorrect titles / names.
                            </li>
                        </ul>
                        <p>With this website rebuild I hope to solve as much of these issues as possible.</p>
                        <p class="question">Will the artworks / articles / store be back?</p>
                        <p>I intend to restore full functionality of the original website, so yes. Priority at the
                            moment is
                            as follows: <strong>website structure + functionality > back-end > styling (aesthetics +
                                animation).</strong> In other words, this website might be super plain for quite the
                            time.
                        </p>
                        <p class="question">How long will it take?</p>
                        <p>I am rewriting all html / css / js / php from scratch. Please allow some time, and I thank
                            you in
                            advance for your patience.</p>
                        <p>Should you be interested, I post daily updates and behind the scenes to my <a
                                href="https://www.patreon.com/LiteralHat" target="_blank">Patreon</a>.</p>
                        <p><i>Hopefully this answers any questions. If not, contact me via email at
                                support@literalhat.com.</i></p>
                            </div>
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