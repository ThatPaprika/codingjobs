<?php

class Elf extends Adventurers
{

    public function attack($opponent)
    {
        // Check if bonus (based on sword)
        $bonus = 0;
        if ($this->equipment->get_type() == 'Sword')
            $bonus = 2;

        // Remove life points from the opponent
        $opponent->healthPoints -= ($this->atkPoints + $bonus);
    }

    public function usePower()
    {
        // Did I already used my power  ?
        if ($this->usePower == false) {
            $this->speed += 3;
            $this->usePower = true;
        }
    }
}
