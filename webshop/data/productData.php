<?php
require_once "database.php";

class productData
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getProductData($SKU)
    {
        $sql = "SELECT Price, Product, Category, Stock, SKU FROM `Products` WHERE SKU = :SKU LIMIT 1;";
        $stmt = $this->db->connect()->prepare($sql);

        $stmt->execute(['SKU' => $SKU]);
        $productsArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // public function productInsert($productmodel)
    // {
    //     $SKU = $productmodel->getSKU();
    //     $price = $productmodel->getPrice();
    //     $stock = $productmodel->getStock();
    //     $category = $productmodel->getCategory();
    // }
    
    public function getData($sku){
        $sql = "SELECT * FROM Products where SKU = :sku;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['sku' => $sku]);
        $orderArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
