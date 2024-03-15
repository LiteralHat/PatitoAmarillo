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
            <p class="quote">Be gay, do crime. Create more than you consume. Desire less.</p>
            <p>This website is still in development. Functionality is limited as a result. Please scroll and
                read below for more information.</p>
            <p class="warning">If this website appears broken, you need to clear your cache (hard refresh on desktop with CTRL + SHIFT R).</p>

            <img src="images/temp/mychildren.png" height="400px">
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


        <img class="framedimage" src="images/images/marla.jpg" height="250px;"
                alt="marla (cat) sitting, looking up at camera with large round eyes"></img>
        <p>If you were wondering where the website FAQ went, it <a href=<?php echo $links . "about/about_faq.php" ?>>has been moved here.</a></p>


        <!-- Footer and closing div tags used for styled main content box  -->
        <?php include($folder . '/elements/footer.php') ?>
    </main>
</body>
</html>