<?php
require "../data/loginData.php";

// Een klasse voor de controller van login.
class loginController
{
    private $data;

    public function __construct()
    {
        $this->data = new loginData();
    }

    // Een methode om de getUserData functie in de data file op te roepen.
    public function CheckLogin($email, $password)
    {
        $accountArray = $this->data->getUserData($email);
        $accountModel = $this->createAccountModel($accountArray);

        try {
            if (empty($accountModel)) {
                throw new loginException("No account found.");
            } elseif ($this->decryptPassword($password, $accountModel->getPassword()) == true) {
                $this->checkRole($accountModel);
            } else {
                throw new loginException("Password incorrect!");
            }
        } catch (loginException $e) {
            echo $e->getMessage();
        }
    }


    // Een methode om de signUpInsert functie in de data file op te roepen.
    public function SignUp($accountModel, $customerModel, $billingAddressModel, $shippingAddressModel)
    {
        $regNames = '/^[a-zA-Z\s]*$/'; // Regex bevat alleen letters en spaties.
        $regNumbers = '/^[0-9]*$/'; // Regex bevat alleen cijfers

        $firstname = $customerModel->getFirstName();
        $lastname = $customerModel->getLastName();
        $phonenumber = $customerModel->getPhoneNumber();
        $email = $accountModel->getEmail();
        $password = $accountModel->getPassword();

        try {
            if (preg_match("{$regNames}", "{$firstname}") == 0) { // Als firstname niet gelijk is aan de regex.
                throw new inputException("first name");
            } elseif (preg_match("{$regNames}", "{$lastname}") == 0) { // Als lastname niet gelijk is aan de regex.
                throw new inputException("last name");
            } elseif (preg_match("{$regNumbers}", "{$phonenumber}") == 0) { // Als phone number niet gelijk is aan de regex.
                throw new inputException("phone number");
            } elseif ($this->checkEmailValid($email) == false) { // Als email geen emailadres is.
                throw new inputException("email");
            } elseif ($this->checkPasswordValid($password) == false) { // Als password niet aan de eisen voldoet.
                throw new inputException("password. Minimum 8 characters, at least one uppercase letter, one lowercase letter and one number");
            } elseif ($this->checkDuplicateEmail($email) == true) { // Als emailadres al is geregistreerd.
                throw new regularException("Your email has already been registered.");
            } else {
                $hashedPassword = $this->encryptPassword($password);
                $accountModel->setPassword($hashedPassword);
                $this->data->signUpInsert($accountModel, $customerModel, $billingAddressModel, $shippingAddressModel);
            }
        } catch (inputException $e) {
            echo $e->getMessage();
        } catch (regularException $e) {
            echo $e->getMessage();
        }
    }

    // Een methode om te kijken of een wachtwoord aan de volgende eisen voldoet: 8 karakters, 1 kleine letter en 1 hoofdletter.
    public function checkPasswordValid($password)
    {
        $regPassword = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/';

        if (preg_match("{$regPassword}", "{$password}") == 0) {
            return false;
        } else {
            return true;
        }
    }

    // Een methode om te kijken of er een geldig emailadres is ingevuld.
    public function checkEmailValid($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return true;
        }
    }

    // Een methode om de checkDuplicateEmailDB aan te roepen in de data file.
    public function checkDuplicateEmail($email)
    {
        return $this->data->checkDuplicateEmailDB($email);
    }

    public function checkAccountAvailable($accountArray)
    {
        if (empty($accountArray[0]["Email"])) {
            return false;
        } else {
            return true;
        }
    }

    public function createAccountModel($accountArray)
    {
        try {
            if ($this->checkAccountAvailable($accountArray) == false) {
                return false;
            } else {
                $accountModel = new accountModel($accountArray[0]["Email"], $accountArray[0]["Password"], $accountArray[0]["Role"]);
                return $accountModel;
            }
        } catch (loginException $e) {
            echo $e->getMessage();
        }
    }

    public function checkRole($accountModel)
    {
        if ($accountModel->getRole() === "User") {
            session_start();
            // Maakt session variables aan
            $_SESSION["email"] = $accountModel->getEmail();
            $_SESSION["role"] = $accountModel->getRole();
            // Stuurt de gebruiker naar index.php
            header("Location: ../view/index.php");
        } elseif ($accountModel->getRole() === "Admin") {
            session_start();
            // Maakt session variables aan
            $_SESSION["email"] = $accountModel->getEmail();
            $_SESSION["role"] = $accountModel->getRole();
            // Stuurt de gebruiker naar adminpanel.php
            header("Location: ../view/adminpanel.php");
        }
    }

    public function encryptPassword($password)
    {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        return $hashedPassword;
    }

    public function decryptPassword($password, $hashedPassword)
    {
        if (password_verify($password, $hashedPassword)) {
            return true;
        } else {
            return false;
        }
    }
}
