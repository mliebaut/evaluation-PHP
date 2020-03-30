<?php 
    require('./session.php');
    if($_SESSION && $_SESSION["login"]) {
        $_SESSION["login"] = FALSE;
        header("Location: ./login.php");
    }
?>