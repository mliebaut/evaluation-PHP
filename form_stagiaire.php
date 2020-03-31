<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription stagiaire</title>
</head>
<body>
    <h1>CREATION STAGIAIRE</h1>
    <?php 
        require("./admin_required.php");
        require("./menu.php");
        require("./fonctions_verif_places.php");
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
                $places_total = count_places_total($formation['id']);
                $places_picked =  count_places_picked($formation['id']);
                if ($places_total - $places_picked > 0) {
                    echo '<option value="', $formation['id'], '">', $formation['libelle'], ' (places restantes : ', $places_total - $places_picked,'/',$places_total,')</option>';
                }
            }
        ?>
        </select>
        <br>
        <button type="submit">Creer</button>

    </form>
</body>
</html>