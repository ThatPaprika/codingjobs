<?php


/*
-- Exercise 1 : 
	Write a function 'isOrder' that :
		- Take one array of integer as argument
		- Checks if the elements of the arrays are ordered in ascending order.

*/

// Use function
$array = [5, 6, 9, 3, 10];
isOrder($array);


// Declare function 
function isOrder($array)
{

	for ($i = 0; $i < count($array); $i++) {
		// Check if ordered or not
		if ($array[$i] > $array[$i + 1])
			return false;
	}

	return true;
}

/*
-- Exercise 2 :

	Write a function 'orderArray' that :
		- Take one array of integer as argument
		- Return an array which was ordered

-- Exercise 3 :

	Write a function that : 
		- Take one float $x as argument
		- Get the integer part of a positive number ($x)
		- Return this integer part

	Example :
		integerPart(5.26) // return 5
		integerPart(10.76) // return 10

*/