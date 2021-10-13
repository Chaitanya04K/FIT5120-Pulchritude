<?php
    require_once "config.php";

    $date = $_POST['date'];
    $time = $_POST['time'];
    $title = $_POST['title'];
    $user = $_POST['user'];
    
    try {
        if ($query = $db->prepare("DELETE FROM diary WHERE email = ? AND diaryDate = ? AND diaryTime = ? AND title = ?")) {
            $query->bind_param('ssss', $user, $date, $time, $title);
            $query->execute();
            echo "Diary Successfully Deleted!";
        }
    } catch (PDOException $e) {
        echo "Something went wrong!";
    }
?>