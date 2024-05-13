<?php include_once ('config.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralBlank.</title>
    <meta name="LiteralHat | Blank." content="" />
    <?php include_once (ELEMENT_HEADTAGS) ?>
</head>

<body>
    <main>

        <!-- Header and opening main content div used for styling  -->
        <?php include_once (ELEMENT_HEADER) ?>
        <?php include_once (ELEMENT_MENUTOP) ?>
        <!-- side bar on the left.  -->

        <div class="contentrowstripe centerbox">
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
                                <h1 class='white padtop large'>

BLANK

                            
                                </h1>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class='contentcontainer'>
                        <div class="whitebox padded">
                            
<p>Hello. I see you're here. Very clever.</p>
<p>Did you find this page because you were snooping my repo?</p>
<p>Or did Google somehow crawl this page and serve it to you as a result?</p>
<p>Either way, welcome to the website.</p>

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

            <?php include_once (ELEMENT_FOOTER) ?>
    </main>
</body>

</html>