<?php
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "formulaire_inscription";

$base = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, 3308) or die("Erreur de connexion".mysqli_error());


?>