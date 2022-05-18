<?php
require_once "database.php";

class userData
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getUserData($email, $password)
    {
        $sql = "SELECT Email FROM `Accounts` WHERE Email ='{$email}' AND password ='{$password}' LIMIT 1;";

        $result = mysqli_query($this->db->connect(), $sql);

        while (mysqli_fetch_array($result)) {
            return true;
        }
    }

    public function signUpInsert($accountModel, $customerModel)
    {
        $email = $accountModel->getEmail();
        $password = $accountModel->getPassword();
        $customerNumber = $customerModel->getCustomerNumber();
        $firstName = $customerModel->getFirstName();
        $lastName = $customerModel->getLastName();
        $phoneNumber = $customerModel->getPhoneNumber();

        // SQL
        $sql = "INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('{$email}', '{$password}', 'User');";
        $sql .= "INSERT INTO `Customers` (`CustomerNumber`, `AC_Email`, `FirstName`, `LastName`, `PhoneNumber`) VALUES ('{$customerNumber}', '{$email}', '{$firstName}', '{$lastName}', {$phoneNumber});";

        $result = mysqli_multi_query($this->db->connect(), $sql);

        if ($result) {
            echo "Sign Up succesful";
        } else {
            echo "Sign Up failed";
        }
    }
}
