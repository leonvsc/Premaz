<?php
session_start();

if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
    echo "<li><a href='account.php'>$email</a></li>";
    echo "<li><a href='../includes/logout.inc.php'>LOGOUT</a></li>";
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

$saStreet = $sa[0]->getStreet();
$saHouseNumber = $sa[0]->getHouseNumber();
$saPostalCode = $sa[0]->getPostalCode();
$saCity = $sa[0]->getCity();
$saCountry = $sa[0]->getCountry();

echo "<br>";
echo "<tr>";
echo "<td>$saStreet</td>";
echo "<td>$saHouseNumber</td>";
echo "<td>$saPostalCode</td>";
echo "<td>$saCity</td>";
echo "<td>$saCountry</td>";
echo "</tr>";
?>

<h2>Factuuradres</h2>
<thead>
    <tr>
        <td>Straat</td>
        <td>Huisnummer</td>
        <td>Postcode</td>
        <td>Plaats</td>
        <td>Land</td>
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
