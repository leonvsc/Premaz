<?php
require_once "../controller/productController.php";

$controller = new productController;

if ((isset($_POST["submit"]))) {
    $searchResults = $controller->readBySearch($_POST["search"]);
    var_dump($searchResults);
}
