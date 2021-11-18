<?php

class Animal extends Creature
{
    protected $_numberOfLegs;

    public function __construct($name, $color, $gender, $legs)
    {
        parent::__construct($name, $color, $gender);
        $this->_numberOfLegs = $legs;
    }
}
