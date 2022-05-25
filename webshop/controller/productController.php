<?php
require "../data/productData.php";

class productController
{
    private $data;

    public function __construct()
    {
        $this->data = new productData();
    }
}