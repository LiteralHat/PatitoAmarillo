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


        <?php //code for the header element and load the database for the gallery
        include_once ($folder . '/elements/galleryheader.php');
        $db = new PDO('sqlite:artworks.db');
        $statement = $db->query("SELECT * FROM artworks");
        //$artworksdb is the 'master' array that will be echo'ed in HTML
        $artworksdb = $statement->fetchAll(PDO::FETCH_ASSOC);
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
                    <form class='form' action='' method='get'>
                        <div class='contentcontainer'>
                            <div class="whitebox padded">
                                <h2>Advanced Search:</h2>
                                <fieldset id='titlecontains'>
                                    <p>
                                        <label for="title">
                                            Title Contains:
                                            <input id="title" type="text" name="title" />
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
                                        <input id="tags" type="text" name="tags" />
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
                            <h2>Viewing all artworks: </h2><span>Ill make a counter later.</span>
                            <hr class='hrtextseparator'>
                            <div id='galleryitems'>

                                <?php
                                //code wont execute at all if nothing has been submitted
                                if (isset($_GET['submit'])) {

                                    // This function compares the master array with the final array and removes the items that they both don't have in common
                                    function reSort($artworksdb, $matchingArtworks)
                                    {
                                        return array_filter($artworksdb, function ($artwork) use ($matchingArtworks) {
                                            return in_array($artwork, $matchingArtworks);
                                        });
                                    }
                                    // This function removes any duplicates from $matchingArtworks using artworkid as the unique identifier
                                    function getMatchingArtworks($matchingArtworks, $artworksByTag) {
                                        $matchingArtworks = [];
                                        foreach ($artworksByTag as $artworks) {
                                            foreach ($artworks as $artwork) {
                                                $matchingArtworks[$artwork['artworkid']] = $artwork;
                                            }
                                        }
                                        ;
                                        return $matchingArtworks;
                                    }

                                    function executeStatement($statement) {
                                        $statement->execute();
                                        return $statement->fetchAll(PDO::FETCH_ASSOC);
                                    }
                                    

                                    if (isset($_GET['title'])) {
                                        $title = $_GET['title'];
                                        $queryitem = str_replace(' ', '-', $title);

                                        $searchTerm = '%' . $queryitem . '%';
                                        $statement = $db->prepare("SELECT * FROM artworks WHERE title LIKE :searchTerm");
                                        $statement->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
                                    
                                        $matchingArtworks = executeStatement($statement);
                                        $artworksdb = reSort($artworksdb, $matchingArtworks);
                                    }

                                    if (!empty($_GET['afterdate']) || !empty($_GET['beforedate'])) {
                                        if (!empty($_GET['beforedate'])) {
                                            // Use the value from $_GET['beforedate']
                                            $beforedate = $_GET['beforedate'];
                                        } else {
                                            // Use a default value if $_GET['beforedate'] is not set
                                            $beforedate = '01-01-1970';
                                        }

                                        if (!empty($_GET['afterdate'])) {
                                            $afterdate = $_GET['afterdate'];
                                        } else {
                                            $afterdate = date('Y-m-d');
                                        }

                                        if (isset($_GET['fuzzydate'])) {
                                            $beforedatedt = new DateTime($beforedate);
                                            $afterdatedt = new DateTime($afterdate);
                                            $beforedatedt->modify("-30 days");
                                            $afterdatedt->modify("+30 days");
                                            $beforedate = $beforedatedt->format('Y-m-d');
                                            $afterdate = $afterdatedt->format('Y-m-d');
                                        }

                                        $statement = $db->prepare('SELECT * FROM artworks WHERE datecreated BETWEEN :beforedate AND :afterdate');
                                        $statement->bindParam(':beforedate', $beforedate, PDO::PARAM_STR);
                                        $statement->bindParam(':afterdate', $afterdate, PDO::PARAM_STR);

                                        $matchingArtworks = executeStatement($statement);
                                        $artworksdb = reSort($artworksdb, $matchingArtworks);
                                    }


                                    if (isset($_GET['mediums']) && !empty($_GET['mediums'])) {
                                        $answer = $_GET['mediums'];
                                        $artworksByTag = [];
                                        foreach ($answer as $queryitem) {
                                            $searchTerm = '%' . $queryitem . '%';
                                            $statement = $db->prepare("SELECT * FROM artworks WHERE medium LIKE :searchTerm");
                                            $statement->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);

                                            $matchingArtworks = executeStatement($statement);

                                            $artworksByTag[$queryitem] = $matchingArtworks;
                                        }
                                        ;
                                        $matchingArtworks = getMatchingArtworks($matchingArtworks, $artworksByTag);
                                        $artworksdb = reSort($artworksdb, $matchingArtworks);

                                    }

                                    if (isset($_GET['tags'])) {
                                        $answer = explode(' ', $_GET['tags']);
                                        $artworksByTag = [];
                                        foreach ($answer as $queryitem) {

                                            $searchTerm = '%' . $queryitem . '%';
                                            $statement = $db->prepare("SELECT * FROM artworks WHERE tags LIKE :searchTerm");
                                            $statement->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);

                                            $matchingArtworks = executeStatement($statement);
                                            $artworksByTag[$queryitem] = $matchingArtworks;
                                        }
                                        ;
                                        $matchingArtworks = getMatchingArtworks($matchingArtworks, $artworksByTag);
                                        $artworksdb = reSort($artworksdb, $matchingArtworks);
                                    }

                                }


                                foreach ($artworksdb as $row => $artwork) {
                                    $wordsArray = explode("-", $artwork['title']);
                                    $capitalizedWords = array_map('ucfirst', $wordsArray);
                                    $finalString = implode(" ", $capitalizedWords);
                                    $dateString = htmlspecialchars($artwork['datecreated']);
                                    $year = substr($dateString, 0, 4);
                                    echo "<div class='gallerythumbnail'><a href=\"view/" . $artwork['artworkid'] . "\"><img src='https://leviathan.literalhat.com/gallery/literalhat_" . $artwork['datecreated'] . "_" . htmlspecialchars($artwork['title']) . ".webp'><p class='gallerytitle'>" . $finalString . "</p></a><p>" . $year . "</div>";
                                }
                                ?>
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