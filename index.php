<?php include_once('variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralWebsite.</title>
    <meta name="Welcome to LiteralHat.com." content="Be gay, do crime. Create more than you consume. Desire less." />
    <?php include_once($folder . '/elements/headtags.php') ?>
</head>

<body>
    <main>
        <!-- Header and opening main content div used for styling  -->
        <?php include_once($folder . '/elements/header.php') ?>


        <section class="section">
            <h1>Welcome to LiteralHat.com.</h1>
            <h3 class="quote">Be gay, do crime. Create more than you consume. Desire less.</h3>
            <p>This website is still in development. Functionality is limited as a result. Please scroll and
                read below for more information.</p>

            <div><img src="images/temp/mychildren.png" height="400px"></div>
            <p>To view this website's Git repository and version history, <a
                    href="https://github.com/LiteralHat/literalhat.com" target="_blank">click here.</a></p>
            <p><strong>New!</strong> <a href="changelog.html">Click here</a> to visit the changelog.</p>

            <div class="linkedlist">
                <p><strong>Many thanks to my testers: </strong>
                    <span><a href="https://www.instagram.com/maker_gniht/" target="_blank">Pugglester</a>,
                        <a href="https://demscyphozoa.neocities.org/" target="_blank">penis</a>, <a
                            href="https://www.instagram.com/ficklepish/" target="_blank">ficklepish</a>, <a
                            href="https://www.instagram.com/queenn_janee?igsh=MWNwYmo3azJzaGo2OQ%3D%3D&utm_source=qr"
                            target="_blank">Queen Jane</a>, <a href="https://www.reddit.com/user/Kinzator_Entertainer"
                            target="_blank">Kinzator</a>, <a href="https://pin.it/lVxQBMC3o"
                            target="_blank">Relaxande</a>, <a href="https://youtube.com/@KoldTheWizard"
                            target="_blank">KoldTheWizard</a>, Furumasuku, Ami.</span>
                </p>
            </div>
        </section>

        <section class="section">
            <h2>Socials</h2>
            <ul>
                <li><a href="https://www.youtube.com/c/literalhat" target="_blank">YouTube</a></li>
                <li><a href="https://www.reddit.com/r/LiteralHat/" target="_blank">Subreddit</a></li>
                <li><a href="https://www.instagram.com/literalhat/" target="_blank">Instagram</a></li>
                <li><a href="https://literalhat.newgrounds.com/" target="_blank">Newgrounds</a></li>
                <li><a href="https://twitter.com/LiteralHat" target="_blank">Twitter</a></li>
                <li><a href="https://www.tumblr.com/blog/literalhat" target="_blank">Tumblr</a></li>
                <li><a href="https://www.patreon.com/LiteralHat" target="_blank">Patreon</a></li>
                <li><a href="https://literalhat.bandcamp.com/" target="_blank">Bandcamp</a></li>
                <li><a href="https://open.spotify.com/intl-de/artist/4bvQi5fC5LUNHyiCdEiVqx" target="_blank">Spotify</a>
                </li>
                <li><a href="https://literalhat.bandcamp.com/" target="_blank">Soundcloud</a></p>
                </li>
            </ul>
        </section>

        <section>
            <h2>Website Rebuild Information.</h2>
            <h3 class="quote">What happened to the old website?</h3>
            <p>It's been retired, so unfortunately you won't see it again. If you miss it, visit the <a
                    href="https://web.archive.org/web/*/literalhat.com">Wayback Machine</a> as I archived it
                from the very start.</p>
            <h3 class="quote">Why are you rebuilding the website?</h3>
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
            <h3 class="quote">Will the artworks / articles / store be back?</h3>
            <p>I intend to restore full functionality of the original website, so yes. Priority at the
                moment is
                as follows: <strong>website structure + functionality > back-end > styling (aesthetics +
                    animation).</strong> In other words, this website might be super plain for quite the
                time.
            </p>
            <h3 class="quote">How long will it take?</h3>
            <p>I am rewriting all html / css / js / php from scratch. Please allow some time, and I thank
                you in
                advance for your patience.</p>
            <p>Should you be interested, I post daily updates and behind the scenes to my <a
                    href="https://www.patreon.com/LiteralHat" target="_blank">Patreon</a>.</p>
            <p><i>Hopefully this answers any questions. If not, contact me via email at
                    support@literalhat.com.</i></p>
            <img class="framedimage" src="images/images/marla.jpg" height="250px;"
                alt="marla (cat) sitting, looking up at camera with large round eyes">
        </section>


        <!-- Footer and closing div tags used for styled main content box  -->
        <?php include($folder . '/elements/footer.php') ?>

    </main>
</body>
</html>