<?php
require_once '../controller/userController.php';
require_once '../model/accountModel.php';
require_once '../model/customerModel.php';
$controller = new userController();

if (isset($_POST["submit"])) {
    $accountModel = new accountModel($_POST["email"], $_POST["password"], "User");
    $customerModel = new customerModel(uniqid(), $accountModel, (object)[], (object)[], $_POST["firstname"], $_POST["lastname"], $_POST["phonenumber"]);

    if ($_POST["password"] == $_POST["repeat_password"]) {
        $controller->SignUp($accountModel, $customerModel);
    } else {
        echo "Sign up failed: passwords are not the same"; //TODO: make it look nice
    }
}
