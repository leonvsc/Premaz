<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] != "Admin") {
    header("Location: ../view/index.php"); // TODO: Redirect to own account page or something else?
}
?>

<h1>Welkom op het admin panel</h1>

<li><a href="#">Bestellingen</a></li>
<li><a href="#">Facturen</a></li>
<li><a href="#">Klanten</a></li>

<li><a href="../includes/logout.inc.php">LOGOUT</a></li>