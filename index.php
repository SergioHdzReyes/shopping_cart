<?php include_once('cart_class.php') ?>

<html>
<head>
    <title>Carrito de compras</title>
</head>
<body>
    <h1>Hello World!</h1>
    <?php
    $cart = new cart();
    var_dump($cart);
    echo 'test';
    ?>
</body>
</html>