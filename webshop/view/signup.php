<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
</head>

<body>
    <h1 style="text-align: center">Registreren - Premaz Webshop</h1>
    <form action="../includes/signup.inc.php" method="post">
        <table>
            <tr>
                <th>Voornaam</th>
                <td><input type="text" name="firstname" id="firstname" required></td>
            </tr>

            <tr>
                <th>Achternaam</th>
                <td><input type="text" name="lastname" id="lastname" required></td>
            </tr>

            <tr>
                <th>Email</th>
                <td><input type="text" id="email" name="email" required></td>
            </tr>

            <tr>
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
            </tr>

            <tr>
                <th>Land</th>
                <td>
                    <select name="country" id="country" required>
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
                    <input type="submit" value="Signup" id="signup" name="submit">
                    <a href="login.php" class="">Ga terug naar Login</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>