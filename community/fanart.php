<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fanart | LiteralHat</title>
    <meta name="LiteralHat | Fanart" content="Browse, look, and explore the fanart of LiteralHat." />
    <?php include_once ($folder . '/headtags.php') ?>
</head>

<body>
    <main>


        <!-- Header and opening main content div used for styling  -->
        <?php include_once ($header) ?>
        <?php include_once ($menutop) ?>
        <!-- side bar on the left.  -->



        <div id='lightBoxContainer'>
        </div>

        <div class="contentrowstripe centerbox maxheight">
            <div class='boxedsection'>


                <div class='extrawidthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox center toneblack">
                            <div class='whiteborder padded'>
                                <hr>
                                <h1 class='white padtop larger'>
                                    LiteralFanart
                                </h1>
                                <hr>
                            </div>
                        </div>
                    </div>

                    <div class='contentcontainer'>
                        <div class="whitebox center toneblack">
                            <div class='whiteborder padded'>
                        
                                <h2 class='white padtop larger'>
                                    Page under maintenance...
                                </h2>
                                <div class='paddedsm white'>
                                    <p>Yes, I know it was here like, last week. But I'm remaking it! It won't take too long, promise :D And it'll be better afterwards.</p>
                                    <p>(Technical reason: Website's databases were local, I've decided to move them all to a server one. Also fixing some inefficient code. Also in the process of moving hosting providers.)</p>
                                </div>
                             
                            </div>
                        </div>
                    </div>






                </div>



            </div>

        </div>
        <!-- Footer and closing div tags used for styled main content box  -->

        <script src="../scripts/fanartgallery.js"></script>

        <?php include ($footer) ?>
    </main>
</body>

</html>