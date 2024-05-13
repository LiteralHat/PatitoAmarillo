<?php include_once ('../variables.php');
include_once (BASE_FOLDER . 'dbh.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fanart | LiteralHat</title>
    <meta name="LiteralHat | Fanart" content="Browse, look, and explore the fanart of LiteralHat." />
    <?php include_once (BASE_FOLDER . '/headtags.php') ?>
</head>

<body>
    <main>


        <!-- Header and opening main content div used for styling  -->
        <?php include_once (ELEMENT_HEADER) ?>
        <?php include_once (ELEMENT_MENUTOP) ?>
        <!-- side bar on the left.  -->



        <div id='lightBoxContainer'>
        </div>

        <div class="contentrowstripe centerbox">
            <div class='boxedsection'>
                <div class='sidecontainer'>
                    <div class='spacermedium'></div>
                    <?php include_once (ELEMENT_MENUSIMPLE) ?>
                </div>

                <div class='extrawidthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox center toneblack">
                            <div class='whiteborder padded'>
                                <h1 class='white padtop huge'>
                                    LiteralFanart
                                </h1>
                            </div>
                        </div>
                    </div>



                    <div class='contentcontainer'>
                        <div class="whitebox toneblack">
                            <div class="whiteborder paddedsm">
                                <div class="whitebox padded center">
                                    <h2>Welcome to the fanart gallery.</h2>
                                    <p>This is where you can view artworks made by you.</p>
                                    <p>Items are sorted by newest to oldest. Click a year to view artworks made in that
                                        year only.</p>
                                    <p>Click image to enlarge and see the artist's name, click again to hide.</p>
                                    <p>For image removals, or if you've been credited with 'unknown'. Email
                                        <i>support@literalhat.com</i>.
                                    </p>
                                    <p class="bold">Permalinking images is now safe!</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="contentcontainer">
                        <button class='gallerybutton tonegreen' href='fanartform'>
                            <a href="fanartform">
                                <div class="whiteborder">
                                    <div class='paddedsm'>

                                        <h2 class='white padtop large'>SUBMIT YOUR OWN</h2>

                                    </div>
                                </div>
                            </a>
                        </button>
                    </div>

                    <div class='contentcontainer'>
                        <section class='whitebox toneblack'>
                            <div class='whiteborder padded'>


                                <form id="yearForm" class="white fontheader medium center" action="" method="GET">
                                <a href="fanart" class="nounderline">All</a>
                                    -
                                <button type="button" class="fanartyearbutton" value="2024"
                                        onclick="submitForm(this.value)">2024</button>
                                    -
                                    <button type="button" class="fanartyearbutton" value="2023"
                                        onclick="submitForm(this.value)">2023</button>
                                    -
                                    <button type="button" class="fanartyearbutton" value="2022"
                                        onclick="submitForm(this.value)">2022</button>
                                    -
                                    <button type="button" class="fanartyearbutton" value="2021"
                                        onclick="submitForm(this.value)">2021</button>
                                    -
                                    <button type="button" class="fanartyearbutton" value="2020"
                                        onclick="submitForm(this.value)">2020</button>
                                </form>

                                <script>
                                    function submitForm(year) {
                                        // Create a hidden input field to send the year value
                                        var hiddenInput = document.createElement("input");
                                        hiddenInput.type = "hidden";
                                        hiddenInput.name = "year";
                                        hiddenInput.value = year;

                                        // Append the hidden input to the form
                                        var form = document.getElementById("yearForm");
                                        form.appendChild(hiddenInput);

                                        // Submit the form
                                        form.submit();
                                    }
                                </script>

                                <br>
                                <hr>
                                <div class='padtop white' id="fanartgallery">
                                    <?php
                                   if (isset($_GET['year'])) {
                                    $yearcreated = intval($_GET['year']);
                                    $statement = $db->prepare("SELECT * FROM fanart WHERE YEAR(datecreated) = :yearcreated AND visible = true" );
                                    $statement->bindParam(":yearcreated", $yearcreated); 
                                    $statement->execute();
                                } else {
                                    $statement = $db->prepare("SELECT * FROM fanart WHERE visible = true");
                                    $statement->execute();
                                }

                                    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
                                    usort($data, function ($a, $b) {
                                        return strtotime($b['datecreated']) - strtotime($a['datecreated']);
                                    });

                                    foreach ($data as $row => $item) {
                                        echo "<div><img id='" . $item['uuid'] . "_" . $item['author'] . "' onclick='lightBox(this)' loading='lazy' class='fanartimage' src='https://leviathan.literalhat.com/fanart/" . $item['uuid'] . "_literalfanart_" . $item['datecreated'] . "_" . $item['author'] . ".webp'></div>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>


                <div class='sidecontainer'>
                    <div class='contentbox padtop'>
                    </div>
                </div>

            </div>

        </div>

        <!-- Footer and closing div tags used for styled main content box  -->
        <script src="../scripts/fanartgallery.js"></script>
        <?php include (ELEMENT_FOOTER) ?>
    </main>
</body>

</html>