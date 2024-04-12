<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralBlank.</title>
    <meta name="ARTWORK" content="" />
    <?php include_once ($folder . '/elements/headtags.php') ?>
</head>

<body>
    <main>


        <?php include_once ($folder . '/elements/galleryheader.php') ?>


        <!-- PHP CODE TO DO THE PHP SHIT -->
        <?php


        try {
            $sql = 'SELECT * FROM artworks WHERE artworkid=:artworkid';

            $statement = $db->prepare($sql);

            $id = filter_input(INPUT_GET, 'artworkid');
            $statement->bindValue(':artworkid', $id, PDO::PARAM_INT);
            $statement->execute();
            $r = $statement->fetch();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            if (!$r) {
                echo "<p class='center large'>Oh no. This page doesn't exist! Sorry.</p>";
                exit();
            }

        } catch (PDOException $e) {
            print 'looks like something just flat out broke.. please open an issue on my GitHub and ill fix it. https://github.com/LiteralHat/literalhat.com';
            die();
        }

        

        ?>

        <div class="contentrowwhite centerbox">
            <div class='boxedsection'>
                <div class='contentcontainer'>
                    <div class='whitebox toneblack'>
                        <div class='whiteborder paddedsm'>
                            <img class='galleryimage'
                                src='https://reloaded.literalhat.com/gallery/literalhat_<?php echo $r['datecreated'] . "_" . htmlspecialchars($r['title']) ?>.webp'>
                        </div>

                    </div>

                </div>

                <div class='thinwidthcontainer'>
                    <div class='contentcontainer'>
                        <div class='whitebox toneblack'>
                            <div class='whiteborder padded'>
                                <div class='spacersmall'></div>
                                <div class='spacersmall'></div>
                                <h1 class='large white'>
                                    <?php
                                    if (isset($r['title'])) {
                                        $wordsArray = explode("-", $r['title']);
                                        $capitalizedWords = array_map('ucfirst', $wordsArray);
                                        $finalString = implode(" ", $capitalizedWords);
                                        echo $finalString;
                                    } else {
                                        echo "";
                                    }
                                    ?>
                                </h1>
                                <p class='medium white'>
                                    <?php
                                    $finalString = implode(" ", $capitalizedWords);
                                    $dateString = htmlspecialchars($r['datecreated']);
                                    $year = substr($dateString, 0, 4);
                                    echo $year;
                                    ?>
                                </P>
                                <p class='white'>
                                    <?php
                                    if (isset($r['description'])) {
                                        echo htmlspecialchars($r['description']);
                                    } else {
                                        echo "<i>This artwork has no description.</i>";
                                    }
                                    ?>

                                </p>

                                <a href='https://reloaded.literalhat.com/gallery/literalhat_<?php echo $r['datecreated'] . "_" . htmlspecialchars($r['title']) ?>.webp'
                                    target='_blank'>
                                    <p class='textgrey smalltext'>Click here to open image in new tab.</p>
                                </a>


                                <hr>
                                <div class='spacersmall'></div>
                                <h2 class='white padtop'>Details</h2>
                                <dl class='gallerydetails white'>
                                    <dt>Date</dt>
                                    <dd>


                                        <?php
                                        $dateString = htmlspecialchars($r['datecreated']);
                                        $timestamp = strtotime($dateString);
                                        // Formats the timestamp into the desired date format
                                        $formattedDate = date("d F Y", $timestamp);
                                        echo $formattedDate;
                                        ?>

                                    </dd>

                                    <dt>Artwork No.</dt>
                                    <dd>


                                        <?php
                                        if (isset($r['artworkid'])) {
                                            echo "# " . htmlspecialchars($r['artworkid']);
                                        } else {
                                            echo "";
                                        }
                                        ?>

                                    </dd>


                                    <dt>Collection</dt>
                                    <dd>
                                        <?php
                                        if (isset($r['collection'])) {
                                            $wordsArray = explode("-", $r['collection']);
                                            $capitalizedWords = array_map('ucfirst', $wordsArray);
                                            $finalString = implode(" ", $capitalizedWords);
                                            echo $finalString;
                                        } else {
                                            echo "";
                                        }
                                        ?>
                                    </dd>

                                    <dt>Dimensions</dt>
                                    <dd>
                                        <?php
                                        if (isset($r['dimensions'])) {
                                            echo htmlspecialchars($r['dimensions']);
                                        } else {
                                            echo "";
                                        }
                                        ?>

                                    </dd>

                                    <dt>Mediums</dt>
                                    <dd>
                                        <?php
                                        if (isset($r['medium'])) {
                                            $wordsArray = explode(" ", $r['medium']);
                                            $capitalizedWords = array_map('ucfirst', $wordsArray);
                                            $finalString = implode(", ", $capitalizedWords);
                                            echo $finalString;
                                        } else {
                                            echo "";
                                        }
                                        ?>
                                    </dd>


                                    <dt>Tags</dt>
                                    <dd>
                                        <?php
                                        if (isset($r['tags'])) {
                                            echo htmlspecialchars($r['tags']);
                                        } else {
                                            echo "";
                                        }
                                        ?>
                                    </dd>
                                </dl>
                                <div class='spacersmall'></div>
                                <hr>
                                <div class='spacersmall'></div>
                                <h2 class='white padtop'>Embed</h2>
                                <p><span class='warning'>Please note that at this time embedding is not
                                        recommended!</span><span class='white'> Because artworks are still being
                                        added, the URL indexes are constantly changing.</span></p>
                                <span class='white'>HTML</span>
                                <div class='whitebox toneblack'>
                                    <textarea
                                        class='gallerycode'><a href='https://literalhat.com/artworks/view/<?php echo $r['artworkid']; ?>'><img src='https://reloaded.literalhat.com/gallery/literalhat_<?php echo $r['datecreated'] . "_" . htmlspecialchars($r['title']) ?>.webp'></a></textarea>
                                </div>
                                <span class='white'>BBcode</span>
                                <div class='whitebox toneblack'>
                                    <textarea
                                        class='gallerycode'><?php echo "[url=https://literalhat.com/artworks/view/" . $r['artworkid'] . "][img]https://reloaded.literalhat.com/gallery/literalhat_" . $r['datecreated'] . "_" . $r['title'] . ".webp[/img][/url]"; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class='rowbox' id='gallerybuttons'>
                        <div class='columnbox'>
                            <div class='contentcontainer'>
                                <button id='previous' class='gallerybutton tone1' href=''>
                                    <?php
                                    $currentUrl = $_SERVER['REQUEST_URI'];
                                    preg_match('/\d+$/', $currentUrl, $matches);
                                    $extractedDigits = isset($matches[0]) ? $matches[0] : '';
                                    $extractedDigits -= 1;
                                    if ($extractedDigits <= 0) {
                                        echo "<a href='../gallery'>";
                                    } else {
                                        echo "<a href='$extractedDigits'>";
                                    }
                                    ?>
                                    <div class='paddedsm'>
                                        <p class='white padtop'>PREVIOUS</p>
                                    </div>
                                    </a>
                                </button>
                            </div>

                            <div class='contentcontainer'>
                                <button id='random' class='gallerybutton tone2' href=''>
                                    <?php
                                    echo "<a href='$randomNumber'>";
                                    ?>
                                    <div class='paddedsm'>
                                        <p class='white padtop'>RANDOM</p>
                                    </div>
                                    </a>
                                </button>
                            </div>


                        </div>
                        <div class='columnbox'>
                            <div class='contentcontainer'>
                                <button id='next' class='gallerybutton tone7' href=''>
                                    <?php
                                    $currentUrl = $_SERVER['REQUEST_URI'];
                                    preg_match('/\d+$/', $currentUrl, $matches);
                                    $extractedDigits = isset($matches[0]) ? $matches[0] : '';
                                    $extractedDigits += 1;
                                    if ($extractedDigits >= $wow + 1) {
                                        echo "<a href=''>";
                                    } else {
                                        echo "<a href='$extractedDigits'>";
                                    }
                                    ?>
                                    <div class='paddedsm'>
                                        <p class='white padtop'>NEXT</p>
                                    </div>
                                    </a>
                                </button>
                            </div>

                            <div class='contentcontainer'>
                                <button id='next' class='gallerybutton tone3' href=''>
                                    <a href='../gallery'>
                                        <div class='paddedsm'>
                                            <p class='white padtop'>GALLERY</p>
                                        </div>
                                    </a>
                                </button>
                            </div>
                        </div>



                        <div class='columnbox'>
                            <div class='contentcontainer'>
                                <button id='random' class='gallerybutton tone5' href=''>

                                    <?php
                                    $rowCount = isset($result['artworkid']) ? $result['artworkid'] : 0;
                                    echo "<a href='$rowCount'>";
                                    ?>
                                    <div class='paddedsm'>
                                        <p class='white padtop'>NEWEST</p>
                                    </div>
                                    </a>
                                </button>
                            </div>


                            <div class='contentcontainer'>

                                <button id='next' class='gallerybutton toneblack' href=''>
                                    <div class='whiteborder'>
                                        <a href='https://literalhat.com/'>
                                            <div class='paddedsm'>
                                                <p class='white padtop'>HOME</p>
                                            </div>
                                        </a>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class='spacermedium'></div>
        </div>




        <?php include ($footer) ?>
    </main>
</body>

</html>