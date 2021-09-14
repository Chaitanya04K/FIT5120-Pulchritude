<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Navbar CSS -->
    <link rel="stylesheet" href="navbar.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <img class="brand-logo-brainguard" src="images/icon_logo.png" alt="brand_logo">
        <a href="homepage.php" class="navbar-brand font-weight-bold">Brainguard</a>
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
                        <a class="dropdown-item" href="getInfo.php">Information on Depression</a>

                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Information on Depression</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li class="dropdown-item" href="#"><a>Causes of Depression</a></li>
                            <li class="dropdown-item" href="#"><a>Signs and Symptoms</a></li>
                            <li class="dropdown-item" href="#"><a>Treatments od Depression</a></li>
                        </ul>

                        <a class="dropdown-item" href="getSupport.php">Find support</a>
                        <a class="dropdown-item" href="graphs.php">Statistics on Depression</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="moodDiary.php" class="nav-link">Mood diary</a>
                </li>
                <li class="nav-item">
                    <a href="checklist.php" class="nav-link">K10 checklist</a>
                </li>

                <?php if ($_SESSION["loggedin"] == true) : ?>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">Logout</a>
                    </li>
                <? else : ?>
                    <li class="nav-item">
                        <a href="register.php" class="nav-link">Login/Register</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </nav>

    <!-- JS and JQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>