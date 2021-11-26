<?php

class Truck extends Vehicles
{
    // Properties only related to the truck
    private $payload;

    public function __construct($manufacturor, $type, $horsepower, $payload, $driver_id)
    {
        parent::__construct($manufacturor, $type, $horsepower, $driver_id);
        $this->payload = $payload;
    }
}
