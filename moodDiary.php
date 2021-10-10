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

    <!-- icon -->
    <link rel="icon" href="/images/icon_logo.png">

    <!-- style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php include 'navbar.php'; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mood Diary</li>
        </ol>
    </nav>

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
            <h1 class="display-4 banner-heading">Get to know Yourself</h1>
            <p class="lead banner-subheading">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat cum, nemo fugiat quod a quae impedit iusto doloribus perspiciatis, delectus hic? Natus facilis aliquam dolores et voluptatem accusantium. Adipisci, ab.</p>
            <div class="actionBtn-container">
                <a href="tel:131114" class="actionBtn margin-right-md">Call: Lifeline 13 11 14</a>
                <a id="startWritingBtn" class="actionBtn margin-left-md" style="color:white;">Start Writing</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="mood-diary-section-title">WHY USE BRAINGUARD</div>
        <div class="mood-diary-section">
            <div class="mood-diary-section-card">
                <img src="images/security.png" alt="computer window with a lock over it">
                <p class="mood-diary-section-inner-title">Secure</p>
                <p class="mood-diary-section-inner">Brainguard provides you with a secure and reliable place to write down your thoughts and emotions in your own free time.</p>
            </div>
            <div class="mood-diary-section-card">
                <img src="images/responsive.png" alt="computer window with a lock over it">
                <p class="mood-diary-section-inner-title">Accessibility</p>
                <p class="mood-diary-section-inner">You have the freedom to write whenever and wherever, from any device that can access the internet.</p>
            </div>
            <div class="mood-diary-section-card">
                <img src="images/calendar.png" alt="computer window with a lock over it">
                <p class="mood-diary-section-inner-title">Tracking</p>
                <p class="mood-diary-section-inner">Access journal entries that you have written yesterday, a week back or even a year back. Keep track of your mood and triggers overtime.</p>
            </div>
        </div>
    </div>

    <div class="parallax">
        <div class="container">
            <div class="parallax-title">BENEFITS OF JOURNALING</div>
            <div class="parallax-subTitle">
                Expressing yourself in the form of journaling can bring out thoughts and feelings to the surface. Many mental health experts recommend journaling since it is good for your mental health. Overall, journaling has been found to:
                <ul>
                    <li>Boost your mood</li>
                    <li>Enhance your sense of well-being</li>
                    <li>Find patterns in your mood</li>
                </ul>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <script>
        //function to check if user is logged in or not
        var openModal = "<?php echo $openModal; ?>";

        
        function CheckIfLoggedIn() {
            if (openModal == 1) {
                $('#exampleModalCenter').modal('show');
            } else {
                window.location.href = "diaryEntry.php";
                exit;
            }
        }
        
        document.getElementById("startWritingBtn").addEventListener("click", CheckIfLoggedIn, false);

        //Opening modal only if user is not logged in
        if (openModal == 1) {
            $('#exampleModalCenter').modal('show');
        }
    </script>
</body>

</html>