<?php
include_once ('../../config.php');
include '../../includes/autoloader.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralDiscography.</title>
    <meta name="LiteralHat | Discography." content="It's you, it's me, and we're dancing badly!" />
    <?php include_once (INCLUDES_FOLDER . '/headtags.php') ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>



<body>
    <main>

        <!-- Header and opening main content div used for styling  -->
        <?php include_once (ELEMENT_HEADER) ?>
        <?php include_once (ELEMENT_MENUTOP) ?>
        <!-- side bar on the left.  -->

        <div class='contentrowblack centerbox'>
            <div class='boxedsection'>
                <div class='widthcontainer'>
                    <div class='contentcontainer'>
                        <div class='columnbox white'>
                            <h1 class='small textblack'>Discography.</h1>
                            <img src='../images/titles/discography.png' height='130px'>
                            <div class='spacersmall'></div>
                            <div class='spacersmall'></div>
                            <div class='spacersmall'></div>

                            <div class='whiteborder padded center '>
                                <h2 class='large'>Welcome to my complete discography. </h2>
                                <p>Everything I've written, regardless of how complete it is, is on this pages.</p>
                                <p>I believe copyright is oppressive, wrong, and never aims to protect the artist - so
                                    everything here is free to download. </p>

                                <p>Please <a href='https://www.patreon.com/LiteralHat'>support
                                        me</a>, so I can keep making more. No pressure though.</p>
                                <p>Download as much as you can, listen, make remixes, create animations, do your
                                    own covers, send to your friends.</p>
                                <p>I kindly ask for a credit: </p>
                                <p class='italics'>'Song Name' by LiteralHat - https://literalhat.com/</p>
                                <p>And in basic human decency, do not use my work commercially, in monetisation, or for
                                    any means of profit.</p>
                                <p>That's all, take care, and happy listening.</p>
                            </div>

                            <div class='spacersmall'></div>
                            <div class='spacersmall'></div>

                            <form id='songsearchbar' class='whiteborder centerbox' method='GET'>
                                <input type='text' pattern="[^@#$%^&*()+={}\[\]:;<>\/\\|]+" placeholder='search...'
                                    name='search' required></input>
                                <button type="submit"><i class="fa fa-search"></i></button>

                            </form>
                            <div class='spacersmall'></div>
                            <div class='spacersmall'></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="contentrowstripe centerbox">
            <div class='boxedsection'>
                <div class='bigwidthcontainer'>
                    <div class='spacersmall'></div>
                    <div class='columnbox'>
                        <?php
                        
                    
                        include '../../classes/musicctrl.class.php';
                        include '../../classes/musicview.class.php';

                        ?>


                        <div class="spacermedium"></div>
                        <div class="spacermedium"></div>
                        <div class="spacermedium"></div>
                        <div class="spacermedium"></div>


                        <script>
                            function clickToCopy() {
                                // Get the text field
                                var copyText = document.getElementById("creditText");

                                // Select the text field
                                copyText.select();
                                copyText.setSelectionRange(0, 99999); // For mobile devices

                                // Copy the text inside the text field
                                navigator.clipboard.writeText(copyText.value);

                                // Alert the copied text
                                alert("You've copied the text: " + copyText.value + ". Thank you a lot for crediting :D");
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer and closing div tags used for styled main content box  -->

        <?php include_once (ELEMENT_FOOTER) ?>
    </main>
</body>

</html>