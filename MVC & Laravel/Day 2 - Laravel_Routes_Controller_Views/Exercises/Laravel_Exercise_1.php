<?php 

/*

	We have an online book website.

	- Step 1 : 

		Create a new database with the table books.
		This table should contain : id (int), title (varchar), price (double)
	
	- Step 2 :
		
		Create a new Laravel project or use an old one.
		You have to create a navigation menu that will be display on every pages.

	- Step 3 :

		In Laravel, you have to create the route to show all the books.
		Route should looks like this : '/books'.

		/!\ You have to use a controller with the --resource flag.
		/!\ You can use the bookController in example files. 

		Don't forget to put the navigation menu on this page!

	- Step 4 :

		Insert a new book.
		First, create a route using get method '/books/create' that display a form with all the mandatory fields.
		
		The form have to use post method.
		
		Create a second route using post method '/books/create'.
		This route should be call when submitting the form and it should be responsible for inserting the books in the DB.

	- Step 5 :

		Update an existing book.
		First, create a route '/books/update/{id}'
		It should display a page that contains a form with all the fields (the fields should be filled with data from the book).

		When form submitted it will use post method and update the book in the DB.

	- Step 6 :
		
		Edit the page that shows all the books.
		Now, for each book, there is a link to 'edit' the book.

	- Step 7 :
	
		Edit the route that shows all the books.
		Now, for each book, there is a link to 'delete' the book.
		This link should target the route to delete '/books/delete/{id}'
		
		Inside the destroy method of your controller you should :
			1. Delete the book.
			2. Redirect to books page.

 ?>

