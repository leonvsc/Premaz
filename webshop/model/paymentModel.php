<?php

// Een klasse met een model voor payment. Hier bevinden alle methodes met getters en setters.
class paymentModel
{
    private $paymentID;
    private $price;
    private $currency;
    private $method;
    private $paymentStatus;
    private $paymentDate;

    public function __construct($paymentID, $price, $currency, $method, $paymentStatus, $paymentDate)
    {
        $this->paymentID = $paymentID;
        $this->price = $price;
        $this->currency = $currency;
        $this->method = $method;
        $this->paymentStatus = $paymentStatus;
        $this->paymentDate = $paymentDate;
    }

    public function getPaymentID()
    {
        return $this->paymentID;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    public function getPaymentDate()
    {
        return $this->paymentDate;
    }
}
