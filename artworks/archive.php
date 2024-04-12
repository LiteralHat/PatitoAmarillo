<?php include_once ('../variables.php');
$db = new PDO('sqlite:artworksv2.db');
$statement = $db->query("SELECT * FROM artworks");
$artworksdb = $statement->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralArchive.</title>
    <meta name="LiteralHat | Archive" content="" />
    <?php include_once ($folder . '/elements/headtags.php') ?>

</head>



<body>
    <main>

        <?php include_once ($folder . '/elements/galleryheader.php'); ?>

        <div class="contentrowwhite centerbox">
            <div class='widthcontainer centerbox'>
                <div class='contentcontainer paddedsm'>
                    <div class='columnbox'>
                        <p>Archive.</p>

                        <br>
                        <br>

                        <?php //code for the header element and load the database for the gallery
                        

                        // echo '<div class="whitebox padded"><p>Now please kindly ignore this debug text.</p>';
                        


                        if (isset($_SESSION['last_activity'])) {
                            $expireAfterSeconds = 60 * 15; //15 minutes for now
                            $inactiveTime = time() - $_SESSION['last_activity'];

                            if ($inactiveTime > $expireAfterSeconds) {
                                // Session expired, destroy it
                                session_unset();
                                session_destroy();
                                header("Location: gallery.php"); // Redirect to login page
                                exit;
                            }
                        }

                        $_SESSION['last_activity'] = time();

                        //code that sets up all the shit that makes the rest of the shit do its fucking shit
                        
                        if (isset($_SESSION['iPP'])) {
                            // echo '<br>itemsPerPage = ' . $_SESSION['iPP'];
                            $itemsPerPage = $_SESSION['iPP'];
                        } else {
                            $itemsPerPage = 30;
                        }

                        $totalArtworks = count($artworksdb);
                        $totalPages = ceil($totalArtworks / $itemsPerPage);
                        //gets the current page from the url
                        if (isset($_GET['page'])) {
                            $currentPage = $_GET['page'];
                        } else {
                            $currentPage = 1;
                        }

                        // echo '<br>currentpage = ' . $currentPage;
                        // echo '<br>total pages = ' . $totalPages;
                        
                        $itemsStartLimit = (($currentPage - 1) * $itemsPerPage + 1);
                        $itemsEndLimit = $itemsPerPage * $currentPage;
                        // echo '<br>itemsStartLimit = ' . $itemsStartLimit;
                        // echo '<br>itemsEndLimit = ' . $itemsEndLimit;
                        
                        $rowCount = 0;

                        ?>

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
                                    foreach ($artworksdb as $row => $artwork) {
                                        $wordsArray = explode("-", $artwork['title']);
                                        $capitalizedWords = array_map('ucfirst', $wordsArray);
                                        $finalString = implode(" ", $capitalizedWords);
                                        $dateString = htmlspecialchars($artwork['datecreated']);
                                        echo "<li><span><a href=\"view/" . $artwork['artworkid'] . "\">" . $dateString . ' - ' . $finalString . "</a></span></li>";
                                        if ($rowCount >= $itemsEndLimit) {
                                            break;
                                        }
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


        <?php include ($footer);
        ?>
    </main>
</body>






</html>