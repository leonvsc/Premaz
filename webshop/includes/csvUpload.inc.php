<?php

require_once "../controller/fileController.php";

$controller = new fileController;

if (isset($_POST['import'])) {
    $controller->import($_FILES['upload']['tmp_name']);
}

?>

<li><a href="../view/adminCSV.php">Go back</a></li>