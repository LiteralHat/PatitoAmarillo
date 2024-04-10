<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralBlank.</title>
    <meta name="LiteralHat | Gallery." content="" />
    <?php include_once ($folder . '/elements/headtags.php') ?>
</head>

<body>
    <main>


<<<<<<< HEAD

        <div class="contentrowstripe centerbox">
            <div class='boxedsection'>
                <div class='sidecontainer'>
                    <div class='spacermedium'></div>
                    <?php include_once ($menusimple) ?>

                </div>

                <div class='bigwidthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox center tone8">
                            <div class='whiteborder padded'>
                                <hr>
                                <h1 class='white padtop huge'>
                                    LITERALGALLERY
                                </h1>
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>

                <div class='sidecontainer'>
                    <div class='contentbox padtop'>
                    </div>
                </div>

            </div>

        </div>
        <!-- Footer and closing div tags used for styled main content box  -->
        <?php include_once ($menutop) ?>
        <!-- side bar on the left.  -->

        <div class="contentrowblack centerbox">
            <div class='boxedsection'>
                <div class='sidecontainer'>
                    <div class='spacermedium'></div>
                    <?php include_once ($menusimple) ?>

                </div>

                <div class='biggerwidthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox toneblack">
                            <div class='whiteborder'>
                                <div class='whitebox noshadow padded'>
                                    <h2>Welcome to the gallery.</h2>
                                    <p>Insert some interesting text here about the page, I dont really wanna do it right
                                        now</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='spacersmall'>
                    </div>
                </div>
=======
        <?php //code for the header element and load the database for the gallery
        include_once ($folder . '/elements/galleryheader.php');
        $db = new PDO('sqlite:artworks.db');
        $statement = $db->query("SELECT * FROM artworks");
        //$artworksdb is the 'master' array that will be echo'ed in HTML
        $artworksdb = $statement->fetchAll(PDO::FETCH_ASSOC);

        //code wont execute at all if nothing has been submitted
        if (isset($_GET['submit'])) {

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

            // This function compares the master array with the final array and removes the items that they both don't have in common
            function reSort($artworksdb, $matchingArtworks)
            {
                return array_filter($artworksdb, function ($artwork) use ($matchingArtworks) {
                    return in_array($artwork, $matchingArtworks);
                });
            }
            // This function removes any duplicates from $matchingArtworks using artworkid as the unique identifier
            function getMatchingArtworks($matchingArtworks, $artworksByTag)
            {
                $matchingArtworks = [];
                foreach ($artworksByTag as $artworks) {
                    foreach ($artworks as $artwork) {
                        $matchingArtworks[$artwork['artworkid']] = $artwork;
                    }
                }
                ;
                return $matchingArtworks;
            }

            function executeStatement($statement)
            {
                $statement->execute();
                return $statement->fetchAll(PDO::FETCH_ASSOC);
            }


            if (isset($_GET['title'])) {
                $title = $_GET['title'];
                notAllowed($title);
                $queryitem = str_replace(' ', '-', $title);
                $searchTerm = '%' . $queryitem . '%';
                $statement = $db->prepare("SELECT * FROM artworks WHERE title LIKE :searchTerm");
                $statement->bindValue(':searchTerm', $searchTerm, PDO::PARAM_STR);

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
                $statement->bindValue(':beforedate', $beforedate, PDO::PARAM_STR);
                $statement->bindValue(':afterdate', $afterdate, PDO::PARAM_STR);

                $matchingArtworks = executeStatement($statement);
                $artworksdb = reSort($artworksdb, $matchingArtworks);
            }


            if (isset($_GET['mediums']) && !empty($_GET['mediums'])) {
                $answer = $_GET['mediums'];
                $artworksByTag = [];
                foreach ($answer as $queryitem) {
                    $searchTerm = '%' . $queryitem . '%';
                    $statement = $db->prepare("SELECT * FROM artworks WHERE medium LIKE :searchTerm");
                    $statement->bindValue(':searchTerm', $searchTerm, PDO::PARAM_STR);

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
                    $statement->bindValue(':searchTerm', $searchTerm, PDO::PARAM_STR);

                    $matchingArtworks = executeStatement($statement);
                    $artworksByTag[$queryitem] = $matchingArtworks;
                }
                ;
                $matchingArtworks = getMatchingArtworks($matchingArtworks, $artworksByTag);
                $artworksdb = reSort($artworksdb, $matchingArtworks);
            }

        }
        ?>
>>>>>>> parent of 50a282d (managed to separate the form code without messing shit up somehow)


                <div class='sidecontainer'>
                    <div class='contentbox padtop'>
                    </div>
                </div>
            </div>
        </div>





        <div class="contentrowwhite centerbox">
            <div class='boxedsection'>
                <div class='sidecontainer'>
<<<<<<< HEAD



                    <form class='form' method='get'>
=======
                    <div class='spacermedium'></div>
                    <form class='form' action='' method='get'>
>>>>>>> parent of 50a282d (managed to separate the form code without messing shit up somehow)
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
                                            Fuzzy Date</p></label>

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
                                    <h3>Tags:</h3>
                                    
                                    <ul>
                                        <li><input id="hat" type="checkbox" name="hat" /><label for="hat"> Hat</label>
                                        </li>
                                        <li><input id="chickenman" type="checkbox" name="chickenman" /><label
                                                for="title"> Chicken Man</label></li>
                                        <li><input id="lady" type="checkbox" name="lady" /><label for="title">
                                                Lady</label></li>
                                        <li><input id="fluffy" type="checkbox" name="fluffy" /><label for="fluffy">
                                                Fluffy</label></li>
                                        <li><input id="pigtails" type="checkbox" name="pigtails" /><label
                                                for="pigtails"> Pigtails</label></li>
                                    </ul>
                                   
                                </fieldset>

                                <fieldset>
                                    <button class='button'>SEARCH</button>
                                </fieldset>
                            </div>
                        </div>


                    </form>




                </div>






                <div class='biggerwidthcontainer'>



                    <div class='spacermedium'>
                    </div>


                    <div class='contentcontainer'>
                        <div class="whitebox padded">

                            <h1>test</h1>
                            <p>Aliqua nulla eu sint tempor esse aliqua mollit in ullamco sunt laborum cillum. Fugiat
                                aute est consequat pariatur eiusmod ullamco quis velit commodo do cillum. Deserunt
                                enim
                                consectetur laborum eiusmod dolore quis nisi magna eu amet veniam id mollit. Nulla
                                nisi
                                Lorem voluptate eu elit ea adipisicing cupidatat ut nostrud aliqua velit. Mollit
                                proident laborum ex quis adipisicing Lorem sint elit deserunt ex deserunt. Pariatur
                                aliqua culpa Lorem est ut laboris enim.</P>

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