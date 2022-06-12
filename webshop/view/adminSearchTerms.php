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

require_once "../controller/searchController.php";

$controller = new searchController();
$searches = $controller->readAll();


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
    <title>Admin zoekopdrachten</title>
</head>

<body>
    <?php
    include_once "header.php";
    ?>

    <div class="margin-left margin-right">
        <h1>Zoekresultaten</h1>
        <tbody>
            <?php
            foreach ($searches as $search) {
                $searchTerm = $search->getSearchTerm();

                echo "<br>";
                echo "<tr class='margin-left'>";
                echo "<td class='list-group-item col-1'>$searchTerm</td>";
                echo "<form action='adminSearchTerms.php' method='post'>";
                echo "<td class='list-group-item col-1'><input type='submit' name='submit' value='Delete'></td>";
                echo "</form>";
                echo "</tr>";
            }

            if (isset($_POST["submit"])) {
                $controller->delete($search->getSearchTerm());
                header("Refresh:0");
            }
            ?>
        </tbody>


        <a href="adminpanel.php" class="btn" style="margin-top: 10px;">Go back</a>
    </div>
    <?php
    include_once "footer.php";
    ?>
</body>

</html>