<?php
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
}
