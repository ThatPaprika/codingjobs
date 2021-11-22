<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers Page</title>
</head>

<body>
    <h2>Flowers list</h2>

    <?php
    require_once 'FlowerManager.php';
    $flowerManager = new FlowerManager();
    $flowers = $flowerManager->findAll();

    foreach ($flowers as $flower) {
        echo 'Name : ' . $flower->get_name() . '<br>';
        echo 'Price : ' . $flower->get_price() . '<hr>';
    }
    ?>


</body>

</html>