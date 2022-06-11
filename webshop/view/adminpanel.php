<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] != "Admin") {
    header("Location: ../view/index.php"); // TODO: Redirect to own account page or something else?
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/footer.css" />
    <title>Admin Panel</title>
</head>

<body>

    <h1>Welkom op het admin panel</h1>

    <div class="list-group">
        <a href="adminOrder.php" class="list-group-item col-1">Bestellingen</a>
        <a href="adminInvoice.php" class="list-group-item col-1">Facturen</a>
        <a href="adminCustomers.php" class="list-group-item col-1">Klanten</a>
        <a href="adminCSV.php" class="list-group-item col-1">CSV Import - Producten</a>
    </div>

    <li><a href="../includes/logout.inc.php" class="btn btn-secondary">LOGOUT</a></li>
    <?php 
    include_once "footer.php";
    ?>
</body>

</html>
