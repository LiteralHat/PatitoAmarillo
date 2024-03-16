<?php include_once('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralChangelog.</title>
    <meta name="LiteralHat.com | Changelog" content="View the site's changelog and development history here." />
    <?php include_once($folder . '/elements/headtags.php') ?>
</head>

<body>
    <main>
        <!-- Header and opening main content div used for styling  -->
        <?php include_once($folder . '/elements/header.php') ?>


        <section class="section">
        <h1>Changelog</h1>
        <p class="subtitle">This is the site's official changelog.</p>
        <p>This website is still in development. Functionality is limited as a result. Please forgive any broken links, images, etc.</p>
        <p>To view this website's Git repository and version history, <a href="https://github.com/LiteralHat/literalhat.com" target="_blank">click here.</a></p>
        <p class="warning">If this website appears broken, you need to clear your cache (hard refresh on desktop with CTRL + SHIFT R).</p>

        </section>

        <section class='section'>
        <h2>Known Issues</h2>
        <ul>
            <li>Strange white bar appears on the right of the footer on some mobile devices</li>
            <li>Side menu doesn't appear on browser widths smaller than ~1200px</li>
            <li>catsounds webpage stylesheet isn't linked</li>

        </ul>

        <h2>Unreleased</h2>
        <ul>
            <li>Working search bar</li>
            <li>Better homepage</li>
            <li>Toggleable site theme (dark mode, high contrast, etc.)</li>
        </ul>
        </section>
        

        <section class='section'>


        <h3>v5.3.0-beta 17.03.2024</h3>
        <ul>
            <li>Added useless random site icon</li>
            <li>Added .htaccess</li>
            <li>Fixed fonts breaking on some browsers</li>
            <li>Fixed missing margin on top menu on mobile devices</li>
            <li>Moved Terms of Use and Privacy Policy to footer</li>
        </ul>

        <h3>v5.2.0-beta 16.03.2024</h3>
        <ul>
            <li>Added menu navigation bar</li>
            <li>Added consistent site colors</li>
            <li>Added about+FAQ page</li>
            <li>Added gamer QnA</li>
            <li>Removed goback button</li>
            <li>Added variables in place of fonts on stylesheet<li>
            <li>Changed link colors to gray</li>
        </ul>

        <h3>v5.2.0-beta 16.03.2024</h3>
        <ul>
            <li>Added menu navigation bar</li>
            <li>Added consistent site colors</li>
            <li>Added about+FAQ page</li>
            <li>Added gamer QnA</li>
            <li>Removed goback button</li>
            <li>Added variables in place of fonts on stylesheet<li>
            <li>Changed link colors to gray</li>
        </ul>


        <h3>v4.2.0-beta 15.03.2024</h3>
        <ul>
            <li>Added basic templating to site</li>
            <li>Added cache warning to front page</li>
            <li>Fixed several formatting issues on about/terms_of_use</li>
            <li>Added temporary goback button on non-homepage pages</li>
        </ul>

        <h3>v3.2.0-beta 13.03.2024</h3>
        <ul>
            <li>Changed site file hierachy</li>
            <li>Added social media links to some testers</li>
        </ul>

        <h3>v3.1.0-beta 10.03.2024</h3>
        <ul>
            <li>Added changelog, terms of use, privacy policy</li>
            <li>Added temporary special thanks section</li>
            <li>Changed margin spacing on mobile devicfes</li>
            <li>Fixed scaling issues on certain mobile resolutions</li>
            <li>Fixed goback button on temporary pages (like this one)</li>
            <li>Added useless cat sounds</li>
        </ul>

        <h3>v2.1.0-beta 09.03.2024</h3>
        <ul>
            <li>Website is now fully mobile responsive!!</li>
        </ul>

        <h3>v1.1.0-beta 09.03.2024</h3>
        <ul>
            <li>Changed organisation of divs, overlapping class properties, internal file structure</li>
            <li>Fixed non semantic html tags</li>
            <li>Fixed mobile specific issue where the background would appear as black instead of white</li>
        </ul>
        <h3>v1.0.0-beta 07.03.2024</h3>
        <ul>
            <li>Added basic styling to site</li>
            <li>Added link colors</li>
            <li>Added basic css styling to text</li>
            <li>Added cat picture</li>
        </ul>
        <h3>v1.0.0-alpha 05.03.2024</h3>
        <ul>
            <li>Added basic landing webpage to ensure propagation has occured</li>
        </ul>
        </section>


        <!-- Footer and closing div tags used for styled main content box  -->
        <?php include($folder . '/elements/footer.php') ?>

    </main>
</body>

</html>