<?php include_once('cart_class.php') ?>

<html>
<head>
    <title>Carrito de compras</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

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
    $cart = new cart();
    var_dump($cart);
    echo 'test';
    ?>

<h2>EL gallo de Baez</h2>
</body>
</html>