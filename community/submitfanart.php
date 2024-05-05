<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralFanart Submission Form</title>
    <meta name="LiteralFanart Submission Form" content="Submit fanart here." />
    <?php include_once ($folder . '/elements/headtags.php') ?>
</head>

<body>
    <main>


        <div class="contentrowwhite centerbox">
            <div class='boxedsection'>

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
                            <p>Fanart submission guidelines:</p>
                            <ul>
                                <li>Fanart must be your <b>own original work.</b></li>
                                <li>Edits of my work are considered fanart and are very much welcome.</li>
                                <li>Video submissions</li>
                            </ul>
                        </div>
                    </div>


                    <div class='spacermedium'>
                    </div>


                    <section>
                        <div class='contentcontainer'>
                            <div class="whitebox center toneblack">
                                <div class='whiteborder'>
                                    <h2 class='white padtop'>Form</h2>
                                </div>
                            </div>
                        </div>


                        <div class='contentcontainer'>
                            <div class="whitebox padded">
                                <form class='form' action='https://formsubmit.co/0de0e4c731081aa8e5dd8277099a7bbe' method='POST'>
                                    <fieldset>
                                        <label for="artistcredit">
                                            <h3>Artist Credit Name:</h3>
                                            <p>Name must be in lowercase only, no spaces! Sorry.</p>
                                            <input pattern="[^@#$%^&*()+={}\[\]:;<>\/\\| ]+" id="artistcredit"
                                                type="text" name="artistcredit" placeholder="e.g. literalhat"
                                                required />
                                        </label>
                                    </fieldset>
                                    <div class='whitebox toneblack'>
                                        <div class='whiteborder paddedsm'>
                                            <fieldset>
                                                <label for="image" class='white'>
                                                    <h3>Upload an image:</h3>
                                                    <input id="image" type="file" name="image" required />
                                                </label>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <fieldset class='nopad padtop'>
                                        <label for="tos">
                                            <p class='smalltext'><input id="tos" type="checkbox" name="tos" required />
                                                I confirm that my artwork will be posted to the fanart page, which is
                                                completely public.</p>
                                        </label>
                                        <label for="unsuitable">
                                            <p class='smalltext'><input id="unsuitable" type="checkbox"
                                                    name="unsuitable" required /> I understand that my artwork may not
                                                be posted at all if it is deemed to be unsuitable.</p>
                                        </label>
                                    </fieldset>

                                    <fieldset class='padtop'>
                                        <label for="submit">
                                            <button>Submit</button>
                                        </label>
                                    </fieldset>

                                </form>
                            </div>
                        </div>


                    </section>


                </div>
            </div>

        </div>
        <!-- Footer and closing div tags used for styled main content box  -->

        <?php include ($footer) ?>
    </main>
</body>

</html>