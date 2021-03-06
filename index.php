<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/navigatiebalk.css" />
    <link rel="stylesheet" href="css/alineas.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Preload images to prevent flickering -->
    <link rel="preload" href="img/cycle-images/img-1.jpg" as="image" />
    <link rel="preload" href="img/cycle-images/img-2.jpg" as="image" />
    <link rel="preload" href="img/cycle-images/img-3.jpg" as="image" />
    <title>Premaz</title>
</head>

<body>
    <header>
        <!--Navigation menu and logo-->
        <nav class="navbar">
            <a href="https://www.premaz.nl/">
                <img src="img/logo-premaz-website.png" alt="Premaz logo" class="nav-logo" />
            </a>
            <ul class="nav-links">
                <li class="center">
                    <a class="nav-link" href="#section-1">
                        Meer informatie
                    </a>
                </li>
                <li class="center">
                    <a class="nav-link" href="diensten.php">
                        Onze diensten
                    </a>
                </li>

                <li class="center">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

                <li class="center">
                    <a class="nav-link" href="webshop/view/webshop.php">Webshop</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
        <!-- Header image with the text -->
        <div class="header-background">
            <div id="cycleImagesDiv"></div>
            <div class="header-center">
                <h1>
                    Migreren naar de cloud?
                    <br />
                    Wij helpen u daar graag bij.
                </h1>
                <h4>
                    Bij Premaz ondersteunen wij u bij het migreren naar
                    Azure
                </h4>
                <div class="arrow-down">
                    <a class="nav-link read-more" href="#section-1">
                        Lees meer
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!--Text and images-->
    <section class="section" id="section-1">
        <div class="section-title-top">
            <h2 class="section-description">Waarom Premaz?</h2>
            <h3 class="section-header">
                Premaz neemt de zorgen voor de cloudmigratie bij u weg. Ook
                zorgen wij er na het migreren voor dat het beheer hiervan
                door ons wordt gedaan.
            </h3>
        </div>

        <div class="features">
            <img src="img/afbeelding-alinea-1.jpg" alt="Afbeelding 1" class="afbeelding-alinea" />
            <div class="section-title">
                <h5 class="features-header">Wie zijn wij?</h5>
                <p>
                    Premaz is opgericht door 3 jonge gedreven ondernemers
                    welke veel affaniteit hebben met cloudmigratie en veel
                    bedijven ondersteunen hebben hierbij.
                </p>
            </div>
            <!-- Reverse the wrap to order text and images correctly -->
            <div class="reverse-flex">
                <div class="section-title-reverse">
                    <h5 class="features-header-reverse">
                        Waarom cloudmigratie?
                    </h5>
                    <p>
                        Het opslaan van bestanden op de cloud is veel
                        veiliger dan het opslaan op een lokale server. De
                        kans op data verlies is op de cloud nagenoeg 0, dit
                        is anders bij lokale bestanden. Het omzeten van de
                        bestanden naar de cloud kan een grote stap zijn waar
                        wij u graag bij helpen.
                    </p>
                </div>

                <img src="img/afbeelding-alinea-2.jpg" alt="Afbeelding 2" class="afbeelding-alinea-2 mobile-view" />
            </div>

            <img src="img/afbeelding-alinea-3.jpg" alt="Afbeelding 3" class="afbeelding-alinea" />
            <div class="section-title" id="section">
                <h5 class="features-header">Waarom Premaz?</h5>
                <p>
                    Premaz heeft veel ervaring met het migreren naar de
                    cloud, ook staan uw behoefte bij ons op 1. Wij zorgen
                    ervoor dat de migratie soepel en naar wens gaat
                    verlopen. Bij ons is het overstappen naar de cloud zo
                    geregeld. Ook hoeft u zicht naar de migratie geen zorgen
                    te maken over het beheer van de data, dit doen wij ook
                    voor u.
                </p>
            </div>
        </div>
    </section>
    <!-- Footer from the website -->
    <footer class="footer">
        <ul class="footer-nav">
            <li class="footer-item">
                <a class="footer-link" href="#">Home</a>
            </li>
            <li class="footer-item">
                <a class="footer-link" href="index.html#section-1">
                    Meer informatie
                </a>
            </li>
            <li class="footer-item">
                <a class="footer-link" href="diensten.html">
                    Onze diensten
                </a>
            </li>
            <li class="footer-item">
                <a class="footer-link" href="contact.html">Contact</a>
            </li>
        </ul>
        <a href="https://www.premaz.nl/">
            <img src="img/logo-premaz-website.png" alt="Logo" class="footer-logo" />
        </a>
        <p class="footer-copyright">
            &copy; Copyright by
            <a class="footer-link" target="_blank" href="https://www.premaz.nl/">
                Premaz
            </a>
            . Dit is een website voor een schoolopdracht, Premaz is een
            fictief bedrijf.
            <br />
            <a class="footer-link" target="_blank" href="pdf-files/Algemene voorwaarden Premaz.pdf">
                Algemene voorwaarden
            </a>
            /
            <a class="footer-link" target="_blank" href="pdf-files/privacy_statement_16-10-2021.pdf">
                Privacyverklaring
            </a>
        </p>
    </footer>
    <script src="js/navBar.js"></script>
</body>

</html>