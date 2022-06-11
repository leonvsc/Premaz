<?php
require_once "../data/searchData.php";
require_once "crudController.php";

// Een klasse voor de controller van product. Hier wordt gebruikt gemaakt van de interface ICrudController om deze klasse verplichte functies te geven.
class searchController implements ICrudController
{
    private $data;

    public function __construct()
    {
        $this->data = new searchData();
    }

    // Een methode om de create functie in de data file op te roepen.
    public function create($data)
    {
        return $this->data->create($data);
    }

    // Een methode om de getAll functie in de data file op te roepen.
    public function readAll()
    {
        return $this->data->getAll();
    }

    // Een methode om de getById functie in de data file op te roepen.
    public function read($id)
    {
    }

    // Een methode om de update functie in de data file op te roepen.
    public function update($id, $data)
    {
    }

    // Een methode om de delete functie in de data file op te roepen.
    public function delete($id)
    {
        return $this->data->delete($id);
    }
}
