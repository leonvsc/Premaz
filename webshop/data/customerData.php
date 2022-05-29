<?php
require_once 'database.php';
require_once 'crudData.php';
require_once '../model/customerModel.php';
require_once 'accountData.php';

class customerData implements ICrudData
{
    private $db;
    private $accountData;

    public function __construct()
    {
        $this->db = new database();
        $this->accountData = new accountData();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM Customers;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $orderArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->objectToModel($orderArray);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM Customers WHERE CustomerNumber = :CustomerNumber;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['CustomerNumber' => $id]);
        $orderArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //return var_dump($orderArray);
        // return $this->objectToModel($orderArray);
    }

    public function create($data)
    {
        //
    }

    public function update($id, $data) //TODO: Double check variables
    {
        $sql = "UPDATE Customers SET FirstName = :firstName, LastName = :lastName, PhoneNumber = :phonenumber WHERE CustomerNumber = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute([
            'customerNumber' => $id,
            'firstName' => $data->getFirstName(),
            'lastName' => $data->getLastName(),
            'phoneNumber' => $data->getPhoneNumber(),
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM Customers WHERE CustomerNumber = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

    public function objectToModel($object)
    {
        $customerArray = [];
        foreach ($object as $customer) {
            //customernumber, account, firstname, lastname, phonenumber
            $customerArray[] = new customerModel(
                $customer['CustomerNumber'],
                $this->accountData->getById($customer['AC_Email'])[0],
                $customer['FirstName'],
                $customer['LastName'],
                $customer['PhoneNumber']
            );
        }

        return $customerArray;
    }
}
