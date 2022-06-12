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
    <title>Productenoverzicht</title>
</head>

<body>
    <?php 
        include_once "header.php";
        ?>
        <h1 style="text-align: center">Zoekresultaten</h1>
            <?php
            require_once "../includes/searchResults.inc.php";
            if (isset($results) && count($results) > 0) {
                
                foreach ($results as $result) {
                    ?>
                <ul class="margin-left">
                    <div class="product-image-div">
                        <a class="col products-list" href="product.php?SKU=<?php echo $result["SKU"]?>">
                            <img src="img/products/<?php echo $result["SKU"]?>.jpg" alt="Product Image" class="product-image" />
                        </a>
                    </div>
                    <li>Naam van het Product: <?php echo $result["ProductName"] ?></li>
                    <li>Prijs van het product: <?php echo $result["Price"] ?></li>
                    <li>Category van het product:  <?php echo $result["Category"] ?></li>
                    <li>Voorraad van het product:  <?php echo $result["Stock"] ?></li>
                </ul>
                <a href="../includes/shoppingCart.inc.php?SKU=<?php echo $result["SKU"]?>" class="btn margin-left">Voeg toe aan winkelwagen</a>
                <br><hr>
                <?php
            }
        }
        else {
            ?>
            <h2>Er zijn geen zoekresultaten gevonden.</h2>
            <?php
        }

        include_once "footer.php";
    ?>
</body>

</html>