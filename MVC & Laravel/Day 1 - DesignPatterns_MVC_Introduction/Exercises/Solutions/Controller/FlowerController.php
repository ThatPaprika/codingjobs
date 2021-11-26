<?php

class FlowerController
{
    private $model;

    public function __construct()
    {
        require_once 'Model/FlowerModel.php';
        $this->model = new FlowerModel();
    }

    // Handle request to see all flowers
    public function handle_flowers()
    {
        //1. Ask the model the flowers list
        $flowers = $this->model->get_flowers();

        //2. Check/Do the validations
        if (count($flowers) == 0) {
            $msg = 'No flowers found.';
            require_once 'View/ErrorView.php';
        } else {
            //3. Pass flowers list to the view
            require_once 'View/FlowerView.php';
        }
    }

    // Handle request to see one specific flower
    public function handle_flower($id)
    {
        //1. Ask the model
        $flower = $this->model->get_flower($id);

        //2 Check / Do the validations
        if (!$flower) {
            $msg = 'No flower found with this id.';
            require_once 'View/ErrorView.php';
        } else {
            require_once 'View/FlowerDetailView.php';
        }
    }

    // show the form to inser flower
    public function create_flower()
    {
        require_once 'View/NewFlowerView.php';
    }

    // insert new flower
    public function store_flower()
    {
        //1. Ask the model to insert
        $result = $this->model->insert_flower($_POST);

        if ($result)
            echo 'Insert successfull !';
        else
            echo 'Problem when inserting';
    }
}
