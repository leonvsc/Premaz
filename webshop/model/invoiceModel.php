<?php
require_once 'billingAddressModel.php';
require_once 'paymentModel.php';
require_once 'orderModel.php';

// Een klasse met een model voor invoice. Hier bevinden alle methodes met getters en setters.
class invoiceModel
{
    private $invoiceNumber;
    private billingAddressModel $billingAddress;
    private orderModel $order;
    private $vatNumber;
    private $invoiceDate;

    public function __construct($invoiceNumber, billingAddressModel $billingAddress, orderModel $order, $vatNumber, $invoiceDate)
    {
        $this->invoiceNumber = $invoiceNumber;
        $this->billingAddress = $billingAddress;
        $this->order = $order;
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

    public function getOrderNumber()
    {
        return $this->order;
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
