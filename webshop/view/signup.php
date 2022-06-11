<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Registreren</title>
</head>

<body>
    <h1 style="text-align: center">Registreren - Premaz Webshop</h1>
=======
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Signup</title>
</head>

<body>
    <h1 class="text-center">Signup - Premaz Webshop</h1>
>>>>>>> 54-frontend-admin-panel
    <form action="../includes/signup.inc.php" method="post">
        <table class="table table-hover table-bordered">
            <tr>
<<<<<<< HEAD
                <th>Voornaam</th>
                <td><input type="text" name="firstname" id="firstname" required></td>
            </tr>

            <tr>
                <th>Achternaam</th>
                <td><input type="text" name="lastname" id="lastname" required></td>
=======
                <th>First name</th>
                <td><input type="text" name="firstname" id="firstname" class="form-control" required></td>
            </tr>

            <tr>
                <th>Last name</th>
                <td><input type="text" name="lastname" id="lastname" class="form-control" required></td>
>>>>>>> 54-frontend-admin-panel
            </tr>

            <tr>
                <th>Email</th>
                <td><input type="text" id="email" name="email" class="form-control" required></td>
            </tr>

            <tr>
<<<<<<< HEAD
                <th>Telefoonnummer</th>
                <td><input type="text" id="phonenumber" name="phonenumber" placeholder="0612345678" required></td>
            </tr>

            <tr>
                <th>Wachtwoord</th>
                <td><input type="password" id="password" name="password" required></td>
            </tr>

            <tr>
                <th>Herhaal wachtwoord</th>
                <td><input type="password" id="repeat-password" name="repeat-password" required></td>
            </tr>

            <tr>
                <th>Straat</th>
                <td><input type="text" id="street" name="street" required></td>
            </tr>

            <tr>
                <th>Huisnummer</th>
                <td><input type="text" id="house-number" name="house-number" required></td>
            </tr>

            <tr>
                <th>Postcode</th>
                <td><input type="text" id="postal-code" name="postal-code" placeholder="1234AA" maxlength="6" required></td>
            </tr>

            <tr>
                <th>Plaats</th>
                <td><input type="text" id="city" name="city" required></td>
=======
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
                <td><input type="text" id="house-number" name="house-number" class="form-control" required></td>
            </tr>

            <tr>
                <th>Postal code</th>
                <td><input type="text" id="postal-code" name="postal-code" class="form-control" required></td>
            </tr>

            <tr>
                <th>City</th>
                <td><input type="text" id="city" name="city" class="form-control" required></td>
>>>>>>> 54-frontend-admin-panel
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
<<<<<<< HEAD
                    <input type="submit" value="Signup" id="signup" name="submit">
                    <a href="login.php" class="">Ga terug naar Login</a>
=======
                    <input type="submit" value="Signup" id="signup" name="submit" class="btn btn-primary">
                    <a href="login.php" class="btn btn-secondary">Go back to Login</a>
>>>>>>> 54-frontend-admin-panel
                </td>
            </tr>
        </table>
    </form>
</body>

</html>