<?php

class productModel
{
    private $SKU;
    private $price;
    private $stock;
    private $category;

    public function __construct($SKU, $price, $stock, $category)
    {
        $this->SKU = $SKU;
        $this->price = $price;
        $this->stock = $stock;
        $this->category = $category;
    }
}
