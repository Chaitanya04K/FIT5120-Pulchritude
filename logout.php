<?php
//Starting the session
session_start();

//Destroying the session
if (session_destroy()) {

    unset($_SESSION["loggedin"]);
    unset($_SESSION["userid"]);

    //Redirecting to homepage page
    header("location: homepage.php");
    exit;
}
?>