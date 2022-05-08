<?php
require_once "database.php";

class userData
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getUserData($email, $password)
    {
        $sql = "SELECT Email FROM `Accounts` WHERE Email ='{$email}' AND password ='{$password}' LIMIT 1;";

        $result = mysqli_query($this->db->connect(), $sql);

        while (mysqli_fetch_array($result)) {
            return true;
        }
    }
}
