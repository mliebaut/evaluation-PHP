<?php 
    require("./admin_required.php");
    require("./connexion_bdd.php");
    require("./session.php");

    $libelle = htmlspecialchars($_POST["libelle"]);
    $date_debut =  htmlspecialchars($_POST["date_debut"]);
    $date_fin =  htmlspecialchars($_POST["date_fin"]);
    $places =  htmlspecialchars($_POST["places"]);

    // preparation de la requete pour envoyer ms variables similaire a mysql
    $query = 'INSERT INTO `formation`(`libelle`, `date_debut`, `date_fin`, `places`) VALUES (?,?,?,?)';
    $req = mysqli_prepare($base, $query);
    // associer les points d'interrogation de la requete a mes variables
    mysqli_stmt_bind_param($req, 'sssi', $libelle, $date_debut, $date_fin, $places);
    // executer la requete
    if (mysqli_stmt_execute($req))
    {
        header("Location: ./index.php");
    }
    else {
        header("Location: ./login.php");
    }
?>