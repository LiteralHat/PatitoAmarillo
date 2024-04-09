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
                                        <label for="fuzzydate"><input id="fuzzydate" type="checkbox" name="fuzzy" />
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
                                            <li><input id="watercolor" type="checkbox" name="watercolor" /><label
                                                    for="watercolor"> Watercolor</label></li>
                                            <li><input id="ink" type="checkbox" name="ink" /><label for="ink">
                                                    Ink</label></li>
                                            <li><input id="acrylic" type="checkbox" name="acrylic" /><label
                                                    for="acrylic"> Acrylic</label></li>
                                            <li><input id="graphite" type="checkbox" name="graphite" /><label
                                                    for="graphite"> Graphite</label></li>
                                            <li><input id="gouache" type="checkbox" name="gouache" /><label
                                                    for="gouache"> Gouache</label></li>
                                            <li><input id="digital" type="checkbox" name="digital" /><label
                                                    for="digital"> Digital</label></li>
                                            <li><input id="traditional" type="checkbox" name="traditional" /><label
                                                    for="traditional"> Traditional</label></li>
                                            <li><input id="mixedmedia" type="checkbox" name="mixedmedia" /><label
                                                    for="mixedmedia"> Mixed Media</label></li>
                                        </ul>

                                    </label>
                                </fieldset>

                                <!-- <fieldset>
                                    <h3>Show For Sale Only?</h3>
                                    <p>
                                        <input id="forsale" type="radio" name="forsale" selected /><label for="forsale">
                                            Yes plz</label>
                                        <input id="notforsale" type="radio" name="forsale" /><label for="notforsale"> No
                                            thx</label>
                                    </p>
                                </fieldset>

                                <fieldset>
                                    <h3>Snowflake filter</h3>
                                    <p>
                                    <ul>
                                        <li><input id="withgore" type="checkbox" name="withgore" /><label
                                                for="withgore"> Gore!</label></li>
                                        <li><input id="withguns" type="checkbox" name="withguns" /><label
                                                for="withguns"> Guns!</label></li>
                                    </ul>

                                    <input id="showonly" type="radio" name="gorevisibility" /><label for="showonly">
                                        Show only</label>
                                    <input id="hide" type="radio" name="gorevisibility" /><label for="hide">
                                        Hide</label>
                                    </p>
                                </fieldset> -->


                                <fieldset>

                                    <label for="tags">
                                        <h3>Tags:</h3><span>(Separate tags with a comma e.g. 'hat, levy')</span>
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






                <div class='biggerwidthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox padded">
                            <h2>Viewing all artworks: </h2><span>Ill make a counter later.</span>
                            <hr class='hrtextseparator'>
                            <div id='galleryitems'>

                                <?php
                                $db = new PDO('sqlite:artworks.db');
                                $statement = $db->query("SELECT * FROM artworks");
                                $artworksdb = $statement->fetchAll(PDO::FETCH_ASSOC);


                                if (isset($_GET['submit'])) {
                                    // Filter by title
                                    if (isset($_GET['title'])) {
                                        $title = $_GET['title'];
                                        $nospaces = str_replace(' ', '-', $title);
                                        $searchTerm = '%' . $nospaces . '%';
                                        $statement = $db->prepare("SELECT * FROM artworks WHERE title LIKE :searchTerm");
                                        $statement->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
                                        $statement->execute();
                                        $matchingArtworks = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        // Filter $artworksdb to keep only matching items
                                        $artworksdb = array_filter($artworksdb, function ($artwork) use ($matchingArtworks) {
                                            return in_array($artwork, $matchingArtworks);
                                        });
                                    }
                                    if (isset($_GET['tags'])) {
                                        $title = $_GET['tags'];
                                        $searchTerm = '%' . $title . '%';
                                        $statement = $db->prepare("SELECT * FROM artworks WHERE tags LIKE :searchTerm");
                                        $statement->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
                                        $statement->execute();
                                        $matchingArtworks = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        // Filter $artworksdb to keep only matching items
                                        $artworksdb = array_filter($artworksdb, function ($artwork) use ($matchingArtworks) {
                                            return in_array($artwork, $matchingArtworks);
                                        });
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