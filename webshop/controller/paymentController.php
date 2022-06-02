<?php
require_once "../data/paymentData.php";

// Een klasse voor de controller van payment. Hier wordt gebruikt gemaakt van de interface ICrudController om deze klasse verplichte functies te geven.
class paymentController implements ICrudController
{
    private $data;

    public function __construct()
    {
        $this->data = new paymentData();
    }

    // Een methode om de create functie in de data file op te roepen.
    public function create($data)
    {
    }

    // Een methode om de getAll functie in de data file op te roepen.
    public function readAll()
    {
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
    }
}
