<?php

require_once "exceptions.php";
require_once 'database.php';
require_once 'crudData.php';
require_once "../model/searchModel.php";

// Klasse voor alle SQL van product. Hier wordt gebruikt gemaakt van de interface ICrudData om deze klasse verplichte functies te geven.
class searchData implements ICrudData
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    // Methode om alle data binnen te halen van de tabel product.
    public function getAll()
    {
        $sql = "SELECT * FROM SearchTerms;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $searchTermArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($searchTermArray);
    }

    // Methode om alle data binnen te halen van de tabel product gefiltert op de primary key (SKU).
    public function getById($id)
    {
    }

    // Methode om een nieuwe regel aan data te creeren in de tabel product.
    public function create($data)
    {
        $sql = "INSERT INTO `SearchTerms` (`SearchTerm`) VALUES (:SearchTerm);";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute([
            'SearchTerm' => $data,
        ]);
    }
    // Methode om een regel aan data te updaten in de tabel product.
    public function update($id, $data)
    {
    }

    // Methode om een regel aan data te deleten in de tabel product.
    public function delete($id)
    {
        $sql = "DELETE FROM `SearchTerms` WHERE `SearchTerms`.`SearchTerm` = :SearchTerm;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['SearchTerm' => $id]);
    }

    // Methode om van de associative array een array van de juiste modellen te maken.
    public function arrayToModelArray($object)
    {
        $searchArray = [];
        foreach ($object as $search) {
            $searchArray[] = new searchModel(
                $search['SearchTermID'],
                $search['SearchTerm'],
            );
        }

        return $searchArray;
    }
}
