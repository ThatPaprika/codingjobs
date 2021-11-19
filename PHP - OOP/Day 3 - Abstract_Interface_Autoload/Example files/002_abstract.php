<?php

/*
    Abstraction !

    Abstraction is used when you want to implement 'rules' on children (using inheritance).

    An abstract class cannot be instantiate.
    This is meant to be extended by a class.
    
    The structure of the class is the same as a regular one, just add the keyword "abstract"

*/

abstract class Shape
{
    // Function's signature
    abstract public function calculatSurface();

    public function regularMethod()
    {
        echo 'Youhou';
    }
}

// Because it's abstract, this give an error :
//$myShape = new Shape();

//  Circle inherit from the Shape normally
class Circle extends Shape
{
    // I HAVE TO IMPLEMENT THIS METHOD : Mandatory
    public function calculatSurface()
    {
        return 'surface of the circle';
    }
}

/*

1. An abstract class can contain regular methods (not abstract)
2. A class can be abstract without any abstract methods.
3. If a class has one or more abstract methods, it must be an abstract class.

*/