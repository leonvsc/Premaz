<?php

require_once 'productModel.php';
require_once 'shoppingCartModel.php';

// Een klasse met een model voor cartItem. Hier bevinden alle methodes met getters en setters.
class CartItemModel
{
    private $cartItemId;
    private ShoppingCartModel $shoppingCart;
    private ProductModel $product;
    private $quantity;

    public function __construct($cartItemId, ShoppingCartModel $shoppingCart, ProductModel $product, $quantity)
    {
        $this->cartItemId = $cartItemId;
        $this->shoppingCart = $shoppingCart;
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getCartItemId()
    {
        return $this->cartItemId;
    }

    public function getShoppingCart()
    {
        return $this->shoppingCart;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setCartItemId($cartItemId)
    {
        $this->cartItemId = $cartItemId;
    }

    public function setShoppingCart(ShoppingCartModel $shoppingCart)
    {
        $this->shoppingCart = $shoppingCart;
    }

    public function setProduct(ProductModel $product)
    {
        $this->product = $product;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}
