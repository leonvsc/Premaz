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
    <title>Signup</title>
</head>

<body>
    <?php 
    include_once "header.php";
    ?>
    <h1 class="text-center">Signup - Premaz Webshop</h1>
    <form action="../includes/signup.inc.php" method="post">
        <table class="table table-hover table-bordered">
            <tr>
                <th>First name</th>
                <td><input type="text" name="firstname" id="firstname" class="form-control" required></td>
            </tr>

            <tr>
                <th>Last name</th>
                <td><input type="text" name="lastname" id="lastname" class="form-control" required></td>
            </tr>

            <tr>
                <th>Email</th>
                <td><input type="text" id="email" name="email" class="form-control" required></td>
            </tr>

            <tr>
                <th>Phonenumber</th>
                <td><input type="text" id="phonenumber" name="phonenumber" placeholder="0612345678" class="form-control" required></td>
            </tr>

            <tr>
                <th>Password</th>
                <td><input type="password" id="password" name="password" class="form-control" required></td>
            </tr>

            <tr>
                <th>Repeat Password</th>
                <td><input type="password" id="repeat-password" name="repeat-password" class="form-control" required></td>
            </tr>

            <tr>
                <th>Street</th>
                <td><input type="text" id="street" name="street" class="form-control" required></td>
            </tr>

            <tr>
                <th>House number</th>
                <td><input type="text" id="house-number" name="house-number" class="form-control" maxlength="6" required></td>
            </tr>

            <tr>
                <th>Postal code</th>
                <td><input type="text" id="postal-code" name="postal-code" class="form-control" required></td>
            </tr>

            <tr>
                <th>City</th>
                <td><input type="text" id="city" name="city" placeholder="1234AB" class="form-control" required></td>
            </tr>

            <tr>
                <th>Land</th>
                <td>
                    <select name="country" id="country" class="form-control" required>
                        <option value="Nederland">Nederland</option>
                        <option value="Belgie">Belgie</option>
                        <option value="Duitsland">Duitsland</option>
                        <option value="Luxemburg">Luxemburg</option>
                    </select>
                </td>
            </tr>

            <p id="error"></p>

            <tr>
                <td>
                    <input type="submit" value="Signup" id="signup" name="submit" class="btn btn-primary">
                    <a href="login.php" class="btn btn-secondary">Go back to Login</a>
                </td>
            </tr>
        </table>
    </form>
    <?php 
    include_once "footer.php";
    ?>
</body>

</html>