<?php
require "../data/orderData.php";
require "crudController.php";

// Een klasse voor de controller van order. Hier wordt gebruikt gemaakt van de interface ICrudController om deze klasse verplichte functies te geven.
class orderController implements ICrudController
{
    private $data;

    public function __construct()
    {
        $this->data = new orderData();
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
        return $this->data->getById($id);
    }

    // Een methode om de getAllByCustomerNumber functie in de data file op te roepen.
    public function readByCustomerNumber($customerNumber)
    {
        return $this->data->getAllByCustomerNumber($customerNumber);
    }

    // Een methode om de update functie in de data file op te roepen.
    public function update($id, $data)
    {
        return $this->data->update($id, $data);
    }

    // Een methode om de delete functie in de data file op te roepen.
    public function delete($id)
    {
        return $this->data->delete($id);
    }
}
