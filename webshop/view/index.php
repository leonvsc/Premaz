<?php
session_start();

if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
    echo "<li><a href='account.php'>$email</a></li>";
    echo "<li><a href='../includes/logout.inc.php'>LOGOUT</a></li>";
    echo "<li><a href='productOverview.php'>Productenpagina</a></li>";

} else {

    echo "<li><a href='signup.php'>SIGN UP</a></li>";
    echo "<li><a href='login.php'>Login</a></li>";
}
