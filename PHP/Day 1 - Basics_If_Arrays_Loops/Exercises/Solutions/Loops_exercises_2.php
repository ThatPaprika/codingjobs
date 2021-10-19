<?php

	/*
	- Exercise 1 :
		
		Write a PHP script which displays this pattern : 
			* 
			* * 
			* * * 
			* * * * 
			* * * * * 

		You have to use a loop inside another loop to do this !

		+

		first loop :
			$line = 0
			0 to 0
		second loop 
			$line = 1
			0 to 1
		thir loop
			$line = 2
			0 to 2
		etc...
	*/

	echo '<h2>Exercise 1</h2>';
 
	// First loop : takes care of the lines
	for ($line=0; $line < 5; $line++) { 
		// Second loop : takes care of the columns (* symbols)
		for ($i=0; $i <= $line; $i++) { 
			echo '*';
		}
		echo '<br>';
	}



	/*
	- Exercise 2 : 
		Write a PHP script which displays this pattern : 
		* 
		* * 
		* * * 
		* * * * 
		* * * * * 
		* * * * * 
		* * * * 
		* * * 
		* * 
		* 

	*/

	echo '<hr>';
	echo '<h2>Exercise 2</h2>';
	// First loop : takes care of the lines
	for ($line=0; $line < 5; $line++) { 
		// Second loop : takes care of the columns (* symbols)
		for ($i=0; $i <= $line; $i++) { 
			echo '*';
		}
		echo '<br>';
	}

	for ($line=5; $line > 0; $line--) { 
		for ($i=1; $i <= $line; $i++) { 
			echo '*';
		}
		echo '<br>';
	}
	

	/*
	- Exercise 3 : 

		We already have two arrays :
	    $artists = array(
	        0 => array("Eminem", "IAM"), 
	        1 => array("Madonna", "Katy Perry"), 
	        2 => array("Pink Floyd", "AC/DC")
	    );
    
    
    
	    $style = array(
	        0 => "Rap",
	        1 => "Pop", 
	        2 => "Rock"
	    );   
    
 
 		Write a PHP script which merge the two arrays to have a single array looking like this :

		    $array3 =  array (      
		        "Rap" => Array (          
		            [0] => "Eminem",              
		            [1] => "IAM"    
		        ),  
		        "Pop" => Array (          
		            [0] => "Madonna",              
		            [1] => "Katy Perry"    
		        ),
		        "Rock" => Array (          
		            [0] => "Pink Floyd",              
		            [1] => "AC/DC"    
		        )            
		    )
	*/

	/*
	-Exercise 4 :
	
		We have an array of bank transactions, which indicates the credit and debit amounts of each person.
		For each person, calculate the real amount of their account and it as a key/value in the array.

		$transactions = array(
		    "Marie" => array(
		        "debit"=>6,
		        "credit"=>9
		    ),
		    "Julien" => array(
		        "debit"=>21,
		        "credit"=>19
		    ),
		    "Sophie" => array(
		        "debit"=>15,
		        "credit"=>14
		    ),
		    "John" => array(
		        "debit"=>10,
		        "credit"=>14
		    )
		);

		// Expected results : 
		$transactions = array(
		    "Marie" => array(
		        "debit"=>6,
		        "credit"=>9,
		        "amount"=>3
		    ),
		    "Julien" => array(
		        "debit"=>21,
		        "credit"=>19,
		        "amount"=>-2
		    ),
		    "Sophie" => array(
		        "debit"=>15,
		        "credit"=>14,
		        "amount"=>-1
		    ),
		    "John" => array(
		        "debit"=>10,
		        "credit"=>14,
		        "amount"=>4
		    )
		);
	*/

	$transactions = array(
		"Marie" => array(
			"debit"=>6,
			"credit"=>9
		),
		"Julien" => array(
			"debit"=>21,
			"credit"=>19
		),
		"Sophie" => array(
			"debit"=>15,
			"credit"=>14
		),
		"John" => array(
			"debit"=>10,
			"credit"=>14
		)
	);

	foreach($transactions as $name => $bankAccount) {
		$transactions[$name]['amount'] = $transactions[$name]['credit'] - $transactions[$name]['debit'];
	}

	/*
		Different solution (same result) :
		foreach($transactions as $name => $bankAccount) {
			$transactions[$name]['amount'] = $bankAccount['credit'] - $bankAccount['debit'];
		}
	*/

	var_dump($transactions);

	/*
	- Final exercise - ONLY FOR THE BEASTS

		We have an array of integers, unsorted, with all numbers from 1 to 50 BUT one element is missing (the array is therefore 49).
		
		The goal is to find the missing item (the missing number).
		However, you have 3 constraints:
		- You have the right to LOOP the array only once!
		- You have the right to use only one variable!
		- You can not use functions (sorting etc ...)

		An example with an array with 9 elements :

			$array = array(5, 1, 3, 2, 9, 6 ,8, 4, 10);
	        // Le nombre manquant est 7

	        $var = ...

	        for (int i = 0; i < count($array); ++i)
	        {
	            ...
	        }

	        echo "Missing number is: " . $var;

	*/