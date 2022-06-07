<?php
require_once "accountData.php";
require_once "../model/shoppingCartModel.php";
require_once "exceptions.php";
require_once "crudData.php";

// Klasse voor alle SQL van shoppingCart. Hier wordt gebruikt gemaakt van de interface ICrudData om deze klasse verplichte functies te geven.
class shoppingCartData implements ICrudData
{
    private $db;
    private $accountData;

    public function __construct()
    {
        $this->db = new database();
        $this->accountData = new accountData();
    }

    // Methode om alle data binnen te halen van de tabel shoppingCart.
    public function getAll()
    {
    }

    // Methode om alle data binnen te halen van de tabel shoppingCart gefiltert op de primary key (ShoppingCartID).
    public function getById($id)
    {
        $sql = "SELECT * FROM ShoppingCarts WHERE ShoppingCartID = :ShoppingCartID;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['ShoppingCartID' => $id]);
        $shoppingCartArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($shoppingCartArray);
    }

    // Methode om een nieuwe regel aan data te creeren in de tabel shoppingCart.
    public function create($data)
    {
        $sql = "INSERT INTO `ShoppingCarts` (`CM_CustomerNumber`) VALUES (:customerNumber );
        INSERT INTO `CartItems` (`SC_ShoppingCartID`, `PD_SKU`, `Quantity`) VALUES (:shoppingCartID, :SKU, :quantity);";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute([
            'customerNumber' => $data['customerNuber'],
            'shoppingCartID' => $data['shoppingCartID'],
            'SKU' => $data['SKU'],
            'quantity' => $data['quantity']
        ]);
    }

    // Methode om een regel aan data te updaten in de tabel shoppingCart.
    public function update($id, $data)
    {
        $sql = "UPDATE CartItems SET Quantity = :Quantity WHERE SC_ShoppingCartID = :shoppingCartId;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute([
            'customerNumber' => $id['customerNumber'],
            'shoppingcartID' => $id['shoppingCartId'],
            'quantity' => $data->getQuantity(),
        ]);
    }

    // Methode om een regel aan data te deleten in de tabel shoppingCart.
    public function delete($id)
    {
        $sql = "DELETE FROM CartItems WHERE SC_ShoppingCartID = :id;
        DELETE FROM ShoppingCarts WHERE CM_CustomerNumber = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

    // Methode om van de associative array een array van de juiste modellen te maken.
    public function arrayToModelArray($object)
    {
        if (count($object) > 1) {
            $scArray = [];
            foreach ($object as $sc) {
                $scArray[] = new shoppingCartModel(
                    $sc['ShoppingCartID'],
                    $this->accountData->getById($sc['AC_Email'])[0],
                );
            }
            return $scArray;
        }

        return new shoppingCartModel(
            $object['ShoppingCartID'],
            $this->accountData->getById($object['AC_Email'])[0],
        );
    }
}
