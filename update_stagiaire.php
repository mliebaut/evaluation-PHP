<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Formulaire d'inscription stagiaire</title>
</head>
<body class="h-100">
    <div class="row h-100 justify-content-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h1>EDITION STAGIAIRE</h1>
            <?php 
                require("./admin_required.php");
                require("./menu.php");
                if (isset($_GET["message"])) {
                    echo "Quelque chose n'a pas fonctionne :(";
                }
            ?>
            <form class="form-example" action="./update_req_stagiaires.php" method="POST">
                <div class="form-group">
                    <label for="name">Nom : </label><input default="<?= $_GET["nom"];?>" value="<?= $_GET["nom"];?>" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="surname">Prenom : </label><input default="<?= $_GET["prenom"]; ?>" value="<?= $_GET["prenom"]; ?>" type="text" name="surname">
                </div>
                <div class="form-group">
                    <select name="nationalite" default="<?= $_GET["nationalite"]; ?>" value="" default="<?= $_GET["nationalite"]; ?>">
                        <option value="fr">Francais(e)</option>
                        <option value="en">Anglais(e)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="photo">URL photo : </label><input type="text" name="photo" default="<?= $_GET["chemin_photo"]; ?>" value="<?= $_GET["chemin_photo"]; ?>">
                </div>
                <div class="form-group">
                    <label for="formations">Formations :</label>
                    <select name="formations" default="<?= $_GET["id_formation"]; ?>" value="<?= $_GET["id_formation"]; ?>">
                    <?php
                        require("./get_formations.php");
                        foreach($formations as $formation) {
                            echo '<option value="', $formation['id'], '">', $formation['libelle'], '</option>';
                        }
                    ?>
                    </select>
                </div>
                <input type="number" hidden name="id_user" value="<?= $_GET["id_user"] ?>">
                <button class="btn btn-primary" type="submit">Modifier</button>
            </form>
        </div>
    </div>
</body>
</html>