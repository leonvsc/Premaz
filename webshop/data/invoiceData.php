<?php

require_once "billingAddressData.php";
require_once "paymentData.php";
require_once "../model/invoiceModel.php";

class invoiceData implements ICrudData
{
    private $db;
    private $paymentData;
    private $baData;

    public function __construct()
    {
        $this->db = new database();
        $this->paymentData = new paymentData();
        $this->baData = new billingAddressData();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM Invoices;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $invoiceArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($invoiceArray);
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM Invoices WHERE InvoiceNumber = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
        $invoiceArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($invoiceArray);
    }

    public function getByBillingAddressID($billingAddressID)
    {
        $sql = "SELECT * FROM Invoices WHERE BA_BillingAddressID = :billingAddressID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['billingAddressID' => $billingAddressID]);
        $invoiceArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($invoiceArray);
    }

    public function create($data)
    {
    }
    public function update($id, $data)
    {
    }
    public function delete($id)
    {
    }
    public function arrayToModelArray($object)
    {
        $invoiceArray = [];
        foreach ($object as $invoice) {
            // invoicenumber, billingaddress, payment, vatnumber, invoicedate
            $invoiceArray[] = new invoiceModel(
                $invoice['InvoiceNumber'],
                $this->baData->getById($invoice['BA_BillingAddressID'])[0],
                $this->paymentData->getById($invoice['PM_PaymentID'])[0],
                $invoice['VATNumber'],
                $invoice['InvoiceDate']
            );
        }

        return $invoiceArray;
    }
}
