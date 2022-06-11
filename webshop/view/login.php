<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Login</title>
=======
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Account</title>
>>>>>>> 54-frontend-admin-panel
</head>

<body>
    <h1 class="text-center">Login - Premaz Webshop</h1>
    <form action="../includes/login.inc.php" method="post">
        <table class="table table-hover table-bordered">
            <tr>
                <th>Email</th>
                <td><input type="text" name="username" class="form-control" required></td>
            </tr>

            <tr>
<<<<<<< HEAD
                <th>Wachtwoord</th>
                <td><input type="password" name="password" required></td>
=======
                <th>Password</th>
                <td><input type="password" name="password" class="form-control" required></td>
>>>>>>> 54-frontend-admin-panel
            </tr>

            <tr>
                <td>
<<<<<<< HEAD
                    <input type="submit" name="submit" value="Login">
                    <a href="signup.php" value="signup">Registeren</a>
                    <a href="forgotPassword.php" value="password">Forgot Password</a>
=======
                    <input type="submit" name="submit" value="Login" class="btn btn-primary">
                    <a href="signup.php" value="signup" class="btn btn-secondary">Signup</a>
                    <a href="forgotPassword.php" value="password" class="btn btn-success">Forgot Password</a>
>>>>>>> 54-frontend-admin-panel
                </td>
            </tr>
        </table>
    </form>
</body>

</html>