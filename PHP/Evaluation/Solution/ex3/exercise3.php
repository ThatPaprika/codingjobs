<?php

function occurrenceInArray($array, $search)
{
    if (gettype($array) != 'array') {
        echo 'Must be an array!<br>';
        die();
    }

    if (gettype($search) != 'integer') {
        echo 'Must be an integer!<br>';
        die();
    }

    $occurrences = 0;

    foreach ($array as $number) {
        if (abs($number) == abs($search))
            $occurrences++;
    }


    return 'The number of occurences is ' . $occurrences;
}


$numbers = [5, 19, 23, -5, -2, 5, 7, 10];
echo occurrenceInArray($numbers, 5);
