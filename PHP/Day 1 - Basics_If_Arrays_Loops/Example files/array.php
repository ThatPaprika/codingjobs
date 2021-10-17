<?php

// NUMERICAL ARRAYS

// Initialize an empty array
$myArray = array();
$myArray = [];

// echo works only for strings 
var_dump($myArray);

$movies = array(
    'NightCrawler',
    'Star wars',
    'Snatch'
);

$movies = ['NightCrawler', 'Star wars', 'Snatch'];

echo '<pre>';
var_dump($movies);
echo '</pre>';

// Access an element of the array
echo 'Movie at position 1 is : ' . $movies[1];

// Upate the value
$movies[1] = 'Titanic';

// Create new element
$movies[3] = 'Fight Club';

// At the end of the array
$movies[] = 'Last movie';

echo '<pre>';
var_dump($movies);
echo '</pre>';

// Remove an element
unset($movies[0]);

// Count number of element
$numElements = count($movies);

// Sorting an array
sort($movies);

// ASSOCIATIVE ARRAYS
$contact = array(
    'firstname' => 'Simon',
    'age' => 30,
    'mail' => 'simon@gmail.com'
);

echo '<pre>';
var_dump($contact);
echo '</pre>';

// Dispay the firstname
echo $contact['firstname'];

// Update the age
$contact['age'] = 15;

// Add a new element
$contact['phone'] = '+332558787';

// MULTI-DIMENSIONAL ARRAYS
$movies = [
    0 => [
        'title' => 'NightCrawler',
        'director' => 'Dan Gilroy',
        'release_date' => 2014
    ],
    1 => [
        'title' => 'Star Wars',
        'director' => 'George Lucas',
        'release_date' => 1985
    ],
    2 => [
        'title' => 'Snatch',
        'director' => 'Guy Ritchie',
        'release_date' => 1998
    ]
];

var_dump($movies);

echo $movies[0]['title'];

?>