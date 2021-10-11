<?php
require_once "config.php";
$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $sql = "SELECT id, name, password FROM users WHERE email = ?";
    if ($query = mysqli_prepare($db, $sql)) {
        mysqli_stmt_bind_param($query, 's', $email);
        if (mysqli_stmt_execute($query)) {
            mysqli_stmt_store_result($query);
            //checking if user exists
            if (mysqli_stmt_num_rows($query) == 1) {
                mysqli_stmt_bind_result($query, $id, $name, $hashed_password);
                if (mysqli_stmt_fetch($query)) {
                    //checking if password is correct
                    if (password_verify($password, $hashed_password)) {

                        //Starting Session
                        session_start();

                        //Setting session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["userid"] = $id;
                        $_SESSION["name"] = $name;
                        $_SESSION["email"] = $email;

                        //redirecting the user to the mood diary scren(moodDiary.php)
                        header("location: moodDiary.php");
                        exit;

                    } else {
                        $error .= '<p class="error">The password is invalid!</p>';
                    }
                }
            } else {
                $error .= '<p class="error">No user exists with that email address!</p>';
            }
        }
    }
    mysqli_stmt_close($query);
    //closing Database connection
    mysqli_close($db);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Login</h2>
                <p>Please fill in your email address and password.</p>
                <?php echo $error; ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <a href="diaryEntry.html">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </div>
                    <p>Don't have an account? <a href="register.php">Register Here</a>.</p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>