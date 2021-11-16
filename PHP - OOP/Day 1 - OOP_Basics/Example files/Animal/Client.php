<?php

require_once 'Animal.php';

$girafe = new Animal('Girafe', 4);
$girafe->_breed = 'Rhino';
echo $girafe->_breed;

var_dump($girafe);
// Make a copy :
//$rhino = $girafe;
//$girafe = null;