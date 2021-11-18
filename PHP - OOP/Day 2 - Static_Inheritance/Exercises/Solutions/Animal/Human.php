<?php

class Human extends Creature
{
    public function work()
    {
        echo $this->_name . ' is currently working.<br>';
    }

    public function talk()
    {
        echo 'blablablablabla';
    }
}
