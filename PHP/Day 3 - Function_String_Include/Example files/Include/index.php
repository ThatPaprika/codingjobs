<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Include a file -> warning if errors
    include_once 'nav.html';
    ?>

    <h2>Include page</h2>

    <?php

    require_once 'variables.php';

    echo $var1;

    ?>


    <?php
    // Require a file -> STOP the script if errors
    require_once 'footer.html';
    ?>
</body>

</html>