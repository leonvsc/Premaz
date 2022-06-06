<?php
require "../controller/shoppingCartController.php";
$controller = new shoppingCartController();

if (isset($_POST["submit"])) {
    $controller->create($_POST["SKU"], $_POST["price"]);
}