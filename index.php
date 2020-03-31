<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Page administrateur</title>
</head>
<body>
    <div class="container">
        <H1>PAGE ADMINISTRATEUR</H1>
        <?php 
            require('./admin_required.php');
            require('./menu.php');
        ?>
        <H2>Liste Stagiaires</H2>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">id_user</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">nationalite</th>
                <th scope="col">chemin_photo</th>
                <th scope="col">id_formation</th>
                <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require("./get_stagiaires.php");
                foreach($stagiaires as $stagiaire) {
                    echo
                        '<tr>',
                        '<td scope="row">', $stagiaire['id_user'], '</td>',
                        '<td>', $stagiaire['nom'], '</td>',
                        '<td>', $stagiaire['prenom'], '</td>',
                        '<td>', $stagiaire['nationalite'], '</td>',
                        '<td> <img src="', $stagiaire['chemin_photo'], '" class="img-responsive" style="width: 50px"></img></td>',
                        '<td>', $stagiaire['id_formation'], '</td>',
                        '<td><a href="./update_stagiaire.php',
                            '?id_user=', $stagiaire['id_user'],
                            '&nom=', $stagiaire['nom'],
                            '&prenom=',$stagiaire['prenom'],
                            '&nationalite=',$stagiaire['nationalite'],
                            '&chemin_photo=',$stagiaire['chemin_photo'],
                            '&id_formation=',$stagiaire['id_formation'],
                            '">🖊️</a></td>',
                        '</tr>';
                }
                ?>
            </tbody>
        </table>
        <br>
        <H2>Liste formations</H2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">libelle</th>
                    <th scope="col">date_debut</th>
                    <th scope="col">date_fin</th>
                    <th scope="col">places</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require("./get_formations.php");
                    foreach($formations as $formation) {
                        echo
                            '<tr>',
                            '<td scope="row">', $formation['id'], '</td>',
                            '<td>', $formation['libelle'], '</td>',
                            '<td>', $formation['date_debut'], '</td>',
                            '<td>', $formation['date_fin'], '</td>',
                            '<td>', $formation['places'], '</td>',
                            '<td><a href="./delete_formation.php?id=', $formation['id'],'">🗑️</a></td>',
                            '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>