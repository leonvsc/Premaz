<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/webshop.css" />
    <link rel="stylesheet" href="css/webshop-2.css" />
    <link rel="stylesheet" href="css/footer.css" />
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
                <img src="img/products/EXT-SSD-MID-001.jpg" alt="image mouse" class="image-tile" />
            </div>
            <div class="tegel">
                <img src="img/products/KEY-MEC-HIG-002.jpg" alt="image laptop" class="image-tile" />
            </div>
        </div>
    </section>
    <section class="test-tussenstuk">
        <div class="test-tussenstuk-deel">
            <h3>Dit is een tussenstuk</h3>
        </div>
    </section>
    <!-- <section class="tegels">
        <div class="small-tiles">
            <div class="tegel">
                <img src="img/image-mouse-1.jpg" alt="image mouse" class="image-tile" />
            </div>
            <div class="tegel">
                <img src="img/image-laptop-1.jpg" alt="image laptop" class="image-tile" />
            </div>
        </div>
        <div class="informationtile">
            https://www.pexels.com/photo/a-red-sale-tags-on-red-and-black-background-5625008/
            <img src="img/Sale-image-1.jpg" alt="sales image" class="sales-image" />
        </div>
    </section> -->
    <?php 
    include_once "footer.php";
    ?>
</body>

</html>