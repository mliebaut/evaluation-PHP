<?php 
    require('./session.php');
    if (!$_SESSION['login']) {
        header("Location: ./login.php");
    }
?>