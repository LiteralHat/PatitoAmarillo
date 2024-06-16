<?php include_once ('../../config.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralDesign.</title>
    <meta name="LiteralHat | Design." content="Dedicated debug page for fonts and other formatting." />
    <?php include_once ELEMENT_HEADTAGS ?>
</head>

<body>
    <main>

        <!-- Header and opening main content div used for styling  -->
        <?php include_once ELEMENT_HEADER ?>
        <?php include_once ELEMENT_MENUTOP ?>
        <!-- side bar on the left.  -->

        <div class="contentrowstripe centerbox">
            <div class='boxedsection'>
                <div class='sidecontainer'>
                <div class='spacermedium'></div>
                            
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
                            <p>Hi, this is just a template page.</p>
                        </div>
                    </div>


                    <section>
                        <div class='contentcontainer'>
                            <div class="whitebox center tone1">
                                <div class='whiteborder'>
                                    <h2 class='white padtop'>1. Typeface Formatting</h2>
                                </div>

                            </div>
                        </div>

                        <div class='contentcontainer'>
                            <div class="whitebox padded">
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
                    </section>

                    <section>
                        <div class='contentcontainer'>
                            <div class="whitebox center tone2">
                                <div class='whiteborder'>
                                    <h2 class='white padtop'>2. Special Classes</h2>
                                </div>

                            </div>
                        </div>

                        <div class='contentcontainer'>
                            <div class="whitebox padded">
                                <p class='logotext'>This is a p element with class='logotext'.</p>
                                <p class='large'>This is a p element with class='large'.</p>
                                <p class='small'>This is a p element with class='small'.</p>
                                <p class='fancy'>This is a p element with class='fancy'.</p>
                                <p class='question'>This is a p element with class='question'.</p>
                                <p class='bold'>This is a p element with class='bold'.</p>
                                <p class='italics'>This is a p element with class='italics'.</p>
                                <p class='warning'>This is a p element with class='warning'.</p>
                                <p class='quote'>This is a p element with class='quote'.</p>
                            </div>
                        </div>
                    </section>



                    <div class='contentcontainer'>
                        <div class="whitebox center tone3">
                            <div class='whiteborder'>
                                <h2 class='white padtop'>3. Font Families</h2>
                            </div>
                        </div>
                    </div>

                    <div class='contentcontainer'>
                        <div class="whitebox padded">
                        <p style='font-family: DataTrash'>Data Trash - The quick brown fox jumps over the lazy dog</p>
                        <p style='font-family: "04b"'>04b - The quick brown fox jumps over the lazy dog</p>
                        <p style='font-family: Russo One'>Russo One - The quick brown fox jumps over the lazy dog</p>
                        <p style='font-family: Impact'>Impact - he quick brown fox jumps over the lazy dog</p>
                        <p style='font-family: Haettenschweiler'>Haettenschweiler - The quick brown fox jumps over the lazy dog</p>
                        <p style='font-family: "Gamer"'>Gamer - The quick brown fox jumps over the lazy dog</p>
                        <p style='font-family: "Azeret Mono"'>Azeret Mono - The quick brown fox jumps over the lazy dog</p>
                        <p style='font-family: Roboto'>Roboto - The quick brown fox jumps over the lazy dog</p>
                        <p style='font-family: Verdana'>Verdana - The quick brown fox jumps over the lazy dog</p>
                        <p style='font-family: Spinnaker'>Spinnaker - The quick brown fox jumps over the lazy dog</p>
                        

                        <h3>.Jpg Reference Image</h3>
                        <p style='font-family: Courier New'>Courier New - The quick brown fox jumps over the lazy dog</p>
                        <p style='font-family: Insatiable'>Insatiable - The quick brown fox jumps over the lazy dog</p>
                        <img src='../images/temp/font-sample.jpg' width='600px'>
                        </div>
                    </div>

                    <div class='contentcontainer'>
                        <div class="whitebox center tone4">
                            <div class='whiteborder'>
                                <h2 class='white padtop'>4. Tone Variables</h2>
                            </div>
                        </div>
                    </div>

                    <div class='contentcontainer'>
                        <div class="whitebox white padded">
                        <div class="whitebox white padded tone1"><p class="fancy">.tone1</p></div>
                        <div class="whitebox white padded tone2"><p class="fancy">.tone2</p></div>
                        <div class="whitebox white padded tone3"><p class="fancy">.tone3</p></div>
                        <div class="whitebox white padded tone4"><p class="fancy">.tone4</p></div>
                        <div class="whitebox white padded tone5"><p class="fancy">.tone5</p></div>
                        <div class="whitebox white padded tone6"><p class="fancy">.tone6</p></div>
                        <div class="whitebox white padded tone7"><p class="fancy">.tone7</p></div>
                        <div class="whitebox white padded tone8"><p class="fancy">.tone8</p></div>
                        <div class="whitebox white padded tone9"><p class="fancy">.tone9</p></div>
                        <br>
                        <div class="whitebox white padded tonered"><p class="fancy">.tonered</p></div>
                        <div class="whitebox white padded tonegreen"><p class="fancy">.tonegreen</p></div>
                        <div class="whitebox white padded toneblack"><p class="fancy">.toneblack</p></div>
                        </div>
                    </div>
                </div>




                <div class='sidecontainer'>
                    <div class='contentbox padtop'>
                        <div class='whitebox padded'>
                            <p>This is a side container.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- Footer and closing div tags used for styled main content box  -->

        <?php include_once (ELEMENT_FOOTER) ?>
    </main>
</body>

</html>