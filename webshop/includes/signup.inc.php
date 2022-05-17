<?php
require_once '../controller/userController.php';
require_once '../model/accountModel.php';
require_once '../model/customerModel.php';
require_once '../model/billingAddressModel.php';
require_once '../model/shippingAddressModel.php';
$controller = new userController();

function generateCustomerNumber($prefix)
{
    $number = rand(000000, 999999);

    if ($number == 6) {
        return $prefix . $number;
    } else {
        $number;
    }
}

echo generateCustomerNumber('CM');

if (isset($_POST["submit"])) {
    $accountModel = new accountModel($_POST["email"], $_POST["password"], "User");
    $billingAddressModel = new billingAddressModel(uniqid(), $_POST["street"], $_POST["house-number"], $_POST["postal-code"], $_POST["city"], $_POST["country"]);
    $shippingAddressModel = new shippingAddressModel(uniqid(), $_POST["street"], $_POST["house-number"], $_POST["postal-code"], $_POST["city"], $_POST["country"]);
    $customerModel = new customerModel(rand(000000, 999999), $accountModel, $billingAddressModel, $shippingAddressModel, $_POST["firstname"], $_POST["lastname"], $_POST["phonenumber"]);

    // TODO: Random customer number met een prefix van CM er bijvoorbeeld voor.

    if ($_POST["password"] == $_POST["repeat-password"]) {
        $controller->SignUp($accountModel, $customerModel);
    } else {
        echo "Sign up failed: passwords are not the same"; //TODO: Maak een mooiere error. Error pagina Issue #37
    }
}
