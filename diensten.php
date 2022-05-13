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
    <link rel="stylesheet" href="css/diensten.css" />

    <!-- Preload images to prevent flickering -->
    <link rel="preload" href="img/cycle-images/img-1.jpg" as="image" />
    <link rel="preload" href="img/cycle-images/img-2.jpg" as="image" />
    <link rel="preload" href="img/cycle-images/img-3.jpg" as="image" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
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
                    <a class="nav-link" href="index.php">
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
                    <a class="nav-link read-more" href="#section--1">
                        Lees meer
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="section_2_border"></div>
    <!--Alinea met tekst en afbeelding-->

    <section class="section_2">
        <div class="section_2_title">
            <h2 class="section_2_description">Onze Diensten</h2>
            <h3 class="section_2_header">
                Cloud Migraties, Gesimplificeerd.
            </h3>
        </div>
    </section>
    <div class="section_2_border"></div>
    <!--HTML voor de eerst connectiveit afbeelding en beschrijving-->
    <section class="section_1" id="section--1">
        <div class="diensten_features">
            <img src="img/Cloud-2.jpg" alt="Cloud Conectivity" class="diensten_Cloud_2-img" />
            <div class="diensten_section-title">
                <h5 class="diensten_features-header">
                    Connectiveit. Overal.
                </h5>
                <p>
                    Wij zorgen dat jou hele organisatie overal bereikbaar
                    is. Of je nou in een café een meeting wilt of lekker
                    thuis aan het werken bent. Wij regelen een vlekkeloze
                    transitie naar de Cloud.
                </p>
            </div>
        </div>
        <div class="diensten_features-reverse">
            <div class="diensten_section-title_reverse">
                <h5 class="diensten_features-header">
                    Veiligheid. Zonder zorgen.
                </h5>
                <p>
                    Nooit meer bang zijn voor diefstal of brand. Jouw data
                    staat veilig en versleuteld op meerdere locaties door
                    heel Europa. Hierdoor is jouw organisatie altijd
                    toegankelijk. Wij verzorgen regelmatige back-ups van
                    alle bestanden en zorgen dat er nooit iets verloren
                    gaat.
                </p>
            </div>
            <img src="img/Cloud-safety.jpg" alt="Cloud Conectivity" class="diensten_Cloud_2-img" />
        </div>
        <div class="diensten_features">
            <img src="img/organisation.jpg" alt="Cloud Conectivity" class="diensten_Cloud_2-img" />
            <div class="section-title" id="section">
                <h5 class="features-header">
                    De hele organisatie. Op één plek.
                </h5>
                <p>
                    Na een Cloud migratie is alles binnen de organisatie met
                    elkaar verbonden. Het hele Office pakket, alle mailboxen
                    en alle accounts bij elkaar en verbonden met elkaar.
                    Geen haperingen meer in jouw werk.
                </p>
            </div>
        </div>
    </section>
    <!--HTML voor diensten sectie-->

    <section class="section_2">
        <div class="section_2_title">
            <h2 class="section_2_description">
                We zijn gemigreerd, wat nu?
            </h2>
            <h3 class="section_2_header">Wij nemen het voor je over.</h3>
        </div>
    </section>
    <div class="section_2_border"></div>

    <!--HTML voor de tabs met content-->

    <section class="beheer_container">
        <div class="beheer">
            <div class="beheer_tab-container">
                <button class="btn beheer_tab beheer_tab-1 beheer_tab-active" data-tab="1" onclick="activateArea()">
                    <span>1</span>
                    Volledig beheer
                </button>
                <button class="btn beheer_tab beheer_tab-2" data-tab="2" onclick="activateArea()">
                    <span>2</span>
                    Bereikbaarheid
                </button>
                <button class="btn beheer_tab beheer_tab-3" data-tab="3" onclick="activateArea()">
                    <span>3</span>
                    Expertise
                </button>
            </div>
            <div class="beheer_content-container">
                <div class="
                            beheer_content
                            beheer_content-1
                            beheer_content-active
                        ">
                    <h4 class="beheer_header">
                        Wij nemen alles van je over.
                    </h4>
                    <p>
                        Na de migratie zal de hele infrastructuur centraal
                        verbonden zijn. Wij zullen dan ook het beheer
                        overnemen van de volledige Office 365 omgeving en de
                        Exchange e-mail oplossingen. Ook zullen wij zorgen
                        voor de juiste opslag van alle bestanden en regelen
                        we ook de toegang tot deze bestanden. Daar houdt het
                        nog niet op: we verzogen ook nog eens het
                        accountbeheer en beheren zelfs alle apparaten van de
                        organisatie.
                    </p>
                </div>
                <div class="beheer_content beheer_content-2">
                    <h4 class="beheer_header">
                        Is er iets mis? Wij zijn altijd te bereiken.
                    </h4>
                    <p>
                        Premaz heeft een ervaren Team dat persoonlijke
                        support biedt dat wordt afgestemd op jou. Wij staan
                        dan ook altijd voor je klaar, of je ons liever via
                        de telefoon spreekt of graag een mailtje stuurt, wij
                        streven ernaar om zo snel mogelijk te reageren. Je
                        bent ook altijd bij ons op kantoor welkom.
                    </p>
                </div>
                <div class="beheer_content beheer_content-3">
                    <h4 class="beheer_header">Een ervaren team.</h4>
                    <p>
                        Voor ons Team zullen er geen verassingen zijn - en
                        dus ook niet voor jou. Wij hebben zowel ervaren
                        systeembeheerders in dienst als Cloud architecten.
                        Allemaal hebben we een achtergrond in ondersteuning.
                        Je bent bij ons in goede handen.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="section_2_border"></div>

    <footer class="footer">
        <ul class="footer-nav">
            <li class="footer-item">
                <a class="footer-link" href="#">Home</a>
            </li>
            <li class="footer-item">
                <a class="footer-link" href="index.html">Meer informatie</a>
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
    <script src="js/diensten.js"></script>
    <script src="js/navBar.js"></script>
</body>

</html>