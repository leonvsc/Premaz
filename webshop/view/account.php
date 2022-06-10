<?php
session_start();

if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
    echo "<li><a href='account.php'>$email</a></li>";
    echo "<li><a href='../includes/logout.inc.php'>LOGOUT</a></li>";
} else {

    echo "<li><a href='signup.php'>SIGN UP</a></li>";
    echo "<li><a href='login.php'>Login</a></li>";
}
// TODO: Afschermen zodat alleen de juiste gebruiker hierbij kan.
?>

<li><a href="customerOrder.php">Bestellingen</a></li>
<li><a href="customerInvoice.php">Facturen</a></li>
<li><a href="customerAddress.php">Mijn adressen</a></li>

<li><a href="index.php">Ga terug naar de homepagina</a></li>