<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] == "Admin") {
    header("Location: ../view/adminpanel.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/webshop-2.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <title>Account</title>
</head>

<body>
    <?php 
    include_once "header.php";

    if (isset($_SESSION["email"])) {
        $email = $_SESSION["email"];
        echo "<div class='list-group align-items-start margin-left'>";
        echo "<a href='account.php' class='list-group-item'>$email</a>";
        echo "<a href='../includes/logout.inc.php' class='list-group-item'>LOGOUT</a>";
        echo "</div>";
    } else {
    
        echo "<li class='margin-left'><a href='signup.php'>SIGN UP</a></li>";
        echo "<li class='margin-left'><a href='login.php'>Login</a></li>";
    }
    ?>
    <div class="list-group margin-left">
        <a href="customerOrder.php" class=" list-group-item col-1">Bestellingen</a>
        <a href="customerInvoice.php" class=" list-group-item col-1">Facturen</a>
        <a href="customerAddress.php" class=" list-group-item col-1">Mijn adressen</a>
    </div>

    <a href="webshop.php" class="btn btn-secondary margin-left">Ga terug naar de hoofdpagina</a>
    <?php 
    include_once "footer.php";
    ?>
</body>

</html>
