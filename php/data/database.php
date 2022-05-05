<?php

class database
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function connect()
    {
        $this->servername = "sqladmin.premaz.nl";
        $this->username = "premaz";
        $this->password = "FnN2K*HZu8@96Ey9iC!e@Dn52nz@WF";
        $this->dbname = "premaz";

        try {
            $conn = new PDO("mysql:host=$this->servername;$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
