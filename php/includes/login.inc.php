<?php
require "../controller/userController.php";
$controller = new userController();

if (isset($_POST["submit"])) {
    $controller->checkLogin();
    $controller->checkLoginCon($_POST["username"], $_POST["password"]);
}
