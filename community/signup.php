<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {




    //do email validation procedures

    if ($_POST['signup']) {
        $_SESSION['garlic'] = '<p>Signup successful.</p>';
        header("Location: newsletter.php");
        exit();
    } else {
        $_SESSION['garlic'] = '<p>Something bad happened.</p>';
        header("Location: newsletter.php");
        exit();
    }
} else {

    header("Location: login.php");
    exit();
}
?>