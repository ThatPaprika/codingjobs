<?php

/*
    SESSIONS

    - First : You need to start the session
    If it's the first time, you start a new session.
    If you already opened a session before, you can resume it.

*/

session_start();

// Add an element into my session
$_SESSION['email'] = 'simon@live.fr';

// Remove a specific element from the session
//unset($_SESSION['email']);

// Destroy the whole session :
//session_destroy();

var_dump($_SESSION);
echo '<br>';
var_dump($_COOKIE);
