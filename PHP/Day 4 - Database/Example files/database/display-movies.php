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
    /*echo '<pre>';
    var_dump($movies);
    echo '</pre>';*/

    // Loop through all movies and display title/date
    foreach ($movies as $movie) {
        echo 'Title : ' . $movie['title'] . '<br>';
        echo 'Release date : ' . $movie['date_of_release'] . '<br>';
        echo '<hr>';
    }
} else {
    echo 'Pb with connection !';
}

// Close the connection (you can close anywhere in the file)
mysqli_close($conn);
