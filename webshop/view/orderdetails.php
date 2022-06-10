<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
}
// } elseif ($_SESSION["role"] != "Admin") {
//     header("Location: ../view/index.php"); // TODO: Redirect to own account page or something else?
// }
require_once "../controller/orderController.php";

$controller = new orderController;

$ordernumber = $_GET['ordernumber'];

$orderdetails = $controller->read($ordernumber);


echo $orderdetails[0]->getOrderNumber();

echo $orderdetails[0]->getCustomer()->getAccount()->getEmail();

// TODO: Maak een mooie detail pagina met juiste info

// TODO: We kunnen deze pagina voor een klant en admin gebruiken. Of we maken 2 aparte.

if ($_SESSION["role"] != "Admin") {
    echo "<li><a href='customerOrder.php'>Ga terug</a></li>";
} else {
    echo "<li><a href='adminOrder.php'>Ga terug</a></li>";
}
