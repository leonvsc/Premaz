<?php

require_once 'productModel.php';
require_once 'shoppingCartModel.php';

class CartItemModel{
    private $cartItemId;
    private ShoppingCartModel $shoppingCart;
    private ProductModel $product;
    private $quantity;

    public function __construct($cartItemId, ShoppingCartModel $shoppingCart, ProductModel $product, $quantity){
        $this->cartItemId = $cartItemId;
        $this->shoppingCart = $shoppingCart;
        $this->product = $product;
        $this->quantity = $quantity;
    }
}
