<?php

// Een klasse met een model voor product. Hier bevinden alle methodes met getters en setters.
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

    public function setSKU($SKU)
    {
        $this->SKU = $SKU;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }
}
