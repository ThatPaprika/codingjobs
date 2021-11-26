<?php

class Movie
{
    private $id;
    private $title;
    private $date_of_release;
    private $poster;
    private $director_id;

    // Getters 
    public function get_id()
    {
        return $this->id;
    }

    public function get_title()
    {
        return $this->title;
    }

    public function get_date()
    {
        return $this->date_of_release;
    }

    public function get_poster()
    {
        return $this->poster;
    }

    public function get_director()
    {
        return $this->director_id;
    }
}
