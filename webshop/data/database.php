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


        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}
