<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralWebsite.</title>
    <meta name="Welcome to LiteralHat.com." content="Be gay, do crime. Create more than you consume. Desire less." />
    <?php include_once ($folder . '/elements/headtags.php') ?>
</head>

<body>
    <main>

        <!-- Header and opening main content div used for styling  -->
        <?php include_once ($header) ?>
        <?php include_once ($menutop) ?>
        <!-- side bar on the left.  -->

        <div class="contentrowstripe centerbox">
            <div class='boxedsection'>
                <div class='sidecontainer'>
                    <div class='contentcontainer'>

                    </div>
                </div>





                <div class='widthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox center toneblack">

                            <div class='whiteborder padded'>
                                <hr>
                                <h1 class='white padtop large'>Design</h1>
                                <hr>
                            </div>

                        </div>
                    </div>


                    <div class='contentcontainer'>
                        <div class="whitebox padded">
                            <p>Hi, you shouldn't be here.
                                This is a debug page to test typefaces and layouts across different browsers and devices
                                to ensure compatibility.</p>
                        </div>
                    </div>


                    <div class='contentcontainer'>
                        <div class="whitebox padded">
                            
                        <h1>1. Typeface Formatting</h1>
                            <h1>This is a h1 header.</h1>
                            <h2>This is a h2 header.</h2>
                            <h3>This is a h3 header.</h3>
                            <h4>This is a h4 header.</h4>
                            <h5>This is a h5 header.</h5>
                            <h6>This is a h6 header.</h6>
                            <p>This is a paragraph.</p>
                            <p> This is an unordered list.</p>
                            <ul>
                                <li>Be Gay.</li>
                                <li>Do Crime.</li>
                            </ul>
                            <p> This is an ordered list.</p>
                            <ol>
                                <li>Be Gay.</li>
                                <li>Do Crime.</li>
                            </ol>
                            <h2><a href='https://www.youtube.com/watch?v=j5a0jTc9S10' target='_blank'>This is a
                                    link.</a></h2>
                            <span>This is a span element.</span>
                        







                        </div>
                    </div>




                </div>

                <div class='sidecontainer'>
                    <div class='contentbox'>
                        <div class='whitebox padded'>
                            <p>This is a side container.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- Footer and closing div tags used for styled main content box  -->

        <?php include ($footer) ?>
    </main>
</body>

</html>