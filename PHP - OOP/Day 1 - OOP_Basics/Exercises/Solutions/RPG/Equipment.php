<?php

class Equipment
{
    private $name;
    private $type;
    private $atkPoints;
    private $defPoints;
    private $hltpoints;

    public function __construct($name, $type, $hlt, $atk, $def)
    {
        $this->name = $name;
        $this->type = $type;
        $this->hltpoints = $hlt;
        $this->atkPoints = $atk;
        $this->defPoints = $def;
    }

    public function get_type()
    {
        return $this->name;
    }

    public function __toString()
    {
        return 'Equipment informations : <br>
        Name : ' . $this->name . '<br>
        Type : ' . $this->type . '<br>
        Atk : ' . $this->atkPoints . '<br>
        Def : ' . $this->defPoints . '<br>
        Health : ' . $this->hltpoints;
    }
}
