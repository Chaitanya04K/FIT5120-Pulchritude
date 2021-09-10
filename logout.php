<?php
//Starting the session
session_start();

//Destroying the session
if (session_destroy()) {
    //Redirecting to login page
    header("location: login.php");
    exit;
}
?>