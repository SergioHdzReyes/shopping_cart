<?php
error_reporting(E_ALL);
include_once('includes/cart_class.php')
?>

<html>
<head>
    <title>Carrito de compras</title>
</head>
<body>
    <h1>Hello World!</h1>
    <?php
    $cart = new Cart();
    $cart->add_product(34.5, 5, 'Pantalon Mezclilla');
    var_dump($cart);
    ?>
<h2>EL gallo de Baez</h2>
</body>
</html>