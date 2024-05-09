<?php

//$folder - for any php includes
//$link - for any hrefs and srcs


//if the document root isnt in the xammp htdocs directory then it is live

if ($_SERVER['DOCUMENT_ROOT'] == 'C:/xampp/htdocs') {
$folder = 'C:/xampp/htdocs/LiteralWebsite/includes';
$links = 'http://localhost/LiteralWebsite/';

} else {

$folder = $_SERVER['DOCUMENT_ROOT'];
$links = 'https://literalhat.com/';
};


$header = $folder . '/header.php';
$footer = $folder . '/footer.php';

$headtags = $folder . '/headtags.php';
$stylesheet = $links . 'css/styles.css';

$menutop = $folder . '/menutop.php';
$whiteboxbottom = $folder . '/whiteboxbottom.php';

$menuleft = $folder . '/menuleft.php';
$menusimple = $folder . '/menusimple.php';


$signuptext = '<p>If you would like to keep updated with new posts, <a href="'. $links .'community/newsletter">sign up
here.</a></p>';