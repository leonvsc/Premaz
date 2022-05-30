<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] != "Admin") {
    header("Location: ../view/index.php"); // TODO: Redirect to own account page or something else?
}
require_once "../controller/orderController.php";

$controller = new orderController;

$ordernumber = $_GET['ordernumber'];

$orderdetails = $controller->read($ordernumber);


echo $orderdetails[0]->getOrderNumber();

echo $orderdetails[0]->getCustomer()->getAccount()->getEmail();
?>
<li><a href="adminOrder.php">Go back</a></li>