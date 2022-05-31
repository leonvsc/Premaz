<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
}
// } elseif ($_SESSION["role"] != "Admin") {
//     header("Location: ../view/index.php"); // TODO: Redirect to own account page or something else?
// }
require_once "../controller/invoiceController.php";
require_once "../controller/billingAddressController.php";

$invoiceController = new invoiceController();

$invoicenumber = $_GET['invoicenumber'];

$invoicedetails = $invoiceController->read($invoicenumber);


echo $invoicedetails[0]->getInvoiceNumber();

echo $invoicedetails[0]->getBillingAddress()->getStreet();

echo $invoicedetails[0]->getPayment()->getPrice();

echo $invoicedetails[0]->getPayment()->getMethod();


// TODO: Maak een mooie detail pagina met juiste info

// TODO: We kunnen deze pagina voor een klant en admin gebruiken. Of we maken 2 aparte.


if ($_SESSION["role"] != "Admin") {
    echo "<li><a href='customerInvoice.php'>Go back</a></li>";
} else {
    echo "<li><a href='adminInvoice.php'>Go back</a></li>";
}
