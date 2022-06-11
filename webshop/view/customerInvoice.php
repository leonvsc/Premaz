<?php
session_start();

if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
    echo "<div class='list-group align-items-start'>";
    echo "<a href='account.php' class='list-group-item '>$email</a>";
    echo "<a href='../includes/logout.inc.php' class='list-group-item'>LOGOUT</a>";
    echo "</div>";
} else {

    echo "<li><a href='signup.php'>SIGN UP</a></li>";
    echo "<li><a href='login.php'>Login</a></li>";
}
// TODO: Afschermen zodat alleen de juiste gebruiker hierbij kan.

require_once "../controller/invoiceController.php";
require_once "../controller/billingAddressController.php";
require_once "../controller/customerController.php";

$invoiceController = new invoiceController;
$baController = new billingAddressController;
$customerController = new customerController;

$customer = $customerController->readByEmail($_SESSION["email"]);
$customerNumber = $customer[0]->getCustomerNumber();
$ba = $baController->readCustomerNumber($customerNumber);
$baID = $ba[0]->getBillingAddressID();

$invoices = $invoiceController->readByBillingAddressID($baID);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Customer - Facturen</title>
</head>

<body>
    <h1>Facturen</h1>
    <?php
    if (empty($invoices)) {
        echo "Geen facturen beschikbaar";
    } else { ?>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <td>Factuurnummer</td>
                    <td>Factuurdatum</td>
                    <td>Prijs</td>
                    <td>Methode</td>
                    <td>Satus</td>
                    <td>betaaldatum</td>
                </tr>
            </thead>

            <tbody>
            <?php
            foreach ($invoices as $invoice) {
                $invoiceNumber = $invoice->getInvoiceNumber();
                $invoiceDate = $invoice->getInvoiceDate();
                $price = $invoice->getPayment()->getPrice();
                $method = $invoice->getPayment()->getMethod();
                $status = $invoice->getPayment()->getPaymentStatus();
                $paymentDate = $invoice->getPayment()->getPaymentDate();

                echo "<br>";
                echo "<tr>";
                echo "<td>$invoiceNumber</td>";
                echo "<td>$invoiceDate</td>";
                echo "<td>$price</td>";
                echo "<td>$method</td>";
                echo "<td>$status</td>";
                echo "<td>$paymentDate</td>";
                echo "<td><a href='invoicedetails.php?invoicenumber={$invoiceNumber}' class='btn btn-primary'>View details</a></td>";
                echo "</tr>";
            }
        }
            ?>
            </tbody>
        </table>
</body>

</html>
