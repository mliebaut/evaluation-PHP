<?php
    require("./admin_required.php");
    require("./connexion_bdd.php");
    require("./session.php");

    $id = htmlspecialchars($_GET["id"]);

    // preparation de la requete pour envoyer ms variables similaire a mysql
    $query = 'DELETE FROM `formation` WHERE `id`=?';
    $req = mysqli_prepare($base, $query);
    // associer les points d'interrogation de la requete a mes variables
    mysqli_stmt_bind_param($req, 'i', $id);
    // executer la requete
    if (mysqli_stmt_execute($req))
    {
        header("Location: ./index.php");
    }
    else {
        header("Location: ./login.php");
    }

    header("Location: ./index.php");
?>