<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainguard</title>

    <!-- icon -->
    <link rel="icon" href="/images/brainstorm_logo.png">

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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a href="#" class="nav-link">K10 checklist</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 banner-heading">You are Not Alone</h1>
            <p class="lead banner-subheading">Need someone to talk to?</p>
            <a href="tel:0435976608" class="actionBtn">Call: Lifeline 13 11 14</a>
        </div>
    </div>

    <div class="info-section">
        <p> <span> 60% </span> of international uni students studying in Victoria have mental health illness. International students are <span> twice </span> as likely to suffer from depression as local students. </p>
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
                            <a href="#" class="actionBtn">Take the K10 Checklist</a>
                        </div>
                        <div class="img-square-wrapper help"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>