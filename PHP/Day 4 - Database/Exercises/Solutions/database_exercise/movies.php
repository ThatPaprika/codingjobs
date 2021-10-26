<?php

// Initialize empty movies array
$movies = array();

// 1. Connect to my DB
$conn = mysqli_connect('localhost', 'root', '', 'movie_db');

// Did I connect successfully ? 
if ($conn) {

    // 2. Prepare the query
    $query = 'SELECT * FROM movies';

    // 3. Executing the query (send the query to the DB)
    $results = mysqli_query($conn, $query);

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
    <title>Movies page</title>
</head>

<body>
    <?php include_once 'nav.html'; ?>

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

        <a href="movie.php?id=<?= $movie['id'] ?>">Detail page</a>

    <?php endforeach; ?>
</body>

</html>