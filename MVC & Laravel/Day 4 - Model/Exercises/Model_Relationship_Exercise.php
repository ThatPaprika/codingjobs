<?php

/*

Get back to our online Library app.

For this exercise you might need to use relationship doc : https://laravel.com/docs/8.x/eloquent-relationships
    
    - Step 1 :

        Reminder about DB Structure.

        Table authors should follow this structure :
			id
			first_name 
			last_name
        
        Table books should follow this  : 
            id
            title
            price
            author_id

        If you don't match this, run the migrations (php artisan migrate:refresh)

    - Step 2 :

        In your DB, make sure to create some books along with some authors.

	- Step 3 :

        Create a model for Author thanks to the command line make:model

    - Step 4 : 

		On the book detail page, add a section below to display the author name.

        To do that, you need to implement this code on the book model : 

            public function author()
            {
                return $this->belongsTo(Author::class);
            }

        For more detail, check this link : https://laravel.com/docs/8.x/eloquent-relationships#one-to-many
        Section one-to-many

    - Step 5 :
            
            You should now be able to display the author on the page.
            To do that, head to the detail view because we need to edit this file.

            For this, check the doc section one-to-many.
            Easy to find.

    - Step 6 : 

        Create a page to display all the authors (you will have to create a new route, controller and view).

        Once you displayed the author, we'll try to display all the books (for each author).
        To do that, you need to implement this code on the author model : 

            public function books()
            {
                return $this->hasMany(Book::class);
            }

        Now, you should be able to display all the books for each author (on the same page).

*/