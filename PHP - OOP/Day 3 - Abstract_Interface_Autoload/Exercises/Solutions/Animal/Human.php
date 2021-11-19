<?php

class Human extends Creature implements IWorker
{
    public function work()
    {
        echo $this->_name . ' is currently working.<br>';
    }

    public function communicate()
    {
        echo 'blablablablabla';
    }
}
