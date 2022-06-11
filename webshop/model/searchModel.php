<?php

// Een klasse met een model voor search. Hier bevinden alle methodes met getters en setters.
class searchModel
{
    private $searchTermID;
    private $searchTerm;

    public function __construct($searchTermID, $searchTerm)
    {
        $this->searchTermID = $searchTermID;
        $this->searchTerm = $searchTerm;
    }

    public function getSearchTermID()
    {
        return $this->searchTermID;
    }

    public function getSearchTerm()
    {
        return $this->searchTerm;
    }

    public function setSearchTermID($searchTermID)
    {
        $this->searchTermID = $searchTermID;
    }

    public function setSearchTerm($searchTerm)
    {
        $this->searchTerm = $searchTerm;
    }
}
