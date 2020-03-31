<?php 
    require("./admin_required.php");

    function count_places_picked($id_formation) {
        require("./connexion_bdd.php");
        // preparation de la requete pour compter le nombre de places restantes dans ma table 
        $query = 'SELECT COUNT(*) FROM `user_data` WHERE `id_formation`= ?';
        $req = mysqli_prepare($base, $query);
        mysqli_stmt_bind_param($req, 'i', $id_formation);
        
        if (!mysqli_stmt_execute($req))
        {
            header('Location: ./login.php');
        }
        // recuperation du resultat
        mysqli_stmt_bind_result($req, $nombre_places);
        mysqli_stmt_fetch($req);

        return($nombre_places);
    }

    function count_places_total($id_formation) {
        require("./connexion_bdd.php");
        // preparation de la requete pour compter le nombre de places choisies
        $query = 'SELECT `places` FROM `formation` WHERE `id`= ?';
        $req = mysqli_prepare($base, $query);
        mysqli_stmt_bind_param($req, 'i', $id_formation);

        if (!mysqli_stmt_execute($req))
        {
            header('Location: ./login.php');
        }
        // recuperation du resultat
        mysqli_stmt_bind_result($req, $nombre_places);
        mysqli_stmt_fetch($req);

        return($nombre_places);
    }
?>