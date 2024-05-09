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


$header = $folder . '/includes/header.php';
$footer = $folder . '/includes/footer.php';

$headtags = $folder . '/includes/headtags.php';
$stylesheet = $links . 'css/styles.css';

$menutop = $folder . '/includes/menutop.php';
$whiteboxbottom = $folder . '/includes/whiteboxbottom.php';

$menuleft = $folder . '/includes/menuleft.php';
$menusimple = $folder . '/includes/menusimple.php';


$signuptext = '<p>If you would like to keep updated with new posts, <a href="'. $links .'community/newsletter">sign up
here.</a></p>';