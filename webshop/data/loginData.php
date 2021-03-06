<?php
require_once "database.php";
require_once "../model/accountModel.php";
require_once "exceptions.php";

// Een klasse voor alle login en signup data.
class loginData
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    // Een methode om gebruikersnaam en wachtwoord uit de database op te halen.
    public function getUserData($email)
    {
        $sql = "SELECT * FROM `Accounts` WHERE Email ='{$email}' LIMIT 1;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $accountArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $accountArray;
    }

    // Een methode om de gegevens van een model in de database op te slaan.
    public function signUpInsert($accountModel, $customerModel, $billingAddressModel, $shippingAddressModel)
    {
        // Account
        $email = $accountModel->getEmail();
        $password = $accountModel->getPassword();

        // Customer
        $customerNumber = $customerModel->getCustomerNumber();
        $firstName = $customerModel->getFirstName();
        $lastName = $customerModel->getLastName();
        $phoneNumber = $customerModel->getPhoneNumber();

        // BillingAddress
        $baStreet = $billingAddressModel->getStreet();
        $baHouseNumber = $billingAddressModel->getHouseNumber();
        $baPostalCode = $billingAddressModel->getPostalCode();
        $baCity = $billingAddressModel->getCity();
        $baCountry = $billingAddressModel->getCountry();

        // ShippingAddress
        $saStreet = $shippingAddressModel->getStreet();
        $saHouseNumber = $shippingAddressModel->getHouseNumber();
        $saPostalCode = $shippingAddressModel->getPostalCode();
        $saCity = $shippingAddressModel->getCity();
        $saCountry = $shippingAddressModel->getCountry();

        $sql = "INSERT INTO `Accounts` (`Email`, `Password`, `Role`) VALUES ('{$email}', '{$password}', 'User');
        INSERT INTO `Customers` (`CustomerNumber`, `AC_Email`, `FirstName`, `LastName`, `PhoneNumber`) VALUES ('{$customerNumber}', '{$email}', '{$firstName}', '{$lastName}', {$phoneNumber});
        INSERT INTO `BillingAddress` (`CM_CustomerNumber`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES ('{$customerNumber}', '{$baStreet}', '{$baHouseNumber}', '{$baPostalCode}', '{$baCity}', '{$baCountry}');
        INSERT INTO `ShippingAddress` (`CM_CustomerNumber`, `Street`, `HouseNumber`, `PostalCode`, `City`, `Country`) VALUES ('{$customerNumber}', '{$saStreet}', '{$saHouseNumber}', '{$saPostalCode}', '{$saCity}', '{$saCountry}');";
        $stmt = $this->db->connect()->prepare($sql);

        $result = $stmt->execute();

        try {
            if ($result) {
                echo "<div class='alert alert-success'>SUCCESS: Account has been created. After 5 seconds you will be redirected to the login page.</div>";
                header("Refresh:5; url=../view/login.php");
            } else {
                throw new signUpException("Sign Up failed!");
            }
        } catch (signUpException $e) {
            echo $e->getMessage();
        }
    }

    // Een methode om te kijken of het ingevoerde emailadres al in de database staat.
    public function checkDuplicateEmailDB($email)
    {
        $sql = "SELECT Email FROM `Accounts` WHERE Email ='{$email}' LIMIT 1;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchColumn();


        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
