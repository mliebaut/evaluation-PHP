<?php 
    require("./admin_required.php");
    require("./connexion_bdd.php");

    // preparation de la requete pour envoyer ms variables similaire a mysql
    $query = 'SELECT id_user,nom,prenom,nationalite,chemin_photo,id_formation FROM user_data';
    $req = mysqli_prepare($base, $query);
    $stagiaires = array();
    // executer la requete
    if (mysqli_stmt_execute($req))
    {
        // verif qu'il y a bien des resultats
        mysqli_stmt_bind_result($req, $id_user, $nom, $prenom, $nationalite, $chemin_photo, $id_formation);
    
        while (mysqli_stmt_fetch($req)) {
            $stagiaires[] = array(
                "id_user" => $id_user,
                "nom" => $nom,
                "prenom" => $prenom,
                "nationalite" => $nationalite,
                "chemin_photo" => $chemin_photo,
                "id_formation" => $id_formation
            );
        }
    }
    else {
        header("Location: ./login.php");
    }

?>