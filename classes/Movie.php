<?php

class Movie{
    private $name;
    private $year;
    private $genres = [];


    public function __construct($_name, $_year, $_genres){
        $this->name = $_name;
        $this->year = $_year;
        $this->genres = $_genres;
    }

    public function getName(){
        return $this->name;
    }

    public function getYear(){
        return $this->year;
    }

    public function getGenre($movie){
        $genre = "";
        foreach($movie->genres as $element){
            $genre .= " $element;";
        }
        return $genre;
    }
}



 