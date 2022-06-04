<?php
require_once "customerData.php";
require_once "../model/shoppingCartModel.php";
require_once "exceptions.php";

// Klasse voor alle SQL van shoppingCart. Hier wordt gebruikt gemaakt van de interface ICrudData om deze klasse verplichte functies te geven.
class shoppingCartData implements ICrudData
{
    private $db;
    private $customerData;

    public function __construct()
    {
        $this->db = new database();
        $this->customerData = new customerData();
    }

    // Methode om alle data binnen te halen van de tabel shoppingCart.
    public function getAll()
    {
    }

    // Methode om alle data binnen te halen van de tabel shoppingCart gefiltert op de primary key (ShoppingCartID).
    public function getById($id)
    {
        $sql = "SELECT * FROM ShoppingCarts WHERE ShoppingCartID = :ShoppingCartID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['ShoppingCartID' => $id]);
        $shoppingCartArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($shoppingCartArray);
    }

    // Methode om een nieuwe regel aan data te creeren in de tabel shoppingCart.
    public function create($data)
    {
    }

    // Methode om een regel aan data te updaten in de tabel shoppingCart.
    public function update($id, $data)
    {
    }

    // Methode om een regel aan data te deleten in de tabel shoppingCart.
    public function delete($id)
    {
    }

    // Methode om van de associative array een array van de juiste modellen te maken.
    public function arrayToModelArray($object)
    {
        if (count($object) > 1) {
            $scArray = [];
            foreach ($object as $sc) {
                $scArray[] = new shoppingCartModel(
                    $sc['ShoppingCartID'],
                    $this->customerData->getById($sc['CM_CustomerNumber'])[0],
                    $sc['TotalPrice']
                );
            }
            return $scArray;
        }

        return new shoppingCartModel(
            $object['ShoppingCartID'],
            $this->customerData->getById($object['CM_CustomerNumber'])[0],
            $object['TotalPrice']
        );
    }
}
