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

        <section>
        <h1>Changelog</h1>
        <p>This is a</p>

        </section>

        <h2>Known Issues</h2>
        <ul>
            <li>Strange white bar appears on the right of the footer on some mobile devices</li>
        </ul>

        <h2>Unreleased</h2>
        <ul>
            <li>Working search bar</li>
            <li>Extra site navigation links</li>
            <li>Proper homepage</li>
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



        <!-- Footer and closing div tags used for styled main content box  -->
        <?php include($folder . '/footer.php') ?>

    </main>
</body>

</html>