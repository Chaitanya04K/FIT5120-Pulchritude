<?php
//Starting the session
session_start();

//Initializing global variables
$openModal = false;

//Checking if user is not logged in, if not then redirecting to login page
// if (!isset($_SESSION["userid"]) || $_SESSION["loggedin"] !== true) {
//     header("location: moodDiary.php");
// }
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
            <li class="breadcrumb-item"><a href="moodDiary.php">Mood Diary</a></li>
            <li class="breadcrumb-item active" aria-current="page">Diary</li>
        </ol>
    </nav>

    <form onsubmit="submitDiary()" method="post">
        <div class="container">
            <div class="diaryForm">
                <label for="diaryTitle">Title</label>
                <input type="text" name="title" id="diaryTitle">

                <label for="diaryDate">Date</label>
                <input type="datetime-local" name="date" id="diaryDate">

                <label for="diaryContent">Note</label>
                <textarea id="diaryContent" name="diaryContent"></textarea>

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <?php include 'footer.php'; ?>
    <!-- TinyMCE Scripts -->
    <script src="https://cdn.tiny.cloud/1/1ng6gy3zjbeddtg8y5lz43brwu7b80m4kgyy1btd71lo8424/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        // initializing tinyMCE editor
        tinymce.init({
            selector: '#diaryContent'
        });

        function submitDiary() {
            var title = document.getElementById("diaryTitle");
            var date = document.getElementById("diaryDate");
            var content = document.getElementById("diaryContent");

            console.log(title);
            console.log(date);
            console.log(content);
        }
    </script>
</body>

</html>