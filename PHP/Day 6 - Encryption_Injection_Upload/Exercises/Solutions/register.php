<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
</head>

<body>
    <h2>Register page</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="password" name="cpassword" placeholder="Confirm Password"><br>
        <input type="submit" name="registerBtn" value="Register">
    </form>

    <?php

    // Register only when form is submitted
    if (isset($_POST['registerBtn'])) {
        // by default, no errors
        $errors = array();

        // username, mail and password must not be empty !
        if (empty($_POST['username']))
            $errors['username'] = 'Username is mandatory<br>';

        if (empty($_POST['email']))
            $errors['email'] = 'Email is mandatory<br>';
        else {
            $sanitizedMail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            // mail must be a valid one
            if (!filter_var($sanitizedMail, FILTER_VALIDATE_EMAIL))
                $errors['email'] = 'Email is not valid<br>';
        }

        if (empty($_POST['password']) || empty($_POST['cpassword']))
            $errors['password'] = 'Password is mandatory<br>';
        else if ($_POST['password'] != $_POST['cpassword'])
            $errors['password'] = 'Passwords doesnt match<br>';


        // Insert only if no errors
        if (empty($errors)) {
            // First, handle the upload file

            // password must be hashed
            $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

            // Create variables for the query (easier to use)
            $userName = strip_tags(trim($_POST['username']));

            // 1. Connect to my DB
            $conn = mysqli_connect('localhost', 'root', '', 'movie_db');
            $query = "INSERT INTO users(username, email, password)
            VALUES('$userName', '$sanitizedMail', '$hashedPassword')";

            // 2. Execute the query
            $result = mysqli_query($conn, $query);

            // INSERT/UPDATE/DELETE returns true OR false
            if ($result)
                echo 'Successfully inserted in the DB';
            else
                echo 'Problem inserting in the DB';
        } else {
            foreach ($errors as $errorMsg) {
                echo $errorMsg . '<br>';
            }
        }
    }
    ?>
</body>

</html>