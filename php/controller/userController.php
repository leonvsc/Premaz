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
}
