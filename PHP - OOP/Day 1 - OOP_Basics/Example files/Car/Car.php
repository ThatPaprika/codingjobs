<?php

// Define a class 
class Car
{
    // Declare properties
    private $color;
    public $brand;
    public $name;

    // Constructor allow you to initialize certain porperties when creating an object
    public function __construct($c, $brand, $name)
    {

        $this->setColor($c);
        // this keyword refers to the instance of the class (the object)
        $this->brand = $brand;
        $this->name = $name;
    }

    // Declare methods
    public function makeSound()
    {
        echo 'Vroom Vroom';
    }

    // Setter (to set a property)
    public function setColor($newColor)
    {
        if ($newColor == "Red" or $newColor == "blue")
            $this->color = $newColor;
        else
            echo 'Color not available';
    }

    // Getter (to get the value of a property)
    public function getColor()
    {
        return $this->color;
    }

    // toString method
    public function __toString()
    {
        return 'Car : ' .
            '<br>- Color : ' . $this->color .
            '<br>- Brand : ' . $this->brand .
            '<br>- Name : ' . $this->name;
    }
}
