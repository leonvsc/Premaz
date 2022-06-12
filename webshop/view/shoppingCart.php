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
    <link rel="stylesheet" href="css/shoppingCart.css" />
    <link rel="stylesheet" href="css/webshop-2.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <title>Winkelwagen</title>
</head>
<body>
    <?php 
    include_once "header.php";
    ?>
    <h1 style="text-align: center">Winkelwagen - Premaz Webshop</h1>
    <?php
    require_once "../controller/shoppingCartController.php";
    require_once "../data/cartItemData.php";
    require_once "../controller/accountController.php";
    require_once "../model/shoppingCartModel.php";
    require_once "../data/shoppingCartData.php";

    $shoppingCartController = new shoppingCartController();
    $accountController = new accountController();
    $cartItemData = new cartItemData;
    $shoppingCartData = new shoppingCartData;
    $account = $accountController->read($_SESSION["email"]);
    $shoppingCartModel = new shoppingCartModel(NULL, $account[0]);
    $email = $shoppingCartModel->getAccount()->getEmail();
    $shoppingCartId = $shoppingCartData->getByEmail($email);
    $allCartItemData = $cartItemData->getById($shoppingCartId[0]->getShoppingCartID());

    for ($i = 0; $i < count($allCartItemData); ++$i) {
        echo 
        '<div class="product-image-div margin-left">',
        '<a class="col products-list" href="product.php?SKU=', 
        $allCartItemData[$i]->getProduct()->getSKU(), 
        '">',
        '<img src="img/products/', 
        $allCartItemData[$i]->getProduct()->getSKU(), 
        '.jpg" alt="Product Image" class="product-image" />',
        '</a>',
        '</div>',
        '<ul class="coll margin-left">',
        '<li>',
        $allCartItemData[$i]->getProduct()->getProductName(),
        '</li>',
        '<li>',
        'Prijs: €',
        $allCartItemData[$i]->getProduct()->getPrice(),
        '</li>',
        '<li>',
        'Aantal ',
        $allCartItemData[$i]->getQuantity(),
        '</li>',
        '</ul>',
        '<a href="../includes/shoppingCartRemove.inc.php?SKU=', $allCartItemData[$i]->getProduct()->getSKU(), '" class="btn margin-left">Verwijder uit de winkelwagen</a>',
        '<hr>';
    }
    ?>
    <a href="order.php" class="btn margin-left">Bestel de producten</a>
    <?php 
    include_once "footer.php";
    ?>
</body>
</html>