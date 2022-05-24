<?php
require_once "database.php";

class productData
{
    private $db;

    public function __construct()
    {
        $this->db = new databae();
    }

    public function getProductData($productName, $productPrice)
    {
        $sql = "SELECT Price FROM `Products` LIMIT 1;";

        $result = mysqli_query($this->db->connect(), $sql);

        while (mysqli_fetch_array($result)) {
            return true;
        }
    }
}