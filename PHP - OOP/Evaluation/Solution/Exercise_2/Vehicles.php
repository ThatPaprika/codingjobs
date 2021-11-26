<?php

class Vehicles
{
    protected $id;
    protected $manufacturor;
    protected $type;
    protected $horsepower;
    protected $driver_id;

    public function __construct($manufacturor, $type, $horsepower, $driver_id)
    {
        $this->manufacturor = $manufacturor;
        $this->type = $type;
        $this->horsepower = $horsepower;
        $this->driver_id = $driver_id;
    }
}
