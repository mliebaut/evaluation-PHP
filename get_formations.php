<?php 
    require("./admin_required.php");
    require("./connexion_bdd.php");

    // preparation de la requete pour envoyer ms variables similaire a mysql
    $query = 'SELECT id,libelle,date_debut,date_fin,places FROM formation';
    $req = mysqli_prepare($base, $query);
    $formations = array();
    // executer la requete
    if (mysqli_stmt_execute($req))
    {
        // verif qu'il y a bien des resultats
        mysqli_stmt_bind_result($req, $id, $libelle, $date_debut, $date_fin, $places);
    
        while (mysqli_stmt_fetch($req)) {
            $formations[] = array(
                "id" => $id,
                "libelle" => $libelle,
                "date_debut" => $date_debut,
                "date_fin" => $date_fin,
                "places" => $places
            );
        }
    }
    else {
        header("Location: ./login.php");
    }

?>