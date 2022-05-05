<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body>
    <h1 style="text-align: center">Signup - Premaz Webshop</h1>
    <form action="../includes/signup.inc.php" method="post">
        <table>
            <tr>
                <th>First name</th>
                <td><input type="text" name="firstname" id="firstname" required></td>
            </tr>

            <tr>
                <th>Last name</th>
                <td><input type="text" name="lastname" id="lastname" required></td>
            </tr>

            <tr>
                <th>Email</th>
                <td><input type="text" id="email" name="username" required></td>
            </tr>

            <tr>
                <th>Password</th>
                <td><input type="password" id="password" name="password" required></td>
            </tr>

            <tr>
                <th>Repeat Password</th>
                <td><input type="password" id="repeat-password" name="repeat-password" required></td>
            </tr>

            <p id="error"></p>

            <tr>
                <td>
                    <input type="submit" value="Signup" id="signup">
                    <a href="login.php" class="">Go back to Login</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>