<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drivers</title>
</head>

<body>
    <h2>Drivers list</h2>

    <?php

    /* 
    Get all the drivers with their vehicles.
    You can do this in so different ways, but I will use this trick : 
        - First, retrieve all drivers.
        - Then, use a query to retrieve every cars and trucks for each driver.
    */

    spl_autoload_register();

    // Connect to DB
    $dsn = 'mysql:host=localhost;dbname=vehicle_db';
    $pdo = new PDO($dsn, 'root', '');

    //1. Get all drivers
    $results = $pdo->query('SELECT * FROM driver');
    $drivers = $results->fetchAll(PDO::FETCH_CLASS, 'Driver');

    //2. For each driver
    foreach ($drivers as $driver) {

        // 2.1. First, let's retrieve the cars 
        $cars = $driver->find_cars();

        // 2.2. Now, time to retrieve the trucks
        $trucks = $driver->find_trucks();

        // 2.3. Display driver's information :
        echo '<strong>Driver :</strong>' . $driver->get_firstname() . ' ' . $driver->get_lastname() . '<br>';

        // Display cars information
        echo '<strong>Vehicles : </strong><br>';
        foreach ($cars as $car) {
            echo '<div style="margin-left:20px; margin-bottom: 5px;">';
            echo '<u>Manufacturor :</u> ' . $car->get_manufacturor() . '<br>';
            echo '<u>Type :</u> ' . $car->get_type() . '<br>';
            echo '<u>Horse power :</u> ' . $car->get_horsepower() . '<br>';
            echo '</div>';
        }

        // Display trucks information
        foreach ($trucks as $truck) {
            echo '<div style="margin-left:20px">';
            echo '<u>Manufacturor :</u> ' . $truck->get_manufacturor() . '<br>';
            echo '<u>Type :</u> ' . $truck->get_type() . '<br>';
            echo '<u>Horse power :</u> ' . $truck->get_horsepower() . '<br>';
            echo '<u>Payload :</u> ' . $truck->get_payload() . '<br>';
            echo '</div>';
        }

        echo '<hr>';
    }
    ?>
</body>

</html>