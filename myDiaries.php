<?php

require_once "config.php";

//Starting the session
session_start();

//Initializing global variables
$diariesFound = false;
$noDiariesFound = false;
$email = $_SESSION["email"];
$diaryArray = [];

//Checking if user is not logged in, if not then redirecting to login page
if (!isset($_SESSION["userid"]) || $_SESSION["loggedin"] !== true) {
    header("location: moodDiary.php");
    exit;
}

if ($query = $db->prepare("SELECT diaryDate, diaryTime, title, content FROM diary WHERE email = ?")) {
    $query->bind_param('s', $email);
    $query->execute();
    $query->store_result();

    //Checking if past diaries exist
    if ($query->num_rows > 0) {
        $diariesFound = true;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $selectedDate = $_POST['diaryDateSelected'];

    //Fetching past diaries for particular user from database
    if ($query = $db->prepare("SELECT diaryDate, diaryTime, title, content FROM diary WHERE email = ? AND diaryDate = ?")) {
        $query->bind_param('ss', $email, $selectedDate);
        $query->execute();
        $query->store_result();
        $query->bind_result($diaryDate, $diaryTime, $diaryTitle, $diaryContent);

        //Checking if past diaries exist
        if ($query->num_rows > 0) {
            while ($query->fetch()) {
                $resultArray = [$diaryDate, $diaryTime, $diaryTitle, $diaryContent];
                array_push($diaryArray, $resultArray);
            }
        } else {
            $noDiariesFound = true;
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

    <form action="" method="post">
        <div class="datePicker">
            <p>Please select a Date</p>
            <input type="date" name="diaryDateSelected" class="input-diary" id="diaryDatePicker">
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </div>
    </form>

    <div class="phpResult"></div>

    <?php if ($diariesFound == true) : ?>

        <?php if ($noDiariesFound == true) : ?>
            <p>No diaries found on this date, please select another date!</p>
        <? else : ?>

            <?php foreach ($diaryArray as $key => $value) : ?>
                <div class="container diaryContainer">
                    <div class="btn btn-primary diaryCard" data-toggle="collapse" data-target="#<?= $key; ?>" aria-expanded="false" aria-controls="collapseExample">
                        <div class="diaryCardPartition">
                            <img src="images/title.png" alt="Alphabet T">
                            <span class="title <?= $key; ?>"><?= $value[2]; ?></span>
                        </div>
                        <div class="diaryCardPartition">
                            <img src="images/clock.png" alt="clock">
                            <span class="time <?= $key; ?>"><?= $value[1]; ?></span>
                        </div>
                        <div class="diaryCardPartition">
                            <img src="images/feelings.png" alt="sad and happy faces">
                            Happy
                        </div>
                        <button onclick="deleteDiary(<?= $key; ?>)">Delete</button>
                    </div>
                    <div class="collapse" id="<?= $key; ?>">
                        <div class="card card-body">
                            <?= $value[3]; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    <? else : ?>
        <p>You do not have any previous diaries!</p>
    <?php endif; ?>

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>
        function deleteDiary(diaryID) {
            var loggedInUser = "<?php echo $_SESSION["email"]; ?>";
            var date = document.getElementsByClassName("title " + diaryID).innerHTML;


            console.log(loggedInUser);
            console.log(diaryID);
            console.log("title "+diaryID);
            console.log(date);
            $.ajax({
                url: "deleteDiary.php"
            })
        }
    </script>
</body>


</html>