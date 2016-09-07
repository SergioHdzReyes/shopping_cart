<?php
/**
 * Created by PhpStorm.
 * User: fredy
 * Date: 01/09/2016
 * Time: 12:11 AM
 */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ingresar</title>
    <meta name="viewport" content="width=device-width, initial-escale=1.0">
    <meta http-equiv="Content-Type" content="text/html ; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>

<div class="login-centered">
    <form method="POST" name="login" id="login">
        <div class="form-group">
            <label>Usuario</label>
            <input name="username" id="username" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label>Contraseña</label>
            <input name="password" id="password" class="form-control" type="text">
        </div>
        <div class="form-group">
            <input class="btn btn-primary boton-login" value="Ingresar" type="submit">
        </div>
    </form>
</div>

</body>
</html>

