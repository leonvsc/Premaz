<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
}
// } elseif ($_SESSION["role"] != "Admin") {
//     header("Location: ../view/index.php");
require_once "../controller/orderController.php";

$controller = new orderController;

$ordernumber = $_GET['ordernumber'];

$orderdetails = $controller->readForOverview($ordernumber);


echo $orderdetails[0]->getOrderNumber();

echo $orderdetails[0]->getCustomer()->getAccount()->getEmail();

if ($_SESSION["role"] != "Admin") {
    echo "<li><a href='customerOrder.php'>Ga terug</a></li>";
} else {
    echo "<li><a href='adminOrder.php'>Ga terug</a></li>";
}
