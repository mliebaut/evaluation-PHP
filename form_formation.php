<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Formulaire de creation formation</title>
</head>
<body class="h-100">
    <div class="row h-100 justify-content-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h1>CREATION FORMATION</h1>
        <?php 
            require("./admin_required.php");
            require("./menu.php");
        ?>

            <form action="./create_formation.php" method="post">
                <div class="form-group">
                    <label for="libelle" name="libelle">Nom : </label><input name="libelle" type="text">
                </div>
                <div class="form-group">
                    <label for="date_debut">Date debut: </label><input type="date" name="date_debut">
                </div>
                <div class="form-group">
                    <label for="date_fin">Date fin: </label><input type="date" name="date_fin">
                </div>
                <div class="form-group">
                    <label for="places">Places: </label><input name="places" type="text">
                </div>
                <button class="btn btn-primary" type="submit">Creer</button>
            </form>
        </div>
    </div>


</body>
</html>