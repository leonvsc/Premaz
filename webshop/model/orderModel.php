<?php
require_once 'shippinggAddressModel.php';
require_once 'paymentModel.php';
require_once 'customerModel.php';
require_once 'ShoppingCartModel.php';

class orderModel
{
    private $orderNumber;
    private shippingAddressModel $shippingAddress;
    private customerModel $customer;
    private paymentModel $payment;
    private shoppingCartModel $shoppingCart;
    private $trackAndTrace;
    private $orderStatus;
    private $orderDate;

    public function __construct($orderNumber, shippingAddressModel $shippingAddress, customerModel $customer, paymentModel $payment, shoppingCartModel $shoppingCart, $trackAndTrace, $orderStatus, $orderDate)
    {
        $this->orderNumber = $orderNumber;
        $this->shippingAddress = $shippingAddress;
        $this->customer = $customer;
        $this->payment = $payment;
        $this->shoppingCart = $shoppingCart;
        $this->trackAndTrace = $trackAndTrace;
        $this->orderStatus = $orderStatus;
        $this->orderDate = $orderDate;
    }
}
