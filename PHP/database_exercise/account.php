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

    session_start();

    // Log out must be first (otherwise, you will still display user's information)
    if (isset($_POST['logoutBtn']))
        session_destroy();


    /*
        Check if the user logged in before
        For this, check if(session['email']) exists
    */
    if (isset($_SESSION['email'])) {
        // Ask for user's information
        $conn = mysqli_connect('localhost', 'root', '', 'movie_db');
        $query = "SELECT * FROM users WHERE email = '" . $_SESSION['email'] . "'";

        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);

        echo 'Hello user, email : ' . $user['email'];

        echo "<img width='100px' src='" . $user['poster'] . "'>";
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