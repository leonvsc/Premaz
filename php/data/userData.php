<?php
require "database.php";

$db = new database();
$dbConn = $db->connect();


class userData
{
    public function getUserData($email, $password)
    {
        $sql = "SELECT Email FROM `Accounts` WHERE Email ='{$email}' AND password ='{$password}' LIMIT 1;";
        $result = $this->dbConn->query($sql);

        print_r($result->fetch());
    }
}
