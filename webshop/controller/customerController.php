<?php
require_once "../data/customerData.php";
require_once "crudController.php";

// Een klasse voor de controller van customer. Hier wordt gebruikt gemaakt van de interface ICrudController om deze klasse verplichte functies te geven.
class customerController implements ICrudController
{
    private $data;

    public function __construct()
    {
        $this->data = new customerData();
    }

    // Een methode om de create functie in de data file op te roepen.
    public function create($data)
    {
    }

    // Een methode om de getAll functie in de data file op te roepen.
    public function readAll()
    {
        return $this->data->getAll();
    }

    // Een methode om de getById functie in de data file op te roepen.
    public function read($id)
    {
        return $this->data->getById($id);
    }

    // Een methode om de getByEmail functie in de data file op te roepen.
    public function readByEmail($email)
    {
        return $this->data->getByEmail($email);
    }

    // Een methode om de update functie in de data file op te roepen.
    public function update($id, $data)
    {
    }

    // Een methode om de delete functie in de data file op te roepen.
    public function delete($id)
    {
    }
}
