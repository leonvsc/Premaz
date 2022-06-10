<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1 style="text-align: center">Login - Premaz Webshop</h1>
    <form action="../includes/login.inc.php" method="post">
        <table>
            <tr>
                <th>Email</th>
                <td><input type="text" name="username" required></td>
            </tr>

            <tr>
                <th>Wachtwoord</th>
                <td><input type="password" name="password" required></td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="submit" value="Login">
                    <a href="signup.php" value="signup">Registeren</a>
                    <a href="forgotPassword.php" value="password">Forgot Password</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>