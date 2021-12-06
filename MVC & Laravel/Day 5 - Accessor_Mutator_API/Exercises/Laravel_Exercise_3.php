<?php

/*

Let's continue our Library project.

Step 1 :

	Create a form to login. This form should ask for : email and password.

Step 2 : 
	
	Once you submit the form, it should save the email in the session.
	You don't have to check if the email exists in the DB or anything like this.
	Just save it to the session.

	To save email in the session : session(['key' => 'value']);

Step 3 : 

	Apply the EnsureUserIsLoggedIn middleware on the 'books/create' and '/books/edit' routes.
	It should redirect to login page if the email is not in the session

*/