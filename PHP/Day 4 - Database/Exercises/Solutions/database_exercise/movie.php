<?php

// GET the id of the movie (coming from the URL)
$id = $_GET['id'];

// 1. Connect to my DB
$conn = mysqli_connect('localhost', 'root', '', 'movie_db');

// 2. Prepare the query
$query = 'SELECT m.*, d.name 
FROM movies m
INNER JOIN directors d ON d.id = m.director_id
WHERE m.id = ' . $id;

// 3. Executing the query (send the query to the DB)
$results = mysqli_query($conn, $query);

// 4. Fetch only one result
$movie = mysqli_fetch_assoc($results);

echo '<img src="' . $movie['poster'] . '" width="100px">';
echo 'Title : ' . $movie['title'] . '<br>';
echo 'Views : ' . $movie['views'] . '<br>';
echo 'Director : ' . $movie['name'] . '<br>';
