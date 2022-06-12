<?php
// Dit bestand zorgt ervoor dat de data van het csv bestand in de database wordt gezet
require_once "../controller/fileController.php";

$controller = new fileController;

if (isset($_POST['import'])) {
    $controller->import($_FILES['upload']['tmp_name']);
}

?>

<li><a href="../view/adminCSV.php">Go back</a></li>