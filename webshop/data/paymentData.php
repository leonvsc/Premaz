<?php
require_once "../model/paymentModel.php";
require_once "exceptions.php";

// Klasse voor alle SQL van payment. Hier wordt gebruikt gemaakt van de interface ICrudData om deze klasse verplichte functies te geven.
class paymentData implements ICrudData
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    // Methode om alle data binnen te halen van de tabel payment.
    public function getAll()
    {
    }

    // Methode om alle data binnen te halen van de tabel payment gefiltert op de primary key (PaymentID).
    public function getById($id)
    {
        $sql = "SELECT * FROM Payments WHERE PaymentID = :PaymentID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['PaymentID' => $id]);
        $paymentArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($paymentArray);
    }

    // Methode om een nieuwe regel aan data te creeren in de tabel payment.
    public function create($data)
    {
    }

    // Methode om een regel aan data te updaten in de tabel payment.
    public function update($id, $data)
    {
    }

    // Methode om een regel aan data te deleten in de tabel payment.
    public function delete($id)
    {
    }

    // Methode om van de associative array een array van de juiste modellen te maken.
    public function arrayToModelArray($object)
    {
        $paymentArray = [];

        foreach ($object as $payment) {
            $paymentArray[] = new paymentModel(
                $payment['PaymentID'],
                $payment['Price'],
                $payment['Currency'],
                $payment['Method'],
                $payment['PaymentStatus'],
                $payment['PaymentDate']
            );
        }
        return $paymentArray;
    }
}
