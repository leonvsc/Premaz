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
    public function signUpInsert($accountModel, $customerModel, $billingAddressModel, $shippingAddressModel)
    {
        $email = $accountModel->getEmail();
        $password = $accountModel->getPassword();
        $customerNumber = $customerModel->getCustomerNumber();
        $firstName = $customerModel->getFirstName();
        $lastName = $customerModel->getLastName();
        $phoneNumber = $customerModel->getPhoneNumber();
        $baStreet = $billingAddressModel->getStreet();
        $baHouseNumber = $billingAddressModel->getHouseNumber();
        $baPostalCode = $billingAddressModel->getPostalCode();
        $baCity = $billingAddressModel->getCity();
        $baCountry = $billingAddressModel->getCountry();
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
}
