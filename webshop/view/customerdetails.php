<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] != "Admin") {
    header("Location: ../view/index.php"); // TODO: Redirect to own account page or something else?
}
require_once "../controller/customerController.php";
require_once "../controller/billingAddressController.php";
require_once "../controller/shippingAddressController.php";

$customerController = new customerController;
$baController = new billingAddressController;
$saController = new shippingAddressController;

$customernumber = $_GET['customernumber'];

$customerdetails = $customerController->read($customernumber);
$baDetails = $baController->readCustomerNumber($customernumber);
$saDetails = $saController->readCustomerNumber($customernumber);


echo $customerdetails[0]->getCustomerNumber();

echo $baDetails[0]->getStreet();

echo $saDetails[0]->getCity();

// TODO: Maak een mooie detail pagina met juiste info
// Bij klanten die geen adres gelinkt hebben komt er een foutmelding.

?>
<li><a href="adminCustomers.php">Ga terug</a></li>