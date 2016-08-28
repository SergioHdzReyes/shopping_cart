<?php
include_once('product_class.php');
/**
 * Carrito para mantener los datos de articulos, asi como
 * las cantidades por todos y cada uno de los mismos
 * Class cart
 */

class Cart
{
    /**
     * @var $productos array Array de objetos por cada producto
     */
    var $productos;
    /**
     * @var $total int Obtiene total de poductos
     */
    var $total;

    /**
     * Cart constructor.
     */
    function cart(){
        $this->total = 0;
        $this->productos = array();
    }

    /**
     * @param int $price
     * @param int $quantity
     * @param string $name
     * @param string $code
     */
    function add_product($price = 0, $quantity = 0, $name = '', $code = ''){
        $this->productos[] = new Product($price, $quantity, $name, $code);
    }

    /**
     * @return int
     */
    function get_total_products(){
        $total = 0;
        foreach($this->productos as $item){
            $total += $item->price;
        }
        return $total;
    }
}