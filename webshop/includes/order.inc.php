<?php
session_start();

require_once "../controller/cartItemController.php";
require_once "../controller/shoppingCartController.php";
require_once "../model/orderModel.php";
// require_once "../data/orderData.php";
require_once "../data/shippingAddressData.php";
require_once "../data/customerData.php";
require_once "../controller/accountController.php";
require_once "../controller/customerController.php";
require_once "../controller/orderController.php";

$orderController = new orderController();
$cartItemController = new cartItemController();
$shoppingCartController = new shoppingCartController();
$orderData = new orderData;
$shippingAdressData = new shippingAddressData;
$customerData = new customerData;
$accountController = new accountController();
$customerController = new customerController();
$customer = $customerController->readByEmail($_SESSION["email"]);
$customerinfo = $customer[0]->getCustomerNumber();
$shippingAdressInfo = $shippingAdressData->getByCustomerNumber($customer[0]->getCustomerNumber());
var_dump($shippingAdressInfo);

$street = $shippingAdressInfo[0]->getStreet();
$houseNumber = $shippingAdressInfo[0]->getHouseNumber();
$postalCode = $shippingAdressInfo[0]->getPostalCode();
$city = $shippingAdressInfo[0]->getCity();
$country = $shippingAdressInfo[0]->getCountry();

$shoppingCartData = $shoppingCartController->readByEmail($_SESSION["email"]);
$orderModel = new orderModel(NULL, $shippingAdressInfo[0], $customer[0], $shoppingCartData[0], NULL, date("Y/m/d"), NULL);
$shoppingCartid = $orderModel->getShoppingCart()->getShoppingCartID();
$createOrder = $orderController->create($orderModel);
var_dump($orderModel);

var_dump($shoppingCartData);
