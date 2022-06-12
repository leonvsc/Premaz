<?php
require_once dirname(__FILE__) . "/../../vendor/autoload.php";

// Aanmaken van een variabele om de Dotenv package te gebruiken.
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->load();

// Een klasse voor alle database gerelateerde methodes.
class database
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    // Een methode om connectie te maken met de database.
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
