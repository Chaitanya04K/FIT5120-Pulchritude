<?php
//Starting the session
session_start();

//Initializing global variables
$openModal = false;

//Checking if user is not logged in, if not then redirecting to login page
if (!isset($_SESSION["userid"]) || $_SESSION["loggedin"] !== true) {
    $openModal = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainguard</title>

    <!-- style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Before you get started...</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>You will need to be logged in to be able to save your Mood diary. Either login if you already have an account or Register if new to brainguard.</p>
                </div>
                <div class="modal-footer">
                    <a href="login.php"><button type="button" class="btn btn-primary">Login</button></a>
                    <a href="register.php"><button type="button" class="btn btn-primary">Register</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid mood-diary">
        <div class="container">
            <h1 class="display-4 banner-heading">Get to know yourself</h1>
            <p class="lead banner-subheading">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat cum, nemo fugiat quod a quae impedit iusto doloribus perspiciatis, delectus hic? Natus facilis aliquam dolores et voluptatem accusantium. Adipisci, ab.</p>
            <a href="tel:131114" class="actionBtn">Call: Lifeline 13 11 14</a>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <script>
        //Opening modal only if user is not logged in
        var openModal = <?php echo $openModal; ?>;
        if (openModal == 1) {
            $('#exampleModalCenter').modal('show');
        }
    </script>
</body>

</html>