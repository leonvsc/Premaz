<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/webshop.css" />
    <link rel="stylesheet" href="css/webshop-2.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <title>Premaz - Webshop</title>
</head>

<body>
    <?php 
    include_once "header.php";
    ?>
    <section class="test-tussenstuk">
        <div class="test-tussenstuk-deel">
            <h3>Producten in de aanbieding</h3>
        </div>
    </section>
    <section class="tegels">
        <div class="informationtile">
            <!-- https://www.pexels.com/photo/a-red-sale-tags-on-red-and-black-background-5625008/ -->
            <img src="img/Sale-image-1.jpg" alt="sales image" class="sales-image" />
        </div>
        <div class="small-tiles">
            <div class="tegel">
                <img src="img/products/EXT-SSD-MID-001.jpg" alt="image product" class="image-tile" />
            </div>
            <div class="tegel">
                <img src="img/products/KEY-MEC-HIG-002.jpg" alt="image product" class="image-tile" />
            </div>
        </div>
    </section>
    <section class="test-tussenstuk">
        <div class="test-tussenstuk-deel">
            <h3>Nieuwe producten</h3>
        </div>
    </section>
    <section class="tegels-products">
        <div class="small-tiles-products">
            <div class="tegel-products">
                <img src="img/products/MON-LCD-LOW-001.jpg" alt="image product" class="image-tile" />
            </div>
            <div class="tegel-products">
                <img src="img/products/KEY-MEC-MID-001.jpg" alt="image product" class="image-tile" />
            </div>
            <div class="tegel-products">
                <img src="img/products/MOU-OFI-LOW-001.jpg" alt="image product" class="image-tile" />
            </div>
            <div class="tegel-products">
                <img src="img/products/USB-64G-MID-002.jpg" alt="image product" class="image-tile" />
            </div>
            <div class="tegel-products">
                <img src="img/products/MOU-GAM-HIG-001.jpg" alt="image product" class="image-tile" />
            </div>
            <div class="tegel-products">
                <img src="img/products/MON-AMO-HIG-001.jpg" alt="image product" class="image-tile" />
            </div>
        </div>
    </section>
    <?php 
    include_once "footer.php";
    ?>
</body>

</html>