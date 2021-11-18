<?php

require_once 'Creature.php';
require_once 'Animal.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Human.php';
require_once 'Robot.php';

$garfield = new Cat('Ginger', 'Male', 'Garfield', 4);
$snoopy = new Dog('Black&White', 'Male', 'Snoopy', 4);

$garfield->meow();
$snoopy->bark();

$simon = new Human('Simon', 'Brown', 'Male');
$robot = new Robot('z1239', 'Silver');

$simon->work();
$robot->work();
