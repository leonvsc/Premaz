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

    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    public function getPayment()
    {
        return $this->payment;
    }

    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
    }

    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
    }
}
