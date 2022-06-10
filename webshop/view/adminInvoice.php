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