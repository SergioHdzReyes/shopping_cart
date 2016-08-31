<?php

/**
 * Clase que mantendra la informaciòn de un producto
 * Class product
 */
class Product
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
     * @var $code string Còdigo del producto
     */
    var $code;

    /**
     * Constructor para añadir un nuevo producto.
     * @param int $price
     * @param int $quantity
     * @param string $name
     * @param string $code
     */
    function product($price = 0, $quantity = 0, $name = '', $code = ''){
        $this->price = $price;
        $this->quantity = $quantity;
        $this->name = $name;
        $this->code = $code;
    }
}