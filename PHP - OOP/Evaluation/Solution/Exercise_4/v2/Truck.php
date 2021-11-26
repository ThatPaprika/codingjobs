<?php

/*
    For this stage, I have to :
        - Remove the construct. I don't need it and if I leave it, there will be errors.
        Because I use PDO -> fetchClass
        - Create getters, so I can display properties in the index page.
*/

class Truck extends Vehicles
{
    // Properties only related to the truck
    private $payload;

    public function get_payload()
    {
        return $this->payload;
    }
}
