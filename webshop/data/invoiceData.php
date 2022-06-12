<?php

require_once "billingAddressData.php";
require_once "../model/invoiceModel.php";
require_once "exceptions.php";
require_once "orderData.php";

// Klasse voor alle SQL van invoice. Hier wordt gebruikt gemaakt van de interface ICrudData om deze klasse verplichte functies te geven.
class invoiceData implements ICrudData
{
    private $db;
    private $orderData;
    private $baData;

    public function __construct()
    {
        $this->db = new database();
        $this->orderData = new orderData();
        $this->baData = new billingAddressData();
    }

    // Methode om alle data binnen te halen van de tabel invoice.
    public function getAll()
    {
        $sql = "SELECT * FROM Invoices;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $invoiceArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($invoiceArray);
    }

    // Methode om alle data binnen te halen van de tabel invoice gefiltert op de primary key (InvoiceNumber).
    public function getById($id)
    {
        $sql = "SELECT * FROM Invoices WHERE InvoiceNumber = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
        $invoiceArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($invoiceArray);
    }

    // Methode om alle data binnen te halen van de tabel invoice gefiltert op BillingAddressID.
    public function getByBillingAddressID($billingAddressID)
    {
        $sql = "SELECT * FROM Invoices WHERE BA_BillingAddressID = :billingAddressID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['billingAddressID' => $billingAddressID]);
        $invoiceArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($invoiceArray);
    }

    // Methode om een nieuwe regel aan data te creeren in de tabel invoice.
    public function create($data)
    {
        $sql = "INSERT INTO `Invoices` (`InvoiceNumber`, `BA_BillingAddressID`, `OD_OrderNumber`, `VATNumber`, `InvoiceDate`) VALUES (:InvoiceNumber, :BA_BillingAddressID, :OD_OrderNumber, :VATNumber, :InvoiceDate);";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute([
            'InvoiceNumber' => null,
            'BA_BillingAddressID' => $data->getBillingAddress()->getBillingAddressID(),
            'OD_OrderNumber' => $data->getOrder()->getOrderNumber(),
            'VATNumber' => $data->getVATNumber(),
            'InvoiceDate' => $data->getInvoiceDate()
        ]);
    }

    // Methode om een regel aan data te updaten in de tabel invoice.
    public function update($id, $data)
    {
        $sql = "UPDATE `Invoices` SET `InvoiceNumber` = :InvoiceNumber, `BA_BillingAddressID` = :BA_BillingAddressID,`OD_OrderNumber` = :OD_OrderNumber, `VATNumber` = :VATNumber, `InvoiceDate` = :InvoiceDate WHERE `InvoiceNumber` = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute([
            'InvoiceNumber' => $data->getInvoiceNumber(),
            'BA_BillingAddressID' => $data->getBillingAddressID(),
            'OD_OrderNumber' => $data->getOrder()->getOrderNumber(),
            'VATNumber' => $data->getVATNumber(),
            'InvoiceDate' => $data->getInvoiceDate(),
        ]);
    }

    // Methode om een regel aan data te deleten in de tabel invoice.
    public function delete($id)
    {
        $sql = "DELETE FROM `Invoices` WHERE `InvoiceNumber` = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

    // Methode om van de associative array een array van de juiste modellen te maken.
    public function arrayToModelArray($object)
    {
        $invoiceArray = [];
        foreach ($object as $invoice) {
            // invoicenumber, billingaddress, payment, vatnumber, invoicedate
            $invoiceArray[] = new invoiceModel(
                $invoice['InvoiceNumber'],
                $this->baData->getById($invoice['BA_BillingAddressID'])[0],
                $this->orderData->getById($invoice['OD_OrderNumber'])[0],
                $invoice['VATNumber'],
                $invoice['InvoiceDate']
            );
        }

        return $invoiceArray;
    }
}
