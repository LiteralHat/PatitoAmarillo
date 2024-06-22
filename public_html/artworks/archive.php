<?php

include_once ('../../config.php');
include ('../../vendor/autoload.php');

use App\Controllers\GalleryCtrl;
use App\Models\GalleryModel;
use App\Config\Dbh;

include '../../controllers/galleryctrl.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Archive | LiteralGallery</title>
    <meta name="Archive | LiteralGallery" content="" />
    <?php include_once (INCLUDES_FOLDER . '/headtags.php') ?>

</head>



<body>
    <main>

        <?php include_once (INCLUDES_FOLDER . '/galleryheader.php'); ?>

        <div class="contentrowwhite centerbox">
            <div class='widthcontainer centerbox'>
                <div class='contentcontainer paddedsm'>
                    <div class='columnbox'>
                        <p>Archive.</p>

                        <br>
                        <br>

                        
                    </div>
                </div>
            </div>

            <div class='boxedsection'>
                <div class='sidecontainer'>
                    <div class='spacermedium'></div>
                </div>


                <div id='gallerycontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox padded">
                        
                            <div id='galleryitems'>
                                <ul>
                                    <?php
                                    foreach ($data as $row => $artwork) {
                                        $wordsArray = explode("-", $artwork['title']);
                                        $capitalizedWords = array_map('ucfirst', $wordsArray);
                                        $finalString = implode(" ", $capitalizedWords);
                                        $dateString = htmlspecialchars($artwork['datecreated']);
                                        echo "<li><span><a href=\"view/" . $artwork['artworkid'] . "\">" . $dateString . ' - ' . $finalString . "</a></span></li>";
                                    }
                                    ?>
                                </ul>


                            </div>

                            <hr class='hrtextseparator'>
                            <br>
                            <div>
                               <p>Woah, you reached the end.</p>
                            </div>
                        </div>


                    </div>

                </div>


                <div class='sidecontainer'>

                </div>

            </div>
        </div>


        <?php include_once (ELEMENT_FOOTER);
        ?>
    </main>
</body>






</html>