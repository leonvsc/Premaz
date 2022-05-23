<?php
require "../data/userData.php";

class userController
{
    private $data;

    public function __construct()
    {
        $this->data = new userData();
    }


    public function CheckLogin($email, $password)
    {
        if ($this->data->getUserData($email, $password)) {
            session_start();
            $_SESSION["email"] = $email;
            header("Location: ../view/index.php");
        } else {
            echo "Login failed"; //TODO: redirect to error page Issue #37
        }
    }

    public function SignUp($accountModel, $customerModel)
    {
        $this->data->signUpInsert($accountModel, $customerModel);
    }
}
