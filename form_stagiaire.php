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
            <h1>CREATION STAGIAIRE</h1>
            <?php 
                require("./admin_required.php");
                require("./menu.php");
                require("./fonctions_verif_places.php");
            ?>
            <form class="form-example" action="./create_stagiaire.php" method="POST">
                <div class="form-group">
                    <label for="name">Nom : </label><input type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="surname">Prenom : </label><input type="text" name="surname">
                </div>
                <div class="form-group">
                    <label for="nationalites">Nationalite : </label>
                    <select name="nationalite" id="" placeholder="Choisissez">
                        <option value="fr">Francais(e)</option>
                        <option value="en">Anglais(e)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="photo">URL photo: </label><input type="text" name="photo">
                </div>
                <div class="form-group">
                    <label for="formation">Formations : </label>
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
                </div>
                <button class="btn btn-primary" type="submit">Creer</button>
            </form>
        </div>
    </div>
</body>
</html>