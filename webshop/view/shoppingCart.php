<?php
// Start the session
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
    require_once "../data/shoppingCartData.php";
    require_once "../data/productData.php";

    echo $_SESSION['$SKUproduct'];

    $data = new productData;
    $productInfo = $data->getById($_SESSION['$SKUproduct']);

    // $data = new shoppingCartData;
    // $shoppingCartInfo = $data->getById($id);

    $price = $productInfo[0]->getPrice();
    $category = $productInfo[0]->getCategory();
    $stock = $productInfo[0]->getStock();
    ?>
    <h5>Het product kost : <?php echo $price ?></h5>
    <h5>De categorie is: <?php echo $category ?></h5>
    <h5>De voorraad is: <?php echo $stock ?></h5>
</body>
</html>