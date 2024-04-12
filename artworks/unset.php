<?php
// Initialize the session
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to the homepage
header("Location: gallery.php"); // Replace index.php with your homepage URL
exit;
?>