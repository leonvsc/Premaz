<?php
session_start();

require_once "../controller/cartItemController.php";
require_once "../controller/shoppingCartController.php";
require_once "../model/orderModel.php";
require_once "../data/orderData.php";
require_once "../data/billingAddressData.php";
require_once "../data/customerData.php";
require_once "../controller/accountController.php";
require_once "../controller/customerController.php";

$cartItemController = new cartItemController();
$shoppingCartController = new shoppingCartController();
$orderData = new orderData;
$billingAdressData = new billingAddressData;
$customerData = new customerData;
$accountController = new accountController();
$customerController = new customerController();
$customer = $customerController->readByEmail($_SESSION["email"]);
$customerinfo = $customer[0]->getCustomerNumber();
$billingAdressInfo = $billingAdressData->getByCustomerNumber($customer[0]->getCustomerNumber());

$street = $billingAdressInfo[0]->getStreet();
$houseNumber = $billingAdressInfo[0]->getHouseNumber();
$postalCode = $billingAdressInfo[0]->getPostalCode();
$city = $billingAdressInfo[0]->getCity();
$country = $billingAdressInfo[0]->getCountry();

$shoppingCartData = $shoppingCartController->readByEmail($_SESSION["email"]);
$orderModel = new orderModel(NULL, $street, $customerinfo, $shoppingCartData[0]->getShoppingCartID(), NULL, date("Y/m/d"), NULL);

var_dump($shoppingCartData);
