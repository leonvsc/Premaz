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
<h1>Facturen</h1>
<?php
if (empty($invoices)) {
    echo "Geen facturen beschikbaar";
} else { ?>
    <thead>
        <tr>
            <td>Factuurnummer</td>
            <td>Factuurdatum</td>
            <td>Prijs</td>
            <td>Betaalmethode</td>
            <td>Status</td>
            <td>Betaaldatum</td>
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
        echo "<a href='invoicedetails.php?invoicenumber={$invoiceNumber}' class='btn btn-primary'>Zie details</a>";
        echo "</tr>";
    }
}
    ?>
    </tbody>