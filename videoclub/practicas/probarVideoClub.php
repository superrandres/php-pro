<?php

include '../models/videoclub.php';

$vc = new videoclub("La Eliana Video");


//voy a incluir unos cuantos soportes de prueba

$vc->incluir_juego("Final Fantasy", 2.5, "Playstation",1,1);

$vc->incluir_juego("GP Motoracer", 3, "Playstation II",1,2);

$vc->incluir_dvd("Los Otros", 4.5, "Inglés y español","16:9");

$vc->incluir_dvd("Ciudad de Diós", 3, "Portugués, inglés y español","16:9");

$vc->incluir_dvd("Los Picapiedra", 3, "Español","16:9");

$vc->incluir_blue_ray("Los Otros", 4.5, "115 minutos");

$vc->incluir_blue_ray("El nombre de la Rosa", 1.5, "140 minutos");


//listo los productos

$vc->listar_productos();


//voy a crear algunos socios

$vc->incluir_socio("José Fuentes");

$vc->incluir_socio("Pedro García",2);


$vc->alquila_a_socio(1,2);

$vc->alquila_a_socio(1,3);

//alquilo otra vez el soporte 2 al socio 1.

// no debe dejarme porque ya lo tiene alquilado

$vc->alquila_a_socio(1,2);

//alquilo el soporte 6 al socio 1.

//no se puede porque el socio 1 tiene 2 alquileres como máximo

$vc->alquila_a_socio(1,6);


//listo los socios

$vc->listar_socios();
