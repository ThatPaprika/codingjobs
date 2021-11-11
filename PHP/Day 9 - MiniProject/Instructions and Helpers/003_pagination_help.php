<?php

/*
HELP ON PAGINATION 
Step 1 = 
	Count number of products.
	Now you know the number of pages you will have.
Step 2 =
	Check if you have a URI Param (for example, 'products.php?page=1')
	This URI param is the page's number.
Step 3 =
	Thanks to the page's number you change the query (LIMIT PART)
	LIMIT x, 10;
	x = 10*($page-1)
-----
Page 1
$page = 1; display 1 to 10
	LIMIT 0, 10;
x = 10*(1-1) = 0
Page 2
$page = 2; display 11 to 20
	LIMIT 10, 10;
x = 10*(2-1) = 10
Page 3
$page = 3; display 21 to 30
	LIMIT 20, 10;
x = 10*(3-1) = 20
Page 4
$page = 4; display 31 to 40
	LIMIT 30, 10;
x = 10*(4-1) = 30
*/