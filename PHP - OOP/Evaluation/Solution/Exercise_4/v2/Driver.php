<?php

// Adding methods find_cars() and find_trucsk() to retrieve cars and trucks on a specific driver

class Driver
{
    // Properties
    private $id;
    private $firstname;
    private $lastname;
    private $age;

    // Setters
    public function set_id($id)
    {
        $this->id = $id;
    }

    public function set_age($age)
    {
        // Check if it's an integer
        if (is_int($age))
            $this->age = $age;
        else
            echo 'Age must be an integer';
    }

    public function set_firstname($firstname)
    {
        // Check if it's a string
        if (is_string($firstname))
            $this->firstname = $firstname;
        else
            echo 'Firstname must be a string';
    }

    public function set_lastname($lastname)
    {
        // Check if it's a string
        if (is_string($lastname))
            $this->lastname = $lastname;
        else
            echo 'Lastname must be a string';
    }

    // Getters
    public function get_id()
    {
        return $this->id;
    }

    public function get_firstname()
    {
        return $this->firstname;
    }

    public function get_lastname()
    {
        return $this->lastname;
    }

    public function get_age()
    {
        return $this->age;
    }

    // Look for related cars 
    public function find_cars()
    {
        // Use PDO and prepared statement
        $dsn = 'mysql:host=localhost;dbname=vehicle_db';
        $pdo = new PDO($dsn, 'root', '');

        $prep = $pdo->prepare('SELECT c.id, c.type, c.manufacturor, c.horsepower
                FROM car c
                WHERE c.driver_id = ?');

        $prep->bindValue(1, $this->id);
        $prep->execute();

        return $prep->fetchAll(PDO::FETCH_CLASS, 'Car');
    }

    // Look for related trucks 
    public function find_trucks()
    {
        // Use PDO and prepared statement
        $dsn = 'mysql:host=localhost;dbname=vehicle_db';
        $pdo = new PDO($dsn, 'root', '');

        $prep = $pdo->prepare('SELECT t.id, t.type, t.manufacturor, t.horsepower, t.payload
        FROM truck t
        WHERE t.driver_id = ?');

        $prep->bindValue(1, $this->id);
        $prep->execute();

        return $prep->fetchAll(PDO::FETCH_CLASS, 'Truck');
    }

    // Insert method
    public function insert()
    {
        // Use PDO and prepared statement
        $dsn = 'mysql:host=localhost;dbname=vehicle_db';
        $pdo = new PDO($dsn, 'root', '');

        $prep = $pdo->prepare('INSERT INTO driver(firstname, lastname, age) VALUES(?, ?, ?)');
        $prep->bindValue(1, $this->firstname);
        $prep->bindValue(2, $this->lastname);
        $prep->bindValue(3, $this->age);

        if ($prep->execute())
            return true;

        return false;
    }
}
