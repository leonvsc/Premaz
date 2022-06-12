<?php
require_once "customerData.php";
require_once dirname(__FILE__) . "/../model/shippingAddressModel.php";
require_once "exceptions.php";

// Klasse voor alle SQL van shippingAddress. Hier wordt gebruikt gemaakt van de interface ICrudData om deze klasse verplichte functies te geven.
class shippingAddressData implements ICrudData
{
    private $db;
    private $customerData;

    public function __construct()
    {
        $this->db = new database();
        $this->customerData = new customerData();
    }

    // Methode om alle data binnen te halen van de tabel shippingAddress.
    public function getAll()
    {
        $sql = "SELECT * FROM ShippingAddress;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $shippingArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($shippingArray);
    }

    // Methode om alle data binnen te halen van de tabel shippingAddress gefiltert op de primary key (ShippingAddressID).
    public function getById($id)
    {
        $sql = "SELECT * FROM ShippingAddress WHERE ShippingAddressID = :ShippingAddressID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['ShippingAddressID' => $id]);
        $shippingArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($shippingArray);
    }

    // Methode om alle data binnen te halen van de tabel shippingAddress gefiltert op customerNumber.
    public function getByCustomerNumber($customerNumber)
    {
        $sql = "SELECT * FROM ShippingAddress WHERE CM_CustomerNumber = :CustomerNumber;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['CustomerNumber' => $customerNumber]);
        $shippingArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($shippingArray);
    }

    // Methode om een nieuwe regel aan data te creeren in de tabel shippingAddress.
    public function create($data)
    {
        $customer = $this->customerData->getById($data['CM_CustomerNumber']);
        $customerId = $customer[0]->id;

        $sql = "INSERT INTO ShippingAddress (ShippingAddressID, CM_CustomerNumber, Street, HouseNumber, PostalCode, City, Country) VALUES (:ShippingAddressId, :CM_CustomerNumber, :Street, :HouseNumber, :PostalCode, :City, :Country);";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['ShippingAddressID' => $data->id, 'CM_CustomerNumber' => $customerId, 'Street' => $data->Street, 'HouseNumber' => $data->state, 'PostalCode' => $data->zip, 'City' => $data->country, 'Country' => $data->phone]);
    }

    // Methode om een regel aan data te updaten in de tabel shippingAddress.
    public function update($id, $data)
    {
        $sql = "UPDATE ShippingAddress SET Street = :Street, HouseNumber = :HouseNumber, PostalCode = :PostalCode, City = :City, Country = :Country WHERE id = :ShippingAddressID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['ShippingAddressID' => $id, 'Street' => $data->Street, 'HouseNumber' => $data->HouseNumber, 'PostalCode' => $data->PostalCode, 'City' => $data->City, 'Country' => $data->Country]);
    }

    // Methode om een regel aan data te deleten in de tabel shippingAddress.
    public function delete($id)
    {
        $sql = "DELETE FROM ShippingAddress WHERE id = :ShippingAddressID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['ShippingAddressID' => $id]);
    }

    // Methode om van de associative array een array van de juiste modellen te maken.
    public function arrayToModelArray($object)
    {
        $shippingArray = [];
        foreach ($object as $address) {
            //billingAddressID, customer, street, housenumber, postalcode, city, country
            $shippingArray[] = new shippingAddressModel(
                $address['ShippingAddressID'],
                $this->customerData->getById($address['CM_CustomerNumber'])[0],
                $address['Street'],
                $address['HouseNumber'],
                $address['PostalCode'],
                $address['City'],
                $address['Country']
            );
        }
        return $shippingArray;
    }
}
