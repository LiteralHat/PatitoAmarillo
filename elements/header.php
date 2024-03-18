<!-- header elements (logo, search bar) -->

<header class="header centerbox">
    <a id="top"></a>
    <div class="headercontainer">
        <span><span class="logotext hoverred nounderline"><a href=<?php echo $links . "index.php" ?>>LiteralHat.com</a><span id='logoimage'><img class="logoimage"
                        src="<?php echo ($links . 'images/pagedolls/x.png'); ?>"></span></span>
        </span>
        <span id="searchbar">
            <input type="search" placeholder="This doesn't work yet..!">
            <button type="submit">Search</button>
        </span>
    </div>
</header>

<!-- script for random logo  -->
<script src="<?php echo ($links . 'scripts/randomcat.js') ?>"></script>


<!-- top part of content box that houses external links  -->
<div id="stripesboxtop" class="centerbox">
    <div class="widthcontainer whitebox top">
        <nav>
            <ul id="menutop" class="nounderline">
                <li><a href=<?php echo $links . "index.php" ?>>Home</a></li>
                <li><a href="https://www.patreon.com/LiteralHat" target="_blank">Patreon</a></li>
                <li><a href=<?php echo $links . "cat_sounds.html" ?>>Cat Sounds</a></li>
            </ul>
        </nav>
    </div>
</div>

<!-- <div class="centerbox">
    <div class="widthcontainer whitebox intersect">


        <nav>
            <ul class='intersectmenu'>
        <?php include ($folder . '/elements/sidemenu.php') ?>
            </ul>
        </nav>  


    </div>
</div> -->

<!-- side bar on the left.  -->
<div id="stripesboxmiddle" class="centerbox">

    <div class='sidecontentbox'>
        <nav>
            <ul class='sidemenu'>
                <?php include ($folder . '/elements/sidemenu.php') ?>
            </ul>
        </nav>
        <ul class='sidemenu sticky'>
            <li class='list6'><a href='#top'>Back to Top</a></li>
    </div>



    <!-- top half of the stupid content div -->
    <div class="widthcontainer whitebox middle">
        <div class="pagecontent">