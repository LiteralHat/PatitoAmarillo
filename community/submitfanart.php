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


        <div class="contentrowform centerbox">
            <div class='boxedsection'>


                <div class='sidecontainer'>
                    <div class='spacermedium'></div>
                    <?php include_once ($menusimple) ?>

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

                            <p>As long as it's relevant to LiteralHat, you may submit it here. This includes:</p>
                            <ul>
                                <li>Your own original drawings</li>
                                <li>Edits done on a base (as long as credit is given ON the drawing)</li>
                                <li>Cosplay photo</li>
                                <li>Sculpture</li>
                                <li>Look, if you're not sure, submit it anyways :)</li>
                            </ul>

                            <p>Don't submit anything with copyrighted content. Artworks may explore controversial,
                                satirical or political themes, but must not be
                                distasteful.</p>
                            <p>The fanart page is updated <b>annually,</b> or whenever the site gets a major update.</p>
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
                                <form class='form' action='https://formsubmit.co/0de0e4c731081aa8e5dd8277099a7bbe'
                                    method='POST'>
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

                                    <fieldset>
                                        <label for='year'>
                                            <br>
                                            <h3>In what year was this created?</h3>

                                            <select name='year' id='year'>
                                                <option value='2024'>2024</option>
                                                <option value='2023'>2023</option>
                                                <option value='2022'>2022</option>
                                                <option value='2021'>2021</option>
                                                <option value='2020'>2020</option>
                                            </select>
                                        </label>
                                    </fieldset>

                                    <hr class='hrtextseparator'>
                                    <fieldset class='nopad padtop'>
                                        <label for="agree1">

                                            <p class='smalltext'><input id="tos" type="checkbox" name="tos" required />
                                                I acknowledge that my artwork will be posted publicly on the fanart
                                                page.</p>
                                        </label>
                                        <label for="agree2">
                                            <p class='smalltext'><input id="unsuitable" type="checkbox"
                                                    name="unsuitable" required /> I understand that my artwork may not
                                                be posted if it is deemed unsuitable.</p>
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



                <div class='sidecontainer'>

                </div>
            </div>

        </div>
        <!-- Footer and closing div tags used for styled main content box  -->

        <?php include ($footer) ?>
    </main>
</body>

</html>