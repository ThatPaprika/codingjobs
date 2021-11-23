<?php

// Serialize
// Step 1 : Create an object
/*$myObj = new stdClass();
$myObj->title = "Jurassic Park";
$myObj->release_year = "2018";
var_dump($myObj);

// Step 2 : Serialize my object
$myJson = json_encode($myObj, JSON_PRETTY_PRINT);
var_dump($myJson);
*/

require_once 'Movie.php';
$jurassic = new Movie("Jurassic park", "2018");
$json = json_encode($jurassic, JSON_PRETTY_PRINT);
var_dump($js