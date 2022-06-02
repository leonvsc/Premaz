<?php
require_once "../model/paymentModel.php";

class paymentData implements ICrudData
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getAll()
    {
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM Payments WHERE PaymentID = :PaymentID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['PaymentID' => $id]);
        $paymentArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($paymentArray);
    }
    public function create($data)
    {
    }
    public function update($id, $data)
    {
    }
    public function delete($id)
    {
    }
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
