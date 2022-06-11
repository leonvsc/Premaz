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
    <title>Productenoverzicht</title>
</head>

<body>
<header>
            <div class="information-navbar-top">
                <ul class="information-navbar-items">
                    <li class="dropdown">
                        <a class="information-navbar" href="index.html">
                            Over ons
                        </a>
                        <ul class="information-navbar-over-ons-menu">
                            <li>
                                <a
                                    class="information-navbar-over-ons"
                                    href="diensten.html"
                                >
                                    Onze diensten
                                </a>
                            </li>
                            <li>
                                <a
                                    class="information-navbar-over-ons"
                                    href="index.html"
                                >
                                    Meer informatie
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="information-navbar" href="#">
                            Klantenservice
                        </a>
                    </li>
                    <li>
                        <a class="information-navbar" href="#">Taal</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-color">
                <div class="test-navbar">
                    <div class="nav-logo-div">
                        <a>
                            <img
                                src="img/logo-premaz-website.png"
                                alt="Premaz logo"
                                class="nav-logo"
                            />
                        </a>
                    </div>
                    <div class="searchbar-div">
                        <input
                            type="text"
                            placeholder="Search..."
                            class="searchbar"
                        />
                    </div>
                    <div class="login-and-shoppingcart">
                        <a href="account.php">
                            <img
                                src="img/icons8-account-24.png"
                                alt="Login account"
                                class="account-icon"
                            />
                        </a>
                        <a href="shoppingCart.php">
                            <img
                                src="img/shopping-cart-outline-svgrepo-com.svg"
                                alt="Shoppingcart"
                                class="shoppingcart"
                            />
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <ul class="categories-items">
                    <li>
                        <a class="nav-button" href="#">Toetsenborden</a>
                    </li>
                    <li><a class="nav-button" href="#">Muizen</a></li>
                    <li>
                        <a class="nav-button" href="#">Beeldschermen</a>
                    </li>
                    <li>
                        <a class="nav-button" href="#">Harde schijven</a>
                    </li>
                    <li>
                        <a class="nav-button" href="#">Computers</a>
                    </li>
                    <li>
                        <a class="nav-button" href="#">Laptops</a>
                    </li>
                </ul>
            </div>
        </header>
    <h1 style="text-align: center">Producten - Premaz Webshop</h1>
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
            
            echo
            '<div class="product-image-div">',
            '<a class="col products-list" href="product.php?SKU=', 
            $allProducts[$i]->getSKU(), 
            '">',
            
            '<img src="img/products/', 
            $allProducts[$i]->getSKU(), 
            '.jpg" alt="Product Image" class="product-image" />',
            '</a>',
            '</div>',
            '<ul>',
            '<li>',
            
            'Prijs van het product: €',
            $allProducts[$i]->getPrice(),
            '</li>',
            '<li>',
            'SKU van het product: ',
            $allProducts[$i]->getSKU(),
            '</li>',
            '<li>',
            'Naam van het Product: ',
            $allProducts[$i]->getProductName(),
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
            
            '<a href="../includes/shoppingCart.inc.php?SKU=', $allProducts[$i]->getSKU(), '" class="btn">Voeg toe aan winkelwagen</a>',
            '<br>',
            '<hr>';
        }
        ?>
    </ul>

</body>

</html>