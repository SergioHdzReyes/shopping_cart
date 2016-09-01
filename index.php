<?php
error_reporting(E_ALL);
include_once('includes/cart_class.php')
?>

<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Carrito de compras</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Shopping Cart
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="">Inicio</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="">Contacto <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="">Ayuda<span class="caret"></span></a>
                    <ul class="dropdown-menu">

                    </ul>
                </li>

                <li><a href="">Carro de compras</a> </li>
            </ul>
        </div>
    </div>
</nav>
    <h1>Hello World!</h1>
    <?php
    $cart = new Cart();
    $cart->add_product(34.5, 5, 'Pantalon Mezclilla');
    var_dump($cart);
    ?>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>