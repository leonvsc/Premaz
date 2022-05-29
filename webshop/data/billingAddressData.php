<?php

require_once "customerData";

class billingAddressData implements ICrudData
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
        $sql = "SELECT * FROM BillingAddress;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $billingArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->objectToModel($billingArray);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM BillingAddress WHERE id = :BillingAddressID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['BillingAddressID' => $id]);
        $billingArray = $stmt->fetch(PDO::FETCH_ASSOC);

        return $this->objectToModel($billingArray);
    }

    public function create($data)
    {
        $customer = $this->customerData->getById($data['CM_CustomerNumber']);
        $customerId = $customer[0]->id;

        $sql = "INSERT INTO BillingAddress (BillingAddressID, CM_CustomerNumber, Street, HouseNumber, PostalCode, City, Country) VALUES (:BillingAddressId, :CM_CustomerNumber, :Street, :HouseNumber, :PostalCode, :City, :Country);";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['BillingAddressID' => $data->id, 'CM_CustomerNumber' => $customerId, 'Street' => $data->Street, 'HouseNumber' => $data->state, 'PostalCode' => $data->zip, 'City' => $data->country, 'Country' => $data->phone]);
    }
    public function update($id, $data)
    {
        $sql = "UPDATE BillingAddress SET Street = :Street, HouseNumber = :HouseNumber, PostalCode = :PostalCode, City = :City, Country = :Country WHERE id = :BillingAddressID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['BillingAddressID' => $id, 'Street' => $data->Street, 'HouseNumber' => $data->HouseNumber, 'PostalCode' => $data->PostalCode, 'City' => $data->City, 'Country' => $data->Country]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM BillingAddress WHERE id = :BillingAddressID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['BillingAddressID' => $id]);
    }

    public function objectToModel($object)
    {
        $customer = $this->customerData->getById($object['CM_CustomerNumber'])[0];

        $model = new billingAddressModel($object['id'], $customer, $object['Street'], $object['HouseNumber'], $object['PostalCode'], $object['City'], $object['Country']);
        $model->id = $object['id'];
        $model->customer = $customer;
        $model->Street = $object['Street'];
        $model->HouseNumber = $object['HouseNumber'];
        $model->PostalCode = $object['PostalCode'];
        $model->City = $object['City'];
        $model->Country = $object['Country'];

        return $model;
    }
}
