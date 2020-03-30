<?php 
    require("./admin_required.php");
    require("./connexion_bdd.php");

    // preparation de la requete pour compter le nombre de places restantes dans ma table 
    $query = 'SELECT COUNT (*) FROM `user_data` WHERE `id_formation`= ?';
    $req = mysqli_prepare($base, $query);

    if (mysqli_start_execute($req)) {
        // verif au'il y a bien des resultats

        
    }
?>