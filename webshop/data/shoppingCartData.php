<?php
require_once "customerData.php";
require_once "../model/shoppingCartModel.php";

class shoppingCartData implements ICrudData
{
    private $db;
    private $customerData;

    public function __construct()
    {
        $this->db = new database();
        $this->customerData = new customerData();
    }

    public function getAll()
    {
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM ShoppingCarts WHERE ShoppingCartID = :ShoppingCartID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['ShoppingCartID' => $id]);
        $shoppingCartArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($shoppingCartArray);
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
        if (count($object) > 1) {
            $scArray = [];
            foreach ($object as $sc) {
                $scArray[] = new shoppingCartModel(
                    $sc['ShoppingCartID'],
                    $this->customerData->getById($sc['CM_CustomerNumber'])[0],
                    $sc['TotalPrice']
                );
            }
            return $scArray;
        }

        return new shoppingCartModel(
            $object['ShoppingCartID'],
            $this->customerData->getById($object['CM_CustomerNumber'])[0],
            $object['TotalPrice']
        );
    }
}
