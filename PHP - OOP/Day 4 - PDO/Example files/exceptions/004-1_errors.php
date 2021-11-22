<?php

/*

Error VS Exception

- Errors :
An error is an unexpected result that can't be handle by the program.
Probably due to the dev

Exple : missing semicolon, infinite loop...

To solve it, you have to edit the code.

- Exceptions

An exception is a unexpected result that can be handle by the program.

For ex : You want to open a file but this file doesnt exists.
This exception can be handle by either creating the file or asking for a different file name.

*/

// Every error comes with an error number and a message

function custom_error($error_no, $error_msg)
{
    echo 'Something went wrong ! <br>';
    echo 'Error number : ' . $error_no . '<br>';
    echo 'Error message : ' . $error_msg;
}

// Tell PHP to use your custom function by default : 
set_error_handler('custom_error');

echo 15 / 0;
