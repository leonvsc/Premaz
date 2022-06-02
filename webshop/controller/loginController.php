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
        $account = $this->data->getUserData($email, $password);

        // Check of er een account bestaat
        if ($account == false) {
            echo "Login failed";
            // Check of email, wachtwoord en role overeenkomen.
        } elseif ($account->getEmail() == $email && $account->getPassword() == $password && $account->getRole() == "User") {
            session_start();
            // Maakt session variables aan
            $_SESSION["email"] = $account->getEmail();
            $_SESSION["role"] = $account->getRole();
            // Stuurt de gebruiker naar index.php
            header("Location: ../view/index.php");

            // Check of email, wachtwoord en role overeenkomen.
        } elseif ($account->getEmail() == $email && $account->getPassword() == $password && $account->getRole() == "Admin") {
            session_start();
            // Maakt session variables aan
            $_SESSION["email"] = $account->getEmail();
            $_SESSION["role"] = $account->getRole();
            // Stuurt de gebruiker naar adminpanel.php
            header("Location: ../view/adminpanel.php");
        }
    }

    // Een methode om de signUpInsert functie in de data file op te roepen.
    public function SignUp($accountModel, $customerModel)
    {
        $this->data->signUpInsert($accountModel, $customerModel);
    }
}
