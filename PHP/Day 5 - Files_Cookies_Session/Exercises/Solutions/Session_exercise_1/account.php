<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account page</title>
</head>

<body>
    <h2>Account page</h2>
    <?php

    // Log out must be first (otherwise, you will still display user's information)
    if (isset($_POST['logoutBtn']))
        session_destroy();

    session_start();

    /*
        Check if the user logged in before
        For this, check if(session['email']) exists
    */
    if (isset($_SESSION['email'])) {
        echo 'Hello user, email : ' . $_SESSION['email'];
    } else {
        // redirect 
        header('Location: login.php');
    }

    ?>

    <form action="" method="POST">
        <input type="submit" name="logoutBtn" value="Log out">
    </form>
</body>

</html>