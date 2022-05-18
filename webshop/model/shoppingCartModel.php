<?php

class shoppingCartModel
{
    private $shoppingCartID;
    private customerModel $customer;
    private $totalPrice;

    public function __construct($shoppingCartID, customerModel $customer, $totalPrice)
    {
        $this->shoppingCartID = $shoppingCartID;
        $this->customer = $customer;
        $this->totalPrice = $totalPrice;
    }
}
