<?php
require_once "../data/shoppingCartData.php";
require_once "crudController.php";

// Een klasse voor de controller van shoppingCart. Hier wordt gebruikt gemaakt van de interface ICrudController om deze klasse verplichte functies te geven.
class shoppingCartController implements ICrudController
{
    private $data;

    public function __construct()
    {
        $this->data = new shoppingCartData();
    }

    // Een methode om de create functie in de data file op te roepen.
    public function create($data)
    {
        return $this->data->create($data);
    }

    // Een methode om de getAll functie in de data file op te roepen.
    public function readAll()
    {
    }

    // Een methode om de getById functie in de data file op te roepen.
    public function read($id)
    {
    }

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
