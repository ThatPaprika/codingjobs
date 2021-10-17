<?php

// 1. IF Syntax
$a = 5;

if($a == 6) {
   echo 'Equal'; 
} else {
    echo 'Not equal';
}

//  2. Compare operators
$a = 2;
$b = '2';

//same value
if($a == $b) // return true

// Same value & Same type
if($a === $b) // return false

// Not equal
if($a != $b) // return false

// Not same value OR not same type
if($a !== $b) // return true

// Greater / Lower than :
if($a < $b) // Lower than
if($a <= $b) // Lower or equal than
if($a > $b) // Greater than
if($a >= $b) // Greater or equal than

//3. Logical operator

// AND &&
if($a == 5 && $b == 6)
if($a == 5 AND $b == 6)

// OR ||
if($a == 3 || $b == 2)
if($a == 3 OR $b == 2)

// XOR
if($a==2 XOR $b == 1)
// XOR returns true IF only one of the condition is true. Not both at same time.
?>