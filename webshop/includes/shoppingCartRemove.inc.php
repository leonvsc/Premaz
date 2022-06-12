<?php
session_start();

require_once "../controller/cartItemController.php";

$cartItemController = new cartItemController();

$sku = $_GET['SKU'];

$cartItemController->deleteBySKU($sku);

echo "Product uit de winkelwagen verwijderd";