<?php
require_once "shoppingCartData.php";
require_once "productData.php";
require_once dirname(__FILE__) . "/../model/cartItemModel.php";
require_once "exceptions.php";
require_once dirname(__FILE__) . "/../model/productModel.php";
require_once dirname(__FILE__) . '/../model/shoppingCartModel.php';

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
        $sql = "SELECT * FROM `CartItems`;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $cartItemArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($cartItemArray);
    }

    // Methode om alle data binnen te halen van de tabel billingAddress gefiltert op de primary key (CartItemID).
    public function getById($id)
    {
        $sql = "SELECT * FROM `CartItems` WHERE SC_ShoppingCartID = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
        $cartItemArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($cartItemArray);
    }

    // Methode om een nieuwe regel aan data te creeren in de tabel cartItem.
    public function create($data)
    {
        $sql = "INSERT INTO CartItems (SC_ShoppingCartID, PD_SKU, Quantity) VALUES (:SC_ShoppingCartID, :PD_SKU, :Quantity);";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute([
            'SC_ShoppingCartID' => $data->getShoppingCart()->getShoppingCartID(),
            'PD_SKU' => $data->getProduct()->getSKU(),
            'Quantity' => $data->getQuantity()
        ]);
    }

    // Methode om een regel aan data te updaten in de tabel cartItem.
    public function update($id, $data)
    {
        $sql = "UPDATE CartItems SET SC_ShoppingCartID = :SC_ShoppingCartID, PD_SKU = :PD_SKU, Quantity = :Quantity WHERE CartItemID = :CartItemID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute([
            'CartItemID' => $id,
            'SC_ShoppingCartID' => $data->getShoppingCart()->getShoppingCartID(),
            'PD_SKU' => $data->getProduct()->getSKU(),
            'Quantity' => $data->getQuantity()
        ]);
    }

    // Methode om een regel aan data te deleten in de tabel cartItem.
    public function delete($id)
    {
        $sql = "DELETE FROM CartItems WHERE SC_ShoppingCartID = :ShoppingCartID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['ShoppingCartID' => $id]);
    }

    // Methode om van de associative array een array van de juiste modellen te maken.
    public function arrayToModelArray($object)
    {
        $cartItemArray = [];
        foreach ($object as $cartItem) {
            $cartItemArray[] = new CartItemModel(
                $cartItem['CartItemID'],
                $this->shoppingData->getById($cartItem['SC_ShoppingCartID'])[0],
                $this->productData->getById($cartItem['PD_SKU'])[0],
                $cartItem['Quantity']
            );
        }

        return $cartItemArray;
    }
}
