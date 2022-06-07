<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] != "Admin") {
    header("Location: ../view/index.php"); // TODO: Redirect to own account page or something else?
}


?>

<h1>CSV Import - Producten</h1>

<p>Format: SKU, Price, Quantity, Category</p>
<form action="../includes/csvUpload.inc.php" method="post" enctype="multipart/form-data">
    Select file:
    <input type="file" name="upload" accept="text/csv">
    <input type="submit" value="import" name="import">
</form>