<?php
    session_start();
    unset($_SESSION["CORREO"]);
    unset($_SESSION["PASSWORD"]);
    session_destroy();
    header("Location: login.php");
?>