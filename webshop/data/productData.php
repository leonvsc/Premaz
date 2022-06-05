<?php

require_once "exceptions.php";
require_once 'database.php';
require_once 'crudData.php';
require_once "../model/productModel.php";

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
        $sql = "SELECT * FROM Products;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $productArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($productArray);
    }

    // Methode om alle data binnen te halen van de tabel product gefiltert op de primary key (SKU).
    public function getById($id)
    {
        $sql = "SELECT Price, Category, Stock, SKU FROM `Products` WHERE SKU = :SKU LIMIT 1;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['SKU' => $id]);
        $productArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($productArray);
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
        $productArray = [];
        foreach ($object as $product) {
            $productArray[] = new productModel(
                $product['SKU'],
                $product['Price'],
                $product['Stock'],
                $product['Category']
            );
        }

        return $productArray;
    }
}
