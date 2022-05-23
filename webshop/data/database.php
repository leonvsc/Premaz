<?php
require_once "../../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->load();

class database
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function connect()
    {
        $this->servername = $_ENV["servername"];
        $this->username = $_ENV["username"];
        $this->password = $_ENV["password"];
        $this->dbname = $_ENV["dbname"];


        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $conn;
    }
}
