<?php
session_start();
session_unset();
session_destroy();
// Bij het uitloggen worde de session gestopt om het e-mailadres daarvan niet meer te gebruiken

header("Location: ../view/login.php");
