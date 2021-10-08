<?php

require_once "config.php";

//Initializing global variables
$noDiariesFound = true;
$email = trim($_POST['email']);

//Starting the session
session_start();

//Checking if user is not logged in, if not then redirecting to login page
if (!isset($_SESSION["userid"]) || $_SESSION["loggedin"] !== true) {
    header("location: moodDiary.php");
    exit;
}

//Fetching past diaries for particular user from database
if ($query = $db->prepare("SELECT diaryDate, diaryTime, title, content FROM diary WHERE email = ?")) {
    $query->bind_param('s', $email);
    $query->execute();
    $query->store_result();
    
    //Checking if past diaries exist
    if ($query->num_rows > 0) {
        $noDiariesFound = false;
        $result->bind_result($diaryDate, $diaryTime, $title, $content);
        while ($result->fetch()) {
            echo ($diaryDate . $diaryTime . $title . $content);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brainguard</title>

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
            <li class="breadcrumb-item active" aria-current="page">My Diaries</li>
        </ol>
    </nav>

    <p>WORKING</p>
    <?php include 'footer.php'; ?>
</body>

</html>