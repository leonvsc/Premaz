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
    echo '<h3> Dit is een test </h3>';
    echo var_dump($data->getById('KEY-MEM-LOW-001')); 
    ?>
</body>
</html>