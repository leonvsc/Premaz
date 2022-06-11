<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: ../view/login.php");
} elseif ($_SESSION["role"] != "Admin") {
    header("Location: ../view/index.php"); // TODO: Redirect to own account page or something else?
}

require_once "../controller/searchController.php";

$controller = new searchController();
$searches = $controller->readAll();

var_dump($searches);


?>

<h1>Zoekresultaten</h1>

<thead>
    <tr>
        <td>Zoekresultaten</td>
    </tr>
</thead>

<tbody>
    <?php
    foreach ($searches as $search) {
        $searchTerm = $search->getSearchTerm();

        echo "<br>";
        echo "<tr>";
        echo "<td>$searchTerm</td>";
        echo "<form action='adminSearchTerms.php' method='post'>";
        echo "<td><input type='submit' name='submit' value='Delete'></td>";
        echo "</form>";
        echo "</tr>";
    }

    if (isset($_POST["submit"])) {
        $controller->delete($search->getSearchTerm());
        header("Location: adminSearchTerms.php");
    }
    ?>
</tbody>


<li><a href="adminpanel.php">Go back</a></li>