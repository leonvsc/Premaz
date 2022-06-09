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
    <title>Admin - Producten CSV Upload</title>
</head>

<body>

    <h1>CSV Import - Producten</h1>

    <p>Format: SKU, Price, Quantity, Category</p>
    <form action="../includes/csvUpload.inc.php" method="post" enctype="multipart/form-data">
        <label for="upload" class="form-label">Select file:</label>
        <input type="file" name="upload" accept="text/csv" class="form-control">
        <input type="submit" value="import" name="import" class="btn btn-primary">
    </form>
</body>

</html>