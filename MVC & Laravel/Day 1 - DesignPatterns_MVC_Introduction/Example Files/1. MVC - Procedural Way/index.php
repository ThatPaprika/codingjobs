<?php

/*

    ROUTEUR - FRONT CONTROLLER

    It will handle every requests from the user.
    Depending on the request, it will call the 'proper' controller.

    For example : 
        - If you want to display all movies, the routeur will call the MovieController.
        - If you want to retrieve informations about logued in user, the routeur will call the UserController.
    
    Example of URL :    
        localhost/my_project/index.php?page=movies
        localhost/my_project/index.php?page=movies&id=5
        localhost/my_project/index.php?page=contact

*/

// Check if I there is a request
if (isset($_GET['page'])) {

    // Movies request
    if ($_GET['page'] == 'movies') {
        require_once './Controller/MovieController.php';

        if (isset($_GET['id'])) {
            handle_movie($_GET['id']);
        } else {
            handle_movies();
        }
    }
} else {
    echo 'Home page';
}
