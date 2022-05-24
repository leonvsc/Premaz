<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] != "Admin") {
    header("Location: ../view/index.php"); // TODO: Redirect to own account page or something else?
}

require_once "../controller/orderController.php";

$controller = new orderController();
$controller->getOrders();
?>

<h1>Bestellingen</h1>

<li><a href="../adminpanel.php">Go back</a></li>