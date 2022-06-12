<?php
require_once 'database.php';
require_once 'crudData.php';
require_once dirname(__FILE__) . '/../model/customerModel.php';
require_once 'accountData.php';
require_once "exceptions.php";

// Klasse voor alle SQL van customer. Hier wordt gebruikt gemaakt van de interface ICrudData om deze klasse verplichte functies te geven.
class customerData implements ICrudData
{
    private $db;
    private $accountData;

    public function __construct()
    {
        $this->db = new database();
        $this->accountData = new accountData();
    }

    // Methode om alle data binnen te halen van de tabel customer.
    public function getAll()
    {
        $sql = "SELECT * FROM Customers;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $orderArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($orderArray);
    }

    // Methode om alle data binnen te halen van de tabel customer gefiltert op de primary key (CustomerNumber).
    public function getById($id)
    {
        $sql = "SELECT * FROM Customers WHERE CustomerNumber = :CustomerNumber;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['CustomerNumber' => $id]);
        $customerArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($customerArray);
    }

    // Methode om alle data binnen te halen van de tabel customer gefiltert op Email.
    public function getByEmail($email)
    {
        $sql = "SELECT * FROM Customers WHERE AC_Email = :Email;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['Email' => $email]);
        $customerArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($customerArray);
    }

    // Methode om een nieuwe regel aan data te creeren in de tabel customer.
    public function create($data)
    {
        $sql = "INSERT INTO `Customers` (`CustomerNumber`, `AC_Email`, `FirstName`, `LastName`, `PhoneNumber`) VALUES (:CustomerNumber, :AC_Email, :FirstName, :LastName, :PhoneNumber);";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute([
            'CustomerNumber' => $data->getCustomerNumber(),
            'AC_Email' => $data->getEmail(),
            'FirstName' => $data->getFirstName(),
            'LastName' => $data->getLastName(),
            'PhoneNumber' => $data->getPhoneNumber()
        ]);
    }

    // Methode om een regel aan data te updaten in de tabel customer.
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

    // Methode om een regel aan data te deleten in de tabel customer.
    public function delete($id)
    {
        $sql = "DELETE FROM Customers WHERE CustomerNumber = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

    // Methode om van de associative array een array van de juiste modellen te maken.
    public function arrayToModelArray($object)
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
