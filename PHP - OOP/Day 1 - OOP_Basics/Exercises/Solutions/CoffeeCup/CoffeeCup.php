<?php
class CoffeeCup
{
    private $quantity;
    private $brand;
    private $temperature;
    private $volume;

    public function __construct($volume, $brand, $temperature)
    {
        $this->volume = $volume;
        $this->quantity = $volume;
        $this->brand = $brand;
        $this->temperature = $temperature;
    }

    //getter & setter
    public function get_quantity()
    {
        return $this->quantity;
    }

    public function get_brand()
    {
        return $this->brand;
    }

    public function get_temperature()
    {
        return $this->temperature;
    }

    public function sip($qtyToDrink)
    {
        if ($this->quantity < $qtyToDrink)
            $this->quantity = 0;
        else
            $this->quantity -= $qtyToDrink;

        return 'Remains : ' . $this->quantity . ' cl.';
    }

    public function refill()
    {
        $this->quantity = $this->volume;
        return 'Mug full again';
    }

    public function reheat($deg)
    {
        $this->temperature += $deg;
        return 'Coffee warmed up. Current temperature : ' . $this->temperature . ' °c';
    }

    public function cooldown($deg)
    {
        $this->temperature -= $deg;
        return 'Coffee cooldown up. Current temperature : ' . $this->temperature . ' °c';
    }
}
