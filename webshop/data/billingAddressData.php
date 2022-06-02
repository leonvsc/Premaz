<?php

require_once "customerData.php";
require_once "../model/billingAddressModel.php";

// Klasse voor alle SQL van billingAddresses. Hier wordt gebruikt gemaakt van de interface ICrudData om deze klasse verplichte functies te geven.
class billingAddressData implements ICrudData
{
    private $db;
    private $customerData;

    public function __construct()
    {
        $this->db = new database();
        $this->customerData = new customerData();
    }

    // Methode om alle data binnen te halen van de tabel billingAddress.
    public function getAll()
    {
        $sql = "SELECT * FROM BillingAddress;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $billingArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($billingArray);
    }

    // Methode om alle data binnen te halen van de tabel billingAddress gefiltert op de primary key (BillingAddressID).
    public function getById($id)
    {
        $sql = "SELECT * FROM BillingAddress WHERE BillingAddressID = :BillingAddressID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['BillingAddressID' => $id]);
        $billingArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($billingArray);
    }

    // Methode om alle data binnen te halen van de tabel billingAddress gefiltert op customerNumber.
    public function getByCustomerNumber($customerNumber)
    {
        $sql = "SELECT * FROM BillingAddress WHERE CM_CustomerNumber = :CustomerNumber;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['CustomerNumber' => $customerNumber]);
        $billingArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($billingArray);
    }

    // Methode om een nieuwe regel aan data te creeren in de tabel billingAddress.
    public function create($data)
    {
        $customer = $this->customerData->getById($data['CM_CustomerNumber']);
        $customerId = $customer[0]->id;

        $sql = "INSERT INTO BillingAddress (BillingAddressID, CM_CustomerNumber, Street, HouseNumber, PostalCode, City, Country) VALUES (:BillingAddressId, :CM_CustomerNumber, :Street, :HouseNumber, :PostalCode, :City, :Country);";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['BillingAddressID' => $data->id, 'CM_CustomerNumber' => $customerId, 'Street' => $data->Street, 'HouseNumber' => $data->state, 'PostalCode' => $data->zip, 'City' => $data->country, 'Country' => $data->phone]);
    }

    // Methode om een regel aan data te updaten in de tabel billingAddress.
    public function update($id, $data)
    {
        $sql = "UPDATE BillingAddress SET Street = :Street, HouseNumber = :HouseNumber, PostalCode = :PostalCode, City = :City, Country = :Country WHERE id = :BillingAddressID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['BillingAddressID' => $id, 'Street' => $data->Street, 'HouseNumber' => $data->HouseNumber, 'PostalCode' => $data->PostalCode, 'City' => $data->City, 'Country' => $data->Country]);
    }

    // Methode om een regel aan data te deleten in de tabel billingAddress.
    public function delete($id)
    {
        $sql = "DELETE FROM BillingAddress WHERE id = :BillingAddressID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['BillingAddressID' => $id]);
    }

    // Methode om van de associative array een array van de juiste modellen te maken.
    public function arrayToModelArray($object)
    {
        $baArray = [];
        foreach ($object as $address) {
            //billingAddressID, customer, street, housenumber, postalcode, city, country
            $baArray[] = new billingAddressModel(
                $address['BillingAddressID'],
                $this->customerData->getById($address['CM_CustomerNumber'])[0],
                $address['Street'],
                $address['HouseNumber'],
                $address['PostalCode'],
                $address['City'],
                $address['Country']
            );
        }
        return $baArray;
    }
}
