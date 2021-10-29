<?php

/* 
    ENCRYPTION
    It is necessary to hash / to encrypt your password before storing it in the DB.

*/

// Assume this password :
$password = '1234';

// DO NOT USE THOSE FUNCTIONS : (weak/old algorithm)
/*$pwd1 = sha1($password);
$pwd1 = md5($password);*/

// Password hash will encrypt your password using the bcrypt() algorithm
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
// It generates a 60 char. long string
echo $hashedPassword;

echo '<hr>';

// Check if password match
if (password_verify('1234', $hashedPassword))
    echo 'Password matches!';
