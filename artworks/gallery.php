<?php include_once ('../variables.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralBlank.</title>
    <meta name="LiteralHat | Gallery." content="" />
    <?php include_once ($folder . '/elements/headtags.php') ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <main>


        <?php //code for the header element and load the database for the gallery
        session_start();
        include_once ($folder . '/elements/galleryheader.php');
        $db = new PDO('sqlite:artworks.db');

        if (isset($_SESSION['dbresults'])) {
            $artworksdb = $_SESSION['dbresults'];
        } else {
            $statement = $db->query("SELECT * FROM artworks");
            //$artworksdb is the 'master' array that will be echo'ed in HTML
            $artworksdb = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        ;
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
                                unset($_SESSION['dbresults']);
                            } else {
                                $statement = $db->query('SELECT COUNT(*) as total FROM artworks');
                                $result = $statement->fetch(PDO::FETCH_ASSOC);
                                echo '<h2>Viewing All Artworks: ' . $result['total'] . '</h2><span></span>';
                            } ?>

                            <!-- <label for='sortby'><span class='bold'>Sort by:</span></label>
                            <select name='sortby' id='sortby'>
                                <option value='default'>Default (Date Added)</option>
                                <option value='title'>Title</option>
                                <option value='newtoold'>Date Created (Newest to Oldest)</option>
                                <option value='oldtonew'>Date Created (Oldest to Newest)</option>
                            </select> -->


                            <hr class='hrtextseparator'>
                            <div id='galleryitems'>

                                <?php
                                foreach ($artworksdb as $row => $artwork) {
                                    $wordsArray = explode("-", $artwork['title']);
                                    $capitalizedWords = array_map('ucfirst', $wordsArray);
                                    $finalString = implode(" ", $capitalizedWords);
                                    $dateString = htmlspecialchars($artwork['datecreated']);
                                    $year = substr($dateString, 0, 4);
                                    echo "<div class='gallerythumbnail'><a href=\"view/" . $artwork['artworkid'] . "\"><img src='https://leviathan.literalhat.com/gallery/literalhat_" . $artwork['datecreated'] . "_" . htmlspecialchars($artwork['title']) . ".webp'><p class='gallerytitle'>" . $finalString . "</p></a><p>" . $year . "</div>";
                                }
                                
                                $jsondb = json_encode($artworkdb); 
                                ?>
                                
                            </div>

                            <script>

                                $(document).ready(function () {
                                    $('#sortby').change(function () {
                                        var sortBy = $(this).val();
                                        // Send data as an object
                                        $.ajax({
                                            url: 'sort_gallery',
                                            method: 'POST',
                                            data: { sortBy: sortBy}, // Send sortBy as key-value pair
                                            success: function (response) {
                                                $('#galleryitems').html(response);
                                            },
                                            error: function (xhr, status, error) {
                                                console.error(error);
                                            }
                                        });
                                    });
                                });
                            </script>

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