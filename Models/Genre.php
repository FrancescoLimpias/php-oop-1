<?php

class Genre
{

    // Genre name
    public $name;

    // Genre constructor
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Genre properties
    public function getName()
    {
        return $this->name;
    }
}
