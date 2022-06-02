<?php
require "../data/productData.php";

class productController
{
    private $data;

    public function __construct()
    {
        $this->data = new productData();
    }

    public function GetItem($SKU)
    {
        if ($this->data->getProductData($SKU)) {
            session_start();
            $_SESSION["SKU"] = $SKU;
            header("Location: ../view/index.php");
        } else {
            echo "Could not get SKU";
        }
    }
}