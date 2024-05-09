<?php include_once ('../variables.php');
session_start();

include_once ('../includes/dbh.php');

if (!isset($_GET['page'])) {
    session_unset();
}
if (isset($_SESSION['dbresults'])) {
    $data = $_SESSION['dbresults'];
} else {
    $statement = $db->query("SELECT * FROM artworks");
    //$data is the 'master' array that will be echo'ed in HTML
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    //echo '<br>ARRAY RESET';
}

;

if (isset($_SESSION['searchQuery'])) {
    $searchQuery = $_SESSION['searchQuery'];
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | LiteralGallery</title>
    <meta name="Home | LiteralGallery"
        content="Browse, view, and search LiteralHat's artworks, ranging from 2020 to current day. Traditional art, digital art, and more." />
    <?php include_once ($folder . '/includes/headtags.php') ?>

</head>


<body>
    <main>
        <?php include_once ($folder . '/includes/galleryheader.php'); ?>
        <div class="contentrowwhite centerbox">
            <div class='widthcontainer centerbox'>
                <div class='contentcontainer paddedsm'>
                    <div class='columnbox'>
                        <p>Welcome to the gallery. In this section of the website you can find artworks that I've
                            drawn
                            over
                            the years. Please note that this section does NOT contain <i>full sketchbooks</i>, which
                            are
                            <a href='https://www.patreon.com/LiteralHat' target="_blank">Patreon only.</a>
                        </p>
                        <p>I am a single person developing this gallery as well as cataloguing artworks, so any
                            patience
                            is wholly appreciated.</p>
                            <p>Artworks are still in the process of being added.</p>

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

                        $totalArtworks = count($data);
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

            <!-- 

            <?php

            if (!isset($_SESSION['dbresults'])) {

                $artworksrecent = $data;
                usort($artworksrecent, function ($a, $b) {
                    return strtotime($b['datecreated']) - strtotime($a['datecreated']);
                });

                function getTimeAgo($date)
                {
                    $now = new DateTime();
                    $ago = new DateTime($date);
                    $diff = $now->diff($ago);
                    if ($diff->y > 0) {
                        return $diff->y . 'y ago';
                    } elseif ($diff->m > 0) {
                        return $diff->m . 'm ago';
                    } elseif ($diff->d > 0) {
                        return $diff->d . 'd ago';
                    } elseif ($diff->h > 0) {
                        return $diff->h . 'h ago';
                    } elseif ($diff->i > 0) {
                        return $diff->i . 'm ago';
                    } else {
                        return 'Just now';
                    }
                }

                echo "<div class='boxedsection'>
                                    <div class='contentcontainer'>
                                        <div class='whitebox toneblack'>
                                            <div class='whiteborder padded'>
                                                <h2 class='white'>Newest Artworks</h2>
                                                <div id='newestitems'>";

                foreach ($artworksrecent as $row => $artwork) {
                    $rowCount++;
                    $timeAgo = getTimeAgo($artwork['datecreated']);
                    if ($rowCount >= $itemsStartLimit) {
                        $wordsArray = explode("-", $artwork['title']);
                        $capitalizedWords = array_map('ucfirst', $wordsArray);
                        echo "<div class='gallerythumbnail'><a href=\"view/" . $artwork['artworkid'] . "\"><img src='https://leviathan.literalhat.com/gallery/literalhat_" . $artwork['datecreated'] . "_" . htmlspecialchars($artwork['title']) . ".webp'></a><p>" . $timeAgo . "</p></div>";

                        if ($rowCount >= 5) {
                            break;
                        }
                    }
                }

                $rowCount = 0;

                echo '</div>
                                    </div>
                                </div>
                            </div>
                        </div>';

            } else {

            }

            ?>
 -->


            <div class='boxedsection'>
                <div class='sidecontainer gallerysearchform'>
                    <div class='spacermedium'></div>
                    <form class='form' action='galleryformhandler.php' method='get'>
                        <div class='contentcontainer'>
                            <div class="whitebox padded">
                                <h2>Advanced Search:</h2>
                                <fieldset id='titlecontains'>
                                    <p>
                                        <label for="title">
                                            <h3>Title Contains: </h3>
                                            <input pattern="[^@#$%^&*()+={}\[\]:;<>\/\\|]+" id="title" type="text"
                                                name="title" placeholder="e.g. baby bird" />
                                        </label>
                                    </p>
                                </fieldset>

                                <fieldset id='daterange'>
                                    <p>
                                    <h3>Date Range:</h3>
                                    <p>
                                        <label for="fuzzydate"><input id="fuzzydate" type="checkbox" name="fuzzydate" />
                                            Fuzzy Date
                                    </p>
                                    </label>

                                    <ul>
                                        <li><label for="beforedate">From:</label><input id="beforedate" type="date"
                                                name="beforedate" /></li>
                                        <li><label for="afterdate">To: </label><input id="afterdate" type="date"
                                                name="afterdate" /></li>
                                    </ul>
                                    </p>
                                </fieldset>



                                <fieldset>
                                    <p>
                                        <label for='category'>
                                            <h3>Category:</h3>
                                            <select name='category' id='category'>
                                                <option value='artwork'>Artworks / Pieces</option>
                                                <option value='collection'>Collections</option>
                                                <option value='doodle'>Doodles / Incomplete</option>
                                                <option value='photography'>Photography / Film</option>
                                                <option value='sketchbook'>Sketchbook</option>
                                                <option value='' selected>Select an option:</option>
                                            </select>
                                        </label>
                                    </p>
                                </fieldset>

                                <fieldset id='collection'>
                                    <p>
                                        <label for='collection'>
                                            <h4>Pick a collection:</h4>
                                            <select name='collection'>
                                                <option value='Baby Bird'>2024 - Baby Bird</option>
                                                <option value='Rose Tinted Window Panes'>2022 - Rose Tinted Window Panes
                                                </option>
                                                <option value='Self Defense'>2022 - Self Defense</option>
                                                <option value='Rat in the Machine'>2022 - Rat In The Machine</option>
                                                <option value='LiteralLucid'>2021 - LiteralLucid</option>
                                                <option value='' selected>Select an option</option>
                                            </select>
                                        </label>
                                    </p>
                                </fieldset>

                                <fieldset id='mediums'>
                                    <p>
                                        <label for='mediums'>
                                            <h4>Show only..?</h4>
                                            <ul>
                                                <li><input id="watercolor" type="checkbox" name="mediums[]"
                                                        value="watercolor" /><label for="watercolor">
                                                        Watercolor</label>
                                                </li>
                                                <li><input id="ink" type="checkbox" name="mediums[]"
                                                        value="ink" /><label for="ink">
                                                        Ink</label></li>
                                                <li><input id="acrylic" type="checkbox" name="mediums[]"
                                                        value="acrylic" /><label for="acrylic"> Acrylic</label></li>
                                                <li><input id="graphite" type="checkbox" name="mediums[]"
                                                        value="graphite" /><label for="graphite"> Graphite</label>
                                                </li>
                                                <li><input id="gouache" type="checkbox" name="mediums[]"
                                                        value="gouache" /><label for="gouache"> Gouache</label></li>
                                                <li><input id="digital" type="checkbox" name="mediums[]"
                                                        value="digital" /><label for="digital"> Digital</label></li>
                                                <li><input id="traditional" type="checkbox" name="mediums[]"
                                                        value="traditional" /><label for="traditional">
                                                        Traditional</label>
                                                </li>
                                            </ul>
                                        </label>
                                    </p>
                                </fieldset>

                                <script>
                                    const categoryField = document.getElementById('category');
                                    const collectionField = document.getElementById('collection');
                                    const mediumField = document.getElementById('mediums');

                                    collectionField.style.display = 'none';
                                    mediumField.style.display = 'none';


                                    categoryField.addEventListener('change', function () {
                                        if (categoryField.value === 'artwork') {
                                            mediumField.style.display = 'block';
                                            collectionField.style.display = 'none';
                                        } else if (categoryField.value === 'collection') {
                                            mediumField.style.display = 'none';
                                            collectionField.style.display = 'block';
                                        } else {
                                            mediumField.style.display = 'none';
                                            collectionField.style.display = 'none';
                                        }
                                    });

                                </script>

                                <fieldset>
                                    <p>
                                        <label for="tags">
                                            <h3>Tags:</h3><span>(Separate tags with a space e.g. 'hat levy')</span>
                                            <input pattern="[^@#$%^&*()+={}\[\]:;<>\/\\|]+" id="tags" type="text"
                                                name="tags" placeholder="tag1 tag2 tag3" />
                                        </label>
                                    </p>
                                </fieldset>


                                <div class='spacersmall'></div>

                                <fieldset>
                                    <button class='button' type='submit' value='submit' name='submit'>SEARCH</button>
                                </fieldset>

                            </div>
                        </div>
                    </form>
                </div>


                <div class='boxedsection gallerycontainer' id='gallerytop'>
                    <div class='contentcontainer'>
                        <div class="whitebox padded">
                            <?php if (isset($_SESSION['dbresults']) && isset($_SESSION['searchQuery'])) {
                                echo '<p class="bold">You searched: <i>' . $searchQuery . '</i></p>';
                                echo '<h2>Search Results: ' . count($data) . '</h2><span></span>';
                            } else {
                                echo '<h2>Viewing All Artworks: ' . count($data) . '</h2><span></span>';
                            }
                            ?>
                            <div>
                                <h2 id='gallerypagenumbers'>Page you wanna go to:
                                    <?php
                                    for ($i = 1; $i <= $totalPages; $i++) {
                                        if ($i == $currentPage) {
                                            echo '<a class="hoverred textblack" href="gallery.php?page=' . $i . '#gallerytop">' . $i . '</a>';
                                        } else {
                                            echo '<a class="hoverred textblack nounderline" href="gallery.php?page=' . $i . '#gallerytop">' . $i . '</a>';
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
                                    <option value='30' selected>30</option>
                                    <option value='45'>45</option>
                                    <option value='60'>60</option>
                                    <option value='60'>69</option>
                                </select>

                                <?php


                                function escapeApostrophes($input)
                                {
                                    if (is_array($input)) {
                                        return array_map('escapeApostrophes', $input);
                                    } elseif (is_string($input)) {
                                        return str_replace("'", "STUPIDAPOSTROPHE", $input);
                                    } else {
                                        return $input;
                                    }
                                }
                                $encodeArray = escapeApostrophes($data);

                                ?>

                                <input type='hidden' name='data' value='<?php echo json_encode($encodeArray); ?>'>
                                <button type='submit' value='submit' name='submit'> Sort that bad
                                    boy!
                                </button>
                            </form>



                            <hr class='hrtextseparator'>
                            <div id='galleryitems'>
                                <?php

                                if (count($data) == 0) {
                                    echo '<div class="center padtop"><p class="medium padtop">Uh oh. Looks like there aren\'t any results for your query.</p><p class="padtop">Try search for something else.</p><img src="../images/pagedolls/hat-frustrated.jpg" width=300px></div>
                                    ';
                                } else {
                                    foreach ($data as $row => $artwork) {
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

                                }

                                ?>



                            </div>

                            <hr class='hrtextseparator'>
                            <br>
                            <div class='flexright'>
                                <h2 id='gallerypagenumbers'>More pages:
                                    <?php
                                    for ($i = 1; $i <= $totalPages; $i++) {
                                        if ($i == $currentPage) {
                                            echo '<a class="hoverred textblack" href="gallery.php?page=' . $i . '#gallerytop">' . $i . '</a>';
                                        } else {
                                            echo '<a class="hoverred textblack nounderline" href="gallery.php?page=' . $i . '#gallerytop">' . $i . '</a>';
                                        }
                                        ;
                                    }
                                    ?>
                                </h2>
                            </div>
                        </div>


                    </div>

                </div>


                <div class='sidecontainer' id='gallerysidecontainer'>

                </div>

            </div>

        </div>

                                    <div class='spacermedium'></div>
        <?php include ($footer);
        ?>
    </main>
</body>






</html>