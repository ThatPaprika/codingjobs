<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Login Page</h2>

    <?php
    var_dump($_POST);
    // Make sure I clicked on my button
    if (isset($_POST['submitBtn'])) {
        echo 'You clicked on the form<br>';

        // Clean/Sanitize the email
        $sanitizeEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        // Make sure it's a valid email adress (with @ and  .)
        if (filter_var($sanitizeEmail, FILTER_VALIDATE_EMAIL)) {
            echo 'Youhou, mail valid';
        } else {
            echo 'Email is not valid';
        }
    }
    ?>
</body>

</html>