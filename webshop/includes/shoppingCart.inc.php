<?php
require_once "../controller/shoppingCartController.php";
require_once "../model/shoppingCartModel.php";
require_once "../model/accountModel.php";
require_once "";

$controller = new shoppingCartController();

function generateUniqueNumber($prefix)
{
    $number = rand(10000, 99999);
    $num_length = strlen((int)$number);

    if ($num_length == 5) {
        return $prefix . $number;
    }
}


if (isset($_POST["submit"])) {
    $accountmodel = new accountModel($email, $password, $role);
    $shoppingCartModel = new shoppingCartModel(generateUniqueNumber("SC"), $customer, $totalPrice);
    $controller->create($_POST["SKU"], $_POST["price"]);
}