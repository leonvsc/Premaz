<?php
require_once 'billingAdressModel.php';
require_once 'paymentModel.php';

class invoiceModel
{
    private $invoiceNumber;
    private billingAddressModel $billingAddress;
    private paymentModel $payment;
    private $vatNumber;
    private $invoiceDate;

    public function __construct($invoiceNumber, billingAddressModel $billingAddress, paymentModel $payment, $vatNumber, $invoiceDate)
    {
        $this->invoiceNumber = $invoiceNumber;
        $this->billingAddress = $billingAddress;
        $this->payment = $payment;
        $this->vatNumber = $vatNumber;
        $this->invoiceDate = $invoiceDate;
    }
}
