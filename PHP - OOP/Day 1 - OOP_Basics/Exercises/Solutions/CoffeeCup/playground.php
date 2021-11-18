<?php

require_once 'CoffeeCup.php';

$coffee = new CoffeeCup(30, 'Malongo', 20);
echo $coffee->reheat(2);
