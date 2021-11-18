<?php

class Equipment
{
    private $name;
    private $atkPoints;
    private $defPoints;
    private $hltpoints;

    public function __construct($name, $atk, $def, $hlt)
    {
        $this->name = $name;
        $this->atkPoints = $atk;
        $this->defPoints = $def;
        $this->hltpoints = $hlt;
    }

    public function get_type()
    {
        return $this->name;
    }

    public function __toString()
    {
        return 'Equipment informations : <br>
        Atk : ' . $this->atkPoints . '<br>
        Def : ' . $this->defPoints . '<br>
        Health : ' . $this->hltpoints;
    }
}
