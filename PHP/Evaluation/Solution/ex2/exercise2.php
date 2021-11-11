<?php

require_once 'exercise2_array.php';

/**** SOLUTION WITHOUT BONUS ****/

echo '<h3>Solution without bonus</h3>';

// Descending alphabetical order
krsort($celebrities);

foreach ($celebrities as $celebrityName => $celebrityInfo) {

    // Retrieve bank balance
    $balance = $celebrityInfo['credit'] - $celebrityInfo['debit'];

    // Red if below 0
    if ($balance < 0)
        $balance = "<span style='color:red'>$balance</span>";

    echo "$celebrityName own " . $celebrityInfo['houses'] . " houses and has a bank balance of $balance € <br>";
}

/**** SOLUTION WITH BONUS *****/

echo '<hr>';
echo '<h3>Solution with bonus</h3>';

// Descending alphabetical order
krsort($celebrities);
// To retrieve largest balance
$maxBalance = 0;
$maxBalanceName = '';

foreach ($celebrities as $celebrityName => $celebrityInfo) {

    // Retrieve bank balance
    $balance = $celebrityInfo['credit'] - $celebrityInfo['debit'];

    // Red if below 0
    if ($balance < 0)
        $balance = "<span style='color:red'>$balance</span>";

    // Check if balance is greater than previous one
    if ($balance > $maxBalance) {
        $maxBalance = $balance;
        $maxBalanceName = $celebrityName;
    }

    echo "$celebrityName own " . $celebrityInfo['houses'] . " houses and has a bank balance of $balance € <br>";
}

// Bonus : 
echo "<strong>$maxBalanceName have the largest bank balance : $maxBalance €</strong>";
