<?php include_once ('../../config.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Website Changelog | LiteralHat</title>
    <meta name="Website Changelog | LiteralHat"
        content="View the site's version history, new changes, bug fixes, upcoming features, meta information, and more." />
    <?php include_once (INCLUDES_FOLDER . '/headtags.php') ?>
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

                    <?php include_once (ELEMENT_MENUSIMPLE) ?>
                </div>

                <div class='widthcontainer'>
                    <div class='contentcontainer'>
                        <div class="whitebox center toneblack">
                            <div class='whiteborder padded'>
                                <hr>
                                <h1 class='white padtop large'>
                                    Changelog.
                                </h1>
                                <hr>
                            </div>
                        </div>
                    </div>

                    <section>
                        <div class='contentcontainer'>

                            <div class="whitebox padded">
                                <p class="bold">This is the site's official changelog.</p>
                                <p>To view this website's Git repository and version history, <a
                                        href="https://github.com/LiteralHat/literalhat.com" target="_blank">click
                                        here.</a>
                                </p>
                                <p class="warning">If this website appears broken, you need to clear your cache (hard
                                    refresh on desktop with CTRL + SHIFT R).</p>
                            </div>

                        </div>
                    </section>

                    <section>
                        <div class='contentcontainer'>
                            <div class='whitebox toneblack'>
                                <div class='whiteborder paddedsm'>
                                    <div class="whitebox padded">
                                        <h2 class='textred'>Known Major Issues</h2>
                                        <ul>
                                            <li>Images in the gallery containing apostrophes in title and file names
                                                refuse to parse and render correctly</li>
                                            <li>Gallery individual view pages may be broken - 'newest' button is broken
                                                too</li>
                                        </ul>

                                        <h2 class='textgreen'>Planned features</h2>
                                        <ul>
                                            <li>Working search bar</li>
                                            <li>Email subscriptions</li>
                                            <li>Articles section</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section>
                        <div class='contentcontainer'>
                            <div class="whitebox padded">


                                <h3>v16.11.0-beta 14.05.2024</h3>
                                <ul>
                                    <li>Fixed some security bugs that caused a persisting 403 forbidden error</li>
                                    <li>Fanart submission page now works as intended</li>
                                    <li>Changed default sorting of gallery page to be from newest to oldest</li>
                                </ul>

                                <hr class='hrtextseparator'><br>

                                <h3>v16.10.0-beta 13.05.2024</h3>
                                <ul>
                                    <li>Added fanart year selectors!</li>
                                    <li>Added fanart submission form!</li>
                                    <li>Fanart gallery is now faster than before!</li>
                                </ul>

                                <h3>v15.10.0-beta 11.05.2024</h3>
                                <ul>
                                    <li>Fanart section is back!</li>
                                    <li>Added submission button on fanart page</li>
                                    <li>Removed unused left menu options</li>
                                    <li>Made gallery code more efficient, faster, whatever</li>
                                    <li>Added code that sorts artworks to newest to oldest</li>
                                </ul>


                                <h3>v14.10.0-beta 10.05.2024</h3>
                                <ul>
                                    <li>Fixed spacing issue with smaller pages not displaying blocks correctly on mobile
                                    </li>
                                    <li>Purged site cache</li>
                                    <li>Replaced homepage cover image with higher resolution version</li>
                                    <li>Fixed 404 page not working on website subdirectories</li>
                                    <li>Updated About+Faq</li>
                                </ul>

                                <h3>v14.9.0-beta 07.05.2024</h3>
                                <ul>
                                    <li>Removed fanart page temporarily</li>
                                </ul>

                                <h3>v14.8.0-beta 06.05.2024</h3>
                                <ul>
                                    <li>Released Discography page!</li>
                                    <li>Added fanart submission form to fanart page</li>
                                    <li>Added a lot of back end stuff</li>
                                </ul>

                                <h3>v13.8.0-beta 02.05.2024</h3>
                                <ul>
                                    <li>Updated top menu bar with cooler links, added random link feature too so every
                                        time you refresh a new track comes up.</li>
                                    <li>Updated Help! Save! Support! page</li>
                                    <li>Updated About + FAQ page</li>
                                    <li>Updated homepage</li>
                                </ul>

                                <h3>v13.7.0-beta 16.04.2024</h3>
                                <ul>
                                    <li>Fixed issue on .htaccess causing 404 page not to display properly</li>
                                    <li>Added 301 rewrite rule that redirects www.literalhat.com to literalhat.com
                                        as
                                        the
                                        former doesn't have CORS permissions and I don't want to add any</li>
                                    <li>Added dynamic timestamp to 'last updated' text on frontpage</li>
                                    <li>Changed some wording on <a href='../community/support'>support</a> page</li>
                                    <li>Fixed alignment issues on rock-paper-scissors page</li>
                                    <li>Added separator to changelog</li>
                                </ul>
                                <br>
                                <h3>v13.6.0-beta 13.04.2024</h3>
                                <ul>
                                    <li>Fixed incorrect variable causing entire gallery sorting methods to break in
                                        gallery</li>
                                    <li>Added category search option in gallery advanced search</li>
                                    <li>Added error image when gallery search returns no results</li>
                                    <li>Added search query text so user can see what they searched for</li>
                                    <li>Removed smooth scroll from website (temporary)</li>
                                    <li>Added href to page tags to align gallery box to top on page jump</li>
                                    <li>Changed default items per page to 30</li>
                                    <li>Improved responsive elements on gallery on midsize screen widths</li>
                                    <li>Added <a href='../community/support'>support</a> page</li>
                                    <li>Fixed css issue causing pagewidth to size down inconsistently on tablet
                                        devices</li>
                                    <li>Changed some homepage elements and typefaces</li>
                                    <li>Fixed all site meta head tags</li>
                                </ul>

                                <h3>v13.5.0-beta 12.04.2024</h3>
                                <ul>
                                    <li>Added sortby functionality to gallery page</li>
                                    <li>Added <a href='../artworks/archive'>gallery archive</a> page</li>
                                    <li>Added spacer to bottom of gallery page</li>
                                    <li>Fixed random button on gallery header</li>
                                    <li>Changed 'known issues' to 'known major issues'</li>
                                    <li>Updated About + FAQ</li>
                                    <li>Added pagenation to gallery</li>
                                    <li>Added session to gallery</li>
                                    <li>Removed jQuery scripts</li>
                                </ul>

                                <h3>v12.5.0-beta 11.04.2024</h3>
                                <ul>
                                    <li>Added filter functionality to gallery page</li>
                                    <li>Added artwork counter to gallery page</li>
                                    <li>Added mobile responsiveness to all gallery pages</li>
                                    <li>Added better individual artwork viewer buttons</li>
                                    <li>Fixed thumbnail spacing issues</li>
                                </ul>

                                <h3>v11.5.0-beta 09.04.2024</h3>
                                <ul>
                                    <li>Added LiteralGallery!</li>
                                    <li>Added individual gallery pages</li>
                                    <li>Added placeholder images for gallery</li>
                                    <li>Added gallery to menu</li>
                                    <li>Updated About FAQ page</li>
                                </ul>


                                <h3>v10.5.0-beta 06.04.2024</h3>
                                <ul>
                                    <li>Added thumbnail rendering to fanart page</li>
                                    <li>Fixed changelog issues</li>
                                </ul>

                                <h3>v10.4.0-beta 06.04.2024</h3>
                                <ul>
                                    <li>Updated frontpage</li>
                                    <li>Added gallery loading animation</li>
                                    <li>Added gallery basic hover effect</li>
                                    <li>Added better gallery lightbox</li>
                                    <li>Added better gallery credits</li>
                                    <li>Added better responsiveness on tablet width devices</li>
                                    <li>Fixed unwanted whitespace on right of screen on some devices</li>
                                    <li>Fixed gallery year hover colors</li>
                                </ul>

                                <h3>v9.4.0-beta 05.04.2024</h3>
                                <ul>
                                    <li>Added gallery functionality</li>
                                </ul>

                                <h3>v8.4.0-beta 04.04.2024</h3>
                                <ul>
                                    <li>Added Rock Paper Scissors</li>
                                    <li>Updated Patreon Name List</li>
                                    <li>Fixed responsiveness issue on medium tablet pagewidths</li>
                                    <li>Updated About + FAQ</li>
                                </ul>

                                <h3>v7.4.0-beta 23.03.2024</h3>
                                <ul>
                                    <li>Added placeholder fanart gallery</li>
                                    <li>Added placeholder gallery tab</li>
                                    <li>Fixed display issues on certain contentwidths on mobile</li>
                                    <li>Fixed broken 'back to top' display</li>
                                    <li>Added better header color functionality</li>
                                </ul>

                                <h3>v6.4.0-beta 20.03.2024</h3>
                                <ul>
                                    <li>Removed padding from footer that caused a white bar on right side of page
                                    </li>
                                    <li>Removed 'back to top' button on mobile devices</li>
                                    <li>Added mobile responsive 'side' menu</li>
                                    <li>Changed spacing on top of menu bar on subpages</li>
                                </ul>

                                <h3>v6.3.0-beta 20.03.2024</h3>
                                <ul>
                                    <li>Added page sectioning</li>
                                    <li>Added 404 page</li>
                                    <li>Added mobile responsiveness</li>
                                    <li>Added better stylesheet on literalhat.com/cat_sounds</li>
                                    <li>Added super cool homepage splash picture</li>
                                    <li>Added Patron list</li>
                                    <li>Added cat pictures</li>
                                    <li>Removed search bar</li>
                                    <li>Changed site navbar</li>
                                    <li>Changed site logo</li>
                                    <li>Fixed site templating and some backend issues</li>
                                    <li>Fixed typo on 'Pugglester'</li>
                                    <li>Punched a homophobe</li>
                                </ul>

                                <h3>v5.3.0-beta 17.03.2024</h3>
                                <ul>
                                    <li>Added useless random site icon</li>
                                    <li>Added .htaccess</li>
                                    <li>Fixed fonts breaking on some browsers</li>
                                    <li>Fixed missing margin on top menu on mobile devices</li>
                                    <li>Moved Terms of Use and Privacy Policy to footer</li>
                                </ul>

                                <h3>v5.2.0-beta 16.03.2024</h3>
                                <ul>
                                    <li>Added menu navigation bar</li>
                                    <li>Added consistent site colors</li>
                                    <li>Added about+FAQ page</li>
                                    <li>Added gamer QnA</li>
                                    <li>Removed goback button</li>
                                    <li>Added variables in place of fonts on stylesheet</li>
                                    <li>Changed link colors to gray</li>
                                </ul>


                                <h3>v4.2.0-beta 15.03.2024</h3>
                                <ul>
                                    <li>Added basic templating to site</li>
                                    <li>Added cache warning to front page</li>
                                    <li>Fixed several formatting issues on about/terms_of_use</li>
                                    <li>Added temporary goback button on non-homepage pages</li>
                                </ul>

                                <h3>v3.2.0-beta 13.03.2024</h3>
                                <ul>
                                    <li>Changed site file hierachy</li>
                                    <li>Added social media links to some testers</li>
                                </ul>

                                <h3>v3.1.0-beta 10.03.2024</h3>
                                <ul>
                                    <li>Added changelog, terms of use, privacy policy</li>
                                    <li>Added temporary special thanks section</li>
                                    <li>Changed margin spacing on mobile devicfes</li>
                                    <li>Fixed scaling issues on certain mobile resolutions</li>
                                    <li>Fixed goback button on temporary pages (like this one)</li>
                                    <li>Added useless cat sounds</li>
                                </ul>

                                <h3>v2.1.0-beta 09.03.2024</h3>
                                <ul>
                                    <li>Website is now fully mobile responsive!!</li>
                                </ul>

                                <h3>v1.1.0-beta 09.03.2024</h3>
                                <ul>
                                    <li>Changed organisation of divs, overlapping class properties, internal file
                                        structure</li>
                                    <li>Fixed non semantic html tags</li>
                                    <li>Fixed mobile specific issue where the background would appear as black
                                        instead
                                        of white</li>
                                </ul>
                                <h3>v1.0.0-beta 07.03.2024</h3>
                                <ul>
                                    <li>Added basic styling to site</li>
                                    <li>Added link colors</li>
                                    <li>Added basic css styling to text</li>
                                    <li>Added cat picture</li>
                                </ul>
                                <h3>v1.0.0-alpha 05.03.2024</h3>
                                <ul>
                                    <li>Added basic landing webpage to ensure propagation has occured</li>
                                </ul>


                            </div>
                        </div>
                    </section>


                </div>


                <div class='sidecontainer'></div>

            </div>

        </div>
        <!-- Footer and closing div tags used for styled main content box  -->

        <?php include_once (ELEMENT_FOOTER) ?>
    </main>
</body>

</html>