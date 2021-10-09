<?php

    $date = $_GET['date'];
    $time = $_GET['time'];
    $title = $_GET['title'];
    $user = $_GET['user'];
    echo $date;
    echo $time;
    echo $title;
    echo $user;
    function php_func($diaryDate,$diaryTime,$loggedInUser,$diaryTitle){
        echo $diaryDate . " " . $diaryTime . " " . $diaryTitle . " " . $loggedInUser;
    }
    php_func($date, $time, $user, $title);
?>