<?php
include '../models/soporte.php';
include '../models/juego.php';
include '../models/blue_ray.php';
include '../models/dvd.php';

$mijuego = new juego("Final Fantasy", 21, 2.5, "Playstation",1,1);
$mijuego->imprime_caracteristicas();
//esta línea daría un error porque no se permite acceder a un atributo private del objeto
//echo "<br>Jugadores: " . $mijuego->min_num_jugadores;
//habria que crear un método para que acceda a los atributos private
$mijuego->imprime_jugadores_posibles();
echo "<br/>Tipo de clase Juego: " . $mijuego->es_hijo_o_padre() . "<br/>";

$miblueray = new blue_ray("Mi BLue Ray", 35565, 15.99, "59:36");
$miblueray->imprime_caracteristicas();
echo "<br/>Tipo de clase BlueRay: " . $miblueray->es_hijo_o_padre() . "<br/>";

$midvd = new dvd("Mi DVD de Peli", 389655, 9.99, "45:36", "es, en, pr");
$midvd->imprime_caracteristicas();
echo "<br/>Tipo de clase DVD: " . $midvd->es_hijo_o_padre() . "<br/>";

$misoporte = new soporte("Mi Soporte base", 389655, 1.99);
$misoporte->imprime_caracteristicas();
echo "<br/>Tipo de clase Soporte: " . $misoporte->es_hijo_o_padre() . "<br/>";
