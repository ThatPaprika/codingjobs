<?php

/*

INHERITANCE

Represent a relationship between classes.
It takes the form of a parent/child relationship.

Children will benefits the properties and methods of the parent.
The parent cannot access properties and methods of the children.

Different/Many children can inherit from the same parent.
A class can only inherit from one parent class.

The main purpose of inheritance (why) is reusability
*/

class Vehicles
{
    // Properties : (only children can access)
    protected $nbWheel;
    protected $brand;
    // Children can't access it
    private $model;

    public function __construct($brand, $modelName)
    {
        $this->brand = $brand;
        $this->model = $modelName;
        $this->nbWheel = 4;
    }

    public function makeSound()
    {
        echo 'Vrooooom Vrooooom !';
    }
}


class Car extends Vehicles
{

    public function speed()
    {
        echo 'Car is speeding up';
    }
}

class Bike extends Vehicles
{

    public function __construct($brand, $modelName)
    {
        parent::__construct($brand, $modelName);
        $this->nbWheel = 2;
    }
}

$myCar = new Car('BMW', 'm3');
echo '<pre>';
var_dump($myCar);
echo '</pre>';


$myBike = new Bike('Yamaha', 'r1');
echo '<pre>';
var_dump($myBike);
echo '</pre>';
