<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralTemplating.</title>
    <meta name="LiteralHat | Templating." content="Dedicated templating dump page" />
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
                    <div class='spacermedium'></div>
                    <?php include_once ($menusimple) ?>
                </div>

                <div class='widthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox center toneblack">
                            <div class='whiteborder padded'>
                                <hr>
                                <h1 class='white padtop large'>Templating</h1>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class='contentcontainer'>
                        <div class="whitebox padded">
                            <p>Dedicated page to stash templates I've made for this site.</p>
                        </div>
                    </div>


                    <div class='spacermedium'>
                    </div>


                    <section>
                        <div class='contentcontainer'>
                            <div class="whitebox center tone1">
                                <div class='whiteborder'>
                                    <h2 class='white padtop'>HEADER</h2>
                                </div>
                            </div>
                        </div>


                        <div class='contentcontainer'>
                            <div class="whitebox center toneblack">
                                <div class='whiteborder padded'>
                                    <hr>
                                    <h1 class='white padtop large'>HEADER</h1>
                                    <hr>
                                </div>
                            </div>
                        </div>


                        <div class='contentcontainer'>
                            <div class="whitebox tonegreen padded">
                                <div class="whitebox center padded">
                                    <p>Mollit nisi occaecat reprehenderit in aute proident magna mollit nulla magna
                                        ipsum velit reprehenderit voluptate. Irure officia adipisicing dolore ex.
                                        Adipisicing ut aliquip ut qui elit labore sint duis. Pariatur aute velit id sit
                                        anim enim elit et veniam fugiat duis commodo. Ipsum anim culpa nulla excepteur
                                        eu ipsum quis cillum ullamco minim eu culpa Lorem. Irure irure minim
                                        reprehenderit sint pariatur enim ad amet dolore culpa anim nulla nostrud qui.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class='contentcontainer'>
                            <div class="whitebox padded">
                                <p>Aliqua magna sit exercitation esse cillum ex aliquip ex commodo est pariatur. Ipsum
                                    exercitation ad deserunt adipisicing excepteur voluptate nostrud amet sint ad
                                    laborum. Aliqua do nisi sint dolor anim commodo. Enim adipisicing velit duis ullamco
                                    id incididunt labore enim qui aliqua pariatur veniam aute. Qui ad veniam id ea quis
                                    aute adipisicing et exercitation nisi in duis.</p>
                            </div>
                        </div>




                    </section>



                    <div class='rowbox'>

                    
                        <div class='contentcontainer padright'>
                                <div class="whitebox padded">
                                    <section>
                                        <h2>socials</h2>
                                    </section>
                            </div>
                        </div>


                        <div class='contentcontainer padleft'>
                            <div class="whitebox padded">
                                <div class="center">
                                    <p>where is my FUCKING meow mix?</p>
                                </div>
                            </div>
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

        <?php include ($footer) ?>
    </main>
</body>

</html>