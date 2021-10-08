<?php

require_once "config.php";

//Starting the session
session_start();

//Initializing global variables
$diariesFound = false;
$email = $_SESSION["email"];
$diaryArray = [];

//Checking if user is not logged in, if not then redirecting to login page
if (!isset($_SESSION["userid"]) || $_SESSION["loggedin"] !== true) {
    header("location: moodDiary.php");
    exit;
}

//Fetching past diaries for particular user from database
if ($query = $db->prepare("SELECT diaryDate, diaryTime, email, title, content FROM diary WHERE email = ?")) {
    $query->bind_param('s', $email);
    $query->execute();
    $query->store_result();
    $query->bind_result($diaryDate, $diaryTime, $diaryEmail, $diaryTitle, $diaryContent);

    //Checking if past diaries exist
    if ($query->num_rows > 0) {
        $diariesFound = true;
        while ($query->fetch()) {
            // echo $diaryDate . " " . $diaryTime . " " . $diaryEmail . " " . $diaryTitle . " " . $diaryContent;
            $resultArray = [$diaryDate, $diaryTime, $diaryEmail, $diaryTitle, $diaryContent];
            // $diaryArray = array_merge($diaryArray, $resultArray); 
            array_push($diaryArray,$resultArray);  
        }
        echo "Array built";
        echo $diaryArray[0][0] . " " . $diaryArray[0][1] . " " . $diaryArray[0][2] . " " . $diaryArray[0][3] . " " . $diaryArray[0][4];
        echo "Result array";
        echo $resultArray[0] . " " . $resultArray[1] . " " . $resultArray[2] . " " . $resultArray[3] . " " . $resultArray[4];
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

    <?php if ($diariesFound == true) : ?>
        <p>Diaries found, but still working on showing them!</p>
    <? else : ?>
        <p>You do not have any previous diaries!</p>
    <?php endif; ?>

    <?php include 'footer.php'; ?>
</body>

</html>