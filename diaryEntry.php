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

    <form action="submitDiary();" method="post">
        <input type="text" name="title" id="diaryTitle">
        <label for="diaryTitle">Title</label>

        <input type="date" name="date" id="diaryDate">
        <label for="diaryDate">Date</label>

        <textarea id="diaryContent" name="diaryContent"></textarea>
        <label for="diaryContent">Content</label>

        <button type="submit" class="btn btn-primary">Submit</button>
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