<?php

ini_set('display_errors', '1');

// Check if there is a request
if (isset($_GET['page'])) {

    // Only accept valid request
    if ($_GET['page'] == 'flowers') {
        // Call flower controller
        require_once 'Controller/FlowerController.php';
        $flowerCtrl = new FlowerController();

        // Check if I get an id
        if (isset($_GET['id']))
            $flowerCtrl->handle_flower($_GET['id']);
        else
            $flowerCtrl->handle_flowers();
    } else if ($_GET['page'] == 'new-flower') {
        require_once 'Controller/FlowerController.php';
        $flowerCtrl = new FlowerController();

        // Was the form submitted ?
        if (!isset($_POST['submitBtn']))
            $flowerCtrl->create_flower();
        else
            $flowerCtrl->store_flower();
    } else {
        $msg = 'Page doesnt exists';
        require_once 'View/ErrorView.php';
    }
} else {
    require_once 'View/HomeView.php';
}
