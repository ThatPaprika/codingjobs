<?php

require_once 'Adventurers.php';
require_once 'Orc.php';
require_once 'Elf.php';
require_once 'Human.php';
require_once 'Equipment.php';

$orc = new Orc('Orki');
$sword = new Equipment('DeathSword', 'Sword', 0, 10, 0);
$orc->add_equipment($sword);

$legolas = new Elf('Legolas');
$shield = new Equipment('Wooden Shield', 'Shield', 0, 0, 10);
$legolas->add_equipment($shield);

// Orc attack Legolas
$orc->attack($legolas);
