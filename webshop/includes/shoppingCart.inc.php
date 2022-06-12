<?php
session_start();

// Dit bestand maakt een winkelwagen aan of voegt een item aan de winkelwagen toe wanneer er een winkelwagen is gemaakt.

require_once "../controller/shoppingCartController.php";
require_once "../model/shoppingCartModel.php";
require_once "../controller/accountController.php";
require_once "../controller/cartItemController.php";
require_once "../model/cartItemModel.php";
require_once "../controller/productController.php";

$shoppingCartController = new shoppingCartController();
$accountController = new accountController();
$cartItemController = new cartItemController();
$productController = new productController();

$account = $accountController->read($_SESSION["email"]);
$shoppingCartModel = new shoppingCartModel(NULL, $account[0]);
$email = $shoppingCartModel->getAccount()->getEmail();

$shoppingCart = $shoppingCartController->readByEmail($email);
$sku = $_GET['SKU'];
$productModel = $productController->read($sku);


if (!$shoppingCart) {
    $createShoppingCart = $shoppingCartController->create($shoppingCartModel);
    echo "Shoppingcart aangemaakt";
    echo "<br />";
    echo "<br />";
    if ($shoppingCart) {
    $cartItem = new CartItemModel(NULL, $shoppingCart[0], $productModel[0], 1);
    $cartItemController->create($cartItem);
    echo "Product toegevoegd";
    }
} else {
    $cartItem = new CartItemModel(NULL, $shoppingCart[0], $productModel[0], 1);
    $cartItemController->create($cartItem);
    echo "Product toegevoegd";
}
