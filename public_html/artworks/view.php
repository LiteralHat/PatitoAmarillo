<?php include_once ('../variables.php');
include_once (BASE_FOLDER . 'dbh.php');
$sql = 'SELECT * FROM artworks WHERE artworkid=:artworkid';
$statement = $db->prepare($sql);
$id = filter_input(INPUT_GET, 'artworkid');
$statement->bindValue(':artworkid', $id, PDO::PARAM_INT);
$statement->execute();
$data = $statement->fetch();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (!$data) {
    echo "<p class='center large'>Oh no. This page doesn't exist! <a href='../gallery'>Go back?</a></p>";
    exit();
} else {
    $wordsArray = explode("-", $data['title']);
    $capitalizedWords = array_map('ucfirst', $wordsArray);
    $formattedTitle = implode(" ", $capitalizedWords);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $formattedTitle; ?> | LiteralHat </title>
    <meta name="<?php echo $formattedTitle; ?> | LiteralHat " content="<?php echo $data['title']?>" />
    <?php include_once (BASE_FOLDER . '/headtags.php') ?>
</head>

<body>
    <main>
        <?php include_once (BASE_FOLDER . '/galleryheader.php') ?>
    
        <div class="contentrowwhite centerbox">
            <div class='boxedsection'>
                <div class='contentcontainer'>
                    <div class='whitebox toneblack'>
                        <div class='whiteborder paddedsm'>
                            <img class='galleryimage'
                                src='https://reloaded.literalhat.com/gallery/literalhat_<?php echo $data['datecreated'] . "_" . htmlspecialchars($data['title']) ?>.webp'>
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
                                    echo $formattedTitle
                                    ?>
                                </h1>
                                <p class='medium white'>
                                    <?php
                                    $finalString = implode(" ", $capitalizedWords);
                                    $dateString = htmlspecialchars($data['datecreated']);
                                    $year = substr($dateString, 0, 4);
                                    echo $year;
                                    ?>
                                </P>
                                <p class='white'>
                                    <?php
                                    if (isset($data['description'])) {
                                        echo htmlspecialchars($data['description']);
                                    } else {
                                        echo "<i>This artwork has no description.</i>";
                                    }
                                    ?>

                                </p>

                                <a href='https://reloaded.literalhat.com/gallery/literalhat_<?php echo $data['datecreated'] . "_" . htmlspecialchars($data['title']) ?>.webp'
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
                                        $dateString = htmlspecialchars($data['datecreated']);
                                        $timestamp = strtotime($dateString);
                                        // Formats the timestamp into the desired date format
                                        $formattedDate = date("d F Y", $timestamp);
                                        echo $formattedDate;
                                        ?>

                                    </dd>

                                    <dt>Artwork No.</dt>
                                    <dd>


                                        <?php
                                        if (isset($data['artworkid'])) {
                                            echo "# " . htmlspecialchars($data['artworkid']);
                                        } else {
                                            echo "";
                                        }
                                        ?>

                                    </dd>


                                    <dt>Collection</dt>
                                    <dd>
                                        <?php
                                        if (isset($data['artworkcollection'])) {
                                            echo $data['artworkcollection'];
                                        } else {
                                            echo "";
                                        }
                                        ?>
                                    </dd>

                                    <dt>Dimensions</dt>
                                    <dd>
                                        <?php
                                        if (isset($data['dimensions'])) {
                                            echo htmlspecialchars($data['dimensions']);
                                        } else {
                                            echo "";
                                        }
                                        ?>

                                    </dd>

                                    <dt>Mediums</dt>
                                    <dd>
                                        <?php
                                        if (isset($data['medium'])) {
                                            $wordsArray = explode(" ", $data['medium']);
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
                                        if (isset($data['tags'])) {
                                            echo htmlspecialchars($data['tags']);
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
                                        class='gallerycode'><a href='https://literalhat.com/artworks/view/<?php echo $data['artworkid']; ?>'><img src='https://reloaded.literalhat.com/gallery/literalhat_<?php echo $data['datecreated'] . "_" . htmlspecialchars($data['title']) ?>.webp'></a></textarea>
                                </div>
                                <span class='white'>BBcode</span>
                                <div class='whitebox toneblack'>
                                    <textarea
                                        class='gallerycode'><?php echo "[url=https://literalhat.com/artworks/view/" . $data['artworkid'] . "][img]https://reloaded.literalhat.com/gallery/literalhat_" . $data['datecreated'] . "_" . $data['title'] . ".webp[/img][/url]"; ?></textarea>
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




        <?php include (ELEMENT_FOOTER) ?>
    </main>
</body>

</html>