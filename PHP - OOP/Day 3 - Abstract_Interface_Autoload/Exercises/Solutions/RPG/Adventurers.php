<?php

abstract class Adventurers
{
    // Properties
    protected $name;
    protected $healthPoints;
    protected $atkPoints;
    protected $defPoints;
    protected $warCry;
    protected $speed;
    protected $usePower;
    protected $equipment;

    public function __construct($n)
    {
        $this->name = $n;

        $this->healthPoints = 100;
        $this->atkPoints = 10;
        $this->defPoints = 5;
        $this->speed = 2;
        $this->usePower = false;

        $this->warCry = "Attaaaaaack!";
    }

    public function add_equipment($newEquipment)
    {
        // Only equip if it's an object coming from Equipment class
        if (get_class($newEquipment) == "Equipment")
            $this->equipment = $newEquipment;
    }

    public function remove_equipment()
    {
        $this->equipment = null;
    }

    public function display_equipment()
    {
        echo $this->equipment;
    }

    abstract public function attack($opponent);
    abstract public function usePower();
}
