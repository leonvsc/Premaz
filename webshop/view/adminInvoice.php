<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] != "Admin") {
    header("Location: ../view/index.php"); // TODO: Redirect to own account page or something else?
}

require_once "../controller/invoiceController.php";

$controller = new invoiceController();
$invoices = $controller->readAll();

?>
<<<<<<< HEAD

<h1>Facturen</h1>

<thead>
    <tr>
        <td>Factuurnummer</td>
        <td>Prijs</td>
        <td>Factuurdatum</td>
        <td>Betalingsstatus</td>
    </tr>
</thead>

<tbody>
    <?php
    foreach ($invoices as $invoice) {
        $invoiceNumber = $invoice->getInvoiceNumber();
        $price = $invoice->getPayment()->getPrice();
        $date = $invoice->getInvoiceDate();
        $paymentStatus = $invoice->getPayment()->getPaymentStatus();

        echo "<br>";
        echo "<tr>";
        echo "<td>$invoiceNumber</td>";
        echo "<td>$price</td>";
        echo "<td>$date</td>";
        echo "<td>$paymentStatus</td>";
        echo "<a href='invoicedetails.php?invoicenumber={$invoiceNumber}' class='btn btn-primary'>Zie details</a>";
        echo "</tr>";
    }
    ?>
</tbody>

<li><a href="adminpanel.php">Ga terug</a></li>
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Admin - Facturen</title>
</head>

<body>
    <h1>Facturen</h1>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <td>Invoice number</td>
                <td>Prijs</td>
                <td>Date</td>
                <td>Payment status</td>
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
                echo "<td><a href='invoicedetails.php?invoicenumber={$invoiceNumber}' class='btn btn-primary'>View details</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="adminpanel.php" class="btn btn-secondary">Go back</a>
</body>

</html>
>>>>>>> 54-frontend-admin-panel
