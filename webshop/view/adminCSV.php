<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] != "Admin") {
    header("Location: ../view/index.php"); // TODO: Redirect to own account page or something else?
}


?>

<h1>CSV Upload - Producten</h1>

<form action="../includes/csvUpload.inc.php" method="post">
    Select file:
    <input type="file" id="CSVfile" name="CSVfile">
    <input type="submit" value="Upload" name="submit">
</form>