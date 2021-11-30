<?php

/*

Get back to our Library.

You should improve your project using validations ! 

Resource : https://laravel.com/docs/8.x/validation

Step 1 :

    When the create form is submitted, you have to check :
        - title is required, max 30 characters
        - price is required and have to be numeric between 2 and 100€
    
    Error messages should be display in red;
    
    Implements validations on the EDIT form also.

Step 2 : 

    For this step, you have to read this section : https://laravel.com/docs/8.x/validation#form-request-validation

    You should customize the error message.
    If the title is empty, you should display 'Title is mandatory !'
    If the price is not a numeric value OR is not between 2 and 100 it should display 'Price must be numeric between 2 and 100e'