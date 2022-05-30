<?php
require "../data/productData.php";

class productController
{
    private $data;

    public function __construct()
    {
        $this->data = new productData();
    }

    public function GetItem($productName, $productPrice)
    {
        if ($this->data->getProductData($productName, $productPrice)) {
            session_start();
            $_SESSION["productName"] = $productName;
            header("Location: ../view/index.php");
        } else {
            echo "Could not get product";
        }
    }
}