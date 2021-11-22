<?php

require_once 'Flower.php';

class FlowerManager
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=flower_database', 'root', '');
    }

    public function findAll()
    {
        $results = $this->pdo->query('SELECT * FROM flowers');
        $flowers = $results->fetchAll(PDO::FETCH_CLASS, 'Flower');
        $pdo = null;

        return $flowers;
    }
}
