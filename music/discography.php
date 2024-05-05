<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralTemplating.</title>
    <meta name="LiteralHat | Templating." content="Dedicated templating dump page" />
    <?php include_once ($folder . '/elements/headtags.php') ?>
</head>

<body>
    <main>

        <!-- Header and opening main content div used for styling  -->
        <?php include_once ($header) ?>
        <?php include_once ($menutop) ?>
        <!-- side bar on the left.  -->

        <div class='contentrowblack centerbox'>
            <div class='boxedsection'>
                <div class='widthcontainer'>
                    <div class='contentcontainer'>
                        <div class='columnbox center white'>
                            <h1 class='small textblack'>Discography.</h1>
                            <img src='../images/titles/discography.png' height='130px'>
                            <div class='spacersmall'></div>
                            <div class='spacersmall'></div>
                            <div class='spacersmall'></div>
                            <div class='whiteborder padded'>
                                <h2 class='large'>Welcome to my complete discography.</h2>
                                <p>Everything I've written, regardless of how complete it is, is on this pages.</p>
                                <p>I believe copyright is oppressive, wrong, and never aims to protect the artist - so
                                    everything here is free to download. </p>
                                <p>Some songs have a 'buy' option, but it would mean much more if you downloaded
                                    whatever you'd like and <a href='https://www.patreon.com/LiteralHat'>supported
                                        me</a>.</p>
                                <p>Please download as much as you can, listen, make remixes, create animations, do your
                                    own covers, send to your friends.</p>
                                <p>I kindly ask for a credit: </p>
                                <p class='italics'>'Song Name' by LiteralHat - https://literalhat.com/</p>
                                <p>And in basic human decency, do not use my work commercially, in monetisation, or for
                                    any means of profit.</p>
                                <p>That's all, take care, and happy listening.</p>
                            </div>
                            <div class='spacersmall'></div>
                            <div class='spacersmall'></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php
        $db = new PDO('sqlite:music.db');
        $statement = $db->query("SELECT * FROM music");
        $musicdb = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>


        <div class="contentrowstripe centerbox">
            <div class='boxedsection'>
                <div class='bigwidthcontainer'>
                    <div class='columnbox'>

                        <?php
                        foreach ($musicdb as $row => $song) {

                            $title = implode(" ", array_map('ucfirst', explode("-", $song['title'])));

                            $formattedDate = date("F Y", strtotime($song['datecreated']));
                            echo "
                     
                        <div class='contentcontainer'>
                        <div class='whitebox toneblack'>
                            <div class='whiteborder paddedsm white'>
                                <div class='contentcontainer'>
                                    <img class='songcover' src='https://reloaded.literalhat.com/music/". $song['title'] . ".jpg'>
                                    <div class='paddedsm songtextbox'>
                                        <h2>" . $title . "</h2>
                                        <span class='uppercase'>[ " . $song['type'] . " ] " . $formattedDate . "</span>
                                        <br>
                                        <br>
                                        <audio controls>
                                            <source src='https://reloaded.literalhat.com/music/literalhat_" . $song['datecreated'] . "_" . $song['title'] . ".mp3'>
                                        </audio>
                                        <details>
                                <summary class='fontheader paddedsm'>Click here for lyrics...</summary>
                                <p>" . str_replace('\n', '<br>', $song['lyrics']) . "</p>
                              </details>
                                    </div>
                                    <div class='paddedsm'>
                                    <p><a href='https://reloaded.literalhat.com/music/literalhat_" . $song['datecreated'] . "_" . $song['title'] . ".mp3' download='' id='downloadsong'>DOWNLOAD</a></p>
                                    <p><a href=''>BUY</a></p>
                                    <hr>
                                    <p class='padtop'>CREDIT:</P>
                                    <textarea id='creditText' class='textblack songcredit'>'" . $title . "' by LiteralHat - https://literalhat.com/</textarea>
                                    <p class='fontheader padtopsm nounderline'><a onclick='clickToCopy()'>CLICK TO COPY</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>";
                        }
                        ?>
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
                                alert("You've copied the text: " + copyText.value + ". By the way, I really appreciate it.");
                            }
                        </script>


                    </div>
                </div>
            </div>
            <!-- Footer and closing div tags used for styled main content box  -->

            <?php include ($footer) ?>
    </main>
</body>

</html>