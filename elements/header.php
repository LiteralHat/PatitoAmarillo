<header class="header centerbox">
    <div class="headercontainer">
        <div class="logos">
            <span class="logofont">LiteralHat.com</span>
            <img class="logoimage"
                src="<?php echo ($links . 'images/pagedolls/cute_sitting_sheep_with_bowtie.png'); ?>">
        </div>
        <div id="searchbar">
            <input type="search" placeholder="This doesn't work yet..!">
            <button type="submit">Search</button>
        </div>
    </div>
</header>


<div id="stripesboxtop" class="centerbox">
    <div class="widthcontainer whitebox top">
        <nav>
            <ul id="menutop">
                <li><a href=<?php echo $links . "index.php" ?>>Home</a></li>
                <li><a href="https://www.patreon.com/LiteralHat" target="_blank">Patreon</a></li>
                <li><a href=<?php echo $links . "cat_sounds.html"?>>Cat Sounds</a></li>
                <li><a href=<?php echo $links . "about/terms_of_use.php" ?>>Terms of Use</a></li>
                <li><a href=<?php echo $links . "about/privacy_policy.php" ?>>Privacy Policy</a></li>
                <li><a href=<?php echo $links . "about/changelog.php" ?>>Changelog</a></li>
            </ul>
        </nav>
    </div>
</div>


<div id="stripesboxmiddle" class="centerbox">

                <div class='sidecontentbox'>
                <?php if (basename($_SERVER["PHP_SELF"]) !== "index.php") {
                    include('goback.php');
                }
                ?>

                </div>

    <div class="widthcontainer whitebox middle">
        <div class="pagecontent">