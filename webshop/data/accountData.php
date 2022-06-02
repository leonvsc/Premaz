<?php
require_once 'database.php';
require_once 'crudData.php';
require_once '../model/accountModel.php';

class accountData implements ICrudData
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM Accounts";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $accountArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM Accounts WHERE Email = :Email";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['Email' => $id]);
        $account = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($account);
    }

    public function create($data)
    {
        $sql = "INSERT INTO Accounts (Email, Password, Role) VALUES (:Email, :Password, :Role)";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['Email' => $data['Email'], 'Password' => $data['Password'], 'Role' => $data['Role']]);
    }

    public function update($id, $data)
    {
        $sql = "UPDATE Accounts SET Email = :Email, Password = :Password, Role = :Role WHERE Email = :Email";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['Email' => $data['Email'], 'Password' => $data['Password'], 'Role' => $data['Role']]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM Accounts WHERE Email = :Email";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['Email' => $id]);
    }

    public function arrayToModelArray($object)
    {
        $accountArray = [];

        foreach ($object as $account) {
            $accountArray[] = new accountModel($account['Email'], $account['Password'], $account['Role']);
        }

        return $accountArray;
    }
}
