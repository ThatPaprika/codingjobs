<?php

// Connect to db
$conn = mysqli_connect('localhost', 'root', '', 'movie_db');

// Retrieve all informations about the movies
$query = "SELECT * FROM movies";
$results = mysqli_query($conn, $query);
$movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies page</title>
</head>

<body>
    <h2>Movies list</h2>

    <?php foreach ($movies as $movie) : ?>
        <hr>

        <img src="<?= $movie['poster']; ?>" alt="" width="100px">

        <p>
            <strong>Title :</strong>
            <!-- Same thing as echo -->
            <?= $movie['title']; ?>
        </p>


        <p>
            <strong>Views :</strong>
            <?php echo $movie['views']; ?>
        </p>


    <?php endforeach; ?>

</body>

</html>