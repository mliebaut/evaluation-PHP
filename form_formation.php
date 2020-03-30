<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de creation formation</title>
</head>
<body>
    <h1>CREATION FORMATION</h1>
    <?php 
        require("./admin_required.php");
        require("./menu.php");
    ?>

    <form action="./create_formation.php" method="post">
        <label for="libelle" name="libelle">Nom: </label><input name="libelle" type="text">
        <br>
        <label for="date_debut">Date debut: </label><input type="date" name="date_debut">
        <label for="date_fin">Date fin: </label><input type="date" name="date_fin">
        <br>
        <label for="places">Places: </label><input name="places" type="text">
        <br>
        <button type="submit">Creer</button>
    </form>

</body>
</html>