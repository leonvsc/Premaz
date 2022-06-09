<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/webshop.css" />
    <title>Premaz - Webshop</title>
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
                            <a class="information-navbar-over-ons" href="../../diensten.php">
                                Onze diensten
                            </a>
                        </li>
                        <li>
                            <a class="information-navbar-over-ons" href="../../index.php">
                                Meer informatie
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="information-navbar" href="../../contact.php">
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
                        <img src="img/logo-premaz-website.png" alt="Premaz logo" class="nav-logo" />
                    </a>
                </div>
                <div class="searchbar-div">
                    <form action="searchdb.php" method="post">
                        <input
                            type="text"
                            placeholder="Search..."
                            class="searchbar"
                            name="search"
                            required
                        />
                </div>
                <div class="login-and-shoppingcart">
                    <a href="login.php">
                        <img src="img/icons8-account-24.png" alt="Login account" class="account-icon" />
                    </a>
                    <a href="#">
                        <img src="img/shopping-cart-outline-svgrepo-com.svg" alt="Shoppingcart" class="shoppingcart" />
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
    <section class="tegels">
        <div class="informationtile">
            <!-- https://www.pexels.com/photo/a-red-sale-tags-on-red-and-black-background-5625008/ -->
            <img src="img/Sale-image-1.jpg" alt="sales image" class="sales-image" />
        </div>
        <div class="small-tiles">
            <div class="tegel">
                <img src="img/image-mouse-1.jpg" alt="image mouse" class="image-tile" />
            </div>
            <div class="tegel">
                <img src="img/image-laptop-1.jpg" alt="image laptop" class="image-tile" />
            </div>
        </div>
    </section>
    <section class="test-tussenstuk">
        <div class="test-tussenstuk-deel">
            <h3>Dit is een tussenstuk</h3>
        </div>
    </section>
    <section class="tegels">
        <div class="small-tiles">
            <div class="tegel">
                <img src="img/image-mouse-1.jpg" alt="image mouse" class="image-tile" />
            </div>
            <div class="tegel">
                <img src="img/image-laptop-1.jpg" alt="image laptop" class="image-tile" />
            </div>
        </div>
        <div class="informationtile">
            <!-- https://www.pexels.com/photo/a-red-sale-tags-on-red-and-black-background-5625008/ -->
            <img src="img/Sale-image-1.jpg" alt="sales image" class="sales-image" />
        </div>
    </section>
</body>

</html>