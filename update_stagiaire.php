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
    ?>
    <form action="./create_stagiaire.php" method="POST">
        <label for="name">Nom: </label><input type="text" name="name">
        <br>
        <label for="surname">Prenom: </label><input type="text" name="surname">
        <br>
        <select name="nationalite" id="" placeholder="Choisissez">
            <option value="fr">Francais(e)</option>
            <option value="en">Anglais(e)</option>
        </select>
        <br>
        <label for="photo">url photo</label><input type="text" name="photo">
        <br>
        <select name="formations">
        <?php
            require("./get_formations.php");
            foreach($formations as $formation) {
                echo '<option value="', $formation['id'], '">', $formation['libelle'], '</option>';
            }
            
        ?>
        </select>
        <br>
        <button type="submit">Creer</button>

    </form>
</body>
</html>