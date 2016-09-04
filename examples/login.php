<?php
/**
 * Created by PhpStorm.
 * User: fredy
 * Date: 01/09/2016
 * Time: 12:11 AM
 */
?>

<html>
<head>
    <title>Ingresar</title>
    <meta name="viewport" content="width=device-width, initial-escale=1.0">
    <meta http-equiv="Content-Type" content="text/html ; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">

</head>

<body>

<div class="jumbotron login">
    <form method="POST" name="login" id="login">
        <label>Usuario</label>
        <input type="text" name="username" id="username" class="form-control">
        <label>Contraseña</label>
        <input type="text" name="password" id="password" class="form-control">
        <input type="submit" class="btn btn-primary" value="Ingresar">
    </form>
</div>
</body>
</html>

