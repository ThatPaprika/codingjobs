<?php

/*

PDO - PHP Data Object

PDO is an abstraction layer to query the database.
It can handle 12 different types of DB.

PDO is using OOP.

Using PDO, we have to use a DSN to connect.
A DSN summarize the arguments to connect.

*/

// Connect to the DB
$dsn = 'mysql:host=localhost;dbname=movie_db';
$pdo = new PDO($dsn, 'root', '');

// Execute a query
$deleteQuery = 'DELETE FROM movies WHERE id=5';
$res = $pdo->exec($deleteQuery);
//var_dump($res);
// exec() only return the number of lines that are affected

// Retrieve some movies
$results = $pdo->query('SELECT * FROM movies');
// query() will retrieve a set of records that needs to be fetched

$movies = $results->fetchAll(PDO::FETCH_ASSOC);

var_dump($movies);


/* 
PREPARED STATEMENTS

Pros :
    - Safety !
    - Better performance
    - Usefull wehn inserting multiple records.
*/

// IMAGINE THERE IS A FORM : 
$mail = trim($_POST['mail']);

// use question mark instead of the variable
$query = "SELECT *
FROM users
WHERE email = ? 
AND password = ?";
// Using prepared, I dont need to take care of the 'inner' quotes
$prep = $pdo->prepare($query);
$prep->bindValue(1, $mail);
$prep->bindValue(2, '1234');
// Compile and execute
$prep->execute();


// Insert movies
$prep = $pdo->prepare('INSERT INTO movies(title) VALUES(?)');

$title = 'Jurassic park';
$prep->bindParam(1, $title);
$prep->execute();

// If the title changes, you don't have to bind again the variable.
$title = 'John Wick';
$prep->execute();

$title = 'Star Wars';
$prep->execute();

$title = 'Oui-Oui';
$prep->execute();

// Close the connection 
$pdo = null;
