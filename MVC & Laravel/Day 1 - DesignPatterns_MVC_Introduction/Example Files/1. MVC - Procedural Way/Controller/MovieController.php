<?php

function handle_movies()
{
    require_once './Model/MovieModel.php';

    // Controller ask model for the data, analyze it, and make decisions.
    $movies = all_movies();


    if (count($movies) > 0)
        require_once './View/MovieView.php';
    else {
        $msg = 'No movies found.';
        require_once './View/ErrorView.php';
    }
}

function handle_movie($id)
{
    require_once './Model/MovieModel.php';

    // Controller ask model for the data, analyze it, and make decisions.
    $movie = get_movie($id);

    if ($movie)
        require_once './View/MovieDetailView.php';
    else {
        $msg = 'No movies found.';
        require_once './View/ErrorView.php';
    }
}
