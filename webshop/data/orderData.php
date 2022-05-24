<?php
require_once "database.php";
require_once "../model/orderModel.php";

class orderData
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getAllOrders()
    {
        $sql = "SELECT Orders.OrderNumber, Orders.OrderStatus, Orders.OrderDate, Customers.CustomerNumber, Customers.FirstName, Customers.LastName FROM  Orders INNER JOIN Customers ON Orders.CM_CustomerNumber=Customers.CustomerNumber;";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $orderArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->ObjectToModel($orderArray);
    }

    public function ObjectToModel($result)
    {
        if (!empty($result)) {
            $orders = [];
            while ($row = $result) {
                $orderModel = new orderModel(
                    $row['orderNumber'],
                    $row[null],
                    $row['CustomerNumber'],
                    $row[null],
                    $row[null],
                    $row[null],
                    $row['orderStatus'],
                    $row['orderDate']
                );

                $orderModel->setOrderNumber($row['orderNumber']);
                $orderModel->setShippingAddress($row[null]);
                $orderModel->setCustomer($row['CustomerNumber']);
                $orderModel->setPayment($row[null]);
                $orderModel->setShoppingCart($row[null]);
                $orderModel->setTrackAndTrace($row[null]);
                $orderModel->setOrderStatus($row['orderStatus']);
                $orderModel->setOrderDate($row['orderDate']);

                $orders[] = $orderModel;
            }
            return $orders;
        }
    }
}
