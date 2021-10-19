<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with PHP</title>
</head>

<body>

    <?php

    /*
        method attribute of a form define HOW you send the request to the server. Two ways : GET and POST methods.

        When the server receives request/data from a form, he save those data into a superglobale variable.

        Those variables are available on any PHP script : 
            $_GET
            $_POST

        GET method : 
        It will request the server and send data directly using URL
        form.php?firstName=simon&lastName=bertrand

        POST method : 
        Will send data without editing the URL.
        Use post when information are sensitive.


        ----

        action attribute : choose WHERE (which page) to send the data to

    */

    var_dump($_GET);
    $firstName = '';
    // Make sure I clicked the button
    if (!empty($_GET)) {
        $firstName = $_GET['firstName'];
        echo 'Hello ' . $_GET['firstName'] . ' ' . $_GET['lastName'];
    }

    /* Another way to check if I have a firstname : */
    if (isset($_GET['firstName'])) {
    }

    ?>

    <form action="" method="GET">
        <!-- Remembered/Old data goes inside 'value' -->
        <input type="text" name="firstName" placeholder="Give your first name" value="<?php echo $firstName; ?>">
        <input type="text" name="lastName" placeholder="Give your last name">
        <input type="submit" value="Send">
    </form>

</body>

</html>