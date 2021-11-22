<?php

// GET the id of the movie (coming from the URL)
$id = $_GET['id'];

// 1. Connect to my DB
$pdo = new PDO('mysql:host=localhost;dbname=movie_db', 'root', '');

// 2. Prepare the query
$query = 'SELECT * 
FROM movies m
INNER JOIN directors d ON d.id = m.director_id
WHERE m.id = ?';
// To see how your query looks like : echo $query;

// 3. Executing the query (send the query to the DB)
$prep = $pdo->prepare($query);
$prep->bindValue(1, $id);
$prep->execute();

// 4. Fetch only one result
$movie = $prep->fetch(PDO::FETCH_ASSOC);

// $movie = $prep->fetchAll(PDO::FETCH_ASSOC);
echo '<img src="' . $movie['poster'] . '" width="100px">';
echo 'Title : ' . $movie['title'] . '<br>';
echo 'Release date : ' . $movie['date_of_release'] . '<br>';
echo 'Director : ' . $movie['first_name'] . '<br>';

// Close connection 
$pdo = null;
