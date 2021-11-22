<?php

/*

Exceptions must be handled by the dev.
Exceptions are handled in a OOP way.

When an exception is thrown/triggered, an 'Exception' object is created.

An exception Object contains some details (message, number...)
It have some methods : getMessage(), getCode()....

Syntax : 
    throw new Exception('This is an exception');

'throw' allow to trigger an exception
'new' create an instance of an Exception

Handle exception with try... catch
*/

try {
    echo 'Everythin is nice<br>';
    throw new Exception(50 / 0);

    echo 'Everything is still fine';
} catch (Exception $e) {
    echo 'AN EXCEPTION HAS BEEN THROWN<br>';
    echo $e->getMessage();
}


/************/

function anything($a, $b)
{
    return 'Hey, this is a function';
}

try {
    anything(1);
} catch (ArgumentCountError $e) {
    echo 'Exception found !';
}



/* Create our exception */

class DivideByNegativeException extends Exception
{
}

// Function that returns 25 / $x
function test($x)
{
    if ($x < 0)
        throw new DivideByNegativeException('You tried to divide 25 by a negative number');

    return 25 / $x;
}

// Try to use the function
try {
    echo test(-9);
} catch (DivideByNegativeException $e) {
    echo 'Divide by negative exception';
} catch (Exception $e) {
    echo 'UNKNOWN TYPE OF EXCEPTION';
}
