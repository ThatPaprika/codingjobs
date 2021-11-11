<?php

if (!empty($_POST)) {
    // by default, no errors
    $errors = array();

    // title, views and director_id are mandatory
    if (empty($_POST['title']))
        $errors['title'] = 'Title is mandatory<br>';

    if (empty($_POST['views']))
        $errors['views'] = 'Views is mandatory<br>';

    if (empty($_POST['director_id']))
        $errors['director_id'] = 'Director id is mandatory<br>';


    // Insert only if no errors
    if (empty($errors)) {

        // Make my life easier with the query
        $title = $_POST['title'];
        $views = $_POST['views'];
        $director_id = $_POST['director_id'];
        $poster = $_POST['poster'];
        $id = $_POST['id'];

        // 1. Connect to my DB
        $conn = mysqli_connect('localhost', 'root', '', 'movie_db');
        $query = "UPDATE movies
        SET title = '$title', views = '$views', director_id = $director_id, poster = '$poster'
        WHERE id = $id;";

        // 2. Execute the query
        $result = mysqli_query($conn, $query);

        // INSERT/UPDATE/DELETE returns true OR false
        if ($result)
            echo '<span style="color:green">Successfully updated in the DB</span>';
        else
            echo '<span style="color:red">Problem updating in the DB</span>';
    } else {
        foreach ($errors as $errorMsg) {
            echo '<span style="color:red">' . $errorMsg . '</span>';
        }
    }
}
