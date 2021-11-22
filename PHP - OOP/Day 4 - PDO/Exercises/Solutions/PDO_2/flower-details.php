<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Detail Page</title>
</head>

<body>
    <?php
    require_once 'FlowerManager.php';
    $flowerManager = new FlowerManager();
    $flowers = $flowerManager->find($_GET['id']);
    echo 'Name : ' . $flower->get_name() . '<br>';
    echo 'Price : ' . $flower->get_price() . '<hr>';
    ?>


</body>

</html>