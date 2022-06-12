<?php
session_start();
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
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
    <title>Customer - Facturen</title>
</head>

<body>
    <?php
    include_once "header.php";
    ?>
    <div class="margin-left margin-right">
    <h1>Facturen</h1>
    <?php
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
    require_once "../controller/invoiceController.php";
    require_once "../controller/billingAddressController.php";
    require_once "../controller/customerController.php";

    $invoiceController = new invoiceController;
    $baController = new billingAddressController;
    $customerController = new customerController;

    $customer = $customerController->readByEmail($_SESSION["email"]);
    $customerNumber = $customer[0]->getCustomerNumber();
    $ba = $baController->readCustomerNumber($customerNumber);
    $baID = $ba[0]->getBillingAddressID();

    $invoices = $invoiceController->readByBillingAddressID($baID);

    if (empty($invoices)) {
        echo "Geen facturen beschikbaar";
    } else { ?>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <td>Factuurnummer</td>
                    <td>Factuurdatum</td>
                    <td>Prijs</td>
                </tr>
            </thead>

            <tbody>
            <?php
            foreach ($invoices as $invoice) {
                $invoiceNumber = $invoice->getInvoiceNumber();
                $invoiceDate = $invoice->getInvoiceDate();
                $price = $invoice->getOrder()->getTotalPrice();

                echo "<br>";
                echo "<tr>";
                echo "<td>$invoiceNumber</td>";
                echo "<td>$invoiceDate</td>";
                echo "<td>$price</td>";
                echo "</tr>";
            }
        }
            ?>
            </tbody>
        </table>
    </div>
        <?php 
        include_once "footer.php";
        ?>
</body>

</html>