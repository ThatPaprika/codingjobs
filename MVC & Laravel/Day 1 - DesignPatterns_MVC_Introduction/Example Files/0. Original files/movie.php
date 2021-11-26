<?php

// Connect to db
$conn = mysqli_connect('localhost', 'root', '', 'movie_db');

// Retrieve all informations about the movies
$id = $_GET['id'];
$query = "SELECT * FROM movies WHERE id = $id";
$results = mysqli_query($conn, $query);
$movie = mysqli_fetch_assoc($results);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie detail page</title>
</head>

<body>
    <h2>Movie details</h2>

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

</body>

</html>