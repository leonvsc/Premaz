<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] != "Admin") {
    header("Location: ../view/index.php"); // TODO: Redirect to own account page or something else?
}

require_once "../controller/orderController.php";

$controller = new orderController();
$orders = $controller->readAll();

?>

<h1>Bestellingen</h1>

<thead>
    <tr>
        <td>Bestelnummer</td>
        <td>Bestelstatus</td>
        <td>Klantnaam</td>
    </tr>
</thead>

<tbody>
    <?php
    foreach ($orders as $order) {
        $customerName = $order->getCustomer()->getFirstName();
        $orderNumber = $order->getOrderNumber();
        $orderStatus = $order->getOrderStatus();

        echo "<br>";
        echo "<tr>";
        echo "<td>$orderNumber</td>";
        echo "<td>$orderStatus</td>";
        echo "<td>$customerName</td>";
        echo "<a href='orderdetails.php?ordernumber={$orderNumber}' class='btn btn-primary'>Zie details</a>";
        echo "</tr>";
    }
    ?>
</tbody>

<li><a href="adminpanel.php">Ga terug</a></li>