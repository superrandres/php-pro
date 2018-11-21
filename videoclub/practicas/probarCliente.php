<?php
//instanciamos un par de objetos cliente

$cliente1 = new cliente("Pepe", 1);

$cliente2 = new cliente("Roberto", 564);


//mostramos el numero de cada cliente creado

echo "El identificador del cliente 1 es: " . $cliente1->dame_numero();

echo "<br>El identificador del cliente 2 es: " . $cliente2->dame_numero();


//instancio algunos soportes

$soporte1 = new blue_ray("Los Otros", 1, 3.5, "115 minutos");

$soporte2 = new juego("Final Fantasy", 2, 2.5, "Playstation",1,1);

$soporte3 = new dvd("Los Intocables", 3, 3, "Inglés y español","16:9");

$soporte4 = new dvd("El Imperio Contraataca", 4, 3, "Inglés y español","16:9");


//alquilo algunos soportes

$cliente1->alquila($soporte1);

$cliente1->alquila($soporte2);

$cliente1->alquila($soporte3);


//voy a intentar alquilar de nuevo un soporte que ya tiene alquilado

$cliente1->alquila($soporte1);


//el cliente tiene 3 soportes en alquiler como máximo

//este soporte no lo va a poder alquilar

$cliente1->alquila($soporte4);


//este soporte no lo tiene alquilado

$cliente1->devuelve(4);

//devuelvo un soporte que sí que tiene alquilado

$cliente1->devuelve(2);

//alquilo otro soporte

$cliente1->alquila($soporte4);


//listo los elementos alquilados

$cliente1->lista_alquileres(); 
