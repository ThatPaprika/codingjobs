<?php

/*
    For this stage, I have to :
        - Remove the construct. I don't need it and if I leave it, there will be errors.
        Because I use PDO -> fetchClass
        - Create getters, so I can display properties in the index page.
*/

class Vehicles
{
    protected $id;
    protected $manufacturor;
    protected $type;
    protected $horsepower;
    protected $driver_id;

    public function get_manufacturor()
    {
        return $this->manufacturor;
    }

    public function get_type()
    {
        return $this->type;
    }

    public function get_horsepower()
    {
        return $this->horsepower;
    }
}
