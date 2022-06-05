<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>
    <h1 style="text-align: center">Products - Premaz Webshop</h1>
    <?php
    require_once "../data/productData.php";
    $data = new productData;
    $productInfo = ($data->getById('KEY-MEM-LOW-001'));
    $price = $productInfo[0]->getPrice();
    $SKU = $productInfo[0]->getSKU();
    $category = $productInfo[0]->getCategory();
    $stock = $productInfo[0]->getStock();
    ?>
    <h5>Het product kost : <?php echo $price ?></h5>
    <h5>De SKU is: <?php echo $SKU ?></h5>
    <h5>De catagorie is: <?php echo $category ?></h5>
    <h5>De voorraad is: <?php echo $stock ?></h5>
</body>

</html>