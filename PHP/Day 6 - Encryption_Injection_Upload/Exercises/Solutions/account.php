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
        // Ask for user's information
        $conn = mysqli_connect('localhost', 'root', '', 'movie_db');
        $query = "INSERT INTO users(username, email, password, poster)
            VALUES('$userName', '$sanitizedMail', '$hashedPassword', '$destinationPath')";

        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);

        echo 'Hello user, email : ' . $user['email'];

        echo "<img src='" . $user['poster'] . "'>";
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