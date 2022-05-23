<?php
session_start();

if (isset($_SESSION["email"])) {
?>
    <li><a href="#"><?php echo $_SESSION["email"]; ?></a></li>
    <li><a href="../includes/logout.inc.php">LOGOUT</a></li>
<?php
} else {
?>
    <li><a href="signup.php">SIGN UP</a></li>
    <li><a href="login.php">Login</a></li>
<?php
}

?>


<h1> hi <?php echo $_SESSION["email"] ?> </h1>