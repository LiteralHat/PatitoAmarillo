<?php include_once ('../../config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralFanart Submission Form</title>
    <meta name="LiteralFanart Submission Form" content="Submit fanart here." />
    <?php include_once (INCLUDES_FOLDER . '/headtags.php') ?>
</head>

<body>
    <main>


        <div class="contentrowform centerbox">
            <div class='boxedsection'>


                <div class='sidecontainer'>
                    <div class='spacermedium'></div>
                    <?php include_once (ELEMENT_MENUSIMPLE) ?>

                </div>

                <div class='widthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox center toneblack">
                            <div class='whiteborder padded'>
                                <hr>
                                <h1 class='white padtop large'>Fanart Submission Form</h1>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class='contentcontainer'>
                        <div class="whitebox padded">

                            <h2>Submission Requirements</h2>
                            <p>As long as it's relevant to LiteralHat, I'll put on the gallery if I like it.</p>
                            <p>The following is allowed:</p>
                            <ul>
                                <li>Your own original drawings</li>
                                <li>Base edits (credit to original must be ON the drawing)</li>
                                <li>Cosplay photo</li>
                                <li>Sculpture</li>
                                <li>Memes</li>
                                <li>Shitpost</li>
                                <li>Anything controversial, offensive, satirical or political</li>
                                <li>Pitiful attempts of 'copying' my artworks or artstyle</li>
                            </ul>
                            <p>Please don't submit crossovers, sorry.</p>
                            <p>You may submit someone else's fanart as long as you put down their name for the credit.
                            </p>
                            <p>Your submission will be put up depending on when I see it and have the time.</p>
                            </ul>


                        </div>
                    </div>


                    <div class='spacermedium'>
                    </div>


                    <section>
                        <div class='contentcontainer' id="topform">
                            <div class="whitebox center toneblack">
                                <div class='whiteborder'>
                                    <h2 class='white padtop'>Form</h2>
                                </div>
                            </div>
                        </div>


                        <?php
                        $errors = [
                            '1' => "Credit name must not exceed 30 characters.",
                            '2' => "Please add an artist name.",
                            '3' => "Please add a file.",
                            '4' => "Please agree to the terms.",
                            '5' => "Only JPG, JPEG, PNG, and GIF files are allowed.",
                            '6' => "",
                            '7' => "So actually, it looks like something really bad happened. Please email <i>support@literalhat.com</i>, submitting again probably won't work.",
                            '69' => "Very funny."
                        ];

                        if (isset($_GET['error']) && ctype_digit($_GET['error'])) {
                            $errorCode = $_GET['error'];
                            if (array_key_exists($errorCode, $errors)) {
                                $errorMessage = htmlspecialchars($errors[$errorCode]);
                                echo "<div class='contentcontainer'>
                                <div class='whitebox tonered white paddedsm'><h2>Error:</h2><p>" . $errorMessage . "</p></div>
                                        </div>";
                            } else {
                                echo "<div class='contentcontainer'>
                                        <div class='whitebox tonered white paddedsm'><h2>Error:</h2><p>Invalid error code.</p></div>
                                        </div>";
                            }
                        } else {

                        }



                        if (isset($_GET['success']) && ctype_digit($_GET['success'])) {
                            echo " <div class='contentcontainer'>
                            <div class='whitebox tone8 text9 white paddedsm'><h2>Artwork Submitted! </h2><p>Thank you for submitting your artwork. It will appear publicly on the fanart page upon approval.</p></div>
                                    </div>";


                        }
                        ?>



                        <div class='contentcontainer'>
                            <div class="whitebox padded">
                                <form class='form' action='newfanart' method='POST' enctype="multipart/form-data">
                                    <fieldset>
                                        <label for="author">
                                            <h3>Artist Credit Name:</h3>
                                            <p>Lowercase, no spaces. Limit of 30 characters. Alphanumeric characters
                                                only.</p>
                                            <input pattern="[^@#$%^&*()+={}\[\]:;<>\/\\| ]+" id="author" type="text"
                                                name="author" placeholder="e.g. literalhat" />
                                        </label>
                                    </fieldset>
                                    <div class='whitebox toneblack'>
                                        <div class='whiteborder paddedsm'>
                                            <fieldset>
                                                <label for="imagefile" class='white'>
                                                    <h3>Upload an image:</h3>
                                                    <input id="imagefile" type="file" name="imagefile" />
                                                </label>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <br>
                                    <hr class='hrtextseparator'>
                                    <fieldset class='nopad padtop'>
                                        <label for="agree1">
                                            <p class='smalltext'><input id="tos" type="checkbox" name="agree1" />
                                                I am aware that what I'm posting will be public.</p>
                                        </label>
                                        <label for="agree2">
                                            <p class='smalltext'><input id="unsuitable" type="checkbox" name="agree2" />
                                                I agree that my artwork may not be
                                                posted at all depending on the nature of the work.</p>
                                        </label>
                                    </fieldset>

                                    <fieldset class='padtop'>
                                        <label for="submit">
                                            <button type='submit' value="submit" name="submit"> Submit </button>
                                        </label>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </section>

                    <div class="spacermedium"></div>
                    <div class="spacermedium"></div>
                    <div class="spacermedium"></div>
                    <div class="spacermedium"></div>
                </div>




                <div class='sidecontainer'>
                </div>
            </div>

        </div>
        <!-- Footer and closing div tags used for styled main content box  -->

        <?php include_once (ELEMENT_FOOTER) ?>
    </main>
</body>

</html>