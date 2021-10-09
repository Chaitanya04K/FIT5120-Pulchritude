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
if ($query = $db->prepare("SELECT diaryDate, diaryTime, title, content FROM diary WHERE email = ? AND diaryDate = ?")) {
    $query->bind_param('ss', $email, $selectedDate);
    $query->execute();
    $query->store_result();
    $query->bind_result($diaryDate, $diaryTime, $diaryTitle, $diaryContent);

    //Checking if past diaries exist
    if ($query->num_rows > 0) {
        $diariesFound = true;
        while ($query->fetch()) {
            $resultArray = [$diaryDate, $diaryTime, $diaryTitle, $diaryContent];
            array_push($diaryArray, $resultArray);
        }
    }
}

// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

//     $selectedDate = $_POST['diaryDateSelected'];

//     //Fetching past diaries for particular user from database
//     if ($query = $db->prepare("SELECT diaryDate, diaryTime, title, content FROM diary WHERE email = ? AND diaryDate = ?")) {
//         $query->bind_param('ss', $email, $selectedDate);
//         $query->execute();
//         $query->store_result();
//         $query->bind_result($diaryDate, $diaryTime, $diaryTitle, $diaryContent);

//         //Checking if past diaries exist
//         if ($query->num_rows > 0) {
//             $diariesFound = true;
//             while ($query->fetch()) {
//                 $resultArray = [$diaryDate, $diaryTime, $diaryTitle, $diaryContent];
//                 array_push($diaryArray, $resultArray);
//             }
//         }
//     }
// }


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

        <form action="" method="post">
            <div class="datePicker">
                <p>Please select a Date</p>
                <input type="date" name="diaryDateSelected" class="input-diary" id="diaryDatePicker">
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>

        <?php foreach ($diaryArray as $key => $value) : ?>
            <div class="container diaryContainer">
                <div class="btn btn-primary diaryCard" data-toggle="collapse" data-target="#<?= $key; ?>" aria-expanded="false" aria-controls="collapseExample">
                    <div class="diaryCardPartition">
                        <img src="images/title.png" alt="Alphabet T">
                        <?= $value[2]; ?>
                    </div>
                    <div class="diaryCardPartition">
                        <img src="images/clock.png" alt="clock">
                        <?= $value[1]; ?>
                    </div>
                    <div class="diaryCardPartition">
                        <img src="images/feelings.png" alt="sad and happy faces">
                        Happy
                    </div>
                </div>
                <div class="collapse" id="<?= $key; ?>">
                    <div class="card card-body">
                        <?= $value[3]; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    <? else : ?>
        <p>You do not have any previous diaries!</p>
    <?php endif; ?>

    <?php include 'footer.php'; ?>
</body>

</html>