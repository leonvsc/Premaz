function validateEmail() {
    let email = document.getElementById("email"); // De variabele email wordt hier gedeclareerd met het id van de input tag in de html
    const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Een regex patroon om te checken of er een email is ingevuld.

    if (pattern.test(email.value.toLowerCase())) {
        // Deze if statement start met het testen van het regex pattern en pakt de value van email en zet deze om naar kleine letters.
        email.style.borderColor = "green"; // Hier wordt de border van de input veranderd naar groen als het email adres in een email format staat.
    } else {
        email.style.borderColor = "red"; // Als het emailadres niet klopt wordt de border van de input rood.
    }
}
