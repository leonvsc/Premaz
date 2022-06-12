<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] != "Admin") {
    header("Location: ../view/webshop.php");
} 

if ($_SESSION["role"] == "User" && isset($_SESSION["email"])) {
    header("Location: ../view/account.php");
}


require_once "../controller/orderController.php";

$controller = new orderController();
$orders = $controller->readAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/webshop-2.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <title>Admin - Orders</title>
</head>

<body>
    <?php 
    include_once "header.php";
    ?>
    <div class="margin-left margin-right">
    <h1>Bestellingen</h1>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <td>Order Number</td>
                <td>Order Status</td>
                <td>Customer Name</td>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($orders as $order) {
                $customerName = $order->getCustomer()->getFirstName();
                $orderNumber = $order->getOrderNumber();
                $orderStatus = $order->getOrderStatus();

                echo "<tr>";
                echo "<td>$orderNumber</td>";
                echo "<td>$orderStatus</td>";
                echo "<td>$customerName</td>";
                echo "<td><a href='orderdetails.php?ordernumber={$orderNumber}' class='btn btn-primary'>View details</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="adminpanel.php" class="btn btn-secondary">Go back</a>
    </div>
    <?php 
    include_once "footer.php";
    ?>
</body>

</html>
