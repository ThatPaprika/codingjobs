<?php

// WORKING WITH DATABASES

// 1. Connect to my DB
$conn = mysqli_connect('localhost', 'root', '', 'movie_db');

// Did I connect successfully ? 
if ($conn) {
    echo 'Connected ! ';
    // 2. Prepare the query
    $query = 'SELECT * FROM movies';

    // 3. Executing the query (send the query to the DB)
    $results = mysqli_query($conn, $query);

    /*
        I retrieved results BUT I need to fetch to use them
    */

    // 4. Fetch the results in a associative array
    $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);
} else {
    echo 'Pb with connection !';
}

// Close the connection (you can close anywhere in the file)
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php foreach ($movies as $movie) : ?>
        <p>
            <strong>Title :</strong>
            <!-- Same thing as echo -->
            <?= $movie['title']; ?>
        </p>


        <p>
            <strong>Date :</strong>
            <?php echo $movie['date_of_release']; ?>
        </p>
        <hr>
    <?php endforeach; ?>
</body>

</html>