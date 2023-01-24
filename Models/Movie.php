<?php

class Movie
{

    // movie id
    public $title;
    public $release_year;
    public $production;

    // movie properties
    public $duration;
    public $genres;
    public $cast;
    public $score;

    // constructor
    public function __construct($title, $release_year, $production)
    {
        $this->title = $title;
        $this->release_year = $release_year;
        $this->production = $production;
    }

    // properties
    public function getFullID()
    {
        return $this->title . " (" . $this->release_year . ")";
    }

    public function addGenre($genre)
    {
        if (!in_array($genre, $this->genres)) {
            $this->genres[] = $genre;
        }
    }

    public function getGenres($divider)
    {
        $genresList = "";
        foreach ($this->genres as $genre) {
            $genresList .= $genre;
            if (!is_null($divider)) {
                $genresList .= $divider;
            }
            $genresList .= " ";
        }
        return $genresList;
    }

    // utilities
    public function wasReleasedIn($year)
    {

        // Check if property has been set
        if (is_null($this->release_year)) {
            return null;
        }

        // Compare years
        return $this->release_year == $year;
    }
}
