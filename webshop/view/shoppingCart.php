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
    require_once "../data/shoppingCartData.php";
    require_once "../data/cartItemData.php";

    $shoppingCartData = new shoppingCartData;
    $cartItemData = new cartItemData;
    $allCartItemData = $cartItemData->getAll();

    for ($i = 0; $i < count($allCartItemData); ++$i) {
        echo '<li>',
        '<a class="col products-list" href="webshop.php">',
        'Prijs van het product: €',
        $allCartItemData[$i]->getCartItemId(),
        '</li>',
        '<li>',
        'SKU van het product: ',
        $allCartItemData[$i]->getShoppingCart(),
        '</li>',
        '<li>',
        'Category van het product: ',
        $allCartItemData[$i]->getProduct(),
        '</li>',
        '<li>',
        'Voorraad van het product: ',
        $allCartItemData[$i]->getQuantity(),
        '</a>',
        '</li>',
        '<hr>';
    }
    ?>
</body>
</html>