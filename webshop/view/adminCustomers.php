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

<h1>Klanten</h1>

<thead>
    <tr>
        <td>Klantnummer</td>
        <td>Voornaam</td>
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

        echo "<br>";
        echo "<tr>";
        echo "<td>$customerNumber</td>";
        echo "<td>$firstName</td>";
        echo "<td>$lastName</td>";
        echo "<td>$email</td>";
        echo "<a href='customerdetails.php?customernumber={$customerNumber}' class='btn btn-primary'>Zie details</a>";
        echo "</tr>";
    }
    ?>
</tbody>

<li><a href="adminpanel.php">Ga terug</a></li>