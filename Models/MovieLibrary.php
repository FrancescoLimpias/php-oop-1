<?php

class MovieLibrary
{

    public $owner;
    public $movies;

    // Constructor
    public function __construct($owner)
    {
        $this->owner = $owner;
        $this->movies = [];
    }

    // Properties
    public function add(Movie $movie)
    {
        $this->movies[] = $movie;
    }

    public function getMoviesByTitle($title)
    {
        return array_filter(
            $this->movies,
            function ($movie) use ($title) {
                return $movie->title == $title;
            }
        );
    }
}
