<?php 
    require("./connexion_bdd.php");
    require("./session.php");

    $login = htmlspecialchars($_POST["login"]);
    $password =  htmlspecialchars($_POST["password"]);

        // preparation de la requete pour envoyer ms variables similaire a mysql
        $query = 'SELECT id,login,password FROM user WHERE login=? AND password=?';
        $req = mysqli_prepare($base, $query);
        // associer les points d'interrogation de la requete a mes variables
        mysqli_stmt_bind_param($req, 'ss', $login, $password);
        // executer la requete
        if (mysqli_stmt_execute($req))
        {
            // verif qu'il y a bien des resultats
            mysqli_stmt_bind_result($req, $id, $log, $pass);

            if (mysqli_stmt_fetch($req)) {
                $_SESSION['login'] = TRUE;
                header("Location: ./index.php");
            }
            else {
                header("Location: ./login.php");
            }
        }
        else {
            header("Location: ./login.php");
        }
?>