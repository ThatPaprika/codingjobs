<?php

class Orc extends Adventurers
{
    public function __construct($n)
    {
        /*
            object->method()
            class::method()
        */
        parent::__construct($n);
        $this->warCry = "wwouogrouroulou mlll !!";
    }

    public function attack($opponent)
    {
        $damage = 50;

        // Is the opponent an elf ?
        if (get_class($opponent) == 'Elf') {
            // Does the Elf carry a Shield ?
            if ($opponent->equipment != null && $opponent->equipment->get_type() == 'Shield') {
                $damage = $this->atkPoints;
            }
        }

        $opponent->healthPoints -= $damage;

        echo $this->name . ' attacked ' . $opponent->name . ' !<br>
        Removing ' . $damage . ' points';
    }

    public function usePower()
    {
        // Did I already used my power  ?
        if ($this->usePower == false) {
            $this->defPoints += 20;
            $this->atkPoints -= 10;
            $this->usePower = true;
        }
    }
}
