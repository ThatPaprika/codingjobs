<?php

// Check if there is a request
if (isset($_GET['page'])) {

    // Only accept valid request
    if ($_GET['page'] == 'movies') {
        // Call movie controller
        require_once 'Controller/MovieController.php';
        $movieCtrl = new MovieController();

        // Check if I get an id
        if (isset($_GET['id']))
            $movieCtrl->handleMovie($_GET['id']);
        else
            $movieCtrl->handleMovies();
    } else if ($_GET['page'] == 'new-movie') {
        // Did I click the form ?
        if(isset($_POST['subBtn'])) {
            //insert
        } else {
            // display form view
        }

    } else {
        $msg = 'Page doesnt exists';
        require_once 'View/ErrorView.php';
    }
} else {
    require_once 'View/HomeView.php';
}
