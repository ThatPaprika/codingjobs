<?php

class Human extends Creature implements IWorkers
{
    public function work()
    {
        // 1 chance out of 4 to have work accident !
        $rand = rand(1, 4);
        if ($rand == 1) {
            throw new WorkAccidentException();
        }

        echo $this->_name . ' is currently working.<br>';
    }

    public function communicate()
    {
        echo 'blablablablabla';
    }
}
