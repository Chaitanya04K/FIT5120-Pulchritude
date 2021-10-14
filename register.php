<?php
require_once "config.php";
// require_once "session.php";

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    //Creating variables to store the form data
    $fullname = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    if ($query = $db->prepare("SELECT * FROM users WHERE email = ?")) {
        
        $query->bind_param('s', $email);
        $query->execute();
        $query->store_result();

        //Checking if email already is registered 
        if ($query->num_rows > 0) {
            $error .= '<p class="error">The email address already exists! Please try a different email address.</p>';
        } else {
            //Validating password
            if (strlen($password) < 8) {
                $error .= '<p class="error">Password must have atleast 8 characters!</p>';
            }

            //Validating confirm password
            if (empty($confirm_password)) {
                $error .= '<p class="error">Please enter confirm password!</p>';
            } else {
                if (empty($error) && ($password != $confirm_password)) {
                    $error .= '<p class="error">Passwords do not match!</p>';
                }
            }
        }
        //Inserting values in DB if no errors
        if (empty($error)) {
            $insertQuery = $db->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?);");
            $insertQuery->bind_param("sss", $fullname, $email, $password_hash);
            $result = $insertQuery->execute();
            if ($result) {
                $error .= '<p class="error">Successfully registered!</p>';
            } else {
                $error .= '<p class="error">Something went wrong! Please try again!</p>';
            }
            $query->close();
            $insertQuery->close();
        }    
        //Closing the DB connection
        mysqli_close($db);
    }
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
                <h2>Register</h2>
                <p>Please fill this form to create an account.</p>
                <?php echo $error; ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm password</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </div>
                    <p>Already have an account? <a href="login.php">Login Here</a>.</p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
