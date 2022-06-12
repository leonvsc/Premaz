<?php
// Dit bestand zorgt ervoor dat er bij een login gekeken wordt of de genoteerde informatie juist is
require "../controller/loginController.php";
$controller = new loginController();

if (isset($_POST["submit"])) {
    $controller->checkLogin($_POST["username"], $_POST["password"]);
}
