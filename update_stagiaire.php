<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription stagiaire</title>
</head>
<body>
    <h1>EDITION STAGIAIRE</h1>
    <?php 
        require("./admin_required.php");
        require("./menu.php");
        if (isset($_GET["message"])) {
            echo "Quelque chose n'a pas fonctionne :(";
        }
    ?>
    <form action="./update_req_stagiaires.php" method="POST">
        <label for="name">Nom: </label><input default="<?= $_GET["nom"];?>" placeholder="<?= $_GET["nom"];?>" type="text" name="name">
        <br>
        <label for="surname">Prenom: </label><input default="<?= $_GET["prenom"]; ?>" placeholder="<?= $_GET["prenom"]; ?>" type="text" name="surname">
        <br>
        <select name="nationalite" default="<?= $_GET["nationalite"]; ?>" placeholder="" default="<?= $_GET["nationalite"]; ?>">
            <option value="fr">Francais(e)</option>
            <option value="en">Anglais(e)</option>
        </select>
        <br>
        <label for="photo">url photo</label><input type="text" name="photo" default="<?= $_GET["chemin_photo"]; ?>" placeholder="<?= $_GET["chemin_photo"]; ?>">
        <br>
        <select name="formations" default="<?= $_GET["id_formation"]; ?>" placeholder="<?= $_GET["id_formation"]; ?>">
        <?php
            require("./get_formations.php");
            foreach($formations as $formation) {
                echo '<option value="', $formation['id'], '">', $formation['libelle'], '</option>';
            }
        ?>
        </select>
        <br>
        <input type="number" hidden name="id_user" value="<?= $_GET["id_user"] ?>">
        <button type="submit">Modifier</button>

    </form>
</body>
</html>