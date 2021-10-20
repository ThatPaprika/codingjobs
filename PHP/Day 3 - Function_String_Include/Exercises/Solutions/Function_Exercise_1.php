<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
- Exercise 1

Write a function that:
    - Takes into parameter two numbers.
    - Check which is the largest number.

The expected result is this:
    The first number is higher (if the first number is higher than the second number)
    The first number is smaller (if the first number is smaller than the second number)
    The two numbers are identical (if the two numbers are equal)

*/

function checkNumber($num1, $num2)
{
	if ($num1 > $num2)
		echo 'The first number is higher';
	else if ($num1 < $num2)
		echo 'The second number is higher';
	else
		echo 'Both numbers are identical';
}


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*
-- Exercise 2

	3.1
	Write a PHP script that:
	    - Create an array of John's expenses (do it manually)
	    - Calculates the sum of John's expenses over the year

	3.2
	Write a function that will:
	- Take an expense array as input
	- Calculate the sum of the expenses of the array
	- return this sum

*/

// Declare the function : 
function sum_expenses($myArray)
{
	$total = 0;

	foreach ($myArray as $value) {
		$total = $total + $value;
	}

	echo 'Total is : ' . $total;
}


// Call the function : 
$array = array("Salad" => "1.03", "Tomato" => "2.3", "Oignon" => "1.85", "Red cabbage" => "0.85");
sum_expenses($array);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
-- Exercice 3

Write a PHP script that checks if a string is a palindrome.
A palindrome is a chain of letters whose order of letters remains the same whether read from left to right or from right to left.

Example : 
"kayak"
"xanax"
"poop"

*/

function isPalindrome($word)
{
	$length = strlen($word);

	for ($i = 0; $i < $length / 2; $i++) {
		if ($word[$i] != $word[$length - 1 - $i])
			return 'Its not a palindrome !';
	}

	return 'Its a palindrome ! ';
}

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';

/*
-- Exercice 4

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.

*/


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';

/*

-- Exercice 5
Write a htmlImages($src) function that:
    - takes a string as argument ($src)
    - display an html <img> tag with $src source
Example :
    htmlImages('skate.jpg') 
    	> Displays <img src='skate.jpg'>

*/

function htmlImages($src)
{
	echo "<img src='$src' alt='' width='100px'>";

	/*
	Doesnt work : 
	echo '<img src="$src" alt="" width="100px">';

	Work if use concatenation : 
	echo '<img src="' . $src . '" alt="" width="100px">';
	*/
}

htmlImages('banana.png');

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

/*
-- Exercice 6

Ecrire une fonction qui :
    - Prend en paramètre deux nombres.
    - Qui retourne le résultat de la multiplication des deux nombres
    - Tous les paramètres doivent avoir une valeur par défaut.
    - Appeler votre fonction avec les nombres 10 et 2.
    - Appeler votre fonction avec un seul nombre : 4

Write a function that:
    - Takes two numbers as parameter.
    - That returns the result of the multiplication of the two numbers
    - All parameters must have a default value.
    - Call your function with the numbers 10 and 2.
    - Call your function with a single number: 4
*/

echo multi(10, 2);
echo multi(4);
echo multi();

function multi($x = 2, $y = 1)
{
	return ($x * $y);
}

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';

/*
-- Exercice 7 :
	Write a PHP function that return the reverse(mirror) of an array.
	You can use only one other variable (simple, no array).
	You can only use count() or strlen() function.
 

	HINT : How to swith two values
	Giving 2 variables $x and $y
	$x = 5
	$y = 10

	Swith the two values.

	$z = $x // Saving the first value (5)
	$x = $y // x = 10
	$y = $z // y = 5
*/
