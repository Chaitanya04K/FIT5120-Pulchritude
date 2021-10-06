<?php
//Starting the session
session_start();

//Initializing global variables
$openModal = false;

//Checking if user is not logged in, if not then redirecting to login page
if (!isset($_SESSION["userid"]) || $_SESSION["loggedin"] !== true) {
    header("location: moodDiary.php");
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

    <form method="post">
        <textarea id="mytextarea" name="mytextarea"></textarea>
    </form>

    <?php include 'footer.php'; ?>
    <!-- TinyMCE Scripts -->
    <script src="https://cdn.tiny.cloud/1/1ng6gy3zjbeddtg8y5lz43brwu7b80m4kgyy1btd71lo8424/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        // initializing tinyMCE editor
        tinymce.init({
            selector: '#mytextarea'
        });

        //Opening modal only if user is not logged in
        var openModal = <?php echo $openModal; ?>;
        if (openModal == 1) {
            $('#exampleModalCenter').modal('show');
        }
    </script>
</body>

</html>