<?php

class Movie
{
  public $title;
  public $release_year;

  public function __construct($title, $release_year)
  {
    $this->title = $title;
    $this->release_year = $release_year;
  }
}
