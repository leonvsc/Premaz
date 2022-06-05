<?php

require_once "../controller/fileController.php";

$controller = new fileController;

if (isset($_POST["submit"])) {
    $controller->import($_POST["file"]);
}
