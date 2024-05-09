<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralHat | Newsletter</title>
    <meta name="LiteralHat | Newsletter" content="Newsletter." />
    <?php include_once ($folder . '/elements/headtags.php') ?>
</head>

<body>
    <main>


        <div class="contentrowwhite centerbox">
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
                                <h1 class='white padtop large'>LiteralNewsletter</h1>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class='contentcontainer'>
                        <div class="whitebox padded">
                            <p>To be added to the mailing list, complete the form below.</p>
                            <p>To update your subscription, simply complete the form again.</p>
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
                                            <h3>Email Address:</h3>
                                            <input type="email" action="post" required
                                                placeholder="someone@somewhere.com">
                                        </label>
                                    </fieldset>

                                    <fieldset>
                                        <label for='year'>
                                            <br>
                                            <h3>Which of the following would you like to receive?</h3>

                                            <input type="checkbox" id="artworks" name="artworks" value="artworks">
                                            <label for="artworks">New artwork postings</label>
                                            

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