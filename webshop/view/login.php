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
    <title>Account</title>
</head>

<body>
    <?php 
    include_once "header.php";
    ?>
    <h1 class="text-center">Login - Premaz Webshop</h1>
    <form action="../includes/login.inc.php" method="post">
        <table class="table table-hover table-bordered">
            <tr>
                <th>Email</th>
                <td><input type="text" name="username" class="form-control" required></td>
            </tr>

            <tr>
                <th>Password</th>
                <td><input type="password" name="password" class="form-control" required></td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="submit" value="Login" class="btn btn-primary">
                    <a href="signup.php" value="signup" class="btn btn-secondary">Signup</a>
                </td>
            </tr>
        </table>
    </form>
    <?php 
    include_once "footer.php";
    ?>
</body>

</html>