<?php
require_once "database.php";
require_once "../model/orderOverviewModel.php";
require_once "crudData.php";
require_once "shoppingCartData.php";
require_once "customerData.php";
require_once "shippingAddressData.php";
require_once "exceptions.php";

// Klasse voor alle SQL van order. Hier wordt gebruikt gemaakt van de interface ICrudData om deze klasse verplichte functies te geven.
class orderData implements ICrudData
{
    private $db;


    public function __construct()
    {
        $this->db = new database();
        $this->shoppingCart = new shoppingCartData();
        $this->customer = new customerData();
        $this->shippingAddress = new shippingAddressData();
    }

    // Methode om alle data binnen te halen van de tabel order.
    public function getAll()
    {
        $sql = "SELECT * FROM Orders;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $orderArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($orderArray);
    }

    // Methode om alle data binnen te halen van de tabel order gefiltert op de primary key (OrderNumber).
    public function getById($id)
    {
        $sql = "SELECT * FROM Orders WHERE OrderNumber = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
        $orderArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($orderArray);
    }

    // Methode om alle data binnen te halen van de tabel order gefiltert op CustomerNumber.
    public function getAllByCustomerNumber($customerNumber)
    {
        $sql = "SELECT * FROM Orders where CM_CustomerNumber = :customernumber;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['customernumber' => $customerNumber]);
        $orderArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->arrayToModelArray($orderArray);
    }

    // Methode om een nieuwe regel aan data te creeren in de tabel order.
    public function create($data)
    {
        $sql = "INSERT INTO Orders (`SA_ShippingAddressID`, CM_CustomerNumber, SC_ShoppingCartID, OrderStatus, OrderDate, `TotalPrice`) VALUES (:SA_ShippingAddressID, :CM_CustomerNumber, :SC_ShoppingCartID, :OrderStatus, :OrderDate, :TotalPrice);";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute([
            'SA_ShippingAddressID' => $data->getShippingAddress()->getShippingAddressID(),
            'CM_CustomerNumber' => $data->getCustomer()->getCustomerNumber(),
            'SC_ShoppingCartID' => $data->getShoppingCart()->getShoppingCartID(),
            'OrderStatus' => $data->getOrderStatus(),
            'OrderDate' => $data->getOrderDate(),
            'TotalPrice' => $data->getTotalPrice()
        ]);
    }

    // Methode om een regel aan data te updaten in de tabel order.
    public function update($id, $data)
    {
        $sql = "UPDATE Orders SET OrderNumber = :OrderNumber, CustomerNumber = :CustomerNumber, OrderDate = :OrderDate, OrderStatus = :OrderStatus WHERE OrderNumber = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['OrderNumber' => $data->OrderNumber, 'CustomerNumber' => $data->CustomerNumber, 'OrderDate' => $data->OrderDate, 'OrderStatus' => $data->OrderStatus, 'id' => $id]);
    }

    // Methode om een regel aan data te deleten in de tabel order.
    public function delete($id)
    {
        $sql = "DELETE FROM Orders WHERE OrderNumber = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

    // Methode om van de associative array een array van de juiste modellen te maken.
    public function arrayToModelArray($object)
    {
        $orderArray = [];

        foreach ($object as $order) {
            $orderArray[] = new orderModel(
                $order['OrderNumber'],
                $this->shippingAddress->getShippingAddressID($order['SA_ShippingAddressID'])[0],
                $this->customer->getCustomerNumber($order['CM_CustomerNumber'])[0],
                $this->shoppingCart->getById($order['SC_ShoppingCartID'])[0],
                $order['OrderStatus'],
                $order['OrderDate'],
                $order['TotalPrice'],
            );
        }
        return $orderArray;
    }
}
