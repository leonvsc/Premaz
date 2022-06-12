<?php
require_once "../controller/productController.php";
require_once "../controller/searchController.php";

$productController = new productController;
$searchController = new searchController;
$searchTerm = $_POST["search"];

if ((isset($_POST["submit"]))) {

    $results = $productController->getAllWhere($_POST['search']);

    if (empty($results)) {
        $searchController->create($searchTerm);
    }
}
