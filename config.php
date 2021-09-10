<?php

define('DBSERVER','us-cdbr-east-04.cleardb.com'); //Database hose
define('DBUSERNAME','b411716664c46e'); //Database username
define('DBPASSWORD','ecece67a'); //Database password
define('DBNAME','heroku_fe62d8f57e7affd'); //Database name

//Connecting to database
$db = mysqli_connect(DBSERVER,DBUSERNAME,DBPASSWORD,DBNAME);

//Checking connection
if($db === false) {
    die("Error: Connection to DB failed" . mysqli_connect_error());
}

?>