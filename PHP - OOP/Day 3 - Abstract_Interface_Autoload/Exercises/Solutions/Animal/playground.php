<?php

spl_autoload_register();

// Creating Cats & Dogs
$garfield = new Cat('Garfield', 'Ginger', 'Male', 4);
$snoopy = new Dog('Snoopy', 'Black&White', 'Male', 4);
$caty = new Cat('Caty', 'Black', 'Female', 3);
$joe = new Dog('Joe the cat', 'Brown', 'Male', 3);

// Creating Humans
$simon = new Human('Simon', 'Brown', 'Male');
$sandrine = new Human('Sandrine', 'Brown', 'Female');

// Creating Robots
$robot = new Robot('z1239', 'Silver');
$robot2 = new Robot('y9877', 'Gold');

// Creature array 
$creatureArray = array(
    $garfield,
    $snoopy,
    $caty,
    $joe,
    $simon,
    new Human('John', 'Brown', 'Male')
);

// Workers array
$workersArray = array(
    $simon,
    $john,
    $robot,
    $robot2
);

// Loop 10 times
for ($i = 0; $i <= 10; $i++) {
    // generate random int
    $random = rand(0, count($creatureArray) - 1);
    // Access the object and ask it to communicate
    $creatureArray[$random]->communicate();
}

echo '<hr>';

// Loop 10 times
for ($i = 0; $i <= 10; $i++) {
    // generate random int
    $random = rand(0, count($workersArray) - 1);
    // Access the object and ask it to work
    $workersArray[$random]->work();
}
