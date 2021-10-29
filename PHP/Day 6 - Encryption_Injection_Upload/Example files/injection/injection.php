<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prevent Injection</title>
</head>

<body>

    <form action="" method="post">
        <input type="text" name="myInput">

        <input type="submit" name="submitBtn" value="Send">
    </form>

    <?php
    if (isset($_POST['submitBtn'])) {
        // display original :
        echo $_POST['myInput'] . '<br>';

        /*
            htmlspecialchars() function
            Convert the HTML tags to entities
            < convert to '&amp;'
            & convert to '&lt;'
        */

        echo htmlspecialchars($_POST['myInput']) . '<br>';

        // Strip_tags remove all special symbols (html tag and everything)
        echo strip_tags($_POST['myInput']);
    }
    ?>

</body>

</html>