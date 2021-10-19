<?php

	/*
	- Exercise 1 :
		
		Based on the character exercise, 
		display all his caracteristics using a loop.

	*/

	/*
	- Exercise 2 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.

	    $array = array("Salad"=>"1.03","Tomato"=>"2.3","Oignon"=>"1.85","Red cabbage"=>"0.85")
	    Write a script that will : 
	    1. Sort by value
	    2. Sort by key in descending order
	    3. Use a loop to calculate the total of his spendings.

	*/

	$array = array("Salad"=>"1.03","Tomato"=>"2.3","Oignon"=>"1.85","Red cabbage"=>"0.85");

	asort($array);
	krsort($array);

	$total = 0;

	foreach ($array as $value) {
		$total = $total + $value;
	}

	echo 'Total is : ' . $total; 




	/*
	- Exercise 3 : 

		Using a loop, fill in a array with every number from 0 to 20.
		The element 0 will therefore contain 0, the element 1 will contain 1 etc.

		Do it by using a for AND a while loop
	*/

	$myArray = array();

	for ($i=0; $i <= 20; $i++) { 
		$myArray[$i] = $i;
	}

	// With while loop : 

	$myArray = array();
	$a = 0;

	while ($a < 21) {
		$myArray[$i] = $i;
		$a++;
	}

	/*
	-Exercise 4 :
		Use a loop to create a array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
	*/

	$multipTable = array();

	for ($i=1; $i <= 10; $i++) { 
		$multipTable[$i] = $i*2;
	}

	var_dump($multipTable);

	/*
	-Exercise 5 :
		Create an array of random numbers
		1. Find the max / min number of the array.
		You can't use any function (max/min/sort).
	
		2. Find the position of the max/min also.
		You can only use 2 variables (your $array and $i doesn't count).
	*/

	$numbers = [20, 10, -50, 3, 168, 78];

	$posMin = 0;
	$posMax = 0;

	foreach ($numbers as $key => $value) {
		// Check for the minimum
		if($value < $numbers[$posMin]) {
			$posMin = $key;
		}

		// Check for the maximum
		if($value > $numbers[$posMax]) {
			$posMax = $key;
		}
	}

	echo 'Maximum is : ' . $numbers[$posMax] . ', at position : ' . $posMax . '<br>';
	echo 'Minimum is : ' . $numbers[$posMin] . ', at position : ' . $posMin . '<br>';