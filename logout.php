<?php
//Starting the session
session_start();

//Destroying the session
if (session_destroy()) {

    $_SESSION["loggedin"] = false;

    //Redirecting to login page
    header("location: login.php");
    exit;
}
?>