<?php
session_start();

// TODO: Opschonen.

require_once "../controller/shoppingCartController.php";
require_once "../model/shoppingCartModel.php";
require_once "../controller/accountController.php";
require_once "../controller/cartItemController.php";
require_once "../model/cartItemModel.php";
require_once "../controller/productController.php";

// $shoppingCartController = new shoppingCartController();
// $accountController = new accountController();
// $cartItemController = new cartItemController();
// $productController = new productController();

// $account = $accountController->read($_SESSION["email"]);
// $shoppingCartModel = new shoppingCartModel(NULL, $account[0]);
// $email = $shoppingCartModel->getAccount()->getEmail();

// $shoppingCart = $shoppingCartController->readByEmail($email);
// $sku = $_GET['SKU'];
// $productModel = $productController->read($sku);

$shoppingCartController = new shoppingCartController();
    $accountController = new accountController();
    $cartItemData = new cartItemData;
    $shoppingCartData = new shoppingCartData;
    $account = $accountController->read($_SESSION["email"]);
    $shoppingCartModel = new shoppingCartModel(NULL, $account[0]);
    $email = $shoppingCartModel->getAccount()->getEmail();
    $shoppingCartId = $shoppingCartData->getByEmail($email);
    $allCartItemData = $cartItemData->getById($shoppingCartId[0]->getShoppingCartID());

// TODO: Als er nog geen shoppingcart is aangemaakt, maak deze aan en voeg daarna het product toe aan de winkelwagen.
// Momenteel moet je 2x klikken. 1x voor het aanmaken van de shoppingcart en 1x voor het toevoegen van de producten.

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