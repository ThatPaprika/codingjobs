<?php
// start the session before any HTML tag:
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <?php require_once 'nav.html' ?>

    <form action="" method="post">
        <input type="email" name="email" placeholder="Email address"><br>
        <input type="password" name="password" placeholder="Enter password"><br>

        <input type="submit" name="submitBtn" value="Log-in">
    </form>

    <?php
    if (isset($_POST['submitBtn'])) {

        // Check if email OR password not empty
        $errors = array();

        // Check if email is empty
        if (empty($_POST['email']))
            $errors['email'] = 'Email is mandatory';

        if (empty($_POST['password']))
            $errors['password'] = 'Password is mandatory';

        // Check if users exists only if form OK
        if (count($errors) == 0) {

            $conn = mysqli_connect('localhost', 'root', '', 'movie_db');

            // Easier for query
            $mail = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

            $query = "SELECT *
            FROM users
            WHERE email = '$mail'";

            $results = mysqli_query($conn, $query);

            // Check if user exists in DB
            if (mysqli_num_rows($results) == 0)
                echo 'No user registered with this email address.';
            else {
                // Retrieve data about user
                $user = mysqli_fetch_assoc($results);

                if (password_verify($_POST['password'], $user['password'])) {
                    // Remember log in : Save email in SESSION 
                    echo 'Successfully log-in !';
                    $_SESSION['email'] = $_POST['email'];
                } else
                    echo 'Wrong password. Try again.';
            }
        } else {
            // Display errors
            foreach ($errors as $errorMsg) {
                echo '<span style="color:red">' . $errorMsg . '<span><br>';
            }
        }
    }
    ?>
</body>

</html>