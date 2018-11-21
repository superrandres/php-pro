<?php
// importamos la clase cliente

include '../models/cliente.php';

//instanciamos un par de objetos cliente 

$cliente1 = new cliente("Pepe", 1); 

$cliente2 = new cliente("Roberto", 564); 


//mostramos el número de cada cliente creado 

echo 'El identificador del cliente 1 es: ' . $cliente1->dame_numero() . '<br />';

echo 'El identificador del cliente 2 es: ' . $cliente2->dame_numero();