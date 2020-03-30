<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page administrateur</title>
</head>
<body>
    <H1>PAGE ADMINISTRATEUR</H1>
    <?php 
        require('./admin_required.php');
        require('./menu.php');
    ?>
    <H2>Liste Stagiaires</H2>
    <table>
    <thead>
        <tr>
            <th>id_user</th>
            <th>nom</th>
            <th>prenom</th>
            <th>nationalite</th>
            <th>chemin_photo</th>
            <th>id_formation</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            require("./get_stagiaires.php");
            foreach($stagiaires as $stagiaire) {
                echo
                    '<tr>',
                    '<td>', $stagiaire['id_user'], '</td>',
                    '<td>', $stagiaire['nom'], '</td>',
                    '<td>', $stagiaire['prenom'], '</td>',
                    '<td>', $stagiaire['nationalite'], '</td>',
                    '<td> <img src="', $stagiaire['chemin_photo'], '"></img></td>',
                    '<td>', $stagiaire['id_formation'], '</td>',
                    '<td><a href="./update_stagiaire.php?id=', $stagiaire['id_user'],'">🖊️</a></td>',
                    '</tr>';
                }
            ?>
        </tbody>
    </table>
    <br>
    <H2>Liste formations</H2>
    <table>
    <thead>
        <tr>
            <th>id</th>
            <th>libelle</th>
            <th>date_debut</th>
            <th>date_fin</th>
            <th>places</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            require("./get_formations.php");
            foreach($formations as $formation) {
                echo
                    '<tr>',
                    '<td>', $formation['id'], '</td>',
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
</body>
</html>