<?php
class Movies {
  public $title;
  public $year;
  public $categorie;
  public $language;

  function __construct($_title, $_year, $_categorie, $_language) {
    $this->title = $_title;
    $this->year = $_year;
    $this->categorie = $_categorie;
    $this->language = $_language;
  }

  public function getMovieInfo() {
    echo "-il titolo è: {$this->title}&nbsp-"; 
    echo "la categoria è: {$this->categorie}&nbsp-"; 
    echo "la lingua è: {$this->language}"; 
}
}
