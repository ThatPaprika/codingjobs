<?php

// This is PHP comment on a single line

/*
    We can write some comments
    on many lines
*/


// 1. Simple Variables
$firstName = 'Simon';
$luxPopulation = 2000;
$height = 4.5;
$are_you_the_best = true;
$are_you_the_best = 'Yes';

/*
    Rules (about variables)  : 
    - Always start with a letter 
    - Can contain numbers
    - No symbols, except underscore
*/

// Display variables : 
echo $firstName;
echo '<br>';
echo $luxPopulation;

echo '<h2>' . $firstName . '</h2>';

// Display type of variable : 
echo gettype($firstName);

// Display content & type (debug)
var_dump($firstName);

// 2. Arithmetic operators
$a = 5 + 2;
$a = 5 - 2;
$a = 5 * 2;
$a = 5 / 2;
$a = 5 % 2; // modulo

// Context : 
$a = 10;
$a = $a + 2; // $a = 12
$a += 2; // $a = $a + 2; 
 
$a -= 5; // $a = $a - 5; 

// Incrementing by 1
$a = $a +1;
$a += 1;
$a++;

// Decrementing
$a = $a - 1;
$a -= 1;
$a--;

// 3. Concatenation : Put two(or more) strings together
$firstName = 'Simon';
echo 'Hello ' . $firstName . '<br>';

// 4. Quotes
$color = 'red';

// Using single quotes (display as text)
echo 'It happens that my face goes $color <br>';

// Using double quotes (display content of variable)
echo "It happens that my face goes $color <br>";

// 5. Escaping characters
echo 'It\'s easy';


?>