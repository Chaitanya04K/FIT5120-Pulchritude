<?php 

//Starting the session
session_start();

//Redirecting user to homescreen if already logged in
if (isset($_SESSION["userid"]) && $_SESSION["userid"] === true) {
    header("location: index.php");
    exit;
}

?>