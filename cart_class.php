<?php
include_once('product_class.php');
/**
 * Carrito para mantener los datos de articulos, asi como
 * las cantidades por todos y cada uno de los mismos
 * Class cart
 */

class cart
{
    /**
     * @var $productos array Array de objetos por cada producto
     */
    var $productos;
    var $total;

    function productos(){
        $this->total = 0;
        $this->productos = array();
    }

    function add_product($price = 0, $quantity = 0, $name = ''){
        $this->productos[] = new product($price, $quantity, $name);
    }

    function get_total_products(){
        $total = 0;
        foreach($this->productos as $item){
            $total += $item->price;
        }
        return $total;
    }
}