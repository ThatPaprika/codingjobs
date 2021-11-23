<?php 

/*

	Exercise 2 :

	A train company wants a program to deal with their trains schedule.
	You have to create a class named 'Train' to help them track their trains.
	The 'Train' class have the following properties :
		- id (integer)
		- departure_time (timestamp)
		- arrive_time (timestamp)
		- delay (integer - seconds)
	

	- Part 1 :

		Create the getters/setters to match the properties.
		In the setter of id, make sure it's an integer before setting it.

	- Part 2 :

		Create a constructor to instantiate the class.
		By default, delay is 0.

	- Part 3 :

		Create a getTime() method.
		This method will display the departure time of the train in green.

		Of course, a train have one chance out of two to have a delay.
		You should calcule the probability inside this method.
		If there is a delay, you should print the departure time of the train + delay in red.

	- Part 4 :
		
		In a new file, create an array of trains for the morning.
		Now try to loop throught this array and try to get the departure time for each train.

		You can use this block of code at the end : 
*/

foreach($trains as $train) {
	$train->getTime();	
}

 ?>