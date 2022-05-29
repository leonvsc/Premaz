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

        return $this->objectToModel($shoppingCartArray);
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
    public function objectToModel($object)
    {
        var_dump($object);
        // foreach ($object as $shoppingCart) {
        //     $shoppingCartArray[] = new shoppingCartModel($shoppingCart['ShoppingCartID'], $this->customerData->getById($object['CustomerNumber'])[0], $shoppingCart['TotalPrice']);
        // }
        // return $shoppingCartArray;
    }
}
