<?php
require_once "database.php";
require_once "../model/accountModel.php";

// Een klasse voor alle login en signup data.
class loginData
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    // Een methode om gebruikersnaam en wachtwoord uit de database op te halen.
    public function getUserData($email, $password)
    {
        $sql = "SELECT Email, Role FROM `Accounts` WHERE Email ='{$email}' AND password ='{$password}' LIMIT 1;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $accountArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($accountArray)) {
            return false;
        } else {
            $account = new accountModel($email, $password, $accountArray[0]["Role"]);
            return $account;
        }
    }

    // Een methode om de gegevens van een model in de database op te slaan.
    public function signUpInsert($accountModel, $customerModel)
    {
        $email = $accountModel->getEmail();
        $password = $accountModel->getPassword();
        $customerNumber = $customerModel->getCustomerNumber();
        $firstName = $customerModel->getFirstName();
        $lastName = $customerModel->getLastName();
        $phoneNumber = $customerModel->getPhoneNumber();

        $sql = "INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('{$email}', '{$password}', 'User');
        INSERT INTO `Customers` (`CustomerNumber`, `AC_Email`, `FirstName`, `LastName`, `PhoneNumber`) VALUES ('{$customerNumber}', '{$email}', '{$firstName}', '{$lastName}', {$phoneNumber});";
        $stmt = $this->db->connect()->prepare($sql);

        $result = $stmt->execute();

        if ($result) {
            echo "Sign Up succesful";
        } else {
            echo "Sign Up failed";
        }
    }
}
