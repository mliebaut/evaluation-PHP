<?php 
    require("./admin_required.php");
    require("./connexion_bdd.php");
    require("./session.php");

    var_dump($_POST);

    $nom = htmlspecialchars($_POST["name"]);
    $prenom =  htmlspecialchars($_POST["surname"]);
    $nationalite =  htmlspecialchars($_POST["nationalite"]);
    $photo =  htmlspecialchars($_POST["photo"]);
    $formations = htmlspecialchars($_POST["formations"]);
    $id_user = htmlspecialchars($_POST["id_user"]);

        // preparation de la requete pour envoyer ms variables similaire a mysql
        $query = 'UPDATE `user_data` SET `nom`=?,`prenom`=?,`nationalite`=?,`chemin_photo`=?,`id_formation`=? WHERE `id_user`=?';
        $req = mysqli_prepare($base, $query);
        // associer les points d'interrogation de la requete a mes variables
        mysqli_stmt_bind_param($req, 'ssssii', $nom, $prenom, $nationalite, $photo, $formations, $id_user);
        // executer la requete
        if (mysqli_stmt_execute($req)) {
            header("Location: ./index.php");
        }
        else {
            header("Location: ./update_stagiaire.php?message=1");
        };
?>