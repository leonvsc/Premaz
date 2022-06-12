<?php
session_start();

require_once "../controller/cartItemController.php";
require_once "../controller/shoppingCartController.php";
require_once "../model/orderModel.php";
require_once "../controller/accountController.php";
require_once "../controller/customerController.php";
require_once "../controller/orderController.php";
require_once "../controller/shippingAddressController.php";
require_once "../controller/billingAddressController.php";
require_once "../model/invoiceModel.php";
require_once "../data/shippingAddressData.php";
require_once "../controller/invoiceController.php";
require_once "../data/orderData.php";
$orderController = new orderController();
$cartItemController = new cartItemController();
$invoiceController = new invoiceController();
$shoppingCartController = new shoppingCartController();
$accountController = new accountController();
$customerController = new customerController();
$shippingAddressController = new shippingAddressController();
$billingAddressController = new billingAddressController();

$customer = $customerController->readByEmail($_SESSION["email"]);
$shippingAddressModel = $shippingAddressController->readCustomerNumber($customer[0]->getCustomerNumber());
$billingAddressModel = $billingAddressController->readCustomerNumber($customer[0]->getCustomerNumber());

$shoppingCartData = $shoppingCartController->readByEmail($_SESSION["email"]);
$orderModel = new orderModel(NULL, $shippingAddressModel[0], $customer[0], $shoppingCartData[0], "Betaald", date("Y/m/d"), 100.50);

$createOrder = $orderController->create($orderModel);
$orderNumber = $createOrder["OrderNumber"];

$orderModel->setOrderNumber($orderNumber);

$invoiceModel = new invoiceModel(NULL, $billingAddressModel[0], $orderModel, NULL, date("Y/m/d"));

$createInvoice = $invoiceController->create($invoiceModel);

$cartItemController->delete($shoppingCartData[0]->getShoppingCartID());

echo "De bestelling is betaald",
'<br />',
'<br />',
'<br />',
'<a href="../view/productOverview.php">Keer terug naar de productenpagina</a>';