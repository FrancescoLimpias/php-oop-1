<?php

// Classes
require __DIR__ . "/Models/Movie.php";
require __DIR__ . "/Models/MovieLibrary.php";

// "DB" creation
$myMovies = new MovieLibrary("Francesco");
$myMovies->add(new Movie("Cars", 2006, "Pixar"));
$myMovies->add(new Movie("Cars 2", 2011, "Pixar"));
$myMovies->add(new Movie("Wall-E", 2008, "Pixar"));

var_dump($myMovies);
echo "<br>-----------------------------<br>";

// Movie fetch
$CarsMovie = $myMovies->getMoviesByTitle("Cars")[0];
echo $CarsMovie->getFullID();
echo "<br>-----------------------------<br>";

// Movie add genre
$CarsMovie->addGenre(new Genre("animation"));
$CarsMovie->addGenre(new Genre("adventure"));
$CarsMovie->addGenre(new Genre("racing"));
echo $CarsMovie->printGenres(",");