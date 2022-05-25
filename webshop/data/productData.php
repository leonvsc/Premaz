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
        $sql = "SELECT Price FROM `Products` LIMIT 1;";

        $result = $stmt->execute();

        while ($stmt->fetch($result)) {
            return true;
        }
    }
}