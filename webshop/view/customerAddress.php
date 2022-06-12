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
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <title>Customer - Addressen</title>
</head>

<body>
    <?php 
    include_once "header.php";

    if (isset($_SESSION["email"])) {
        $email = $_SESSION["email"];
        echo "<div class='list-group align-items-start'>";
        echo "<a href='account.php' class='list-group-item '>$email</a>";
        echo "<a href='../includes/logout.inc.php' class='list-group-item'>LOGOUT</a>";
        echo "</div>";
    } else {
    
        echo "<li><a href='signup.php'>SIGN UP</a></li>";
        echo "<li><a href='login.php'>Login</a></li>";
    }
    // TODO: Afschermen zodat alleen de juiste gebruiker hierbij kan.
    
    require_once "../controller/shippingAddressController.php";
    require_once "../controller/billingAddressController.php";
    require_once "../controller/customerController.php";
    
    $saController = new shippingAddressController;
    $baController = new billingAddressController;
    $customerController = new customerController;
    
    $customer = $customerController->readByEmail($_SESSION["email"]);
    $customerNumber = $customer[0]->getCustomerNumber();
    
    $sa = $saController->readCustomerNumber($customerNumber);
    $ba = $baController->readCustomerNumber($customerNumber);
    ?>
    <h2>Shipping address</h2>
    <table class="table table-hover table-bordered">
        <thead>
            <tr class="margin-left">
                <td>Street</td>
                <td>House number</td>
                <td>Postal code</td>
                <td>City</td>
                <td>Country</td>
            </tr>
        </thead>

        <?php

        $saStreet = $sa[0]->getStreet();
        $saHouseNumber = $sa[0]->getHouseNumber();
        $saPostalCode = $sa[0]->getPostalCode();
        $saCity = $sa[0]->getCity();
        $saCountry = $sa[0]->getCountry();

        echo "<br>";
        echo "<tr class='margin-left'>";
        echo "<td>$saStreet</td>";
        echo "<td>$saHouseNumber</td>";
        echo "<td>$saPostalCode</td>";
        echo "<td>$saCity</td>";
        echo "<td>$saCountry</td>";
        echo "</tr>";
        ?>
    </table>

    <h2>Billing address</h2>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <td>Street</td>
                <td>House number</td>
                <td>Postal code</td>
                <td>City</td>
                <td>Country</td>
            </tr>
        </thead>

        <?php

        $baStreet = $ba[0]->getStreet();
        $baHouseNumber = $ba[0]->getHouseNumber();
        $baPostalCode = $sa[0]->getPostalCode();
        $baCity = $ba[0]->getCity();
        $baCountry = $ba[0]->getCountry();

        echo "<br>";
        echo "<tr>";
        echo "<td>$baStreet</td>";
        echo "<td>$baHouseNumber</td>";
        echo "<td>$baPostalCode</td>";
        echo "<td>$baCity</td>";
        echo "<td>$baCountry</td>";
        echo "</tr>";
        ?>
    </table>
    <?php 
    include_once "footer.php";
    ?>
</body>

</html>