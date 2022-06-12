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
    <link rel="stylesheet" href="css/webshop-2.css" />
    <link rel="stylesheet" href="css/productOverview.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <title>Productenoverzicht</title>
</head>

<body>
    <?php 
    include_once "header.php";
    ?>
    <h1 style="text-align: center">Producten</h1>
        <?php
        require_once "../data/productData.php";
        // Maak een nieuwe instantie aan van klasse productData
        $data = new productData;
        // Haal alle data van de producten op uit de database
        $allProducts = $data->getAll();
        // Loop door alle producten heen en zet deze onder elkaar
        for ($i = 0; $i < count($allProducts); ++$i) {
            
            echo
            '<ul class="margin-left">',
            '<div class="product-image-div">',
            '<a class="col products-list" href="product.php?SKU=', 
            $allProducts[$i]->getSKU(), 
            '">',
            '<img src="img/products/', 
            $allProducts[$i]->getSKU(), 
            '.jpg" alt="Product Image" class="product-image" />',
            '</a>',
            '</div>',
            '<li>',
            'Naam van het Product: ',
            $allProducts[$i]->getProductName(),
            '</li>',
            '<li>',
            'Prijs van het product: €',
            $allProducts[$i]->getPrice(),
            '</li>',
            '<li>',
            'Category van het product: ',
            $allProducts[$i]->getCategory(),
            '</li>',
            '<li>',
            'Voorraad van het product: ',
            $allProducts[$i]->getStock(),
            '</li>',
            '</ul>',
            
            '<a href="../includes/shoppingCart.inc.php?SKU=', $allProducts[$i]->getSKU(), '" class="btn margin-left">Voeg toe aan winkelwagen</a>',
            '<br>',
            '<hr>';
        }
        ?>
    </ul>
    <?php 
    include_once "footer.php";
    ?>
</body>

</html>