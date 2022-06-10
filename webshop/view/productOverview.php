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
    <link rel="stylesheet" href="css/productOverview.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Productenoverzicht</title>
</head>

<body>
    <h1 style="text-align: center">Products - Premaz Webshop</h1>
    <a href="shoppingCart.php">Ga naar de winkelwagen</a><br />
    <a href="order.php">Ga naar de bestelling</a>
    <ul>
        <?php
        require_once "../data/productData.php";
        // Maak een nieuwe instantie aan van klasse productData
        $data = new productData;
        // Haal alle data van de producten op uit de database
        $allProducts = $data->getAll();
        // Loop door alle producten heen en zet deze onder elkaar
        for ($i = 0; $i < count($allProducts); ++$i) {
            echo '<li>',
            '<a class="col products-list" href="product.php?SKU=', $allProducts[$i]->getSKU(), '">',
            'Prijs van het product: €',
            $allProducts[$i]->getPrice(),
            '</li>',
            '<li>',
            'SKU van het product: ',
            $allProducts[$i]->getSKU(),
            '</li>',
            '<li>',
            'Category van het product: ',
            $allProducts[$i]->getCategory(),
            '</li>',
            '<li>',
            'Voorraad van het product: ',
            $allProducts[$i]->getStock(),
            '</a>',
            '</li>',
            '<a href="../includes/shoppingCart.inc.php?SKU=', $allProducts[$i]->getSKU(), '">Voeg toe aan winkelwagen</a>',
            '<br>',
            '<a href="shoppingCart.php">Klik hier</a>',
            '<hr>';
        }
        ?>
    </ul>

</body>

</html>