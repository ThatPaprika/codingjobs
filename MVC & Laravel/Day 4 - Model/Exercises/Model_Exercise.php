<?php

/*

Get back to our online books website.
You should improve your project using Eloquent model.

Don't worry, basics are really easy.

Just follow the steps.
For step3, you can check the doc here : https://laravel.com/docs/8.x/eloquent

Exercise : 

    Now we will try to implement model on our Library.

    - Step 1 :
		
		Run the command : 'php artisan make:model book'
		A book Model has been created. You can find it in 'app/Models/book.php'.
		
		This model will be automatically linked to our database.
		To do this, Eloquent use "snake case", plural name of the class will be used as the table name.
		If you want to use another name, add this property to the model : 
			protected $table = 'my_table';
		Eloquent will also assume that each table has a primary key column named id.
		If you want to use another column name for primary key, add this property : 
			protected $primaryKey = 'my_id';

     - Step 2 :
		Let's edit our book controller !
		The controller should ask the eloquent model for datas that he needs.
		1. Edit the index() method.
		Remove the SELECT query and replace it by this : $books = book::all();
		Add, on top of the file, this : 'use App\Models\book;'
		Program should still works at this point.
        
	- Step 3 : 
		You'll find all informations here : https://laravel.com/docs/8.x/eloquent
		
		Change every method of your controller that uses Raw SQL Queries.
		Now you should use Eloquent model to :
			- Get all the books
			- Get a specific book
			- Create a new book
			- Edit an existing book
			- Delete a book	
   
