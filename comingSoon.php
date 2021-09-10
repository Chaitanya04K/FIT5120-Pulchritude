<?php
//Starting the session
session_start();

//Checking if user is not logged in, if not then redirecting to login page
if (!isset($_SESSION["userid"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainguard</title>

    <!-- icon -->
    <link rel="icon" href="/images/icon_logo.png">

    <!-- style CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <!-- <img class="brand-logo-brainguard" src="images/brainstorm_logo.png" alt="brand_logo"> -->
        <a href="index.php" class="navbar-brand font-weight-bold">Brainguard</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Information and Support
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="getInfo.html">Information on Depression</a>
                        <a href="getSupport.html" class="dropdown-item">Find support</a>
                        <a class="dropdown-item" href="graphs.html">Statistics on Depression</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Chatroom</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Mood diary</a>
                </li>
                <li class="nav-item">
                    <a href="checklist.html" class="nav-link">K10 checklist</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="coming-soon-background"></div>

</body>

</html>