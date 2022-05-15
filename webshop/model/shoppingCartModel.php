<?php

class shoppingCartModel
{
    private $shoppingCartID;
    private $totalPrice;

    public function __construct($shoppingCartID, $totalPrice)
    {
        $this->shoppingCartID = $shoppingCartID;
        $this->totalPrice = $totalPrice;
    }
}
