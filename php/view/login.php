<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>

<body>
    <h1 style="text-align: center">Login - Premaz Webshop</h1>
    <form action="" method="post">
        <table class="">
            <tr>
                <th>Email</th>
                <td><input type="text" name="username" class="" required></td>
            </tr>

            <tr>
                <th>Password</th>
                <td><input type="password" name="password" class="" required></td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Login" class="">
                    <a href="register.php" value="register" class="">Register</a>
                    <a href="forgotPassword.php" value="password" class="">Forgot Password</a>
                </td>
            </tr>
        </table>
    </form>

    <?php
    echo $_POST['username'];
    echo $_POST['password'];
    ?>
</body>

</html>