<?php

// Een klasse met een model voor shoppingCart. Hier bevinden alle methodes met getters en setters.
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

    public function getShoppingCartID()
    {
        return $this->shoppingCartID;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    public function setShoppingCartID($shoppingCartID)
    {
        $this->shoppingCartID = $shoppingCartID;
    }

    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }
}
