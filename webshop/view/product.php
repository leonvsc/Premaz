<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>
    <h1 style="text-align: center">Product - Premaz Webshop</h1>
    <?php
    require_once "../data/productData.php";
    
   // Code om de SKU uit de URL te halen om een product te tonen
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
        $url = "https://";   
        else  
        $url = "http://";   
    // Voeg de host(domain name, ip) toe aan de URL.   
    $url.= $_SERVER['HTTP_HOST'];   

    // Voeg de gevraagde resource locatie too aan de URL   
    $url.= $_SERVER['REQUEST_URI'];     
    // Gebruik de parse_url() functie om de URL te parsen
    // and return an associative array which
    // contains its various components
    $url_components = parse_url($url);
    
    // Gebruik de parse_str() functie to om de string van URL te parsen
    parse_str($url_components['query'], $params);
    // Maak een nieuwe instantie aan van de klasse productData
    $productData = new productData;
    // Haal de data op uit de database van de SKU welke in de URL staat
    $productInfo = $productData->getById($params['SKU']);
    // Haal de informatie van het product iot het object productInfo
    $price = $productInfo[0]->getPrice();
    $SKU = $productInfo[0]->getSKU();
    $category = $productInfo[0]->getCategory();
    $stock = $productInfo[0]->getStock();
    ?>
    <!-- Toon de informatie van het product op de webpagina-->
    <h5>Het product kost : <?php echo $price ?></h5>
    <h5>De SKU is: <?php echo $SKU ?></h5>
    <h5>De categorie is: <?php echo $category ?></h5>
    <h5>De voorraad is: <?php echo $stock ?></h5>
    <br />

    <form action="../includes/shoppingCart.inc.php" method="post">
    <input type="submit" name="submit, <?php $SKU; ', '; $price; ?>" value="Voeg toe aan winkelwagen" />
    </form>
    <a href="shoppingCart.php">Klik hier</a>
</body>
</html>