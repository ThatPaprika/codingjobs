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

        // Save the email into session if everything is ok
        if (count($errors) == 0) {

            $_SESSION['email'] = $_POST['email'];
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