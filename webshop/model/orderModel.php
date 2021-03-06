<?php
require_once 'shippingAddressModel.php';
require_once 'customerModel.php';
require_once 'shoppingCartModel.php';

// Een klasse met een model voor order. Hier bevinden alle methodes met getters en setters.
class orderModel
{
    private $orderNumber;
    private shippingAddressModel $shippingAddress;
    private customerModel $customer;
    private shoppingCartModel $shoppingCart;
    private $orderStatus;
    private $orderDate;
    private $totalPrice;

    public function __construct($orderNumber, shippingAddressModel $shippingAddress, customerModel $customer, shoppingCartModel $shoppingCart, $orderStatus, $orderDate, $totalPrice)
    {
        $this->orderNumber = $orderNumber;
        $this->shippingAddress = $shippingAddress;
        $this->customer = $customer;
        $this->shoppingCart = $shoppingCart;
        $this->orderStatus = $orderStatus;
        $this->orderDate = $orderDate;
        $this->totalPrice = $totalPrice;
    }

    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function getShoppingCart()
    {
        return $this->shoppingCart;
    }

    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    public function getOrderDate()
    {
        return $this->orderDate;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    public function setShippingAddress(shippingAddressModel $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    public function setCustomer(customerModel $customer)
    {
        $this->customer = $customer;
    }

    public function setShoppingCart(shoppingCartModel $shoppingCart)
    {
        $this->shoppingCart = $shoppingCart;
    }

    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
    }

    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }
}
