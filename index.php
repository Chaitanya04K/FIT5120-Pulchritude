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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 banner-heading">You are Not Alone</h1>
            <p class="lead banner-subheading">We are offering to provide information and support for international students
                in Victorian Universities and they can seek to find more on this website</p>
            <a href="tel:131114" class="actionBtn">Call: Lifeline 13 11 14</a>
        </div>
    </div>

    <div class="info-section">
        <p> <span> 60% </span> of international university students studying in Victoria have mental health illness. International students are <span> twice </span> as likely to suffer from depression as local students. </p>
    </div>

    <div class="container-fluid">
        <div class="row">

            <div class="cardSection col-12">
                <div class="card">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper"></div>
                        <div class="card-body">
                            <h4 class="card-title">Learn about depression</h4>
                            <p class="card-text">Depression is a very serious condition which unfortunately is very common and should not be ignored. It can affect your physical and mental health and can even stop you from doing normal daily activies.</p>
                            <a href="getInfo.html" class="actionBtn btn-right">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cardSection col-12">
                <div class="card">
                    <div class="card-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Feeling stressed?</h4>
                            <p class="card-text">The K10 Checklist is a simple checklist which will measure the level of general stress one is facing without identifying the causes.</p>
                            <a href="checklist.html" class="actionBtn">Take the K10 Checklist</a>
                        </div>
                        <div class="img-square-wrapper help"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include 'footer.php'; ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>