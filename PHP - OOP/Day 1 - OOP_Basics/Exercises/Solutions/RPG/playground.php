<?php

require_once 'Character.php';
require_once 'Equipment.php';

$legolas = new Character('Elf', 'Legolas');

$sword1 = new Equipment("Death Sword", "Sword", 0, 15, 0);
$sword2 = new Equipment("Wood Sword", "Sword", 0, 10, 1);
$shield = new Equipment("Orobo", "Shield", 0, 0, 10);

$legolas->add_equipment($sword1);
