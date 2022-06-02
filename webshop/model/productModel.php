<?php

class productModel
{
    private $SKU;
    private $price;
    private $stock;
    private $category;

    public function __construct($SKU, $price, $stock, $category, $product)
    {
        $this->SKU = $SKU;
        $this->price = $price;
        $this->stock = $stock;
        $this->category = $category;
        $this->product = $product;
    }

    public function getSKU()
    {
        return $this->SKU;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getProduct()
    {
        return $this->product;
    }
}
