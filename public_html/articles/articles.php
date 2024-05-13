<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralDesign.</title>
    <meta name="LiteralHat | Design." content="Dedicated debug page for fonts and other formatting." />
    <?php include_once (BASE_FOLDER . '/elements/headtags.php') ?>
</head>

<body>
    <main>

        <!-- Header and opening main content div used for styling  -->
        <?php include_once (ELEMENT_HEADER) ?>
        <?php include_once (ELEMENT_MENUTOP) ?>
        <!-- side bar on the left.  -->

        <div class="contentrowblack centerbox">

            <div class='biggerwidthcontainer maxheight'>


                <div class="spacermedium"></div>

                <div class='contentcontainer white paddedsm'>
                    <img src="../images/titles/articles.png">
                </div>

                <div class="spacermedium"></div>
                <div class='contentcontainer center white'>
                    <section>
                        <p>Welcome to the articles page. Here you can read shit about something idk. ill word it later
                        </p>
                        <?php echo $signuptext ?>

                    </section>
                </div>

            </div>
        </div>
        <!-- Footer and closing div tags used for styled main content box  -->

        <?php include (ELEMENT_FOOTER) ?>
    </main>
</body>

</html>