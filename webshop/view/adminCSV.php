<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] != "Admin") {
    header("Location: ../view/index.php");
} 

if ($_SESSION["role"] == "User" && isset($_SESSION["email"])) {
    header("Location: ../view/account.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/webshop-2.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <title>Admin - Producten CSV Upload</title>
</head>

<body>
    <?php 
    include_once "header.php";
    ?>
    <!-- Deze pagina maakt het mogelijk een csv bestand te uploaden. De informatie in het bestand wordt hierna in de database gezet -->
    <div class="margin-left margin-right">
    <h1>CSV Import - Producten</h1>

    <p>Format: SKU, ProductName, Price, Quantity, Category</p>
    <form action="../includes/csvUpload.inc.php" method="post" enctype="multipart/form-data">
        <label for="upload" class="form-label">Kies een bestand:</label>
        <input type="file" name="upload" accept="text/csv" class="form-control">
        <input type="submit" value="import" name="import" class="btn btn-primary">
    </form>
    </div>
    <?php 
    include_once "footer.php";
    ?>
</body>

</html>
