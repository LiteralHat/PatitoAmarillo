<?php include_once ('../../config.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralHat | Newsletter</title>
    <meta name="LiteralHat | Newsletter" content="Newsletter." />
    <?php include_once (INCLUDES_FOLDER . '/headtags.php') ?>
</head>

<body>
    <main>


        <div class="contentrowform centerbox maxheight">
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
                                <h1 class='white padtop large'>Newsletter</h1>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class='contentcontainer'>
                        <div class="whitebox padded">
                        <p>You can receive updates about new artworks, music postings, animations, website updates and more by signing up to the newsletter.</p>
                            <p>To be added to the mailing list, complete the form below.</p>
                           
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
                                <form class='form' action='signup'
                                    method='POST'>
                                    <fieldset>
                                        <label for="artistcredit">
                                            <h3>Email Address:</h3>
                                            <input type="email" required value="signup" placeholder="someone@somewhere.com">
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

        <?php include_once (ELEMENT_FOOTER) ?>
    </main>
</body>

</html>