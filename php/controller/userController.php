<?php
require "../data/userData.php";
$data = new userData();

class userController
{
    public function checkLogin()
    {
        echo "Login Check!";
    }

    public function CheckLoginCon($email, $password)
    {
        return $this->data->getUserData($email, $password);
    }
}
