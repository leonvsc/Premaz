<?php
require "../controller/loginController.php";
$controller = new loginController();

if (isset($_POST["submit"])) {
    $controller->checkLogin($_POST["username"], $_POST["password"]);
}
