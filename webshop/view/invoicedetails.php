<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] != "Admin") {
    header("Location: ../view/index.php"); // TODO: Redirect to own account page or something else?
}
require_once "../controller/invoiceController.php";
require_once "../controller/billingAddressController.php";

$invoiceController = new invoiceController();

$invoicenumber = $_GET['invoicenumber'];

$invoicedetails = $invoiceController->read($invoicenumber);


echo $invoicedetails[0]->getInvoiceNumber();

echo $invoicedetails[0]->getBillingAddress()->getStreet();

echo $invoicedetails[0]->getPayment()->getPrice();


// TODO: Maak een mooie detail pagina met juiste info

?>
<li><a href="adminInvoice.php">Go back</a></li>