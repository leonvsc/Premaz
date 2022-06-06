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
    <?php
    require_once "../data/productData.php";
    $data = new productData;
    $allProducts = $data->getAll();

    for ($i = 0; $i < count($allProducts); ++$i)
    {
        echo '<br />',
        '<a class="col products-list" href="product.php?SKU=',$allProducts[$i]->getSKU(),'">',
        'Prijs van het product: €', 
        $allProducts[$i]->getPrice(),
        '<br />',
        'SKU van het product: ', 
        $allProducts[$i]->getSKU(),
        '<br />',
        'Category van het product: ', 
        $allProducts[$i]->getCategory(),
        '<br />', 
        'Voorraad van het product: ',
         $allProducts[$i]->getStock(),
         '</a>', 
        '<br />',
        '<form action="../includes/shoppingCart.inc.php" method="post">
        <input type="submit" name="submit" value="Voeg toe aan winkelwagen" />
        </form>',
        '<hr>';
    }
    ?>

</body>
</html>