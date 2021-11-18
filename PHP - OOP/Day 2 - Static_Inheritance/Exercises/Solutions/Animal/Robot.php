<?php

class Robot
{
    private $_id;
    private $_color;

    public function __construct($id, $color)
    {
        $this->_id = $id;
        $this->_color = $color;
    }

    public function work()
    {
        echo $this->_id . ' is doing robot stuff.<br>';
    }
}
