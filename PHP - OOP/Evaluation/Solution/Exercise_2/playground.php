<?php

// This file is not requested, it's just to see if my classes are working properly

spl_autoload_register();

// This doesnt work because age should be integer : new Driver(1, 'Simon', 'Bertrand', '31');
$simon = new Driver('Simon', 'Bertrand', 31);
$a3 = new Car(1, 'Audi', 'a3', '110', 1);
$t3 = new Truck(1, 'Audi', 't3', 350, 310, 1);

// Try to insert the driver in the DB :
if ($simon->insert())
    echo 'Inserted the driver successfully !';
else
    echo 'Problem inserting in the DB. Try again.';
