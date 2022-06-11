<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/order.css" />
    <link rel="stylesheet" href="css/webshop-2.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <title>Bestelling</title>
</head>
<body>
    <?php 
    include_once "header.php";
    ?>
    <h1 style="text-align: center">Bestelling - Premaz Webshop</h1>

    <?php
    require_once "../data/orderData.php";
    require_once "../data/billingAddressData.php";
    require_once "../data/customerData.php";
    require_once "../controller/accountController.php";
    require_once "../controller/customerController.php";
    require_once "../model/shoppingCartModel.php";
    require_once "../data/shoppingCartData.php";
    require_once "../data/cartItemData.php";
    require_once "../controller/shoppingCartController.php";

    $orderData = new orderData;
    $billingAdressData = new billingAddressData;
    $customerData = new customerData;
    $cartItemData = new cartItemData;
    $shoppingCartData = new shoppingCartData;
    $shoppingCartController = new shoppingCartController();
    $accountController = new accountController();
    $customerController = new customerController();
    $customer = $customerController->readByEmail($_SESSION["email"]);
    $account = $accountController->read($_SESSION["email"]);
    $shoppingCartModel = new shoppingCartModel(NULL, $account[0]);
    $email = $shoppingCartModel->getAccount()->getEmail();
    $shoppingCartId = $shoppingCartData->getByEmail($email);
    $allCartItemData = $cartItemData->getById($shoppingCartId[0]->getShoppingCartID());
    $billingAdressInfo = $billingAdressData->getByCustomerNumber($customer[0]->getCustomerNumber());

    $street = $billingAdressInfo[0]->getStreet();
    $houseNumber = $billingAdressInfo[0]->getHouseNumber();
    $postalCode = $billingAdressInfo[0]->getPostalCode();
    $city = $billingAdressInfo[0]->getCity();
    $country = $billingAdressInfo[0]->getCountry();

    for ($i = 0; $i < count($allCartItemData); ++$i) {
        echo 
        '<div class="product-image-div">',
        '<a class="col products-list" href="product.php?SKU=', 
        $allCartItemData[$i]->getProduct()->getSKU(), 
        '">',
        '<img src="img/products/', 
        $allCartItemData[$i]->getProduct()->getSKU(), 
        '.jpg" alt="Product Image" class="product-image" />',
        '</a>',
        '</div>',
        '<li>',
        '<a class="col" href="webshop.php">',
        'Naam: ',
        $allCartItemData[$i]->getProduct()->getProductName(),
        '</li>',
        '<li>',
        '<a class="col" href="webshop.php">',
        'Prijs: €',
        $allCartItemData[$i]->getProduct()->getPrice(),
        '</li>',
        '<li>',
        'Categorie: ',
        $allCartItemData[$i]->getProduct()->getCategory(),
        '</li>',
        '<li>',
        'Quantity ',
        $allCartItemData[$i]->getQuantity(),
        '</a>',
        '</li>',
        '<hr>';
    }


    ?>
    <!-- Het factuuradres van de klant tonen -->
    <h4>Adresgegevens:</h4>
    <h5>Straatnaam en huisnummer: <?php echo $street, ' ', $houseNumber ?></h5>
    <h5>Postcode: <?php echo $postalCode ?></h5>
    <h5>Stad: <?php echo $city ?></h5>
    <h5>Land: <?php echo $country ?></h5>
    <a href="../includes/order.inc.php" class="btn">Betaal de bestelling</a>
    <!-- Orderdetails -->
    <!-- Knop komen om te betalen, 
    geeft feedback,
    verwijderd hierna de items uit de shoppingcart,
    Order blijft bestaan en is hierna terug te zien door de klant (zou moeten werken) -->
    <?php 
    include_once "footer.php";
    ?>
</body>
</html>