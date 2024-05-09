<?php
$dsn = "mysql:host=localhost;dbname=literaldbh";
$dbusername = "dolly";
$dbpassword = "B8rg4dIVA2QtcNjhBuYf";

try {
$db = new PDO($dsn, $dbusername, $dbpassword);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Database connection failed: ' . $e->getMessage();
}