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
    require_once "../data/productData.php";

    $data = new productData;
    $productInfo = $data->getById($SKU);

    $data = new shoppingCartData;
    $shoppingCartInfo = $data->getById($id);

    $price = $productInfo[0]->getPrice();
    $category = $productInfo[0]->getCategory();
    $stock = $productInfo[0]->getStock();
    ?>
</body>
</html>