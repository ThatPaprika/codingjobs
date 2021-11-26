<?php

/*

******* Exercise : Flower Website ********

In the Flowers table, we will record: The id, the name of the flower, the price.

Step 1 : 
    - Create a HomeView that displays a welcome message and will display links to the different views later on.
    - Create a index page (ROUTEUR) that display the HomeView if there was no specific page ask by the user.

Step 2 : 
    - Create a FlowerModel that is able to retrieve all the flowers.
    - Create a FlowerController that ask for this list of flowers and pass it to a view.
    - Create a view where you display the list of flowers (display Name and price). With a link 'read more'.
    This link will bring you to the detail view of the flower (cf Step 3).
    - You have to take care of the request in the ROUTEUR

Step 3 : 
    - FlowerModel must now be able to retrieve a specific flower (based on the id)
    - FlowerController must be able to ask the model for this specific flower and pass data to the view.
    - Create a view where you display the detail of a specific flower.
    - Take care of the request in the ROUTEUR

Step 4 : 
    - Create a view 'NewFlowerView'. This view must display a form asking for name and price
    - Create another method inside the FlowerController to display that form
    - Take care of the request in the ROUTEUR

Step 5 : 
    - FlowerModel must now be able to insert a new flower.
    - FlowerController must check the input coming from the form and ask the model to insert if everything is ok.
    - Take care of the request in the ROUTEUR (it's the same as Step 4 BUT using POST method)


You must use MVC and OOP !!

You have to create a FlowerController that ask the FlowerModel to return the flowers !
Everything will be display in the Views.

Tips : 
To access the different views, it should looks like this :
    homeview : localhost/flower_exercise/
    flowers view : localhost/flower_exercise/?view=flowers
    flower detail view : localhost/flower_exercise/?view=flowers&id=1
    insert flower : localhost/flower_exercise/?view=new-flower