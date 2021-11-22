<?php

// Initialize empty movies array
$movies = array();

// 1. Connect to my DB
$pdo = new PDO('mysql:host=localhost;dbname=movie_db', 'root', '');

// Did I connect successfully ? 
if ($pdo) {

    // 2. Prepare the query
    $query = 'SELECT * FROM movies m INNER JOIN directors d ON d.id = m.director_id';

    // 3. Executing the query (send the query to the DB)
    $results = $pdo->query($query);

    // 4. Fetch the results in a associative array
    $movies = $results->fetchAll(PDO::FETCH_ASSOC);
} else {
    echo 'Pb with connection !';
}

// Close the connection (you can close anywhere in the file)
$pdo = null;

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
            <strong>Date :</strong>
            <?php echo $movie['date_of_release']; ?>
        </p>

        <p>
            <strong>Director's name :</strong>
            <?php echo $movie['first_name'] . ' ' . $movie['last_name']; ?>
        </p>

        <!-- Link to 'Movie detail' page, URL needs the id of the movie -->
        <a href="movie.php?id=<?= $movie['id']; ?>">Detail page</a>
    <?php endforeach; ?>
</body>

</html>