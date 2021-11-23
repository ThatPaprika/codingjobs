<?php

class Movie implements JsonSerializable
{
  private $title;
  private $release_year;

  public function __construct($title, $release_year)
  {
    $this->title = $title;
    $this->release_year = $release_year;
  }

  // Override the method from JsonSerializable
  public function jsonSerialize()
  {
    return [
      "title" => $this->title
    ];
  }
}
