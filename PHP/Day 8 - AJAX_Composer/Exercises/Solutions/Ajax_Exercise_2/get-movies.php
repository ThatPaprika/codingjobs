
<?php

// GET ALL MOVIES : 
$conn = mysqli_connect('localhost', 'root', '', 'movie_db');
$query = "SELECT * FROM movies";
$results = mysqli_query($conn, $query);
$movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

// DISPLAY ALL MOVIES :
foreach ($movies as $movie) {
    echo 'Title : ' . $movie['title'] . '<br>';
    echo 'Views : ' . $movie['views'] . '<br>';
    echo '<img src="' . $movie['poster'] . '" width="100px">';
    echo '<hr>';
}
