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
            header("Location: ../view/index.php");
        } else {
            echo "Login failed"; //TODO: redirect to error page
        }
    }

    public function SignUp($accountModel, $customerModel)
    {
        //Insert

        if ($this->data->signUpInsert($accountModel, $customerModel)) {
            echo "sign up successful";
        } else {
            echo "sign up failed";
        }
    }
}
