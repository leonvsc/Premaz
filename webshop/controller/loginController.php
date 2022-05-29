<?php
require "../data/loginData.php";

class loginController
{
    private $data;

    public function __construct()
    {
        $this->data = new loginData();
    }


    public function CheckLogin($email, $password)
    {
        $account = $this->data->getUserData($email, $password);

        if ($account == false) {
            echo "Login failed";
        } elseif ($account->getEmail() == $email && $account->getPassword() == $password && $account->getRole() == "User") {
            session_start();
            $_SESSION["email"] = $account->getEmail();
            header("Location: ../view/index.php");
        } elseif ($account->getEmail() == $email && $account->getPassword() == $password && $account->getRole() == "Admin") {
            session_start();
            $_SESSION["email"] = $account->getEmail();
            $_SESSION["role"] = $account->getRole();
            header("Location: ../view/adminpanel.php");
        }
    }

    public function SignUp($accountModel, $customerModel)
    {
        $this->data->signUpInsert($accountModel, $customerModel);
    }
}
