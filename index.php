<?php
// Definizione della classe 'Movie'
class Movie
{
  // Dichiarazione di variabili d'istanza
  public $title;
  public $genre;
  public $releaseYear;
  // Costruttore
  public function __construct($title, $genre, $releaseYear)
  {
    $this->title = $title;
    $this->genre = $genre;
    $this->releaseYear = $releaseYear;
  }
  // Metodo all'interno della classe
  public function displayInfo()
  {
    return "Title: {$this->title}, Genre: {$this->genre}, Release Year: {$this->releaseYear}";
  }
}
