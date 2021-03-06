<?php
session_start();
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/webshop-2.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <title>Customer - Bestellingen</title>
</head>

<body>
    <?php 
    include_once "header.php";
    echo '<div class="margin-left margin-right">';
    if (isset($_SESSION["email"])) {
        $email = $_SESSION["email"];
        echo "<div class='list-group align-items-start'>";
        echo "<a href='account.php' class='list-group-item'>$email</a>";
        echo "<a href='../includes/logout.inc.php' class='list-group-item'>LOGOUT</a>";
        echo "</div>";
    } else {
    
        echo "<li><a href='signup.php'>SIGN UP</a></li>";
        echo "<li><a href='login.php'>Login</a></li>";
    }

    
    require_once "../controller/orderController.php";
    require_once "../controller/customerController.php";
    
    $controller = new orderController;
    $customerController = new customerController;
    
    $customer = $customerController->readByEmail($_SESSION["email"]);
    $customerNumber = $customer[0]->getCustomerNumber();
    $orders = $controller->readByCustomerNumber($customerNumber);
    ?>
    <h1>Bestellingen</h1>
    <?php
    if (empty($orders)) {
        echo "Geen bestellingen beschikbaar";
    } else { ?>
        <table class="table table-hover table-bordered">
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

                echo "<tr>";
                echo "<td>$orderNumber</td>";
                echo "<td>$orderStatus</td>";
                echo "<td>$orderDate</td>";
                echo "</tr>";
            }
        }

            ?>
            </tbody>
        </table>
        <?php 
        echo '</div>';
        include_once "footer.php";
        ?>
</body>

</html>
