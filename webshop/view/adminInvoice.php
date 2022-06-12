<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] != "Admin") {
    header("Location: ../view/index.php");
} 

if ($_SESSION["role"] == "User" && isset($_SESSION["email"])) {
    header("Location: ../view/account.php");
}

require_once "../controller/invoiceController.php";

$controller = new invoiceController();
$invoices = $controller->readAll();

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
    <title>Admin - Facturen</title>
</head>

<body>
    <?php 
    include_once "header.php";
    ?>
    <div class="margin-left margin-right">
    <h1>Facturen</h1>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <td>Factuurnummer</td>
                <td>Prijs</td>
                <td>Datum</td>
                <td>Betaalstatus</td>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($invoices as $invoice) {
                $invoiceNumber = $invoice->getInvoiceNumber();
                $price = $invoice->getPayment()->getPrice();
                $date = $invoice->getInvoiceDate();
                $paymentStatus = $invoice->getPayment()->getPaymentStatus();

                echo "<tr>";
                echo "<td>$invoiceNumber</td>";
                echo "<td>$price</td>";
                echo "<td>$date</td>";
                echo "<td>$paymentStatus</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="adminpanel.php" class="btn btn-secondary">Ga terug</a>
    </div>
    <?php 
    include_once "footer.php";
    ?>
</body>

</html>
