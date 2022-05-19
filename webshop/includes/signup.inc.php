<?php
require_once '../controller/userController.php';
require_once '../model/accountModel.php';
require_once '../model/customerModel.php';
$controller = new userController();

function generateUniqueNumber($prefix)
{
    $number = rand(10000, 99999);
    $num_length = strlen((int)$number);

    if ($num_length == 5) {
        return $prefix . $number;
    }
}

if (isset($_POST["submit"])) {
    $accountModel = new accountModel($_POST["email"], $_POST["password"], "User");
    $customerModel = new customerModel(generateUniqueNumber("CM"), $accountModel, $_POST["firstname"], $_POST["lastname"], $_POST["phonenumber"]);

    if ($_POST["password"] == $_POST["repeat-password"]) {
        $controller->SignUp($accountModel, $customerModel);
    } else {
        echo "Sign up failed: passwords are not the same"; //TODO: Maak een mooiere error. Error-pagina Issue #37
    }
}
