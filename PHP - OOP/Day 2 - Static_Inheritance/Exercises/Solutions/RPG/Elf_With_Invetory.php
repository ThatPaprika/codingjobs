<?php

class Elf extends Adventurer
{
    public function attack(Adventurer $opponent)
    {
        // Count how much swords
        $swords = 0;

        foreach ($this->equipments as $equip) {
            if ($equip->get_type() === 'Sword')
                $swords++;
        }
        // Bonus for each sword
        $bonus = 2 * $swords;

        // Total atk
        $totalAtk = $this->attPoints + $bonus;

        // remove life points from opponent
        $opponent->hltPoints -= $totalAtk;
    }

    public function use_power()
    {
        $this->speed += 3;
    }
}
