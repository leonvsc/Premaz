<?php

require_once  "customerModel.php";

class orderOverviewModel
{
    private $orderNumber;
    private customerModel $customer;
    private $trackAndTrace;
    private $orderStatus;
    private $orderDate;

    public function __construct($orderNumber, customerModel $customer, $trackAndTrace, $orderStatus, $orderDate)
    {
        $this->orderNumber = $orderNumber;
        $this->customer = $customer;
        $this->trackAndTrace = $trackAndTrace;
        $this->orderStatus = $orderStatus;
        $this->orderDate = $orderDate;
    }


    public function getTrackAndTrace()
    {
        return $this->trackAndTrace;
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
