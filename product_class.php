<?php

/**
 * Clase que mantendra la informaciòn de un producto
 * Class product
 */
class product
{
    /**
     * @var $price int Precio del producto
     */
    var $price;
    /**
     * @var $quantity int Cantidad de productos
     */
    var $quantity;
    /**
     * @var $name string Nombre del producto
     */
    var $name;

    /**
     * Constructor para añadir un nuevo producto.
     * @param int $price
     * @param int $quantity
     * @param string $name
     */
    function product($price = 0, $quantity = 0, $name = ''){
        $this->price = $price;
        $this->quantity = $quantity;
        $this->name = $name;
    }
}