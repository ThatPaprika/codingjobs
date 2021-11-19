<?php

class Equipment
{
    private $name;
    private $type;
    private $healthBonus;
    private $atkBonus;
    private $defBonus;

    public function __construct($equipmentName, $equipmentType, $health, $attack, $defense)
    {
        $this->name = $equipmentName;
        $this->type = $equipmentType;
        $this->healthBonus = $health;
        $this->atkBonus = $attack;
        $this->defBonus = $defense;
    }

    // Same as stating property public
    public function get_type()
    {
        return $this->type;
    }

    public function __toString()
    {
        return 'Equipment informations : <br>
        Name : ' . $this->name . '<br>
        Type : ' . $this->type . '<br>
        Life bonus : ' . $this->healthBonus . '<br>
        Attack bonus : ' . $this->atkBonus . '<br>
        Defense bonus : ' . $this->defBonus . '<br>';
    }
}
