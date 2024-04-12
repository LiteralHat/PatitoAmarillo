<?php include_once ('../variables.php');
session_start();
$db = new PDO('sqlite:artworksv2.db');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralBlank.</title>
    <meta name="LiteralHat | Gallery." content="" />
    <?php include_once ($folder . '/elements/headtags.php') ?>

</head>


<body>
    <main>
        <?php include_once ($folder . '/elements/galleryheader.php'); ?>
        <div class="contentrowwhite centerbox">
            <div class='widthcontainer centerbox'>
                <div class='contentcontainer paddedsm'>
                    <div class='columnbox'>
                        <p>Welcome to the gallery. In this section of the website you can find artworks that I've drawn
                            over
                            the years. Please note that this section does NOT contain <i>full sketchbooks</i>, which are
                            <a href='https://www.patreon.com/LiteralHat' target="_blank">Patreon only.</a>
                        </p>
                        <p>I am a single person developing this gallery as well as cataloguing artworks, so any patience
                            is wholly appreciated.</p>

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

                        $itemsStartLimit = (($currentPage - 1) * $itemsPerPage + 1);
                        $itemsEndLimit = $itemsPerPage * $currentPage;

                        $rowCount = 0;

                        ?>

                    </div>
                </div>
            </div>

            <div class='boxedsection'>
                <div class='sidecontainer'>
                    <div class='spacermedium'></div>
                    <form class='form' action='galleryformhandler.php' method='get'>
                        <div class='contentcontainer'>
                            <div class="whitebox padded">
                                <h2>Advanced Search:</h2>
                                <fieldset id='titlecontains'>
                                    <p>
                                        <label for="title">
                                            Title Contains:
                                            <input pattern="[^@#$%^&*()+={}\[\]:;<>\/\\|]+" id="title" type="text"
                                                name="title" placeholder="e.g. baby bird" />
                                        </label>
                                    </p>
                                </fieldset>

                                <fieldset id='daterange'>
                                    <h3>Date Range:</h3>
                                    <p>
                                        <label for="fuzzydate"><input id="fuzzydate" type="checkbox" name="fuzzydate" />
                                            Fuzzy Date
                                    </p></label>

                                    <ul>
                                        <li><label for="beforedate">From:</label><input id="beforedate" type="date"
                                                name="beforedate" /></li>
                                        <li><label for="afterdate">To: </label><input id="afterdate" type="date"
                                                name="afterdate" /></li>
                                    </ul>

                                </fieldset>


                                <fieldset>
                                    <label for='mediums'>
                                        <h3>Mediums:</h3>

                                        <ul>
                                            <li><input id="watercolor" type="checkbox" name="mediums[]"
                                                    value="watercolor" /><label for="watercolor"> Watercolor</label>
                                            </li>
                                            <li><input id="ink" type="checkbox" name="mediums[]" value="ink" /><label
                                                    for="ink">
                                                    Ink</label></li>
                                            <li><input id="acrylic" type="checkbox" name="mediums[]"
                                                    value="acrylic" /><label for="acrylic"> Acrylic</label></li>
                                            <li><input id="graphite" type="checkbox" name="mediums[]"
                                                    value="graphite" /><label for="graphite"> Graphite</label></li>
                                            <li><input id="gouache" type="checkbox" name="mediums[]"
                                                    value="gouache" /><label for="gouache"> Gouache</label></li>
                                            <li><input id="digital" type="checkbox" name="mediums[]"
                                                    value="digital" /><label for="digital"> Digital</label></li>
                                            <li><input id="traditional" type="checkbox" name="mediums[]"
                                                    value="traditional" /><label for="traditional"> Traditional</label>
                                            </li>
                                            <li><input id="mixedmedia" type="checkbox" name="mediums[]"
                                                    value="mixedmedia" /><label for="mixedmedia"> Mixed Media</label>
                                            </li>
                                        </ul>

                                    </label>
                                </fieldset>



                                <fieldset>

                                    <label for="tags">
                                        <h3>Tags:</h3><span>(Separate tags with a space e.g. 'hat levy')</span>
                                        <input pattern="[^@#$%^&*()+={}\[\]:;<>\/\\|]+" id="tags" type="text"
                                            name="tags" placeholder="tag1 tag2 tag3" />
                                    </label>
                                </fieldset>


                                <div class='spacersmall'></div>

                                <fieldset>
                                    <button class='button' type='submit' value='submit' name='submit'>SEARCH</button>
                                </fieldset>

                            </div>
                        </div>
                    </form>
                </div>


                <div id='gallerycontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox padded">
                            <?php if (isset($_SESSION['dbresults'])) {
                                echo '<h2>Search Results: ' . count($artworksdb) . '</h2><span></span>';
                            } else {
                                echo '<h2>Viewing All Artworks: ' . count($artworksdb) . '</h2><span></span>';
                            }
                            ?>
                            <div>
                                <h2 id='gallerypagenumbers'>Page you wanna go to:
                                    <?php
                                    for ($i = 1; $i <= $totalPages; $i++) {
                                        if ($i == $currentPage) {
                                            echo '<a class="hoverred textblack" href="gallery.php?page=' . $i . '">' . $i . '</a>';
                                        } else {
                                            echo '<a class="hoverred textblack nounderline" href="gallery.php?page=' . $i . '">' . $i . '</a>';
                                        }
                                        ;
                                    }
                                    ?>
                                </h2>
                            </div>

                            <form class='form' action='gallerysorter' method='POST'>
                                <label for='sortby'><span class='bold'>Sort by:</span></label>
                                <select name='sortby' id='sortby'>
                                    <option value='default'>Default (Date Added)</option>
                                    <option value='title'>Title</option>
                                    <option value='newtoold'>Date Created (Newest to Oldest)</option>
                                    <option value='oldtonew'>Date Created (Oldest to Newest)</option>
                                </select>

                                <label for='itemsnumber'><span class='bold'>Items Per Page:</span></label>
                                <select name='itemsnumber' id='itemsnumber'>
                                    <option value='15'>15</option>
                                    <option value='30'>30</option>
                                    <option value='45'>45</option>
                                    <option value='60'>60</option>
                                </select>

                                <?php


                                ?>

                                <input type='hidden' name='data' value='<?php echo json_encode($artworksdb); ?>'>
                                <button type='submit' type='submit' value='submit' name='submit'> Sort that bad boy!
                                </button>
                            </form>



                            <hr class='hrtextseparator'>
                            <div id='galleryitems'>
                                <?php



                                foreach ($artworksdb as $row => $artwork) {
                                    $rowCount++;

                                    if ($rowCount >= $itemsStartLimit) {
                                        $wordsArray = explode("-", $artwork['title']);
                                        $capitalizedWords = array_map('ucfirst', $wordsArray);
                                        $finalString = implode(" ", $capitalizedWords);
                                        $dateString = htmlspecialchars($artwork['datecreated']);
                                        $year = substr($dateString, 0, 4);
                                        echo "<div class='gallerythumbnail'><a href=\"view/" . $artwork['artworkid'] . "\"><img src='https://leviathan.literalhat.com/gallery/literalhat_" . $artwork['datecreated'] . "_" . htmlspecialchars($artwork['title']) . ".webp'><p class='gallerytitle'>" . $finalString . "</p></a><p>" . $year . "</div>";

                                        if ($rowCount >= $itemsEndLimit) {
                                            break;
                                        }
                                    }
                                }

                                ?>



                            </div>

                            <hr class='hrtextseparator'>
                            <br>
                            <div>
                                <h2 id='gallerypagenumbers'>LiteralHat:
                                    <?php
                                    for ($i = 1; $i <= $totalPages; $i++) {
                                        if ($i == $currentPage) {
                                            echo '<a class="hoverred textblack" href="gallery.php?page=' . $i . '">' . $i . '</a>';
                                        } else {
                                            echo '<a class="hoverred textblack nounderline" href="gallery.php?page=' . $i . '">' . $i . '</a>';
                                        }
                                        ;
                                    }
                                    ?>
                                </h2>
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