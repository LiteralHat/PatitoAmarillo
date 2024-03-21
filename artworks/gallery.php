<?php include_once ('../variables.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralBlank.</title>
    <meta name="LiteralHat | Blank." content="" />
    <?php include_once ($folder . '/elements/headtags.php') ?>
</head>

<body>
    <main>



        <div class="contentrowstripe centerbox">
            <div class='boxedsection'>
                <div class='sidecontainer'>
                    <div class='spacermedium'></div>
                    <?php include_once ($menusimple) ?>

                </div>

                <div class='bigwidthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox center tone8">
                            <div class='whiteborder padded'>
                                <hr>
                                <h1 class='white padtop huge'>
                                    LITERALGALLERY
                                </h1>
                                <hr>
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
        <?php include_once ($menutop) ?>
        <!-- side bar on the left.  -->

        <div class="contentrowblack centerbox">
            <div class='boxedsection'>
                <div class='sidecontainer'>
                    <div class='spacermedium'></div>
                    <?php include_once ($menusimple) ?>

                </div>

                <div class='biggerwidthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox toneblack">
                            <div class='whiteborder'>
                                <div class='whitebox noshadow padded'>
                                    <h2>Welcome to the gallery.</h2>
                                    <p>This section of the website contains my artworks. You
                                        can either click the buttons to be taken to a random artwork, check out whatever
                                        is newest, or find a piece using the extensive filter.</p>
                                    <p>My coding is probably shit, if the filter has broken in some way please send an
                                        email to support@literalhat.com.</p>
                                    <p class='bold'>Please note that at this time, gore artworks are not viewable and
                                        will require a Patreon account to login and access in the future.</p>
                                    <p class='warning'>As of right now artworks are still being uploaded - I have more
                                        than 1000 individual files to upload, sort, and tag.</p>
                                    <p>Your patience is appreciated.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='spacersmall'>
                    </div>
                </div>


                <div class='sidecontainer'>
                    <div class='contentbox padtop'>
                    </div>
                </div>
            </div>
        </div>





        <div class="contentrowwhite centerbox">
            <div class='boxedsection'>

                <div class='sidecontainer'>



                    <form class='form'>
                        <div class='contentcontainer'>
                            <div class='spacersmall'>
                            </div>
                            <div class="whitebox padded">

                                <h2>Advanced Search:</h2>
                                <fieldset id='titlecontains'>
                                    <p>
                                        <label for="title">
                                            Title Contains:
                                            <input id="title" type="text" name="title" />
                                        </label>
                                    </p>
                                </fieldset>

                                <fieldset id='daterange'>
                                    <h3>Date Range:</h3>
                                    <p>
                                        <label for="fuzzydate"><input id="fuzzydate" type="checkbox" name="fuzzy" />
                                            Fuzzy Date</label>

                                    <ul>
                                        <li><label for="beforedate">From:</label><input id="beforedate" type="date"
                                                name="beforedate" /></li>
                                        <li><label for="afterdate">To: </label><input id="afterdate" type="date"
                                                name="afterdate" /></li>
                                    </ul>
                                    </p>
                                </fieldset>


                                <fieldset>
                                    <label for='mediums'>
                                        <h3>Mediums:</h3>

                                        <label for="containsonly"><input id="containsonly" type="checkbox"
                                                name="containsonly" /> Contains only:</label>
                                        <p>
                                        <ul>
                                            <li><input id="watercolor" type="checkbox" name="watercolor" /><label
                                                    for="watercolor"> Watercolor</label></li>
                                            <li><input id="ink" type="checkbox" name="ink" /><label for="ink">
                                                    Ink</label></li>
                                            <li><input id="acrylic" type="checkbox" name="acrylic" /><label
                                                    for="acrylic"> Acrylic</label></li>
                                            <li><input id="graphite" type="checkbox" name="graphite" /><label
                                                    for="graphite"> Graphite</label></li>
                                            <li><input id="gouache" type="checkbox" name="gouache" /><label
                                                    for="gouache"> Gouache</label></li>
                                            <li><input id="digital" type="checkbox" name="digital" /><label
                                                    for="digital"> Digital</label></li>
                                            <li><input id="traditional" type="checkbox" name="traditional" /><label
                                                    for="traditional"> Traditional</label></li>
                                            <li><input id="mixedmedia" type="checkbox" name="mixedmedia" /><label
                                                    for="mixedmedia"> Mixed Media</label></li>
                                        </ul>
                                        </p>
                                    </label>
                                </fieldset>

                                <fieldset>
                                    <h3>Show For Sale Only?</h3>
                                    <p>
                                        <input id="forsale" type="radio" name="forsale" selected /><label for="forsale">
                                            Yes plz</label>
                                        <input id="notforsale" type="radio" name="forsale" /><label for="notforsale"> No
                                            thx</label>
                                    </p>
                                </fieldset>

                                <fieldset>
                                    <h3>Snowflake filter</h3>
                                    <p>
                                    <ul>
                                        <li><input id="withgore" type="checkbox" name="withgore" /><label
                                                for="withgore"> Gore!</label></li>
                                        <li><input id="withguns" type="checkbox" name="withguns" /><label
                                                for="withguns"> Guns!</label></li>
                                    </ul>

                                    <input id="showonly" type="radio" name="gorevisibility" /><label for="showonly">
                                        Show only</label>
                                    <input id="hide" type="radio" name="gorevisibility" /><label for="hide">
                                        Hide</label>
                                    </p>
                                </fieldset>

                                <fieldset>
                                    <h3>Characters:</h3>
                                    <p>
                                        <input id="containsonly" type="checkbox" name="containsonly" /><label
                                            for="containsonly"> Contains only:</label>
                                    <ul>
                                        <li><input id="hat" type="checkbox" name="hat" /><label for="hat"> Hat</label>
                                        </li>
                                        <li><input id="chickenman" type="checkbox" name="chickenman" /><label
                                                for="title"> Chicken Man</label></li>
                                        <li><input id="lady" type="checkbox" name="lady" /><label for="title">
                                                Lady</label></li>
                                        <li><input id="fluffy" type="checkbox" name="fluffy" /><label for="fluffy">
                                                Fluffy</label></li>
                                        <li><input id="pigtails" type="checkbox" name="pigtails" /><label
                                                for="pigtails"> Pigtails</label></li>
                                    </ul>
                                    </p>
                                </fieldset>
                            </div>
                        </div>

                        <div class='contentcontainer'>
                                <fieldset>
                                    <button class='button'>SEARCH</button>
                                </fieldset>
                        </div>
                    </form>




                </div>






                <div class='biggerwidthcontainer'>



                    <div class='spacermedium'>
                    </div>


                    <div class='contentcontainer'>
                        <div class="whitebox padded">

                            <h1>test</h1>
                            <p>Aliqua nulla eu sint tempor esse aliqua mollit in ullamco sunt laborum cillum. Fugiat
                                aute est consequat pariatur eiusmod ullamco quis velit commodo do cillum. Deserunt
                                enim
                                consectetur laborum eiusmod dolore quis nisi magna eu amet veniam id mollit. Nulla
                                nisi
                                Lorem voluptate eu elit ea adipisicing cupidatat ut nostrud aliqua velit. Mollit
                                proident laborum ex quis adipisicing Lorem sint elit deserunt ex deserunt. Pariatur
                                aliqua culpa Lorem est ut laboris enim.</P>

                        </div>
                    </div>



                </div>

                <div class='sidecontainer'>
                </div>

            </div>
        </div>












        <?php include ($footer) ?>
    </main>
</body>

</html>