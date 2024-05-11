<?php include_once ('../variables.php');
session_start();

if (isset($_SESSION["petridish"]) && $_SESSION["petridish"] == true) {
    $isadmin = true;
} else {
    $isadmin = false;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralDiscography.</title>
    <meta name="LiteralHat | Discography." content="It's you, it's me, and we're dancing badly!" />
    <?php include_once ($folder . '/headtags.php') ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                <p>If you can. <a href='https://www.patreon.com/LiteralHat'>Support
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
                        include_once('../includes/dbh.php');
                        $statement = $db->query("SELECT * FROM music");
                        $musicdb = $statement->fetchAll(PDO::FETCH_ASSOC);
                        function notAllowed($string)
                        {
                            $notallowed = '/[@#$%^&*()+={}\[\]:;<>\/\\|]/';
                            if (preg_match($notallowed, $string)) {
                                echo "<p class='warning'>Your search query is not valid!</p>";
                                exit;
                            } else {
                                return;
                            }
                        }

                        if (!empty($_GET['search'])) {
                            $search = $_GET['search'];
                            notAllowed($search);
                            $queryitem = str_replace(' ', '-', $search);
                            $searchTerm = '%' . $queryitem . '%';
                            $statement = $db->prepare("SELECT * FROM music WHERE title LIKE :searchTerm");
                            $statement->bindValue(':searchTerm', $searchTerm, PDO::PARAM_STR);
                            $statement->execute();
                            $musicdb = $statement->fetchAll(PDO::FETCH_ASSOC);
                        }

                        usort($musicdb, function ($a, $b) {
                            return strtotime($b['datecreated']) - strtotime($a['datecreated']);
                        });


                        foreach ($musicdb as $row => $song) {
                            if (isset($song['title']) && isset($song['datecreated']) && isset($song['type'])) {
                                $title = implode(" ", array_map('ucfirst', explode("-", $song['title'])));
                                $titleparsed = str_replace("'", "&apos;", $song['title']);
                                $formattedDate = date("F Y", strtotime($song['datecreated']));
                                $extratext = '<br>';
                                if (isset($song['cover'])) {
                                    $extratext = "<p><a href='" . $song['cover'] . "'>ORIGINAL</a></p>";
                                }
                                if (isset($song['buy'])) {
                                    $extratext = "<p><a href='" . $song['buy'] . "'>BUY</a></p>";
                                }

                                if ($isadmin) {
                                    $extracode = "<form action='../admin/delete_music' method='post'>
                                    <input type='hidden' name='post_id' value='" . $song['index'] . "'>
                                    <input type='submit' value='Delete' class='tonered paddedsm'>
                                    </form>";
                                } else {
                                    $extracode = '';
                                }

                                echo "
                                <div class='contentcontainer'>
                                <div class='whitebox toneblack'>
                                    <div class='whiteborder paddedsm white'>
                                        <div class='contentcontainer'>
                                        <div class='songcovercontainer'>
                                            <img class='songcover' src='https://reloaded.literalhat.com/musicicons/literalhat_" . $song['datecreated'] . "_" . $titleparsed . ".webp'></div>
                                            <div class='paddedsm songtextbox'>
                                                <h2>" . $title . "</h2>" . $extracode . "
                                                
                                                <span class='uppercase'>[ " . $song['type'] . " ] " . $formattedDate . "</span>
                                                <br>
                                                <br>
                                                <audio controls>
                                                    <source src='https://reloaded.literalhat.com/music/literalhat_" . $song['datecreated'] . "_" . $titleparsed . ".mp3'>
                                                </audio>
                                                <details>
                                        <summary class='fontheader paddedsm'>Click here for lyrics...</summary>
                                        <p>" . nl2br($song['lyrics']) . "</p>
                                    </details>
                                            </div>
                                            <div class='paddedsm'>
                                            <p><a href='https://reloaded.literalhat.com/music/literalhat_" . $song['datecreated'] . "_" . $titleparsed . ".mp3' download='' id='downloadsong'>DOWNLOAD</a></p>
                                            " . $extratext . "
                                            <hr>
                                            <p class='padtop'>CREDIT:</P>
                                            <textarea id='creditText' class='textblack songcredit'>'" . $title . "' by LiteralHat - https://literalhat.com/</textarea>
                                            <p class='fontheader padtopsm nounderline'><a onclick='clickToCopy()'>CLICK TO COPY</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                        </div>";
                            } else {

                                echo '';
                            }
                        }

                        $db = null;
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

            <?php include ($footer) ?>
    </main>
</body>

</html>