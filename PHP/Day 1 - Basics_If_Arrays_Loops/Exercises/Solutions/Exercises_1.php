<?php

/* - Exercise 1 :

-- Create your first fruit array containing: "Apple, Strawberry, Pineapple, Lemon".
-- Display the value of the 2nd element.

*/

$fruits = array(
    'Apple',
    'Strawberry',
    'Pineapple',
    'Lemon'
);

echo $fruits[1] . '<br>';


/*
- Exercise 2
-- Create an associative array that contains the number in stock for each item: 20 T-Shirts, 10 Caps and 5 Shoes.
-- Display the stock of caps.
*/

$stock = array(
    'Tshirt' => 20,
    'Caps' => 10,
    'Shoes' => 5
);

echo 'Number of caps : ' . $stock['Caps'] . '<br>';


/*
- Exercise 3

The clothing store has just received a new stock of shoes and caps.
-- Add 5 caps.
-- Add 20 shoes.
-- Display the shoe stock.
*/

//$stock['Caps'] = $stock['Caps'] + 5;
$stock['Caps'] += 5; 

$stock['Shoes'] += 20;

echo $stock['Shoes'] . '<br>';

/*
- Exercise 4
You have a list of contacts.
Each contact has a name, an email and a phone number.
Here is the list of these contacts:
> Name: Ricardo, Tel: 0677777777, Email: ricardo@gmail.com
> Name: Michael, Tel: 0606060606, Email: mj@gmail.com
> Name: Emmanuel, Tel: 0610101010, Email: manu@gmail.com

-- The goal of the exercise is to create an array that will contain all the information for ALL my contacts. 
I need to be able to access a contact's information easily and quickly.
*/

$contact = array(
    'Ricardo' => [
        'name' => 'ricardo',
        'phone' => '036487487',
        'email' => 'ricard@gmail.com'
    ], 
    'Michael' => [
        'name' => 'Michael',
        'phone' => '656788787',
        'email' => 'michael@gmail.com'
    ],
    'Emmanuel' => [
        'name' => 'Emmanuel',
        'phone' => '+78979796464',
        'email' => 'manu@gmail.com'
    ]
);

// Initialize empty array
$contact = array();

$contact['Ricardo'] = [
    'name' => 'ricardo',
    'phone' => '036487487',
    'email' => 'ricard@gmail.com'
];

$contact['Emmanuel'] = [
    'name' => 'emmanuel',
    'phone' => '036487487',
    'email' => 'ricard@gmail.com'
];

echo $contact['Ricardo']['phone'];


