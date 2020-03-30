<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php 
        require("./disconnect.php");
    ?>
    <form action="./verif_login.php" method="post">
        <label for="login" name="login">login: </label><input name="login" type="text">
        <br>
        <label for="login" name="password">password: </label><input name="password" type="password">
        <br>
        <button type="submit">connect</button>
    </form>
</body>
</html>