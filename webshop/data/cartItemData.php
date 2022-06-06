<?php
require_once "shoppingCartData.php";
require_once "productData.php";
require_once "../model/cartItemModel.php";
require_once "exceptions.php";
require_once "../model/productModel.php";
require_once '../model/shoppingCartModel.php';

// Klasse voor alle SQL van cartItems. Hier wordt gebruikt gemaakt van de interface ICrudData om deze klasse verplichte functies te geven.
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

    // Methode om alle data binnen te halen van de tabel cartItem.
    public function getAll()
    {
        $sql = "SELECT * FROM CartItems;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $cartItemArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($cartItemArray);
    }

    // Methode om alle data binnen te halen van de tabel billingAddress gefiltert op de primary key (CartItemID).
    public function getById($id)
    {
        $sql = "SELECT * FROM CartItems WHERE CartItemID = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
        $cartItemArray = $stmt->fetch(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($cartItemArray);
    }

    // Methode om een nieuwe regel aan data te creeren in de tabel cartItem.
    public function create($data)
    {
        $sql = "INSERT INTO CartItems (SC_ShoppingCartID, PD_SKU, Quantity) VALUES (:SC_ShoppingCartID, :PD_SKU, :Quantity);";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute([
            'SC_ShoppingCartID' => $data->getShoppingCartID(),
            'PD_SKU' => $data->getProduct()->getSKU(), 
            'Quantity' => $data->getQuantity()
        ]);
    }

    // Methode om een regel aan data te updaten in de tabel cartItem.
    public function update($id, $data)
    {
    }

    // Methode om een regel aan data te deleten in de tabel cartItem.
    public function delete($id)
    {
    }

    // Methode om van de associative array een array van de juiste modellen te maken.
    public function arrayToModelArray($object)
    {
    }
}
