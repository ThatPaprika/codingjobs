<?php

class Human extends Adventurers
{
    public function attack($opponent)
    {
        // Check if bonus (only if no weapons)
        $bonus = 0;
        if ($this->equipment == null)
            $bonus = 3;

        $opponent->healthPoints -= ($this->atkPoints + $bonus);
    }

    public function usePower()
    {
        // Did I already used my power  ?
        if ($this->usePower == false) {
            $this->healthPoints += 20;
            $this->usePower = true;
        }
    }
}
