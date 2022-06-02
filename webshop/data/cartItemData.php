<?php
require_once "shoppingCartData.php";
require_once "productData.php";
require_once "../model/cartItemModel.php";

class cartItemData implements ICrudData
{
    private $db;
    private $shoppingData;
    private $productData;
    //cartitemid, shoppingcartmodel, productmodel, quantity
    public function __construct()
    {
        $this->db = new database();
        $this->shoppingData = new shoppingCartData();
        $this->productData = new productData();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM CartItems;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $cartItemArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($cartItemArray);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM CartItems WHERE CartItemID = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
        $cartItemArray = $stmt->fetch(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($cartItemArray);
    }

    public function create($data)
    {
        $sql = "INSERT INTO CartItems (SC_ShoppingCartID, PD_SKU, Quantity) VALUES (:SC_ShoppingCartID, :PD_SKU, :Quantity);";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['SC_ShoppingCartID' => $data->getShoppingCart()->getShoppingCartID(), 'PD_SKU' => $data->getProduct()->getSKU(), 'Quantity' => $data->getQuantity()]);
    }
    public function update($id, $data)
    {
    }
    public function delete($id)
    {
    }
    public function arrayToModelArray($object)
    {
    }
}
