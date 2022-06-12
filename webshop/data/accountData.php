<?php
require_once 'database.php';
require_once 'crudData.php';
require_once dirname(__FILE__) . '/../model/accountModel.php';
require_once "exceptions.php";

// Klasse voor alle SQL van accounts. Hier wordt gebruikt gemaakt van de interface ICrudData om deze klasse verplichte functies te geven.
class accountData implements ICrudData
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    // Methode om alle data binnen te halen van de tabel accounts.
    public function getAll()
    {
        $sql = "SELECT * FROM Accounts";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $accountArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($accountArray);
    }

    // Methode om alle data binnen te halen van de tabel accounts gefiltert op de primary key (email).
    public function getById($id)
    {
        $sql = "SELECT * FROM Accounts WHERE Email = :Email";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['Email' => $id]);
        $account = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($account);
    }

    // Methode om een nieuwe regel aan data te creeren in de tabel accounts.
    public function create($data)
    {
        $sql = "INSERT INTO Accounts (Email, Password, Role) VALUES (:Email, :Password, :Role)";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['Email' => $data['Email'], 'Password' => $data['Password'], 'Role' => $data['Role']]);
    }

    // Methode om een regel aan data te updaten in de tabel accounts.
    public function update($id, $data)
    {
        $sql = "UPDATE Accounts SET Email = :Email, Password = :Password, Role = :Role WHERE Email = :Email";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['Email' => $data['Email'], 'Password' => $data['Password'], 'Role' => $data['Role']]);
    }

    // Methode om een regel aan data te deleten in de tabel accounts.
    public function delete($id)
    {
        $sql = "DELETE FROM Accounts WHERE Email = :Email";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['Email' => $id]);
    }

    // Methode om van de associative array een array van de juiste modellen te maken.
    public function arrayToModelArray($object)
    {
        $accountArray = [];

        foreach ($object as $account) {
            $accountArray[] = new accountModel($account['Email'], $account['Password'], $account['Role']);
        }

        return $accountArray;
    }
}
