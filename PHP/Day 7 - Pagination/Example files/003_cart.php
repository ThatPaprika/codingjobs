<?php

/*
    CART

    Be able to save 'products'/'items' and remember them in a cart.

	Example on how you can use session to save some product (books here).

*/

session_start();

$cart = array(
	0 => array(
		'name' => 'Mobydick',
		'price' => 10,
		'quantity' => 1
	),
	1 => array(
		'name' => 'Jaws',
		'price' => 8,
		'quantity' => 2
	)
);

$_SESSION['cart'] = $cart;

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
