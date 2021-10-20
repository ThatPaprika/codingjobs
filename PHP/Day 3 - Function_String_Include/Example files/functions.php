<?php

/*
    FUNCTIONS

    Functions are block of code that you can reuse.
    Functions can either return values, or simply perform an action.

*/

// Declare a function
function hello_world()
{
    echo 'Hello, world.<br>';
}

// Call a function
hello_world();

// Function with return value
function hello_world2()
{
    // Return the message
    return 'Hello, world.<br>';

    // Reaching 'return' keyword stop the function
    echo 'Yoyoyoyoyoyo';
}

// I return the value, so I need to do something with it
echo hello_world2();

$message = hello_world2();
echo $message;


// Scope : visibility of variables
$x = 10;
function example()
{
    // This doesnt work : 
    echo $x;
}

// This doesnt work either : 
function example2()
{
    $y = 5;
}

example2();
echo $y;

// Function with arguments :
function greetings($firstname, $lastname)
{
    echo 'Hello, how are you doing ' . $firstname . ' ' . $lastname . ' ?';
}

greetings('simon', 'bertrand');

$myFirstname = 'paul';
$myLastname = 'blabla';
greetings($myFirstname, $myLastname);


// Default values on argument
function multiply($x = 1)
{
    echo 2 * $x;
}

multiply(5);
multiply();
