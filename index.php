<?php include_once('cart_class.php') ?>

<html>
<head>
    <title>Carrito de compras</title>
    <script src="js/jquery-3.1.0.min.js"></script>
</head>
<body>
    <h1>Hello World!</h1>
    <?php
    $cart = new cart();
    var_dump($cart);
    echo 'test';
    ?>
<h2>EL gallo de Baez</h2>
</body>
</html>