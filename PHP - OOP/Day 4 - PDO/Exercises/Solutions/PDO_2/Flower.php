<?php

class Flower
{
    private $id;
    private $name;
    private $price;

    // Setters
    public function set_id($id)
    {
        $this->id = $id;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function set_price($price)
    {
        $this->price = $price;
    }

    // Getters
    public function get_id()
    {
        return $this->id;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_price()
    {
        return $this->price;
    }
}
