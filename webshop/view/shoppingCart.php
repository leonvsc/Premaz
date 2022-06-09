<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen</title>
</head>
<body>
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
        echo '<li>',
        '<a class="col products-list" href="webshop.php">',
        'Prijs van het product: ',
        $allCartItemData[$i]->getSKU(),
        '</li>',
        '<li>',
        'SKU van het product: ',
        $allCartItemData[$i]->getPrice(),
        '</li>',
        '<li>',
        'Category van het product: ',
        $allCartItemData[$i]->getStock(),
        '</li>',
        '<li>',
        'Voorraad van het product: ',
        $allCartItemData[$i]->getCategory(),
        '</a>',
        '</li>',
        '<hr>';
    }
    ?>
    <a href="../includes/order.inc.php">Bestel de producten</a>
</body>
</html>