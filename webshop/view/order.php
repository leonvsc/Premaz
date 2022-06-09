<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestelling</title>
</head>
<body>
    <h1 style="text-align: center">Bestelling - Premaz Webshop</h1>

    <?php
    require_once "../data/orderData.php";
    require_once "../data/billingAddressData.php";
    require_once "../data/customerData.php";
    require_once "../controller/accountController.php";
    require_once "../controller/customerController.php";

    $orderData = new orderData;
    $billingAdressData = new billingAddressData;
    $customerData = new customerData;
    $accountController = new accountController();
    $customerController = new customerController();
    $customer = $customerController->readByEmail($_SESSION["email"]);
    $billingAdressInfo = $billingAdressData->getByCustomerNumber($customer[0]->getCustomerNumber());

    $street = $billingAdressInfo[0]->getStreet();
    $houseNumber = $billingAdressInfo[0]->getHouseNumber();
    $postalCode = $billingAdressInfo[0]->getPostalCode();
    $city = $billingAdressInfo[0]->getCity();
    $country = $billingAdressInfo[0]->getCountry();


    ?>
    <!-- Het factuuradres van de klant tonen -->
    <h5>De straatnaam is: <?php echo $street, 
    ", het huisnummer is: ", 
     $houseNumber, ", de postcode is: ", 
     $postalCode ?></h5>
    <h5>De stad is: <?php echo $city ?></h5>
    <h5>Het land is: <?php echo $country ?></h5>
    <!-- Orderdetails -->
    <!-- Knop komen om te betalen, 
    geeft feedback,
    verwijderd hierna de items uit de shoppingcart,
    Order blijft bestaan en is hierna terug te zien door de klant (zou moeten werken) -->
</body>
</html>