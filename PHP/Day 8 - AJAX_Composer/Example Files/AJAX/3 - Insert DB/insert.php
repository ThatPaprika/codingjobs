<?php

// Validations
if (empty($_POST['username']) || empty($_POST['mail']))
    echo 'Username and mail are mandatory';
else {
    $username = trim($_POST['username']);
    $mail = trim($_POST['mail']);
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'movie_db');

    $query = "INSERT INTO users(username, email, password) VALUES('$username', '$mail', '$password')";
    $result = mysqli_query($conn, $query);
    var_dump($query);
    if ($result)
        echo 'User successfully registered';
    else
        echo 'Something went wrong.';
}
