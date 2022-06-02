<?php
require_once "customerData.php";
require_once "../model/shippingAddressModel.php";

class shippingAddressData implements ICrudData
{
    private $db;
    private $customerData;

    public function __construct()
    {
        $this->db = new database();
        $this->customerData = new customerData();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM ShippingAddress;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $shippingArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($shippingArray);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM ShippingAddress WHERE ShippingAddressID = :ShippingAddressID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['ShippingAddressID' => $id]);
        $shippingArray = $stmt->fetch(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($shippingArray);
    }

    public function getByCustomerNumber($customerNumber)
    {
        $sql = "SELECT * FROM ShippingAddress WHERE CM_CustomerNumber = :CustomerNumber;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['CustomerNumber' => $customerNumber]);
        $shippingArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($shippingArray);
    }

    public function create($data)
    {
        $customer = $this->customerData->getById($data['CM_CustomerNumber']);
        $customerId = $customer[0]->id;

        $sql = "INSERT INTO ShippingAddress (ShippingAddressID, CM_CustomerNumber, Street, HouseNumber, PostalCode, City, Country) VALUES (:ShippingAddressId, :CM_CustomerNumber, :Street, :HouseNumber, :PostalCode, :City, :Country);";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['ShippingAddressID' => $data->id, 'CM_CustomerNumber' => $customerId, 'Street' => $data->Street, 'HouseNumber' => $data->state, 'PostalCode' => $data->zip, 'City' => $data->country, 'Country' => $data->phone]);
    }
    public function update($id, $data)
    {
        $sql = "UPDATE ShippingAddress SET Street = :Street, HouseNumber = :HouseNumber, PostalCode = :PostalCode, City = :City, Country = :Country WHERE id = :ShippingAddressID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['ShippingAddressID' => $id, 'Street' => $data->Street, 'HouseNumber' => $data->HouseNumber, 'PostalCode' => $data->PostalCode, 'City' => $data->City, 'Country' => $data->Country]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM ShippingAddress WHERE id = :ShippingAddressID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['ShippingAddressID' => $id]);
    }

    public function arrayToModelArray($object)
    {
        $saArray = [];
        foreach ($object as $address) {
            //billingAddressID, customer, street, housenumber, postalcode, city, country
            $saArray[] = new shippingAddressModel(
                $address['ShippingAddressID'],
                $this->customerData->getById($address['CM_CustomerNumber'])[0],
                $address['Street'],
                $address['HouseNumber'],
                $address['PostalCode'],
                $address['City'],
                $address['Country']
            );
        }
        return $saArray;
    }
}
