<?php

// Load automatically the classes you need
// This function, by default, will look inside the same folder
spl_autoload_register();

// If it's in a different folder, you have to do this : 
function projectAutoload($class)
{
    require_once 'classes/' . $class . '.php';
}

spl_autoload_register('projectAutoload');

$myDog = new Dog();
$cacat = new Cat();
