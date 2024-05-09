<?php
$dsn = "mysql:host=localhost;dbname=literaldb";
$dbusername = "dolly";
$dbpassword = "B8rg4dIVA2QtcNjhBuYf";

try {
$db = new PDO($dsn, $dbusername, $dbpassword);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo '<h1 class="warning">Fatal error.</h1><h2>Oh no, looks like one of the most important parts of this page is not working. </h2><p><b>Please email <i>support@literalhat.com</i> with this error: </b></p><p>' . $e->getMessage() . '</p>';
}