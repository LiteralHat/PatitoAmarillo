<?php include_once ('../variables.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralBlank.</title>
    <meta name="LiteralHat | Gallery." content="" />
    <?php include_once ($folder . '/elements/headtags.php') ?>
</head>

<body>
    <main>


        <?php include_once ($folder . '/elements/galleryheader.php');
        // if (isset($_GET['submit'])) {
        //     echo $_GET['title'];
        //     echo $_GET['fuzzy'];
        //     echo $_GET['beforedate'];
        //     echo $_GET['afterdate'];
        //     echo $_GET['tags'];
        //     echo $_GET['watercolor'];
        // };
        ?>




        <div class="contentrowwhite centerbox">
            <div class='widthcontainer centerbox'>
                <div class='contentcontainer'>
                    <div class='columnbox'>
                        <p>Welcome to the gallery. In this section of the website you can find artworks that I've drawn
                            over
                            the years. Please note that this section does NOT contain <i>full sketchbooks</i>, which are
                            <a href='https://www.patreon.com/LiteralHat' target="_blank">Patreon only.</a>
                        </p>
                        <p>I am a single person developing this gallery as well as cataloguing artworks, so any patience
                            is wholly appreciated.</p>
                    </div>
                </div>
            </div>

            <div class='boxedsection'>
                <div class='sidecontainer'>
                    <div class='spacermedium'></div>
                    




                </div>






                <div class='biggerwidthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox padded">
                            <h2>Viewing all artworks: </h2><span>(Count currently unavailable. I'll code it
                                soon!)</span>
                            <hr class='hrtextseparator'>
                            <div id='galleryitems'>
                                <?php
                                //define PDO tell about the db file
                                $pdo = new PDO('sqlite:artworks.db');


                                $statement = $pdo->query("SELECT * FROM artworks");

                                $artworksdb = $statement->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($artworksdb as $row => $artwork) {
                                    $wordsArray = explode("-", $artwork['title']);
                                    $capitalizedWords = array_map('ucfirst', $wordsArray);
                                    $finalString = implode(" ", $capitalizedWords);
                                    $dateString = htmlspecialchars($artwork['datecreated']);
                                    $year = substr($dateString, 0, 4);

                                    // $wordsArray2 = explode("-", $artwork['collection']);
                                    // $capitalizedWords2 = array_map('ucfirst', $wordsArray2);
                                    // $finalString2 = implode(" ", $capitalizedWords2);
                                
                                    echo "<div class='gallerythumbnail'><a href=\"view/" . $artwork['artworkid'] . "\"><img src='https://leviathan.literalhat.com/gallery/literalhat_" . $artwork['datecreated'] . "_" . htmlspecialchars($artwork['title']) . ".webp'><p class='gallerytitle'>" . $finalString . "</p></a><p>" . $year . "</div>";
                                } ?>
                            </div>
                        </div>
                    </div>



                </div>

                <div class='sidecontainer'>
                </div>

            </div>
        </div>












        <?php include ($footer) ?>
    </main>
</body>

</html>