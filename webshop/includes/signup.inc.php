<?php
require_once '../controller/loginController.php';
require_once '../model/accountModel.php';
require_once '../model/customerModel.php';
require_once '../model/billingAddressModel.php';
require_once '../model/shippingAddressModel.php';

$controller = new loginController();

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
    $billingAddressModel = new billingAddressModel(NULL, $customerModel, $_POST["street"], $_POST["house-number"], $_POST["postal-code"], $_POST["city"], $_POST["country"]);
    $shippingAddressModel = new shippingAddressModel(NULL, $customerModel, $_POST["street"], $_POST["house-number"], $_POST["postal-code"], $_POST["city"], $_POST["country"]);

    if ($_POST["password"] == $_POST["repeat-password"]) {
        $controller->SignUp($accountModel, $customerModel, $billingAddressModel, $shippingAddressModel);
    } else {
        echo "Sign up failed: passwords are not the same"; //TODO: Maak een mooiere error. Error-pagina Issue #37
    }
}
