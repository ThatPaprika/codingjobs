<?php

// Validations
$errors = array();

if (empty($_POST['firstname']))
    $errors['firstname'] = 'First name is mandatory.';

if (empty($_POST['lastname']))
    $errors['lastname'] = 'Last name is mandatory.';

if (empty($_POST['age']))
    $errors['age'] = 'Age is mandatory.';
elseif (!is_numeric($_POST['age']))
    $errors['age'] = 'Age must be a number.';

// Try to insert, only if everything is ok with the form datas
if (empty($errors)) {

    require_once '../Exercise_2/Driver.php';

    // We have to convert age to int, otherwise set_age() will give us an error
    $age = (int) $_POST['age'];

    $newDriver = new Driver($_POST['firstname'], $_POST['lastname'], $age);
    if ($newDriver->insert())
        echo '<span style="color:green">Inserted the driver successfully !</span>';
    else
        echo '<span style="color:red">Problem inserting in the DB. Try again.</span>';
} else {
    foreach ($errors as $eType => $eMsg) {
        echo $eMsg . '<br>';
    }
}
