<?php

function get_connection()
{
    return mysqli_connect('localhost', 'root', '', 'movie_db');
}

function all_movies()
{
    $conn = get_connection();

    // 2. Prepare the query
    $query = 'SELECT * FROM movies';

    // 3. Executing the query (send the query to the DB)
    $results = mysqli_query($conn, $query);

    // 4. Fetch the results in a associative array
    $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

    return $movies;
}

function get_movie($id)
{
    $conn = get_connection();

    // 2. Prepare the query
    $query = 'SELECT * FROM movies WHERE id = ' . $id;

    // 3. Executing the query (send the query to the DB)
    $results = mysqli_query($conn, $query);

    // 4. Fetch the results in a associative array
    $movie = mysqli_fetch_assoc($results);

    return $movie;
}
