<?php

class MovieController
{
    private $model;

    public function __construct()
    {
        require_once 'Model/MovieModel.php';
        $this->model = new MovieModel();
    }

    public function handleMovies()
    {
        //1. Ask the model the movies list
        $movies = $this->model->getMovies();

        //2. Check/Do the validations
        if (count($movies) == 0) {
            $msg = 'No movies found.';
            require_once 'View/ErrorView.php';
        } else {
            //3. Pass movies list to the view
            require_once 'View/MovieView.php';
        }
    }

    public function handleMovie($id)
    {
        //1. Ask the model
        $movie = $this->model->getMovie($id);

        //2 Check / Do the validations
        if (!$movie) {
            $msg = 'No movie found with this id.';
            require_once 'View/ErrorView.php';
        } else {
            require_once 'View/MovieDetailView.php';
        }
    }
}
