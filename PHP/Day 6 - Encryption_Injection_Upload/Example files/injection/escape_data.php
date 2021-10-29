<?php

/*
    Cleaning form data.

    User data can be manipulated in many ways by malicious person through the form.

    You have to reduce the risk for the website : 
        - Clean data
        - Validate data
        - Escape data before sending to the DB
        - Escape before sending to the client
    
    
    Let's have an example (movie exercise).
    For detail page we use GET method to pass the id of the movie
    
    localhost/movie.php?id=5

    A user can try to acces the page doing something like this :
    movie.php?id=1;select * from users;
*/

// How to avoid this : for example, I can cast the variable to int
$id = (int) $_GET['id'];
// Try to convert to int, if its not a number, it will return 0

if ($id != 0) {
}

/*
    All form data is processed
    Initially like strings, so, casting
    the variables sent can be easily cleaned
    the id sent by the user.
*/