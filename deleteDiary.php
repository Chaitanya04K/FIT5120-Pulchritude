<?php

    $date = $_POST['date'];
    $time = $_POST['time'];
    $title = $_POST['title'];
    $user = $_POST['user'];
    echo $date;
    echo $time;
    echo $title;
    echo $user;
    function php_func($diaryDate,$diaryTime,$loggedInUser,$diaryTitle){
        echo $diaryDate . " " . $diaryTime . " " . $diaryTitle . " " . $loggedInUser;
    }
    php_func($date, $time, $user, $title);
?>