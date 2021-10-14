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
            $diariesFound = true;
            while ($query->fetch()) {
                $resultArray = [$diaryDate, $diaryTime, $diaryTitle, $diaryContent];
                array_push($diaryArray, $resultArray);
            }
        } else {
            $diariesFound = true;
            $noDiariesFound = true;
        }
    }
} else {
    if ($query = $db->prepare("SELECT diaryDate, diaryTime, title, content FROM diary WHERE email = ?")) {
        $query->bind_param('s', $email);
        $query->execute();
        $query->store_result();

        //Checking if past diaries exist
        if ($query->num_rows > 0) {
            $diariesFound = true;
            $query->bind_result($diaryDate, $diaryTime, $diaryTitle, $diaryContent);
            while ($query->fetch()) {
                $resultArray = [$diaryDate, $diaryTime, $diaryTitle, $diaryContent];
                array_push($diaryArray, $resultArray);
            }
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
    <title>Brainguard</title>

    <!-- icon -->
    <link rel="icon" href="/images/icon_logo.png">

    <!-- style CSS -->
    <link rel="stylesheet" href="style.css?newcache08">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="moodDiary.php">Mood Diary</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Diaries</li>
        </ol>
    </nav>

    <div class="container">
        <div class="datePicker">
            <div class="datePickerInner">
                <p>Please select a date</p>
                <form action="" method="post" class="datePickerForm">
                    <input type="date" name="diaryDateSelected" class="input-diary" id="diaryDatePicker">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
            <div class="datePickerInner">
                <p>Search</p>
                <div>
                    <input id="diary-searchbar" onkeyup="searchDiary()" type="text" name="search-diary" placeholder="Search">
                </div>
            </div>
        </div>
        <div id="deleteResult"></div>
    </div>



    <?php if ($diariesFound == true) : ?>

        <?php if ($noDiariesFound == true) : ?>
            <div class="container error-box">
                <p>No diaries found on this date, please select another date!</p>
            </div>
        <? else : ?>

            <div class="container moodDiary">
                <?php foreach ($diaryArray as $key => $value) : ?>
                    <div class="diaryContainer">
                        <div class="diaryCard" data-toggle="collapse" data-target="#<?= $key; ?>" aria-expanded="false" aria-controls="collapseExample">
                            <div class="diaryCardPartition diaryTitleSection">
                                <img src="images/title.png" alt="Alphabet T">
                                <span class="title <?= $key; ?>"><?= $value[2]; ?></span>
                            </div>
                            <div class="diaryCardPartition">
                                <img src="images/clock.png" alt="clock">
                                <span class="time <?= $key; ?>"><?= $value[0]; ?></span>
                                <span class="date-time <?= $key; ?>"><?= $value[1]; ?></span>
                            </div>
                            <button class="deleteBtn" onclick="deleteDiary(<?= $key; ?>)">Delete</button>
                        </div>
                        <div class="collapse" id="<?= $key; ?>">
                            <div class="card card-body">
                                <?= $value[3]; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    <? else : ?>
        <p>You do not have any previous diaries!</p>
    <?php endif; ?>

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>
        function deleteDiary(diaryID) {
            var loggedInUser = "<?php echo $_SESSION["email"]; ?>";
            var title = document.getElementsByClassName("title " + diaryID);
            title = title[0].innerHTML;
            var date = "<?php echo $selectedDate; ?>";
            var time = document.getElementsByClassName("time " + diaryID);
            time = time[0].innerHTML;
            $.ajax({
                type: "POST",
                url: "deleteDiary.php",
                data: {
                    "user": loggedInUser,
                    "date": date,
                    "time": time,
                    "title": title
                },
                success: function(response) {
                    setResult(response);
                    console.log("ajax successful");
                },
                error: function(response) {
                    setResult(response);
                    console.log("ajax failed");
                }
            })
        }

        function searchDiary() {
            let input = document.getElementById('diary-searchbar').value
            input = input.toLowerCase();
            let x = document.getElementsByClassName('title');


            for (i = 0; i < x.length; i++) {
                if (!x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].parentNode.parentNode.classList.add("removeCard");
                    x[i].parentNode.parentNode.classList.remove("showCard");
                } else {
                    x[i].parentNode.parentNode.classList.remove("removeCard");
                    x[i].parentNode.parentNode.classList.add("showCard");
                }
            }
        }

        function setResult(resp) {
            document.getElementById("deleteResult").innerHTML(resp);
            console.log("inside set result func");
        }
    </script>
</body>


</html>