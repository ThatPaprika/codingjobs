<?php


/*

    Based on the Library exercise.
	
	Each user have a specific role.
	A role can be two different things : admin or regular user (1 or 0).

	Step 1 : 

	    Create a route '/users', a UserController and a view 'users-list.blade.php'
	    This route will display all the users.

	    It should display first_name, last_name, mail and if it's an admin (or not).

	Step 2 :

		Create a route '/users/{id}/account'
		This route will display the account/summary page of the current user.

	Step 3 :

		Edit the 'users-list' view.
		For each user, display a link 'account' that redirects to the matching account page.


	Step 4 :

		Only the admins have access to thoses routes '/users' and '/users/{id}/account'
		