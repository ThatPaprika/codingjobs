<?php

class Creature
{
    // Protected : Properties accessible within the class and its subclass but not outside.
    protected $_name;
    protected $_color;
    protected $_gender;

    public function __construct($name, $color, $gender)
    {
        $this->_name = $name;
        $this->_color = $color;
        $this->_gender = $gender;
    }
}
