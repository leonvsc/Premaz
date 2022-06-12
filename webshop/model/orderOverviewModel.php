<?php

require_once  "customerModel.php";

// Een klasse met een model voor orderOverview. Hier bevinden alle methodes met getters en setters.
class orderOverviewModel
{
    private $orderNumber;
    private customerModel $customer;
    private $orderStatus;
    private $orderDate;

    public function __construct($orderNumber, customerModel $customer, $orderStatus, $orderDate)
    {
        $this->orderNumber = $orderNumber;
        $this->customer = $customer;
        $this->orderStatus = $orderStatus;
        $this->orderDate = $orderDate;
    }


    public function getOrderStatus()
    {
        return $this->orderStatus;
    }


    public function getOrderDate()
    {
        return $this->orderDate;
    }


    public function getOrderNumber()
    {
        return $this->orderNumber;
    }


    public function getCustomer(): customerModel
    {
        return $this->customer;
    }
}
