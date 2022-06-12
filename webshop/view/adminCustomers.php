<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] != "Admin") {
    header("Location: ../view/webshop.php");
} 

if ($_SESSION["role"] == "User" && isset($_SESSION["email"])) {
    header("Location: ../view/account.php");
}

require_once "../controller/customerController.php";

$controller = new customerController();
$customers = $controller->readAll();

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
    <title>Admin - Klanten</title>
</head>

<body>
    <?php 
    include_once "header.php";
    ?>
    <div class="margin-left margin-right">
    <h1>Klanten</h1>

    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <td>Klantnumer</td>
                <td>Woornaam</td>
                <td>Achternaam</td>
                <td>Email</td>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($customers as $customer) {
                $customerNumber = $customer->getCustomerNumber();
                $firstName = $customer->getFirstName();
                $lastName = $customer->getLastName();
                $email = $customer->getAccount()->getEmail();

                echo "<tr>";
                echo "<td>$customerNumber</td>";
                echo "<td>$firstName</td>";
                echo "<td>$lastName</td>";
                echo "<td>$email</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="adminpanel.php" class="btn btn-secondary">Ga terug</a>
    </div>
    <?php 
    include_once "footer.php";
    ?>
</body>

</html>
