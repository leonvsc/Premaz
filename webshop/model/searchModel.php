<?php

// Een klasse met een model voor search. Hier bevinden alle methodes met getters en setters.
class searchModel
{
    private $searchTerm;

    public function __construct($searchTerm)
    {
        $this->searchTerm = $searchTerm;
    }

    public function getSearchTerm()
    {
        return $this->searchTerm;
    }

    public function setSearchTerm($searchTerm)
    {
        $this->searchTerm = $searchTerm;
    }
}
