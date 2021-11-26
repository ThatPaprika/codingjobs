<?php

class Driver
{
    // Properties
    private $id;
    private $firstname;
    private $lastname;
    private $age;

    public function __construct($firstname, $lastname, $age)
    {
        // Use the setters inside the construct
        $this->set_firstname($firstname);
        $this->set_lastname($lastname);
        $this->set_age($age);
    }

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
