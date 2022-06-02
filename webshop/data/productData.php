<?php

// Klasse voor alle SQL van product. Hier wordt gebruikt gemaakt van de interface ICrudData om deze klasse verplichte functies te geven.
class productData implements ICrudData
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    // Methode om alle data binnen te halen van de tabel product.
    public function getAll()
    {
    }

    // Methode om alle data binnen te halen van de tabel product gefiltert op de primary key (SKU).
    public function getById($id)
    {
    }

    // Methode om een nieuwe regel aan data te creeren in de tabel product.
    public function create($data)
    {
    }

    // Methode om een regel aan data te updaten in de tabel product.
    public function update($id, $data)
    {
    }

    // Methode om een regel aan data te deleten in de tabel product.
    public function delete($id)
    {
    }

    // Methode om van de associative array een array van de juiste modellen te maken.
    public function arrayToModelArray($object)
    {
    }
}
