<?php
session_start();

if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
    echo "<li><a href='account.php'>$email</a></li>";
    echo "<li><a href='../includes/logout.inc.php'>LOGOUT</a></li>";
} else {

    echo "<li><a href='signup.php'>SIGN UP</a></li>";
    echo "<li><a href='login.php'>Login</a></li>";
}
// TODO: Afschermen zodat alleen de juiste gebruiker hierbij kan.

require_once "../controller/orderController.php";
require_once "../controller/customerController.php";

$controller = new orderController;
$customerController = new customerController;

$customer = $customerController->readByEmail($_SESSION["email"]);
$customerNumber = $customer[0]->getCustomerNumber();
$orders = $controller->readByCustomerNumber($customerNumber);

?>

<h1>Bestellingen</h1>

<thead>
    <tr>
        <td>Order Number</td>
        <td>Order Status</td>
        <td>Order Date</td>
    </tr>
</thead>

<tbody>
    <?php
    foreach ($orders as $order) {
        $orderNumber = $order->getOrderNumber();
        $orderStatus = $order->getOrderStatus();
        $orderDate = $order->getOrderDate();

        echo "<br>";
        echo "<tr>";
        echo "<td>$orderNumber</td>";
        echo "<td>$orderStatus</td>";
        echo "<td>$orderDate</td>";
        echo "<a href='orderdetails.php?ordernumber={$orderNumber}' class='btn btn-primary'>View details</a>";
        echo "</tr>";
    }
    ?>
</tbody>