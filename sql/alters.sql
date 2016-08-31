/**
  Sergio Hernandez
  Se creo la tabla productos
 */

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_product` varchar(150) DEFAULT NULL,
  `short_name` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla de productos para la tienda en linea'