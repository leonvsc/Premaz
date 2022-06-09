<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] != "Admin") {
    header("Location: ../view/index.php"); // TODO: Redirect to own account page or something else?
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
    <title>Admin - Klanten</title>
</head>

<body>
    <h1>Klanten</h1>

    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <td>Customer number</td>
                <td>First name</td>
                <td>Last name</td>
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
                echo "<td><a href='customerdetails.php?customernumber={$customerNumber}' class='btn btn-primary'>View details</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="adminpanel.php" class="btn btn-secondary">Go back</a>
</body>

</html>