<?php
require_once "database.php";
require_once "../model/orderModel.php";
require_once "crudData.php";
require_once "shoppingCartData.php";
require_once "paymentData.php";
require_once "customerData.php";
require_once "shippingAddressData.php";

class orderData implements ICrudData
{
    private $db;


    public function __construct()
    {
        $this->db = new database();
        $this->shoppingCart = new shoppingCartData();
        $this->customer = new customerData();
        $this->payment = new paymentData();
        $this->shippingAddress = new shippingAddressData();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM Orders;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $orderArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->ObjectToModel($orderArray);
    }

    public function getAllByCustomerNumber($customerNumber)
    {
        $sql = "SELECT * FROM  Orders INNER JOIN Customers ON Orders.CM_CustomerNumber=Customers.CustomerNumber; ";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $orderArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->ObjectToModel($orderArray);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM Orders WHERE OrderNumber = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
        $orderArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->ObjectToModel($orderArray);
    }

    public function create($data)
    {
        $sql = "INSERT INTO Orders (OrderNumber, CustomerNumber, OrderDate, OrderStatus) VALUES (:OrderNumber, :CustomerNumber, :OrderDate, :OrderStatus);";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['OrderNumber' => $data->OrderNumber, 'CustomerNumber' => $data->CustomerNumber, 'OrderDate' => $data->OrderDate, 'OrderStatus' => $data->OrderStatus]);
    }
    public function update($id, $data)
    {
        $sql = "UPDATE Orders SET OrderNumber = :OrderNumber, CustomerNumber = :CustomerNumber, OrderDate = :OrderDate, OrderStatus = :OrderStatus WHERE OrderNumber = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['OrderNumber' => $data->OrderNumber, 'CustomerNumber' => $data->CustomerNumber, 'OrderDate' => $data->OrderDate, 'OrderStatus' => $data->OrderStatus, 'id' => $id]);
    }
    public function delete($id)
    {
        $sql = "DELETE FROM Orders WHERE OrderNumber = :id;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

    public function objectToModel($result)
    {
        if (!empty($result)) {
            $orders = [];;
            for ($i = 0; $i < count($result); $i++) {
                $orderModel = new orderModel(
                    $result[$i]['OrderNumber'],
                    $this->shippingAddress->getById($result[$i]['SA_ShippingAddressID']),
                    $this->customer->getById($result[$i]['CM_CustomerNumber'])[0],
                    $this->payment->getById($result[$i]['PM_PaymentID'])[0],
                    $this->shoppingCart->getById($result[$i]['SC_ShoppingCartID'])[0],
                    $result[$i]['TrackAndTrace'],
                    $result[$i]['OrderStatus'],
                    $result[$i]['OrderDate']
                );
                $orders[] = $orderModel;
            }

            return $orders;
        }
    }
}
