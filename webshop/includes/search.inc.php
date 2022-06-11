<?php
require_once "../controller/productController.php";
require_once "../controller/searchController.php";

$productController = new productController;
$searcController = new searchController;

$searchTerm = $_POST["search"];

if ((isset($_POST["submit"]))) {
    $searchResults = $productController->readBySearch($searchTerm);

    if (empty($searchResults)) {
        $searcController->create($searchTerm);
    } else {
        var_dump($searchResults);
    }
}
