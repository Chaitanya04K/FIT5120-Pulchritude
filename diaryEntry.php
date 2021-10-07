<?php
//Starting the session
session_start();

require_once "config.php";

//Initializing global variables
$openModal = false;

//Checking if user is not logged in, if not then redirecting to login page
if (!isset($_SESSION["userid"]) || $_SESSION["loggedin"] !== true) {
    header("location: moodDiary.php");
    exit;
}

//Storing diary content into database
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $title = trim($_POST['title']);
    $date = trim($_POST['date']);
    $content = trim($_POST['content']);
    $email = $_SESSION["email"];
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
            <li class="breadcrumb-item"><a href="moodDiary.php">Mood Diary</a></li>
            <li class="breadcrumb-item active" aria-current="page">Diary</li>
        </ol>
    </nav>

    <form onsubmit="submitDiary()" action="" method="post">
        <div class="container">
            <div class="diaryForm">
                <label for="diaryTitle">Title</label>
                <input type="text" name="title" id="diaryTitle">

                <label for="diaryDate">Date</label>
                <input type="datetime-local" name="date" id="diaryDate">

                <label for="diaryContent">Note</label>
                <textarea name="content" id="diaryContent"></textarea>

                <input type="submit" name="submit" class="btn btn-primary" value="submit">
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

        var diaryContent = "<?php echo $content; ?>";

        if (diaryContent != "") {
            tinymce.get("#diaryContent").setContent(diaryContent);
        } else {
            tinymce.get("#diaryContent").setContent("<p>ELSE CONTENT</p>");
        }

        function submitDiary() {
            var title = document.getElementById("diaryTitle").value;
            var date = document.getElementById("diaryDate").value;
            var content = (((tinyMCE.get('diaryContent').getContent()).replace(/(&nbsp;)*/g, "")).replace(/(<p>)*/g, "")).replace(/<(\/)?p[^>]*>/g, "");
            var userName = "<?php echo $_SESSION["email"]; ?>";



            alert(title);
            alert(date);
            alert(content);
            alert(userName);
        }
    </script>
</body>

</html>