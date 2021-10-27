<?php

if (isset($_POST['resetBtn']))
    unset($_COOKIE['visited']);

// Is this first time on the page ?
if (isset($_COOKIE['visited'])) {
    setcookie('visited', $_COOKIE['visited'] + 1, time() + 1000);

    echo 'You visited this page : ' . $_COOKIE['visited'] . ' times<br>';
    echo 'First visit date : ' . $_COOKIE['first_visit'];
} else {
    echo 'First time ! Welcome.';
    setcookie('visited', 1, time() + 1000);
    setcookie('first_visit', date('Y-m-d'), time() + 1000);
}
?>

<form method="post">
    <input type="submit" name="resetBtn" value="Reset">
</form>