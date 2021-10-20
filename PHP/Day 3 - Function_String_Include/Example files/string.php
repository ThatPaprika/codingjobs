<?php

// STRING FUNCTIONS
$string = 'Here, take a beer.';

// Make the whole string lowercase
echo strtolower($string) . '<br>';

// Make the whole string uppercase
echo strtoupper($string) . '<br>';

// First letter uppercase
echo ucfirst($string) . '<br>';

// Find the position of a substring in a string
echo strpos($string, ',') . '<br>';
echo strpos($string, 'beer') . '<br>';
// Function returns the position if it finds the substring

// Retrieve only one part of the string
echo substr($string, 5) . '<br>';
echo substr($string, 5, 4) . '<br>';

// Replace all occurences of a sub-string in a string
echo str_replace('beer', 'coca-cola', $string);

// Get the length of a string
echo strlen($string) . '<br>';

// Convert a string into an array:
$string = 'Hello I Hope You Are Ok';
$myArray = explode(' ', $string);
var_dump($myArray);

// Convert an array into a string :
echo implode('*', $myArray);
//echo implode(' ', $myArray);
