<?php
require_once "../controller/productController.php";
require_once "../data/searchData.php";

$productController = new productController;
$searchData = new searchData;

if ((isset($_POST["submit"]))) {

    $results = $productController->getAllWhere($_POST['search']);
}
