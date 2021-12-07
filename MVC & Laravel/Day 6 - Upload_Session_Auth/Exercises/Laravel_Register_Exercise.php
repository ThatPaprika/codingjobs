<?php

/*

Based on the Library project.

Step 1 :
    Create a 'user' table.
    You can use migrations(best practice) or directly edit your DB in phpmyadmin.

    User table have those attributes :
        id(primary key ai)
        username (varchar)
        poster (varchar)
        mail (varchar)
        password (varchar)

Step 2 :
    Create a '/register' route.
    This route should display a form to create a new user.

    All inputs are mandatory (username, poster, mail and password).

Step 3 :
    Create a '/register' route using post method.
    This route should be used when submitting the form.

    It should do all validations and insert in the DB.

    To insert, create a 'CustomUser' model to be able to insert using Eloquent.

Step 4 : 
    Edit your 'CustomUser' model.
    It should now use a mutator to hash the password before saving into the db.



    */