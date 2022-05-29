<?php
require_once "customerData.php";

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

        return $this->objectToModel($shippingArray);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM ShippingAddress WHERE ShippingAddressID = :ShippingAddressID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['ShippingAddressID' => $id]);
        $shippingArray = $stmt->fetch(PDO::FETCH_ASSOC);

        return $this->objectToModel($shippingArray);
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

    public function objectToModel($object)
    {
        $customer = $this->customerData->getById($object['CM_CustomerNumber'])[0];

        $model = new shippingAddressModel($object['ShippingAddressID'], $customer, $object['Street'], $object['HouseNumber'], $object['PostalCode'], $object['City'], $object['Country']);
        $model->id = $object['ShippingAddressID'];
        $model->customer = $customer;
        $model->Street = $object['Street'];
        $model->HouseNumber = $object['HouseNumber'];
        $model->PostalCode = $object['PostalCode'];
        $model->City = $object['City'];
        $model->Country = $object['Country'];

        return $model;
    }
}
