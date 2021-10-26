<?php

// 1. Connect to my DB
$conn = mysqli_connect('localhost', 'root', '', 'movie_db');

// Did I connect successfully ? 
if ($conn) {
    // 2. Prepare the query
    // Don't forget the quotes for strings inside the query
    $query = 'INSERT INTO movies(title, date_of_release, poster, director_id)
    VALUES("NightCrawler", "10-10-1990", "night.jpg", 1)';

    // 3. Executing the query (send the query to the DB)
    $result = mysqli_query($conn, $query);

    // INSERT/UPDATE/DELETE returns true OR false
    if ($result)
        echo 'Successfully inserted in the DB';
    else
        echo 'Problem inserting in the DB';
} else {
    echo 'Pb connecting';
}
