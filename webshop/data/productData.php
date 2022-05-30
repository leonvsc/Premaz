<?php
require_once "database.php";

class productData
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getProductData($productName, $productPrice)
    {
        $sql = "SELECT Price FROM `Products` WHERE Product =`{$productName}` and Price =`{$productPrice}` LIMIT 1;";
        $stmt = $this->db->connect()->prepare($sql);

        $result = $stmt->execute();

        while ($stmt->fetch($result)) {
            return true;
        }
    }

    public function productInsert($productmodel)
    {
        $SKU = $productmodel->getSKU();
        $price = $productmodel->getPrice();
        $stock = $productmodel->getStock();
        $category = $productmodel->getCategory();
    }
}