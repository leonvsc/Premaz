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
    <title>Index</title>
</head>

<body>
    <?php
    include_once "header.php";
    if (isset($_SESSION["email"])) {
        $email = $_SESSION["email"];
        echo "<div class='list-group container align-items-start'>";
        echo "<a href='account.php' class='list-group-item'>$email</a>";
        echo "<a href='../includes/logout.inc.php' class='list-group-item'>LOGOUT</a>";
        echo "</div>";
    } else {

        echo "<li><a href='signup.php'>SIGN UP</a></li>";
        echo "<li><a href='login.php'>Login</a></li>";
    }
    echo "<a href='productOverview.php' class='list-group-item'>Ga naar het productenoverzicht</a>";
    ?>
        <?php 
    include_once "footer.php";
    ?>
</body>

</html>