<?php
require "../data/orderData.php";

class orderController
{
    private $data;

    public function __construct()
    {
        $this->data = new orderData();
    }

    public function getOrders()
    {
        var_dump($this->data->getAllOrders());
    }
}
