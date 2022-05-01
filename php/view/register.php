<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1 style="text-align: center">Register - Premaz Webshop</h1>
    <form action="" method="post">
        <table class="">
            <tr>
                <th>First name</th>
                <td><input type="text" name="firstname" id="fn" class="" id="firstname" required></td>
            </tr>

            <tr>
                <th>Last name</th>
                <td><input type="text" name="lastname" id="ln" class="" required></td>
            </tr>

            <tr>
                <th>Email</th>
                <td><input type="text" id="email" name="username" class="" required></td>
            </tr>

            <tr>
                <th>Password</th>
                <td><input type="password" id="password" name="password" class="" required></td>
            </tr>

            <p id="error"></p>

            <tr>
                <td>
                    <input type="submit" value="Register" class="" id="register">
                    <a href="login.php" class="">Go back to Login</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>