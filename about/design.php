<?php include_once('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralAbout</title>
    <meta name="LiteralHat.com | About + FAQ" content="View commonly asked questions and contact information here." />
    <?php include_once($folder . '/elements/headtags.php') ?>
</head>

<body>
    <main>
        <!-- Header and opening main content div used for styling  -->
        <?php include_once($folder . '/elements/header.php') ?>

        <section class="section">
        <p>Hi, you shouldn't be on this page. This file is reserved for testing formatting throughout the website to ensure everything is nice and consistent. Consider it an easter egg if you found it.</p>
        </section>

        <section class="section">

        <h1>This is a h1 header.</h1>
        <h2>This is a h2 header.</h2>
        <h3>This is a h3 header.</h3>
        <h4>This is a h4 header.</h4>
        <h5>This is a h5 header.</h5>
        <h6>This is a h6 header.</h6>
        <p>This is a paragraph.</p>

        <p> This is an unordered list.</p>
        <ul>
            <li>Be Gay.</li>
            <li>Do Crime.</li>
        </ul>

        <p> This is an ordered list.</p>
        <ol>
            <li>Be Gay.</li>
            <li>Do Crime.</li>
        </ol>

        <h2><a href='https://www.youtube.com/watch?v=j5a0jTc9S10' target='_blank'>This is a link.</a></h2>
        <p class='logofont'>This is a p element with class='logofont'.</p>
        <p class='quote'>This is a p element with class='quote'.</p>
        <p class='large'>This is a p element with class='large'.</p>
        <p class='question'>This is a p element with class='question'.</p>
        <p class='subtitle'>This is a p element with class='subtitle'.</p>
        <p class='warning'>This is a p element with class='warning'.</p>



        <span>This is a span element.</span>

        </section>


    


        <!-- Footer and closing div tags used for styled main content box  -->
        <?php include($folder . '/elements/footer.php') ?>

    </main>
</body>

</html>