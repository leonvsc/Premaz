<?php
session_start();
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
    <title>Account</title>
</head>

<body>
    <?php 
    include_once "header.php";
    // TODO: Afschermen zodat alleen de juiste gebruiker hierbij kan.
    if (isset($_SESSION["email"])) {
        $email = $_SESSION["email"];
        echo "<div class='list-group align-items-start'>";
        echo "<a href='account.php' class='list-group-item'>$email</a>";
        echo "<a href='../includes/logout.inc.php' class='list-group-item'>LOGOUT</a>";
        echo "</div>";
    } else {
    
        echo "<li><a href='signup.php'>SIGN UP</a></li>";
        echo "<li><a href='login.php'>Login</a></li>";
    }
    ?>
    <div class="list-group">
        <a href="customerOrder.php" class=" list-group-item col-1">Bestellingen</a>
        <a href="customerInvoice.php" class=" list-group-item col-1">Facturen</a>
        <a href="customerAddress.php" class=" list-group-item col-1">Mijn adressen</a>
    </div>

    <a href="index.php" class="btn btn-secondary">Go back to homepage</a>
    <?php 
    include_once "footer.php";
    ?>
</body>

</html>
