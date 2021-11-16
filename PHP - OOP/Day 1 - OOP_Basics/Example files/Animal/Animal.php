<?php

class Animal
{
    // Properties
    public $_breed;
    private $_legs;

    // Construct 
    public function __construct($breed, $legs)
    {
        $this->_breed = $breed;
        $this->setLegs($legs);
    }

    // Setters & Getters
    public function getLegs()
    {
        return $this->_legs;
    }

    public function setLegs($legs)
    {
        if (is_int($legs)) {
            $this->_legs = $legs;
        } else {
            echo 'Not a number';
        }
    }
}
