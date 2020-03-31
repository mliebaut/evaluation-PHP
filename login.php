<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="h-100">
    <?php 
        require("./disconnect.php");
    ?>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <form class="form-example" action="./verif_login.php" method="post">
                    <div class="form-group">
                        <label for="login" name="login">login: </label><input class="form-control" name="login" type="text">
                    </div>
                    <div class="form-group">
                        <label for="login" name="password">password: </label><input class="form-control" name="password" type="password">
                    </div>
                    <button type="submit" class="btn btn-primary">connect</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>