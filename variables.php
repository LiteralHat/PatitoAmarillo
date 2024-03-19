<?php

//$folder - for any php includes
//$link - for any hrefs and srcs

//if the document root isnt in the xammp htdocs directory then it is live

if ($_SERVER['DOCUMENT_ROOT'] == 'C:/xampp/htdocs') {
$folder = 'C:/xampp/htdocs/LiteralWebsite';
$links = 'http://localhost/LiteralWebsite/';

} else {

$folder = $_SERVER['DOCUMENT_ROOT'];
$links = 'https://literalhat.com/';
};

$header = $folder . '/elements/header.php';
$footer = $folder . '/elements/footer.php';

$whiteboxtop = $folder . '/elements/whiteboxtop.php';
$whiteboxbottom = $folder . '/elements/whiteboxbottom.php';

$sidebarmenu = $folder . '/elements/sidebarmenu.php';
$sidebargamer = $folder . '/elements/sidebargamer.php';