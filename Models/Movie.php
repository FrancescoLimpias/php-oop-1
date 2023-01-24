<?php

class Movie
{

    // movie id
    public $title;
    public $release_year;
    public $production;

    // movie properties
    public $duration;
    public $categories;
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
