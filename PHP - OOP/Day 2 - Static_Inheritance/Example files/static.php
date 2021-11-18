<?php

/*

STATIC

A static property/method is not related to a specific object but to the class itself.

*/

class Sheep
{
    private $name;
    private $hairColor;
    private $count;
    public static $countCloned;

    public function __construct()
    {
        // 'this' keyword refers to the object
        $this->count += 1;
        // 'self' keyword refers to the class
        self::$countCloned += 1;
    }
}

// Create Sheeps :
$sheep1 = new Sheep();
echo '<pre>';
var_dump($sheep1);
echo '</pre>';

$sheep2 = new Sheep();
echo '<pre>';
var_dump($sheep2);
echo '</pre>';

// Accessing static property 
echo Sheep::$countCloned;

/*
    'self' keyword refers to the class.
    Use 'self' when you are INSIDE the class
    Use 'className' when you are OUTSIDE the class
*/