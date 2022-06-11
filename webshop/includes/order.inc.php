<?php
session_start();

require_once "../controller/cartItemController.php";
require_once "../controller/shoppingCartController.php";
require_once "../model/orderModel.php";
require_once "../data/shippingAddressData.php";
require_once "../data/customerData.php";
require_once "../controller/accountController.php";
require_once "../controller/customerController.php";
require_once "../controller/orderController.php";
require_once "../model/invoiceModel.php";
require_once "../data/shippingAddressData.php";
require_once "../controller/invoiceController.php";
require_once "../data/orderData.php";

$orderController = new orderController();
$cartItemController = new cartItemController();
$invoiceController = new invoiceController();
$shoppingCartController = new shoppingCartController();
$orderData = new orderData;
$shippingAdressData = new shippingAddressData;
$billingAdressData = new billingAddressData;
$customerData = new customerData;
$accountController = new accountController();
$customerController = new customerController();
$customer = $customerController->readByEmail($_SESSION["email"]);
$customerinfo = $customer[0]->getCustomerNumber();
$shippingAdressInfo = $shippingAdressData->getByCustomerNumber($customer[0]->getCustomerNumber());
$billingAdressInfo = $billingAdressData->getByCustomerNumber($customer[0]->getCustomerNumber());

$shoppingCartData = $shoppingCartController->readByEmail($_SESSION["email"]);
$orderModel = new orderModel(NULL, $shippingAdressInfo[0], $customer[0], $shoppingCartData[0], "Betaald", date("Y/m/d"), 100.50);
$shoppingCartid = $orderModel->getShoppingCart()->getShoppingCartID();
var_dump($shoppingCartid);
$createOrder = $orderController->create($orderModel);
$orderShoppingCartId = $orderController->read($shoppingCartid);
var_dump($orderShoppingCartId);
$invoiceModel = new invoiceModel(NULL, $billingAdressInfo[0], $orderShoppingCartId[0], NULL, date("Y/m/d"));
$createInvoice = $invoiceController->create($inoviceModel);
// $orderInfo = $orderData->
$cartItemController->delete($shoppingCartid);

echo "De bestelling is betaald",
    '<br />',
    '<br />',
    '<br />',
    '<a href="../view/productOverview.php">Keer terug naar de productenpagina</a>';