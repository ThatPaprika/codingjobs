<?php
require_once 'Flower.php';
class FlowerModel
{

    // Get PDO Connection
    private function getPDO()
    {
        return new PDO('mysql:host=localhost;dbname=flower_database;charset=utf8', 'root', '');
    }

    // get_flowers() : returns array of flowers objects.
    public function get_flowers()
    {
        // Connect to the DB 
        $pdo = $this->getPDO();

        // Send the query to the DB
        $results = $pdo->query('SELECT * FROM flowers');

        // Fetch as associative array
        $flowers = $results->fetchAll(PDO::FETCH_CLASS, 'Flower');

        // Close connection / release memory
        $pdo = null;

        return $flowers;
    }

    // get_flower($id) : return one flower object.
    public function get_flower($id)
    {
        $pdo = $this->getPDO();

        $prep = $pdo->prepare('SELECT * FROM flowers WHERE id = ?');
        $prep->bindValue(1, $id);
        $prep->execute();

        $flower = $prep->fetchAll(PDO::FETCH_CLASS, 'Flower');

        // Close connection / release memory
        $pdo = null;

        // Return only one flower
        return $flower[0];
    }

    // insert_flower() : return true or false
    public function insert_flower($form_data)
    {
        var_dump($form_data);
        // Connect to the DB 
        $pdo = $this->getPDO();

        // Send the query to the DB
        $prep = $pdo->prepare('INSERT INTO flowers(title, price) VALUES(?, ?)');

        $prep->bindValue(1, $form_data['title']);
        $prep->bindValue(2, $form_data['price']);

        $result = $prep->execute();
        return $result;
    }
}
