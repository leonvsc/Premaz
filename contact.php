<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact - Premaz</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/contact.css" />
    <link rel="stylesheet" href="css/navigatiebalk.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Favicon van de website -->
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
                <div class="arrow-down-contact">
                    <a class="nav-link read-more" href="contact.html#contactSection-1">
                        Contactgegevens
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="container" id="contactSection-1">
        <!-- Een container om de volledige pagina in een flexbox container te zetten. -->
        <div class="row">
            <!-- Op deze row staan de contactbeschrijving en de contact info zodat deze naast elkaar staan. -->
            <div class="col-6 contactDescription">
                <!-- Een section voor het bericht boven het contactformulier om contact op te nemen. -->
                <section>
                    Heeft u een vraag of u wilt een offerte opvragen? Vul
                    dan onderstaand formulier in en wij komen zo snel
                    mogelijk bij u met een antwoord.
                </section>
            </div>
            <div class="col-2 contact">
                <!-- 2 sections met daarin de contact informatie van Premaz. De ene sections heeft de titels en de ander de gegevens.
                        Deze hebben allebei 2 kollomen om te positioneren. -->
                <section>
                    Bedrijfsnaam:
                    <br />
                    Adres:
                    <br />
                    Postcode:
                    <br />
                    Vestigingsplaats:
                    <br />
                    Email:
                    <br />
                    Telefoonnummer:
                    <br />
                    KVK Nummer:
                    <br />
                    BTW Nummer:
                </section>
            </div>
            <div class="col-2 contactInfo">
                <section>
                    Premaz
                    <br />
                    Teststraat 144
                    <br />
                    1234AA
                    <br />
                    Breda
                    <br />
                    <a class="contact-link" href="mailto:info@premaz.nl">
                        info@premaz.nl
                    </a>
                    <br />
                    <a class="contact-link" href="tel:+31881010100">
                        +31 88 10 10 100
                    </a>
                    <br />
                    1234567
                    <br />
                    1234567
                </section>
            </div>
        </div>
        <div class="row">
            <!-- In deze row staan het contactformulier en de google maps kaart om deze naast elkaar te zetten. -->
            <div class="col contactForm">
                <!-- Een formulier om conact op te nemene. Dit zit in een form tag als unordered list met list items.
                        Elk listitem heeft een label met een icon en een input balk die aan elkaar gelinkt zijn met een ID. -->
                <form>
                    <ul>
                        <li>
                            <label class="col-1" for="name">
                                <img src="img/Icons/user.png" alt="User" class="icon" />
                            </label>
                            <input id="name" type="text" placeholder="Naam*" class="col-10" required />
                        </li>
                        <li>
                            <label class="col-1" for="telephoneNumber">
                                <img src="img/Icons/phone-call.png" alt="Telephone" class="icon" />
                            </label>
                            <!-- Aan de tel input kan een pattern worden mee gegeven. Bijv. pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}".
                                    De gebruiker moet dan dit format opgeven. Format: 123-45-678 -->
                            <input id="telephoneNumber" type="tel" placeholder="Telefoonnummer*" class="col-10" required />
                        </li>
                        <li>
                            <label class="col-1" for="email">
                                <img src="img/Icons/email.png" alt="Email" class="icon" />
                            </label>
                            <input type="email" name="email" id="email" placeholder="Email*" class="col-10" onchange="validateEmail()" required />
                        </li>
                        <li>
                            <label class="col-1" for="message">
                                <img src="img/Icons/question-mark.png" alt="Question" class="icon" />
                            </label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Uw vraag*" class="col-10" required></textarea>
                        </li>
                        <input type="submit" value="Versturen" class="submitButton" />
                    </ul>
                </form>
            </div>
            <div class="col map">
                <!-- Een iframe voor Google maps waarin de hoogte en breedte wordt aangegeven van de iframe
                        en de border die er standaard omheen zit wordt weggehaald.
                        https://www.google.com/maps/embed/v1/place // API url
                        ?q=place_id:ChIJIRoqlNehxkcRx3FkvbvvsEY // Place ID van avans op Google Maps
                        &key=AIzaSyAZvbxIMPpEWPi9ZYZsADxftz_esZ6SUVY // API Key vanuit Google Cloud Platform -->
                <iframe width="600" height="450" style="border: 0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJIRoqlNehxkcRx3FkvbvvsEY&key=AIzaSyAZvbxIMPpEWPi9ZYZsADxftz_esZ6SUVY"></iframe>
            </div>
        </div>
    </div>
    <!-- Footer van de website -->
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
            <a class="footer-link twitter-link" target="_blank" href="https://premaz.nl/">
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
    <script src="js/contact.js"></script>
</body>

</html>