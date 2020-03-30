<?php 
    require("./admin_required.php");
    require("./connexion_bdd.php");
    require("./session.php");

    $nom = htmlspecialchars($_POST["name"]);
    $prenom =  htmlspecialchars($_POST["surname"]);
    $nationalite =  htmlspecialchars($_POST["nationalite"]);
    $photo =  htmlspecialchars($_POST["photo"]);
    $formations = htmlspecialchars($_POST["formations"]);

        // preparation de la requete pour envoyer ms variables similaire a mysql
        $query = 'INSERT INTO `user_data`(`nom`, `prenom`, `nationalite`, `chemin_photo`, `id_formation`) VALUES (?,?,?,?,?)';
        $req = mysqli_prepare($base, $query);
        // associer les points d'interrogation de la requete a mes variables
        mysqli_stmt_bind_param($req, 'ssssi', $nom, $prenom, $nationalite, $photo, $formations);
        // executer la requete
        if (mysqli_stmt_execute($req))
        {
            header("Location: ./index.php");
        }
        else {
            header("Location: ./login.php");
        }
?>